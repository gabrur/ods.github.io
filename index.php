
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index2.css">
  <script src="animaheader.js" type="text/javascript" defer></script>
  <link rel="stylesheet" href="footer.css">    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
  <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
  <title>O que é ODS</title>
</head>

<body>
  
  <header id="header">
    <?php
     include('..\..\..\ODS\app\models\mensagem.php');
     include ('..\..\..\ODS\app\controllers\Usuários.php');
    ?>
    <nav class="navbar">
      <div class="logo">
        <a href="sobrenos.php"><span class="material-symbols-outlined">groups</span>LMGV</a>
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

      <img id="log"src="https://i.imgur.com/sQ7EDJT.png">
    </nav>
  </header>
  <section class="corpo">

    

          
    <h1>O que é ODS?</h1>
    <img  id="ods" src="https://natureinvest.org/blog/wp-content/uploads/2024/06/wedding-cake-Stockholm-Institute-SDGs-1.png"  width="609px" height="460px">
    <p>Os Objetivos de Desenvolvimento Sustentável (ODS) são uma iniciativa global adotada pela Assembleia Geral das Nações Unidas em      25 de setembro de 2015, como parte da Agenda 2030 para o Desenvolvimento Sustentável. Composta por 17 objetivos interconectados e 169      metas específicas, a Agenda 2030 visa promover um desenvolvimento inclusivo e sustentável até o ano de 2030.</p><br>
    <p>Os ODS foram formulados com a intenção de serem universais, integrados e transformadores, refletindo a necessidade de uma abordagem       holística para enfrentar os desafios globais e garantir um futuro mais sustentável para todos. A implementação bem-sucedida dos ODS         depende do engajamento de governos, setor privado, sociedade civil e indivíduos em todo o mundo, colaborando para alcançar essas metas      ambiciosas e promover um desenvolvimento equilibrado e sustentável.<br><br>
    Para mais informações sobre os Objetivos de Desenvolvimento Sustentável e como contribuir para sua realização, consulte as diretrizes e  <a id="onu" target="_blank"href="https://odsbrasil.gov.br/relatorio/sintese">relatórios</a> oficiais da ONU e das organizações envolvidas.</p>
    <script src="index3.js"></script>

    <h1></h1>

    <div style="" id="ods-container">

      <a href="1pobreza1.php"> <img id="primeiro" src="https://i.imgur.com/JDp1ezt.png"> </a>
      <a href="2fome1.php"> <img id="segundo" src="https://i.imgur.com/fNmsGeh.png"> </a>
      <a href="3saude1.php"> <img id="terceiro" src="https://i.imgur.com/Y38YEQl.png"> </a>
      <a href="4educacao1.php"> <img id="quarto" src="https://i.imgur.com/XsH9Pu6.png"> </a>
      <a href="5genero1.php"> <img id="quinto" src="https://i.imgur.com/lR5sK3A.png"> </a>
      <a href="6saneamento1.php"> <img id="sexto" src="https://i.imgur.com/UMe0z3F.png"> </a>
      <a href="7energia1.php"> <img id="setimo" src="https://i.imgur.com/D0jqVmE.png"> </a>
      <a href="8emprego1.php"> <img id="oitavo" src="https://i.imgur.com/VaHRzRA.png"> </a>
      <a href="9inovacao1.php"> <img id="nono" src="https://i.imgur.com/sXFZRjy.png"> </a>
      <a href="10desigualdade1.php"> <img id="decimo" src="https://i.imgur.com/yMbgl6O.png"> </a>
      <a href="11cidades1.php"> <img id="decprimeiro" src="https://i.imgur.com/nN3Tevu.png"> </a>
      <a href="12consumo1.php"> <img id="decsegundo" src="https://i.imgur.com/qWQPhN2.png"> </a>
      <a href="13clima1.php"> <img id="decterceiro" src="https://i.imgur.com/NxstUIl.png"> </a>
      <a href="14vidaagua1.php"> <img id="decquarto" src="https://i.imgur.com/wMntjDG.png"> </a>
      <a href="15vidaterra1.php"> <img id="decquinto" src="https://i.imgur.com/GFpS4Jo.png"> </a>
      <a href="16paz1.php"> <img id="decsexto" src="https://i.imgur.com/XFefKRT.png"> </a>
      <a href="17parcerias1.php"> <img id="decsetimo" src="https://i.imgur.com/FIryNJA.png"> </a>
      
    </div>
  </section>
  
  <footer>
    <div class="footer-tudo">
      <div class="footer-conteudo">
        <div class="footer-links">
        <?php if (isset($_SESSION['grupo_id']) && ($_SESSION['grupo_id'] == 1)): ?>
        <a href="..\..\..\ODS\app\controllers\admin.php">admin page</a>
        <?php endif; ?>
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