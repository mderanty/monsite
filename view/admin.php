<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administration Mon site</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
		$titre 	 = "Qui suis-je ?";
		$content = "Je m'appelle Maxime Deranty, j'ai 25ans. <br>Actuellement titulaire d'une licence pro en développement web, je recherche un poste de développeur. Je suis passionné par mon métier et j'aimerai vraiment intégrer une entreprise pour pouvoir vivre de cette passion. <br>Je tend à me présenter via ce site, de ce fait je vous souhaite une bonne visite.";
		$myAvatar= "media/myAvatar.png";
	 ?>
	<header>
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
                <a id="brand" class="navbar-brand" href="#">Administration</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse smooth-scroll">
                <ul class="nav navbar-nav">
                    <li><a class="scroll" href="#about"><?php echo $titre ?></a></li>
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
        	<form action="" method="POST"></form>
				<fieldset>
            		<h2 class="title-section">
            			<!-- Text input-->
                        <div class="form-group">
                            <div class="col-md-4 col-sm-4 col-lg-offset-4">
                                <input id="titre" name="titre" placeholder="<?php echo $titre ?>" class="form-control input-md" required="" type="text">
                            </div>
                        </div>
            		</h2>
            		<div class="form-group">
		            	<hr class="separator">
            		</div>
		            <div class="form-group">
                            <div class="col-md-4 col-sm-4 col-lg-offset-4">
                                <input id="myAvatar" name="myAvatar" placeholder="<?php echo $myAvatar ?>" class="form-control input-md" required="" type="text">
                            </div>
                        </div>
		            <div class="col-sm-4 col-lg-4 col-xs-12 col-md-12">
		                <img class="avatar" src="media/myAvatar.png" alt="">
		            </div>
		            <div class="form-group">
                        <div class="col-md-4 col-lg-offset-4">                     
                            <textarea rows="10" cols="40" class="form-control" id="content" name="content"><?php echo $content; ?></textarea>
                        </div>
                    </div>
                </fieldset>
        </div>
    </section>
</body>
</html>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 col-md-2 control-label" for="name">Nom:</label>
                            <div class="col-md-10 col-sm-4">
                                <input id="name" name="name" placeholder="Votre nom" class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="message">Message</label>
                            <div class="col-md-10">                     
                                <textarea rows="10" cols="40" class="form-control" id="message" name="message">Votre message</textarea>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-md-2 col-lg-offset-6">
                                <button id="submit" name="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>