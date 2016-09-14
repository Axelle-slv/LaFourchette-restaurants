<!DOCTYPE html>
 <html lang="fr">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="Les restaurants gastronomiques La Fourchette vous accueillent tous les jours entre 11h et 00h dans une ambiance cosi et intimiste. Vous découvrirez des recettes gourmandes et originales cuisinées avec des produits locaux, bio et d'une qualité exceptionnelle qui raviront vos papilles.">
 <title>Contactez-nous | La Fourchette | Restaurants gastronomiques</title>
  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Our stylesheet -->
 <link rel="stylesheet" href="fichiers/style.css">
  <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Raleway:300,400,500" rel="stylesheet"> 
 </head>

 <body>

 	<!--<?php include ('header.php'); ?> -->
 
	<header class="container-fluid" id="contact-hook">
		<div class="container">
			<h1>Partager, <span><strong>du local</strong></span> dans vos assiettes.</h1>
			<img src="fichiers/images/frame-site-la-fourchette-white.png">
		</div>
	</header>
 	
 	<section class="container-fluid" id="franchise-contact-sentence">
		<div class="container">
			<h1>Des questions sur la franchise La Fourchette? C'est par <a href="presentation-restaurant.php">ici</a>.</h1>
		</div>
	</section>

	<section class="container-fluid" id="contact-form">
		<div class="container">
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<h1>Lorem ipsum dolor sit amet, consectetur.</h1>
				<hr />
				<h2>Vous souhaitez contacter l'un de nos restaurant La Fourchette ? C'est simple, il vous suffit de le choisir parmi la liste ci-dessous et de remplir le formulaire.</h2>
			</div>
			<div class="col-xs-12 col-md-6 col-md-offset-3" id="formulaire-contact">
				<form method="post">
					<label for="ville-contact-q" id="ville-contact-q">Quel restaurant La Fourchette souhaitez-vous contacter ?</label>
					<select name="ville-contact" id="ville-contact">
						<option value="bordeau">Bordeau</option>
						<option value="chartres">Chartres</option>
						<option value="fontainebleau">Fontainebleau</option>
						<option value="la-loupe">La Loupe</option>
						<option value="lyon">Lyon</option>
						<option value="toulouse">Toulouse</option>
						<option value="siege-social">Siège social La Fourchette</option>
					</select>
	                	
	                <input type="text" name="first-name" id="first-name" placeholder="Votre prénom*"/>
	                <input type="text" name="last-name" id="last-name" placeholder="Votre nom*"/>
	                <input type="tel" name="phone" id="phone-number" placeholder="Votre numéro de téléphone*"/>
	                <input type="email" name="email" id="e-mail" placeholder="Votre e-mail"/>
	                <textarea name="message" id="form-message" placeholder="Ecrivez votre message pour La Fourchette ici."></textarea>
	                <input type="submit" name="submit-button" id="submit" value="Envoyer mon message">
            	</form>
			</div>
		</div>
	</section>
 	
 	<?php include ('footer.php'); ?>
 
 </body>

 </html> 
