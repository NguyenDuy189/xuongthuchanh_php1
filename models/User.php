<?php
class User {
    private $conn;
    public function __construct() {
        include 'Connect.php';
        $this->conn = $conn;
    }

    public function checkUser($username, $password) {
        $sql = "SELECT * FROM users WHERE username= '".$username."' AND password = '".$password."'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
}