<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Notre petit formulaire d'inscrition </title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <header>
    <h1> Inscris toi </h1>
  </header>
  <div class ="container">
     <p id="info"> Tu es de jà inscris c'est par ici :<a href="connection.php">Connectes-toi</a>
     <br>
      Bienvenue ce petit exemple de formulaire te serviras de bases pour le reste <br>
       de ta carrière de developpeur </p>
    <div id="form">
    <form method="POST" action ="index.php"> 
      <table>
        <tr>
          <td>Pseudo</td>
			    <td><input type="text" name="pseudo" placeholder="Ex : Ophélie" required></td>
			  </tr>
        <tr> 
          <td>Email</td>
			    <td><input type="email" name="email" placeholder="Ex : example@google.com" required></td>
		    </tr>
		    <tr>
		      <td>Mot de passe</td>
	        <td><input type="password" name="password" placeholder="Ex : ********" required ></td>
		    </tr>
          <td>Retaper mot de passe</td>
			    <td><input type="password" name="password_confirm" placeholder="Ex : ********" required></td>
		    </tr>
	    </table>
		  <div id="button">
			<button type='submit'>Inscription</button>
      </div>
    </form>
    </div>
  </div>
</body>
</html>