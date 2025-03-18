<?php
    include("modal/modelUser.php");
    class contronllerUser{
        public function cLogin($tdn,$mk){
            $p = new modelUser();
            $pass = md5($mk);
            $tbl = $p->mLogin($tdn,$mk);

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
            }else {
                $user = $p->mRegister($tdn,$pass);
                if($user){
                    echo "<script>alert('Đăng kí thành công')</script>";
                }else{
                    echo "<script>alert('Lỗi kết nối')</script>";
                }

            }
        }
    }

?>