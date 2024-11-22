<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="3saude2.css" >
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="3saude3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png" alt="Icone do nosso projeto sobre ODS">
    <title>ODS 3: Saúde e Bem-Estar</title>
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

        <h1>ODS 3: Saúde e Bem-Estar</h1>

     <p>O Objetivo de Desenvolvimento Sustentável 3 (ODS 3) tem como meta garantir uma vida saudável e promover o bem-estar para todos, em todas as idades, até 2030. Este objetivo aborda uma ampla gama de questões relacionadas à saúde, reconhecendo que o bem-estar físico, mental e social é essencial para o desenvolvimento humano.
     </p> 
     <br>
     <br>

     <h2>Dimensões da Saúde e Bem-Estar</h2><br><br>

     <p><strong>Saúde Materna e Infantil:</strong> Reduzir a mortalidade materna e infantil é uma prioridade, garantindo acesso a cuidados de saúde adequados durante a gravidez e a infância.<br>
        <strong>Doenças Transmissíveis:</strong> Combater doenças como HIV/AIDS, tuberculose e malária, além de lidar com surtos de doenças infecciosas, é fundamental para a saúde global.<br>
        <strong>Doenças Não Transmissíveis:</strong> Enfrentar problemas como doenças cardíacas, diabetes e câncer, que são responsáveis por uma grande parte das mortes prematuras, através da promoção de estilos de vida saudáveis.<br>
        <strong>Saúde Mental:</strong> A promoção da saúde mental e a prevenção de transtornos mentais são cruciais para o bem-estar geral da população.<br>
        <strong>Acesso a Cuidados de Saúde:</strong> Garantir que todas as pessoas tenham acesso a serviços de saúde de qualidade, sem enfrentar barreiras financeiras.<br>
    
    </p><br><br>


     <h2>Causas de Problemas de Saúde</h2><br><br>

     <p><strong>Desigualdades Sociais:</strong> As desigualdades econômicas e sociais impactam o acesso a serviços de saúde e a qualidade da nutrição.<br>
        <strong>Ambientes Não Saudáveis:</strong> Poluição do ar e da água, falta de saneamento e condições de trabalho perigosas afetam diretamente a saúde.<br>
        <strong>Estilo de Vida:</strong> Hábitos como dieta inadequada, sedentarismo e consumo de substâncias nocivas (como tabaco e álcool) contribuem para doenças crônicas.<br>
        <strong>Falta de Educação em Saúde:</strong> A falta de informações sobre cuidados de saúde, nutrição e prevenção de doenças pode levar a escolhas prejudiciais.<br>
     </p><br><br>

     <h2>Estratégias para Promover Saúde e Bem-Estar</h2><br><br>

     <p><strong>Acesso Universal a Cuidados de Saúde:</strong> Implementar sistemas de saúde que garantam que todos, especialmente os mais vulneráveis, possam acessar serviços de saúde sem enfrentar dificuldades financeiras.<br>
        <strong>Promoção de Estilos de Vida Saudáveis:</strong> Campanhas de conscientização sobre a importância da alimentação saudável, atividade física e saúde mental.<br>
        <strong>Investimento em Saúde Mental:</strong> Desenvolver programas que ofereçam apoio psicológico e recursos para o tratamento de transtornos mentais.<br>
        <strong>Vacinação e Prevenção:</strong> Promover programas de vacinação e campanhas de prevenção de doenças para aumentar a imunidade da população.<br>
        <strong>Melhoria das Condições de Vida:</strong>  Investir em infraestrutura, saneamento básico e políticas ambientais que promovam a saúde.<br>
     </p><br><br>

     <h2>Importância da Saúde e Bem-Estar</h2><br><br>

     <p>A saúde é um direito humano fundamental e essencial para o desenvolvimento sustentável. Quando as populações têm acesso a cuidados de saúde de qualidade, isso não apenas melhora a qualidade de vida, mas também aumenta a produtividade e a capacidade econômica de uma nação. Além disso, a promoção do bem-estar mental e físico contribui para sociedades mais justas e resilientes.<br><br>
        Alcançar o ODS 3 exige uma abordagem colaborativa, envolvendo governos, organizações da sociedade civil, setor privado e comunidades, para garantir que todos tenham a oportunidade de viver uma vida saudável e plena.
     </p><br><br>

     <h3>Progresso do Brasil no ODS 3</h3>
     <h3 id="tituloods3" style="font-size:18px">Proporção de nascimentos assistidos por pessoal de saúde qualificado</h3>

     <canvas id="graficoods3" width="400" height="170"></canvas>

      <br><br><br><br><br><br><br>

      <div class="ods-container">
        <a href="1pobreza1.php"> <img id="primeiro" src="https://i.imgur.com/JDp1ezt.png" alt="Imagem do ODS 1"> </a>
        <a href="2fome1.php"> <img id="segundo" src="https://i.imgur.com/fNmsGeh.png" alt="Imagem do ODS 2"> </a>
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