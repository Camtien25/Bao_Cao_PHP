<div class="product-container" style="max-width: 100%; min-height: 100vh; margin-top: 90px;">
    <div class="sidebar">
        <h3>Danh mục</h3>
        <ul>
            <li><a href="index.php?act=adminPage">Xem danh sách sản phẩm</a></li>
            
        </ul>
    </div>

    <div class="product-list">
        <div class="product-details">
            <h3>Chi tiết sản phẩm</h3>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Loại sản phẩm</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include("controller/controllerUser.php");

                        $p = new contronllerUser();
                        $tblProduct = $p->cGetAllProducts();

                        if($tblProduct) {
                            while($row = $tblProduct->fetch_assoc()) {
                                $price = number_format($row['productprice']);
                                echo '
                                    <tr>
                                        <td>'.$row['ProductID'].'</td>
                                        <td>'.$row['NameProduct'].'</td>
                                        <td>'.$row['Price'].'</td>
                                        <td><img class="admin_img" src="'.$row['Img'].'"></td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>