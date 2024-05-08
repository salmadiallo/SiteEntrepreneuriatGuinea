<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajouter une idole</title>
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
        <h2>Nouvelle Idole</h2>
        <form action="#" method="post">
            <span id="erreur">Veuillez compléter ces informations</span>
            <label for="nom_idole">Nom Idole</label>
            <input type="text" name="nom_idole" id="nom_idole">
            <label for="prenom_idole">Prénom Idole</label>
            <input type="text" name="prenom_idole" id="prenom_idole">
            <label for="text_parcours">Texte Parcours</label>
            <textarea name="text_parcours" id="text_parcours" cols="30" rows="10"></textarea>
            <label for="image_idole">Image Idole</label>
            <input type="file" name="image_idole" id="image_idole">
            <label for="video_idole">Vidéo Idole</label>
            <input type="file" name="video_idole" id="video_idole">
            <label for="titre_video">Titre Vidéo</label>
            <input type="text" name="titre_video" id="titre_video">
           
           
            <input type="submit" value="Ajouter"id="id">
        </form>
    </div>

</body>
</html>
