<?php 
      session_start();
      if (isset($_GET['logout'])) 
      {
        unset($_SESSION['ok']) ;
      }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Plateforme Gestion</title>
  <meta name="viewport" content="width=device-width"/> 
  <link rel="icon" href="favicon.jpeg"> 
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 </head>
 <body background="11.png">
 		<!--<div class="container-fluid">
		 <div class="btn-group">
  		   <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Dropright
  		   </button>
  			<div class="dropdown-menu">
    			<a href="#" class="dropdown-item">Yes , it works</a>
  			</div>
		 </div>
 		</div>-->
 		<div class="container-fluid" style="height: 1400px;background-image: url(./time3.jpeg);background-repeat: no-repeat;color: #FFD700;">
 			  <br><br>
 			  <h3>Bienvenue sur la plateforme de Gestion en temps r&eacute;el et portative <br> de toute votre collection personnelle  de livres.</h3><br><br><br><br><br><br><br><br><br><br><br><br><br>
 			  <h4>Nous vous proposons les services suivants avec efficacit&eacute; :</h4>
 			  <br><br>
 			  <ul class="list-group list-group-horizontal-lg" style="border-color: #FFD700;">
 			  		<li class="list-group-item" style="background-color: black;border-color: #FFD700;"><h4>visualisation de votre collection</h4></li>
 			  		<li class="list-group-item" style="background-color: black;border-color:  #FFD700;"><h4>Suivi des prets</h4></li>
 			  		<li class="list-group-item" style="background-color: black;border-color:  #FFD700;margin-right: 50px;"><h4>Centralisation des donnees</h4></li>
 			  </ul>
 			  <table style="margin-top: 220px;">
 			  	      <tr>
 			  	      	<td> <img src="time1.jpg"></td>
 			  	      	<td> <img src="time2.jpg"></td>
 			  	      </tr>
 			  </table>	  
 		</div>
 		<div class="container alert alert-dark" style="height:1080px;background-image: url(./time1.jpg); " >
 			  <p>
 			  	  <h1 style="color: #FFD700">Gestion Bibliotheque</h1>
 			  	  <br><br>
 			  	  <h4 style="color: #FFD700"><b>Veuillez vous connecter avec votre identifiant et mot de passe</b></h4>
 			  </p>
 			  <br>
 			  <form class="form" action="connection.php" method="post">
 			  		<table>
 			  			<tr>
 			  				<td width="250px"><label for="Login"><h4 style="color: #FFD700">Login</h4></label></td>
 			  				<td><input type="text" name="login" class="form-control" placeholder="Example : nom.prenom" required=""></td>
 			  			</tr>
 			  			<tr>
 			  				<td><br><br><label for="mdp"><h4 style="color: #FFD700">Mot de Passe</h4></label></td>
 			  				<td><br><br><input type="password" name="passwd" class="form-control" required=""></td>
 			  			</tr>
 			  			<tr>
 			  				<td><br><br><button type="submit" class="btn btn-success">Valider</button></td>
 			  			</tr>
 			  		</table>
 			  </form>
 		</div>
 		<div class="container-fluid alert alert-dark" style="height: 100px;background-color: black;">
 				<h2 style="color: #FFD700;"><center>@copyright</center></h2>
 		</div>
 </body>
 </html>