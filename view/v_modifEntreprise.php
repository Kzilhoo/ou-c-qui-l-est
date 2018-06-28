    <div class="container col-md-offset-1 col-md-10 col-md-offset-1">
		<div class="container well">
			<img src="util/images/logo.png" class="col-md-offset-3">
		</div>
		<h2><span class="col-md-offset-2 glyphicon glyphicon-list-alt"style="color:0099FF;"></span> Nouvelle entreprise</h2>
		<?php include("view/structure/v_band.php");?>
		   <div class="col-md-offset-2 container well jumbogrey col-md-8 col-md-offset-2">
	<div class = "container-well jumbogrey">
		
		<form class ="form-signin" action="index.php?controler=admin&action=applicationModifications&nom=<?php echo $entreprises[0]['nom'];?>" method="POST" enctype="multipart/form-data">
		<span class = "row">
			<label class="col-md-2">Description</label>
				<input type="text" name="description" class="col-md-2" value="<?php echo $entreprises[0]['description'];?>">
		</span>
		<span class = "row">
			<label class="col-md-2">Nom</label>
				<input type="text" name="nom" class="col-md-2" value="<?php echo $entreprises[0]['nom'];?>">
		</span>
		<span class = "row">
			<label class="col-md-2">Ville</label>
				<input type="text" name="ville" class="col-md-2" value="<?php echo $entreprises[0]['ville'];?>">
		</span>
		<span class = "row">
			<label class="col-md-2">Téléphone</label>
				<input type="text" name="telephone" class="col-md-2" value="<?php echo $entreprises[0]['telephone'];?>">
		</span>
		<span class = "row">
			 <label class="col-md-2" for="icone">Logo / image :</label>
			 <input type="file" name="icone" class="col-md-2" value="<?php echo $entreprises[0]['logo'];?>">
		</span>	
		<span class = "row">
			<label class="col-md-2">Site Web</label>
				<input type="text" name="siteNet" class="col-md-2" value="<?php echo $entreprises[0]['siteNet'];?>">
		</span>		
			<span class = "row">
				<input type="submit" value="Modifier l'entreprise" class="btn btn-primary col-md-offset-2">
				<div class="clearfix"></div>
			</span>
		</form>
	</div>
	</div>
	</div>