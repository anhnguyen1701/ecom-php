<?php
require_once 'db/dbhelper.php';
require_once 'db/config.php';

$user_id = 1;
$sql = "select * from cart where userid = $user_id";
$res = executeResult($sql);

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
                <div class='row justify-content-left item-cart' data-id='$item[id]'>
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
                            <input readonly type='text' id='quantity' name='quantity' value='$item[product_quant]' class='quantity-selector'>
                        </div>
                    </div>

                    <div class='col-md-2'>
                        <button class='btn text-danger' onclick='deleteProduct($item[id])'>
                            Xóa
                        </button>
                    </div>
                </div>
            ";
        }
        echo "</div>"
        ?>

        <!-- <div class='quantity-area clearfix'>
            <input type='button' value='-' onclick='minusQuantity($item[id])' class='qty-btn'>
            <input type='text' id='quantity' name='quantity' value='$item[product_quant]' class='quantity-selector'>
            <input type='button' value='+' onclick='plusQuantity($item[id])' class='qty-btn'>
        </div> -->
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
                            <input type="text" class="form-control" id="checkout-name">
                        </div>
                        <div class="mb-2">
                            <label for="message-text" class="col-form-label fw-bolder">Địa chỉ</label>
                            <input class="form-control" id="checkout-address"></input>
                        </div>
                        <div class="mb-2">
                            <label for="message-text" class="col-form-label fw-bolder">Số điện thoại</label>
                            <input class="form-control" id="checkout-phone"></input>
                        </div>
                        <div class="mb-2">
                            <label for="message-text" class="col-form-label fw-bolder">Note</label>
                            <input class="form-control" id="checkout-note"></input>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="checkout()">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'components/footer.php' ?>

    <script>
        function deleteProduct(id) {
            $.ajax({
                url: './php/cart.php',
                type: 'POST',
                data: {
                    action: 'delete',
                    id: id
                },
                success: function(data) {
                    let res = JSON.parse(data);
                    if (res.statusCode == 200) {
                        document.querySelector('[data-id=' + '"' + id + '"' + ']').style.display = "none";
                        location.reload();
                    } else {
                        console.log(res.statusCode);
                    }
                }
            })
        }

        function minusQuantity(id) {
            $.ajax({

            })
        }

        function checkout() {
            let checkout_name = document.getElementById('checkout-name').value;
            let checkout_address = document.getElementById('checkout-address').value;
            let checkout_phone = document.getElementById('checkout-phone').value;
            let checkout_note = document.getElementById('checkout-note').value;
            let data = getAllCart();

            $.ajax({
                url: './php/checkout.php',
                type: 'POST',
                data: {
                    action: 'checkout',
                    checkout_name: checkout_name,
                    checkout_address: checkout_address,
                    checkout_phone: checkout_phone,
                    checkout_note: checkout_note,
                    cart: data
                },
                success: function(data) {
                    let res = JSON.parse(data);
                    if (res.statusCode == 200) {
                        location.reload();
                        alert("Thanh toán thành công");
                    } else {
                        console.log(res.statusCode);
                    }
                }
            })
        }
    </script>
</body>

</html>