    <div class="container col-md-offset-1 col-md-10 col-md-offset-1">
		<div class="container well">
			<img src="util/images/logo.png" class="col-md-offset-3">
		</div>
		<h2><span class="glyphicon glyphicon-list-alt"style="color:0099FF;"></span> Listening des entreprises</h2>
		<?php include("view/structure/v_band.php") ; ?>		
	
		<div class="container well jumbogrey col-md-12">
			<table class="table table-striped table-responsive display float:left" id="tableUtilisateurs">
						<thead>
							<tr>
								<th class="col-md-4">Variante</th>
								<th>Nom</th>
								<th>Description</th>
							</tr>
							</thead>
							<tbody>
								<?php
									foreach($entreprises as $listeEntreprises){ 
									?>
									<tr><td style="vertical-align:middle"><?php echo $listeEntreprises['variante'];?></td><td style="vertical-align:middle"><?php echo $listeEntreprises['nom'];?></td><td style="vertical-align:middle"><?php echo $listeEntreprises['description'];?></td>
										</td>
									</tr>
									<?php
									}
								?>
							</tbody>
			</table>
		</div>
</div>
