<?php
include "config/database.php";
if (!empty($userid)) {
    include "controller/breadcrumb.php";
    // include "controller/section_2.php";
    include "include/header.php";
    include "include/navbar.php";
    include "controller/product.php";
    include "controller/wishlist.php";

?>

    <main>
        <!-- slider section start -->
        <section class="slider-content">
            <div class="home-slider owl-carousel owl-theme" id="home-slider">

                <?php
                $sql = "SELECT * FROM `breadcrum` ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                $x = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $product = $row['product_name'];
                    $heading = $row['heading'];
                    $data = $row['data'];
                    $img = $row['img'];
                    $price = $row['price'];
                    $kkal = $row['kkal'];
                    $sqrl = $row['sqrl'];
                    $fat = $row['fat'];
                    $carbs = $row['carbs'];
                ?>

                    <div class="item">
                        <div class="slide-image">
                            <div class="sldier-bg-content">
                                <div class="slider-text-info slider-content-left slider-text-left">
                                    <h2><?= $product ?></h2>
                                    <span class="sub-title"><?= $heading ?></span>
                                    <p> <?= $data ?></p>
                                    <span class="sub-title">Starting price</span>
                                    <div class="price-block">
                                        <span class="price-old"><?= $price ?></>
                                            <span class="price-even">~ $18.00</span>
                                    </div>
                                    <a href="collection.html" class="btn btn-style">Online Shop</a>
                                </div>
                                <div class="slider-img">
                                    <img src="<?= $img ?>" class="img-fluid mobile-img" alt="slider-img-04">
                                </div>
                                <div class="slider-counter">
                                    <div class="counter-block">
                                        <h6><?= $kkal ?></h6>
                                        <span>KKAL</span>
                                    </div>
                                    <div class="counter-block">
                                        <h6><?= $sqrl ?></h6>
                                        <span>SQRL</span>
                                    </div>
                                    <div class="counter-block">
                                        <h6><?= $fat ?></h6>
                                        <span>FAT</span>
                                    </div>
                                    <div class="counter-block">
                                        <h6><?= $carbs ?></h6>
                                        <span>CARBS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- slider section end -->
        <!-- category start -->
        <section class="slider-category slider-category-template">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="grid-wrap ">
                            <?php
                            $sql = "SELECT * FROM `section_1` ORDER BY `id` DESC";
                            $result = mysqli_query($conn, $sql);
                            $x = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $icon = $row['img_icon'];
                                $background = $row['background_img'];
                                $head = $row['heading'];
                                $link = $row['link'];

                            ?>
                                <div class="grid-wrapper ">
                                    <div class="cat-block">
                                        <a href="<?= @$link ?>" class="icon-block">
                                            <span class="img-icon">
                                                <img src="<?= @$icon ?>" class="img-fluid" alt="cat-icon-01">
                                            </span>
                                            <span class="cat-img" style="background-image: url('<?= @$background ?>');"></span>
                                            <span class="cat-icon"><i class="feather-arrow-up-right"></i></span>
                                            <h6 class="cat-title"><?= @$head ?></h6>
                                        </a>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- category end -->
        <!-- custom-text start -->
        <section class="custom-text">
            <div class="container">
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM `section_2` ORDER BY `id` DESC";
                    $result = mysqli_query($conn, $sql);
                    $x = 1;
                    $row = mysqli_fetch_assoc($result);
                    $id = $row['id'];
                    $imgg = $row['section_2img'];
                    $title = $row['title'];
                    $headi = $row['heading'];
                    $btn_link = $row['btn_link'];
                    $btn_name = $row['btn_name'];
                    ?>
                    <div class="col">
                        <div class="custom-text-wrapper">

                            <div class="custom-text-img">
                                <div class="offer-img">
                                    <a href="collection.html">
                                        <img src="<?= @$imgg ?>" class="img-fluid" alt="banner1">
                                    </a>
                                </div>
                            </div>
                            <div class="custom-text-content">
                                <div class="custom-width">
                                    <span class="sub-title"><?= @$title ?></span>
                                    <h2><?= @$headi ?></h2>
                                    <div class="desc-block">
                                        <ul class="desc-wrap">
                                            <?php
                                            $sql = "SELECT * FROM `section_2_li` ORDER BY `id` DESC";
                                            $result = mysqli_query($conn, $sql);
                                            $x = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $li = $row['li'];
                                            ?>
                                                <li class="desc-wrapper">
                                                    <span><?= @$li ?></span>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <a href="<?= @$btn_link ?>" class="btn btn-style"><?= @$btn_name ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- custom-text end -->
        <!-- product start -->
        <section class="special-category collection-category-template section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="collection-category">
                            <!-- special title start -->
                            <div class="section-capture">
                                <div class="section-title">
                                    <span class="sub-title">New brand chocolate</span>
                                    <h2>
                                        <span>Best rated product</span>
                                    </h2>
                                </div>
                            </div>
                            <!-- special title end -->
                            <!-- swiper slider start -->
                            <div class="collection-wrap">
                                <div class="collection-slider swiper" id="collection-slider">
                                    <div class="swiper-wrapper">

                                        <?php
                                        $sql = "SELECT * FROM `section_3` ORDER BY `id` DESC";
                                        $result = mysqli_query($conn, $sql);
                                        $x = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $imgee = $row['image'];
                                            $hover = $row['hover_img'];
                                            $product = $row['product'];
                                            $new = $row['new_price'];
                                            $old = $row['old_price'];


                                        ?>


                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <form action="" method="post">
                                                        <div class="product-image">
                                                            <a href="pages/products.php?id=<?= @$id ?>" class="pro-img">
                                                                <img src="<?= @$imgee ?>" class="img-fluid img1" alt="p-51">
                                                                <img src="<?= @$hover ?>" class="img-fluid img2" alt="p-52">
                                                            </a>
                                                            <!-- product-action start -->
                                                            <div class="product-action">
                                                                <a href="wishlist-product.html" class="wishlist-product">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                                                </a>
                                                                <!-- href="javascript:void(0)" -->

                                                                <a href="pages/products.php?id=<?= @$id ?>" class="add-to-cart">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a>
                                                                <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="quickview-icon"><i class="feather-eye"></i></span>
                                                                </a>
                                                            </div>
                                                            <!-- product-action end -->
                                                        </div>
                                                        <!-- product-img end -->
                                                        <!-- product-content start -->

                                                        <div class="product-content">
                                                            <div class="product-title">
                                                                <div class="title-block">
                                                                    <!-- product-title start -->
                                                                    <h6><a href="product-template2.html"><?= @$product ?></a></h6>
                                                                    <!-- product-title end -->
                                                                    <!-- product-price start -->
                                                                    <div class="price-box">
                                                                        <span class="new-price">$<?= @$new ?></span>
                                                                        <span class="old-price">$<?= @$old ?></span>
                                                                    </div>
                                                                    <!-- product-price end -->
                                                                </div>
                                                                <!-- product-action start -->
                                                                <div class="product-action">
                                                                    <!-- <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="quickview-icon"><i class="feather-eye"></i></span>
                                                                </a> -->
                                                                    <button type="submit" name="add_to_cart" class="btn add-to-cart ajax-spin-cart">

                                                                        <!-- <span class="tooltip-text">Wishlist</span> -->
                                                                        <span class="quickview-icon"><i class="feather-eye"></i></span>
                                                                    </button>
                                                                    <input type="hidden" name="product_id" value="<?= @$id ?>">
                                                                    <input type="hidden" name="quantity" value="1">

                                                                    <!-- <a href="wishlist-product.html" class="wishlist-product">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                                                </a> -->
                                                                    <button type="submit" name="wishlist" class="btn add-to-cart ajax-spin-cart">

                                                                        <!-- <span class="tooltip-text">Wishlist</span> -->
                                                                        <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                                                    </button>


                                                                    <button type="submit" name="add_to_cart" class="btn add-to-cart ajax-spin-cart">

                                                                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    </button>
                                                                    <!-- <a type="submit" name="add_to_cart" class="btn">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a> -->
                                                                </div>

                                                                <!-- product-action end -->
                                                            </div>
                                                            <!-- product-rating start-->
                                                            <div class="product-rating">
                                                                <span class="star-rating">
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <!-- product-rating end -->
                                                        </div>
                                                    </form>
                                                    <!-- product-content end -->
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!-- swiper slider end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- product end -->
        <!-- testimonial start -->
        <section class="testimonial-area section-ptb">
            <div class="container">
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM `section_4_p1` ORDER BY `id` DESC";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $id = $row['id'];
                    $headi = $row['heading'];
                    $banner = $row['banner'];
                    ?>
                    <div class="col">
                        <div class="grid-wrap">
                            <div class="grid-wrapper">
                                <div class="section-capture">
                                    <div class="section-title">
                                        <span class="sub-title"><?= @$headi ?></span>
                                    </div>
                                </div>
                                <div class="testi-slider">
                                    <div class="slider-for swiper" id="testimonial-slider">
                                        <div class="swiper-wrapper">
                                            <?php
                                            $sql = "SELECT * FROM `section_4_p2` ORDER BY `id` DESC";
                                            $result = mysqli_query($conn, $sql);
                                            $x = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id = $row['id'];
                                                $prof = $row['profile'];
                                                $cmnt = $row['comments'];
                                                $nam = $row['name'];
                                                $iden = $row['identity'];

                                            ?>
                                                <div class="swiper-slide">
                                                    <div class="testi-content">
                                                        <span class="testi-img">
                                                            <img src="<?= @$prof ?>" class="img-fluid" alt="testi-07">
                                                        </span>
                                                        <div class="testi-desc">
                                                            <p><?= @$cmnt ?></p>
                                                            <div class="author-title">
                                                                <h6><?= @$nam ?>
                                                                    <span><?= @$iden ?></span>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                        <div class="testi-review">
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-wrapper bg-wrapper" style="background-image: url('<?= @$banner ?>')">
                                <h2>Coco Chocolate</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial end -->
        <!-- our-service-area start -->
        <section class="our-service-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="single-service">
                            <?php
                            $sql = "SELECT * FROM `section_5` ORDER BY `id` DESC";
                            $result = mysqli_query($conn, $sql);
                            $x = 1;
                            while ($row = mysqli_fetch_assoc($result)) {

                                $ic = $row['icon'];
                                $hdng = $row['heading'];
                                $lnnk = $row['link'];
                            ?>
                                <li class="service-content">
                                    <div class="ser-block">
                                        <a href="<?= @$row['link'] ?>"><i class="<?= @$ic ?>"></i></a>
                                        <div class="service-text">
                                            <h6><?= @$hdng ?></h6>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-service-area end -->
        <!-- blog-wrap start -->
        <section class="blog-wrap">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <?php
                                $sql = "SELECT * FROM `section_6_p1` ORDER BY `id` DESC";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $t = $row['title'];
                                $h = $row['headi'];
                                ?>

                                <span class="sub-title"><?= @$t ?></span>
                                <h2><?= @$h ?></h2>
                            </div>
                        </div>
                        <div class="blog-slider swiper" id="blog-template">
                            <div class="swiper-wrapper">

                                <?php
                                $sql = "SELECT * FROM `section_6_p2` ORDER BY `id` DESC";
                                $result = mysqli_query($conn, $sql);
                                $x = 1;
                                while ($row = mysqli_fetch_assoc($result)) {

                                    $id =  $row['id'];
                                    $i =  $row['datee'];
                                    $j =  $row['month'];
                                    $k =  $row['link'];
                                    $l =  $row['blog_img'];
                                    $m =  $row['icon'];
                                    $n =  $row['bog_title'];
                                ?>

                                    <div class="swiper-slide">
                                        <div class="blog-post">
                                            <div class="blog-main-img">
                                                <span class="date-time">
                                                    <span class="date"><?= @$i ?></span>
                                                    <span class="month"><?= @$j ?></span>
                                                </span>
                                                <a href="<?= @$k ?>" class="blog-img">
                                                    <img src="<?= @$l ?>" class="img-fluid" alt="blog-6">
                                                    <span class="blog-icon"><i class="<?= @$m ?>"></i></span>
                                                    <span class="blog-title"><?= @$n ?></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-wrap end -->
    </main>

<?php
    include "include/footer.php";
} else {

    header("Location: pages/login.php");
    exit();
}
?>