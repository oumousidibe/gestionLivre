<?php 
 include 'bd.php';

	 $date_livre[0]      ="";
	 $titre_livre[0]   ="";
	 $auteur_livre[0]  ="";
	 $Description_livre[0]  ="";
	 $parution_livre[0]  ="";
	 $statut_livre[0]="";
	 $emprunteur_livre[0]="";
	 $inc          =0;
	$query="SELECT DateL,Titre,Auteur,Description,Date_p,Statut,Emprunteur FROM his ORDER BY DateL ASC
	 		";
	 $result=mysqli_query($db,$query) or die(mysqli_error($db)) ;
	 
	 while ($row = mysqli_fetch_row($result)) 
	 {
	 	foreach ($row as $key => $value) 
	 	{
	 		if ($key == 0) 
	 		{
	 			$date_livre[$inc]  = $value ;
	 		}
	 		if ($key == 1) 
	 		{
	 			$titre_livre[$inc]  = $value ;
	 		}
	 		if ($key == 2) 
	 		{
	 			$auteur_livre[$inc]  = $value ;
	 		}
	 		if ($key == 3) 
	 		{
	 			$Description_livre[$inc]  = $value ;
	 		}
	 		if ($key == 4) 
	 		{
	 			$parution_livre[$inc]  = $value ;
	 		}
	 		if ($key == 5) 
	 		{
	 			$statut_livre[$inc]  = $value ;
	 		}
	 		if ($key == 6) 
	 		{
	 			$emprunteur_livre[$inc]  = $value ;
	 		}
	 	}
	 	$inc++;
	 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>
	<style type="text/css">
		td,th
		{
			width: 200px;
			font-weight: bold;
		}
		th
		{
			background-color: black;
			color: #FFD700;
			font-weight: bolder;
		}
	</style>
</head>
<body background="back12.jpg">
		<br><br>
	<div class="container" style="height: 800px;color: white">
		<div class="alert alert-dark" style="background-color: black;color: #FFD700;"><input class="form-control" id="myInput" type="text" placeholder="Rechercher dans l'historique"></div>
		<table>
			<tr>
				<thead>
				<th>Date</th>
				<th>Titre</th>
				<th>Auteur</th>
				<th>Description</th>
				<th>Date de parution</th>
				<th>Statut</th>
				<th>Emprunteur</th>
				</thead>
			</tr>
			<tbody id="myTable">
			<?php 
				 for ($i=0; $i <count($date_livre) ; $i++) 
				 { 
			?>
				<tr>
					<td><br>
						<?php echo $date_livre[$i] ?>
					</td>
					<td><br>
						<?php echo $titre_livre[$i] ?>
					</td>
					<td><br>
						<?php echo $auteur_livre[$i] ?>
					</td>
					<td><br>
						<?php echo $Description_livre[$i] ?>
					</td>
					<td><br>
						<?php echo $parution_livre[$i] ?>
					</td>
					<td><br>
						<?php echo $statut_livre[$i] ?>
					</td>
					<td><br>
						<?php echo $emprunteur_livre[$i] ?>
					</td>
				</tr>
				<tr>
					<td colspan="7">
						<hr style="border-color: red; ">
					</td>
				</tr>
			<?php  	
				 }
			 ?>
		</tbody>
		</table>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>