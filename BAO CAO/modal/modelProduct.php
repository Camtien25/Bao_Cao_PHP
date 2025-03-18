<?php
include("modelConnect.php");

class modelProduct{
    public function mGetAllProduct($typeid){
        $p = new modelConnect();
        $connect = $p->mOpenConnect();

        if(!$connect){
            return null;
        }
        $selectSQL = "SELECT*FROM product WHERE typeOfProduct = $typeid";
        $tblProduct = $connect->query($selectSQL);

        if($tblProduct->num_rows>0){
            return $tblProduct; // có dữ liệu
        }else{
            return null;//không có dữ liệu
        }
        $connect->mClode($connect);
    }
    public function mGetTypeOfProduct(){
        $p = new modelConnect();
        $connect = $p->mOpenConnect();

        if(!$connect){
            return null;
        }
        $selectSQL="SELECT*FROM typeofproduct";
        $tblTypeOfProduct = $connect->query($selectSQL);

        if($tblTypeOfProduct->num_rows>0){
            return $tblTypeOfProduct;// có dư liệu của sản phẩm
        }else{
            return null;// không có dữ liệu
        }
        $connect->mClose();
    }
}
?>