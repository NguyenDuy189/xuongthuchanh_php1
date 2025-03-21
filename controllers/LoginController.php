<?php
class LoginController {
    public function index() {
        require_once 'models/User.php';
        if(isset($_POST['submit'])) {
            // Xử lý form
            $username = $_POST['username'];
            $password = $_POST['password'];
            if($username != '' && $password != '') {
                $user = new User();
                $check = $user->checkUser($username, $password);
                if($check != NULL) {
                    $_SESSION['logged'] = true;
                    $_SESSION['username'] = $username;
                    header('Location: index.php?route=admin/news/listing');
                } else {
                    echo "Tên đăng nhập hoặc mật khẩu không đúng";
                }
            }
        }
        include 'views/login.php';
    }

    public function logout() {
        unset($_SESSION['logged']);
        unset($_SESSION['username']);
        header('Location: index.php?route=login');
    }
}