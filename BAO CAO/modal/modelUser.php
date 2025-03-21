<?php
include("modelConnect.php");
class modelUser{
    public function mLogin ($tdn,$mk){
        $selectSQL = "SELECT * FROM user where UserName='$tdn' and password='$mk'";
        $p = new modelConnect();
        $conn = $p->mOpenConnect();
        if($conn){
            $p->mClose($conn);
            return $conn->query($selectSQL);
        }else{
            $p->mClose($conn);
            return false;
        }
    }
    public function mRegister($tdn,$mk){
        $insertSQL ="INSERT INTO user(UserName,password) VALUES('$tdn','$mk')";
        $p = new modelConnect();
        $conn = $p->mOpenConnect();
        if($conn){
            $p->mClose($conn);
            return $conn->query($insertSQL);// đăng kí thành công
        }else{
            $p->mClose($conn);
            return false;//đăng ký không thành công
        }
    }
    public function mCheckRegister($tdn){
        $selectSQL= "SELECT * FROM user where UserName = '$tdn'";
        $p = new modelConnect();
        $conn = $p->mOpenConnect();

        if($conn){
            $p->mClose($conn);
            return $conn->query($selectSQL);
        }else{
            $p->mClose($conn);
            return false;
        }
    }
    public function mGetAllProducts(){
        $p =new modelConnect();
        $conn = $p->mOpenConnect();

        if($conn){
            $selectSQL = "SELECT * FROM product";
            $tblProduct = $conn->query($selectSQL);

            if($tblProduct->num_rows>0){
                $p->mClose($conn);
                return $tblProduct;
            }else{
                $p->mClose($conn);
                return null;
            }
        }else{
            $p->mClose($conn);
            return null;
        }
    }
}
?>