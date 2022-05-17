<?php
include "config.php";
?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Kinsmen Collective</title>
</head>

<body onresize='checkWidth()'>
    <div class='background-nav' id='hb'>
        <nav>
            <a href="/work">
                <?php echo $lang['werk'];?>
                <div class='circle'></div>
            </a>
            <a href="/about">
                <?php echo $lang['over_ons'];?>
                <div class='circle'></div>
            </a>
            <a href="https://anymigo.tv" target='_blank'>
                anymigo
                <div class='circle'></div>
            </a>
            <div class="lang-container">
                <form class="lang-form" action="" method='get'>
                    <input type="hidden" name='lang' value='nl'>
                    <input class="lang-button <?php echo $lang['nl-active'];?>" type="submit" value='NL'>
                </form>
                |
                <form class="lang-form" action="" method='get'>
                    <input type="hidden" name='lang' value='en'>
                    <input class="lang-button <?php echo $lang['en-active'];?>" type="submit" value='EN'>
                </form>
            </div>
        </nav>
    </div>
    <main class='fg'>
        <header>
            <a href="/index">
                <svg id="kinsmen-logo" class="kinsmen-logo-light" data-name="kinsmen-logo"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.27 50.56">
                    <polygon class="kinsmen-logo-1"
                        points="8.29 37.68 14.25 37.68 20.7 50.56 29.97 50.56 19.37 29.41 0 29.41 0 50.56 8.29 50.56 8.29 37.68" />
                    <polygon class="kinsmen-logo-1"
                        points="14.25 12.88 8.29 12.88 8.29 0 0 0 0 21.14 19.37 21.14 29.97 0 20.7 0 14.25 12.88" />
                    <polygon class="kinsmen-logo-1"
                        points="51.27 8.23 51.27 0 39.12 0 26.39 25.28 39.12 50.56 51.27 50.56 51.27 42.33 44.24 42.33 35.66 25.28 44.24 8.23 51.27 8.23" />
                </svg>
            </a>
            <nav class='header-nav-desktop'>
                <a href="/work">
                    <?php echo $lang['werk'];?>
                    <div class='circle'></div>
                </a>
                <a href="/about" class="active">
                    <?php echo $lang['over_ons'];?>
                    <div class='circle'></div>
                </a>
                <a href="https://anymigo.tv" target='_blank'>
                    anymigo
                    <div class='circle'></div>
                </a>
                <div class="lang-container">
                    <form class="lang-form" action="" method='get'>
                        <input type="hidden" name='lang' value='nl'>
                        <input class="lang-button <?php echo $lang['nl-active'];?>" type="submit" value='NL'>
                    </form>
                    |
                    <form class="lang-form" action="" method='get'>
                        <input type="hidden" name='lang' value='en'>
                        <input class="lang-button <?php echo $lang['en-active'];?>" type="submit" value='EN'>
                    </form>
                </div>
            </nav>
            <nav class='header-nav-mobile'>
                <button id='hamburger-btn' onclick='sliderHB()'>
                    <div class='hb1'></div>
                    <div class='hb1'></div>
                    <div class='hb2'></div>
                </button>
            </nav>
        </header>

        <div class='barba-wrapper' data-barba="wrapper" >
            <div class='barba-container' data-barba="container" data-barba-namespace='about'>
                <section class='title-light'>
                    <h1><?php echo $lang['about-titel'];?></h1>

                    <img src="static/team.jpg" alt="" class='about-main-img'>

                    <p><?php echo $lang['about-tekst'];?></p>
                </section>
                <section class='text-1'>
                    <h1>The collective</h1>
                </section>
                <section class='staff-grid'>
                    <div class='img-container'>
                        <img src="static/bart.jpg" alt="">
                        <h1>Bart</h1>
                        <p>CO-FOUNDER / <?php echo $lang['algemeendirecteur'];?></p>
                    </div>
                    <div class='img-container'>
                        <img src="static/bas.jpg" alt="">
                        <h1>Bas</h1>
                        <p>CO-FOUNDER / <?php echo $lang['creatiefdirecteur'];?></p>
                    </div>
                    <div class='img-container'>
                        <img src="static/tom.jpg" alt="">
                        <h1>Tom</h1>
                        <p>SENIOR MOTION DESIGNER</p>
                    </div>
                    <div class='img-container'>
                        <img src="static/robin.jpg" alt="">
                        <h1>Robin</h1>
                        <p>FRONT END DEVELOPER</p>
                    </div>
                    <div class='img-container'>
                        <img src="static/niels.jpg" alt="">
                        <h1>Niels</h1>
                        <p>DESIGNER</p>
                    </div>
                    <div class='img-container'>
                        <img src="static/ruud.jpg" alt="">
                        <h1>Ruud</h1>
                        <p>DESIGNER</p>
                    </div>
                    <div class='img-container'>
                        <img src="static/tim.jpg" alt="">
                        <h1>Tim</h1>
                        <p>MOTION DESIGNER</p>
                    </div>
                    <div class='img-container'>
                        <img src="static/wouter.jpg" alt="">
                        <h1>Wouter</h1>
                        <p><?php echo $lang['componist'];?> / SOUND DESIGNER</p>
                    </div>
                    <div class='img-container img-container-filler'>
                        
                    </div>
                    <div class='img-container'>
                        <img src="static/vern.jpg" alt="">
                        <h1>Vernon</h1>
                        <p><?php echo $lang['fotograaf'];?></p>
                    </div>
                    <div class='img-container'>
                        <img src="static/creijn.jpg" alt="">
                        <h1>Creijn</h1>
                        <p><?php echo $lang['videograaf'];?></p>
                    </div>
                    
                    <div class='img-container img-container-filler'>
                        
                    </div>
                </section>
                <section class='about-black-section'>
                    <h1><?php echo $lang['roots-titel'];?></h1>
                    <p><?php echo $lang['roots-tekst-een'];?></p>
                    <div class="photo-row-container">
                        <img class='left-img' src="/static/left.png">
                        <img class='right-img' src="/static/right.png">
                        <img class='kinsmen-logo-circle' src="/static/kinsmen.svg">

                    </div>
                    <p class='less-margin'><?php echo $lang['roots-tekst-twee'];?></p>

                    <div class="photo-grid-container-desktop">
                        <div class="photo-grid-container-column-one">
                            <img src="/static/DSC08335.png">
                            <img src="/static/DSC08457.png">
                            <img src="/static/DSC08502.png">
                            <img src="/static/DSC07759.png">
                            <img src="/static/DSC08447.png">
                        </div>
                        <div class="photo-grid-container-column-two">
                            <div class="spacer"></div>
                            <img src="/static/DSC07724.png">
                            <img src="/static/DSC08451.png">
                            <img src="/static/DSC03322.png">
                            <img src="/static/DSC_7979.png">
                            <img src="/static/DSC08442.png">
                        </div>
                        <div class="photo-grid-container-column-three">
                            <div class="spacer"></div>
                            <img src="/static/DSC_0338.png">
                            <img src="/static/DSC_3312.png">
                            <img src="/static/DSC07790.png">
                            <img src="/static/DSC08499.png">
                        </div>
                    </div>
                    <div class="photo-grid-container-mobile">
                        <div class="photo-grid-container-column-one">
                            <img src="/static/DSC08335.png">
                            <img src="/static/DSC08457.png">
                            <img src="/static/DSC07790.png">
                            <img src="/static/DSC08499.png">
                            <img src="/static/DSC08502.png">

                            <img src="/static/DSC07759.png">
                            <img src="/static/DSC08447M.png">
                        </div>
                        <div class="photo-grid-container-column-two">
                            <div class="spacer"></div>
                            <img src="/static/DSC07724.png">
                            <img src="/static/DSC08451.png">
                            <img src="/static/DSC_0338.png">
                            <img src="/static/DSC_3312.png">
                            <img src="/static/DSC03322.png">
                            <img src="/static/DSC_7979.png">
                            <img src="/static/DSC08442.png">
                        </div>
                    </div>
                </section>
                <footer class='fg footer creme-footer'>
                    <div class='footer-header'>
                        <h1><?php echo $lang['footer-titel']; ?></h1>
                        <svg id="kinsmen-icon-footer" data-name="kinsmen-icon-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.45 60.6">
                            <polygon class="kinsmen-logo-creme"
                                points="9.93 45.16 17.08 45.16 24.82 60.6 35.92 60.6 23.22 35.25 0 35.25 0 60.6 9.93 60.6 9.93 45.16" />
                            <polygon class="kinsmen-logo-creme"
                                points="17.08 15.43 9.93 15.43 9.93 0 0 0 0 25.34 23.22 25.34 35.92 0 24.82 0 17.08 15.43" />
                            <polygon class="kinsmen-logo-creme"
                                points="61.45 9.87 61.45 0 46.89 0 31.63 30.3 46.89 60.6 61.45 60.6 61.45 50.73 53.03 50.73 42.74 30.3 53.03 9.87 61.45 9.87" />
                        </svg>
                        
                    </div>
                    <div class="footer-grid">
                        <div class="element">
                            <h1>Kinsmen Collective</h1>
                            <p>KVK: 70001693</p>
                            <p>BTW: NL858098878B01</p>
                        </div>
                        <div class="element">
                            <h1><?php echo $lang['footer-adres']; ?></h1>
                            <a href='https://www.google.com/maps/search/?api=1&query=Kinsmen+Collective'
                                target="_blank">Veemarktkade 8 <br> 5222 AE, Den Bosch</a>
                        </div>
                        <div class="element">
                            <h1>Contact</h1>
                            <a href="mailto:hello@kinsmen.tv">hello@kinsmen.tv</a>
                            <a href="#">073-822 49 45</a>
                        </div>
                        <div class="element">
                            <h1>Socials</h1>
                            <a href="https://www.instagram.com/kinsmen.tv/" target="_blank">Instagram</a>
                            <a href="https://www.linkedin.com/company/kinsmencollective/" target="_blank">LinkedIn</a>
                        </div>
                    </div>
                    <div class="footer-footer">
                        <p>Copyright &copy; 2021 Kinsmen Collective</p>
                    </div>
                </footer>
            </div>
        </div>
    </main>

    
    <script src='https://player.vimeo.com/api/player.js'></script>
    <script src='app/main.js'></script>
    <script src='app/barba.js'></script>
    <script src='app/barba-css.js'></script>
    <script src='app/scripts.js'></script>
</body>

</html>