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
            <input type="hidden" name="id" value="<?= isset($current_new['id']) ? $current_new['id'] : '' ?>">

            <label for="title">Tiêu đề</label>
            <input type="text" name="title" id="title" value="<?= isset($current_new['title']) ? $current_new['title'] : '' ?>" required>
            <br>

            <label for="image">Ảnh hiện tại</label>
            <?php if (!empty($current_new['image'])): ?>
                <img src="<?= BASE_IMAGE . $current_new['image'] ?>" alt="Ảnh bài viết" style="max-width: 200px; display: block; margin: 8px 0;">
            <?php endif; ?>
            <label for="image">Chọn ảnh mới</label>
            <input type="file" name="image" id="image" style="margin: 8px 0;">
            <br>

            <label for="category">Danh mục</label>
            <select class="form-control" name="category_id" id="category" style="margin: 8px 0;">
                <option value="#">Chọn danh mục</option>
                <?php foreach ($all_category as $cate) { ?>
                    <option value="<?= $cate['id'] ?>" <?= (isset($current_new['category_id']) && $current_new['category_id'] == $cate['id']) ? 'selected' : '' ?>>
                        <?= $cate['name'] ?>
                    </option>
                <?php } ?>
            </select>
            <br>

            <label for="description">Mô tả ngắn</label>
            <input type="text" name="description" id="description" value="<?= isset($current_new['description']) ? $current_new['description'] : '' ?>" required>
            <br>

            <label for="content">Nội dung</label>
            <input type="text" name="content" id="content" value="<?= isset($current_new['content']) ? $current_new['content'] : '' ?>" required>
            <br>

            <input class="btn-submit" type="submit" name="submit" value="Cập nhật">
        </form>
    </div>
</body>
</html>
