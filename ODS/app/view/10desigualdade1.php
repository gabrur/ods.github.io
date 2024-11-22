<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="10desigualdade2.css"  >
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="10desigualdade3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 10: Redução das Desigualdades</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header>

        <nav class="navbar">

          <div class="logo">
             <a href="sobrenos.php"><span class="material-symbols-outlined">groups</span>LMGV</a>
          </div>
            
          <div class="casinha">
          <a href="index.php"><svg class="casinha" xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#e8eaed"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg></a>
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
            <img id="log" src="https://i.imgur.com/sQ7EDJT.png">
        </nav>
    </header>
    <section class="corpo">

        <h1>ODS 10: Redução das Desigualdades</h1>
     <p>
      O Objetivo de Desenvolvimento Sustentável 10 (ODS 10) busca reduzir a desigualdade dentro dos países e entre eles até 2030. Esse objetivo reconhece que as desigualdades sociais e econômicas prejudicam o desenvolvimento sustentável e a coesão social, e que a inclusão é fundamental para garantir que todos tenham oportunidades iguais.
     </p> 
     <br>
     <br>

     <h2>Dimensões da Redução das Desigualdades </h2><br><br>

     <p><strong>Acesso Igualitário a Oportunidades:</strong> Garantir que todos tenham acesso a serviços, recursos e oportunidades, independentemente de sua origem, raça, gênero ou status econômico.<br>
        <strong>Promoção de Políticas Inclusivas:</strong> Implementar políticas que abordem as desigualdades econômicas e sociais, promovendo a inclusão de grupos marginalizados, como mulheres, minorias étnicas e pessoas com deficiência.<br>
        <strong>Redistribuição de Riqueza:</strong> Fomentar sistemas fiscais que reduzam as desigualdades de renda, assegurando que os mais ricos contribuam de forma justa para a sociedade.<br>
        <strong>Acesso a Mercados e Recursos:</strong> Facilitar o acesso a mercados, crédito e tecnologias para pequenos agricultores e empreendedores, especialmente em comunidades desfavorecidas.<br>
        <strong>Participação e Voz:</strong> Promover a participação ativa de todos os grupos na tomada de decisões políticas e sociais, garantindo que suas vozes sejam ouvidas.<br>

     </p><br><br>



     <h2>Desafios da Redução das Desigualdades</h2><br><br>

     <p><strong>Desigualdade de Renda:</strong> A concentração de riqueza nas mãos de poucos e a disparidade salarial entre diferentes grupos sociais persistem como grandes desafios.<br>
        <strong>Barreiras Estruturais:</strong> Estruturas sociais e institucionais muitas vezes perpetuam desigualdades, dificultando a mobilidade social e o acesso a oportunidades.<br>
        <strong>Discriminação e Exclusão:</strong> Investir em educação e formação profissional para grupos desfavorecidos, aumentando suas chances de emprego e crescimento econômico.<br>
        <strong>Impactos da Globalização:</strong> A globalização pode acentuar desigualdades, beneficiando principalmente países e grupos mais fortes enquanto marginaliza os mais fracos.<br>
     </p><br><br>

     <h2>Estratégias para Alcançar o ODS 10</h2><br><br>

     <p><strong>Implementação de Políticas de Inclusão:</strong> Desenvolver políticas que promovam a igualdade de oportunidades e abordem as causas das desigualdades.<br>
        <strong>Aprimoramento de Sistemas Fiscais:</strong>  Criar um sistema tributário progressivo que redistribua a riqueza e financie serviços sociais essenciais.<br>
        <strong>Promoção da Educação e Capacitação:</strong> Investir em educação e formação profissional para grupos desfavorecidos, aumentando suas chances de emprego e crescimento econômico.<br>
        <strong>Fortalecimento de Redes de Proteção Social:</strong> Expandir programas de proteção social para apoiar os mais vulneráveis, como assistência à saúde, alimentação e habitação.<br>
        <strong>Fomento à Participação Cidadã:</strong>  Incentivar a participação da sociedade civil e de grupos marginalizados em processos de tomada de decisão e governança.<br>
     </p><br><br>

     <h2>Importância do ODS 10</h2><br><br>

     <p>Reduzir as desigualdades é essencial para construir sociedades mais justas e coesas, onde todos têm a oportunidade de prosperar. A inclusão social e econômica fortalece a paz, a estabilidade e o desenvolvimento sustentável.<br><br>
       Alcançar o ODS 10 requer um esforço conjunto de governos, organizações da sociedade civil, setor privado e comunidades para criar um ambiente em que todos possam contribuir e beneficiar-se do crescimento econômico e social.
     </p><br><br>
     
     <h3>Progresso do Brasil no ODS 10</h3>
     <h3 id="tituloods10" style="font-size:18px">Proporção da pessoas vivendo abaixo de 50% da mediana da renda, por sexo, idade e pessoas com deficiência</h3>

     <canvas id="graficoods10" width="400" height="150"></canvas><br><br>
     <canvas id="graficoods10.2" width="400" height="150"></canvas>


      <br><br><br><br><br><br><br>

      <div class="ods-container">
        <a href="1pobreza1.php"> <img id="primeiro" src="https://i.imgur.com/JDp1ezt.png" alt="Imagem do ODS 1"> </a>
        <a href="2fome1.php"> <img id="segundo" src="https://i.imgur.com/fNmsGeh.png" alt="Imagem do ODS 2"> </a>
        <a href="3saude1.php"> <img id="terceiro" src="https://i.imgur.com/Y38YEQl.png" alt="Imagem do ODS 3"> </a>
        <a href="4educacao1.php"> <img id="quarto" src="https://i.imgur.com/XsH9Pu6.png" alt="Imagem do ODS 4"> </a>
        <a href="5genero1.php"> <img id="quinto" src="https://i.imgur.com/lR5sK3A.png" alt="Imagem do ODS 5"> </a>
        <a href="6saneamento1.php"> <img id="sexto" src="https://i.imgur.com/UMe0z3F.png" alt="Imagem do ODS 6"> </a>
        <a href="7energia1.php"> <img id="setimo" src="https://i.imgur.com/D0jqVmE.png" alt="Imagem do ODS 7"> </a>
        <a href="8emprego1.php"> <img id="oitavo" src="https://i.imgur.com/VaHRzRA.png" alt="Imagem do ODS 8"> </a>
        <a href="9inovacao1.php"> <img id="nono" src="https://i.imgur.com/sXFZRjy.png" alt="Imagem do ODS 9"> </a>
        <a href="11cidades1.php"> <img id="decprimeiro" src="https://i.imgur.com/nN3Tevu.png" alt="Imagem do ODS 11"> </a>
        <a href="12consumo1.php"> <img id="decsegundo" src="https://i.imgur.com/qWQPhN2.png" alt="Imagem do ODS 12"> </a>
        <a href="13clima1.php"> <img id="decterceiro" src="https://i.imgur.com/NxstUIl.png" alt="Imagem do ODS 13"> </a>
        <a href="14vidaagua1.php"> <img id="decquarto" src="https://i.imgur.com/wMntjDG.png" alt="Imagem do ODS 14"> </a>
        <a href="15vidaterra1.php"> <img id="decquinto" src="https://i.imgur.com/GFpS4Jo.png" alt="Imagem do ODS 15"> </a>
        <a href="16paz1.php"> <img id="decsexto" src="https://i.imgur.com/XFefKRT.png" alt="Imagem do ODS 16"> </a>
        <a href="17parcerias1.php"> <img id="decsetimo" src="https://i.imgur.com/FIryNJA.png" alt="Imagem do ODS 17"> </a>
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