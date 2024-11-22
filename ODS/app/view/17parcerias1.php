<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="17parcerias2.css">
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="17parcerias3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 17: Parcerias e Meios de implementação</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header>

      <nav class="navbar">

        <div class="logo">
         <a href="sobrenos.php"><span class="material-symbols-outlined">groups</span>LMGV</a>
        </div>

        <div class="casa-casinha">
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

        <h1>ODS 17: Parcerias e Meios de Implementação </h1>
     <p>
        O ODS 17 enfatiza a importância das parcerias para alcançar os Objetivos de Desenvolvimento Sustentável (ODS). Aqui estão algumas estratégias para alcançar esse objetivo e a importância das parcerias.
     </p> 
     <br>
     <br>

     <h2>Estratégias para Alcançar o ODS 17</h2><br><br>

     <p><strong>Fortalecimento de Parcerias Multissetoriais:</strong> Incentivar a colaboração entre governos, setor privado, sociedade civil e organizações internacionais para unir esforços e recursos.<br>
        <strong>Mobilização de recursos:</strong> Criar mecanismos financeiros, como fundos e investimentos sustentáveis, para garantir que os ODS sejam financiados adequadamente.<br>
        <strong>Transferência de Tecnologia:</strong>  Facilitar o acesso a tecnologias inovadoras, especialmente em países em desenvolvimento, para promover práticas sustentáveis.<br>
        <strong>Desenvolvimento de Capacidades:</strong> Investir na capacitação de recursos humanos e instituições para implementar iniciativas sustentáveis de forma eficaz.<br>
        <strong>Cooperação Internacional:</strong> Promover acordos e iniciativas globais que abordem questões transnacionais, como mudanças climáticas e desigualdade.<br>
        <strong>Acesso à Informação:</strong> Compartilhar dados e melhores práticas entre países para fortalecer a transparência e a responsabilização.<br>
     </p><br><br>

     <h2>Importância das Parcerias</h2><br><br>

     <p><strong>Maximização de Recursos:</strong> Parcerias permitem a combinação de recursos financeiros, técnicos e humanos, aumentando a eficácia das ações.<br>
        <strong>Inovação:</strong> Colaborações entre setores diferentes promovem a inovação e a criação de soluções criativas para desafios complexos.<br>
        <strong>Aumento da Sustentabilidade:</strong> Parcerias garantem que as iniciativas levem em consideração as necessidades locais e as práticas sustentáveis, promovendo o desenvolvimento a longo prazo.<br>
        <strong>Redução de Desigualdades:</strong> Colaborações que envolvem diversos atores ajudam a garantir que as vozes de grupos vulneráveis sejam ouvidas e consideradas nas decisões.<br>
        <strong>Compromisso Global:</strong> O fortalecimento das parcerias reforça o compromisso global com a agenda de desenvolvimento sustentável, promovendo a solidariedade e a responsabilidade compartilhada.<br>
     </p><br><br>

     <h3>Progresso do Brasil no ODS 17</h3>
     <h3 id="tituloods17" style="font-size:18px">Total das receitas do Governo em percentagem do PIB, por fonte</h3>

     <canvas id="graficoods17" width="400" height="140"></canvas>

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
        <a href="16paz1.php"> <img id="decsexto" src="https://i.imgur.com/XFefKRT.png" alt="Imagem do ODS 16"> </a>
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