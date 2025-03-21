<div class="auth-form">
    <h2>Đăng ký tài khoản</h2>
    <form action="#" method="POST">
        <label for="username">Tên đăng ký:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="btnRegis">Đăng ký</button>
    </form>
</div>
<?php
if (isset($_POST['btnRegis'])){
    //echo "<script>alert('test')</script>";
    include("controller/controllerUser.php");

    $p = new contronllerUser();
    $p->cRegister($_POST['username'],$_POST['password']);
    
}
?>
