<?php

include "../config/database.php";
include "../include/header.php";
include "../include/navbar2.php";
?>


<section class="special-category collection-category-template section-ptb">
        <div class="container">
        <div class="section-capture">
                            <div class="section-title">
                                <span class="sub-title">Bitter chocolate</span>
                                <h2>
                                    <span>All types of Bitter chocolates</span>
                                </h2>
                            </div>
                        </div>
            <div class="">
                <div class="">
                    <div class="collection-category">
                        <!-- special title start -->
                     
                        <!-- special title end -->
                        <!-- swiper slider start -->
                        <div class="collection-wrap">
                            <div class="collection-slider swiper" id="collection-slider">
                                <div class="swiper-wrapper">

                                    <?php
                                    $sql = "SELECT * FROM `section_3` WHERE catagories =  'Bitter chocolate'";

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


                                        <div class="swiper-slide" >
                                            <div class="single-product-wrap">
                                                <!-- product-img start -->
                                                <div class="product-image">
                                                    <a href="pages/product.php?id=<?= @$id ?>" class="pro-img">
                                                        <img src="<?= @$imgee ?>" class="img-fluid img1" alt="p-51">
                                                        <img src="<?= @$hover ?>" class="img-fluid img2" alt="p-52">
                                                    </a>
                                                    <!-- product-action start -->
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist-product">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                <span class="new-price"><?= @$new ?></span>
                                                                <span class="old-price"><?= @$old ?></span>
                                                            </div>
                                                            <!-- product-price end -->
                                                        </div>
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="quickview-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
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
        
        <?php
include "../include/footer2.php";

?>