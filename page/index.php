<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>24Mobile</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap');
    </style>

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="header">
        <a href="index.html">MIỄN PHÍ
            VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH
            - ĐỔI TRẢ TRONG 30 NGÀY - ĐẢM BẢO CHẤT LƯỢNG</a>
    </div>

    <!-- Navigation-->
    <nav class="navbar navbar-light text-light bg-white sticky-top">
        <div class="container px-5 py-2">
            <a class="navbar-brand fw-bolder text-dark" href="/index.html">Apple iPhone</a>
            <div class="desk-menu justify-content-left">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product-detail.html">SẢN PHẨM
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
                    <a href="./cart.html" style="color:#000; text-decoration: none;">
                        <i class="bi-cart-fill me-1"></i>
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </a>
                </button>
                <button class="btn btn-outline-dark">
                    <a href="./login.html" style="color:#000;  text-decoration: none;">
                        <i class="bi bi-person-fill"></i>
                    </a>
                </button>
            </div>
        </div>
    </nav>

    <!-- Slider-->
    <div class="container px-5 mt-5">
        <div id="slider" class="carousel slide w-80" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slider/slide-1.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/slider/slide-2.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/slider/slide-3.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/slider/slide-4.png" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Section-->
    <section class="py-2">
        <div class="container px-5 mt-5">
            <div class="hp mb-5">
                <h2 class="h2-hp text-center mb-4">
                    Sản phẩm bán chạy
                </h2>
                <div class="view-all">
                    <a href="">Xem thêm</a>
                </div>
            </div>

            <div class="row row-cols-4 justify-content-left">
                <!--items -->
                <!-- <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top pt-4"
                            src="./img/product/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg" />
                        <div class="card-body p-4">
                            <div class="text-left">
                                <h5 class="fw-bolder">iPhone 13 Pro Max 256GB I Chính hãng VN/A</h5>
                                <p class="text-danger fw-bolder">20.000.000 VND</p>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-left"><a class="btn btn-outline-danger" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top pt-4"
                            src="./img/product/samsung-galaxy-s21-ultra-bac-600x600-1-600x600.jpg" />
                        <div class="card-body p-4 mt-5">
                            <div class="text-left">
                                <p class="card-title">iPhone 13 Pro Max 256GB I Chính hãng VN/A</p>
                                <p class="card-price text-center">20.000.000₫</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top pt-4"
                            src="./img/product/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg" />
                        <div class="card-body p-4 mt-5">
                            <div class="text-left">
                                <p class="card-title">iPhone 13 Pro Max 256GB I Chính hãng VN/A</p>
                                <p class="card-price text-center">20.000.000₫</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top pt-4" src="./img/product/iphone-12-xanh-duong-new-2-600x600.jpg" />
                        <div class="card-body p-4 mt-5">
                            <div class="text-left">
                                <p class="card-title">iPhone 13 Pro Max 256GB I Chính hãng VN/A</p>
                                <p class="card-price text-center">20.000.000₫</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <a href="/product-detail.html">
                            <img class="card-img-top pt-4" src="./img/product/iphone-13-red-1-600x600.jpg" />
                        </a>
                        <div class="card-body p-4 mt-5">
                            <div class="text-left">
                                <a href="/product-detail.html">
                                    <p class="card-title">iPhone 13 Pro Max 256GB I Chính hãng VN/A</p>
                                </a>
                                <p class="card-price text-center">20.000.000₫</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <a href="/product-detail.html">
                            <img class="card-img-top pt-4"
                                src="./img/product/samsung-galaxy-note-20-062220-122200-fix-600x600.jpg" />
                        </a>
                        <div class="card-body p-4 mt-5">
                            <div class="text-left">
                                <a href="/product-detail.html">
                                    <p class="card-title">iPhone 13 Pro Max 256GB I Chính hãng VN/A</p>
                                </a>
                                <p class="card-price text-center">20.000.000₫</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-->
    <section class="py-2">
        <div class="container px-5 mt-5">
            <div class="hp mb-5">
                <h2 class="h2-hp text-center mb-4">
                    Sản phẩm bán chạy
                </h2>
                <div class="view-all">
                    <a href="">Xem thêm</a>
                </div>
            </div>

            <div class="row row-cols-4 justify-content-left">
                <!--items -->
                <!-- <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top pt-4"
                            src="./img/product/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg" />
                        <div class="card-body p-4">
                            <div class="text-left">
                                <h5 class="fw-bolder">iPhone 13 Pro Max 256GB I Chính hãng VN/A</h5>
                                <p class="text-danger fw-bolder">20.000.000 VND</p>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-left"><a class="btn btn-outline-danger" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top pt-4"
                            src="./img/product/samsung-galaxy-s21-ultra-bac-600x600-1-600x600.jpg" />
                        <div class="card-body p-4 mt-5">
                            <div class="text-left">
                                <p class="card-title">iPhone 13 Pro Max 256GB I Chính hãng VN/A</p>
                                <p class="card-price text-center">20.000.000₫</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top pt-4"
                            src="./img/product/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg" />
                        <div class="card-body p-4 mt-5">
                            <div class="text-left">
                                <p class="card-title">iPhone 13 Pro Max 256GB I Chính hãng VN/A</p>
                                <p class="card-price text-center">20.000.000₫</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top pt-4" src="./img/product/iphone-12-xanh-duong-new-2-600x600.jpg" />
                        <div class="card-body p-4 mt-5">
                            <div class="text-left">
                                <p class="card-title">iPhone 13 Pro Max 256GB I Chính hãng VN/A</p>
                                <p class="card-price text-center">20.000.000₫</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <a href="/product-detail.html">
                            <img class="card-img-top pt-4" src="./img/product/iphone-13-red-1-600x600.jpg" />
                        </a>
                        <div class="card-body p-4 mt-5">
                            <div class="text-left">
                                <a href="/product-detail.html">
                                    <p class="card-title">iPhone 13 Pro Max 256GB I Chính hãng VN/A</p>
                                </a>
                                <p class="card-price text-center">20.000.000₫</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <a href="/product-detail.html">
                            <img class="card-img-top pt-4"
                                src="./img/product/samsung-galaxy-note-20-062220-122200-fix-600x600.jpg" />
                        </a>
                        <div class="card-body p-4 mt-5">
                            <div class="text-left">
                                <a href="/product-detail.html">
                                    <p class="card-title">iPhone 13 Pro Max 256GB I Chính hãng VN/A</p>
                                </a>
                                <p class="card-price text-center">20.000.000₫</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>