<?php
require('src/connect.php');
// on va verifie si nos variables existent et si il bien rempli(!empty)
if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])
 && !empty($_POST['password_confirm'])){
     //echo $_['pseudo'];

     // VARIABLE
     $pseudo       = $_POST['pseudo'];
     $email        = $_POST['email'];
     $password     = $_POST['password'];
     $pass_confirm = $_POST['password_confirm'];
 
     // TEST SI PASSWORD = PASSWORD CONFIRM
     if ($password != $pass_confirm) {
         header('Location: index.php?error=1&pass=1');//systeme d'erreur. 
         //On va rajouter une condition ds notre html
         exit();
     }
 
		// TEST SI EMAIL UTILISE
    //on utilise prepare pour securise notre formulaire et eviter l'injection
		$req = $db->prepare("SELECT count(*) as numberEmail FROM users WHERE email = ?");
		$req->execute(array($email));
    //on va utiliser une boucle pour verifier avec fetch qui va verifier 
    //un element par un element à la fois
 		while($email_verification = $req->fetch()){
			if($email_verification['numberEmail'] != 0) {
				header('location: index.php?error=1&email=1');
				exit();
 			}
		}
    // encryptage HASH le sha1 va hasher le mdp et le time 
    //va rajouter une suite de nombre egalement
 		$secret = sha1($email).time();
		$secret = sha1($secret).time().time();

    // CRYPTAGE DU PASSWORD on va rajouter notre grain pour la secu.
    //aq1 suivi de l'encyptage associe à 1254 et 25 a la fin pour hash.
 		$password = "aq1".sha1($password."1254")."25";
 
    // ENVOI DE LA REQUETE
 		$req = $db->prepare("INSERT INTO users(pseudo, email, password, secret) VALUES(?,?,?,?)");
		$value = $req->execute(array($pseudo, $email, $password, $secret));
			
		header('location: ../?success=1');
		exit();
 };

 
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
    <?php
		 //si une erreur est detectée
			if(isset($_GET['error'])){
		 
				if(isset($_GET['pass'])){
					echo '<p id="error">Les mots de passe ne correspondent pas.</p>';
				}
				else if(isset($_GET['email'])){
					echo '<p id="error">Cette adresse email est déjà utilisée.</p>';
				}
			}
			else if(isset($_GET['success'])){
				echo '<p id="success">Inscription prise correctement en compte.</p>';
			}
		 
		?>
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