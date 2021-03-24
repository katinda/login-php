<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="formulaire">

<p class="text-center">
    Veuillez taper votre prénom :<br />
    Veuillez taper votre mot de passe :
</p>

<form class="formulaireBis" action="secret.php" method="post">
<p>
 <label for=""> prenom : <input type="text" name="prenom" /></label><br/><br/> 
 <label for="">mot de passe : <input type="text" name="login" /></label> 
    <input type="submit" value="Valider" />
</p>
</form>

</div>
</body>
</html>