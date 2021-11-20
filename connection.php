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
    <header>
      <h1> Connexion</h1>
    </header>

    <div class= "container">
      <p id="info" >Si tu n'es pas dejà inscris c'est par ici : <a href="index.php">Inscris-toi</a></p>
      </p>
      <div id="form">
      <form method="POST" action ="connection.php">
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
    </form>
    </div>
  </div>
</body>
</html>