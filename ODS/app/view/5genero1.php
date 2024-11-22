<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="5genero2.css"  >
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="5genero3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 5: Igualdade de Gênero</title>
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

        <h1>ODS 5: Igualdade de Gênero</h1>

     <p>O Objetivo de Desenvolvimento Sustentável 5 (ODS 5) busca alcançar a igualdade de gênero e empoderar todas as mulheres e meninas até 2030. Este objetivo é fundamental para garantir que todas as pessoas tenham os mesmos direitos e oportunidades, independentemente de seu gênero.
     </p> 
     <br>
     <br>

     <h2>Dimensões da Igualdade de Gênero</h2><br><br>

     <p><strong>Eliminação da Violência de Gênero:</strong> Combater todas as formas de violência contra mulheres e meninas, incluindo abuso físico, sexual e psicológico. Isso envolve leis e políticas eficazes, além de serviços de apoio.<br>
        <strong>Acesso à Educação e Emprego:</strong> Garantir que mulheres e meninas tenham acesso igual à educação e oportunidades de emprego, promovendo a equidade no mercado de trabalho.<br>
        <strong>Participação Política e Tomada de Decisão:</strong> Aumentar a representação de mulheres em posições de liderança política e em processos de tomada de decisão, garantindo que suas vozes sejam ouvidas.<br>
        <strong>Saúde e Direitos Reprodutivos:</strong> Proporcionar acesso a serviços de saúde de qualidade, incluindo cuidados de saúde sexual e reprodutiva, permitindo que as mulheres tomem decisões informadas sobre suas próprias vidas.<br>
        <strong>Divisão Igualitária de Tarefas Domésticas:</strong> Promover uma divisão mais equitativa das responsabilidades domésticas e de cuidados, reconhecendo e valorizando o trabalho não remunerado realizado por mulheres.<br>
     </p><br><br>

     <h2>Desafios da Igualdade de Gênero</h2><br><br>

     <p><strong>Violência de Gênero:</strong>A violência contra mulheres e meninas continua sendo uma questão prevalente em muitas sociedades, impactando sua saúde e bem-estar.<br>
        <strong>Desigualdade no Trabalho:</strong> Mulheres frequentemente enfrentam discriminação no mercado de trabalho, resultando em salários mais baixos e menos oportunidades de avanço.<br>
        <strong>Acesso Limitado a Recursos:</strong> Em muitas regiões, mulheres têm dificuldade em acessar terras, crédito e outros recursos econômicos, limitando sua capacidade de empreender.<br>
        <strong>Estereótipos e Normas Culturais:</strong> Normas sociais tradicionais muitas vezes perpetuam desigualdades de gênero, restringindo as oportunidades e a liberdade das mulheres.<br>
     </p><br><br>

     <h2>Estratégias para Promover a Igualdade de Gênero</h2><br><br>

     <p><strong>Educação e Sensibilização:</strong> Promover campanhas de conscientização sobre os direitos das mulheres e a importância da igualdade de gênero em todas as esferas da sociedade.<br>
        <strong>Legislação e Políticas:</strong> Implementar e reforçar leis que protejam os direitos das mulheres e promovam a igualdade de gênero, garantindo sua aplicação efetiva.<br>
        <strong>Empoderamento Econômico:</strong> Incentivar programas que apoiem o empreendedorismo feminino e proporcionem acesso a recursos financeiros e treinamentos.<br>
        <strong>Promoção de Modelos de Liderança Feminina:</strong> Incentivar a presença de mulheres em cargos de liderança e em processos de tomada de decisão, promovendo modelos a serem seguidos.<br>
        <strong>Serviços de Apoio:</strong> Garantir que existam serviços de apoio para vítimas de violência de gênero, como abrigos e assistência legal.<br>
     </p><br><br>

     <h2>Importância da Igualdade de Gênero</h2><br><br>

     <p>A igualdade de gênero é essencial para o desenvolvimento sustentável. Quando as mulheres são empoderadas, elas contribuem significativamente para a economia, a sociedade e a melhoria da qualidade de vida. A igualdade de gênero também está interligada a outros ODS, como a erradicação da pobreza, educação de qualidade e saúde.<br><br>
        Promover a igualdade de gênero não é apenas uma questão de justiça social, mas também uma condição fundamental para a construção de sociedades pacíficas, inclusivas e sustentáveis. Para alcançar o ODS 5, é necessária uma ação coletiva que envolva governos, sociedade civil e o setor privado, assegurando que todos, independentemente de seu gênero, tenham oportunidades iguais.
     </p><br><br>

     <h3>Progresso do Brasil no ODS 5</h3>
     <h3 id="tituloods5" style="font-size:18px">Proporção de pessoas que possuem telefone celular móvel, por sexo</h3>

     <canvas id="graficoods5" width="400" height="150"></canvas><br><Br>
     <canvas id="graficoods5.2" width="400" height="150"></canvas><br><Br>
     <canvas id="graficoods5.3" width="400" height="150"></canvas>

      <br><br><br><br><br><br><br>

      <div class="ods-container">
        <a href="1pobreza1.php"> <img id="primeiro" src="https://i.imgur.com/JDp1ezt.png" alt="Imagem do ODS 1"> </a>
        <a href="2fome1.php"> <img id="segundo" src="https://i.imgur.com/fNmsGeh.png" alt="Imagem do ODS 2"> </a>
        <a href="3saude1.php"> <img id="terceiro" src="https://i.imgur.com/Y38YEQl.png" alt="Imagem do ODS 3"> </a>
        <a href="4educacao1.php"> <img id="quarto" src="https://i.imgur.com/XsH9Pu6.png" alt="Imagem do ODS 4"> </a>
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