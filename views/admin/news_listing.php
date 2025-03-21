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
        <a class="btn-submit" href="index.php?route=admin/news/add">Thêm tin mới</a>
        <table border="1">
            <tr>
                <th>Ảnh</th>
                <th>Tiêu đề</th>
                <th>Mô tả ngắn</th>
                <th>Danh mục</th>
                <th>Chức năng</th>
            </tr>
            <tbody>
            <?php foreach ($arr_news as $row) { ?>
                <tr>
                    <td><img src="<?= BASE_IMAGE . $row['image'] ?>" alt="" width="150px"></td>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['description'] ?></td>
                    <td><?= isset($row['category_name']) ? $row['category_name'] : 'N/A' ?></td>
                    <td class="actions">
                        <a class="btn-edit" href="index.php?route=admin/news/edit&id=<?= $row['id'] ?>">Sửa</a> 
                        <a class="btn-delete" href="index.php?route=admin/news/delete&id=<?= $row['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá?');">Xóa</a> 
                        <a class="btn-detail" href="index.php?route=detail&id=<?= $row['id'] ?>">Chi tiết</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>