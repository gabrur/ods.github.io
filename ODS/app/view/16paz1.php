<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="16paz2.css" >
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="16paz3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 16: Paz, Justiça e Instituições Eficazes</title>
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

        <h1>ODS 16: Paz, Justiça e Instituições Eficazes  </h1>
     <p>
        O Objetivo de Desenvolvimento Sustentável 16 (ODS 16) busca promover sociedades pacíficas e inclusivas, garantir acesso à justiça para todos e construir instituições eficazes, responsáveis e inclusivas em todos os níveis até 2030. Este objetivo é fundamental para a construção de um mundo onde todos possam viver com dignidade, segurança e liberdade.
     </p> 
     <br>
     <br>

     <h2>Dimensões da Paz, Justiça e Instituições Eficazes</h2><br><br>

     <p><strong>Promoção da Paz e da Segurança:</strong> Trabalhar para prevenir conflitos e promover a paz em comunidades, países e regiões, abordando as causas subjacentes da violência.<br>
        <strong>Acesso à Justiça:</strong> Garantir que todas as pessoas tenham acesso à justiça, promovendo sistemas judiciais que sejam justos, transparentes e eficientes.<br>
        <strong>Fortalecimento das Instituições:</strong> Desenvolver instituições públicas que sejam eficazes, responsáveis e inclusivas, assegurando que governança e serviços sejam acessíveis a todos.<br>
        <strong>Participação Cidadã:</strong> Fomentar a participação ativa da sociedade civil na tomada de decisões, promovendo a transparência e a responsabilização dos governantes.<br>
        <strong>Combate à Corrupção e à Criminalidade:</strong> Implementar medidas para reduzir a corrupção e fortalecer a integridade das instituições, combatendo atividades ilegais que prejudicam o desenvolvimento.<br>

     </p><br><br>



     <h2> Desafios da Paz, Justiça e Instituições Eficazes </h2><br><br>

     <p><strong>Conflitos Armados:</strong> Muitos países ainda enfrentam conflitos armados que resultam em perdas de vidas e deslocamentos forçados.<br>
        <strong>Desigualdade no Acesso à Justiça:</strong> Barreiras econômicas, sociais e culturais muitas vezes limitam o acesso à justiça, especialmente para grupos marginalizados.<br>
        <strong>Instituições Fracas:</strong> A fragilidade institucional, caracterizada por corrupção e falta de transparência, compromete a eficácia dos serviços públicos e a confiança da população.<br>
        <strong>Violência e Criminalidade:</strong> A violência, incluindo crimes organizados e violência de gênero, representa um desafio significativo para a segurança das comunidades.<br>
     </p><br><br>

     <h2>Estratégias para Alcançar o ODS 16</h2><br><br>

     <p><strong>Violência e Criminalidade:</strong> Apoiar iniciativas de mediação e resolução de conflitos em comunidades e entre países.<br>
        <strong>Reformas Judiciais:</strong> Implementar reformas que tornem o sistema de justiça mais acessível e eficiente, promovendo igualdade de acesso e proteção dos direitos humanos.<br>
        <strong>Fortalecimento da Governança:</strong> Desenvolver políticas que promovam a transparência, a prestação de contas e a participação cidadã na governança.<br>
        <strong>Educação em Direitos Humanos:</strong> Promover a educação sobre direitos humanos e cidadania, capacitando as pessoas a reivindicar seus direitos e participar ativamente da sociedade.<br>
        <strong>Combate à Corrupção:</strong> Estabelecer mecanismos para prevenir e combater a corrupção em todos os níveis de governo e promover a integridade nas instituições.<br>
     </p><br><br>

     <h2>Importância do ODS 16</h2><br><br>

     <p>A promoção da paz, da justiça e da eficácia institucional é essencial para o desenvolvimento sustentável e para a construção de sociedades coesas e resilientes. Quando as pessoas se sentem seguras e têm acesso à justiça, elas são mais propensas a participar ativamente na sociedade e a contribuir para o desenvolvimento econômico e social.<br><br>
        Alcançar o ODS 16 requer um compromisso coletivo de governos, sociedade civil, setor privado e comunidades para garantir que a paz, a justiça e a eficácia institucional sejam uma realidade para todos, contribuindo para um futuro mais justo e pacífico.
     </p><br><br>
     
     <h3>Progresso do Brasil no ODS 16</h3>
     <h3 id="tituloods16" style="font-size:18px">Proporção da população que se sente segura quando caminha sozinha na área onde vive</h3>

     <canvas id="graficoods16" width="400" height="150">Proporção da população que se sente segura quando caminha sozinha na área onde vive</canvas>

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
        <a href="15vidaterra1.php"> <img id="decquinto" src="https://i.imgur.com/GFpS4Jo.png" alt="Imagem do ODS 15"> </a>
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