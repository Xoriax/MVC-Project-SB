<?php
require_once 'model/VeloModel.php';

class ProduitsController
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
        include 'view/produits.php';
        include 'view/footer.php';
    }

    public function details()
    {
        $veloId = isset($_GET['velo']) ? $_GET['velo'] : null;

        if ($veloId) {
            $veloDetails = $this->veloModel->getVeloDetails($veloId);

            $otherVelos = $this->veloModel->getOtherVelos($veloId, 3);

            include 'view/header.php';
            include 'view/velo_details.php';
            include 'view/footer.php';
        } else {
            echo "Page non trouvée";
        }
    }
}
