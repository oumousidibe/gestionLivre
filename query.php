<?php 
	  include 'bd.php';
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
</head>
<body background="img9.jpg">	
		<br><br>
		<div class="container" style="color: white;font-weight: bold; ">
			
				<form action="ajouterLivre.php" method="post">
						<div class="form-group">
							 <input type="hidden" name="id" >
							<label>Entrer le titre du livre</label><br>
							<input type="text" name="titre_livre" class="form-control" required=""><br>
						</div>
						<div class="form-group">
							<label>Entrer l'auteur</label><br>
							<input type="text" name="nom_auteur" class="form-control" required=""><br>
						</div>
						<div>
							<label>Description</label><br>
							<input type="text" name="description_livre" class="form-control" required=""><br>
						</div>
						<div>
							<label>Entrer la date de parution</label><br>
							<input type="date" name="date_parution" class="form-control" required=""><br>
						</div>

						<div>
							<label>Entrer le statut</label><br>
							<input type="text" name="statut_livre" class="form-control" required=""><br>
						</div>
						<div>
							<label>Entrer l'emprunteur</label><br>
							<input type="text" name="nom_emprunteur" class="form-control" required="">
						</div><br>
						<div>
							<button type="submit" class="btn btn-success">Valider !</button>
						</div>
						<?php 
							  if (!isset($_POST['nom_emprunteur'])) 
							  {
							  	$id_livre           ="";
							  	$titre_livre        ="";
							  	$nom_auteur         ="";
							  	$description_livre  ="";
							  	$date_parution	    ="";
							  	$statut_livre 	    ="";
							  	$nom_emprunteur     ="";
							  }
							  else
							  {
							  	$id_livre			=$_POST['id'] ;
							  	$titre_livre    	 =$_POST['titre_livre']    ;
							  	$nom_auteur         =$_POST['nom_auteur'] ;
							  	$description_livre    =$_POST['description_livre']  ;
							  	$date_parution     =$_POST['date_parution']   ;
							  	$statut_livre      =$_POST['statut_livre']    ;
							  	$nom_emprunteur   =$_POST['nom_emprunteur'] ;
							  	$dateDepot       =date("Y-m-d")          ;

							  	$query="INSERT INTO his
							  			VALUES 
							  			('".$id_livre."','".$dateDepot."','".$titre_livre."','".$nom_auteur."','".$description_livre."','".$date_parution."','".$statut_livre."','".$nom_emprunteur."')
							  		   ";
							    mysqli_query($db,$query)or die(mysqli_error($db));
					?>
			  		<script type="text/javascript">
			  		 		  alert("Insertion Reussie dans la base de donnees");
			  		 </script>
			  		<?php 
			  		    }            
			  		?>
				</form>
			
		</div>
</body>
</html>