<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa bài viết</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= isset($current_category['id']) ? $current_category['id'] : '' ?>">

            <label for="name">Tên danh mục</label>
            <input type="text" name="name" id="name" value="<?= isset($current_category['name']) ? $current_category['name'] : '' ?>" required>
            <br>

            <input class="btn-submit" type="submit" name="submit" value="Cập nhật">
        </form>
    </div>
</body>
</html>
