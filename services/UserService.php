<?php

namespace services;

use models\User;
use services\Database;

require_once 'Database.php';
require_once 'models/User.php';

class UserService {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAllUsers() {
        $stmt = $this->conn->prepare(
            "SELECT * FROM `users`");

            if ($stmt) {
                $stmt->execute();
                $result = $stmt->get_result();
                $users = [];
                while ($row = $result->fetch_assoc()) {
                    $users[] = new User($row["id"], $row["name"]);
                }
                return $users;
            } else {
                echo "Error preparing statement: " . $this->conn->error;
                return null;
            }
    }
}