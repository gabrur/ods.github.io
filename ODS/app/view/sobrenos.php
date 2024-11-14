<?php
 session_start();
  require ('..\..\..\ODS\app\controllers\Usuários.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"  href="sobrenos2.css" >
  <script src="animaheader.js" type="text/javascript" defer></script>
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
  <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
  <title>Sobre Nós</title>
</head>

<body>
  <header>
    <nav class="navbar">
    <div class="logo">
        <a href="sobrenos.php"><span class="material-symbols-outlined">groups</span>LMGV</a>
      </div>
        <div class="casinha">
          <a href="index.php"><svg class="casinha" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#ffffff"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg></a>
        </div>
      <div class="logout" id="logout-button">
      <?php if (isset($_SESSION['grupo_id']) && ($_SESSION['grupo_id'] == 2 || $_SESSION['grupo_id'] == 1)):  ?>
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
      
      </div>
      <img id="log"src="https://i.imgur.com/sQ7EDJT.png">
    </nav>
  </header>

  <section class="about">
    <h1>Sobre nós</h1>
    <p>Somos a <strong>LMGV</strong>, equipe de alunos do segundo ano de Téc. Informática, e desenvolvemos esse site para o trabalho
      "Doutores da Informática" proposto e apresentado no Instituto Federal de Roraima.</p>

    <h2>Conheça nossos desenvolvedores:</h2>
    <div class="team">
      
      <div id="lara" class="member">
        <img src="https://i.imgur.com/FG0LF5y.jpeg" alt="Lara">
        <h3>Lara Sophia Ferreira Briglia</h3>
        <p><strong>Líder de Equipe</strong><br>16 anos, desenvolveu o design         do projeto</p>
      </div>
      
      <div id="Maria" class="member">
        <img src="https://i.imgur.com/qdtKK5x.jpeg" alt="Maria">
        <h3>Maria Clara de Souza Andrade</h3>
        <p><strong>Pesquisadora</strong><br>16 anos, realizou a pesquisa de          material</p>
      </div>
      
      <div class="member">
        <img src="https://i.imgur.com/P4Q2W4L.jpeg" alt="Gabriel">
        <h3>Gabriel José Rodrigues Fiorotti</h3>
        <p><strong>Front-end</strong><br>17 anos, desenvolveu os códigos em HTML, CSS e JavaScript</p>
      </div>
      
      <div id="Victor" class="member">
        <img src="https://i.imgur.com/3yTW87k.jpeg" alt="Victor">
        <h3>Victor Delair Rodrigues Fiorotti</h3>
        <p><strong>Back-end</strong><br>17 anos, desenvolveu os códigos em PHP</p>
      </div>
      
    </div>
  </section>

  <footer>
    <div class="footer-tudo">
      <div class="footer-conteudo">
        <div class="footer-links">
          <a href="politica.php">Politica de Privacidade</a>
          <a href="sobrenos.php">Sobre</a>
          <a href="contato.php">Contato</a>
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