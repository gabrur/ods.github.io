<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="12consumo2.css"  >
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="12consumo3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 12: Consumo e Produção Responsáveis</title>
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

        <h1>ODS 12: Consumo e Produção Responsáveis </h1>
     <p>
        O Objetivo de Desenvolvimento Sustentável 12 (ODS 12) busca garantir padrões de consumo e produção sustentáveis até 2030. Este objetivo é essencial para a preservação dos recursos naturais e para a redução dos impactos ambientais, promovendo a eficiência no uso de recursos e a redução de desperdícios.
     </p> 
     <br>
     <br>

     <h2>Dimensões do Consumo e Produção Responsáveis </h2><br><br>

     <p><strong>Gestão Sustentável dos Recursos Naturais:</strong> Promover a utilização eficiente dos recursos, assegurando que sejam extraídos e utilizados de maneira sustentável, sem comprometer a capacidade das gerações futuras.<br>
        <strong>Redução de Desperdícios:</strong> Incentivar práticas que minimizem o desperdício de alimentos, água e energia, promovendo a reciclagem e a reutilização de materiais.<br>
        <strong>Consumo Consciente:</strong> Fomentar a conscientização dos consumidores sobre a importância de escolhas sustentáveis, incentivando práticas como a compra de produtos locais e ecológicos.<br>
        <strong>Produção Sustentável:</strong> Estimular indústrias a adotarem práticas sustentáveis em seus processos produtivos, reduzindo a poluição e os impactos negativos no meio ambiente.<br>
        <strong>Inovação em Sustentabilidade:</strong> Apoiar a pesquisa e o desenvolvimento de tecnologias que promovam padrões de produção e consumo mais responsáveis e sustentáveis.<br>

     </p><br><br>



     <h2> Desafios do Consumo e Produção Sustentáveis</h2><br><br>

     <p><strong>Exaustão de Recursos Naturais:</strong>O crescimento urbano rápido e desordenado pode levar a problemas como a falta de habitação e a deterioração da infraestrutura.<br>
        <strong>Desperdício de Alimentos:</strong> Um terço dos alimentos produzidos globalmente é desperdiçado, contribuindo para a fome e o impacto ambiental.<br>
        <strong>Desigualdade no Acesso a Produtos Sustentáveis:</strong>Muitas comunidades não têm acesso a produtos sustentáveis, o que limita suas escolhas de consumo.<br>
        <strong>Cultura do Descartável:</strong>  O consumo excessivo de produtos de uso único e a cultura do descarte exacerbam problemas de resíduos e poluição.<br>
     </p><br><br>

     <h2>Estratégias para Alcançar o ODS 12</h2><br><br>

     <p><strong>Educação e Conscientização:</strong> Implementar campanhas de educação sobre consumo responsável e a importância da sustentabilidade na produção e no consumo.<br>
        <strong>Políticas de Incentivo:</strong> Criar políticas que incentivem empresas a adotarem práticas sustentáveis e a investirem em tecnologias limpas.<br>
        <strong>Regulamentação de Resíduos:</strong> Estabelecer regulamentos que promovam a redução de resíduos, a reciclagem e a economia circular.<br>
        <strong>Apoio a Iniciativas Locais:</strong> Fomentar o desenvolvimento de mercados locais que promovam produtos sustentáveis e de baixo impacto ambiental.<br>
        <strong>Inovação e Pesquisa:</strong>  Apoiar iniciativas de pesquisa que busquem soluções para desafios de produção e consumo sustentáveis, como tecnologias de baixo carbono e métodos de produção ecologicamente corretos.<br>
     </p><br><br>

     <h2>Importância do ODS 12</h2><br><br>

     <p>Promover padrões de consumo e produção responsáveis é vital para a proteção do meio ambiente e a promoção da equidade social. A transição para um modelo de desenvolvimento mais sustentável não apenas preserva recursos para as gerações futuras, mas também melhora a qualidade de vida, reduzindo a poluição e promovendo a saúde pública.<br><br>
        Alcançar o ODS 12 requer um esforço conjunto de governos, empresas, sociedade civil e consumidores, garantindo que a produção e o consumo sejam realizados de maneira a respeitar os limites do planeta e promover o bem-estar de todos.
     </p><br><br>
     
     <h3>Progresso do Brasil no ODS 12</h3>
     <h3 id="tituloods12" style="font-size:18px">Taxa de reciclagem nacional por toneladas de material reciclado</h3>

     <canvas id="graficoods12" width="400" height="150"></canvas>

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