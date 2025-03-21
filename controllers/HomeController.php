<?php
class HomeController {
    public function index() {
        require_once 'models/News.php';
        require_once 'models/Category.php';
        $category_model = new Category();
        $all_category = $category_model->getAllCategory();
        $model_news = new News();
        $arr_news = $model_news->getAllNews();
        include 'views/layout/header.php';
        include 'views/news/home.php';
        include 'views/layout/footer.php';
    }
}