<?php

class modelConnect{
    public function mOpenConnect(){
        $host = 'localhost';
        $user = 'ban_giay';
        $pass = 'Tien2004';
        $db = 'bangiay';
        return mysqli_connect($host,$user,$pass,$db);

    }
    public function mClose($conn){
        $conn ->close();
    }
    
}
?>