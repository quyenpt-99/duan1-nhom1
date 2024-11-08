<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .footer {
            margin-top: 40%; 
        }
        .table {
            table-layout: fixed; 
        }
        .table th, .table td {
            overflow: hidden;
            text-overflow: ellipsis; 
            white-space: nowrap; 
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="header">
        <?php require_once 'khung/header.php'; ?>
    </div>
    <div class="card mt-3">
        <div class="card-header bg-dark text-white">
            <h2 class="text-center">Danh mục sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($category as $key => $row) { ?>
                        <tr>
                            <td><?php echo $row['id_danhmuc']; ?></td>
                            <td><?php echo $row['ten_danhmuc']; ?></td>
                            <td>
                                <a href="?act=updateDM&id=<?php echo $row['id_danhmuc']; ?>" class="btn btn-warning">Sửa</a>
                            </td>
                            <td>
                                <a href="?act=deleteDM&id=<?php echo $row['id_danhmuc']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa')" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="text-center mt-3">
                <a href="?act=insertDM" class="btn btn-success">Thêm mới danh mục</a>
                <a href="?act=home" class="btn btn-secondary">Quay lại</a>
            </div>
        </div>
    </div>
</div>

<div class="footer" style="margin-top: 20px;">
    <?php require_once 'khung/footer.php'; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>