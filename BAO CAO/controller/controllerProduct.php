<?php
    include("modal/modelProduct.php");
    class ControllerProduct{
        public function cGetAllProduct($typeid){
            $p = new modelProduct();
            $tblProduct = $p->mGetAllProduct($typeid);

            if($tblProduct){
                return $tblProduct;
            }else{
                return null;
            }
        }

        public function cGetTypeOfProduct(){
            $p = new modelProduct();
            $tblProduct = $p->mGetTypeOfProduct();

            if($tblProduct){
                return $tblProduct;
            }else{
                return null;
            }
        }
    }
?>