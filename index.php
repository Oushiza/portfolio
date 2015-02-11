<?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Portfolio de Kevin Lay Developpeur Front-End.</title>
	<meta name="description" content="Portfolio de Kevin Lay Developpeur Front-End." />
	<meta name="author" content="Kevin Lay" />
	<meta name="viewport" content="width=device-height; max-scale=1.0" />
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link rel="stylesheet" media="screen" href="css/meyer.css" />
	<link rel="stylesheet" media="screen" href="css/style.css" />
</head>
</head>
<body>
	<section id="content">
		<header>
			<nav>
				<a href="#presentation">Présentation</a>
				<a href="#competences">Compétences</a>
				<!-- <a href="#projets">Projets</a> -->
				<a href="#contact">Contact</a>
			</nav>
		</header>
		<footer>
			<p>© 2015 Kevin Lay</p>
			<a href="cv_kevin_lay.pdf" class="cv" title="Imprimer mon cv" download="">CV</a> <!-- Mettre logo  -->
			<a href="https://twitter.com/Lay_Kev" class="twitter" title="Allez sur mon profil twitter">Twitter</a> <!-- Mettre logo  -->
			<a href="http://www.linkedin.com/pub/kevin-lay/40/900/836" class="link" title="Visitez mon compte linkedin">Linkedin</a> <!-- Mettre logo  -->
		</footer>
		<article id="presentation">
			<div>
				<img src="img/logo.png" alt="Logo Kevin Lay" />
				<h1>Webdesigner / Developpeur Front-End.</h1>
				<h2>Kevin Lay</h2>
				<p>Une première année en cursus Chef de Projet de Multimédia à l'IESA Multimédia, valorisé par un stage de 6 mois chez Easyvoyage.com au poste d'intégrateur. Et maintenant en formation continue en tant que développeur Multimédia à l'école Multimédia.</p>
			</div>
		</article>
		<article id="competences">
			<h1>Compétences</h1>
			<div class="compColumn">
				<div class="column html">
					<h2>HTML</h2>
				</div>
				<div class="reflet"></div>
			</div>
			<div class="compColumn">
				<div class="column css">
					<h2>CSS</h2>
				</div>
				<div class="reflet"></div>
			</div>
			<div class="compColumn">
				<div class="column js">
					<h2>Javascript</h2>
				</div>
				<div class="reflet"></div>
			</div>
			<div class="compColumn">
				<div class="column wdp">
					<h2>Wordpress</h2>
				</div>
				<div class="reflet"></div>
			</div>
			<div class="compColumn">
				<div class="column ps">
					<h2>Photoshop</h2>
				</div>
				<div class="reflet"></div>
			</div>
		</article>
			<!-- <figure>
					<a href=""><img src="img/grand/foliowe.jpg" alt="" class="" data-source="" /></a>
					<figcaption>Légende associée</figcaption><br />
				</figure>
				<figure>
					<a href=""><img src="img/grand/folio.jpg" alt="" class="" data-source="" /></a>
					<figcaption>Légende associée</figcaption><br />
				</figure>
				<figure>
					<a href=""><img src="img/grand/hotel.jpg" alt="" class="" data-source="" /></a>
					<figcaption>Légende associée</figcaption><br />
				</figure>
				<figure>
					<a href=""><img src="img/grand/golf.jpg" alt="" class="" data-source="" /></a>
					<figcaption>Légende associée</figcaption><br />
				</figure> -->
		<article id="contact">
			<?php if(array_key_exists('errors', $_SESSION)): ?>
				<div>
					<?= implode('<br>',  $_SESSION['errors']); ?>
				</div>
			<?php endif; ?>
			<?php if(array_key_exists('success', $_SESSION)): ?>
				<div>
					<p>Votre email a bien été envoyé</p>
				</div>
			<?php endif; ?>
			<form action="post_contact.php" method="POST">
				<input required type="text" name="name" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '' ;?>" placeholder="Votre nom">
				<input required type="email" name="email" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '' ;?>" placeholder="Votre email : exemple@exemple.com">
				<textarea required name="message" id="inputmessage" placehoder="Votre message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '' ;?></textarea>
				<button type="submit">Envoyer</button>
			</form>
		</article>
	</section>
</body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
 ?>