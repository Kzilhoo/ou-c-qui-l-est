    <div class="container col-md-offset-1 col-md-10 col-md-offset-1">
		<div class="container well">
			<img src="util/images/logo.png" class="col-md-offset-3">
		</div>
		<h2><span class="col-md-offset-2 glyphicon glyphicon-list-alt"style="color:0099FF;"></span> Nouvelle entreprise</h2>
		<?php include("view/structure/v_band.php");?>
		   <div class="col-md-offset-2 container well jumbogrey col-md-8 col-md-offset-2">
	<div class = "container-well jumbogrey">
		
		<form class ="form-signin" action="index.php?controler=creationEntreprise&action=creationEntreprise" method="POST" enctype="multipart/form-data">
		<span class = "row">
			<label class="col-md-2">Description</label>
			<input type="text" name="description" class="col-md-2">
		</span>
		<span class = "row">
			<label class="col-md-2">Nom</label>
			<input type="text" name="nom" class="col-md-2">
		</span>
		<span class = "row">
			<label class="col-md-2">Ville</label>
			<input type="text" name="ville" class="col-md-2">
		</span>
		<span class = "row">
			<label class="col-md-2">Téléphone</label>
			<input type="text" name="telephone" class="col-md-2">
		</span>
		<span class = "row">
			<label class="col-md-2">Site Web</label>
			<input type="text" name="siteNet" class="col-md-2">
		</span>	
		<span class = "row">
			 <label class="col-md-2" for="icone">Logo / image :</label>
			 <input type="file" name="icone" class="col-md-2">
		</span>		
		<span class = "row">
			<input type="submit" value="Ajouter l'entreprise" class="btn btn-primary col-md-offset-2">
			<div class="clearfix"></div>
		</span>
		</form>
	</div>
	
		<table class="table table-striped table-responsive display float:left" id="tableEntreprises">
			<thead>
				<tr>
					<th class="col-md-2">Nom</th>
					<th>Ville</th>
					<th>Téléphone<//th>
					<th>Logo</th>
					<th>Site Web</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($entreprises as $listeEntreprises){ 
					?>
					<tr><td><?php echo $listeEntreprises['nom'];?></td><td><?php echo $listeEntreprises['ville'];?></td><td><?php echo $listeEntreprises['telephone'];?></td><td><?php echo $listeEntreprises['logo'];?></td><td><?php echo $listeEntreprises['siteNet'];?></td>					
						<td>						
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									Action <span class="caret"></span>
								</button>		  
								<ul class="dropdown-menu">
									<li><a href="index.php?controler=admin&action=modificationEntreprise&nom=<?php echo $listeEntreprises['nom']; ?>"><span class="glyphicon glyphicon-pencil"></span> Modification</a></li>
									<li><a href="index.php?controler=admin&action=suppressionEntreprise&nom=<?php echo $listeEntreprises['nom']; ?>"><span class="glyphicon glyphicon-remove"></span> Suppression</a></li>
								</ul>
							</div>
						</td>
					</tr>
					<?php
					}
				?>
			</tbody>
		</table>
</div>
</div

