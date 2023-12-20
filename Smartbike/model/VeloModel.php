<?php
require_once 'Database.php';

class VeloModel
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getLatestVelo()
    {
        $query = "SELECT * FROM velos ORDER BY id DESC LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllVelos()
    {
        $query = "SELECT * FROM velos";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getVeloDetails($veloId)
    {
        $query = "SELECT * FROM velos WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $veloId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getOtherVelos($veloId, $limit)
    {
        $query = "SELECT * FROM velos WHERE id != :id ORDER BY RAND() LIMIT :limit";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $veloId, PDO::PARAM_INT);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}