<?php
    //Connexion à la base de données
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8","root","");
    } catch (PDOException $excepption) {
       die("Erreur du chargement....");
    }

    //Variable de message d'erreur et message de succès
    $erreur = "";
    $alert = "";
    //Si on reçoit une requête de type post
    if (isset($_POST["ajouter"])){
        //Récupérer les informations saisies via la méthode post
        $titre = htmlspecialchars($_POST["titre"]);
        $lien = htmlspecialchars($_POST["lien"]);
        //Vérifier si les champs ne sont pas vides
        if (!empty($titre) and !empty($lien)){
                //Récupérer les informations de la video par la méthode post
                $nom_vid = $_FILES["video"]["name"]; //Nom de la vidéo
                $taille_vid = $_FILES["video"]["size"]; //Taille de la vidéo
                $type_video = $_FILES["video"]["type"]; //Type de la vidéo
                $tmp_vid = $_FILES["video"]["tmp_name"]; //Nom temporaire de la vidéo

                $destination = "video_conseil/".$nom_vid; //Chemin de stockage de la vidéo
              
                //Préparation de la requête d'insertion
                $insertion = $pdo->prepare("INSERT INTO conseil(video,titre,lien,type) VALUES(?,?,?,?)");
                //Exécution de la requête d'insertion
                $insertion->execute(array($_FILES["video"]["name"],$titre,$lien,$_FILES["video"]["type"]));
                //Déplacer la vidéo vers un répertoire relatif
                move_uploaded_file($_FILES["video"]["tmp_name"],$destination);
                $alert = "<span id='success'>Insertion effectuée !</span>";
        }else{//Sinon affiche un message d'erreur
            $erreur = "<span id='erreur'>Veuillez compléter ces informations</span>";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajouter un conseil</title>
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
    #success{
        color : green;
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
        <h2>Nouveau conseil</h2>
        <form action="<?= $_SERVER["PHP_SELF"]  ?>" method="POST" enctype="multipart/form-data">
            <?php if (isset($erreur)) echo $erreur; ?>
            <?php if (isset($alert)) echo $alert; ?>
            <label for="file_video">Vidéo conseil</label>
            <input type="file" name="video" id="file_video">
            <label for="titre">Titre  vidéo</label>
            <input type="text" name="titre" id="titre">
            <label for="lien">Lien vidéo</label>
            <input type="text" name="lien" id="lien">
            <input type="submit" value="Ajouter"id="id" name="ajouter">
        </form>
    </div>

</body>
</html>
