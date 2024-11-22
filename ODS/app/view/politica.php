<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="animaheader.js" type="text/javascript" defer></script>
      <link rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="politica2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
      <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png" alt="Icone do nosso projeto sobre ODS">
      <title>Políticas de Privacidades</title>
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
        
        <main class="corpo">
            <div class="caixapol">
                <div class="politicas">
                    <h2><span style="color: rgb(68, 68, 68);">Política Privacidade</span></h2><p><br><span style="color: rgb(68, 68, 68);">A sua privacidade é importante para nós. É política do O que é ODS respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site <a href="index.php">O que é ODS</a>, e outros sites que possuímos e operamos.</span></p><br><p><span style="color: rgb(68, 68, 68);">Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.</span></p><br><p><span style="color: rgb(68, 68, 68);">Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.</span></p><br><p><span style="color: rgb(68, 68, 68);">Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.</span></p><br><p><span style="color: rgb(68, 68, 68);">O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas&nbsp;</span><br><a href="https://politicaprivacidade.com/" rel="noopener noreferrer" target="_blank" style="background-color: transparent; color: rgb(68, 68, 68);">políticas de privacidade.</a><br><span style="color: rgb(68, 68, 68);"></span></p><br><p><span style="color: rgb(68, 68, 68);">Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</span></p><br><p><span style="color: rgb(68, 68, 68);">O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto conosco.</span></p><br><p><span style="color: rgb(68, 68, 68);"><ul><li><span style="color: rgb(68, 68, 68);">O serviço Google AdSense que usamos para veicular publicidade usa um cookie DoubleClick para veicular anúncios mais relevantes em toda a Web e limitar o número de vezes que um determinado anúncio é exibido para você.</span></li><li><span style="color: rgb(68, 68, 68);">Para mais informações sobre o Google AdSense, consulte as FAQs oficiais sobre privacidade do Google AdSense.</span></li><li><span style="color: rgb(68, 68, 68);">Utilizamos anúncios para compensar os custos de funcionamento deste site e fornecer financiamento para futuros desenvolvimentos. Os cookies de publicidade comportamental usados ​​por este site foram projetados para garantir que você forneça os anúncios mais relevantes sempre que possível, rastreando anonimamente seus interesses e apresentando coisas semelhantes que possam ser do seu interesse.</span></li><li><span style="color: rgb(68, 68, 68);">Vários parceiros anunciam em nosso nome e os cookies de rastreamento de afiliados simplesmente nos permitem ver se nossos clientes acessaram o site através de um dos sites de nossos parceiros, para que possamos creditá-los adequadamente e, quando aplicável, permitir que nossos parceiros afiliados ofereçam qualquer promoção que pode fornecê-lo para fazer uma compra.</span></li></ul><p><br></p></span></p><br><h3><span style="color: rgb(68, 68, 68);">Compromisso do Usuário</span></h3><br><p><span style="color: rgb(68, 68, 68);">O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o O que é ODS oferece no site e com caráter enunciativo, mas não limitativo:</span></p><br>  <ul><li><span style="color: rgb(68, 68, 68);">A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</span></li><li><span style="color: rgb(68, 68, 68);">B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, </span><span style="color: rgb(33, 37, 41);"><a href='https://kiwibet.br.com' style='color:inherit !important; text-decoration: none !important; font-size: inherit !important;'>kiwibet</a></span><span style="color: rgb(68, 68, 68);"> ou azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</span></li><li><span style="color: rgb(68, 68, 68);">C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do O que é ODS, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</span></li></ul><br><h3><span style="color: rgb(68, 68, 68);">Mais informações</span></h3><br><p><span style="color: rgb(68, 68, 68);">Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.</span></p><br><p><span style="color: rgb(68, 68, 68);">Esta política é efetiva a partir de&nbsp;16 November 2024 03:04</span></p>
                </div>
            </div>
        </main>

        <footer>
            <div class="footer-tudo">
                <div class="footer-conteudo">
                    <div class="footer-links">
                        <?php if (isset($_SESSION['grupo_id']) && ($_SESSION['grupo_id'] == 1)): ?>
                        <a href="..\..\..\ODS\app\controllers\admin.php">admin page</a>
                        <?php endif; ?>
                        <a href="politica.php">Politica de Privacidade</a>
                        <a href="sobrenos.php">Sobre</a>
                        <a href="contato.php">Contato</m>
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