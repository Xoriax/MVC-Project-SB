<?php

require_once 'Database.php';

class CommandeModel
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function addCommande($veloId, $nom, $prenom, $email, $message)
    {
        $query = "INSERT INTO commandes (velo_id, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$veloId, $nom, $prenom, $email, $message]);
    }
}
