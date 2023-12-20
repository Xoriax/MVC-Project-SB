<?php

class CommanderController
{
    private $veloModel;

    public function __construct()
    {
        $this->veloModel = new VeloModel();
    }

    public function index()
    {
        $allVelos = $this->veloModel->getAllVelos();

        include 'view/header.php';
        include 'view/commander.php';
        include 'view/footer.php';
    }

    public function processCommande()
    {

        include 'view/header.php';
        include 'view/process_commande.php';
        include 'view/footer.php';
    }

    public function cancel()
    {
        header('Location: ?page=velos');
        exit();
    }
}