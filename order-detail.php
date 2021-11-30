<?php
include 'components/head.php';
require_once 'db/dbhelper.php';
require_once 'db/config.php';
?>

<body>
    <?php include 'components/header.php' ?>

    <?php
    if (isset($_GET['id'])) {
        $orderid = $_GET['id'];
        $sql = "select * from order_detail where orderid = $orderid";
        $order = executeResult($sql);
    }
    ?>

    <!-- Product section-->
    <section class="">
        <!--menu seo-->
        <div class="breadcrumb-shop">
            <div class="container">
                <ol class="breadcrumb breadcrumb-arrows">
                    <li class="breadcrumb-item">
                        <a href="home.html">
                            <span">Trang chủ</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <span>
                            <span itemprop="name">Đơn hàng</span>
                        </span>
                    </li>
                </ol>
            </div>
        </div>

        <!--detail product main-->
        <div class="container mt-4">
            <div class="item-cart">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($order as $item) {
                            $count++;
                            $sql = "select * from product where id = '$item[productid]'";
                            $product = executeSingleResult($sql);

                            $single_price = number_format($product['price']);
                            $total = number_format($product['price'] * $item['product_quant']);
                            echo "
                                <tr>
                                    <th scope='row'>
                                        $count
                                    </th>
                                    <td>
                                        <img src=" . $product['img'] . " style=' height: 100;'/>
                                    </td>
                                    <td>$product[name]</td>
                                    <td>$single_price</td>
                                    <td>$item[product_quant]</td>
                                    <td>$total</td>
                                </tr>                                    
                                ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</body>

</html>