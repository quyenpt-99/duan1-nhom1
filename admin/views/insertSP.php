<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        p {
            color: #555;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="file"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        select {
            cursor: pointer;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php require_once 'khung/header.php'?>
    <div class="wrapper">
        <h2>Thêm sản phẩm mới</h2>
        <form action="" method="post" enctype="multipart/form-data" class="insert">
            <p>Tên sản phẩm</p><input type="text" name="name" id="">
            <p>Ảnh sản phẩm</p><input type="file" name="img" id="">
            <p>Giá sản phẩm</p><input type="text" name="price" id="">
            <p>Chi tiết sản phẩm</p><input type="text" name="description" id="">
            <p>Số lượng</p><input type="text" name="quantity" id="">
            <p>Lượt xem</p><input type="text" name="view" id="">
            <p>Danh mục sản phẩm</p>
            <select name="cate" id="">
                <?php foreach($listCateName as $value): ?>
                    <option value="<?= $value['id_danhmuc']?>"><?= $value['ten_danhmuc']?></option>
                <?php endforeach?>
            </select> <br>
            <input type="submit" name="btn_insert" value="Thêm sản phẩm" class="btn" id="">
        </form>
    </div>
    <?php require_once 'khung/footer.php'; ?>
</body>
</html>