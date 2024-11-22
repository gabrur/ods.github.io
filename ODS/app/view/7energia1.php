<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="7energia2.css"  >
    <script src="animaheader.js" type="text/javascript" defer></script>
    <script src="7energia3.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png"alt="Icone do nosso projeto sobre ODS">
    <title>ODS 7: Energia Limpa e Acessível</title>
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

        <h1>ODS 7: Energia Acessível e Limpa </h1>

     <p>O Objetivo de Desenvolvimento Sustentável 7 (ODS 7) busca garantir o acesso à energia acessível, confiável, sustentável e moderna para todos até 2030. A energia é fundamental para o desenvolvimento econômico e social, afetando diretamente a qualidade de vida das pessoas e o crescimento das economias.
     </p> 
     <br>
     <br>

     <h2>Dimensões da Energia Acessível e Limpa</h2><br><br>

     <p><strong>Acesso Universal à Energia:</strong> Garantir que todas as pessoas tenham acesso a fontes de energia modernas, seguras e sustentáveis, especialmente em comunidades rurais e marginalizadas.<br>
        <strong>Energia Renovável:</strong> Promover o uso de fontes de energia renováveis, como solar, eólica e hidrelétrica, para reduzir a dependência de combustíveis fósseis e mitigar as mudanças climáticas.<br>
        <strong>Eficiência Energética:</strong> Aumentar a eficiência energética em todos os setores, incluindo edifícios, transporte e indústria, para reduzir o consumo de energia e as emissões de gases de efeito estufa.<br>
        <strong>Pesquisa e Inovação:</strong> Estimular a pesquisa e o desenvolvimento de novas tecnologias energéticas que sejam sustentáveis e acessíveis.<br>
        <strong>Infraestrutura Energética Sustentável:</strong> Investir em infraestrutura que suporte a produção e a distribuição de energia limpa, garantindo que os sistemas energéticos sejam resilientes e modernos.<br>
    
     </p><br><br>


     <h2>Desafios do Acesso à Energia</h2><br><br>

     <p><strong>Desigualdade no Acesso:</strong> Muitas comunidades, especialmente em regiões rurais e países em desenvolvimento, ainda carecem de acesso à eletricidade e a fontes de energia limpa.<br>
        <strong>Dependência de Combustíveis Fósseis:</strong> A dependência de carvão, petróleo e gás natural contribui para a poluição do ar e as mudanças climáticas, representando uma ameaça à saúde pública e ao meio ambiente.<br>
        <strong>Custos Elevados:</strong> O custo das tecnologias de energia renovável ainda pode ser elevado, dificultando a adoção em países em desenvolvimento.<br>
        <strong>Infraestrutura Insuficiente:</strong> A falta de investimentos em infraestrutura energética torna difícil a expansão do acesso à energia em muitas áreas.<br>
     </p><br><br>

     <h2>Estratégias para Alcançar o ODS 7</h2><br><br>

     <p><strong>Promoção de Políticas Energéticas Inclusivas:</strong> Implementar políticas que incentivem o acesso à energia para todos, com foco em comunidades vulneráveis.<br>
        <strong>Investimento em Energias Renováveis:</strong> Incentivar o investimento em tecnologias de energia renovável, facilitando o acesso a financiamento e suporte técnico.<br>
        <strong>Campanhas de Conscientização:</strong> Promover a conscientização sobre a importância da eficiência energética e das fontes de energia renováveis.<br>
        <strong>Desenvolvimento de Tecnologias Sustentáveis:</strong> Apoiar a pesquisa e a inovação em tecnologias que aumentem a eficiência energética e reduzam o impacto ambiental.<br>
        <strong>Fortalecimento da Infraestrutura Energética:</strong>  Investir em redes elétricas modernas e resilientes que possam suportar a integração de fontes de energia renováveis.<br>
     </p><br><br>

     <h2>Importância do ODS 7</h2><br><br>

     <p>A energia é um motor de desenvolvimento e desempenha um papel crucial na luta contra a pobreza, na promoção da saúde e na educação. Garantir acesso à energia limpa e sustentável é fundamental para mitigar as mudanças climáticas, melhorar a qualidade de vida e promover um crescimento econômico inclusivo.<br><br>
        Alcançar o ODS 7 requer um esforço conjunto entre governos, setor privado, organizações da sociedade civil e comunidades, para garantir que todos tenham acesso à energia necessária para viver de maneira digna e sustentável.
     </p><br><br>

     <h3>Progresso do Brasil no ODS 7</h3>
     <h3 id="tituloods7" style="font-size:18px">Percentagem da população com acesso à eletricidade</h3>

    
      <canvas id="graficoods7" width="400" height="188"></canvas>
     
      <br><br><br><br><br><br><br>

      <div class="ods-container">
        <a href="1pobreza1.php"> <img id="primeiro" src="https://i.imgur.com/JDp1ezt.png" alt="Imagem do ODS 1"> </a>
        <a href="2fome1.php"> <img id="segundo" src="https://i.imgur.com/fNmsGeh.png" alt="Imagem do ODS 2"> </a>
        <a href="3saude1.php"> <img id="terceiro" src="https://i.imgur.com/Y38YEQl.png" alt="Imagem do ODS 3"> </a>
        <a href="4educacao1.php"> <img id="quarto" src="https://i.imgur.com/XsH9Pu6.png" alt="Imagem do ODS 4"> </a>
        <a href="5genero1.php"> <img id="quinto" src="https://i.imgur.com/lR5sK3A.png" alt="Imagem do ODS 5"> </a>
        <a href="6saneamento1.php"> <img id="sexto" src="https://i.imgur.com/UMe0z3F.png" alt="Imagem do ODS 6"> </a>
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