<?php 
	  session_start();
	  if ($_SESSION['ok']!='true2') 
	{
		die('<br><br><br><br><br><center><h1>Veuillez vous authentifier<a href="./index.php"> ici !</a></h1></center>') ;
	}
	  include 'bd.php';
	  $ba=rand(1,3);
	  if ($ba==1) 
	  {
	  	$backactu = '03.jpg' ;
	  }
	  elseif ($ba==2) 
	  {
	  	$backactu = 'image1.jpg' ;
	  }
	  else
	  {
	  	$backactu = 'img9.jpg' ;
	  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue</title>
	<meta name="viewport" content="width=device-width"/>
	<link rel="icon" href="favicon.jpeg">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function add() 
			{
				newOnglet = window.open("add_emp.php","OptionAdd","width=1500,height=800,scrollbars");
			}
		function aff() 
			{
				newOnglet = window.open("Supprimer.php","OptionAff","width=1500,height=800,scrollbars");
			}
		function collectionLivre() 
			{
				newOnglet = window.open("collectionLivre.php","OptionAff","width=1500,height=800,scrollbars");
			}
		function listEmprunteur() 
			{
				newOnglet = window.open("listEmprunteur.php","OptionAff","width=1500,height=800,scrollbars");
			}
		function ajouterLivre()
			{
				newOnglet = window.open("ajouterLivre.php","OptionAdd","width=1500,height=800,scrollbars");
			}
		function ges()
			{
				newOnglet = window.open("","OptionAdd","width=1500,height=800,scrollbars");
			}
	</script>
	<style type="text/css">
	.a li 
	{
		margin-left: 45px;
	}
	.a li:hover
	{
		border-top: 3px solid orange;
	}
	.a li,ul
	{
		float: left;
		list-style-type: none;
	}
	.no:hover
	{
		text-decoration: none;
	}
	</style>
</head>
<body background="<?php echo $backactu; ?>">
	<div class="container">
	   <div class="alert alert-dark">
 			<center><i class="fas fa-user"></i>&nbsp;<span style="background-color: #FFD700;">Bienvenue</span><i style="position: absolute;top: 18px;left: 950px;" class="fas fa-sign-out-alt"></i><a class="no" style="position: absolute;top: 15px;left: 970px;" href="./index.php?logout=yes">Deconnexion</a></center>
 		</div>
 		<div class="row">
 			<div>
 				<ul class="a">
 					<li class="btn btn-danger" style="color: white;">
 						<div class="btn-group" >
  							<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
    							Gestion
  							</button>
  							<div>
  							<div class="dropdown-menu dropdown-menu-right">
  							  <button class="dropdown-item" type="button" onclick="add();">Creer un emprunteur</button>
  							  <button class="dropdown-item" type="button" onclick="aff();">Supprimer un livre</button>
  							  <button class="dropdown-item" type="button" ><a style="text-decoration: none;color: black;" href="GestionEmp.php" target="_blank">Modifier un emprunt</a></button>
  							</div>
 					    </div>
 					</li>
 					<li class="btn btn-primary" style="color: white;" onclick="ajouterLivre();">Ajouter un livre</li>
 					<li class="btn btn-primary" style="color: white;" onclick="collectionLivre();">Consulter la collection de livres</li>
 					<li class="btn btn-primary" style="color: white;" onclick="listEmprunteur();">Consulter l'historique des emprunteurs</li>
 				</ul>
 			</div>
 		</div>
 		<div>
 			 <div style="width: 72%;height: 550px;display: inline-block;background-image: url();">
 			 	<table>
 			 		<tr>
 			 			<td>
 			 				<br><br><br><br><br><br><br><br><br><br><br><br>
 			 				<!-- Button trigger modal -->



 			 			</td>
 			 		</tr>
 			 		<tr>
 			 			<td>
 			 				<br><br>
 			 				
 			 			</td>
 			 		</tr>
 			 		<tr>
 			 			<td><br>
 			 				<span style="color: red">Remarque</span><span style="color: white;"> : Vous pouvez ajouter d'autres objets pas forcement des livres.</span>
 			 			</td>
 			 		</tr>
 			 	</table>	
 			 </div>
 		</div> 		
 		

 	</div>
</body>
</html>