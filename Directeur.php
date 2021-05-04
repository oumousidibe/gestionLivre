<?php 
 	include 'bd.php';

	 $date[0]      ="";
	 $inf_nom[0]   ="";
	 $inf_pnom[0]  ="";
	 $inf_montant[0]  ="";
	 $inf_mode[0]  ="";
	 $inf_poids[0]="";
	 $inf_prix[0]="";
	 $inc          =0;
	$query="SELECT nomClient,pnomClient,prixbijou,modelebijou,poidsbijou,montantverse,dateP FROM prets ORDER BY dateP ASC
	 		";
	 $result=mysqli_query($db,$query) or die(mysqli_error($db)) ;
	 
	 while ($row = mysqli_fetch_row($result)) 
	 {
	 	foreach ($row as $key => $value) 
	 	{
	 		if ($key == 0) 
	 		{
	 			$inf_nom[$inc]  = $value ;
	 		}
	 		if ($key == 1) 
	 		{
	 			$inf_pnom[$inc]  = $value ;
	 		}
	 		if ($key == 2) 
	 		{
	 			$inf_prix[$inc]  = $value ;
	 		}
	 		if ($key == 3) 
	 		{
	 			$inf_mode[$inc]  = $value ;
	 		}
	 		if ($key == 4) 
	 		{
	 			$inf_poids[$inc]  = $value ;
	 		}
	 		if ($key == 5) 
	 		{
	 			$inf_montant[$inc]  = $value ;
	 		}
	 		if ($key == 6) 
	 		{
	 			$date[$inc]  = $value ;
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
	<div class="container" style="height: 800px;color: white;">
		<div class="alert alert-dark" style="background-color: black;color: #FFD700;"><input class="form-control" id="myInput" type="text" placeholder="Rechercher dans l'historique"></div>
		<table>
			<tr>
				<th>Nom Client</th>
				<th>Prenom Client</th>
				<th>Prix bijou</th>
				<th>Modele bijou</th>
				<th>Poids Bijou</th>
				<th>montant verse</th>
				<th>Date</th>
			</tr>
			<?php 
				 for ($i=0; $i <count($inf_nom) ; $i++) 
				 { 
			?>
				<tr>
					<td><br>
						<?php echo $inf_nom[$i] ?>
					</td>
					<td><br>
						<?php echo $inf_pnom[$i] ?>
					</td>
					<td><br>
						<?php echo $inf_prix[$i] ?>
					</td>
					<td><br>
						<?php echo $inf_mode[$i] ?>
					</td>
					<td><br>
						<?php echo $inf_poids[$i] ?>
					</td>
					<td><br>
						<?php echo $inf_montant[$i] ?>
					</td>
					<td><br>
						<?php echo $date[$i] ?>
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
		</table>
	</div>
</body>
</html>