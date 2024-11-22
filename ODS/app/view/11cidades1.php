<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="11cidades2.css"  >
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="11cidades3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 11: Cidades e Comunidades Sustentáveis</title>
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

        <h1>ODS 11: Cidades e Comunidades Sustentáveis</h1>
     <p>
        O Objetivo de Desenvolvimento Sustentável 11 (ODS 11) visa tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis até 2030. Com mais da metade da população mundial vivendo em áreas urbanas, a gestão adequada das cidades é crucial para promover um desenvolvimento que beneficie a todos.
     </p> 
     <br>
     <br>

     <h2>Dimensões das Cidades e Comunidades Sustentáveis </h2><br><br>

     <p><strong>Habitação Acessível:</strong> Garantir que todas as pessoas tenham acesso a habitação adequada e acessível, prevenindo a formação de favelas e assentamentos informais.<br>
        <strong>Transporte Sustentável:</strong> Promover sistemas de transporte que sejam seguros, acessíveis e sustentáveis, reduzindo a dependência de veículos particulares e a emissão de gases poluentes.<br>
        <strong>Planejamento Urbano Inclusivo:</strong> Desenvolver planos urbanos que considerem as necessidades de todos os habitantes, garantindo que áreas verdes, serviços públicos e infraestrutura estejam disponíveis de maneira equitativa.<br>
        <strong>Resiliência a Desastres:</strong> Aumentar a capacidade das cidades de se adaptarem a desastres naturais e às mudanças climáticas, promovendo a infraestrutura resiliente.<br>
        <strong>Acesso a Serviços Básicos:</strong> Assegurar que todos tenham acesso a serviços básicos, como água potável, saneamento, energia e transporte público.<br>

     </p><br><br>



     <h2> Desafios das Cidades e Comunidades Sustentáveis</h2><br><br>

     <p><strong>Crescimento Populacional Descontrolado:</strong>O crescimento urbano rápido e desordenado pode levar a problemas como a falta de habitação e a deterioração da infraestrutura.<br>
        <strong>Desigualdade Urbana:</strong> As disparidades socioeconômicas podem ser acentuadas nas cidades, resultando em áreas de extrema pobreza e exclusão social.<br>
        <strong>Poluição e Congestionamento:</strong>O aumento do tráfego e da industrialização pode resultar em altos níveis de poluição do ar e congestionamento nas áreas urbanas.<br>
        <strong>Mudanças Climáticas:</strong>  Cidades são particularmente vulneráveis aos impactos das mudanças climáticas, como inundações e ondas de calor, exigindo planejamento e mitigação eficazes.<br>
     </p><br><br>

     <h2>Estratégias para Alcançar o ODS 11</h2><br><br>

     <p><strong>Desenvolvimento de Políticas Habitacionais:</strong> Criar políticas que incentivem a construção de habitações acessíveis e que promovam a regularização de assentamentos informais.<br>
        <strong>Investimento em Transporte Público:</strong>  Melhorar e expandir os sistemas de transporte público para torná-los mais acessíveis e sustentáveis, reduzindo a necessidade de transporte individual.<br>
        <strong>Planejamento Urbano Sustentáve:</strong> Adotar abordagens de planejamento que integrem a proteção ambiental, o uso eficiente do espaço e a inclusão social.<br>
        <strong>Aumentar a Resiliência Urbana:</strong> Implementar medidas de adaptação às mudanças climáticas e de mitigação de desastres, como sistemas de drenagem e áreas verdes.<br>
        <strong>Promoção de Cidades Inteligentes:</strong>  Utilizar tecnologia e inovação para melhorar a eficiência dos serviços urbanos e facilitar a participação cidadã na gestão da cidade.<br>
     </p><br><br>

     <h2>Importância do ODS 11</h2><br><br>

     <p>Cidades sustentáveis são fundamentais para o desenvolvimento econômico, a qualidade de vida e a proteção do meio ambiente. Elas oferecem oportunidades para todos os habitantes, promovem a coesão social e garantem um uso mais eficiente dos recursos naturais.<br><br>
        Alcançar o ODS 11 requer a colaboração de governos, setor privado, sociedade civil e comunidades para criar ambientes urbanos que sejam inclusivos, resilientes e sustentáveis. Isso garantirá que as cidades possam atender às necessidades atuais e futuras de seus cidadãos, promovendo um desenvolvimento equilibrado e sustentável.
     </p><br><br>
     
     <h3>Progresso do Brasil no ODS 11</h3>
     <h3 id="tituloods11" style="font-size:18px">Proporção de população urbana vivendo em assentamentos precários, assentamentos informais ou domicílios inadequados</h3>

     <canvas id="graficoods11" width="400" height="200"></canvas>


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
        <a href="10desigualdade1.php"> <img id="decimo" src="https://i.imgur.com/yMbgl6O.png" alt="Imagem do ODS 10"> </a>
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