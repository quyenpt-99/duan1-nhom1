<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAVANI</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS (if any) -->
    <link rel="stylesheet" href="../assets/cssheader.css">

    <style>
        .search-bar.expanded {
            width: 300px; 
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="../assets/img/logo.jpg" alt="SAVANI">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="?act=/">Trang Chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="?act=category">Quản lý danh mục</a></li>
                <li class="nav-item"><a class="nav-link" href="?act=listSP">Quản lý sản phẩm</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Quản lý đơn hàng</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Quản lý tài khoản</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Quản lý bình luận</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Thống kê</a></li>
            </ul>


            <div class="search-bar" id="searchBar">
                <input type="text" placeholder="Tìm kiếm">
            </div>


            <div class="navbar-icons d-flex">
                <a class="nav-link" href="#" id="searchIcon">
                    <img src="../assets/img/timkiem.png" alt="Tìm kiếm">
                </a>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../assets/img/user.png" alt="Người dùng">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <span class="dropdown-item">Xin chào:</span>
                        <a class="dropdown-item" href="#">Thông tin tài khoản</a>
                        <a class="dropdown-item" href="#">Trang chủ</a>
                        <a class="dropdown-item" href="#">Đăng xuất</a>
                    </div>
                </div>
                <a class="nav-link" href="#"><img src="../assets/img/giohang.png" alt="Giỏ hàng"></a>
            </div>
        </div>
    </div>
</nav>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>

    document.getElementById('searchIcon').addEventListener('click', function() {
        var searchBar = document.getElementById('searchBar');
        if (searchBar.classList.contains('expanded')) {
            searchBar.classList.remove('expanded');
        } else {
            searchBar.classList.add('expanded');
        }
    });
</script>

</body>
</html>
