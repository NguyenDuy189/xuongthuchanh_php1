<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="banner">
        <img src="<?= BASE_IMAGE ?>banner.jpg" alt="">
    </div>
    <div class="nav">
        <nav>
            <a href="index.php"><img class="logo" src="<?= BASE_IMAGE ?>logo.png" alt=""></a>
            <ul>
                <li><a href="index.php">Trang chủ</a></li> |
                <?php foreach($all_category as $cate) { ?>
                <li><a href="index.php?route=category&id=<?= $cate['id'] ?>"><?= $cate['name'] ?> </a></li> |
                <?php } ?>
                <li><a href="index.php?route=login">Đăng nhập</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>