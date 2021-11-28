<?php include 'db/dbhelper.php';

if (isset($_GET['p'])) {
    $id = $_GET['p'];
    $sql = "select * from product where id = $id";
    $product = executeSingleResult($sql);
    if ($product != null) {
        $name = $product['name'];
        $description = $product['description'];
        $price = number_format($product['price']);
    }

    $sql = "select * from product_image where productid = $id";
    $images = executeResult($sql);
}
?>

<!DOCTYPE html>
<html lang="en">


<!--head-->
<?php include 'components/head.php' ?>

<body>

    <!--header-->
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
                        <a href="">
                            <span>Sản phẩm</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <span>
                            <span itemprop="name"><?php echo $name ?></span>
                        </span>
                    </li>
                </ol>
            </div>
        </div>

        <!--detail product main-->
        <div class="container mt-4">
            <div class="row product-detail-wrapper">
                <div class="col-md-7">
                    <div class="product-gallery">
                        <!--thumnail img-->
                        <div class="product-gallery__thumbs-container">

                            <?php
                            foreach ($images as $image) {
                                echo "
                                    <div class='product-gallery__thumb' id='imgg1'>
                                        <a class='product-gallery__thumb-placeholder' href=''>
                                            <img src='$image[imageurl]''>
                                        </a>
                                    </div>
                                    ";
                            }
                            ?>

                        </div>

                        <!--img detail-->
                        <div class="product-image-detail">
                            <ul id="sliderproduct" class="site-box-content slide_product">
                                <?php
                                foreach ($images as $image) {
                                    echo "
                                    <li class='product-gallery-item gallery-item current ' id='imgg1a'>
                                        <img class='product-image-feature ' src='$image[imageurl]'>
                                    </li>
                                    ";
                                }
                                ?>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-md-5">
                    <div class="product-content-desc-1">

                        <div class="product-title">
                            <h1><?php echo $name ?></h1>
                            <span id="pro_sku">SKU: <?php echo $id ?></span>
                        </div>

                        <div class="product-price" id="price-preview"><span class="pro-price"><?php echo $price ?>₫</span></div>

                        <form id="add-item-form" action="/cart/add" method="post" class="variants clearfix">

                            <!-- <div class="select-swatch">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Màu đen</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Màu đỏ</label>
                                </div>
                            </div> -->

                            <div class="selector-actions">
                                <div class="quantity-area clearfix">
                                    <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                                    <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
                                    <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                                </div>
                                <div class="wrap-addcart clearfix">
                                    <div class="row-flex">
                                        <button type="button" class="button btn-addtocart addtocart-modal">
                                            Thêm vào
                                        </button>
                                        <button type="button" class="buy-now button" style="display: block;">
                                            Mua ngay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="product-description">
                            <div class="title-bl">
                                <h2>Mô tả</h2>
                            </div>
                            <div class="description-content">
                                <div class="description-productdetail">
                                    <p><span><?php echo $description ?></span><br><br></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>

    <?php include 'components/footer.php' ?>
</body>

</html>