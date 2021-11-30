<?php include 'db/dbhelper.php';
?>

<!DOCTYPE html>
<html lang="en">


<!--head-->
<?php include 'components/head.php' ?>

<body>
    <!--header-->
    <?php include 'components/header.php' ?>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2">
                <div>
                    <a href="orders.php">
                        <button class="btn btn-success">Đơn hàng</button>
                    </a>
                </div>

                <div class="mt-3">
                    <a href='./php/logout.php'>
                        <button class="btn btn-danger">Đăng xuất</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include 'components/footer.php' ?>
</body>

</html>