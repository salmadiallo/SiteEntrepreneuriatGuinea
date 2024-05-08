<?php
	//Démarrage de la session
	session_start();
	//Connexion à la base de données
	try {
	    $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8","root","");
	} catch (PDOException $excepption) {
	   die("Erreur du chargement....");
	}
?>


<?php	
	$id_aut = $_SESSION["id_unique"];
	//Préparation de la requête de selection
	$aff_message = $pdo->prepare("SELECT * FROM message WHERE id_auteur=? AND id_destintaire=? OR id_auteur=? AND id_destintaire=?");
	//Exécution de la requête de selection
	$aff_message->execute([
		$_SESSION["id_unique"],
		$_SESSION["destintaire"],
		$_SESSION["destintaire"],
		$_SESSION["id_unique"]
	]);
	//Boucle de parcour de données
	while($aff_messages = $aff_message->fetch()):
		//Vérifier si le messade reçu est celui de l'utilisateur de la session
		if ($aff_messages["id_destintaire"] == $_SESSION["id_unique"]):
?>
			<div class="chat-message-right pb-4">
				<div>
					<div class="text-muted small text-nowrap mt-2"><?= $aff_messages["date_envoi"] ?></div>
				</div>
				<div class="flex-shrink-1 bg-warning rounded py-2 px-3 mr-3">
				<div class="font-weight-bold mb-1">Votre destintaire</div>
					<?= $aff_messages["contenu"] ?>
				</div>
			</div>
		<?php
		elseif ($aff_messages["id_destintaire"] == $_SESSION["destintaire"]):
		?>

			<div class="chat-message-left pb-4">
				<div>
					<div class="text-muted small text-nowrap mt-2"><?= $aff_messages["date_envoi"] ?></div>
				</div>
				<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
					<div class="font-weight-bold mb-1">Vous</div>
					<?= $aff_messages["contenu"] ?>
				</div>
			</div>
<?php
		endif;		
	endwhile;
	
?>
