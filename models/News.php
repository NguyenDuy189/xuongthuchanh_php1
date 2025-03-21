<?php
class News {
    private $conn;

    public function __construct() {
        include 'Connect.php';
        $this->conn = $conn;
    }

    public function getAllNews() {
        $sql = "SELECT news.*, categories.name AS category_name 
                FROM news 
                LEFT JOIN categories ON news.category_id = categories.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getNewsById($id) {
        $sql = "SELECT * FROM news WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getNewsFromCategory($cate_id) {
        $sql = "SELECT * FROM news WHERE category_id = :category_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':category_id', $cate_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function store($title, $category_id, $description, $content, $image_name, $status) {
        $sql = "INSERT INTO news (title, category_id, description, content, image, status) 
                VALUES ('".$title."', '".$category_id."', '".$description."', '".$content."', '".$image_name."','".$status."')";
              
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return "Thêm thành công";
    }

    public function update($id, $title, $category_id, $description, $content, $image_name, $status) {
        $sql = "UPDATE news 
                SET title = '".$title."', category_id = '".$category_id."', description = '".$description."', content = '".$content."', image = '".$image_name."', status = '".$status."' 
                WHERE id =". $id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return "Cập nhật thành công";
    }

    public function delete($id) {
        $sql = "DELETE FROM news WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return "Xoá thành công";
    }
}
