<?php  
	 include 'bd.php';

	 $titre_livre[0]    = "";
	 $nom_emprunteur[0] = "";	 
	 $ID[0]             = "";	 
	 $inc               = 0 ;

	 $query="SELECT Titre,Emprunteur,ID FROM his
	 		";
	 $result=mysqli_query($db,$query);

	 while ($row = mysqli_fetch_row($result)) 
	 {
	 	foreach ($row as $key => $value) 
	 	{
	 		if ($key==0) 
	 		{
	 			$titre_livre[$inc] = $value ;
	 		}
	 		if ($key==1) 
	 		{
	 			$nom_emprunteur[$inc] = $value ;
	 		}
	 		if ($key==2) 
	 		{
	 			$ID[$inc] = $value ;
	 		}
	 	}
	 	$inc++;
	 }
	 $type_row = "";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Interface de gestion des emprunts</title>
	<meta charset="utf-8" http-equiv="refresh" content="60">
	<link rel="icon" href="favicon.jpeg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
</head>
<body background="back16.jpg" style="color: white;">
	<br><br><br>
		<div class="container" syu>
			<?php  
				for ($i=0; $i <count($titre_livre) ; $i++) 
				{ 
					if ($i%2) 
					{
						$type_row = "alert alert-dark";
					}
					else
					{
						$type_row = "alert alert-primary";	
					}
			?>
			<table>
				<tr>
					<td width="550px">
						<div class="<?php echo $type_row; ?>">
							<?php echo $titre_livre[$i]." : ".$nom_emprunteur[$i]; ?>
						</div>
					</td>
					<td>
						<div class="<?php echo $type_row; ?>">
							<a style="margin-left: 350px;" href="supprimer.php?lo=<?php echo $titre_livre[$i] ;?>&amp;des=<?php echo $nom_emprunteur[$i] ;?>">[Supprimer]</a>
							<a href="modifier.php?lo=<?php echo $titre_livre[$i] ;?>&amp;des=<?php echo $nom_emprunteur[$i] ;?>&amp;id=<?php echo $ID[$i] ;?>">[Modifier]</a>
						</div>
					</td>
				</tr>
			<?php
				}
			?>
			</table>
		</div>
</body>
</html>