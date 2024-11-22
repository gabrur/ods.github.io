<?php

require ('..\..\..\ODS\app\models\login1.php');
           
?>


<!DOCTYPE html>
<html lang="pt-BR">

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login2.css" />
    <link rel="stylesheet" href="footer2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"> 
    <title>Login</title>
 </head>

 <body>
    <header id="header">
      <nav class="navbar">
        <div class="logo">
            <a href="sobrenos.php"><span class="material-symbols-outlined">groups</span>LMGV</a>
        </div>

        <div class="casinha">
          <a href="index.php"><svg class="casinha" xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#e8eaed"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg></a>
        </div>
        <img id="log" src="https://i.imgur.com/sQ7EDJT.png">
      </nav>
    </header>

   <div class="container">
      <div class="card">
       <h1 id="login">Login</h1>
        <div id="erro"></div>

        <form action="" method="POST">
          <div class="label-float">
            <input type="text" name="email" id="email" placeholder="E-mail" required />
            <label id="emailLabel" for="email"></label>
          </div>

          <div class="label-float">
            <i id="senha" onclick="mosenha()" class="bi bi-eye-fill"></i>
            <input type="password" name="senha" id="senhar" autocomplete="off" placeholder="Senha" required />
            <label id="senhaLabel" for="senha"></label>
          </div>

          <div class="justify-center">
            <button id="logar" type="submit">Entrar</button>
          </div>
        </form>
        <div class="justify-center">
          <hr/>
        </div>

        <script src="login3.js"></script>
        <p id="p">
          Não tem uma conta?
          <a id="cadast" href="cadastro.php">Cadastre-se</a>
        </p>
     </div>
   </div>
  </body>
</html>
