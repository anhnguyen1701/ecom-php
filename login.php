<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24mobile</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap');
    </style>

    <!-- <link rel="stylesheet" type="text/css" href="./css/login.css"> -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <?php include 'components/header.php' ?>

    <section class="py-2">
        <div class="container" style="margin-top: 70px;">
            <div class=" row">
                <div class="col-3"></div>
                <div class="col-md-6">
                    <div class="login d-flex my-10">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-lg-8 mx-auto">
                                    <h3 class="login-heading mb-4">Đăng nhập</h3>
                                    <form method="POST" action="login.php">
                                        <div class="form-floating mb-3">
                                            <input name="email" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Địa chỉ email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword">Mật khẩu</label>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                            <label class="form-check-label" for="rememberPasswordCheck">
                                                Nhớ mật khẩu
                                            </label>
                                        </div>

                                        <div class="d-grid">
                                            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Đăng nhập</button>
                                            <div class="text-center">
                                                <a class="small" href="./register.html">Chưa có tài khoản?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
include("db/config.php");
include("db/dbhelper.php");

if (!empty($_POST)) {
    $emailInput = $_POST['email'];
    $password = $_POST['password'];

    $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    $sql = "select id, email from user where email = '$emailInput' and password = '$password'";
    $res = mysqli_query($con, $sql);

    if ($res->num_rows == 1) {
        $row = mysqli_fetch_array($res);
        $id = $row['id'];
        $email = $row['email'];
        $_SESSION['user_id'] = $id;
        $_SESSION['user_email'] = $email;
        header("location: index.php");
    } else {
        echo "wrong email/ password";
    }
}

?>