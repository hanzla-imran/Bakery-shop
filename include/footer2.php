<?php
$site_url = 'http://project/';
?>
<footer>
    <div class="footer-top-area" style="background-image: url('assets/img/banner/footer-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer-list-wrap">
                        <?php
                        $sql = "SELECT * FROM `footer_headinds` ORDER BY `id` DESC";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $h_1 = $row['h_1'];
                        $h_2 = $row['h_2'];
                        $h_3 = $row['h_3'];
                        $h_4 = $row['h_4'];
                        $h_5 = $row['h_5'];
                        $h_6 = $row['h_6'];
                        $link = $row['link'];
                        $data = $row['data'];
                        $h_7 = $row['h_7'];
                        $link_2 = $row['link_2'];
                        $data_2 = $row['data_2'];
                        $h_8 = $row['h_8'];
                        $data_3 = $row['data_3'];
                        $h_9 = $row['h_9'];
                        $data_4 = $row['data_4'];
                        $btn = $row['btn'];
                        $link_3 = $row['link_3'];
                        $img_1 = $row['img_1'];
                        $img_2 = $row['img_2'];
                        $img_3 = $row['img_3'];
                        $img_4 = $row['img_4'];
                        ?>
                        <ul class="footer-list">
                            <li class="ftlink-li">
                                <div class="menu-content">
                                    <h2 class="ft-title"><?= @$h_1 ?></h2>
                                    <div class="footer-wrap-menu">
                                        <ul class="footer-sublist">
                                            <?php
                                            $sql = "SELECT * FROM `footer_list1` ORDER BY `id` DESC";
                                            $result = mysqli_query($conn, $sql);
                                            $x = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $z = $row['link'];
                                                $zz = $row['heading'];
                                            ?>
                                                <li class="ftsublink-li">
                                                    <a href="<?= @$z ?>" class="ft-sublink"><?= @$zz ?></a>
                                                </li>


                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="menu-content">
                                    <h2 class="ft-title"><?= @$h_2 ?></h2>
                                    <div class="footer-wrap-menu">
                                        <ul class="footer-sublist">
                                            <?php
                                            $sql = "SELECT * FROM `footer_list2` ORDER BY `id` DESC";
                                            $result = mysqli_query($conn, $sql);
                                            $x = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $zz = $row['link'];
                                                $zzz = $row['heading'];
                                            ?>
                                                <li class="ftsublink-li">
                                                    <a href="<?= @$zz ?>" class="ft-sublink"><?= @$zzz ?></a>
                                                </li>


                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="ftlink-li">
                                <div class="menu-content">
                                    <h2 class="ft-title"><?= @$h_3 ?></h2>
                                    <div class="footer-wrap-menu">
                                        <ul class="footer-sublist">
                                            <?php
                                            $sql = "SELECT * FROM `footer_list3` ORDER BY `id` DESC";
                                            $result = mysqli_query($conn, $sql);
                                            $x = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $zzx = $row['link'];
                                                $zx = $row['heading'];
                                            ?>
                                                <li class="ftsublink-li">
                                                    <a href="<?= @$zzx ?>" class="ft-sublink"><?= @$zx ?></a>
                                                </li>


                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="menu-content">
                                    <h2 class="ft-title"><?= @$h_4 ?></h2>
                                    <div class="footer-wrap-menu">
                                        <ul class="footer-sublist">
                                            <?php
                                            $sql = "SELECT * FROM `footer_list4` ORDER BY `id` DESC";
                                            $result = mysqli_query($conn, $sql);
                                            $x = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $zzx = $row['link'];
                                                $zx = $row['heading'];
                                            ?>
                                                <li class="ftsublink-li">
                                                    <a href="<?= @$zzx ?>" class="ft-sublink"><?= @$zx ?></a>
                                                </li>


                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="ftlink-li contact-now">
                                <h2 class="ft-title "><?= @$h_5 ?></h2>
                                <div class="footer-wrap-menu">
                                    <div class="custom-content">
                                        <span style="color: #808080;"><?= @$h_6 ?></span>
                                        <p><a href="<?= @$link ?>"><?= @$data ?></a></p>
                                    </div>
                                    <div class="custom-content">
                                        <span style="color: #808080;"><?= @$h_7 ?></span>
                                        <p><a href="<?= @$link_2 ?>"><?= @$data_2 ?></a></p>
                                    </div>
                                    <div class="custom-content">
                                        <span style="color: #808080;"><?= @$h_8 ?></span>
                                        <p><?= @$data_3 ?></p>
                                    </div>
                                </div>
                            </li>
                            <li class="ftlink-li newsletter">
                                <h2 class="ft-title"><?= @$h_9 ?></h2>
                                <div class="footer-wrap-menu">
                                    <p class="ft-desc"><?= @$data_4 ?></p>
                                    <form class="contact-form">
                                        <div class="subscribe-block">
                                            <input type="email" name="q" placeholder="Enter your mail">
                                            <button type="submit" class="news-btn btn btn-style" name="commit" id="Subscribe"><?= @$btn ?></button>
                                        </div>
                                    </form>
                                </div>
                                <a href="<?= @$link_3 ?>" class="payment-icon">
                                    <img src="<?= @$img_2 ?>" class="img-fluid" alt="master">
                                    <img src="<?= @$img_3 ?>" class="img-fluid" alt="express">
                                    <img src="<?= @$img_4 ?>" class="img-fluid" alt="paypal">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="footer-logo">
                <?php

                $sql = "SELECT * FROM `website_logo` ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                if ($result && mysqli_num_rows($result) > 0) {

                    $row = mysqli_fetch_assoc($result)


                ?>

                    <a href="index-3.html" class="theme-footer-logo">
                        <img src="<?= @$row['logo'] ?>" class="img-fluid" alt="logo3">
                    </a>
                <?php } ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="grid-wrap">
                            <div class="grid-wrapper grid-copyright">
                                <p>Copyright © 2024 by spacingtech<sup>TM</sup></p>
                            </div>
                            <div class="grid-wrapper grid-menu">
                                <a href="contact-us.html" class="ft-sublink">Work with us</a>
                                <a href="javascript:void(0)" class="ft-sublink">Delivery Information</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- newsletter start -->
<!-- <div id="newsletter" class="popup_wrapper">
    <div class="popup_wrapper" id="one-time-newsletter">
        <div class="modal fade show" id="news-letter-modal" aria-modal="true" role="dialog">
            <div class="newsletter_popup_inner modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="post" class="contact-form">
                            <button type="button" class="close-btn" data-bs-dismiss="modal"><i class="feather-x"></i></button>
                            <div class="newsletter-info">
                                <div class="subscribe_area">
                                    <div class="subscribe-content">
                                        <h2>Newsletter</h2>
                                        <p>Subscribe with us to get special offers and other discount information</p>
                                    </div>
                                    <div class="popup-newsletter">
                                        <div class="subscribe-con">
                                            <div class="subscribe-block">
                                                <input type="email" name="q" class="email mail" placeholder="Enter your mail" required="">
                                                <div class="email-submit">
                                                    <button type="submit" class="news-btn btn btn-style2">Subscribe</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- newsletter end -->
<!-- search-popup start -->
<div class="modal fade" id="seachmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="crap-search">
                                <!-- search-button-close start -->
                                <div class="button-close">
                                    <button type="button" class="search-close" data-bs-dismiss="modal"><i class="feather-x"></i></button>
                                </div>
                                <!-- search-button-close end -->
                                <!-- search-form start -->
                                <form method="get" class="search-bar">
                                    <div class="form-search">
                                        <input type="search" name="q" placeholder="Search product here.." class="input-text" required>
                                        <button type="submit" class="search-btn"><i class="feather-search"></i></button>
                                    </div>
                                </form>
                                <!-- search-form end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search-popup end -->
<!-- mobile-menu start -->
<div class="mobile-menu" id="menu-toggle">
    <div class="main-menu-area">
        <!-- box-header start -->
        <div class="box-header"><button class="close-menu" type="button"><i class="feather-x"></i></button></div>
        <!-- box-header end -->
        <div class="megamenu-content">
            <div class="mainwrap collapse show" id="resp-main">
                <ul class="main-menu">
                    <li class="menu-link">
                        <a href="index.html" class="link-title">
                            <span class="sp-link-title">Home</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <a href="#resp-home" data-bs-toggle="collapse" class="link-title link-title-lg">
                            <span class="sp-link-title">Home</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <div class="menu-dropdown single-menu collapse" id="resp-home">
                            <ul class="container ul p-0">
                                <li class="singlemenu-li">
                                    <a href="index.html" class="singlelink-title">
                                        <span class="sp-link-title">01 Home</span>
                                    </a>
                                </li>
                                <li class="singlemenu-li">
                                    <a href="index-2.html" class="singlelink-title">
                                        <span class="sp-link-title">02 Home</span>
                                    </a>
                                </li>
                                <li class="singlemenu-li">
                                    <a href="index-3.html" class="singlelink-title">
                                        <span class="sp-link-title">03 Home</span>
                                    </a>
                                </li>
                                <li class="singlemenu-li">
                                    <a href="index-4.html" class="singlelink-title">
                                        <span class="sp-link-title">04 Home</span>
                                    </a>
                                </li>
                                <li class="singlemenu-li">
                                    <a href="index-5.html" class="singlelink-title">
                                        <span class="sp-link-title">05 Home</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-link">
                        <a href="collection.html" class="link-title">
                            <span class="sp-link-title">Product</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <a href="#resp-single-product" data-bs-toggle="collapse" class="link-title link-title-lg">
                            <span class="sp-link-title">Product</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <div class="menu-dropdown product-menu collapse" id="resp-single-product">
                            <ul class="container ul p-0">
                                <li class="productlink-li">
                                    <a href="collection.html" class="productlink-title">
                                        <span class="sp-link-title">Shop page</span>
                                    </a>
                                    <a href="#resp-product-page" class="productlink-title productlink-title-lg" data-bs-toggle="collapse">
                                        <span class="sp-link-title">Shop page</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <ul class="productsupmenu-dropdown collapse" id="resp-product-page">
                                        <li class="productsupmenu-li">
                                            <a href="collection.html" class="productsuplink-title">
                                                <span class="sp-link-title">01 Collection</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="collection-without.html" class="productsuplink-title">
                                                <span class="sp-link-title">02 Collection left</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="collection-right.html" class="productsuplink-title">
                                                <span class="sp-link-title">03 Collection right</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="collection-list.html" class="productsuplink-title">
                                                <span class="sp-link-title">04 Collection list</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="collection-list-without.html" class="productsuplink-title">
                                                <span class="sp-link-title">05 Collection list left</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="collection-list-right.html" class="productsuplink-title">
                                                <span class="sp-link-title">06 Collection list right</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="productlink-li">
                                    <a href="collection.html" class="productlink-title">
                                        <span class="sp-link-title">Product page</span>
                                    </a>
                                    <a href="#resp-shop-page" class="productlink-title productlink-title-lg" data-bs-toggle="collapse">
                                        <span class="sp-link-title">Product page</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <ul class="productsupmenu-dropdown collapse" id="resp-shop-page">
                                        <li class="productsupmenu-li">
                                            <a href="product-template.html" class="productsuplink-title">
                                                <span class="sp-link-title">01 Product style</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="product-template2.html" class="productsuplink-title">
                                                <span class="sp-link-title">02 Product style</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="product-template3.html" class="productsuplink-title">
                                                <span class="sp-link-title">03 Product style</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="product-template4.html" class="productsuplink-title">
                                                <span class="sp-link-title">04 Product style</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="product-template5.html" class="productsuplink-title">
                                                <span class="sp-link-title">05 Product style</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="product-template6.html" class="productsuplink-title">
                                                <span class="sp-link-title">06 Product style</span>
                                            </a>
                                        </li>
                                        <li class="productsupmenu-li">
                                            <a href="product-template7.html" class="productsuplink-title">
                                                <span class="sp-link-title">07 Product style</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="productlink-li">
                                    <div class="menu-product">
                                        <ul class="product-ul">
                                            <li class="product-li">
                                                <div class="product-menu-list">
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="product-template.html" class="pro-img">
                                                                <img src="assets/img/product-list/p-9.jpg" class="img-fluid img1" alt="p-9">
                                                                <img src="assets/img/product-list/p-10.jpg" class="img-fluid img2" alt="p-10">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h6><a href="product-template.html">Amul chocolates</a></h6>
                                                            <div class="price-box">
                                                                <span class="new-price">$11.00</span>
                                                                <span class="old-price">$19.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-li">
                                                <div class="product-menu-list">
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="product-template.html" class="pro-img">
                                                                <img src="assets/img/product-list/p-11.jpg" class="img-fluid img1" alt="p-11">
                                                                <img src="assets/img/product-list/p-12.jpg" class="img-fluid img2" alt="p-12">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h6><a href="product-template.html">Nestle chocolates</a></h6>
                                                            <div class="price-box">
                                                                <span class="new-price">$21.00</span>
                                                                <span class="old-price">$25.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="menu-product-btn">
                                            <a href="collection.html" class="menu-pro-link">
                                                <span class="menu-title">See more</span>
                                                <span class="menu-icon"><i class="bi bi-chevron-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="productlink-li">
                                    <div class="menu-product">
                                        <ul class="product-ul">
                                            <li class="product-li">
                                                <div class="product-menu-list">
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="product-template.html" class="pro-img">
                                                                <img src="assets/img/product-list/p-13.jpg" class="img-fluid img1" alt="p-13">
                                                                <img src="assets/img/product-list/p-14.jpg" class="img-fluid img2" alt="p-14">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h6><a href="product-template.html">Parle chocolates</a></h6>
                                                            <div class="price-box">
                                                                <span class="new-price">$21.00</span>
                                                                <span class="old-price">$25.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-li">
                                                <div class="product-menu-list">
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="product-template.html" class="pro-img">
                                                                <img src="assets/img/product-list/p-15.jpg" class="img-fluid img1" alt="p-15">
                                                                <img src="assets/img/product-list/p-16.jpg" class="img-fluid img2" alt="p-16">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h6><a href="product-template.html">Ferrero chocolates</a></h6>
                                                            <div class="price-box">
                                                                <span class="new-price">$24.00</span>
                                                                <span class="old-price">$29.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="menu-product-btn">
                                            <a href="collection.html" class="menu-pro-link">
                                                <span class="menu-title">See more</span>
                                                <span class="menu-icon"><i class="feather-chevron-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-link">
                        <a href="collection.html" class="link-title">
                            <span class="sp-link-title">Collection</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <a href="#resp-single-collection" class="link-title link-title-lg" data-bs-toggle="collapse">
                            <span class="sp-link-title">Collection</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <div class="menu-dropdown banner-menu collapse" id="resp-single-collection">
                            <ul class="container ul p-0">
                                <li class="bannermenu-li banner-hover">
                                    <a href="collection.html" class="collection-img banner-img">
                                        <img src="assets/img/menu/menu-banner-05.jpg" class="img-fluid" alt="menu-banner-05">
                                    </a>
                                    <a href="collection.html" class="collection-title">
                                        <span>Bread</span>
                                    </a>
                                </li>
                                <li class="bannermenu-li banner-hover">
                                    <a href="collection.html" class="collection-img banner-img">
                                        <img src="assets/img/menu/menu-banner-06.jpg" class="img-fluid" alt="menu-banner-06">
                                    </a>
                                    <a href="collection.html" class="collection-title">
                                        <span>Cakes</span>
                                    </a>
                                </li>
                                <li class="bannermenu-li banner-hover">
                                    <a href="collection.html" class="collection-img banner-img">
                                        <img src="assets/img/menu/menu-banner-07.jpg" class="img-fluid" alt="menu-banner-07">
                                    </a>
                                    <a href="collection.html" class="collection-title">
                                        <span>Bun</span>
                                    </a>
                                </li>
                                <li class="bannermenu-li banner-hover">
                                    <a href="collection.html" class="collection-img banner-img">
                                        <img src="assets/img/menu/menu-banner-08.jpg" class="img-fluid" alt="menu-banner-08">
                                    </a>
                                    <a href="collection.html" class="collection-title">
                                        <span>Pastries</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-link">
                        <a href="blog-grid.html" class="link-title">
                            <span class="sp-link-title">Blogs</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <a href="#resp-single-blog" data-bs-toggle="collapse" class="link-title link-title-lg">
                            <span class="sp-link-title">Blogs</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <div class="menu-dropdown single-menu collapse" id="resp-single-blog">
                            <ul class="container ul p-0">
                                <li class="singlemenu-li">
                                    <a href="blog-grid-without.html" class="singlelink-title">
                                        <span class="sp-link-title">01 Blog grid</span>
                                    </a>
                                </li>
                                <li class="singlemenu-li">
                                    <a href="blog-grid.html" class="singlelink-title">
                                        <span class="sp-link-title">02 Blog grid left</span>
                                    </a>
                                </li>
                                <li class="singlemenu-li">
                                    <a href="blog-grid-right.html" class="singlelink-title">
                                        <span class="sp-link-title">03 Blog grid right</span>
                                    </a>
                                </li>
                                <li class="singlemenu-li">
                                    <a href="article-post-without.html" class="singlelink-title">
                                        <span class="sp-link-title">04 Article post</span>
                                    </a>
                                </li>
                                <li class="singlemenu-li">
                                    <a href="article-post.html" class="singlelink-title">
                                        <span class="sp-link-title">05 Article post left</span>
                                    </a>
                                </li>
                                <li class="singlemenu-li">
                                    <a href="article-post-right.html" class="singlelink-title">
                                        <span class="sp-link-title">06 Article post right</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-link">
                        <a href="about-us.html" class="link-title">
                            <span class="sp-link-title">Pages</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <a href="#resp-pages" class="link-title link-title-lg" data-bs-toggle="collapse">
                            <span class="sp-link-title">Pages</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <div class="menu-dropdown sub-menu collapse" id="resp-pages">
                            <ul class="container p-0 ul">
                                <li class="submenu-li">
                                    <a href="about-us.html" class="sublink-title">
                                        <span class="sp-link-title">About us</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <a href="#resp-about-us" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                        <span class="sp-link-title">About us</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <ul class="supmenu-dropdown collapse" id="resp-about-us">
                                        <li class="supmenu-li">
                                            <a href="about-us.html" class="suplink-title">
                                                <span class="sp-link-title">About us</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="about-us-2.html" class="suplink-title">
                                                <span class="sp-link-title">About us 2</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="about-us-3.html" class="suplink-title">
                                                <span class="sp-link-title">About us 3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu-li">
                                    <a href="my-account.html" class="sublink-title">
                                        <span class="sp-link-title">My account</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <a href="#resp-account" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                        <span class="sp-link-title">My account</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <ul class="supmenu-dropdown collapse" id="resp-account">
                                        <li class="supmenu-li">
                                            <a href="order-history.html" class="suplink-title">
                                                <span class="supmenu-title">Order</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="profile.html" class="suplink-title">
                                                <span class="supmenu-title">Profile</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="pro-address.html" class="suplink-title">
                                                <span class="supmenu-title">Address</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="pro-wishlist.html" class="suplink-title">
                                                <span class="supmenu-title">Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="pro-tickets.html" class="suplink-title">
                                                <span class="supmenu-title">My tickets</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="billing-info.html" class="suplink-title">
                                                <span class="supmenu-title">Billing info</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="track-page.html" class="suplink-title">
                                                <span class="supmenu-title">Track page</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="order-complete.html" class="suplink-title">
                                                <span class="supmenu-title">Order complete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu-li">
                                    <a href="contact-us.html" class="sublink-title">
                                        <span class="sp-link-title">Contact us</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <a href="#resp-contact-us" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                        <span class="sp-link-title">Contact us</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <ul class="supmenu-dropdown collapse" id="resp-contact-us">
                                        <li class="supmenu-li">
                                            <a href="contact-us.html" class="suplink-title">
                                                <span class="supmenu-title">Contact us</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="contact-us-2.html" class="suplink-title">
                                                <span class="supmenu-title">Contact us 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu-li">
                                    <a href="javascript:void(0)" class="sublink-title">
                                        <span class="sp-link-title">Checkout</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <a href="#resp-checkout" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                        <span class="sp-link-title">Checkout</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <ul class="supmenu-dropdown collapse" id="resp-checkout">
                                        <li class="supmenu-li">
                                            <a href="checkout-style1.html" class="suplink-title">
                                                <span class="supmenu-title">Checkout style 1</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="checkout-style2.html" class="suplink-title">
                                                <span class="supmenu-title">Checkout style 2</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="checkout-style3.html" class="suplink-title">
                                                <span class="supmenu-title">Checkout style 3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu-li">
                                    <a href="javascript:void(0)" class="sublink-title">
                                        <span class="sp-link-title">Features</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <a href="#resp-feature" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                        <span class="sp-link-title">Features</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <ul class="supmenu-dropdown collapse" id="resp-feature">
                                        <li class="supmenu-li">
                                            <a href="cancellation.html" class="suplink-title">
                                                <span class="supmenu-title">Cancellation</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="cart-page.html" class="suplink-title">
                                                <span class="supmenu-title">Cart page</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="wishlist-product.html" class="suplink-title">
                                                <span class="supmenu-title">Wishlist product</span>
                                            </a>
                                        </li>
                                        <li class="supmenu-li">
                                            <a href="sitemap.html" class="suplink-title">
                                                <span class="supmenu-title">Sitemap</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu-li">
                                    <a href="faq.html" class="sublink-title">
                                        <span class="sp-link-title">Faq's</span>
                                    </a>
                                    <a href="faq.html" class="sublink-title sublink-title-lg">
                                        <span class="sp-link-title">Faq's</span>
                                    </a>
                                </li>
                                <li class="submenu-li">
                                    <a href="privacy-policy.html" class="sublink-title">
                                        <span class="sp-link-title">Privacy policy</span>
                                    </a>
                                    <a href="privacy-policy.html" class="sublink-title sublink-title-lg">
                                        <span class="sp-link-title">Privacy policy</span>
                                    </a>
                                </li>
                                <li class="submenu-li">
                                    <a href="payment-policy.html" class="sublink-title">
                                        <span class="sp-link-title">Payment policy</span>
                                    </a>
                                    <a href="payment-policy.html" class="sublink-title sublink-title-lg">
                                        <span class="sp-link-title">Payment policy</span>
                                    </a>
                                </li>
                                <li class="submenu-li">
                                    <a href="terms-condition.html" class="sublink-title">
                                        <span class="sp-link-title">Terms & condition</span>
                                    </a>
                                    <a href="terms-condition.html" class="sublink-title sublink-title-lg">
                                        <span class="sp-link-title">Terms & condition</span>
                                    </a>
                                </li>
                                <li class="submenu-li">
                                    <a href="return-policy.html" class="sublink-title">
                                        <span class="sp-link-title">Return policy</span>
                                    </a>
                                    <a href="return-policy.html" class="sublink-title sublink-title-lg">
                                        <span class="sp-link-title">Return policy</span>
                                    </a>
                                </li>
                                <li class="submenu-li">
                                    <a href="404.html" class="sublink-title">
                                        <span class="sp-link-title">404</span>
                                    </a>
                                    <a href="404.html" class="sublink-title sublink-title-lg">
                                        <span class="sp-link-title">404</span>
                                    </a>
                                </li>
                                <li class="submenu-li">
                                    <a href="coming-soon.html" class="sublink-title">
                                        <span class="sp-link-title">Coming soon</span>
                                    </a>
                                    <a href="coming-soon.html" class="sublink-title sublink-title-lg">
                                        <span class="sp-link-title">Coming soon</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mega-menu end -->
    </div>
</div>
<!-- mobile-menu end -->
<!-- notification-bottom start -->
<div class="notification-bottom">
    <ul class="shop-element-menu navigation-menu">
        <li class="side-wrap home-wrap">
            <div class="home-wrapper">
                <a href="index-3.html" class="home-modal">
                    <span class="home-icon"><i class="feather-home"></i></span>
                    <span class="header-title">Home</span>
                </a>
            </div>
        </li>
        <li class="side-wrap search-wrap">
            <div class="search-wrapper">
                <a href="#seachmodal" data-bs-toggle="modal" class="search-modal">
                    <span class="search-icon"><i class="feather-search"></i></span>
                    <span class="header-title">Search</span>
                </a>
            </div>
        </li>
        <li class="side-wrap wishlist-wrap">
            <div class="wishlist-wrapper">
                <div class="wish-det">
                    <a href="wishlist-product.html" class="wishlist-count">
                        <span class="wishlist-icon"><i class="feather-heart"></i></span>
                        <span class="wishlist-counter">5</span>
                        <span class="header-title">Wishlist</span>
                    </a>
                </div>
            </div>
        </li>
        <li class="side-wrap cart-wrap">
            <div class="cart-wrapper">
                <div class="cart-det">
                    <a href="javascript:void(0)" class="add-to-cart cart-count shopping-cart js-cart-drawer">
                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                        <span class="cart-counter">8</span>
                        <span class="header-title">Cart</span>
                    </a>
                </div>
            </div>
        </li>
        <li class="side-wrap user-wrap">
            <div class="user-wrapper">
                <a href="login-account.html" class="user-login">
                    <span class="user-icon"><i class="feather-user"></i></span>
                    <span class="header-title">User</span>
                </a>
            </div>
        </li>
    </ul>
</div>
<!-- notification-bottom end -->
<!-- mini-cart start -->
<div class="mini-cart">
    <div class="cart-text">
        <!-- minicart-empty start -->
        <p class="d-none">No products in the cart.</p>
        <!-- minicart-empty end -->
        <!-- minicart-fill start -->
        <p>
            <span class="cart-count-desc">There are</span>
            <span class="cart-count">8</span>
            <span class="cart-count-desc">products</span>
        </p>
        <!-- minicart-fill end -->
        <!-- minicart-close start -->
        <button class="cart-close"><i class="feather-x"></i></button>
        <!-- minicart-close end -->
    </div>
    <!-- minicart empty-content start -->
    <div class="empty-cart d-none">
        <span class="cart-icon"><i class="bi bi-bag-dash"></i></span>
        <a href="collection.html" class="btn btn-style">Continue shopping</a>
    </div>
    <!-- minicart empty-content end -->
    <ul class="cart-item">
        <li class="cart-product">
            <div class="cart-img">
                <!-- minicart-img start -->
                <a href="product-template.html" class="img-area">
                    <img src="assets/img/product-list/p-9.jpg" class="img-fluid" alt="p-9">
                </a>
                <!-- minicart-img end -->
            </div>
            <div class="cart-content">
                <!-- minicart-title start -->
                <h6><a href="product-template2.html">Amul chocolates</a></h6>
                <!-- minicart-title end -->
                <div class="product-info">
                    <!-- minicart-price start -->
                    <div class="info-item">
                        <span class="product-qty">1</span>
                        <span>×</span>
                        <span class="product-price">$11.00</span>
                    </div>
                    <!-- minicart-price end -->
                </div>
                <div class="product-quantity-action">
                    <div class="product-quantity">
                        <div class="cart-plus-minus">
                            <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                            <input type="text" name="quantity" value="1">
                            <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                        </div>
                    </div>
                    <!-- minicart delete-icon start -->
                    <div class="delete-cart">
                        <a href="javascript:void(0)" class="delete-icon"><i class="feather-trash-2"></i></a>
                    </div>
                    <!-- minicart delete-icon end -->
                </div>
            </div>
        </li>
        <li class="cart-product">
            <div class="cart-img">
                <!-- minicart-img start -->
                <a href="product-template.html" class="img-area">
                    <img src="assets/img/product-list/p-10.jpg" class="img-fluid" alt="p-10">
                </a>
                <!-- minicart-img end -->
            </div>
            <div class="cart-content">
                <!-- minicart-title start -->
                <h6><a href="product-template2.html">Nestle chocolates</a></h6>
                <!-- minicart-title end -->
                <div class="product-info">
                    <!-- minicart-price start -->
                    <div class="info-item">
                        <span class="product-qty">1</span>
                        <span>×</span>
                        <span class="product-price">$21.00</span>
                    </div>
                    <!-- minicart-price end -->
                </div>
                <div class="product-quantity-action">
                    <div class="product-quantity">
                        <div class="cart-plus-minus">
                            <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                            <input type="text" name="quantity" value="1">
                            <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                        </div>
                    </div>
                    <!-- minicart delete-icon start -->
                    <div class="delete-cart">
                        <a href="javascript:void(0)" class="delete-icon"><i class="feather-trash-2"></i></a>
                    </div>
                    <!-- minicart delete-icon end -->
                </div>
            </div>
        </li>
        <li class="cart-product">
            <div class="cart-img">
                <!-- minicart-img start -->
                <a href="product-template.html" class="img-area">
                    <img src="assets/img/product-list/p-11.jpg" class="img-fluid" alt="p-11">
                </a>
                <!-- minicart-img end -->
            </div>
            <div class="cart-content">
                <!-- minicart-title start -->
                <h6><a href="product-template2.html">Parle chocolates</a></h6>
                <!-- minicart-title end -->
                <div class="product-info">
                    <!-- minicart-price start -->
                    <div class="info-item">
                        <span class="product-qty">1</span>
                        <span>×</span>
                        <span class="product-price">$21.00</span>
                    </div>
                    <!-- minicart-price end -->
                </div>
                <div class="product-quantity-action">
                    <div class="product-quantity">
                        <div class="cart-plus-minus">
                            <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                            <input type="text" name="quantity" value="1">
                            <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                        </div>
                    </div>
                    <!-- minicart delete-icon start -->
                    <div class="delete-cart">
                        <a href="javascript:void(0)" class="delete-icon"><i class="feather-trash-2"></i></a>
                    </div>
                    <!-- minicart delete-icon end -->
                </div>
            </div>
        </li>
        <li class="cart-product">
            <div class="cart-img">
                <!-- minicart-img start -->
                <a href="product-template.html" class="img-area">
                    <img src="assets/img/product-list/p-12.jpg" class="img-fluid" alt="p-12">
                </a>
                <!-- minicart-img end -->
            </div>
            <div class="cart-content">
                <!-- minicart-title start -->
                <h6><a href="product-template2.html">Ferrero chocolates</a></h6>
                <!-- minicart-title end -->
                <div class="product-info">
                    <!-- minicart-price start -->
                    <div class="info-item">
                        <span class="product-qty">1</span>
                        <span>×</span>
                        <span class="product-price">$25.00</span>
                    </div>
                    <!-- minicart-price end -->
                </div>
                <div class="product-quantity-action">
                    <div class="product-quantity">
                        <div class="cart-plus-minus">
                            <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                            <input type="text" name="quantity" value="1">
                            <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                        </div>
                    </div>
                    <!-- minicart delete-icon start -->
                    <div class="delete-cart">
                        <a href="javascript:void(0)" class="delete-icon"><i class="feather-trash-2"></i></a>
                    </div>
                    <!-- minicart delete-icon end -->
                </div>
            </div>
        </li>
        <li class="cart-product">
            <div class="cart-img">
                <!-- minicart-img start -->
                <a href="product-template.html" class="img-area">
                    <img src="assets/img/product-list/p-13.jpg" class="img-fluid" alt="p-13">
                </a>
                <!-- minicart-img end -->
            </div>
            <div class="cart-content">
                <!-- minicart-title start -->
                <h6><a href="product-template2.html">Mars chocolate</a></h6>
                <!-- minicart-title end -->
                <div class="product-info">
                    <!-- minicart-price start -->
                    <div class="info-item">
                        <span class="product-qty">1</span>
                        <span>×</span>
                        <span class="product-price">$31.00</span>
                    </div>
                    <!-- minicart-price end -->
                </div>
                <div class="product-quantity-action">
                    <div class="product-quantity">
                        <div class="cart-plus-minus">
                            <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                            <input type="text" name="quantity" value="1">
                            <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                        </div>
                    </div>
                    <!-- minicart delete-icon start -->
                    <div class="delete-cart">
                        <a href="javascript:void(0)" class="delete-icon"><i class="feather-trash-2"></i></a>
                    </div>
                    <!-- minicart delete-icon end -->
                </div>
            </div>
        </li>
        <li class="cart-product">
            <div class="cart-img">
                <!-- minicart-img start -->
                <a href="product-template.html" class="img-area">
                    <img src="assets/img/product-list/p-14.jpg" class="img-fluid" alt="p-14">
                </a>
                <!-- minicart-img end -->
            </div>
            <div class="cart-content">
                <!-- minicart-title start -->
                <h6><a href="product-template2.html">Hershey’s Chocolate</a></h6>
                <!-- minicart-title end -->
                <div class="product-info">
                    <!-- minicart-price start -->
                    <div class="info-item">
                        <span class="product-qty">1</span>
                        <span>×</span>
                        <span class="product-price">$25.00</span>
                    </div>
                    <!-- minicart-price end -->
                </div>
                <div class="product-quantity-action">
                    <div class="product-quantity">
                        <div class="cart-plus-minus">
                            <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                            <input type="text" name="quantity" value="1">
                            <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                        </div>
                    </div>
                    <!-- minicart delete-icon start -->
                    <div class="delete-cart">
                        <a href="javascript:void(0)" class="delete-icon"><i class="feather-trash-2"></i></a>
                    </div>
                    <!-- minicart delete-icon end -->
                </div>
            </div>
        </li>
        <li class="cart-product">
            <div class="cart-img">
                <!-- minicart-img start -->
                <a href="product-template.html" class="img-area">
                    <img src="assets/img/product-list/p-15.jpg" class="img-fluid" alt="p-15">
                </a>
                <!-- minicart-img end -->
            </div>
            <div class="cart-content">
                <!-- minicart-title start -->
                <h6><a href="product-template2.html">Lotus chocolates</a></h6>
                <!-- minicart-title end -->
                <div class="product-info">
                    <!-- minicart-price start -->
                    <div class="info-item">
                        <span class="product-qty">1</span>
                        <span>×</span>
                        <span class="product-price">$61.00</span>
                    </div>
                    <!-- minicart-price end -->
                </div>
                <div class="product-quantity-action">
                    <div class="product-quantity">
                        <div class="cart-plus-minus">
                            <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                            <input type="text" name="quantity" value="1">
                            <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                        </div>
                    </div>
                    <!-- minicart delete-icon start -->
                    <div class="delete-cart">
                        <a href="javascript:void(0)" class="delete-icon"><i class="feather-trash-2"></i></a>
                    </div>
                    <!-- minicart delete-icon end -->
                </div>
            </div>
        </li>
        <li class="cart-product">
            <div class="cart-img">
                <!-- minicart-img start -->
                <a href="product-template.html" class="img-area">
                    <img src="assets/img/product-list/p-16.jpg" class="img-fluid" alt="p-16">
                </a>
                <!-- minicart-img end -->
            </div>
            <div class="cart-content">
                <!-- minicart-title start -->
                <h6><a href="product-template2.html">Cadbury dairy milk</a></h6>
                <!-- minicart-title end -->
                <div class="product-info">
                    <!-- minicart-price start -->
                    <div class="info-item">
                        <span class="product-qty">1</span>
                        <span>×</span>
                        <span class="product-price">$61.00</span>
                    </div>
                    <!-- minicart-price end -->
                </div>
                <div class="product-quantity-action">
                    <div class="product-quantity">
                        <div class="cart-plus-minus">
                            <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                            <input type="text" name="quantity" value="1">
                            <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                        </div>
                    </div>
                    <!-- minicart delete-icon start -->
                    <div class="delete-cart">
                        <a href="javascript:void(0)" class="delete-icon"><i class="feather-trash-2"></i></a>
                    </div>
                    <!-- minicart delete-icon end -->
                </div>
            </div>
        </li>
    </ul>
    <!-- minicart-total start -->
    <ul class="subtotal-area">
        <li class="subtotal-info">
            <div class="subtotal-titles">
                <!-- minicart total-title start -->
                <h6 class="cart-total">Subtotal:</h6>
                <!-- minicart total-title end -->
                <!-- minicart total-price start -->
                <span class="subtotal-price">€369,00</span>
                <!-- minicart total-price end -->
            </div>
        </li>
        <li class="mini-info">
            <!-- minicart agree-text start -->
            <label class="box-area">
                <span class="agree-text">I have read and agree with the <a href="terms-condition.html">terms & condition.</a></span>
                <input type="checkbox" class="cust-checkbox">
                <span class="cust-check"></span>
            </label>
            <!-- minicart agree-text end -->
            <!-- minicart button start -->
            <div class="cart-btn">
                <a href="cart-page.html" class="btn btn-style2">View cart</a>
                <a href="checkout-style1.html" class="btn btn-style2 checkout disabled">Checkout</a>
            </div>
            <!-- minicart button end -->
        </li>
    </ul>
    <!-- minicart-total end -->
</div>
<!-- minicart end -->
<!-- quickview modal start -->
<div class="productmodal">
    <div class="modal fade" id="quickview" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-quickview">Quickview</h6>
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="feather-x"></i></button>
                </div>
                <div class="modal-body">
                    <!-- swiper slider start -->
                    <div class="quickview-main-area">
                        <div class="quickview-slider">
                            <div class="swiper gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product-template.html"><img src="assets/img/product/p-1.jpg" class="img-fluid" alt="p-1"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="product-template.html"><img src="assets/img/product/p-2.jpg" class="img-fluid" alt="p-2"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="product-template.html"><img src="assets/img/product/p-3.jpg" class="img-fluid" alt="p-3"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="product-template.html"><img src="assets/img/product/p-4.jpg" class="img-fluid" alt="p-4"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="product-template.html"><img src="assets/img/product/p-5.jpg" class="img-fluid" alt="p-5"></a>
                                    </div>
                                </div>
                                <div class="swiper-button">
                                    <button class="quick-prev"><i class="fas fa-chevron-left"></i></button>
                                    <button class="quick-next"><i class="fas fa-chevron-right"></i></button>
                                </div>
                            </div>
                            <div class="swiper gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)"><img src="assets/img/product/p-1.jpg" class="img-fluid" alt="p-1"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)"><img src="assets/img/product/p-2.jpg" class="img-fluid" alt="p-2"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)"><img src="assets/img/product/p-3.jpg" class="img-fluid" alt="p-3"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)"><img src="assets/img/product/p-4.jpg" class="img-fluid" alt="p-4"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)"><img src="assets/img/product/p-5.jpg" class="img-fluid" alt="p-5"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper slider end -->
                        <!-- quick-view content start -->
                        <div class="quick-view-content">
                            <div class="product-rating">
                                <span class="star-rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                            <div class="product-title">
                                <h6 class="product_title">Candy nut chocolate</h6>
                            </div>
                            <!-- product-price start -->
                            <div class="price-box">
                                <span class="new-price">€11,00</span>
                                <span class="old-price">€19,00</span>
                            </div>
                            <!-- product-price end -->
                            <div class="product-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</p>
                            </div>
                            <form method="post">
                                <div class="quick-view-select variants select-option-part">
                                    <div class="variants_selects">
                                        <div class="selector-wrapper">
                                            <label>Flavor</label>
                                        </div>
                                        <div class="select-icon">
                                            <select class="single-option-selector select--wd">
                                                <option value="Sponge">Sponge</option>
                                                <option value="Pumpkin">Pumpkin</option>
                                                <option value="Velvet">Velvet</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-quantity-action">
                                    <h6>Quantity:</h6>
                                    <div class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <button class="dec qtybutton minus"><i class="fa-solid fa-minus"></i></button>
                                            <input type="text" name="quantity" value="1">
                                            <button class="inc qtybutton plus"><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="quickview-buttons">
                                    <button type="submit" class="addtocartqv"><span class="cart-title">Add to cart</span></button>
                                </div>
                            </form>
                        </div>
                        <!-- quick-view content end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- quickview modal end -->
<!-- screen-bg start -->
<div class="screen-bg"></div>
<!-- screen-bg end -->
<!-- preloader start -->
<div class="preloader">
    <div class="loader"></div>
</div>
<!-- preloader end -->
<!-- back-to-top start -->
<a href="javascript:void(0)" id="top" class="scroll">
    <span><i class="feather-arrow-up"></i></span>
</a>
<!-- back-to-top end -->
<?php
if (!empty($error)) {
    echo "<script>
    window.onload = function() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '" . $error . "',
        });
    };
    </script>";
} elseif (!empty($success)) {
    echo "<script>
    window.onload = function() {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '" . $success . "',
        });
    };
    </script>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- jquery -->
<script src="<?= $site_url ?>assets/js/jquery-3.6.3.min.js"></script>
<!-- bootstrap js -->
<script src="<?= $site_url ?>assets/js/bootstrap.min.js"></script>
<script src="<?= $site_url ?>assets/js/popper.min.js"></script>
<!-- magnific-popup js -->
<script src="<?= $site_url ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- owl js -->
<script src="<?= $site_url ?>assets/js/owl.carousel.min.js"></script>
<!-- swiper-bundle js -->
<script src="<?= $site_url ?>assets/js/swiper-bundle.min.js"></script>
<!-- slick js -->
<script src="<?= $site_url ?>assets/js/slick.min.js"></script>
<!-- waypoints js -->
<script src="<?= $site_url ?>assets/js/waypoints.min.js"></script>
<!-- counter js -->
<script src="<?= $site_url ?>assets/js/counter.js"></script>
<!-- main js -->
<script src="<?= $site_url ?>assets/js/main3.js"></script>



</body>


</html>