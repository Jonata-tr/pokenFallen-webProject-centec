<?php
session_start();

if (isset($_SESSION['email'])) {
  header('location: /index.php');
}

$email = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email) || empty($password)) {
    $error = 'Email e senha não podem estar vazios.';
  }

  include './data_bank/db.php';
  $dbConnection = getDatabaseConnection();
  $statement = $dbConnection->prepare(
    'SELECT id, nome, user_name, fone, password, criada_em FROM users WHERE email = ?'
  );

  $statement->bind_param('s', $email);

  $statement->execute();

  $statement->bind_result($id, $nome, $user_name, $fone, $stored_password, $criada_em);

  if ($statement->fetch()) {
    if (password_verify($password, $stored_password)) {
      $_SESSION["id"] = $id;
      $_SESSION["user_name"] = $user_name;
      $_SESSION["nome"] = $nome;
      $_SESSION["email"] = $email;
      $_SESSION["password"] = $password;
      $_SESSION["fone"] = $fone;
      $_SESSION["criada_em"] = $criada_em;

      header("location: index.php");
      exit;

    } else {
      $statement->close();

      $error = 'Email ou senha estão invalidos';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PokenFallen - rpg</title>

  <link rel="stylesheet" href="./styles/style.css" />

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body id="login-body">
  <section id="login-page">
    <div class="login-logo">
      <img src="./assets/pokeball.png" alt="" style="width: 80px;">
      <h1 class="bangers-regular">Login</h1>
    </div>

    <?php if (!empty($error)) { ?>
      <div class="login_error_message">
        <strong><?= $error ?></strong>
      </div>
    <?php } ?>

    <form method="post" class="login-form">
      <div class="inputs-wrapper login-user">
        <label for="email" class="login-label">Usuario</label>
        <input type="email" name="email" placeholder="Digite seu usuario de entrada" value="<?= $email ?>">
      </div>

      <div class="inputs-wrapper login-password">
        <label for="email" class="login-label">Senha</label>
        <input type="password" name="password" placeholder="Digite sua senha">


        <a href="#" class="login-forgot">Esqueceu sua senha?</a>

        <button class="button-main-color" type="submit"><span></span>Login</button>
    </form>

    <a href="./register_page.php" class="login-register">Ainda não tem uma conta? <span>Criar</span> </a>
  </section>

  <script src="./script.js"></script>
</body>

</html>