<body>
    <?php include 'components/header.php' ?>
    <?php
    include 'components/head.php';
    require_once 'db/dbhelper.php';
    require_once 'db/config.php';

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
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($order as $item) {
                            $sql = "select * from product where id = '$item[orderid]'";
                            $product = executeSingleResult($sql);
                            echo $product;
                            $count++;
                            echo "
                            <p>helo</p>
                                <tr>
                                    <th scope='row'>
                                        $count
                                    </th>
                                    <td>$product[name]</td>
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