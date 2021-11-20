<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Connexion  </title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <h1> Connexion</h1>
   <form method="POST" action ="connection.php"></form>
   <p>si tu n'es pas dejà inscris c'est par ici :
     <br>
       <a href="index.php">
      Inscris-toi :)
    </a>
   </p>
  <table>
    <tr>
      <td>Email</td>
			<td><input type="email" name="email" placeholder="Ex : example@google.com" required></td>
		</tr>
		<tr>
			<td>Mot de passe</td>
			<td><input type="password" name="password" placeholder="Ex : ********" required ></td>
		</tr>

	</table>
				<div id="button">
					<button type='submit'>Inscription</button>
        </div>
    </tr>
  </table>
</body>
</html>