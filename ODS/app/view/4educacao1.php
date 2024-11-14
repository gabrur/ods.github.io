<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="4educacao2.css"  >
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="4educacao3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png" alt="Icone do nosso projeto sobre ODS">
    <title>ODS 4: Educação de Qualidade</title>
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

      <h1>ODS 4: Educação de Qualidade </h1>

     <p>O Objetivo de Desenvolvimento Sustentável 4 (ODS 4) visa garantir educação inclusiva, equitativa e de qualidade, promovendo oportunidades de aprendizado ao longo da vida para todos até 2030. A educação é fundamental para o desenvolvimento pessoal e social, além de ser um motor de crescimento econômico e redução da pobreza.
     </p> 
     <br>
     <br>

     <h2>Dimensões da Educação</h2><br><br>

     <p><strong>Acesso à Educação:</strong> Garantir que todas as crianças tenham acesso à educação básica de qualidade, independentemente de sua origem socioeconômica, gênero ou localização geográfica.<br>
        <strong>Qualidade da Educação:</strong> A educação deve ser relevante e de alta qualidade, preparando os alunos para os desafios do século XXI. Isso envolve a formação de professores, currículos adequados e infraestrutura escolar.<br>
        <strong>Educação Inclusiva:</strong> Promover a inclusão de todos os alunos, incluindo aqueles com deficiência e outros grupos marginalizados, assegurando que recebam o apoio necessário para aprender.<br>
        <strong>Aprendizado ao Longo da Vida:</strong> Incentivar a educação continuada e a formação profissional, permitindo que as pessoas desenvolvam habilidades e conhecimentos ao longo de suas vidas.<br>
     </p><br><br>


     <h2>Desafios da Educação</h2><br><br>

     <p><strong>Desigualdade de Acesso:</strong> Muitas crianças, especialmente em regiões rurais e comunidades marginalizadas, ainda não têm acesso a escolas ou enfrentam barreiras para frequentar.<br>
        <strong>Qualidade Educacional:</strong> Em muitos lugares, a qualidade do ensino é comprometida por falta de recursos, formação inadequada de professores e currículos desatualizados.<br>
        <strong>Custo da Educação:</strong> As despesas com educação, como taxas escolares e materiais, podem ser um impedimento para famílias de baixa renda.<br>
        <strong>Impactos de Conflitos e Crises:</strong> Em áreas afetadas por conflitos ou desastres naturais, o acesso à educação é severamente prejudicado.<br>
     </p><br><br>

     <h2>Estratégias para Promover a Educação de Qualidade</h2><br><br>

     <p><strong>Investimento em Infraestrutura Escolar:</strong> Melhorar a infraestrutura das escolas, incluindo acesso a tecnologia, água potável e saneamento.<br>
        <strong>Formação e Capacitação de Professores:</strong> Garantir que os educadores recebam a formação necessária e apoio contínuo para melhorar a qualidade do ensino.<br>
        <strong>Desenvolvimento de Currículos Inclusivos:</strong>: Criar currículos que atendam às necessidades de todos os alunos, respeitando a diversidade cultural e promovendo a educação sobre direitos humanos.<br>
        <strong>Políticas de Inclusão:</strong> Implementar políticas que promovam a inclusão de grupos marginalizados e garantam que todos os alunos tenham as mesmas oportunidades de aprendizado.<br>
        <strong>Educação para o Desenvolvimento Sustentável:</strong>  Integrar temas de sustentabilidade e cidadania nos currículos, preparando os alunos para serem cidadãos conscientes e ativos.<br>
     </p><br><br>

     <h2>Importância da Educação de Qualidade</h2><br><br>

     <p>A educação de qualidade é um fator crucial para a construção de sociedades pacíficas, justas e inclusivas. Ela empodera indivíduos, promove a igualdade de gênero e contribui para a redução da pobreza. Além disso, uma população educada é mais capaz de enfrentar os desafios sociais, econômicos e ambientais do futuro.<br><br>
        Alcançar o ODS 4 requer uma abordagem colaborativa, envolvendo governos, organizações da sociedade civil, setor privado e comunidades, para garantir que todos tenham acesso a uma educação de qualidade e a oportunidades de aprendizado ao longo da vida.
     </p><br><br>

     <h3>Progresso do Brasil no ODS 4</h3>
     <h3 id="tituloods4" style="font-size:18px">Taxa de participação no ensino organizado (um ano antes da idade oficial de ingresso no ensino fundamental), por sexo</h3>

     <canvas id="graficoods4" width="500" height="230"></canvas><br><br>
     <canvas id="graficoods4.2" width="400" height="150"></canvas>

        
      <br><br><br><br><br><br><br>

      <div class="ods-container">
        <a href="1pobreza1.php"> <img id="primeiro" src="https://i.imgur.com/JDp1ezt.png" alt="Imagem do ODS 1"> </a>
        <a href="2fome1.php"> <img id="segundo" src="https://i.imgur.com/fNmsGeh.png" alt="Imagem do ODS 2"> </a>
        <a href="3saude1.php"> <img id="terceiro" src="https://i.imgur.com/Y38YEQl.png" alt="Imagem do ODS 3"> </a>
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