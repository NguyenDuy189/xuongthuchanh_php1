<?php
function checklogin() {
    $logged = $_SESSION['logged'] ?? false;
    if($logged != true) {
        header('Location: index.php?route=login');
        exit();
    }
}