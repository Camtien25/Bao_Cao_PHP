<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Giày</title>
    <link rel="stylesheet" href="view/css/style.css">
     <link rel="stylesheet" href="View/css/login.css">
    <link rel="stylesheet" href="View/css/products.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <div class="banner">
            <img src="view/img/Giay.jpg" alt="Banner BST Giày" />
        </div>
    </header>
    
    <!-- Thanh nav ngang -->
    <nav class="nav-horizontal">
        <ul>
            <li><a href="index.php" class="nav-link" data-page="home">Trang chủ</a></li>
            <li><a href="#" class="nav-link" data-page="login">Đăng nhập</a></li>
            <li><a href="#" class="nav-link" data-page="register">Đăng ký</a></li>
        </ul>
    </nav>

    <div class="container">
        <!-- Thanh nav dọc -->
        <aside class="nav-vertical">
            <ul>
                <li><a href="#">Giày thể thao</a></li>
                <li><a href="#">Giày sneaker</a></li>
                <li><a href="#">Giày nữ</a></li>
                <li><a href="#">Giày nam</a></li>
            </ul>
        </aside>

        <!-- Nội dung chính -->
        <main class="content" id="main-content">
            <?php include("view/home.php"); ?>
        </main>
    </div>

    <script>
        $(document).ready(function() {
            $(".nav-link").click(function(e) {
                e.preventDefault();
                var page = $(this).data("page");

                $.ajax({
                    url: "view/" + page + ".php",
                    type: "GET",
                    success: function(response) {
                        $("#main-content").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
