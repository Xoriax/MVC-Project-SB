<?php

require_once 'controller/HomeController.php';
require_once 'controller/ProduitsController.php';
require_once 'controller/CommanderController.php';
require_once 'controller/ContactController.php';
require_once 'model/VeloModel.php';
require_once 'model/CommandeModel.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch ($page) {
    case 'accueil':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'velos':
        $controller = new ProduitsController();
        $controller->index();
        break;
    case 'produit':
        $controller = new ProduitsController();
        $controller->details();
        break;

    case 'commander':
        $controller = new CommanderController();
        $controller->index();
        break;
    case 'process_commande':
        $controller = new CommanderController();
        $controller->processCommande();
        break;
    case 'cancel_commande':
        $controller = new CommanderController();
        $controller->cancel();
        break;
    case 'contact':
        $controller = new ContactController();
        $controller->index();
        break;
    case 'process_contact':
        $controller = new ContactController();
        $controller->processContact();
        break;
    case 'erreur404':
        include 'view/header.php';
        include 'view/erreur404.php';
        include 'view/footer.php';
        break;
    default:
        include 'view/header.php';
        include 'view/erreur404.php';
        include 'view/footer.php';
        break;
}
?>