<?php
class DetailController {
    public function index() {
        require_once 'models/News.php';
        require_once 'models/Category.php';
        $category_model = new Category();
        $all_category = $category_model->getAllCategory();
        $model_news = new News();
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $arr_news = $model_news->getNewsById($_GET['id']);
        include 'views/layout/header.php';
        include 'views/news/detail.php';
        include 'views/layout/footer.php';
    }
}