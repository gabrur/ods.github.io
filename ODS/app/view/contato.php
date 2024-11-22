<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contato2.css">
        <script src="animaheader.js" type="text/javascript" defer></script>
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
        <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
        <title>Contate-nos!</title>
    </head>

    <body>
        <header id="header">
            <nav class="navbar">    
                <div class="logo">
                  <a href="sobrenos.php"><span class="material-symbols-outlined">groups</span>LMGV</a>
                </div>

                <div class="logout" id="logout-button">
                 <?php if (isset($_SESSION['grupo_id']) && ($_SESSION['grupo_id'] == 2 || $_SESSION['grupo_id'] == 1)):  ?><!-- Botão de sair apenas para usuários logados -->
                    <form action="" method="POST">
                        <button type="submit" name="botao" class="butao-sair">
                          Sair
                          <svg class="material-symbols-outlined" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
                        </button>
                    </form>
                    <?php endif; ?>
                </div>

                <div id="entrarr" class="menu">
                    <?php if (!isset($_SESSION['id']) || $_SESSION['grupo_id'] == 3): ?> <!-- Link de entrar apenas para convidados -->
                    <a  class="butao-login" href="login.php">Entrar<svg class="material-symbols-outlined" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z"/></svg></a>
                    <?php endif; ?>
                </div>
                <img id="log"src="https://i.imgur.com/sQ7EDJT.png">
            </nav>
        </header>
        
        <main class="corpo">
            <section class="caixainfo">
                <section id="informacoes-contato">
                    <h1>Informações de Contato</h1>
                    <p><strong>Endereço:</strong> Av. Glaycon de Paiva, 2496 - Pricumã, Boa Vista - RR, 69303-340</p>
                    <p><strong>Telefone:</strong> (95) 991676110</p>
                    <p><strong>Email:</strong><a  href="https://mail.google.com/mail/?view=cm&fs=1&to=oqueeods@gmail.com.br&su=Contato&body=Olá,%20gostaria%20de" target="_blank">oqueeods@gmail.com.br</p></a>
                    <h2>Nos Encontre!</h2>
                </section>

                <section id="mapa">
                    <div class="mapaespaço">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15940.041040015467!2d-60.6939884!3d2.813129!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8d9305c914617361%3A0x958af716753872a9!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20Roraima%20-%20Campus%20Boa%20Vista!5e0!3m2!1spt-BR!2sbr!4v1731760480055!5m2!1spt-BR!2sbr" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </section>
            </section>
        </main>

        <footer>
            <div class="footer-tudo">
                <div class="footer-conteudo">
                    <div class="footer-links">
                        <?php if (isset($_SESSION['grupo_id']) && ($_SESSION['grupo_id'] == 1)): ?>
                        <a href="..\..\..\ODS\app\controllers\admin.php">admin page</a>
                        <?php endif; ?>
                        <a href="politica.php">Politica de Privacidade</a>
                        <a href="sobrenos.php">Sobre</a>
                        <a href="contato.php">Contato</m>
                        <a href="termos.php">Termos de Uso</a>
                    </div>

                    <div class="redes">
                        <a id="faceb" href="https://facebook.com" target="_blank">
                            <i class="fa-brands fa-facebook"></i> 
                        </a>
                        <a id="insta" href="https://instagram.com" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a id="xtwi" href="https://twitter.com" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <p>&copy; 2024 ODS Website. Todos os direitos reservados.</p>
            </div>
        </footer>
    </body>
</html>