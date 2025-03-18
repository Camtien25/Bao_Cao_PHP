<?php
include("modelConnect.php");
class modelUser{
    public function mLogin ($tdn,$mk){
        $selectSQL = "SELECT * FROM user where UserName='$tdn' and password='$mk'";
        $p = new modelConnect();
        $conn = $p->mOpenConnect();
        if($conn){
            return $conn->query($selectSQL);

        }else{
            return false;
        }
        $conn->mClose($conn);
    }
    public function mRegister($tdn,$mk){
        $insertSQL ="INSERT INTO user(UserName,password) VALUES('$tdn','$mk')";
        $p = new modelConnect();
        $conn = $p->mOpenConnect();
        if($conn){
            return $conn->query($insertSQL);// đăng kí thành công

        }else{
            return false;//đăng ký không thành công
        }
        $conn->mClose($conn);
    }
    public function mCheckRegister($tdn){
        $selectSQL= "SECLECT*FROM user where UserName = '$tdn'";
        $p = new modelConnect();
        $conn = $p->mOpenConnect();

        if($conn){
            return $conn->query($selectSQL);

        }else{
            return false;
        }
        $conn->mClose($conn);
    }
    
}
?>