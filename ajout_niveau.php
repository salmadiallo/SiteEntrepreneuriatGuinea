<?php
    //Connexion à la base de données
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8","root","");
    } catch (PDOException $exception) {
        header("Location:404.php");
    }
    //Variable de message d'erreur et message de succès
    $erreur = "";
    $message = "";
    //Si on reçoit une requête de type POST
    if (isset($_POST["ajouter"])){
        $niveau = htmlspecialchars($_POST["niveau"]);
        //Vérifier si le champ n'est pas vide
        if (!empty($niveau)){ 
                //Préparation de la requête qui vérifier si un niveau existe déjà dans la base de données
                $requette = $pdo->prepare("SELECT niveau FROM niveau WHERE niveau=?");
                //Exécution de la requête 
                $requette->execute([$niveau]);
                //Vérifier de l'existence du niveau
                if ($requette->rowCount() == 1){
                        $erreur = "<span id='erreur'>Ce niveau existe déjà</span>";
                }else{//Sinon on passe à la requête d'insertion
                        //Préparation de la requête d'insertion
                        $insertion = $pdo->prepare("INSERT INTO niveau(niveau) VALUES(?)");
                        //Exécution de la requête d'insertion
                        $insertion->execute([$niveau]);
                        $message = "<span id='succes'>Ajout effectué !</span>";
                }
        }else{ //Sinon on affiche un message d'erreur
            $erreur = "<span id='erreur'>Veuillez compléter ces informations</span>";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajouter un niveau d'étude</title>
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
        color: green;
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
    form textarea{
        resize: none;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
    }
</style>
</head>
<body>

    <div id="login-form">
        <h2>Niveau d'étude</h2>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
            <?php if (isset($erreur)) echo $erreur; ?>
            <?php if (isset($message)) echo $message; ?>
            <label for="niveau">Niveau</label>
            <input type="text" name="niveau" id="niveau">
            <input type="submit" value="Ajouter"id="id" name="ajouter">
        </form>
    </div>

</body>
</html>
