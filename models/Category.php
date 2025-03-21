<?php
class Category {
    private $conn;
    public function __construct() {
        include 'Connect.php';
        $this->conn = $conn;
    }

    function getAllCategory() {
        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    function getById($id) {
        $sql = "SELECT * FROM categories WHERE id = ".$id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function store($name) {
        $sql = "INSERT INTO categories (name) 
                VALUES ('".$name."')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return "Thêm thành công";
    }

    public function update($id, $name) {
        $sql = "UPDATE categories SET name = '".$name."' WHERE id =".$id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return "Cập nhật thành công";
    }
    
    

    public function delete($id) {
        $sql = "DELETE FROM categories WHERE id =". $id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return "Xoá thành công";
    }

}