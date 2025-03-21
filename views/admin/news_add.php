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
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" id="title" required>
            <br>
            <label for="image">Ảnh</label>
            <input type="file" name="image" id="image" required style="margin: 8px 0;">
            <br>
            <label for="category">Danh mục:</label>
            <select name="category_id" id="category">
                <option value="">Chọn danh mục</option>
                <?php foreach ($all_category as $cate) { ?>
                    <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                <?php } ?>
            </select>
            <br>
            <label for="description">Mô tả ngắn</label>
            <input type="text" name="description" id="description" required>
            <br>
            <label for="content">Nội dung</label>
            <input type="text" name="content" id="content" required>
            <br>
            <input class="btn-submit" type="submit" name="submit" value="Thêm">
        </form>
    </div>
</body>
</html>