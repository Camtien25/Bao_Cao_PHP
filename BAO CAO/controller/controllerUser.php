<?php
    include("modal/modelUser.php");
    class contronllerUser{
        public function cLogin($tdn,$mk){
            $p = new modelUser();
            $pass = md5($mk);
            $tbl = $p->mLogin($tdn,$pass);

            if (!$tbl){
                echo "<script>alert('Lỗi kết nối')</script>";
            }elseif($tbl->num_rows>0){
                echo "<script>alert('Đăng nhập thành công')</script>";
                $_SESSION['login'] = true;
                // header("Location: index.php");
                exit();
            }else{
                echo "<script>alert('Sai thông tin đăng nhập')</script>";
            }
        }
        public function cRegister($tdn,$mk){
            $p = new modelUser();
            $pass = md5($mk);
            $checkUser = $p->mCheckRegister($tdn);

            if($checkUser->num_rows>0){
                echo "<script>alert('Trùng người dùng')</script>";
                header('Location: index.php?act=register');
            }else {
                $user = $p->mRegister($tdn,$pass);
                if($user){
                    echo "<script>alert('Đăng kí thành công')</script>";
                    header('Location: index.php?act=login');
                }else{
                    echo "<script>alert('Lỗi kết nối')</script>";
                    header('Location: index.php');
                }
            }
        }
        public function cGetAllProducts(){
            $p = new modelUser();
            $tblProduct = $p->mGetAllProducts();

            if($tblProduct){
                return $tblProduct;
            }else{
                return null;
            }
        }
    }

?>