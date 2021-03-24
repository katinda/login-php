<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("titre.php");
    ?>

    <?php 
    
        if(isset($_POST["prenom"]) && isset($_POST["login"])){

            function sécurisation ($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $prenom = sécurisation($_POST["prenom"]);
            $login = sécurisation ( $_POST["login"]);

           

            echo " Bonjour ".$_POST["prenom"]." !</br> ";
            echo "le mot de passe ".$_POST["login"]." est correct. " ;

        }
        else{
            echo "le prénom ou le mot de passe est incorrect !";
        }

    ?>


    <?php
        include("nav.php");
    ?>

    <?php
        include("footer.php");
    ?>


</body>
</html>