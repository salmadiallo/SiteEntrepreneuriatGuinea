<?php
    //Connexion à la base de données
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8","root","");
    } catch (PDOException $exception) {
        header("Location:404.php");
    }
    //Varible de message d'erreur et de message de succès
    $erreur = "";
    $message = "";
    //Variable tableau contenant d'extension d'image
    $extension1 = ["png","jpg","gif","jpeg"];
   

    //Si on reçoit une requête de type post
    if (isset($_POST["ajouter"])){
        $titre_photo = htmlspecialchars($_POST["titre"]);
        $lien_facebook = htmlspecialchars($_POST["lien_facebook"]);
        $id_secteur = htmlentities($_POST["id_secteur"]);
        //Vérifier si les champs ne sont pas vides
        if (!empty($_POST["titre"]) and !empty($_POST["lien_facebook"])){
            $nom_image = $_FILES["file_photo"]["name"];
            $taille_image = $_FILES["file_photo"]["size"];
            $tmp_image = $_FILES["file_photo"]["tmp_name"];

            $generer_1 = rand() . $nom_image;
            $destination = "img_e_secteur/".$generer_1;

            $ext = explode(".",$generer_1);
            $ext = end($ext);
            //Vérification de l'extension de l'image et la vidéo
            if (in_array(strtolower($ext),$extension1)){
                //Préparation de la requête selection qui savoir un élément existe déjà dans la table
                $selection = $pdo->prepare("SELECT * FROM element_secteur WHERE titre_image_elem=? OR lien_fb_img_elem=?");
                //Exécution de la requête
                $selection->execute(array($titre_photo,$lien_facebook));
                //Compteur de ligne
                $resultat = $selection->rowCount();
                //Vérifier si le résultat est supérieur à 0
                if ($resultat == 1){
                    $erreur = "<span id='erreur'>Titre ou lien existant !</span>";
                }else{//Sinon on passe à l'insertion
                    //Préparation de la requête d'insertion
                    $insertion = $pdo->prepare("INSERT INTO element_secteur(image_elem, titre_image_elem, lien_fb_img_elem, id_secteur) VALUES(?,?,?,?)");
                    //Exécution de la requête d'insertion
                    $insertion->execute(array(
                        $generer_1,
                        $titre_photo,
                        $lien_facebook,
                        $id_secteur
                    ));
                    //Déplacer l'image dans dossier relatif
                    move_uploaded_file($tmp_image,$destination);

                    $message = "<span id='succes'>Ajout effectué !</span>";//Alert de confirmation d'ajout
                }

                
            }else{ //Sinon on affiche un message d'erreur
                $erreur = "<span id='erreur'>Extension de l'image ou vidéo invalide !</span>";
            }

        }else{ //Sinon on affiche un message d'erreur
            $erreur = "<span id='erreur'>Veuillez compléter ces informations</span>";//Alert de message d'erreur
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajouter un élément du secteur</title>
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
        <h2>Nouveau Elément d'un secteur</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <?php
                if (isset($erreur)) echo $erreur
            ?>
            <?php
                if (isset($message)) echo $message
            ?>
            <label for="file_photo">Photo Elément</label>
            <input type="file" name="file_photo" id="file_photo">
            <label for="titre">Titre photo</label>
            <input type="text" name="titre" id="titre">
            <label for="lien_facebook">Lien facebook</label>
            <input type="text" name="lien_facebook" id="lien_facebook">
            <label for="id_secteur">Secteur d'activité</label>
            <?php
                $req = $pdo->query("SELECT * FROM secteur");
            ?>
            <select name="id_secteur" id="id_secteur">
                <?php
                    while($reqs = $req->fetch()):
                ?>
                <option value="<?= $reqs["id_secteur"] ?>"><?= $reqs["nom_secteur"] ?></option>
                <?php
                    endwhile;
                ?>
            </select>
            <input type="submit" value="Ajouter" id="ajouter" name="ajouter">
        </form>
    </div>

</body>
</html>
