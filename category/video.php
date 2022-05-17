<?php
include $_SERVER['DOCUMENT_ROOT']."/config.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
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
                <a href="/work" class="active">
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
            <nav class='header-nav-mobile'>
                <button id='hamburger-btn' onclick='sliderHB()'>
                    <div class='hb1'></div>
                    <div class='hb1'></div>
                    <div class='hb2'></div>
                </button>
            </nav>
        </header>
        
        <div class='filter-container' id='filter-container'>
            <div id="filter-link-container">
                <a href="/work" ><?php echo $lang['alles']; ?></a>
                <a href="/category/animatie"><?php echo $lang['animatie']; ?></a>
                <a href="/category/video" class='selected'>VIDEO</a>
                <a href="/category/illustratie"><?php echo $lang['illustratie']; ?></a>
                <a href="/category/fotografie"><?php echo $lang['fotografie']; ?></a>
            </div>
            <button id='button-arrow' onclick='filter()' style="transform: rotate(0deg);">
                <svg id="arrow-filter" data-name="arrow-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.06 16.16"><polygon points="8.08 16.16 0 8.08 8.08 0 10.06 1.98 3.96 8.08 10.06 14.18 8.08 16.16"/></svg>
            </button>
            <button id="filter-button" onclick='filter()'>FILTER</button>
        </div>

        <div class='barba-wrapper' data-barba="wrapper" data-barba-namespace='work'>
            <div class='barba-container' data-barba="container">
                
                <section class='projects'>
                    <a href="/projecten/ncb125jaar" class='w-100'>
                        <img src="/static/projects/NCB125jaar/1500x300.jpg" alt="">
                        <div class='overlay'>
                            <h1><?php echo $lang['zlto-titel']; ?></h1>
                            <p>ZLTO</p>
                        </div>
                    </a>
                    <a href="/projecten/ncb125jaar" class='mobile-work-project-block'>
                        <img src="/static/projects/NCB125jaar/503x300.jpg" alt="">
                        <div class='overlay'>
                            <h1><?php echo $lang['zlto-titel']; ?></h1>
                            <p>ZLTO</p>
                        </div>
                    </a>
                    <a href="/projecten/dott" class='w-66'>
                        <img src="/static/projects/Dott/983x300.jpg" alt="">
                        <div class='overlay'>
                            <h1><?php echo $lang['dott-titel']; ?></h1>
                            <p>DOTT</p>
                        </div>
                    </a>
                    <a href="/projecten/dott" class='mobile-work-project-block'>
                        <img src="/static/projects/Dott/503x300.jpg" alt="">
                        <div class='overlay'>
                            <h1><?php echo $lang['dott-titel']; ?></h1>
                            <p>DOTT</p>
                        </div>
                    </a>
                    <a href="/projecten/spoorzone" class='w-33'>
                        <img src="/static/projects/SpoorzoneDenBosch/503x300.jpg" alt="">
                        <div class='overlay'>
                            <h1><?php echo $lang['spoorzone-titel']; ?></h1>
                            <p>Gemeente Den Bosch</p>
                        </div>
                    </a>
                    <a href="/projecten/spoorzone" class='mobile-work-project-block'>
                        <img src="/static/projects/SpoorzoneDenBosch/503x300.jpg" alt="">
                        <div class='overlay'>
                            <h1><?php echo $lang['spoorzone-titel']; ?></h1>
                            <p>Gemeente Den Bosch</p>
                        </div>
                    </a>
                    
                    <a href="/projecten/payvisionmarketing" class='w-50'>
                        <img src="/static/projects/PayvisionMarketing/743x300.jpg" alt="">
                        <div class='overlay'>
                            <h1><?php echo $lang['payvision-marketing-titel']; ?></h1>
                            <p>Payvision</p>
                        </div>
                    </a>
                    <a href="/projecten/payvisionmarketing" class='mobile-work-project-block'>
                        <img src="/static/projects/PayvisionMarketing/503x300.jpg" alt="">
                        <div class='overlay'>
                            <h1><?php echo $lang['payvision-marketing-titel']; ?></h1>
                            <p>Payvision</p>
                        </div>
                    </a>
                    <a href="/projecten/payvisionculture" class='w-50'>
                        <img src="/static/projects/PayvisionCulture/743x300.jpg" alt="">
                        <div class='overlay'>
                            <h1><?php echo $lang['payvision-culture-titel']; ?></h1>
                            <p>Payvision</p>
                        </div>
                    </a>
                    <a href="/projecten/payvisionculture" class='mobile-work-project-block'>
                        <img src="/static/projects/PayvisionCulture/503x300.jpg" alt="">
                        <div class='overlay'>
                            <h1><?php echo $lang['payvision-culture-titel']; ?></h1>
                            <p>Payvision</p>
                        </div>
                    </a>
                    
                </section>
                <footer class='fg footer'>
                    <div class='footer-header'>
                        <h1>Wij zijn een collectief van ontwerpers, artiesten en content-makers met verstand van marketing.</h1>
                        <svg id="kinsmen-icon-footer" data-name="kinsmen-icon-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.45 60.6">
                            <polygon class="kinsmen-logo-2"
                                points="9.93 45.16 17.08 45.16 24.82 60.6 35.92 60.6 23.22 35.25 0 35.25 0 60.6 9.93 60.6 9.93 45.16" />
                            <polygon class="kinsmen-logo-2"
                                points="17.08 15.43 9.93 15.43 9.93 0 0 0 0 25.34 23.22 25.34 35.92 0 24.82 0 17.08 15.43" />
                            <polygon class="kinsmen-logo-2"
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
                            <h1>Adres</h1>
                            <a href='https://www.google.com/maps/search/?api=1&query=Kinsmen+Collective' target="_blank">Veemarktkade 8 <br> 5222 AE, Den Bosch</a>
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
    <script src='/app/main.js'></script>
    <script src='/app/barba.js'></script>
    <script src='/app/barba-css.js'></script>
    <script src='/app/scripts.js'></script>
</body>
</html>