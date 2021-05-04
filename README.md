<?php 
 include 'bd.php';
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Affecter Commande</title>
</head>
<body>
	<meta charset="utf-8" name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body background="back16.jpg" style="color: white;">
		<br><br>
		<?php  
			 $query = "SELECT login FROM staff WHERE designation='Employe' 
			 		  ";
			 $result1 =mysqli_query($db,$query)or die("Could not receive login");
		?>
		<div class="container" style="background-image: url(./.jpg);background-repeat: no-repeat;height: 650px">
			<div class="row">
				<form action="aff_emp.php" method="post" class="form-inline">
						<table>
						<tr>
							<td>
								<div class="form-group">
								<select  class="form-control" name="emp" style="color: red;" >
								 <?php 
								 	  while ($row = mysqli_fetch_assoc($result1))
			 						{
			 							foreach ($row as $value) 
			 							{
			 					 ?>	      
			 					 			<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
			 					  <?php  
			 							}
			 						}
								 ?>
								</select>
								</div>
							</td>
							<td>
						<textarea class="form-control" name="commande" cols="60" placeholder="Commandes ..."></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2">
						<br><br><br>
						<p>
				    	<span class="glyphicon glyphicon-flash"></span><span class="glyphicon glyphicon-flash"></span><span class="glyphicon glyphicon-flash"></span><span style="color: red;"><u><b>Remarque</b></u> :</span> Notez que le champ sert a affecter des taches aux employés et lors de la saisie veuillez séparer les cours par un ";" .
						</p>
							</td>
						</tr>
						<tr>
							<td><br>
						<button type="submit" class="btn btn-success" style="float-bottom;">Valider</button>
							</td>
						</tr>
						</table>
				</form>
			</div>
			<?php
				 /*function malongeur($tab)
				 {
				   	while ($tab[$i]!="") 
				   	{
				   		$mlongeur = $i ;
				   	}
				   	return $mlongeur ;
				 }*/  
				 if (!isset($_POST['commande'])) 
				 {
				 	$comm = ""  ;
				 	$emp  = ""  ;
				 }
				 else
				 {
				 	$comm  = $_POST['commande']       ;
				 	$comm1 = explode(";", $comm)  ;
				 	$emp    = $_POST['emp']         ;
				 	
				 	if ($comm!="") 
				 	{
				 		for ($i=0; $i <count($comm1) ; $i++) 
				 		{
				 			$date=date("Y-m-d"); 
				 			$query=" INSERT INTO commande_j SET nom='".$emp."',libelle='".$comm1[$i]."',datec='".$date."'
				 			   	   ";

				 			mysqli_query($db,$query)or die(mysqli_error($db)) ;
				 		}
			?>
					<script type="text/javascript">
						alert("Insertion réussie dans la base de données");
					</script>
			<?php 
				 	}
				 }
			?>
		</div>
</body>
</html>