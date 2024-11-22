
<?php

require ('..\..\..\ODS\app\models\cadastro1.php');
           
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="cadastro2.css"/>
    <link rel="stylesheet" href="footer2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>Cadastrar</title>
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
    <section class="corpo">
        <div class="container">
            <div class="card">
                <h1>Cadastrar</h1>
                <div id="erro"></div>
                <div id="certo"></div>
                <div class="label-float">

                    <form method="POST" action="cadastro.php">

                    <input type="text" name="nome" id="nome" autocomplete="off" placeholder="Nome" required/>
                    <label id="nomelabel" for="nome"></label>
                </div>
                <div class="label-float">
                    <input type="text" name="email" id="email" autocomplete="off" placeholder="E-mail" required/>
                    <label id="emaillabel" for="email"></label>
                </div>
                <div class="label-float">
                    <i id="senha4" onclick="mosenha2()" class="bi bi-eye-fill"></i>
                    <input type="password" name="senha" id="senha" autocomplete="off" placeholder="Senha" required/>
                    <label id="senhalabel" for="senha"></label>
                </div>
                <div class="label-float">
                    <i id="senha5" onclick="mosenha3()" class="bi bi-eye-fill"></i>
                    <input type="password" name="confsenha" id="confirmasenha" autocomplete="off" placeholder="Confirmar Senha" required/>
                    <label id="confirmasenhalabel" for="confirmasenha"></label>
                    
                </div>
                <div class="justify-center">
                    <button type="submit" name="submit" id="submit">Cadastrar</button></form>
                    <a id="volta" href="login.php">Voltar</a>
                </div>
            </div>
        </div>
    </section>
    <script src="..\..\..\ODS\app\view\cadastro3.js"></script>
    
</body>
</html>