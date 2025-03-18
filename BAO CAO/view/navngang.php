<a href="index.php">Trang chủ</a>
<?php
    if(isset($_SESSION["dn"])){
        echo '<a href="?act=logout" onclick="return confirm(\'Bạn thật sự muốn thoát?\');">Đăng xuất';

    } else {
        echo '<a href="?act=regis">Đăng ký</a> | <a href="?act=login">Đăng nhập</a>';
    }
?>