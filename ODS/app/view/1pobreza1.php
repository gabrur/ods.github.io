<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1pobreza2.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="1pobreza3.js" type="text/javascript" defer></script>
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png" alt="Icone do nosso projeto sobre ODS">
    <title>ODS 1: Erradicação da Pobreza</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
        <h1>ODS 1: Erradicação da Pobreza</h1>
      
        <p>O Objetivo de Desenvolvimento Sustentável 1 (ODS 1) busca acabar com a pobreza em todas as suas formas e em todos os lugares até 2030. A pobreza é uma questão complexa que afeta milhões de pessoas ao redor do mundo, limitando seu acesso a necessidades básicas como alimentação, água potável, educação e serviços de saúde.
        </p>
        <br>
        <br>

        <h2>Dimensões da Pobreza</h2><br><br>

        <p><strong>Pobreza Extrema:</strong> Refere-se a pessoas que vivem com menos de U$1,90 por dia(valor varia de país pra país), um nível que impossibilita a cobertura das necessidades básicas.
         <br><strong>Pobreza Multidimensional:</strong> Inclui não apenas a falta de renda, mas também a privação em áreas como saúde, educação e padrões de vida. Isso reconhece que a pobreza vai além da falta de dinheiro.
        </p><br><br>

        <h2>Causas da Pobreza</h2><br><br>
        
        <p><strong> Econômica:</strong> A concentração de riqueza nas mãos de poucos impede que muitos tenham acesso a recursos e oportunidades.<br>
           <strong>Conflitos e Instabilidade:</strong> Guerras e crises políticas podem desestabilizar economias, forçando comunidades a viver em condições de pobreza.<br>
           <strong>Mudanças Climáticas:</strong> Desastres naturais e degradação ambiental afetam desproporcionalmente os mais pobres, que muitas vezes não têm recursos para se recuperar.<br>
           <strong>Falta de Acesso a Serviços:</strong> A ausência de serviços básicos, como educação e saúde, perpetua ciclos de pobreza.<br>
        </p><br><br>

        <h2>Estratégias para Erradicação</h2><br><br>

        <p><strong>Programas de Transferência de Renda:</strong> Iniciativas que oferecem apoio financeiro a famílias em situação de pobreza podem ajudar a garantir necessidades básicas.<br>
           <strong>Educação e Capacitação:</strong> Investir em educação de qualidade e formação profissional é essencial para aumentar as oportunidades de emprego e renda.<br>
           <strong>Acesso a Serviços de Saúde:</strong> Garantir cuidados de saúde acessíveis e de qualidade ajuda a melhorar a saúde e o bem-estar das comunidades.<br>
           <strong>Promoção do Emprego:</strong> Criar empregos decentes e fomentar o empreendedorismo pode estimular o crescimento econômico e reduzir a pobreza.<br>
           <strong>Proteção Social:</strong> Sistemas de proteção social eficazes ajudam a proteger os vulneráveis e a promover a inclusão social.<br>
        </p><br><br>

        <h2>Importância da Erradicação da Pobreza</h2><br><br>

        <p>Erradicar a pobreza é fundamental para alcançar outros ODS, pois a pobreza é uma barreira para o desenvolvimento sustentável. A redução da pobreza contribui para a saúde, educação, igualdade de gênero e crescimento econômico. Além disso, um mundo livre da pobreza é um passo crucial para promover paz e estabilidade.<br>
           A erradicação da pobreza requer uma abordagem integrada e a colaboração entre governos, sociedade civil e setor privado, promovendo um desenvolvimento inclusivo e sustentável.
        </p><br><br>
        <p>Para mais informações sobre a erradicação da pobreza e como contribuir para esse objetivo, consulte as diretrizes e
            <a id="onu" target="_blank" href="https://odsbrasil.gov.br/relatorio/sintese">relatórios</a> oficiais da ONU e das
            organizações envolvidas.
        </p>

        <br><br><br>
        <h3>Progresso do Brasil no ODS 1</h3>

        <h3 id="tituloods1" style="font-size:19px">Proporção da população vivendo abaixo da linha de pobreza internacional, por sexo, idade, condição perante o trabalho e localização geográfica (urbano/rural)</h3>

        <canvas id="graficoods1" width="400" height="210"></canvas> <br><br>
        <canvas id="graficoods1.2" width="400" height="210"></canvas> <br><br>
        <canvas id="graficoods1.3" width="400" height="210"></canvas> <br><br>
        <canvas id="graficoods1.4" width="400" height="210"></canvas>

        <br><br><br><br><br><br><br>

        <div class="ods-container">
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
