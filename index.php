<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <title>Rafael Lima</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="image/favicon.png" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://areaaperta.com/nicescroll/js/jquery.nicescroll.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("html").niceScroll();
        });
    </script>

    <script type="text/javascript" src="js/menu.js"></script>

</head>
<body>

    <header>

        <div class="conteiner">

            <nav>

                <div id="icon-menu"><img src="image/icon-manu.png"></div>
                <img src="image/logo-rafaelima-mini.png" id="logo-menu">
                <ul>
                    <li><p class="text-menu">PORTFÓLIO</p></li>
                    <li><p class="text-menu">HABILIDADES</p></li>
                    <li><p class="text-menu">CONTATO</p></li>
                </ul>

            </nav>

            <div id="banner">

                <img src="image/logo-rafaelima.png" id="logo">
                <p class="text-main-yellow">RAFAELIMA</p>

                <div id="webtext-content">
                    <div id="line-left"></div>
                    <p id="text-web" class="text-main-white">WEB</p>
                    <div id="line-right"></div>
                </div>

                <div id="clear"></div>

                <div id="icon-content">

                    <div id="icon-designer">

                        <p class="text-main-white-mini">DESIGNER</p>
                        <img src="image/design-icon.png">

                    </div>

                    <div id="icon-developer">

                        <p class="text-main-white-mini">DEVELOPER</p>
                        <img src="image/developer-icon.png">

                    </div>

                </div>

            </div>

        </div>

    </header>

    <main>

        <section id="portfolio">

            <div class="conteiner">

                <div id="section-title"><p class="text-section">PORTFÓLIO</p></div>
				
				<?php
				
					for($i = 0;$i < 6;$i++){				
				?>
				
                <div id="portfolio-box">
					
					<div id="portfolio-conteiner">
					
					  <div id="portfolio-background"></div>

					  <div id="portfolio-info">
						<div id="portfolio-bt-plus"><img src="image/icon-plus.png"></div>
						<div id="portfolio-info-title"><p class="text-section">VOLEYBAL</p></div>
						<div id="portfolio-info-text"><p class="text-default">JavaScript . PHP . WordPress</p></div>
					  </div>
					  
					</div>
                  <img src="image/site1.jpg">

                </div>
				
				<?php } ?>

            </div>

        </section>

        <div id="clear"></div>

        <section id="habilidade">

            <div class="conteiner">

                <div id="section-title"><p class="text-section">HABILIDADES</p></div>

                <div id="habilidade-text2"><p class="text-default2">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido.t</p></div>

                <div id="habilidade-conteiner">
                    
                    <div id="habilidade-box">

                        <div id="habilidade-icon"><img src="image/design-icon2.png"></div>
                        <div id="habilidade-subtitle"><p class="text-main-white-mini">DESIGN</p></div>
                        <div id="habilidade-text"><p class="text-default2">iuah fiuahf ohaod ufhaodiuhf aoduhoai uhaodi uhfaoidf ha</p></div>

                    </div>

                    <div id="habilidade-box">

                        <div id="habilidade-icon"><img src="image/developer-icon2.png"></div>
                        <div id="habilidade-subtitle"><p class="text-main-white-mini">PROGRAMAÇÃO</p></div>
                        <div id="habilidade-text"><p class="text-default2">iuah fiuahf ohaod ufhaodiuhf aoduhoai uhaodi uhfaoidf ha</p></div>

                    </div>

                </div>

            </div>

        </section>

        <section id="contato">

          <div class="conteiner">

                <div id="section-title"><p class="text-section">CONTATO</p></div>

                <div id="contato-text"><p class="text-default-blue">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor.</div>

                <div id="contato-phone"><p class="text-main-white-mini-blue">61 8612-1002</p></div>

                <form id="contato-formulario" method="post" action="">

                    <input type="text" id="nome-form" placeholder="NOME" class="text-placeholder">
                    <input type="email" id="email-form" placeholder="E-MAIL" class="text-placeholder">
                    <input type="tel" id="telefone-form" placeholder="TELEFONE" class="text-placeholder">
                    <textarea id="mensagem-form" placeholder="MENSAGEM"  class="text-placeholder"></textarea>
                    <input type="button" id="enviar-form" value="ENVIAR" class="text-section">
                    <div id="clear"></div>
                    
                </form>

          </div>

        </section>

    </main>

    <footer>
        <img src="image/logo-rafaelima-mini.png" id="logo-footer"
        <section id="copyright"><p class="text-footer">RAFAELIMA 2015 © COPYRIGHT</p></section>
    </footer>

</body>
</html>
