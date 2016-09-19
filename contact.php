<!DOCTYPE html>
 <html lang="fr">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="Les restaurants gastronomiques La Fourchette répondent à vos questions. N'hésitez pas à nous contacter en utilisant ce formulaire, nous vous répondrons dans les plus brefs délais.">
 <title>Nous contacter | La Fourchette | Restaurants gastronomiques</title>
 <link rel="icon" type="image/png" href="fichiers/images/favico_la_fourchette_32x32.png" />
  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Our stylesheet -->
 <link rel="stylesheet" href="fichiers/style.css">
  <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Raleway:300,400,500" rel="stylesheet"> 
 </head>

 <body>
 
 	<?php include ('menu.php'); ?>
 
	<header class="container-fluid" id="contact-hook">
		<div class="container">
			<h1>Avec nous, <span><strong>les goûts et les couleurs</strong></span> ça se discute !</h1>
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

			<div class="col-xs-12 col-md-6" id="maps">
			<iframe src="https://www.google.com/maps/d/embed?mid=1a9mZ04NUVM3Yk4ThQtyVnW60oAo" width="100%" height="489px"></iframe>
			</div>

			<div class="col-xs-12 col-md-6" id="formulaire-contact">
				<form method="post">
					<label for="ville-contact-q" id="ville-contact-q">Quel restaurant La Fourchette souhaitez-vous contacter ?</label>
					<select name="ville-contact" id="ville-contact">
						<option value="bordeaux">Bordeaux</option>
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
 
<!-- Import JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </body>

 </html> 
