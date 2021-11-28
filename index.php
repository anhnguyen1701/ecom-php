<?php include 'db/dbhelper.php' ?>

<!DOCTYPE html>
<html lang="en">


<!--head-->
<?php include 'components/head.php' ?>

<body>
    <!--header-->
    <?php include 'components/header.php' ?>

    <!-- Slider-->
    <div class="container px-5 mt-5">
        <div id="slider" class="carousel slide w-80" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
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
                <?php
                $sql = "select * from product";
                $list = executeResult($sql);

                foreach ($list as $item) {
                    $text_price = number_format($item['price']);
                    echo "
                                <div class='col mb-5'>
                                    <div class='card h-100'>
                                    <a href='product-detail.php?p=$item[id]'>
                                        <img class='card-img-top pt-4' src=" . $item['img'] . " />
                                    </a>
                                        <div class='card-body p-4 mt-5'>
                                            <div class='text-left'>
                                            <a href='product-detail.php?p=$item[id]'>
                                                <p class='card-title'>" . $item['name'] . "</p>
                                            </a>
                                                <p class='card-price text-center'>$text_price ₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                }
                ?>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php' ?>
</body>

</html>