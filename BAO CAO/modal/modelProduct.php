<?php
include("modelConnect.php");

class modelProduct
{
    public function mGetAllProducts($typeid)
    {
        $p = new modelConnect();
        $connect = $p->mOpenConnect();

        if (!$connect) {
            return null;
        }
        if ($typeid) {
            $selectSQL = "SELECT*FROM product WHERE typeOfProduct = $typeid";
            $tblProduct = $connect->query($selectSQL);

            if ($tblProduct->num_rows > 0) {
                return $tblProduct; // có dữ liệu
            } else {
                return null; //không có dữ liệu
            }
        } else {
            $selectSQL = "SELECT * FROM product";
            $tblProduct = $connect->query($selectSQL);

            if ($tblProduct->num_rows > 00) {
                return $tblProduct;
            } else {
                return null;
            }
        }
    }
    public function mGetTypeOfProduct()
    {
        $p = new modelConnect();
        $connect = $p->mOpenConnect();

        if (!$connect) {
            return null;
        }
        $selectSQL = "SELECT*FROM typeofproduct";
        $tblTypeOfProduct = $connect->query($selectSQL);

        if ($tblTypeOfProduct->num_rows > 0) {
            return $tblTypeOfProduct; // có dư liệu của sản phẩm
        } else {
            return null; // không có dữ liệu
        }
    }
    public function mSearch($productSearch)
    {
        $p = new modelConnect();
        $conn = $p->mOpenConnect();
        if ($conn) {
            $selectSQl = "SELECT * FROM 'product' WHERE NameProduct LIKE LOWER('% " .$_SESSION['prodcutSearch']. "%');";
            $tblProduct = $conn->query($selectSQl);
            if ($tblProduct->num_rows > 0) {
                return $tblProduct;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
}
