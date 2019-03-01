<?php
  include 'include/tool.php';
  include 'include/connexion.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Web developer resume: html, css, javascript, php, sql, nosql.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Web Developer Resume - Bilingual English, French - Laura Dev </title>
  <!--Import Google Icon Font-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- normalize -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Materialize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="less/style.css">
  <link rel="stylesheet" href="css/timeline.css">
</head>
<body>


    <header>
      <div class="container">
        <div class="center-align">
          <p>
            Laura Traoré
          </p>
          <h1>
            Web Developer - Bilingual English, French
          </h1>
        </div>
      </div>
    </header>

    <nav class="hide-on-small-only">
        <div class="container">
          <div class="col m12 l12">
            <ul class="table-of-contents">
              <li>
                <a href="#about" class="active">About</a>
              </li>
              <li>
                <a href="#skill">Skills</a>
              </li>
              <li>
                <a href="#work">Projects</a>
              </li>
              <li>
                <a href="#resume">Resume</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- navigation small screen -->
    <div class="fixed-action-btn click-to-toggle show-on-small hide-on-med-and-up" >
      <a class="btn-floating btn-large blue-grey lighten-1 waves-effect waves-light"><?= setIcon('menu',1); ?></a>
      <ul>
        <li><a href="#about" class="btn-floating deeporange lighten-1"><?= setIcon('person_outline',1); ?></a></li>
        <li><a href="#skill" class="btn-floating bluegrey lighten-1"><?= setIcon('school',1); ?></a></li>
        <li><a href="#work" class="btn-floating deeporange lighten-1"><?= setIcon('build',1); ?></a></li>
        <li><a href="#resume" class="btn-floating bluegrey lighten-1"><?= setIcon('insert_drive_file',1); ?></a></li>
        <li><a href="#contact" class="btn-floating deeporange lighten-1"><?= setIcon('mail_outline',1); ?></a></li>
      </ul>
    </div>

    <main>

      <div class="container">

        <section id="about" class="scrollspy">
          <div class="row">
            <div class="col s12 m12 l12 center-align">
              <h2>
                About
              </h2>
              <p class="grey-text darken-1">
                In a few words ...
              </p>
            </div>
            <div class="row">
              <div class="col s6 offset-s3 m4 l4 push-m8 push-l8">
                <img src="img/avatar.jpg" alt="avatar" class="responsive-img circle center-block" id="avatar">
              </div>
              <div class="col s12 m8 pull-m4 l8 pull-l4">
                <p class="righ-align">
                Organised, independant and a source of proposals, I am ready to put my Project Management skills to work in Web Development. <br>
                I feel comfortable in building websites and cross platforms applications and I am looking forward to integrating a dynamic company.
                </p>
              </div>
            </div>
          </div>
        </section>

        <div class="divider"></div>

        <section id="skill" class="scrollspy">
          <div class="row">
            <div class="col s12 center-align">
              <h2>
                Skills
              </h2>
              <p class="grey-text darken-1">
                Continuing learning
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col s10 offset-s1 m4 l4">
              <div class="flip-container">
                  <div class="flipper">
                    <div class="front">
                      <!-- front content -->
                      <div class="card medium">
                        <div class="card-content">
                          <h3 class="center-align">
                            General
                          </h3>
                          <span class="fa-stack fa-4x center-block">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-television fa-stack-1x"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="back">
                      <!-- back content -->
                      <div class="card medium z-depth-4">
                        <div class="card-content">
                          <span class="card-title">General</span>
                          <ul>
                            <li>
                              <p>
                                HTML
                              </p>
                              <?php setIcon('star', 4); ?>
                              <?php setIcon('star_border', 1); ?>
                            </li>
                            <li>
                              <p>
                                CSS
                              </p>
                              <?php
                                setIcon('star', 3);
                                setIcon('star_half', 1);
                                setIcon('star_border', 1);
                              ?>
                            </li>
                            <li>
                              <p>
                                DataBases: MySQL, PouchDB, CouchDb
                              </p>
                            </li>
                            <li>
                              <p>
                                Preprocessors CSS: SASS, LESS
                              </p>
                            </li>
                            <li>
                              <p>
                                CSS Frameworks: bootstrap, materialize
                              </p>
                            </li>
                            <li>
                              <p>
                                Git, GitHub, GitLab
                              </p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m4 l4">
              <div class="flip-container">
                <div class="flipper">
                  <div class="front">
                    <!-- front content -->
                    <div class="card medium">
                      <div class="card-content">
                        <h3 class="center-align">
                          Javascript
                        </h3>
                        <span class="fa-stack fa-4x center-block">
                          <i class="fa fa-circle-thin fa-stack-2x"></i>
                          <i class="fa fa-gears fa-stack-1x"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <!-- back content -->
                    <div class="card medium z-depth-4">
                      <div class="card-content">
                        <span class="card-title">Javascript</span>
                        <ul>
                          <li>
                            <p>
                              Javascript
                            </p>
                            <?php setIcon('star', 4); ?>
                            <?php setIcon('star_border', 1); ?>
                          </li>
                          <li>
                            <p>
                              Typescript
                            </p>
                            <?php
                              setIcon('star', 4);
                              setIcon('star_border', 1);
                            ?>
                          </li>
                          <li>
                            <p>
                              Frameworks: Ionic, Angular, React Native, Cordova, Express.js
                            </p>
                          </li>
                          <li>
                            <p>
                              Architectures: Serverless (AWS Lambda, Api Gateway) / Node.js
                            </p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m4 l4">
              <div class="flip-container">
                <div class="flipper">
                  <div class="front">
                    <!-- front content -->
                    <div class="card medium">
                      <div class="card-content">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h3 class="center-align">
                              PHP
                            </h3>
                          </div>
                          <div class="col s12 m12 l12 ">
                            <span class="fa-stack fa-4x center-block">
                              <i class="fa fa-circle-thin fa-stack-2x"></i>
                              <i class="fa fa-server fa-stack-1x"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <!-- back content -->
                    <div class="card medium z-depth-4">
                      <div class="card-content">
                        <span class="card-title">PHP</span>
                        <ul>
                          <li>
                            <p>
                              PHP
                            </p>
                            <?php
                              setIcon('star', 3);
                              setIcon('star_border', 2);
                            ?>
                          </li>
                          <li>
                            <p>
                              Object oriented programming
                            </p>
                            <?php
                              setIcon('star', 3);
                              setIcon('star_border', 2);
                            ?>
                          </li>
                          <li>
                            <p>
                              Framework: Symfony, Silex
                            </p>
                          </li>
                          <li>
                            <p>
                              Architectures: MVC, AJAX
                            </p>
                          </li>
                          <li>
                            <p>
                              CMS: Wordpress, Drupal
                            </p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="divider"></div>

        <section id="work" class="scrollspy">
          <div class="row">
            <div class="col s12 center-align">
              <h2>
                Projects
              </h2>
              <p class="grey-text darken-1">
                Latest projects
              </p>
            </div>
          </div>
          <div class="row">
            <h4>Javascript</h4>
            <div class="col s10 offset-s1 m4 l4">
              <?php
              $desc = 'Personal trainer administration application. Ionic, Serverless, PouchDB, CouchDB, GitLab';
              $justtrain = array(
                'title'       => 'JustTrain',
                'src'         => 'img/justtrain.png',
                'alt'         => 'JustTrain website',
                'description' => $desc,
                'href'        => 'https://justtrain.haredev.com/'
              );
              createCards($justtrain);
              ?>
            </div>
            <div class="col s10 offset-s1 m4 l4">
              <?php
                $desc = "Cross platform application for JustTrain personal trainers' clients. Ionic, Serverless, PouchDB, CouchDB, GitLab";
                $jtClient = array(
                              'title'       => 'JustTrain Client',
                              'src'         => 'img/jt-client.png',
                              'alt'         => 'JustTrain Client website',
                              'description' => $desc,
                              'href'        => 'https://play.google.com/store/apps/details?id=com.haredev.justtrain.client&hl=en'
                              );
                createCards($jtClient);
              ?>
            </div>
            <div class="col s10 offset-s1 m4 l4">
            <?php
                $desc = 'Cross platform application for a cleaning company. Ionic, Express.js, Node.js, MySQL, CouchDb, Gitlab';
                $clean = array(
                              'title'       => 'Cleaning App',
                              'src'         => 'img/cleaning.png',
                              'alt'         => 'Cleaning App',
                              'description' => $desc,
                              );
                createCards($clean);
              ?>
            </div>
          </div>

          <div class="row">
            <h4>PHP</h4>
            <div class="col s10 offset-s1 m4 l4">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/biovillefranche.png" alt="site BioVillefranche">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Bio Villefranche<?= setIcon('more_vert', 1, 'right'); ?></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Bio Villefranche<?= setIcon('close', 1, 'right'); ?></span>
                  <p>
                    Organic shop website. Forms validations and back office.
                  </p>
                  <p>
                    <!-- <p><a href="http://biovillefranche.loicgallay.com" target="_blank" class="left">Lien</a></p> -->
                    <a class="btn-floating fab waves-effect waves-light deep-orange lighten-1 modal-trigger right hide-on-small-only" href="#modal"><?= setIcon('add',1); ?></a>
                  </p>
                </div>
              </div>
            </div>
            <div id="modal" class="modal modal-fixed-footer">
              <div class="modal-content">

                <div class="slider">
                  <ul class="slides">
                    <li>
                      <img src="img/biovillefranche.png" alt="accueil">
                      <p class="center-align">
                        Home page
                      </p>
                    <li>
                      <img src="img/inscription.png" alt="inscription">
                      <p class="center-align">
                        Inscription
                      </p>
                    </li>
                    <li>
                      <img src="img/produits.png" alt="produits">
                      <p class="center-align">
                        Products
                      </p>
                    </li>
                    <li>
                      <img src="img/panier.png" alt="panier">
                      <p class="center-align">
                        Shopping cart
                      </p>
                    </li>
                    <li>
                      <img src="img/admin.png" alt="administration">
                      <p class="center-align">
                        Administration
                      </p>
                    </li>
                    <li>
                      <img src="img/stat.png" alt="statiqtiques">
                      <p class="center-align">
                        Statistics
                      </p>
                    </li>
                  </ul>
                </div>

              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-bluegrey-lighten-1 btn-flat">Close</a>
              </div>
            </div>
            <div class="col s10 offset-s1 m4 l4" id="technews">
              <?php
                $desc = 'News website using the PHP framework: Silex and Twig.';
                $news = array(
                              'title'       => 'Technews',
                              'src'         => 'img/technews_home.png',
                              'alt'         => 'Technews website',
                              'description' => $desc,
                              );
                createCards($news);
              ?>
            </div>
            <div class="col s10 offset-s1 m4 l4" id="books">
              <?php
                $desc = 'Cross booking web application. Silex, twig, idiorm, bootstrap and Google Api (maps, charts,...)';
                $book = array(
                  'title'       => 'Cross Booking',
                  'src'         => 'img/book_home.png',
                  'alt'         => 'Cross booking website',
                  'description' => $desc,
                  'href'        => 'http://livres.lauradev.fr'
                );
                createCards($book);
                ?>
            </div>
          </div>
        </section>

        <div class="divider"></div>

        <section id="resume" class="scrollspy">
          <div class="row">
            <div class="col s12 center-align">
              <h2>
                Resume
              </h2>
              <p class="grey-text darken-1">
                Working and educational timeline
              </p>
            </div>
          </div>
          <div class="row">
              <?php
                include 'include/timeline2.php';
              ?>
            <div class="col s10 offset-s1 m4 l4">
              <div class="card">
              <div class="card-content">
                <span class="card-title center-align">Education</span>
                <ul>
                    <li>
                        <p>
                          <strong>2018: </strong> Angular 6 - React Native
                        </p>
                        <p>
                         SQLI
                        </p>
                    </li>
                  <li>
                    <p>
                      <strong>2017: </strong> Web Developer
                    </p>
                    <p>
                      WebForce 3
                    </p>
                  </li>
                  <li>
                    <p>
                      <strong>2010: </strong> Commercial Project Manager
                    </p>
                    <p>
                      ESCAIA
                    </p>
                  </li>
                  <li>
                    <p>
                    <strong>2008: </strong> Dietitian
                    </p>
                    <p>
                      Biological Engineering
                    </p>
                  </li>
                </ul>
                  <span> Download my resume: </span><a class="btn-floating fab waves-effect waves-light deeporange lighten-1" href="docs/resume-laura-dev-en.jpg" download><?= setIcon('attach_file', 1); ?></a>
              </div>
              </div>
            </div>
          </div>
        </section>

        <div class="divider"></div>

        <section id="contact" class="scrollspy">
          <div class="row">
            <div class="col s12 m12 l12 center-align">
              <h2>
                Contact
              </h2>
              <p class="grey-text darken-1">
                Feel free to contact me !
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6 l6">
              <form id="contactForm">
                <div class="input-field">
                  <?= setIcon('person', 1, 'prefix'); ?>
                  <label for="name">Name:</label>
                  <input type="text" name="name" id="nom">
                </div>
                <div class="input-field">
                  <?= setIcon('mail', 1, 'prefix'); ?>
                  <label for="mail">Mail:</label>
                  <input type="email" name="mail" id="mail">
                </div>
                <div class="input-field">
                  <?= setIcon('edit', 1, 'prefix'); ?>
                  <label for="msg">Message:</label>
                  <textarea name="msg" class="materialize-textarea" id="message"></textarea>
                </div>
                <div class="row">
                  <div class="col s5 offset-s1 m5 offset-m1 l5 offset-l1">
                    <button class="btn waves-effect waves-light deeporange lighten-1" type="submit">Send
                      <?= setIcon('send', 1, 'right'); ?>
                    </button>
                  </div>
                  <div class="col s5 offset-s1 m5 offset-m1 l5 offset-l1">
                    <button class="btn waves-effect waves-light deeporange lighten-1" type="button" id="erase">Delete
                      <?= setIcon('clear', 1, 'right'); ?>
                    </button>
                  </div>
                </div>
              </form>
              <div id="messageAjax"></div>
            </div>
            <div class="col s12 m4 offset-m2 l4 offset-l2 ">
              <div id="phone">
                <h4>
                  Phone
                </h4>
                <p>
                  Mobile : +336 202 493 59
                </p>
              </div>
              <div id="social">
                <h4>
                  Social Media
                </h4>
                <a href="https://github.com/LauraDev" target="_blank"><i class="fa fa-github fa-3x"></i></a>
                <a href="https://www.linkedin.com/in/laura-dev/?locale=en_US" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
              </div>
            </div>
          </div>
        </section>
      </div>

    </main>

    <footer class="lighten-1">
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12 center-align">
            <p class="white-text">
              Laura Traoré &copy; 2019
            </p>
            <a class="modal-trigger" href="#modal2">Terms of use</a>
            <div id="modal2" class="modal">
              <div class="modal-content">
                <?php
                  include 'include/mentions.php';
                ?>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-bluegrey-lighten-1 btn-flat">Close</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Javascript Materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
  <!-- scripts js -->
  <script src="js/components.js" charset="utf-8"></script>
  <script src="js/script.js" charset="utf-8"></script>
  <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
</body>
</html>
