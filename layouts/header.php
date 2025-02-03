<?php
session_start();

$authenticated = false;
if(isset($_SESSION["email"])){
  $authenticated = true;
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

<body>
  <header>
    <nav>
      <a href="./index.php" class="bangers-regular ft-32">
        <img src="./assets/pokeball.png" alt="" />
        PokenFallen
      </a>

      <ul class="nav-links">
        <li class="dropdown_button">
          <p>Introdução</p>
          <div class="nav-dropdown intro-drop hidden">
            <a href="index.php#home">Fallen RPG</a>
            <a href="index.php#upgrades">Sistemas</a>
            <a href="index.php#info">Informações</a>
            <a href="index.php#faq">Dúvidas</a>
          </div>
        </li>

        <li class="dropdown_button">
          <p>Download</p>
          <div class="nav-dropdown download-drop hidden">
            <a href="download.php#download">Download</a>
            <a href="">Android</a>
            <a href="">Tutorial</a>
          </div>
        </li>

        <li id="marginR-12">
          <a href="">Atualizações</a>
        </li>


      </ul>


      <?php
      if ($authenticated) {
      ?>
        <div class="user-profile dropdown_button">
          <div class="user-info">
            <span class="user-name"><?= $_SESSION["user_name"]?> </span>
            <img src="./assets/male-character.png" alt="">

          </div>
          <div class="nav-dropdown download-drop hidden">
            <a href="download.php#download">Perfil</a>
            <a href="">Configurações</a>
            <a href="logout.php">Sair da conta</a>
          </div>
          

        </div>

      <?php
      } else {
      ?>
        <div id="userButtons">
          <a href="./login_page.php" id="login">Login</a>
          <a href="./register_page.php" id="register">Registrar</a>
        </div>
      <?php } ?>

    </nav>
  </header>