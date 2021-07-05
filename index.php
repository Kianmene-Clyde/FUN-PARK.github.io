<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php $title = 'Séjour Fun Park, Réservation, Tickets | FUN PARK';
include('includes/head.php');
  ?>

<body>
	<?php include('includes/header.php');  ?>

	<section class="img">
		<div class="wrapper">
			<h1><strong>Explorer Fun Park</strong></h1>
			  <div>
			  	<form class="search-box">
			  		<label for="name"><h3><strong>Trouver une attraction qui vous fera sourire toute la journée</strong></h3></label>
				  	<input class="search-text" type="text" placeholder= "Rechercher une attraction" class="search" name="search">
	  				<button class="submit" type="submit"><i class="fa fa-search"></i></button>
			  	</form>
			  </div>

		  	<div class="dropdown">
			  	<button onclick="myFunction()" class="dropbtn">TRIER PAR</button>
	  			<div id="myDropdown" class="dropdown-content">
<!-- 			    <input class="search-text" type="text" placeholder="Rechercher.." id="myInput" onkeyup="filterFunction()"> -->
 						<div class="filtre">
 							<h5>Type</h5>
					    	<li><a href="#debutant">Débutant</a></li>
					  		<li><a href="#intermediare">Intermédiare</a></li>
					  		<li><a href="#avance">Avancé</a></li>
					  		<li><a href="#adrenaline">Adrénaline</a></li>
					  		<hr>
 						</div>
 						<div class="filtre">
 							<h5>Taille minimum</h5>
					  		<li><a href="#">1,07m</a></li>
					  		<li><a href="#">1,20m</a></li>
					  		<li><a href="#">1,32m</a></li>
					  		<li><a href="#">1,50m</a></li>
					  		<hr>
 						</div>
					  	<div class="filtre">
					  		<h5>Age minimum</h5>
					  		<li><a href="#">Touts petits</a></li>
					  		<li><a href="#">Enfants</a></li>
					  		<li><a href="#">Adolescents</a></li>
					  		<li><a href="#">adultes</a></li>
					  		<li><a href="#">Tout âge</a></li>
					  	</div>
					  	
 					</div>
			  </div>
			  <div class="clear"></div>
	</section>

	<section id="possibilities">
			<article>
			<div class="attraction">
				<img class="image" src="assets/attraction1.png" height="200px" width="250px">
				<a href="#">
					<strong><h4>ADVENTURE ISLE</h4></strong><hr>
					<small><p>Plaisir en famille garanti ! Prenez votre courage<br> à deux mains pour explorer ce territoire mystérieux.<br>Saurez-vous percer les secrets qui entourent Skull Rock?<br>Type: Intermédiare<br>Taille minimum: 1,04m<br>Age minimum: Enfants</p></small>
				</a>
			</div>
		</article>
			
		<article>
			<div class="attraction">
				<img class="image" src="assets/attraction2.png" height="200px" width="250px">
				<a href="#">
					<strong><h4>AUTOPIA</h4></strong><hr>
					<small><p>Prenez place à bord de votre petit bolide et<br> foncez au milieu de décors à couper le souffle !<br>Type: Débutant<br>Taille minimum: 1,50m<br>Age minimum: Adolescents</p></small>
				</a>
			</div>
		</article>
		<article>
			<div class="attraction">
				<img class="image" src="assets/attraction3.png" height="200px" width="250px">
				<a href="#">
					<strong><h4>PHANTOM MANOR</h4></strong><hr>
					<small><p>Êtes-vous prêt pour le grand frisson ?<br> Alors mettez le cap sur ce parcours mystérieux et fascinant, <br>où fantômes et esprits vous attendent à chaque tournant.<br>Type: Intermédiare<br>Taille minimum: 1,50m<br>Age minimum: Adolescents</p></small>
				</a>
			</div>
		</article>
		<article>
			<div class="attraction">
				<img class="image" src="assets/attraction4.png" height="200px" width="250px">
				<a href="#">
					<strong><h4>DISCOVERY ARCADE</h4></strong><hr>
					<small><p>Eurêka ! Découvrez l’âge d’or des inventions<br> grâce à des modèles réduits de certaines des plus grandes <br>créations du XXe siècle qui ont révolutionné le monde.<br>Type: Débutant<br>Taille minimum: 1,04m<br>Age minimum: Touts petits</p></small>
				</a>
			</div>
		</article>
		<article>
			<div class="attraction">
				<img class="image" src="assets/attraction5.png" height="200px" width="250px">
				<a href="#">
					<strong><h4>MONTAGNE RUSSE</h4></strong><hr>
					<small><p>Envie de frisson? Ne manquez pas nos Montagnes Russes.<br>Sensations fortes assurée<br>Type: Adrénaline<br>Taille minimum: 1,50m<br>Age minimum: Adolescents</p></small>
				</a>
			</div>
		</article>
		<article>
			<div class="attraction">
				<img class="image" src="assets/attraction6.png" height="200px" width="250px">
				<a href="#">
					<strong><h4>LABYRINTHE DEMONIAQUE</h4></strong><hr>
					<small><p>Encore plus de frissons! Prenez votre courage<br> à deux mains pour explorer ce territoire mystérieux.<br> Vous n'en resortirez pas sans cicatrices<br>Type: Adrénaline<br>Taille minimum: 1,04m<br>Age minimum: Enfants</p></small>
				</a>
			</div>
		</article>
		
	</section>
		

	<?php include('includes/footer.php');  ?>
	<script src="scripts/index.js" charset="utf-8" type="text/javascript"></script>
	

</body>
</html>