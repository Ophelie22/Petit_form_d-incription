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
  
    <h1> Inscris toi </h1>
    <br>
    Pour en connaitre plus si tu es de jà inscris c'est par ici :
     <br>
       <a href="connection.php">
      Connectes-toi :)
    </a>
      <p> 
  Bienvenue ce petit exemple de formulaire te serviras de bases pour le reste de ta carrière 
  de developpeur </p>
  <form method="POST" action ="index.php"></form>
  <table>
     <td>Pseudo</td>
						<td><input type="text" name="pseudo" placeholder="Ex : Ophélie" required></td>
					</tr>
					<tr>
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
    </tr>
  </table>









  </section>
</body>
</html>