<?php 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon Site </title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- <header class="page-header">
        <div id="header" class="">
            <div id="identity"> Maxime Deranty</div>
            <div id="logo"></div>
        </div>
    </header> -->

    <header id="" class="container-fluid">
        <div class="row">
            <div class="parralax">
                <div class="intro-text">
                    <span class="name">Maxime Deranty</span>
                </div>
            </div>
        </div>
    </header>

    <nav id="header" class="navbar navbar-fixed-top ">
        <div id="header-container" class="container navbar-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="brand" class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse smooth-scroll">
                <ul class="nav navbar-nav">
                    <li><a class="scroll" href="#about">Qui suis-je</a></li>
                    <li><a class="scroll" href="#parcour">Parcour</a></li>
                    <li><a class="scroll" href="#skills">Compétences</a></li>
                    <li><a class="scroll" href="#exp-pro">Expériences</a></li>
                    <li><a class="scroll" href="#realisations">Mes réalisations</a></li>
                    <li><a class="scroll" href="#contact">Contact</a></li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <section class="container-fluid" id="about">
        <div class="row">
            <h2 class="title-section">Qui suis-je?</h2>
            <hr class="separator">
            <div class="col-sm-4 col-lg-4 col-xs-12 col-md-12">
                <img class="avatar" src="media/myAvatar.png" alt="">
            </div>
            <div class="col-sm-8 col-lg-8 col-xs-12 col-md-12 text-about">Je m'appelle Maxime Deranty, j'ai 25ans. <br>Actuellement titulaire d'une licence pro en développement web, je recherche un poste de développeur. Je suis passionné par mon métier et j'aimerai vraiment intégrer une entreprise pour pouvoir vivre de cette passion. <br>Je tend à me présenter via ce site, de ce fait je vous souhaite une bonne visite.</div>
        </div>
    </section>

    <section id="parcour" class="container-fluid">
        <div class="row">
            <h2 class="title-section">Parcour</h2>
            <hr class="separator">
            <ul class="timeline">
                <li>
                    <div class="timeline-badge date">2016</div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Master Ingénierie des Systèmes Informatisés</h3>
                                <hr class="separator-3">
                                <p class="text-muted"><small class=""></small> </p>
                            </div>
                            <div class="timeline-body">
                                <p>U.T.C de Compiègne</p>
                                <p>Non validé</p>
                                <hr class="separator-3">
                                <p>Durée: 1 an</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge date">2014</div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Licence Professionnelle Réseau et Télécommunication</h3>
                                <h4>Option: Développeur Web</h4>
                                <hr class="separator-3">
                                <p class="text-muted"><small class=""></small> </p>
                            </div>
                            <div class="timeline-body">
                                <p>I.N.S.S.E.T de Saint Quentin</p>
                                <p>Validée</p>
                                <hr class="separator-3">
                                <p>Durée: 1 an</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge date">2013</div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>B.T.S Service Informatique aux Organisations</h3>
                                <h4>Option: Développeur</h4>
                                <hr class="separator-3">
                                <p class="text-muted"><small class=""></small> </p>
                            </div>
                            <div class="timeline-body">
                                <p>Lycée Paul Claudel de Laon</p>
                                <p>Validé</p>
                                <hr class="separator-3">
                                <p>Durée: 2 ans</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge date">2011</div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Baccalauréat Scientifique</h3>
                                <h4>Option: Sience de l'Ingénierie</h4>
                                <hr class="separator-3">
                                <p class="text-muted"><small class=""></small> </p>
                            </div>
                            <div class="timeline-body">
                                <p>Lycée Jean Calvin de Noyon</p>
                                <p>Validée</p>
                                <hr class="separator-3">
                                <p>Durée: 4 an</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="container-fluid" id="skills">
        <div class="row">
            <h2 class="title-section-1">Compétences</h2>
            <hr class="separator-1">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <h5>BOOTSTRAP 20%</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                        <h5>HTML 70%</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <h5>CSS 60%</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <h5>PHP 60%</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                        <h5>JavaScript 30%</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                        <h5>Symfony 50%</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <h5>Configuration équipement informatique 60%</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="exp-pro" class="container-fluid">
        <div class="row">
            <h2 class="title-section">Éxpérience Professionelle</h2>
            <hr class="separator">
            <ul class="timeline">
                <li>
                    <div class="timeline-badge date">2014</div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Développeur Web (Stagiaire)</h3>
                                <hr class="separator-2">
                                <p class="text-muted"><small class=""></small> </p>
                            </div>
                            <div class="timeline-body">
                                <p>Orion Cloud</p>
                                <p>Réalisation de plusieurs sites internets</p>
                                <hr class="separator-2">
                                <p>Durée: 4 mois et demie</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge date">2013</div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Développeur Web (Stagiaire)</h3>
                                <hr class="separator-2">
                                <p class="text-muted"><small class=""></small> </p>
                            </div>
                            <div class="timeline-body">
                                <p>Résoladi</p>
                                <p>Réalisation d'un site internet</p>
                                <hr class="separator-2">
                                <p>Durée: 2 mois</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge date">2012</div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Développeur Web (Stagiaire)</h3>
                                <hr class="separator-2">
                                <p class="text-muted"><small class=""></small> </p>
                            </div>
                            <div class="timeline-body">
                                <p>Web-Micro</p>
                                <p>Réalisation d'un site internet</p>
                                <hr class="separator-2">
                                <p>Durée: 2 mois</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="container-fluid" id="realisations">
        <div class="row">
            <h2 class="title-section">Réalisations</h2>
            <hr class="separator">
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <a title="Carisiolas" href="#" onclick="return false;">
                    <img class="thumbnail img-responsive" src="/media/carisiolas.png">
                </a>
                <span id="resum-img">Aenean eget malesuada leo. Fusce bibendum odio non risus tincidunt, sed ultricies urna volutpat. Nunc ornare, arcu eu vehicula faucibus, enim est varius tellus, non vulputate risus tortor vel metus. Pellentesque nec arcu nibh. Morbi pellentesque justo non ultrices elementum.</span>
                <a href="http://www.carisiolas.com" id="link-img">Voir</a>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <a title="Carisiolas" href="#">
                    <img class="thumbnail img-responsive" src="/media/carisiolas.png">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <a title="Carisiolas" href="#">
                    <img class="thumbnail img-responsive" src="/media/carisiolas.png">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <a title="Carisiolas" href="#">
                    <img class="thumbnail img-responsive" src="/media/carisiolas.png">
                </a>
            </div>
        </div>
    </section>

    <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Heading</h3>
                </div>
                <div class="modal-body"></div>
                <div class="resum">blabalballzlriajn</div>
                <div class="modal-footer">
                    <a href="" class="link btn btn-info" target="blank">Voir</a>
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <section class="container-fluid" id="contact">
        <div class="row">
            <h2 class="title-section">Contactez-moi</h2>
            <hr class="separator">
            <div class="col-sm-6 col-xs-12">
                <form class="form-horizontal" method="POST" action="">
                    <fieldset>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 col-md-2 control-label" for="name">Nom:</label>
                            <div class="col-md-10 col-sm-4">
                                <input id="name" name="name" placeholder="Votre nom" class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="email">Email:</label>  
                            <div class="col-md-10">
                                <input id="email" name="email" placeholder="Votre adresse mail" class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                            <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="object">Objet:</label>  
                            <div class="col-md-10">
                                <input id="object" name="object" placeholder="L'objet de votre email" class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="message">Message</label>
                            <div class="col-md-10">                     
                                <textarea rows="10" cols="40" class="form-control" id="message" name="message">Votre message</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="copie" class="col-md-2 control-label">Copie:</label>
                            <div class="col-md-10">
                                <div class="material-switch pull-right">
                                    <input id="copie" name="copie" type="checkbox"/>
                                    <label for="copie" class="label-primary"></label>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-md-2 col-lg-offset-6">
                                <button id="submit" name="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6 map ">            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2586.594259428503!2d3.08470425084293!3d49.58654205701323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e86df30c009cef%3A0x8e59a893792029b8!2s240+Rue+Neuve%2C+60400+Bab%C5%93uf!5e0!3m2!1sfr!2sfr!4v1507239147059" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <footer class="container-fluid">
            <div class="row">
            </div>
    </footer>
    <?php        
        $mail = 'mderanty@gmail.com'; // Déclaration de l'adresse de destination.

        if (isset($_POST['submit'])){
            //=====Déclaration des messages au format texte et au format HTML.
            $sujet       = $_POST['object'];
            $message_txt = $_POST['message'];
            $mail_aut    = $_POST['email'];
            $copie       = $_POST['copie'];

            if (!preg_match("#^[a-z0-9._-]+@+[a-z0-9._-].[a-z]{2,4}$#", $mail_aut)) // On filtre les serveurs qui rencontrent des bogues.
            {
                $passage_ligne = "\r\n";
            }
            else
            {
                $passage_ligne = "\n";
            }

            
            //==========
             
            //=====Création de la boundary
            $boundary = "-----=".md5(rand());
            //==========
             
            //=====Création du header de l'e-mail.
            $header = "From: \"WeaponsB\"<weaponsb@mail.fr>".$passage_ligne;
            $header.= "Reply-to: \"WeaponsB\" <weaponsb@mail.fr>".$passage_ligne;
            $header.= "MIME-Version: 1.0".$passage_ligne;
            $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
            //==========
             
            //=====Création du message.
            $message = $passage_ligne."--".$boundary.$passage_ligne;
            //=====Ajout du message au format texte.
            $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
            $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
            $message.= $passage_ligne.$message_txt.$passage_ligne;
            //==========
            $message.= $passage_ligne."--".$boundary.$passage_ligne;
            //=====Ajout du message au format HTML
            $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
            $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
            $message.= $passage_ligne.$message_txt.$passage_ligne;
            //==========
            $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
            $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
            //==========
             
            //=====Envoi de l'e-mail.
            mail($mail,$sujet,$message,$header);
            //==========
            if ($copie == true){
                mail($mail_aut, $sujet, $message, $header);
            }
        }

        
    ?>


    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfvec4_oXckpCP4hol5Xqh4gZ1QGsw78I&callback=initMap">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){

            /**
             * This object controls the nav bar. Implement the add and remove
             * action over the elements of the nav bar that we want to change.
             *
             * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
             */
            var myNavBar = {

                flagAdd: true,

                elements: [],

                init: function (elements) {
                    this.elements = elements;
                },

                add : function() {
                    if(this.flagAdd) {
                        for(var i=0; i < this.elements.length; i++) {
                            document.getElementById(this.elements[i]).className += " fixed-theme";
                        }
                        this.flagAdd = false;
                    }
                },

                remove: function() {
                    for(var i=0; i < this.elements.length; i++) {
                        document.getElementById(this.elements[i]).className =
                                document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
                    }
                    this.flagAdd = true;
                }

            };

            /**
             * Init the object. Pass the object the array of elements
             * that we want to change when the scroll goes down
             */
            myNavBar.init(  [
                "header",
                "header-container",
                "brand"
            ]);

            /**
             * Function that manage the direction
             * of the scroll
             */
            function offSetManager(){

                var yOffset = 0;
                var currYOffSet = window.pageYOffset;

                if(yOffset < currYOffSet) {
                    myNavBar.add();
                }
                else if(currYOffSet == yOffset){
                    myNavBar.remove();
                }

            }

            /**
             * bind to the document scroll detection
             */
            window.onscroll = function(e) {
                offSetManager();
            }

            /**
             * We have to do a first detectation of offset because the page
             * could be load with scroll down set.
             */
            offSetManager();
        });

        // Gallery

        $(document).ready(function() {
            $('.thumbnail').click(function(){
                $('.modal-body').empty();
                var title = $(this).parent('a').attr("title");
                var resum = document.getElementById("resum-img").innerHTML;
                var link = document.getElementById("link-img").href;
                $('.modal-title').html(title);
                $('.resum').html(resum);
                $('.link').attr("href",link);
                $($(this).parents('div').html()).appendTo('.modal-body');
                $('#myModal').modal({show:true});
            });
        });

        $(document).ready(function() {
            $('.scroll').on('click', function() { // Au clic sur un élément
                var page = $(this).attr('href'); // Page cible
                var speed = 750; // Durée de l'animation (en ms)
                $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
                return false;
            });
        });
    </script>
</body>
</html>