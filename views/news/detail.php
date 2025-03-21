<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1><?= $arr_news['title'] ?></h1>
        <img class="img-detail" src="<?= BASE_IMAGE . $arr_news['image'] ?>" alt="">
        <h3><?= $arr_news['description'] ?></h3>
        <p><?= $arr_news['content'] ?></p>
    </div>
</body>
</html>