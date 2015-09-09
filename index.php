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
            /*$("html").niceScroll();*/
            $("#portfolio-window").niceScroll();
        });
    </script>

    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/portfoliobox.js"></script>

</head>
<body>

    <header id="index">

        <div class="conteiner">

            <nav>

                <div id="icon-menu"><img src="image/icon-manu.png"></div>
                <a href="#index" id="bttopheader"><img src="image/logo-rafaelima-mini.png" id="logo-menu"></a>
                <ul>
                    <li><a href="#portfolio" class="text-menu" id="btportfolio">PORTFÓLIO</a></li>
                    <li><a href="#habilidade" class="text-menu" id="bthabilidade">HABILIDADES</a></li>
                    <li><a href="#contato" class="text-menu" id="btcontato">CONTATO</a></li>
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

        <div id="portfolio-window-background"></div>
        <div class="conteiner">
            
            <div id="portfolio-window">

                <div id="portfolio-window-view">

                </div>

                <div id="portfolio-window-info">

                    <div id="window-info-title">
                        <p class="text-section-window"></p>
                    </div>

                    <br>

                    <div id="window-info-text">
                        <p class="text-default-blue"></p>
                    </div>

                    <br>

                    <div id="window-info-site">
                        <p class="text-default-blue"><a href="" class="text-default-blue"></a></p>
                    </div>

                </div>

                <div id="clear"></div>
            </div>

        </div>

            <div class="conteiner">

                <div id="section-title"><p class="text-section">PORTFÓLIO</p></div>

				<!-- PORTFOLIO BOX -->

                <div class="portfolio-box">
					
					<div class="portfolio-conteiner">
					
                      <div class="portfolio-background"></div>

					  <div class="portfolio-info">
						<div id="portfolio-bt-plus"><img src="image/icon-plus.png"></div>
						<div id="portfolio-info-title"><p class="text-section">VOLEYBAL</p></div>
						<div id="portfolio-info-text"><p class="text-default">JavaScript . PHP . MySQL</p></div>
                        <div id="portfolio-info-site"><p class="text-default">www.voleibal.com.br</p></div>
					  </div>

					</div>
                  <img src="image/site1.jpg">

                </div>

                <!-- END PORTFOLIO BOX -->

                <!-- PORTFOLIO BOX -->

                <div class="portfolio-box">
                    
                    <div class="portfolio-conteiner">
                    
                      <div class="portfolio-background"></div>

                      <div class="portfolio-info">
                        <div id="portfolio-bt-plus"><img src="image/icon-plus.png"></div>
                        <div id="portfolio-info-title"><p class="text-section">ZOOM</p></div>
                        <div id="portfolio-info-text"><p class="text-default">JavaScript . PHP . WordPress</p></div>
                        <div id="portfolio-info-site"><p class="text-default">www.zoom.com.br</p></div>
                        <div id="portfolio-info-view">
                            <img src="image/site-teste.jpg">
                            <img src="image/site-teste.jpg">
                        </div>
                      </div>

                    </div>
                  <img src="image/site1.jpg">

                </div>
				
                <!-- END PORTFOLIO BOX -->

            </div>

        </section>

        <div id="clear"></div>

        <section id="habilidade">

            <div class="conteiner">

                <div id="section-title"><p class="text-section">HABILIDADES</p></div>

                <div id="habilidade-text"><p class="text-default2">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido.t</p></div>

                <div id="habilidade-conteiner">
                    
                    <div id="habilidade-box">

                        <div id="habilidade-icon"><img src="image/design-icon2.png"></div>
                        <div id="habilidade-subtitle"><p class="text-main-white-mini">DESIGN</p></div>
                        <div id="habilidade-grafico">

                            <!-- BARRA HABILIDADE -->
                            <div id="habilidade-barra-borda">
                                <div id="habilidade-barra-70">
                                    <div id="habilidade-nome"><p class="text-default-blue">Photoshop</p></div>
                                </div>
                            </div>
                            <div id="habilidade-porcentagem"><p class="text-default2">70%</p></div>
                            <!-- BARRA HABILIDADE -->

                            <!-- BARRA HABILIDADE -->
                            <div id="habilidade-barra-borda">
                                <div id="habilidade-barra-40">
                                    <div id="habilidade-nome"><p class="text-default-blue">Illustrator</p></div>
                                </div>
                            </div>
                            <div id="habilidade-porcentagem"><p class="text-default2">40%</p></div>
                            <!-- BARRA HABILIDADE -->

                            <!-- BARRA HABILIDADE -->
                            <div id="habilidade-barra-borda">
                                <div id="habilidade-barra-70">
                                    <div id="habilidade-nome"><p class="text-default-blue">Layout Website</p></div>
                                </div>
                            </div>
                            <div id="habilidade-porcentagem"><p class="text-default2">70%</p></div>
                            <!-- BARRA HABILIDADE -->

                            <!-- BARRA HABILIDADE -->
                            <div id="habilidade-barra-borda">
                                <div id="habilidade-barra-60">
                                    <div id="habilidade-nome"><p class="text-default-blue">Logotipo</p></div>
                                </div>
                            </div>
                            <div id="habilidade-porcentagem"><p class="text-default2">60%</p></div>
                            <!-- BARRA HABILIDADE -->

                        </div>

                    </div>

                    <div id="habilidade-box">

                        <div id="habilidade-icon"><img src="image/developer-icon2.png"></div>
                        <div id="habilidade-subtitle"><p class="text-main-white-mini">PROGRAMAÇÃO</p></div>
                        <div id="habilidade-grafico">

                            <!-- BARRA HABILIDADE -->
                            <div id="habilidade-barra-borda">
                                <div id="habilidade-barra-80">
                                    <div id="habilidade-nome"><p class="text-default-blue">HTML5 & CSS3</p></div>
                                </div>
                            </div>
                            <div id="habilidade-porcentagem"><p class="text-default2">80%</p></div>
                            <!-- BARRA HABILIDADE -->

                            <!-- BARRA HABILIDADE -->
                            <div id="habilidade-barra-borda">
                                <div id="habilidade-barra-50">
                                    <div id="habilidade-nome"><p class="text-default-blue">PHP</p></div>
                                </div>
                            </div>
                            <div id="habilidade-porcentagem"><p class="text-default2">50%</p></div>
                            <!-- BARRA HABILIDADE -->

                            <!-- BARRA HABILIDADE -->
                            <div id="habilidade-barra-borda">
                                <div id="habilidade-barra-40">
                                    <div id="habilidade-nome"><p class="text-default-blue">MySQL</p></div>
                                </div>
                            </div>
                            <div id="habilidade-porcentagem"><p class="text-default2">40%</p></div>
                            <!-- BARRA HABILIDADE -->

                            <!-- BARRA HABILIDADE -->
                            <div id="habilidade-barra-borda">
                                <div id="habilidade-barra-60">
                                    <div id="habilidade-nome"><p class="text-default-blue">Jquery</p></div>
                                </div>
                            </div>
                            <div id="habilidade-porcentagem"><p class="text-default2">60%</p></div>
                            <!-- BARRA HABILIDADE -->

                            <!-- BARRA HABILIDADE -->
                            <div id="habilidade-barra-borda">
                                <div id="habilidade-barra-50">
                                    <div id="habilidade-nome"><p class="text-default-blue">WordPress</p></div>
                                </div>
                            </div>
                            <div id="habilidade-porcentagem"><p class="text-default2">50%</p></div>
                            <!-- BARRA HABILIDADE -->

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section id="contato">

          <div class="conteiner">

                <div id="section-title"><p class="text-section">CONTATO</p></div>

                <div id="contato-text"><p class="text-default-blue">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor.</div>

                <div id="contato-box">

                    <img src="image/celular-icon.png" id="icon-celular">
                    <p class="text-main-white-mini-blue">61 8612-1002</p>

                </div>

                <div id="contato-box">

                    <img src="image/email-icon.png" id="icon-email">
                    <p class="text-main-white-mini-blue">rafadexter@gmail.com</p>

                </div>

          </div>

        </section>

    </main>

    <footer>
        <a href="#index" id="btfooter"><img src="image/logo-rafaelima-mini.png" id="logo-footer"></a>
        <section id="copyright"><p class="text-footer">RAFAELIMA 2015 © COPYRIGHT</p></section>
    </footer>

</body>
</html>
