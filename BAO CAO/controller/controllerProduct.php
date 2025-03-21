<?php

include_once("modal/modelProduct.php");

class ControllerProducts {
    public function cGetAllProducts($typeid) {
        $p = new modelProduct();
        return $p->mGetAllProducts($typeid);
    }

    public function cGetTypeOfProduct() {
        $p = new modelProduct();
        return $p->mGetTypeOfProduct(); // Sửa đúng thành lấy danh mục sản phẩm
    }
}



    // class controllerProduct{
    //     public function cGetAllProducts($typeid){
    //         $p = new modelProduct();
    //         $tblProduct = $p->mGetAllProducts($typeid);
            
    //         if($tblProduct){
    //             return $tblProduct;
    //         }else{
    //             return null;
    //         }
    //     }
    //     public function cGetTypeOfProduct(){
    //         $p = new modelProduct();
    //         $tblProduct = $p->mGetTypeOfProduct();

    //         if($tblProduct){
    //             return $tblProduct;
    //         }else{
    //             return null;
    //         }
    //     }
//     public function cSearch($productSearch){
//     $contentSearch = strtolower($productSearch);
//     $p = new modelProduct();
//     $tblProduct = $p->mSearch($contentSearch);
//     if($tblProduct) {
//         return $tblProduct;
//     }else {
//         return null;
//     }
// }
?>

