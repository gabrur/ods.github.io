<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="13clima2.css"  >
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="13clima3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 13: Ação Contra a Mudança Global do Clima</title>
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

        <h1>ODS 13: Ação Contra a Mudança Global do Clima </h1>
     <p>
        O Objetivo de Desenvolvimento Sustentável 13 (ODS 13) visa combater as mudanças climáticas e seus impactos. Reconhecendo que a mudança climática representa uma das maiores ameaças ao desenvolvimento sustentável, o ODS 13 busca promover medidas urgentes para mitigar seus efeitos e adaptar-se às suas consequências.
     </p> 
     <br>
     <br>

     <h2>Dimensões da Ação Climática </h2><br><br>

     <p><strong>Mitigação das Emissões de Gases de Efeito Estufa:</strong> Promover ações para reduzir as emissões de gases de efeito estufa em setores-chave, como energia, transporte e agricultura, buscando a transição para economias de baixo carbono.<br>
        <strong>Adaptação às Mudanças Climáticas:</strong> Fortalecer a resiliência das comunidades e ecossistemas, desenvolvendo estratégias para se adaptar às consequências das mudanças climáticas, como inundações, secas e alterações nos padrões climáticos.<br>
        <strong>Educação e Conscientização:</strong> Fomentar a conscientização sobre as mudanças climáticas e suas consequências, incentivando a educação e a participação da sociedade civil na luta contra esse desafio.<br>
        <strong>Integração de Políticas Climáticas:</strong> Integrar considerações climáticas em políticas e estratégias de desenvolvimento nacional e local, promovendo um desenvolvimento sustentável que leve em conta os riscos climáticos.<br>
        <strong>Cooperação Internacional:</strong> Fortalecer a colaboração entre países para compartilhar tecnologias, conhecimentos e recursos financeiros que ajudem na mitigação e adaptação às mudanças climáticas.<br>

     </p><br><br>



     <h2> Desafios da Ação Climática</h2><br><br>

     <p><strong>Compromissos Insuficientes:</strong> Muitos países ainda não implementaram políticas ambiciosas suficientes para alcançar as metas de redução de emissões estabelecidas no Acordo de Paris.<br>
        <strong>Financiamento Limitado:</strong> A falta de financiamento adequado para iniciativas de mitigação e adaptação às mudanças climáticas pode dificultar a implementação de soluções efetivas.<br>
        <strong>Desigualdade na Vulnerabilidade:</strong>Comunidades vulneráveis, frequentemente em países em desenvolvimento, são as mais afetadas pelas mudanças climáticas, apesar de contribuir menos para as emissões.<br>
        <strong>Falta de Conscientização:</strong> A desinformação e a falta de conscientização sobre as mudanças climáticas ainda persistem em muitas comunidades, dificultando a mobilização para ações eficazes.<br>
     </p><br><br>

     <h2>Estratégias para Alcançar o ODS 13</h2><br><br>

     <p><strong>Desenvolvimento de Políticas Climáticas:</strong> Criar e implementar políticas de mitigação e adaptação às mudanças climáticas que sejam integradas em todas as áreas do governo.<br>
        <strong>Investimento em Energias Renováveis:</strong> Promover o investimento em fontes de energia renovável e tecnologias sustentáveis para reduzir a dependência de combustíveis fósseis.<br>
        <strong>Educação e Capacitação:</strong>Incentivar a educação sobre mudanças climáticas nas escolas e comunidades, promovendo uma cultura de sustentabilidade e responsabilidade ambiental.<br>
        <strong>Fortalecimento da Resiliência:</strong> Apoiar iniciativas que aumentem a resiliência de comunidades vulneráveis por meio de infraestrutura adaptativa e práticas agrícolas sustentáveis.<br>
        <strong>Colaboração Internacional:</strong> Participar ativamente de acordos internacionais, como o Acordo de Paris, e colaborar em iniciativas globais que visem combater as mudanças climáticas.<br>
     </p><br><br>

     <h2>Importância do ODS 13</h2><br><br>

     <p>A ação contra a mudança climática é essencial para garantir a sobrevivência do planeta e a qualidade de vida das futuras gerações. As mudanças climáticas afetam todos os aspectos da vida, desde a segurança alimentar até a saúde pública e a economia.<br><br>
        Alcançar o ODS 13 exige um esforço conjunto de governos, empresas, comunidades e indivíduos, promovendo uma abordagem proativa e colaborativa para mitigar os impactos das mudanças climáticas e garantir um futuro sustentável.
     </p><br><br>
     
     <h3>Progresso do Brasil no ODS 13</h3>
     <h3 id="tituloods13" style="font-size:18px">Emissões totais de gases de efeito estufa por ano</h3>

     <canvas id="graficoods13" width="400" height="200"></canvas>

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