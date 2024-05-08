<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajouter un membre de l'équipe</title>
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
</style>
</head>
<body>

    <div id="login-form">
        <h2>Nouveau membre</h2>
        <form action="#" method="post">
            <span id="erreur">Veuillez compléter ces informations</span>
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" required>
            <label for="prenom">Prenom *</label>
            <input type="text" id="prenom" name="prenom" required>
            <label for="niveau">Niveau</label>
            <select name="niveau" id="niveau">
                <option value="licence1">Licence1</option>
            </select>
            <label for="passion">Passion *</label>
            <input type="text" id="passion" name="passion" required>
            <label for="email">Adresse E-mail *</label>
            <input type="email" name="email" id="email">
            <label for="photo_membre">Photo*</label>
            <input type="file" name="photo_membre" id="photo_membre">
            <div>
                <label for="lien_face">Lien facebook</label>
                <input type="text" name="lien_face" id="lien_face">
                <label for="lien_Instagram">Lien Instagram</label>
                <input type="text" name="lien_Instagram" id="lien_Instagram">
            </div>
            <input type="submit" value="Ajouter"id="id">
        </form>
    </div>

</body>
</html>
