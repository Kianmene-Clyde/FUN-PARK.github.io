<!DOCTYPE html>
<html lang="fr">
<?php $title = 'Inscription | Connexion';  
include('includes/head.php'); 
?>
<body>
	<?php include('includes/header.php');  ?>
	<main>
		<div id="form">
				<div id="inscription">
				<h3>CREEZ VOTRE COMPTE</h3>
				<form action="verif_inscription.php" method="POST" enctype="multipart/form-data">
					<div class="form-floating mb-3">
					  <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="Votre nom">
					  <label for="floatingInput">Votre nom</label>
					</div>
					<div class="form-floating mb-3">
					  <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="Votre prénom">
					  <label for="floatingInput">Votre prénom</label>
					</div>
					<div class="form-floating mb-3">
					  <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="Votre âge">
					  <label for="floatingInput">Votre âge</label>
					</div>
					<div class="form-floating mb-3">
					  <input type="email" class="form-control form-control-sm" id="floatingInput" placeholder="Votre e-mail">
					  <label for="floatingInput">Votre e-mail</label>
					</div>
					<div class="form-floating">
					  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
					  <label for="floatingPassword">Password</label>
					</div>

					<div class="col-12">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
				      <label class="form-check-label" for="invalidCheck">
				        J'accepte les <a href="#">Conditions d'utilisations</a>
				      </label>
				      <div class="invalid-feedback">
				      	Vous devez accepter les <a href="#">Conditions d'utilisations</a>
				      </div>
				    </div>
					</div>
				    <div class="col-12">
					   <button class="btn btn-warning" type="submit">Créez un compte</button>
					</div>
				</form>
			  </div>
			
			<div id="connexion">
				<h3>SE CONNECTER</h3>
				<form action="verif_connexion.php" method="POST" enctype="multipart/form-data"> 
					<div class="form-floating mb-3">
					  <input type="email" class="form-control form-control-sm" id="floatingInput" placeholder="Votre e-mail">
					  <label for="floatingInput">Votre e-mail</label>
					</div>
					<div class="form-floating">
					  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
					  <label for="floatingPassword">Password</label>
					</div>
					<div class="col-12">
					   <button class="btn btn-warning" type="submit">Connexion</button>
					</div>
				</form>
			</div>

		
		</div>
		
		
	</main>
	<?php include('includes/footer.php');  ?>

</body>
</html>