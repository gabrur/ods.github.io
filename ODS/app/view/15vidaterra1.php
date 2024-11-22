<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="15vidaterra2.css">
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="15vidaterra3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 15: Vida Terrestre</title>
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

        <h1>ODS 15: Vida Terrestre </h1>
     <p>
        O Objetivo de Desenvolvimento Sustentável 15 (ODS 15) visa proteger, restaurar e promover o uso sustentável dos ecossistemas terrestres, gerir de forma sustentável as florestas, combater a desertificação, interromper a degradação da terra e deter a perda de biodiversidade até 2030. Este objetivo é essencial para a manutenção da saúde dos ecossistemas e a sobrevivência de várias espécies, incluindo os seres humanos.
     </p> 
     <br>
     <br>

     <h2>Dimensões da Vida Terrestre </h2><br><br>

     <p><strong>Conservação da Biodiversidade:</strong> Proteger e restaurar a biodiversidade e os ecossistemas, garantindo a preservação de espécies ameaçadas e habitats naturais.<br>
        <strong>Gestão Sustentável das Florestas:</strong> Promover a gestão sustentável das florestas, prevenindo o desmatamento e promovendo a reflorestação e o uso responsável dos recursos florestais.<br>
        <strong>Combate à Desertificação:</strong> Implementar medidas para combater a desertificação e restaurar terras degradadas, melhorando a resiliência de comunidades afetadas.<br>
        <strong>Preservação de Ecossistemas:</strong> Proteger ecossistemas essenciais, como montanhas, savanas e áreas úmidas, que são vitais para a biodiversidade e os serviços ecossistêmicos.<br>
        <strong>Sustentabilidade da Agricultura:</strong> Promover práticas agrícolas sustentáveis que aumentem a produtividade e a segurança alimentar, ao mesmo tempo em que preservam a saúde dos solos e dos ecossistemas.<br>

     </p><br><br>



     <h2> Desafios da Vida Terrestre</h2><br><br>

     <p><strong>Desmatamento:</strong>  A exploração insustentável das florestas resulta em desmatamento significativo, que afeta a biodiversidade e contribui para as mudanças climáticas.<br>
        <strong>Perda de Biodiversidade:</strong> As atividades humanas, como urbanização e agricultura intensiva, têm levado à extinção de espécies e à degradação de habitats naturais.<br>
        <strong>Degradação do Solo:</strong> A degradação do solo, causada pela agricultura inadequada e pela exploração excessiva, compromete a capacidade de produção alimentar e a saúde dos ecossistemas.<br>
        <strong>Mudanças Climáticas:</strong>As mudanças climáticas afetam os ecossistemas terrestres, alterando padrões de vegetação e colocando em risco espécies e habitats.<br>
     </p><br><br>

     <h2>Estratégias para Alcançar o ODS 15</h2><br><br>

     <p><strong>Estabelecimento de Áreas Protegidas:</strong> Criar e expandir áreas protegidas para conservar ecossistemas e espécies ameaçadas.<br>
        <strong>Promoção de Práticas Agrícolas Sustentáveis:</strong> Incentivar práticas de agricultura que conservem os recursos naturais e aumentem a produtividade de forma sustentável.<br>
        <strong>Restauração de Ecossistemas:</strong> Implementar programas de restauração de ecossistemas degradados, como reflorestamento e recuperação de áreas úmidas.<br>
        <strong>Educação e Conscientização:</strong> Promover a educação sobre a importância da biodiversidade e da conservação dos ecossistemas.<br>
        <strong>Colaboração Internacional:</strong> Cooperar em iniciativas globais para proteger a biodiversidade e combater a degradação dos ecossistemas, como a Convenção sobre Diversidade Biológica.<br>
     </p><br><br>

     <h2>Importância do ODS 15</h2><br><br>

     <p>A conservação da vida terrestre é vital para a saúde do planeta, pois os ecossistemas desempenham funções essenciais, como a purificação do ar e da água, a regulação do clima e a provisão de alimentos. Além disso, a biodiversidade é fundamental para a estabilidade dos ecossistemas e o bem-estar humano.<br><br>
        Alcançar o ODS 15 requer um esforço colaborativo entre governos, organizações da sociedade civil, setor privado e comunidades para garantir que os ecossistemas terrestres sejam protegidos e geridos de maneira sustentável, assegurando um futuro viável para todos.
     </p><br><br>
     
     <h3>Progresso do Brasil no ODS 15</h3>
     <h3 id="tituloods15" style="font-size:18px">Proporção de sítios importantes para a biodiversidade terrestre e de água doce cobertos por áreas protegidas, por tipo de ecossistema</h3>

     <canvas id="graficoods15" width="400" height="145"></canvas><br><br>
     <canvas id="graficoods15.2" width="400" height="145"></canvas><br><br>
     <canvas id="graficoods15.3" width="400" height="145"></canvas>

 
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
        <a href="14vidaagua1.php"> <img id="decquarto" src="https://i.imgur.com/wMntjDG.png" alt="Imagem do ODS 14"> </a>
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