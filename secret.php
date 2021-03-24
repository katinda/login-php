<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- -------------------------------------- -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

include("titre.php");

?>
<?php

include("nav.php");

?>

<?php 


if (isset($_POST["prenom"]) && isset($_POST["login"])){



function securisation($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

    $prenom = securisation($_POST["prenom"]); 
    $login = securisation ($_POST["login"]); 

    if($login == "kat95" && $prenom == "katinda"){

        echo "<div class='h1 text-white'>le mot de passe est correct </div>";
        echo "<div class='h1 text-white'>Bienvenue Boss </div>";
    }
    else{
        echo "<div class='h1 text-white '> le mot de passe est incorrect</div>";
    }




}else{
    echo "<div class='h1 text-white'> rien de predéfini! </div> ";
}

?>




</body>
</html>