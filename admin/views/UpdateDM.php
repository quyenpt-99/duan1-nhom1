<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa danh mục</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php require_once 'khung/header.php'; ?>


    <div class="container">
        <div class="card mt-4 mb-4 shadow-sm">
            <div class="card-header bg-dark text-white text-center">
                <h2>Sửa danh mục sản phẩm</h2>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <input type="hidden" name="id" value="<?= $oneCTGR["id_danhmuc"]?>">
                    

                    <div class="form-group">
                        <label for="cate_name">Tên danh mục</label>
                        <input 
                            type="text" 
                            name="cate_name" 
                            id="cate_name" 
                            class="form-control"
                            value="<?php echo $oneCTGR['ten_danhmuc']; ?>"
                            placeholder="Nhập tên danh mục"
                            required
                        >
                        <small id="error-message" class="form-text text-danger"></small>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button name="btn_updateCTGR" class="btn btn-success" type="submit">Sửa sản phẩm</button>
                        <a href="?act=category" class="btn btn-secondary">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php require_once 'khung/footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>

        function validateForm() {
            var cateName = document.getElementById("cate_name").value.trim(); 
            var errorMessage = document.getElementById("error-message");
            if (cateName === "") {
                errorMessage.textContent = "Tên danh mục không được để trống!";
                return false;
            } else {
                errorMessage.textContent = "";
            }
            return true; 
        }
    </script>
</body>
</html>
