<div class="product-container">
    <div class="sidebar">
        <h3>Danh mục</h3>
        <ul>
            <?php 
                include_once("controller/controllerProduct.php");

                $p = new ControllerProducts();
                $rows = $p->cGetTypeOfProduct();

                if ($rows) {
                    while ($row = $rows->fetch_assoc()) {
                        echo '<li><a href="index.php?act=product&type='.$row['typeid'].'">'.$row['typename'].'</a></li>';
                    }
                } else {
                    echo '<li>Không có danh mục nào.</li>';
                }
            ?>
        </ul>
    </div>

    <div class="product-list">
        <div class="product-grid" id="productGrid">
            <?php 
                include_once("controller/controllerProduct.php");

                $p = new ControllerProducts();
                $typeOfID = isset($_GET['type']) ? $_GET['type'] : 0;

                // Sửa lại hàm gọi đúng danh sách sản phẩm theo typeid
                $rs = $p->cGetAllProducts($typeOfID);

                if ($rs) {
                    while ($row = $rs->fetch_assoc()) {
                        echo "<div class=\"product-item\">
                                <img src=".$row['productimage']." alt=\"Sản phẩm\">
                                <h4>".$row['productname']."</h4>
                                <p>Giá: <b>".$row['productprice']."đ</b></p>
                                <button>Mua ngay</button>
                            </div>
                        ";
                    }
                } else {
                    echo '<p>Không có sản phẩm.</p>';
                }
            ?> 
        </div>
    </div>
</div>
