<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="6saneamento2.css"  >
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="6saneamento3.js" type="text/javascript" defer></script>
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 6: Água Potável e Saneamento</title>
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

        <h1>ODS 6:  Água Potável e Saneamento </h1>

     <p>O Objetivo de Desenvolvimento Sustentável 6 (ODS 6) busca garantir a disponibilidade e a gestão sustentável da água e do saneamento para todos até 2030. A água é um recurso vital para a vida, saúde e desenvolvimento econômico, e o acesso a serviços de saneamento adequados é essencial para prevenir doenças e promover o bem-estar.
     </p> 
     <br>
     <br>

     <h2>Dimensões da Água e Saneamento</h2><br><br>

     <p><strong>Acesso Universal à Água Potável:</strong> Garantir que todas as pessoas tenham acesso a água potável e segura, adequada para consumo, higiene e agricultura.<br>
        <strong>Saneamento e Higiene:</strong>  Assegurar que todos tenham acesso a serviços de saneamento adequados, incluindo instalações para higiene, como banheiros e lavatórios, para promover a saúde pública.<br>
        <strong>Gestão Sustentável dos Recursos Hídricos:</strong> Promover a gestão eficiente dos recursos hídricos, considerando a preservação de ecossistemas aquáticos e a redução do desperdício.<br>
        <strong>Qualidade da Água:</strong> Melhorar a qualidade da água, reduzindo a poluição e minimizando a contaminação de fontes hídricas.<br>
        <strong>Educação e Conscientização:</strong> Promover a educação sobre a conservação da água e a importância de práticas de saneamento adequado.<br>
     </p><br><br>

     <h2>Desafios do Acesso à Água e Saneamento</h2><br><br>

     <p><strong>Desigualdade de Acesso:</strong>Muitas comunidades, especialmente em áreas rurais e populações marginalizadas, ainda carecem de acesso a água potável e saneamento.<br>
        <strong>Contaminação da Água:</strong> A poluição industrial, o uso inadequado de produtos químicos na agricultura e a falta de infraestrutura de saneamento contribuem para a contaminação das fontes de água.<br>
        <strong>Mudanças Climáticas:</strong> As alterações climáticas afetam a disponibilidade e a qualidade da água, exacerbando secas e inundações.<br>
        <strong>Falta de Investimento:</strong> A escassez de recursos financeiros e a falta de investimentos em infraestrutura hídrica e de saneamento são obstáculos significativos.<br>
     </p><br><br>

     <h2>Estratégias para Alcançar o ODS 6</h2><br><br>

     <p><strong>Investimento em Infraestrutura:</strong> Melhorar a infraestrutura de água e saneamento, garantindo que comunidades tenham acesso a sistemas de abastecimento e tratamento de água.<br>
        <strong>Promoção de Tecnologias Sustentáveis:</strong> Incentivar o uso de tecnologias que economizem água e tratem e reutilizem água de forma eficaz.<br>
        <strong>Educação e Sensibilização:</strong> Implementar programas de conscientização sobre a importância da água e do saneamento, promovendo práticas de higiene e conservação.<br>
        <strong>Gestão Integrada dos Recursos Hídricos:</strong> Adotar uma abordagem holística para a gestão da água, considerando as necessidades de diferentes setores, como agricultura, indústria e consumo doméstico.<br>
        <strong>Proteção de Ecossistemas Aquáticos:</strong> Proteger e restaurar ecossistemas aquáticos, como rios e lagos, que desempenham um papel crucial na manutenção do ciclo da água.<br>
     </p><br><br>

     <h2>Importância do ODS 6</h2><br><br>

     <p>Garantir o acesso à água potável e ao saneamento é crucial para a saúde pública, a segurança alimentar e o desenvolvimento sustentável. A água é essencial para a agricultura, a produção de alimentos e a indústria, e o saneamento adequado é fundamental para prevenir doenças e promover a qualidade de vida.<br><br>
        Alcançar o ODS 6 requer uma ação coordenada entre governos, organizações não governamentais, setor privado e comunidades. Isso assegurará que todos tenham acesso a água e saneamento adequados, promovendo um futuro mais saudável e sustentável.
     </p><br><br>

     <h3>Progresso do Brasil no ODS 6</h3>
     <h3 id="tituloods6" style="font-size:18px">Proporção da população que utiliza serviços de água potável gerenciados de forma segura</h3>

     <canvas id="graficoods6" width="400" height="200"></canvas><br><br>
     <canvas id="graficoods6.2" width="400" height="170"></canvas>

      <br><br><br><br><br><br><br>

      <div class="ods-container">
        <a href="1pobreza1.php"> <img id="primeiro" src="https://i.imgur.com/JDp1ezt.png" alt="Imagem do ODS 1"> </a>
        <a href="2fome1.php"> <img id="segundo" src="https://i.imgur.com/fNmsGeh.png" alt="Imagem do ODS 2"> </a>
        <a href="3saude1.php"> <img id="terceiro" src="https://i.imgur.com/Y38YEQl.png" alt="Imagem do ODS 3"> </a>
        <a href="4educacao1.php"> <img id="quarto" src="https://i.imgur.com/XsH9Pu6.png" alt="Imagem do ODS 4"> </a>
        <a href="5genero1.php"> <img id="quinto" src="https://i.imgur.com/lR5sK3A.png" alt="Imagem do ODS 5"> </a>
        <a href="7energia1.php"> <img id="setimo" src="https://i.imgur.com/D0jqVmE.png" alt="Imagem do ODS 7"> </a>
        <a href="8emprego1.php"> <img id="oitavo" src="https://i.imgur.com/VaHRzRA.png" alt="Imagem do ODS 8"> </a>
        <a href="9inovacao1.php"> <img id="nono" src="https://i.imgur.com/sXFZRjy.png" alt="Imagem do ODS 9"> </a>
        <a href="10desigualdade1.php"> <img id="decimo" src="https://i.imgur.com/yMbgl6O.png" alt="Imagem do ODS 10"> </a>
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