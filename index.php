<?php
require 'functions.php';
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $data = [
        'nom' => $_POST['nom'],
        'email' => $_POST['email'],
        'question' => $_POST['question']
    ];

    insert_questions($pdo, $data);
    
    // Redirection ou affichage de succès (selon votre besoin)
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit;
}

$questions = get_questions($pdo);
// Définir les variables pour le titre, la description et les mots-clés
$page_title = 'MADAGRAD Campus';
$meta_description = 'Bienvenue sur notre campus, un lieu où l\'excellence académique et le développement personnel se rencontrent. Fondé en 1998, notre campus unique combine un lycée et une université pour offrir un parcours éducatif continu et intégré. Nous sommes dédiés à préparer nos élèves et étudiants à devenir des leaders et des innovateurs dans leurs domaines respectifs.';
$meta_keywords = 'MADAGRAD, campus, school, lycée, université, Madagascar, Tanjombato, Antananarivo';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="icon" href="public/assets/images/Logo_3.png" type="image/png">

    <title><?php echo isset($page_title) ? $page_title : 'Default Title'; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Default description'; ?>">
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : 'default, keywords'; ?>">
    
       <!-- Bootstrap core CSS -->
       <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


      <!-- Additional CSS Files -->
      <link rel="stylesheet" href="public/assets/css/fontawesome.css">
      <link rel="stylesheet" href="public/assets/css/templatemo-grad-school.css">
      <link rel="stylesheet" href="public/assets/css/inspector-stylesheet.css">
      <link rel="stylesheet" href="public/assets/css/owl.css">
      <link rel="stylesheet" href="public/assets/css/lightbox.css">
      <!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>MadaGrad</em> Campus</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Accueil</a></li>
				<li class="has-submenu"><a href="#section2">À propos</a>
          <ul class="sub-menu">
              <li><a href="#section2">À propos</a></li>
              <li><a href="#section3">Historique</a></li>
          </ul>
        </li>
        <li class="has-submenu"><a href="#section4">Université</a>
          <ul class="sub-menu">
              <li><a href="#section4">À propos</a></li>
              <li><a href="#section6">Questions</a></li>
          </ul>
        </li>
				<li class="has-submenu"><a href="#section5">Lycée</a>
          <ul class="sub-menu">
              <li><a href="#section5">À propos</a></li>
              <li><a href="#section6">Questions</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="public/assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Bienvenue sur</h6>
              <h2><em>Madagrad</em> Campus</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Découvrir</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Madagrad</h4>
              </div>
              <div class="content-hide">
								<p>Pourquoi choisir MadaGrad Campus?</p>
								<p>Notre historique?</p>
                <div class="scroll-to-section"><a href="#section2">Plus d'informations</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Université</h4>
              </div>
              <div class="content-hide">
                <p>À propos.</p>
                <p>Poser des questions.</p>
                <div class="scroll-to-section"><a href="#section4">Plus d'informations</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Lycée</h4>
              </div>
              <div class="content-hide">
                <p>À propos.</p>
                <p>Poser des questions.</p>
                <div class="scroll-to-section"><a href="#section5">Plus d'informations</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Pourquoi choisir MadaGrad Campus?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>À Propos du Campus</a></li>
              <li><a href='#tabs-2'>Notre objectif</a></li>
              <li><a href='#tabs-3'>Formations</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="public/assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>À Propos du Campus</h4>
                    <p><?php echo $meta_description; ?></p>
										<br>
										<p>Notre campus se distingue par son engagement envers l'inclusion, la diversité et l'innovation. Nous proposons des programmes académiques rigoureux dans des filières telles que la médecine générale, le droit, la gestion et l'informatique. Enrichis par des technologies de pointe, des activités extrascolaires variées et des partenariats solides avec des entreprises et des institutions renommées, ces programmes sont conçus pour répondre aux exigences du monde moderne.</p>
										<br>
										<p>Nos enseignants, hautement qualifiés et passionnés, sont au cœur de notre réussite. Experts dans leurs domaines respectifs, ils apportent non seulement des connaissances approfondies mais aussi un soutien personnalisé, inspirant et motivant chaque étudiant à atteindre son plein potentiel.</p>
										<br>
										<p>Ici, chaque étudiant bénéficie d'un environnement stimulant et bienveillant, propice à l'épanouissement intellectuel et personnel. Rejoignez-nous pour vivre une expérience éducative exceptionnelle qui vous préparera à relever les défis du monde de demain.</p>
										<br>
										<h5 style="color: orange;"><b>Lieu :</b></h5>
										<p>Tanjombato, Antananarivo</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="public/assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Notre objectif</h4>
                    <p>Notre campus, intégrant à la fois un lycée et une université, s'engage à offrir un parcours scolaire continu et de haute qualité, favorisant l'excellence académique et le développement personnel et professionnel de chaque étudiant. Nous mettons un point d'honneur à créer un environnement inclusif et diversifié, en intégrant les dernières technologies pour préparer nos élèves à un monde en constante évolution. Nous valorisons l'innovation, l'engagement communautaire, le bien-être, et la collaboration avec des partenaires extérieurs pour enrichir nos programmes. Notre campus promeut également la responsabilité environnementale, sensibilisant notre communauté aux pratiques durables pour un avenir meilleur.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="public/assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Formations</h4>
										<h5 style="color: orange;">Université</h5>
                    <p>Droit, sciences économiques, Gestion, Informatique, Lettres</p>
										<h5 style="color: orange;">Lycée</h5>
                    <p><b>Première :</b> Scientifique (S), Littéraire (L)</p>
                    <p><b>Terminale :</b> Scientifique (C, D), Littéraire (A)</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

	<!-- historique -->
	<section class="section why-us" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Historique</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
									<h4>Une Tradition d'Excellence et d'Innovation</h4>
                    <p>Fondé en année 1999, notre campus a toujours été un pionnier dans le domaine de l'éducation, en combinant les forces d'un lycée et d'une université pour offrir un parcours scolaire ininterrompu et enrichissant. Dès ses débuts, le campus s'est distingué par son engagement envers l'excellence académique et son dévouement à préparer les jeunes esprits à relever les défis du futur.</p>
									<h4>Vers l'Avenir</h4>
									<p>Nous sommes fiers de notre héritage et enthousiasmés par les possibilités futures. Alors que nous avançons, nous restons fidèles à notre mission de fournir une éducation continue de haute qualité, préparant nos étudiants à devenir des leaders et des innovateurs dans un monde en constante évolution. Rejoignez-nous dans cette aventure passionnante et faites partie de l'histoire de notre campus exceptionnel.</p>
                  </div>
                  <div class="col-md-6">
										<h4>Un Voyage à Travers le Temps</h4>
										<h5 style="color: orange;"><b>1998 :</b> Les Débuts</h5>
                    <p>Avec une vision claire et ambitieuse, notre campus a ouvert ses portes en 1998 en tant que lycée, offrant une éducation de qualité aux élèves du secondaire. Ce modèle initial a rapidement attiré l'attention et l'admiration des éducateurs et des familles locales.</p>
										<h5 style="color: orange;"><b>2003 :</b> Expansion Vers l'Enseignement Supérieur </h5>
										<p>En 2003, en réponse aux besoins croissants des entreprises, du pays et de la société en général pour des professionnels hautement qualifiés et innovants, nous avons décidé d'élargir notre offre éducative en créant une université sur le campus. Cette expansion avait pour objectif de fournir une formation continue à nos étudiants, leur permettant de développer des compétences spécialisées et de répondre aux attentes du marché du travail.</p>
										<h5 style="color: orange;"><b>2013 :</b> Croissance et Diversification </h5>
										<p>En 2013, le campus a connu une phase d'expansion significative, ajoutant de nouvelles infrastructures modernes pour répondre à la demande croissante. Des laboratoires de pointe, des bibliothèques riches en ressources et des installations sportives de qualité ont été intégrés pour offrir une expérience éducative complète. </p>
										<h5 style="color: orange;"><b>2023 :</b> L'Émergence de l'Innovation </h5>
										<p>En 2023, notre campus a renforcé son engagement envers l'innovation en intégrant les technologies de pointe dans ses programmes d'enseignement. L'ouverture du Centre d'Innovation et de Technologie a marqué une étape clé, permettant aux étudiants de développer des compétences techniques et de mener des projets de recherche ambitieux. </p>
										<h5 style="color: orange;">2024 : Une Communauté Vibrante et Diversifiée  </h5>
										<p>Aujourd'hui, notre campus est une communauté dynamique et inclusive qui accueille des étudiants de tous horizons. Avec un corps professoral exceptionnel, des programmes diversifiés et des partenariats solides avec des institutions de renom, nous continuons à façonner l'avenir de l'éducation. Notre engagement envers l'excellence académique, le développement personnel et la responsabilité sociale reste au cœur de notre mission.</p>
									</div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Univ -->
	<section class="section univ" data-section="section4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>À Propos de l'Université</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
									<h4>Une Fondation Solide</h4>
                    <p>Fondée en 2003 comme extension naturelle de notre lycée renommé, <b>MADAGRAD University</b> s'est établie comme un bastion de savoir et d'innovation dans le domaine de l'éducation supérieure. Située à Tanjombato, notre université se distingue par son engagement envers l'excellence académique et sa mission de préparer les étudiants à relever les défis du monde moderne.</p>
									<h4>Programmes Académiques Diversifiés et Rigoureux</h4>
									<p>Notre université offre une gamme diversifiée de programmes académiques rigoureux, allant des sciences et technologies à l'économie et aux sciences humaines. En intégrant les dernières avancées technologiques et en favorisant une approche interdisciplinaire, nous formons nos étudiants à devenir non seulement des experts dans leur domaine mais aussi des leaders visionnaires capables de catalyser le changement.</p>
                  <h4>Soutien Personnalisé et Environnement Collaboratif</h4>
                  <p>Chez <b>MADAGRAD University</b>, chaque étudiant bénéficie d'un soutien personnalisé et d'un environnement d'apprentissage collaboratif. Nos professeurs de renommée mondiale, passionnés par leur domaine respectif, sont dédiés à l'épanouissement intellectuel et personnel de chaque individu.</p>
                  </div>
                  <div class="col-md-6">
										<h4>Innovation et Vision pour l'Avenir</h4>
										<p>En tant qu'institution d'enseignement supérieur, nous sommes fiers de notre tradition d'innovation et de notre capacité à anticiper les besoins futurs du marché mondial. Rejoignez-nous à <b>MADAGRAD University</b> et participez à une expérience éducative enrichissante qui façonnera votre avenir et celui du monde qui vous entoure.</p>
									</div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- lycee -->
  <section class="section lycee" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>À Propos du Lycée</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                  <h4>Une Fondation Solide</h4>
                    <p>Fondé en 1998, <b>MADAGRAD School</b> s'est imposé comme un pilier de l'éducation secondaire de qualité. Situé à Tanjombato, notre lycée est reconnu pour son engagement envers l'excellence académique et sa mission de préparer les élèves à devenir des citoyens éclairés et compétents, prêts à relever les défis de demain.</p>

                    <h4>Programmes Académiques Diversifiés et Rigoureux</h4>
                    <p>Notre lycée offre une variété de programmes académiques rigoureux, couvrant les sciences, les technologies, les langues, les arts et les sciences humaines. En intégrant les dernières innovations pédagogiques et en adoptant une approche interdisciplinaire, nous formons nos élèves à exceller dans leurs études tout en développant des compétences de pensée critique et de leadership.</p>

                    <h4>Soutien Personnalisé et Environnement Collaboratif</h4>
                    <p>À <b>MADAGRAD School</b>, chaque élève bénéficie d'un soutien personnalisé et d'un environnement d'apprentissage collaboratif. Nos enseignants dévoués, passionnés par leur domaine respectif, s'engagent à accompagner chaque élève dans son parcours académique et personnel, favorisant ainsi un épanouissement complet.</p>
                    </div>
                  <div class="col-md-6">
                    <h4>Innovation et Vision pour l'Avenir</h4>
                    <p>En tant qu'institution d'enseignement secondaire, nous sommes fiers de notre tradition d'innovation et de notre capacité à préparer nos élèves aux défis futurs. Rejoignez-nous à <b>MADAGRAD School</b> et vivez une expérience éducative enrichissante qui posera les bases de votre réussite future et de votre contribution positive à la société.</p>									</div>
									</div>
                 </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section coming-soon" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Posez votre question à <em>MADAGRAD University</em> et <em>MADAGRAD School</em></h4>
              <div class="counter">

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Allez-y</h6>
            </div>
            <form method="post" action="">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom et prénoms" required>
            </fieldset>
        </div>
        <div class="col-md-12">
            <fieldset>
                <input type="email" name="email" id="email" class="form-control" placeholder="Votre Email" required>
            </fieldset>
        </div>
        <div class="col-md-12">
            <fieldset>
                <input type="text" name="question" id="question" class="form-control" placeholder="Votre question" required>
            </fieldset>
        </div>
        <div class="col-md-12">
            <fieldset>
                <input type="submit" name="submit" id="form-submit" class="button" value="Envoyer" onclick="myFunction()" style="background-color: rgba(255, 196, 0, 0.8); color: rgba(255, 255, 255, 1);">
            </fieldset>
        </div>
    </div>
</form>

<script>
    function myFunction() {
        $.ajax({
            url: window.location.href,
            success: function(data) {
                var newContent = $(data).find('#section6').html();
                $('#section6').html(newContent);
            },
            error: function() {
                alert('Erreur lors du chargement de la section.');
            }
        });
    }
</script>

              <script>
                  function myFunction() {
                      $.ajax({
                          url: window.location.href, // L'URL actuelle de la page
                          success: function(data) {
                              // Extraire le contenu de #section6 de la réponse
                              var newContent = $(data).find('#section6').html();
                              // Remplacer le contenu de #section6 par le nouveau contenu
                              $('#section6').html(newContent);
                          },
                          error: function() {
                              alert('Erreur lors du chargement de la section.');
                          }
                      });
                  }
              </script>

         </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section6">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Questions et Réponses</h2>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                <?php foreach ($questions as $question): ?>
                <div class="item">
                    <div class="down-content">
                        <h4>Question de <b style="color: orange;"><?php echo $question['nom']; ?></b> :</h4>
                        <p><?php echo $question['question']; ?></p>
                        <h4>Réponse: </h4>
                        <?php if (is_null($question['reponse'])): ?>
                            <p style="color: red;">MADAGRAD University répondra bientôt à cette question.</p>
                        <?php else: ?>
                            <p><?php echo htmlspecialchars($question['reponse']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> MadaGrad Campus  
          
           <!-- | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">TemplateMo</a><br> -->
           <!-- Distributed By: <a href="https://themewagon.com" rel="sponsored" target="_blank">ThemeWagon</a> -->
          
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    

    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="public/assets/js/isotope.min.js"></script>
    <script src="public/assets/js/owl-carousel.js"></script>
    <script src="public/assets/js/lightbox.js"></script>
    <script src="public/assets/js/tabs.js"></script>
    <script src="public/assets/js/video.js"></script>
    <script src="public/assets/js/slick-slider.js"></script>
    <script src="public/assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>
