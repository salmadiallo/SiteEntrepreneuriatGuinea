<?php
    //Connexion à la base de données
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8","root","");
    } catch (PDOException $execption) {
        header("Location:404.php");
    }
    //Variable de message d'erreur et message de succès
    $erreur = "";
    $message = "";

    //Si on reçoit une requête de type POST
    if (isset($_POST["ajouter"])){
        $secteur = htmlspecialchars($_POST["nom_secteur"]);
        //Vérifier si le champ nom secteur n'est pas vide
        if (!empty($_POST["nom_secteur"])){
            $requette = $pdo->prepare("INSERT INTO secteur(nom_secteur) VALUES(?)");
            $requette -> execute(array($secteur));
            $message = "<span id='succes'>Ajout effectué !</span>";//Alert de confirmation d'ajout
        }else{ //Sinon on affiche un messsage d'erreur
            $erreur = "<span id='erreur'>Veuillez compléter ces informations</span>";//Alert de message d'erreur
        }

    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajouter un secteur d'activité</title>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%; 
        height: 100vh;
        font-family: Arial, sans-serif;
    }
    #erreur{
        color: red;
    }
    #succes{
        color : green;
        font-weight : bold;
    }
    #login-form {
        width: 400px;
        margin: 0 auto;
        border: 2px solid #ccc;
        padding: 20px;
        border-radius: 10px;
    }
    h2 {
        text-align: center;
    }
    label {
        display: block;
        margin-bottom: 10px;
    }
    input[type="text"],
    input[type="password"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #4c82af;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    #id{
        background-color: #4c82af;
    }
    #id:hover{
        background-color: #3368da;
    }
    input[type="submit"]:hover {
        background-color: #3368da;
    }
</style>
</head>
<body>

    <div id="login-form">
        <h2>Nouveau secteur</h2>
        <form action="#" method="post">
            <?php
                if (isset($erreur)) echo $erreur
            ?>
            <?php
                if (isset($message)) echo $message
            ?>
            <label for="nom_secteur">Nom secteur</label>
            <input type="text" id="nom_secteur" name="nom_secteur">
            <input type="submit" value="Ajouter" id="Ajouter" name="ajouter">
        </form>
    </div>

</body>
</html>
