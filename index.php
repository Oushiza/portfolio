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
<body>
    <section id="content">
        <header>
        	<a href="#presentation"><img src="img/logo.png"></a>
            <nav>
	            <ul>
	            	<li><a href="#presentation">Présentation</a></li>
	            	<li><a href="#competences">Compétences</a></li>
	            	<li><a href="#projets">Projets</a></li>
	            	<li><a href="#contact">Contact</a></li>
	            </ul>
            </nav>
            <aside>
                <a href="cv_kevin_lay.pdf" class="cv" title="Imprimer mon cv" download="">CV</a>
                <a href="https://twitter.com/Lay_Kev" class="twitter" title="Allez sur mon profil twitter">Twitter</a>
                <a href="http://www.linkedin.com/pub/kevin-lay/40/900/836" class="link" title="Visitez mon compte linkedin">Linkedin</a>
            </aside>
        </header>
        <article id="presentation" class="horizontalScroll">
            <h1>Webdesigner / Developpeur Front-End.</h1>
            <div>
                <h2>Kevin Lay</h2>
                <p>Une première année en cursus Chef de Projet de Multimédia à l'IESA Multimédia, valorisé par un stage de 6 mois chez Easyvoyage.com au poste d'intégrateur. Et maintenant en formation continue en tant que développeur Multimédia à l'école Multimédia.</p>
            </div>
        </article>
        <article id="competences" class="horizontalScroll">
            <h1>Compétences Webdesign / Langages du web</h1>
            <div class="skill">
	                <div class="html">
	                    <h2>HTML</h2>
	                </div><!--
				--><div class="css">
	                    <h2>CSS</h2>
	                </div><!--
				--><div class="js">
	                    <h2>Javascript</h2>
	                </div><!--
				--><div class="wdp">
	                    <h2>Wordpress</h2>
	                </div><!--
				--><div class="ps">
	                    <h2>Photoshop</h2>
	                </div>
            </div>
        </article>
        <article id="projets" class="horizontalScroll">
        	<h1>Projets</h1>
            <figure>
                <a href="http://www.iesanetwork.com/w.echadli/"><img src="img/projets/portfolio_we.jpg" alt="" class="" data-source="" /></a>
                <figcaption>Portfolio Widad Echadli</figcaption><br />
            </figure><!--
		--><figure>
                <a href="http://www.iesanetwork.com/k.lay/"><img src="img/projets/folio.jpg" alt="" class="" data-source="" /></a>
                <figcaption>Projet IESA Multimédia</figcaption><br />
            </figure>
        </article>
        <article id="contact" class="horizontalScroll">
        	<h1>Contact</h1>
        	<div>
        		<img src="img/K_Lay.jpg">
	            <p>J'habite à Paris (Olympiades).<br>06.88.94.66.05<br>Vous voulez me contactez ?<br><br>Cliquez ici ► <a href="mailto:kevinlay.fr@gmail.com?subject=Contact portfolio">Contact</a></p>
            </div>
	        <p class="cop">© 2015 Kevin Lay</p>
        </article>
    </section>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/portfolio.js"></script>
    <script>
        $(document).ready(function() {

            $('html, body, *').mousewheel(function(e, delta) {
                this.scrollLeft -= (delta * 40);
                e.preventDefault();
            });

        });
    </script>
</body>
</html>