<div class="container col-md-offset-1 col-md-10 col-md-offset-1">
	<div class="container well">
		<img src="util/images/logo.png" class="col-md-offset-3">
	</div>
	<?php include("view/structure/v_band.php");?>
		   <div class="col-md-offset-2 container well jumbogrey col-md-8 col-md-offset-2">
	<div class = "row">
	<div class="container col-lg-4 col-lg-offset-4">
	<form class="form-signin" action ="index.php?controler=loginAdmin&action=connexion" method="POST">
		<h2 class="form-signin-heading">Connectez-vous pour continuer</h2>
		<label for="inputEmail" class="sr-only">adresse e-mail</label>
		<input type="text" id="inputEmail" class="form-control" name="username" placeholder="Identifiant" required autofocus>
		<label for="inputPassword" class="sr-only">Mot de passe</label>
		<input type="password" id="inputPassword" class="form-control" name="password" placeholder="Mot de passe" required>
		<div class="checkbox">
			<label>
				<input type="checkbox" value="remember-me"> Se souvenir de moi
			</label>
		</div>
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Se connecter"/>
	</form>
	
</div>	
</div>
	</div>
</div>	