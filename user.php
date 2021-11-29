<?php include 'db/dbhelper.php';
?>

<!DOCTYPE html>
<html lang="en">


<!--head-->
<?php include 'components/head.php' ?>

<body>
    <!--header-->
    <?php include 'components/header.php' ?>

    <div class="container">
        <div>
            <a href="orders.php">
                <button class="btn btn-success">Đơn hàng</button>
            </a>
        </div>

        <div class="mt-3" onclick="logout()">
            <button class="btn btn-danger">Đăng xuất</button>
        </div>
    </div>
    <?php include 'components/footer.php' ?>

    <script>
        function logout() {
            $.ajax({
                url: "./php/logout.php",
                type: "POST",
                success: function(data) {
                    console.log(data);
                    let res = JSON.parse(data);
                    if (res.statusCode == 200) {
                        alert("Đăng xuất thành công");
                    } else {
                        console.log(res.statusCode);
                    }
                }
            })
        }
    </script>
</body>

</html>