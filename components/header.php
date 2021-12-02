<?php
session_start();
function updateLogin()
{
    if (isset($_SESSION['user_id'])) {
        echo "
                <button class='btn btn-outline-dark'>
                    <a href='user.php' style='color:#000;  text-decoration: none;'>
                        <span>$_SESSION[user_email]</span>
                    </a>
                </button>
            ";
    } else {
        echo "
                <button class='btn btn-outline-dark'>
                    <a href='login.php' style='color:#000;  text-decoration: none;'>
                        <span>Đăng nhập</span>
                    </a>
                </button>
            ";
    }
}

function updateCart()
{
    if (isset($_SESSION['cart_quant'])) {
        echo $_SESSION['cart_quant'];
    } else {
        echo 0;
    }
}
?>

<!-- <div class="header">
    <a href="index.html">MIỄN PHÍ
        VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH
        - ĐỔI TRẢ TRONG 30 NGÀY - ĐẢM BẢO CHẤT LƯỢNG</a>
</div> -->

<!-- Navigation-->
<nav class="navbar navbar-light text-light bg-white sticky-top">
    <div class="container px-5 py-2">
        <a class="navbar-brand fw-bolder text-dark" href="index.php">Apple iPhone</a>
        <div class="desk-menu justify-content-left">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">TRANG CHỦ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">SẢN PHẨM
                    </a>
                <li class="nav-item">
                    <a class="nav-link" href="">GIỚI THIỆU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">LIÊN HỆ</a>
                </li>
            </ul>
        </div>

        <div>
            <button class="btn btn-outline-dark">
                <a href="cart.php" style="color:#000; text-decoration: none;">
                    <i class="bi-cart-fill me-1"></i>
                    <span class="badge bg-dark text-white ms-1 rounded-pill" id="cart_quantity">
                        <?php updateCart() ?>
                    </span>
                </a>
            </button>
            <?php updateLogin() ?>
        </div>
    </div>

    <script src="./js/ajax.js"></script>
    <script>
        window.onload = function() {
            $.ajax({
                url: "./php/cart.php",
                type: "POST",
                data: {
                    action: "get_quantity",
                },
                success: function(data) {
                    var res = JSON.parse(data);
                    if (res.statusCode == 200) {
                        document.getElementById("cart_quantity").textContent = res.total;
                    } else {
                        console.log(res.statusCode);
                    }
                },
            });
        };
    </script>
</nav>