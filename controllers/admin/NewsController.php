<?php
class NewsController {
    private $news_model;
    private $category_model;

    public function __construct() {
        require_once 'models/News.php';
        require_once 'models/Category.php';
        $this->news_model = new News();
        $this->category_model = new Category();
    }

    public function listing() {
        $arr_news = $this->news_model->getAllNews();
        include 'views/admin/header.php';
        include 'views/admin/news_listing.php';
        include 'views/admin/footer.php';
    }

    public function add() {
        $all_category = $this->category_model->getAllCategory();
    
        // Xử lý form
        if (isset($_POST['submit'])) {
            $title = isset($_POST['title']) ? $_POST['title'] : '';
            $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : 0;
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $content = isset($_POST['content']) ? $_POST['content'] : '';
            $image = isset($_FILES['image']) ? $_FILES['image'] : null;
            $status = isset($_POST['status']) ? (int)$_POST['status'] : 0;
        
            $image_name = '';
            if ($image && $image['error'] == 0) {
                $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                $image_info = getimagesize($image['tmp_name']);
                if ($image_info && in_array($image_info['mime'], $allowed_types)) {
                    $image_name = time() . "_" . basename($image['name']);
                    move_uploaded_file($image['tmp_name'], BASE_IMAGE . $image_name);
                } else {
                    echo "File tải lên không phải là ảnh hợp lệ (chỉ hỗ trợ jpg, png, gif, webp).";
                }
            }
        
            $message = $this->news_model->store($title, $category_id, $description, $content, $image_name, $status);
            echo $message;
            header("Location: index.php?route=admin/news/listing");
            exit();
        }
        
    
        include 'views/admin/header.php';
        include 'views/admin/news_add.php';
        include 'views/admin/footer.php';
    }

    public function edit() {
        $id = isset($_GET['id']) ? $_GET['id'] : 0;

        if ($id > 0) {
            $current_new = $this->news_model->getNewsById($id);
            $all_category = $this->category_model->getAllCategory();

            if (!$current_new) {
                echo "Bài viết không tồn tại.";
                return;
            }

            if (isset($_POST['submit'])) {
                $title = isset($_POST['title']) ? $_POST['title'] : '';
                $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : 0;
                $description = isset($_POST['description']) ? $_POST['description'] : '';
                $content = isset($_POST['content']) ? $_POST['content'] : '';
                $image = isset($_FILES['image']) ? $_FILES['image'] : null;
                $status = isset($_POST['status']) ? $_POST['status'] : 0;
                $image_name = $current_new['image'];

                if ($image != null && $image['error'] == 0) {
                    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                    $image_info = getimagesize($image['tmp_name']);
                    
                    if ($image_info !== false && in_array($image_info['mime'], $allowed_types)) {
                        $image_name = time() . "_" . basename($image['name']);
                        move_uploaded_file($image['tmp_name'], BASE_IMAGE . $image_name);
                    } else {
                        echo "File tải lên không phải là ảnh hợp lệ (chỉ hỗ trợ jpg, png, gif, webp).";
                    }
                }
                
                $this->news_model->update($id, $title, $category_id, $description, $content, $image_name, $status);
                header("Location: index.php?route=admin/news/listing");
                exit();
            }

            include 'views/admin/header.php';
            include 'views/admin/news_edit.php';
            include 'views/admin/footer.php';
        } else {
            echo "ID không hợp lệ.";
        }
    }

    public function delete() {
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        
        if ($id > 0) {
            $this->news_model->delete($id);
            header("Location: index.php?route=admin/news/listing");
            exit();
        } else {
            echo "ID không hợp lệ.";
        }
    }

    // Xử lý danh mục
    public function listing_category() {
        $arr_category = $this->category_model->getAllCategory();
        include 'views/admin/header.php';
        include 'views/admin/category_listing.php';
        include 'views/admin/footer.php';
    }

    public function add_category() {
        if (isset($_POST['submit'])) {
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $this->category_model->store($name);
            header("Location: index.php?route=admin/category/listing");
            exit();
        }
        include 'views/admin/header.php';
        include 'views/admin/category_add.php';
        include 'views/admin/footer.php';
    }

    public function edit_category() {
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($id > 0) {
            $current_category = $this->category_model->getById($id);
            if (!$current_category) {
                echo "Danh mục không tồn tại.";
                return;
            }
            if (isset($_POST['submit'])) {
                $name = isset($_POST['name']) ? $_POST['name'] : '';
                $this->category_model->update($id, $name);
                header("Location: index.php?route=admin/category/listing");
                exit();
            }
            include 'views/admin/header.php';
            include 'views/admin/category_edit.php';
            include 'views/admin/footer.php';
        } else {
            echo "ID không hợp lệ.";
        }
    }

    public function delete_category() {
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        
        if ($id > 0) {
            $this->category_model->delete($id);
            header("Location: index.php?route=admin/category/listing");
            exit();
        } else {
            echo "ID không hợp lệ.";
        }
    }
}