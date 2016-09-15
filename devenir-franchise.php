<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Les restaurants gastronomiques La Fourchette vous accueillent tous les jours entre 11h et 00h dans une ambiance cosi et intimiste. Vous découvrirez des recettes gourmandes et originales cuisinées avec des produits locaux, bio et d'une qualité exceptionnelle qui raviront vos papilles.">
 <title>Devenir franchisé | La Fourchette | Restaurants gastronomiques</title> 
 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <!-- Our stylesheet -->
<link rel="stylesheet" href="fichiers/style.css">
 <!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Raleway:300,400,500" rel="stylesheet"> 
 </head>

 <body>

 <?php include ('menu.php'); ?>

 <header class="container-fluid" id="franchise-hook">
		<div class="container">
			<h1>Devenir <span><strong>franchisé</strong></span> La Fourchette.</h1>
			<img src="fichiers/images/frame-site-la-fourchette-white.png">
		</div>
	</header>
 
 <section class="container-fluid" id="franchise-content">
		<div class="container">
			<h1>Les atouts de la franchise</h1>
			<hr />
			<h2>La franchise La Fourchette, une expérience humaine avant tout.</h2>
			
				<div class="col-xs-12 col-md-5 col-md-offset-1">
					<p class="grey-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies ligula ligula, eu porttitor mi maximus eu. Curabitur pharetra velit ac feugiat faucibus. In nec mi neque. Fusce ut libero nunc. Curabitur placerat at sapien ut sollicitudin. Integer ultricies consequat mi vitae gravida. Ut vitae sagittis massa. Aenean vel commodo nisi. Suspendisse pretium non lacus et sollicitudin. Donec volutpat at tellus id vulputate. Sed tristique tortor ut justo finibus blandit. Phasellus egestas lorem ac purus tristique condimentum. Aenean et dui aliquet, accumsan quam vel, rutrum libero. Sed eget malesuada nisi. Aliquam et odio cursus, finibus ligula id, euismod ex. Curabitur convallis massa eget enim mattis, in tincidunt ante rutrum. </p>
				</div>
				
				<div class="col-xs-12 col-md-5">
					<p class="grey-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies ligula ligula, eu porttitor mi maximus eu. Curabitur pharetra velit ac feugiat faucibus. In nec mi neque. Fusce ut libero nunc. Curabitur placerat at sapien ut sollicitudin. Integer ultricies consequat mi vitae gravida. Ut vitae sagittis massa. Aenean vel commodo nisi. Suspendisse pretium non lacus et sollicitudin. Donec volutpat at tellus id vulputate. Sed tristique tortor ut justo finibus blandit. Phasellus egestas lorem ac purus tristique condimentum. Aenean et dui aliquet, accumsan quam vel, rutrum libero. Sed eget malesuada nisi. Aliquam et odio cursus, finibus ligula id, euismod ex. Curabitur convallis massa eget enim mattis, in tincidunt ante rutrum. </p>
				</div>
		</div>
	</section>

	<section class="container-fluid" id="franchise-asset">
		<div class="container">
			<h1>Les chiffres clés</h1>
			<hr />
			<h2>Lorem Ipsum</h2>

				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-md-3" id="icon-asset">
						<img src="fichiers/images/la-fourchette-developpement-fort.png">
						<p>Une image de marque forte en plein developpement</p>
					</div>
					<div class="col-md-3" id="icon-asset">
						<img src="fichiers/images/la-fourchette-rentabilite.png">
						<p>Une rentabilité rapide</p>
					</div>
					<div class="col-md-3" id="icon-asset">
						<img src="fichiers/images/icon-la-fourchette-reseau-fournisseur.png">
						<p>Un large réseau de fournisseurs</p>
					</div>
					<div class="col-md-3" id="icon-asset">
						<img src="fichiers/images/la-fourchette-chef-recette-originale.png">
						<p>Plus de 50 recettes de saison élaborées chaque année.</p>
					</div>
				</div>
		</div>
	</section>

	<section class="container-fluid" id="contact-form">
			<div class="container">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					<h1>Envie de rejoindre la famille des restaurants La Fourchette ?</h1>
					<hr />
					<h2>Discutons autour d'un café de votre projet, mais tout d'abord merci de remplir le formulaire ci-dessous.</h2>
				</div>
				<div class="col-xs-12 col-md-6 col-md-offset-3" id="formulaire-contact">
					<form method="post">
		                <input type="text" name="first-name" id="first-name" placeholder="Votre prénom*"/>
		                <input type="text" name="last-name" id="last-name" placeholder="Votre nom*"/>
		                <input type="tel" name="phone" id="phone-number" placeholder="Votre numéro de téléphone*"/>
		                <input type="text" name="email" id="e-mail" placeholder="Votre e-mail"/>
		                <textarea name="message" id="form-message" placeholder="Avez-vous une experience en cuisine ? Decrivez-la en quelques mots.*"></textarea>
		                <input type="text" name="apport" id="apport" placeholder="Avez-vous un apport personnel?*"/>
		                <input type="text" name="apport" id="e-mail" placeholder="Dans quelle ville souhaitez-vous ouvrir un La Fourchette?"/>
		                <input type="text" name="email" id="e-mail" placeholder="Avez-vous un emplacement?""/>
		                <textarea name="message" id="form-message" placeholder="Ecrivez votre message pour La Fourchette ici."></textarea>
		                <input type="submit" name="submit-button" id="submit" value="Envoyer mon message">
	            	</form>
				</div>
			</div>
		</section>

 <?php include ('footer.php'); ?>
 
 </body>

 </html> 

