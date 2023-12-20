<?php
require_once 'model/VeloModel.php';

class HomeController
{
    private $veloModel;

    public function __construct()
    {
        $this->veloModel = new VeloModel();
    }

    public function index()
    {
        $latestVelo = $this->veloModel->getLatestVelo();

        include 'view/header.php';
        include 'view/accueil.php';
        include 'view/footer.php';
    }
}