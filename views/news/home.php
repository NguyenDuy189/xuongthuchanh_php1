<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="assets/css.style.css?v1.0">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach ($arr_news as $row) { 
                $link_detail = 'index.php?route=detail&id='.$row['id'];
            ?>
                <div class="news">
                    <a href="<?= $link_detail ?>"><img src="<?= BASE_IMAGE . $row['image'] ?>" alt=""></a>
                    <div class="text">
                        <h3><a href="<?= $link_detail ?>"><?= $row['title'] ?></a></h3>
                        <p><?= $row['description'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>