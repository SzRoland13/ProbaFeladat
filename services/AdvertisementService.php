<?php

namespace services;

use models\Advertisement;

require_once 'Database.php';
require_once 'models/Advertisement.php';

class AdvertisementService {
    private $conn;
    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAdvertisements() {
        $stmt = $this->conn->prepare(
            "SELECT * FROM `advertisements`");
       if ($stmt) {
           $stmt->execute();
           $result = $stmt->get_result();
           $advertisements = [];
           while ($row = $result->fetch_assoc()) {
            $advertisements[] = new Advertisement($row["id"], $row["userid"], $row["title"]);
           }
           return $advertisements;
       } else {
           echo "Error preparing statement: " . $this->conn->error;
           return null;
       }
    }
}