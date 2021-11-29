<body>
    <?php include 'components/header.php' ?>

    <?php
    include 'components/head.php';
    require_once 'db/dbhelper.php';
    require_once 'db/config.php';

    $user_id = $_SESSION['user_id'];
    $sql = "select * from `order` where userid = '$user_id'";
    $orders = execute($sql);
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
                            <th scope="col">Tên người nhận</th>
                            <th scope="col">Địa chỉ nhận hàng</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Ghi chú</th>
                            <th scope="col">Trạng thái đơn hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($orders as $item) {
                            $count++;
                            echo "
                                <tr>
                                    <th scope='row'>
                                        <a href='order-detail.php?id=$item[id]'>$count</a>
                                    </th>
                                    <td>$item[name]</td>
                                    <td>$item[address]</td>
                                    <td>$item[phone]</td>
                                    <td>$item[note]</td>
                                    <td>$item[status]</td>
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