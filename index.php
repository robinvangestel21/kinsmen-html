<?php
$sub = true;
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
  <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
  <link rel="manifest" href="/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta property="og:image" content="/static/homepage.jpeg" />
  <meta property="og:title" content="Kinsmen Collective Homepage" />
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
        <svg id="kinsmen-logo" class="kinsmen-logo-light" data-name="kinsmen-logo" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 51.27 50.56">
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

    <div class='barba-wrapper' data-barba="wrapper">
      <div class='barba-container' data-barba="container">
        <section class='title'>
          <h1><?php echo $lang['index-titel'] ?></h1>
        </section>
        <!-- project 1 -->
        <div class='project projects-desktop'>
          <a href="projecten/salarise">
            <div class='project-img-container'>
              <img src="static/projects/Salarise/1500x300.png" alt="">
              <div class='overlay'>
                <p><?php echo $lang['bekijk-project']; ?></p>
              </div>
            </div>
          </a>


          <div class='project-div'>
            <div class='project-div-col-one'>
              <h1><?php echo $lang['salarise-titel']; ?></h1>
              <p>Salarise</p>
            </div>
            <div class='project-div-col-two'>
              <p><?php echo $lang['salarise-kort']; ?></p>
              <a href="projecten/salarise"><?php echo $lang['bekijk-project']; ?>
                <svg id="project-arrow" data-name="project-arrow" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 29.62 16.16">
                  <line class="project-arrow-1" y1="8.08" x2="26.66" y2="8.08" />
                  <polyline class="project-arrow-1" points="20.55 0.99 27.64 8.08 20.55 15.17" />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <div class='project projects-mobile-block'>
          <a href="projecten/salarise">
            <div class='project-img-container'>
              <img src="static/projects/Salarise/503x300.png" alt="">
              <div class='overlay'>
                <p><?php echo $lang['bekijk-project']; ?></p>
              </div>
            </div>
          </a>

          <div class='project-div'>
            <div class='project-div-col-one'>
              <h1><?php echo $lang['salarise-titel']; ?></h1>
              <p>Salarise</p>
            </div>
            <div class='project-div-col-two'>
              <p><?php echo $lang['salarise-kort']; ?></p>
              <a href="projecten/salarise"><?php echo $lang['bekijk-project']; ?>
                <svg id="project-arrow" data-name="project-arrow" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 29.62 16.16">
                  <line class="project-arrow-1" y1="8.08" x2="26.66" y2="8.08" />
                  <polyline class="project-arrow-1" points="20.55 0.99 27.64 8.08 20.55 15.17" />
                </svg>
              </a>
            </div>
          </div>
        </div>


        <!-- project 2 -->
        <div class='project projects-desktop'>
          <a href="projecten/bataviastadfashionclub">
            <div class='project-img-container'>
              <img src="static/projects/BataviastadFashionClub/1500x300.jpg" alt="">
              <div class='overlay'>
                <p><?php echo $lang['bekijk-project']; ?></p>
              </div>
            </div>
          </a>


          <div class='project-div'>
            <div class='project-div-col-one'>
              <h1><?php echo $lang['bataviastad-fashion-club-titel']; ?></h1>
              <p>Batavia Stad</p>
            </div>
            <div class='project-div-col-two'>
              <p><?php echo $lang['bataviastad-fashion-club-kort']; ?></p>
              <a href="projecten/bataviastadfashionclub"><?php echo $lang['bekijk-project']; ?>
                <svg id="project-arrow" data-name="project-arrow" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 29.62 16.16">
                  <line class="project-arrow-1" y1="8.08" x2="26.66" y2="8.08" />
                  <polyline class="project-arrow-1" points="20.55 0.99 27.64 8.08 20.55 15.17" />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <div class='project projects-mobile-block'>
          <a href="projecten/bataviastadfashionclub">
            <div class='project-img-container'>
              <img src="static/projects/BataviastadFashionClub/503x300.jpg" alt="">
              <div class='overlay'>
                <p><?php echo $lang['bekijk-project']; ?></p>
              </div>
            </div>
          </a>

          <div class='project-div'>
            <div class='project-div-col-one'>
              <h1><?php echo $lang['bataviastad-fashion-club-titel']; ?></h1>
              <p>Batavia Stad</p>
            </div>
            <div class='project-div-col-two'>
              <p><?php echo $lang['bataviastad-fashion-club-kort']; ?></p>
              <a href="projecten/bataviastadfashionclub"><?php echo $lang['bekijk-project']; ?>
                <svg id="project-arrow" data-name="project-arrow" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 29.62 16.16">
                  <line class="project-arrow-1" y1="8.08" x2="26.66" y2="8.08" />
                  <polyline class="project-arrow-1" points="20.55 0.99 27.64 8.08 20.55 15.17" />
                </svg>
              </a>
            </div>
          </div>
        </div>


        <!-- project 3 -->
        <div class='project projects-desktop'>
          <a href="projecten/adyentechevent">
            <div class='project-img-container'>
              <img src="static/projects/AdyenTechEvent/1500x300.svg" alt="">
              <div class='overlay'>
                <p><?php echo $lang['bekijk-project']; ?></p>
              </div>
            </div>
          </a>


          <div class='project-div'>
            <div class='project-div-col-one'>
              <h1><?php echo $lang['adyen-tech-event-titel']; ?></h1>
              <p>Adyen</p>
            </div>
            <div class='project-div-col-two'>
              <p><?php echo $lang['adyen-tech-event-kort']; ?></p>
              <a href="projecten/adyentechevent"><?php echo $lang['bekijk-project']; ?>
                <svg id="project-arrow" data-name="project-arrow" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 29.62 16.16">
                  <line class="project-arrow-1" y1="8.08" x2="26.66" y2="8.08" />
                  <polyline class="project-arrow-1" points="20.55 0.99 27.64 8.08 20.55 15.17" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class='project projects-mobile-block'>
          <a href="projecten/adyentechevent">
            <div class='project-img-container'>
              <img src="static/projects/AdyenTechEvent/503x300.svg" alt="">
              <div class='overlay'>
                <p><?php echo $lang['bekijk-project']; ?></p>
              </div>
            </div>
          </a>

          <div class='project-div'>
            <div class='project-div-col-one'>
              <h1><?php echo $lang['adyen-tech-event-titel']; ?></h1>
              <p>Adyen</p>
            </div>
            <div class='project-div-col-two'>
              <p><?php echo $lang['adyen-tech-event-kort']; ?></p>
              <a href="projecten/adyentechevent"><?php echo $lang['bekijk-project']; ?>
                <svg id="project-arrow" data-name="project-arrow" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 29.62 16.16">
                  <line class="project-arrow-1" y1="8.08" x2="26.66" y2="8.08" />
                  <polyline class="project-arrow-1" points="20.55 0.99 27.64 8.08 20.55 15.17" />
                </svg>
              </a>
            </div>
          </div>
        </div>





        <div class='link-container'>
          <a href="/work">
            <?php echo $lang['bekijk-alle-projecten']; ?>
            <svg id="arrow-link-container" data-name="arrow-link-container" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 29.05 15.6">
              <line class="arrow-link-container-1" y1="7.8" x2="26.66" y2="7.8" />
              <polyline class="arrow-link-container-1" points="20.55 0.71 27.64 7.8 20.55 14.89" />
            </svg>
          </a>
        </div>
        <footer class='fg footer'>
          <div class='footer-header'>
            <h1><?php echo $lang['footer-titel']; ?></h1>
            <svg id="kinsmen-icon-footer" data-name="kinsmen-icon-white" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 61.45 60.6">
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
              <h1><?php echo $lang['footer-adres']; ?></h1>
              <a href='https://www.google.com/maps/search/?api=1&query=Kinsmen+Collective' target="_blank">Veemarktkade
                8 <br> 5222 AE, Den Bosch</a>
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