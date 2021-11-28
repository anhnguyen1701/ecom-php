<?php
require_once 'db/dbhelper.php';
require_once 'db/config.php';

$user_id = 1;
$sql = "select * from cart where userid = $user_id";
$res = execute($sql);

$total_oder_price = 0;
?>

<!DOCTYPE html>
<html lang="en">

<!--head-->
<?php include 'components/head.php' ?>

<body>
    <?php include 'components/header.php' ?>

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
                            <span itemprop="name">Giỏ hàng</span>
                        </span>
                    </li>
                </ol>
            </div>
        </div>

        <!--detail product main-->
        <?php
        echo "<div class='container mt-4'>";
        foreach ($res as $item) {
            $sql = "select * from product where id = $item[productid]";
            $product = executeSingleResult($sql);

            $single_price = number_format($product['price']);
            $total_price = number_format($product['price'] * $item['product_quant']);
            $total_oder_price += $product['price'] * $item['product_quant'];

            echo "
                <div class='row justify-content-left item-cart'>
                    <div class='col-md-2'>
                        <img src='$product[img]' class='cart-img' alt=''>
                    </div>
                    <div class='col-md-2'>
                        <span class='align-self-center fw-bolder'>
                            $product[name]
                        </span>
                    </div>
                    <div class='col-md-2 align-middle'>
                        <span class='fw-bolder'>
                            Đơn giá
                        </span>
                        <br>
                        <span>
                            $single_price
                        </span>
                    </div>

                    <div class='col-md-2'>
                        <span class='fw-bolder'>
                            Tổng tiền
                        </span>
                        <br>
                        <span>
                            $total_price
                        </span>
                    </div>

                    <div class='col-md-2'>
                        <div class='quantity-area clearfix'>
                            <input type='button' value='-' onclick='minusQuantity()' class='qty-btn'>
                            <input type='text' id='quantity' name='quantity' value='$item[product_quant]' min='1' class='quantity-selector'>
                            <input type='button' value='+' onclick='plusQuantity()' class='qty-btn'>
                        </div>
                    </div>

                    <div class='col-md-2'>
                        <button class=' btn text-danger'>
                            Xóa
                        </button>
                    </div>
                </div>
            ";
        }
        echo "</div>"
        ?>
    </section>

    <div class="row checkout justify-content-end">
        <div class="col-3 justify-content-end">
            <h1 class="total-checkout-title">Tổng đơn:</h1>
            <span class="total-checkout-amount"><?php echo number_format($total_oder_price) ?>₫</span>
        </div>
        <div class="col-2" style="margin-right: 100px;">
            <button type="button" class="buy-now button" style="display: block;" data-bs-toggle="modal" data-bs-target="#checkout">
                Thanh toán
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="checkout" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkout">Thông tin thanh toán</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-2">
                            <label for="recipient-name" class="col-form-label fw-bolder">Họ và tên</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-2">
                            <label for="message-text" class="col-form-label fw-bolder">Địa chỉ</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="message-text" class="col-form-label fw-bolder">Số điện thoại</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="message-text" class="col-form-label fw-bolder">Note</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/product-gallery.js"></script>
</body>

</html>