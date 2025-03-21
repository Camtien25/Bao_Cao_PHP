<?php
session_start();
include_once("controller/controllerUser.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $userController = new contronllerUser();
    $user = $userController->cLogin($username, $password);

    if ($user) {
        $_SESSION['login'] = $user; // Lưu thông tin user vào session

        // Chuyển hướng về trang chủ
        header("Location: index.php");
        exit();
    } else {
        $error = "Sai tài khoản hoặc mật khẩu!";
    }
}
?>
<div class="auth-form">
    <form method="POST" action="">
        <h2>Đăng nhập</h2>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <input type="text" name="username" placeholder="Tên đăng nhập" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit">Đăng nhập</button>
    </form>
</div>
<!-- <div class="auth-form">
    <h2>Đăng nhập tài khoản</h2>
    <form action="#" method="POST">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="btnLogin">Đăng nhập</button>
    </form>
</div>-->

