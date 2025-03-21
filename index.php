<?php
session_start();
require_once 'controllers/HomeController.php';
require_once 'controllers/DetailController.php';
require_once 'controllers/CategoryController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/admin/NewsController.php';
include 'config.php';
include 'function.php';

$home = new HomeController();
$detail = new DetailController();
$cate = new CategoryController();
$login = new LoginController();
$news = new NewsController();
$obj = new NewsController();

$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch($route) {
    case 'home':
        $home->index();
        break;
    case 'detail':
        $detail->index();
        break;
    case 'category':
        $cate->index();
        break;
    case 'login':
        $login->index();
        break;
    case 'logout':
        $login->logout();
        break;
    case 'admin/news/listing':
        checklogin();
        $news->listing();
        break;
    case 'admin/news/add':
        checklogin();
        $news->add();
        break;
    case 'admin/news/edit':
        checklogin();
        $news->edit();
        break;
    case 'admin/news/delete':
        checklogin();
        $news->delete();
        break;
    case 'admin/category/listing':
        checklogin();
        $obj->listing_category();
        break;
    case 'admin/category/add':
        checklogin();
        $obj->add_category();
        break;
    case 'admin/category/edit':
        checklogin();
        $obj->edit_category();
        break;
    case 'admin/category/delete':
        checklogin();
        $obj->delete_category();
        break;
    default:
        $home->index();
        break;
}