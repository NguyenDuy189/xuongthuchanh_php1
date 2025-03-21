<?php
class CategoryController {
    public function index() {
        require_once 'models/News.php';
        require_once 'models/Category.php';
        $category_model = new Category();
        $all_category = $category_model->getAllCategory();
        $model_news = new News();
        $cate_id = $_GET['id'] ?? 0; // Lấy id danh mục, nếu không tồn tại thì gắn 0
        $cate_current = $category_model->getById($cate_id);
        $arr_news = $model_news->getNewsFromCategory($cate_id);
        include 'views/layout/header.php';
        include 'views/news/category.php';
        include 'views/layout/footer.php';
    }
}