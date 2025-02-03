<?php
session_start();

if (isset($_SESSION["email"])) {
  header("location: index.php");
  exit;
}

//cria as variaveis que irão armazenar as informações dos inputs
$user_name = "";
$nome = "";
$email = "";
$password = "";
$confirm_password = "";
$fone = "";
$criada_em = "";


$nome_error = '';
$user_name_error = '';
$tel_error = '';
$email_error = '';
$password_error = ''; 
$confirm_password_error = '';
$error = false;

//Caso o metodo do formulario seja o POST, o php ira armazenar as informações dos inputs nas variaveis criadas acima ^ ;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_name = $_POST['user_name'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $fone = $_POST['fone'];


  // /**************** VALIDAÇÃO DO EMAIL ****************/
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = 'Formato de email invalido.';
    $error = true;
  }

  include 'data_bank/db.php'; //chama o banco de dados
  $dbConnection = getDatabaseConnection(); // cria a conexão com o banco de dados

  $statement = $dbConnection->prepare('SELECT id FROM users WHERE email = ?');

  // //Associa a variavel ao parametro criado no statement 
  $statement->bind_param("s", $email); //Associa a varial email do tipo string ao paramentro (?) do statement

  // //Executa o comando do statement
  $statement->execute();

  // //Checa se o email digitado ja existe no banco de dados
  $statement->store_result();
  if($statement->num_rows() > 0) { //Se a quantidade de rows retornados for maior doq 0, significa que o email ja esta cadastrado.
    $email_error = "Esse email ja esta cadastrado.";
    $error = true; 
  }

  // // //Limpa a variavel do statement, para que ela possa ser usada novamente no futuro
  $statement->close();

  /* VALIDAÇÃO DO NOME E DO APELIDO DE USUARIO */
  if(empty($nome)){
    $nome_error = 'Necessario digitar o seu nome.';
    $error = true;
  }
  if(empty($user_name)){
    $user_name_error = 'Necessario digitar o seu nome de usuario que ira aparecer para os outros.';
    $error = true;
  }

  $statement = $dbConnection->prepare('SELECT user_name FROM users WHERE user_name = ?');

  $statement->bind_param("s", $user_name); 
  $statement->execute();

  
  $statement->store_result();
  if($statement->num_rows() > 0) { 
    $user_name_error = "Esse apelido ja esta em uso.";
    $error = true; 
  }
  
  if(strlen($user_name) < 6) {
    $user_name_error = 'O apelido deve ter no minimo 6 caracteres.';
    $error = true;  
  }
  // // //Limpa a variavel do statement, para que ela possa ser usada novamente no futuro
  $statement->close();

  /*************** VALIDAÇÃO DA SENHA  ***************/
  if(strlen($password ) < 8) {
    $password_error = 'A senha deve ter no minimo 8 caracteres de tamanho!';
    $error = true;  
  }
  
  //*****************************************************************************************************************FAZER OS HANDLE DE ERRO */
  if($confirm_password != $password) {
    $confirm_password_error = "As senhas devem ser iguais.";
    $error = true;
  }

  if (!$error) {
    //faz a criptografia da senha
    $password = password_hash($password, PASSWORD_DEFAULT);
    $criada_em = date("Y-m-d H:i:s");

    $statement = $dbConnection->prepare(
      "INSERT INTO users (user_name, nome, email, password,fone, criada_em) " . "VALUES (?, ?, ?, ?, ?, ?)"
    );

    $statement->bind_param("ssssss", $user_name, $nome, $email, $password, $fone, $criada_em);

    $statement->execute();

    $id = $statement->insert_id;
    $statement->close();


    $_SESSION["id"] = $id;
    $_SESSION["user_name"] = $user_name;
    $_SESSION["nome"] = $nome;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["fone"] = $fone;
    $_SESSION["criada_em"] = $criada_em;

    header("location: index.php");
    exit;
  }
}


/******** CRIA A CONTA DO USUARIO ********/

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrar-se PokenFallen</title>

  <link rel="stylesheet" href="./styles/style.css" />
</head>

<body id="register-body">
  <section id="register-page">
    <div class="left-collumn"></div>

    <div class="rigth-collum">
      <div class="rigth-wrapper">
        <h1 class="bangers-regular">Criar sua conta</h1>
        <form method="post" class="register-form">
          <div class="inputs-wrapper register-user">
            <label for="email" class="register-label">E-mail*</label>
            <input
              value="<?= $email ?>"
              type="email"
              name="email"
              placeholder="E-mail" />
            <span class="error-message"><?= $email_error ?> </span>

          </div>

          <div class="inputs-wrapper register-user name_user">
            <label for="nome" class="register-label">Nome Completo*</label>
            <input
              value="<?= $nome ?>"
              type="text"
              name="nome"
              placeholder="Digite seu nome..." />
            <span class="error-message"><?= $nome_error ?></span>

          </div>

          <div class="inputs-wrapper register-user">
            <label for="user-name" class="register-label">Apelido do usuario*</label>
            <input
              value="<?= $user_name ?>"
              type="text"
              name="user_name"
              placeholder="Digite seu usuario" />
            <span class="error-message"><?= $user_name_error ?></span>

          </div>

          <div class="inputs-wrapper register-user">
            <label for="fone" class="register-label">Telefone</label>
            <input
              value="<?= $tel ?>"
              type="number"
              name="fone"
              placeholder="Sem simbolos e com dd" />
            <span class="error-message"><?= $tel_error ?></span>

          </div>

          <div class="inputs-wrapper register-password">
            <label for="email" class="register-label">Senha*</label>
            <input
              type="password"
              name="password"
              placeholder="Digite sua senha" />
            <span class="error-message"><?= $password_error ?></span>

          </div>
          <div class="inputs-wrapper confirm-password">
            <label for="confirm_password" class="register-label">Confirme a senha*</label>
            <input
              type="password"
              name="confirm_password"
              placeholder="Repita a senha" />
            <span class="error-message"><?= $confirm_password_error ?></span>
          </div>

          <button class="button-main-color" type="submit">
            register
          </button>
        </form>
        <a href="./login_page.php" class="span-form-info">Ja tem uma conta? <span>Fazer login</span>
        </a>
      </div>
    </div>
  </section>

  <script src="./script.js"></script>
</body>

</html>