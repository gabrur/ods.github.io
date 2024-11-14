<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="14vidaagua2.css">
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="14vidaagua3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 14: Vida na Água</title>
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

        <h1>ODS 14: Vida na Água  </h1>
     <p>
        O Objetivo de Desenvolvimento Sustentável 14 (ODS 14) busca conservar e utilizar de forma sustentável os oceanos, mares e recursos marinhos para o desenvolvimento sustentável até 2030. Os oceanos desempenham um papel vital na regulação do clima, na produção de oxigênio e na manutenção da biodiversidade, e são fundamentais para a subsistência de bilhões de pessoas.
     </p> 
     <br>
     <br>

     <h2>Dimensões da Vida na Água </h2><br><br>

     <p><strong>Conservação dos Ecossistemas Marinhos:</strong> Proteger e restaurar os ecossistemas marinhos e costeiros, como recifes de corais e manguezais, que são essenciais para a biodiversidade e a proteção costeira.<br>
        <strong>Redução da Poluição Marinha:</strong> Combater a poluição dos oceanos, incluindo plásticos e produtos químicos, que ameaçam a vida marinha e a saúde humana.<br>
        <strong>Sustentabilidade da Pesca:</strong> Promover práticas de pesca sustentáveis que assegurem a recuperação de estoques pesqueiros e a proteção dos habitats marinhos.<br>
        <strong>Pesquisa e Inovação:</strong>  Incentivar a pesquisa científica e a inovação para compreender melhor os oceanos e os impactos das mudanças climáticas sobre eles.<br>
        <strong>Proteção da Biodiversidade Marinha:</strong> Implementar medidas que protejam as espécies marinhas ameaçadas e seus habitats, promovendo a diversidade biológica dos oceanos.<br>

     </p><br><br>



     <h2> Desafios da Ação Climática</h2><br><br>

     <p><strong>Sobrepesca:</strong> A sobrepesca e a pesca ilegal têm levado à diminuição significativa das populações de peixes e à degradação dos ecossistemas marinhos.<br>
        <strong>Poluição:</strong> A poluição marinha, em grande parte resultante de atividades terrestres, afeta a saúde dos oceanos e a vida marinha.<br>
        <strong>Mudanças Climáticas:</strong> As mudanças climáticas estão alterando a temperatura dos oceanos e a acidificação, afetando a biodiversidade e os ecossistemas marinhos.<br>
        <strong>Destruição de Habitats:</strong>A urbanização costeira e a exploração de recursos marinhos resultam na destruição de habitats críticos, como recifes de corais e manguezais.<br>
     </p><br><br>

     <h2>Estratégias para Alcançar o ODS 14</h2><br><br>

     <p><strong>Estabelecimento de Áreas Marinhas Protegidas:</strong> Criar e expandir áreas marinhas protegidas para conservar a biodiversidade e os ecossistemas marinhos.<br>
        <strong>Regulação da Pesca:</strong> Implementar políticas de pesca sustentável que limitem a captura excessiva e promovam a recuperação de espécies ameaçadas.<br>
        <strong>Redução da Poluição:</strong>Desenvolver e implementar estratégias para reduzir a poluição dos oceanos, incluindo a gestão de resíduos e a eliminação do plástico.<br>
        <strong>Educação e Conscientização:</strong> Promover a educação sobre a importância dos oceanos e a necessidade de proteção dos recursos marinhos.<br>
        <strong>Colaboração Internacional:</strong> Cooperar em nível global para abordar questões transfronteiriças relacionadas à conservação marinha e à gestão sustentável dos oceanos.<br>
     </p><br><br>

     <h2>Importância do ODS 14</h2><br><br>

     <p>Proteger a vida nos oceanos é essencial para a saúde do planeta, pois os oceanos desempenham um papel crucial na regulação do clima, no fornecimento de alimentos e na manutenção da biodiversidade. Além disso, os oceanos são fontes de renda e emprego para milhões de pessoas ao redor do mundo.<br><br>
        Alcançar o ODS 14 requer um esforço conjunto entre governos, organizações, setor privado e comunidades para garantir que os oceanos e recursos marinhos sejam geridos de forma sustentável, preservando-os para as futuras gerações.
     </p><br><br>
     
     <h3>Progresso do Brasil no ODS 14</h3>
     <h3 id="tituloods14" style="font-size:18px">Cobertura de áreas marinhas protegidas em relação às áreas marinhas</h3>

     <canvas id="graficoods14" width="400" height="140"></canvas>
 
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
        <a href="11cidades1.php"> <img id="decprimeiro" src="https://i.imgur.com/nN3Tevu.png" alt="Imagem do ODS 11"> </a>
        <a href="12consumo1.php"> <img id="decsegundo" src="https://i.imgur.com/qWQPhN2.png" alt="Imagem do ODS 12"> </a>
        <a href="13clima1.php"> <img id="decterceiro" src="https://i.imgur.com/NxstUIl.png" alt="Imagem do ODS 13"> </a>
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