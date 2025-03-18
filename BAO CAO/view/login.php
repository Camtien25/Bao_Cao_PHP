<div class="auth-form">
    <h2>Đăng nhập tài khoản</h2>
    <form action="#" method="POST">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Đăng nhập</button>
    </form>
</div>
<?php
if (isset($_POST['login'])){
    echo "<script>alert('test')</script>";
    include("controller/controllerUser.php");

    $p = new contronllerUser();
    $p->cLogin($_POST['username'],$_POST['password']);
}
?>
