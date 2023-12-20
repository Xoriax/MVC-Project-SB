<?php
$veloId = $_POST['velo'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];

$commandeModel = new CommandeModel();
$commandeModel->addCommande($veloId, $nom, $prenom, $email, $message);
?>

<div id="content-process-commande">
    <h2>Commande traitée avec succès !</h2>
    <p>Merci de votre commande. Vous serez contacté sous peu.</p>
    <a href="?page=velos">Retour à la liste des vélos</a>
</div>