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
        <a class="btn-submit" href="index.php?route=admin/category/add">Thêm danh mục mới</a>
        <table border="1">
            <tr>
                <th>Ảnh</th>
                <th>Chức năng</th>
            </tr>
            <tbody>
            <?php foreach ($arr_category as $row) { ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td>
                        <a class="btn-edit" href="index.php?route=admin/category/edit&id=<?= $row['id'] ?>">Sửa</a> 
                        <a class="btn-delete" href="index.php?route=admin/category/delete&id=<?= $row['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá?');">Xóa</a> 
                        <a class="btn-detail" href="index.php?route=category&id=<?= $row['id'] ?>">Chi tiết</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>