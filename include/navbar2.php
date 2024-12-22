


<!-- header start -->
<header class="header-area " style="background-color: white">
    <div class="container-fluid ">
        <div class="row">
            <div class="col">
                <div class="header-main">
                    <!-- header logo start -->
                    <div class="header-element logo">
                        <?php

                        $sql = "SELECT * FROM `website_logo` ORDER BY `id` DESC";
                        $result = mysqli_query($conn, $sql);
                        if ($result && mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result)
                        ?>
                            <a href="index-3.html" class="theme-header-logo">
                                <img src="<?= @$row['logo'] ?>" class="img-fluid main-logo" alt="logo">
                                <img src="<?= @$row['logo_2'] ?>" class="img-fluid sticky-logo" alt="logo">
                            </a>
                        <?php } ?>
                    </div>
                    <!-- header logo end -->
                    <!-- header megamenu start -->
                    <div class="header-element megamenu-content">
                        <div class="mainwrap collapse show" id="main-collapse">
                            <ul class="main-menu">
                                <li class="menu-link">
                                    <a href="../index.php" class="link-title">
                                        <span class="sp-link-title text-dark">Home</span>
                                        <span class="menu-arrow text-dark"></span>
                                    </a>
                                    <a href="#desk-home" data-bs-toggle="collapse" class="link-title link-title-lg">
                                        <span class="sp-link-title text-dark">Home</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <div class="menu-dropdown single-menu collapse" id="desk-home">
                                        <!-- <ul class="container ul p-0">
                                            <li class="singlemenu-li">
                                                <a href="index.html" class="singlelink-title">
                                                    <span class="sp-link-title">01 Home</span>
                                                </a>
                                            </li>
                                           
                                          
                                        </ul> -->
                                    </div>
                                </li>
                                <!-- <li class="menu-link">
                                    <a href="collection.html" class="link-title">
                                        <span class="sp-link-title">Product
                                            <span class="label">sale</span>
                                        </span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <a href="#desk-single-product" data-bs-toggle="collapse" class="link-title link-title-lg">
                                        <span class="sp-link-title">Product</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a> -->
                                <!-- <div class="menu-dropdown product-menu collapse" id="desk-single-product">
                                        <ul class="container ul p-0">
                                            <li class="productlink-li">
                                                <a href="collection.html" class="productlink-title">
                                                    <span class="sp-link-title">Shop page</span>
                                                </a>
                                                <a href="#desk-product-page" class="productlink-title productlink-title-lg" data-bs-toggle="collapse">
                                                    <span class="sp-link-title">Shop page</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                                </a>
                                                <ul class="productsupmenu-dropdown collapse" id="desk-product-page">
                                                    <li class="productsupmenu-li">
                                                        <a href="collection-without.html" class="productsuplink-title">
                                                            <span class="sp-link-title">01 Collection</span>
                                                        </a>
                                                    </li>
                                                    <li class="productsupmenu-li">
                                                        <a href="collection.html" class="productsuplink-title">
                                                            <span class="sp-link-title">02 Collection left</span>
                                                        </a>
                                                    </li>
                                                    <li class="productsupmenu-li">
                                                        <a href="collection-right.html" class="productsuplink-title">
                                                            <span class="sp-link-title">03 Collection right</span>
                                                        </a>
                                                    </li>
                                                    <li class="productsupmenu-li">
                                                        <a href="collection-list-without.html" class="productsuplink-title">
                                                            <span class="sp-link-title">04 Collection list</span>
                                                        </a>
                                                    </li>
                                                    <li class="productsupmenu-li">
                                                        <a href="collection-list.html" class="productsuplink-title">
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
                                                <a href="#desk-shop-page" class="productlink-title productlink-title-lg" data-bs-toggle="collapse">
                                                    <span class="sp-link-title">Product page</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                                </a>
                                                <ul class="productsupmenu-dropdown collapse" id="desk-shop-page">
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
                                                                        <h6><a href="product-template.html">Parle chocolates</a></h6>
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
                                                            <span class="menu-icon"><i class="feather-chevron-right"></i></span>
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
                                                                        <h6><a href="product-template.html">Nestle chocolates</a></h6>
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
                                                            <span class="menu-icon"><i class="feather-chevron-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> -->
                                <!-- </li> -->
                                <li class="menu-link">
                                    <a href="../pages/collection.php" class="link-title">
                                        <span class="sp-link-title text-dark">Collection</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <a href="../pages/collection.php" class="link-title link-title-lg" data-bs-toggle="collapse">
                                        <span class="sp-link-title text-dark">Collection</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!-- <div class="menu-dropdown banner-menu collapse" id="desk-single-collection">
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
                                    </div> -->
                                </li>
                                <li class="menu-link">
                                    <a href="../pages/blog.php" class="link-title">
                                        <span class="sp-link-title text-dark">Blogs</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <a href="../pages/blog.php" data-bs-toggle="collapse" class="link-title link-title-lg">
                                        <span class="sp-link-title text-dark">Blogs</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="menu-dropdown single-menu collapse" id="desk-single-blog">
                                        <ul class="container ul p-0">
                                            <!-- <li class="singlemenu-li">
                                                        <a href="blog-grid-without.html" class="singlelink-title">
                                                            <span class="sp-link-title">01 Blog grid</span>
                                                        </a>
                                                    </li> -->
                                            <!-- <li class="singlemenu-li">
                                                        <a href="blog-grid.html" class="singlelink-title">
                                                            <span class="sp-link-title">02 Blog grid left</span>
                                                        </a>
                                                    </li> -->
                                            <!-- <li class="singlemenu-li">
                                                        <a href="blog-grid-right.html" class="singlelink-title">
                                                            <span class="sp-link-title">03 Blog grid right</span>
                                                        </a>
                                                    </li> -->
                                            <!-- <li class="singlemenu-li">
                                                        <a href="article-post-without.html" class="singlelink-title">
                                                            <span class="sp-link-title">04 Article post</span>
                                                        </a>
                                                    </li> -->
                                            <!-- <li class="singlemenu-li">
                                                        <a href="article-post.html" class="singlelink-title">
                                                            <span class="sp-link-title">05 Article post left</span>
                                                        </a>
                                                    </li>
                                                    <li class="singlemenu-li">
                                                        <a href="article-post-right.html" class="singlelink-title">
                                                            <span class="sp-link-title">06 Article post right</span>
                                                        </a>
                                                    </li> -->
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-link">
                                    <a href="../pages/about_us.php" class="link-title">
                                        <span class="sp-link-title text-dark">Pages</span>
                                        <span class="menu-arrow text-dark"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <a href="#desk-pages" class="link-title link-title-lg" data-bs-toggle="collapse">
                                        <span class="sp-link-title text-dark">Pages</span>
                                        <span class="menu-arrow text-dark"><i class="feather-chevron-down "></i></span>
                                    </a>
                                    <div class="menu-dropdown sub-menu collapse" id="desk-pages">
                                        <ul class="container p-0 ul">
                                            <li class="submenu-li">
                                                <a href="../pages/about_us.php" class="sublink-title">
                                                    <span class="sp-link-title ">About us</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                </a>
                                                <a href="#desk-about-us" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                                    <span class="sp-link-title ">About us</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                </a>
                                                <ul class="supmenu-dropdown collapse" id="desk-about-us">
                                                    <li class="supmenu-li">
                                                        <a href="../pages/about_us.php" class="suplink-title">
                                                            <span class="sp-link-title ">About us</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="#" class="sublink-title">
                                                    <span class="sp-link-title ">My account</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                </a>
                                                <a href="#" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                                    <span class="sp-link-title ">My account</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                </a>
                                                <ul class="supmenu-dropdown collapse" id="desk-account">
                                                    <li class="supmenu-li">
                                                        <a href="../pages/order.php" class="suplink-title">
                                                            <span class="supmenu-title ">Order</span>
                                                        </a>
                                                    </li>
                                                    <!-- <li class="supmenu-li">
                                                        <a href="../pages/profile.php" class="suplink-title">
                                                            <span class="supmenu-title">Profile</span>
                                                        </a>
                                                    </li> -->
                                                    <li class="supmenu-li">
                                                        <a href="../pages/adress.php" class="suplink-title">
                                                            <span class="supmenu-title ">Address</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="../pages/wishlist.php" class="suplink-title">
                                                            <span class="supmenu-title ">Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="../pages/tickets.php" class="suplink-title">
                                                            <span class="supmenu-title ">My tickets</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="../pages/billing.php" class="suplink-title">
                                                            <span class="supmenu-title ">Billing info</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="../pages/track.php" class="suplink-title">
                                                            <span class="supmenu-title">Track page</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="../pages/order_complete.php" class="suplink-title">
                                                            <span class="supmenu-title">Order complete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="../pages/contact_us.php" class="sublink-title">
                                                    <span class="sp-link-title">Contact us</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                </a>
                                                <a href="#desk-contact-us" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                                    <span class="sp-link-title">Contact us</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                </a>
                                                <ul class="supmenu-dropdown collapse" id="desk-contact-us">
                                                    <li class="supmenu-li">
                                                        <a href="../pages/contact_us.php" class="suplink-title">
                                                            <span class="supmenu-title">Contact us</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="javascript:void(0)" class="sublink-title">
                                                    <span class="sp-link-title">Checkout</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                </a>
                                                <a href="#desk-checkout" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                                    <span class="sp-link-title">Checkout</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                </a>
                                                <ul class="supmenu-dropdown collapse" id="desk-checkout">
                                                    <li class="supmenu-li">
                                                        <a href="../pages/check_out.php" class="suplink-title">
                                                            <span class="supmenu-title">Checkout</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="javascript:void(0)" class="sublink-title">
                                                    <span class="sp-link-title">Features</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                </a>
                                                <a href="#desk-feature" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                                    <span class="sp-link-title">Features</span>
                                                    <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                </a>
                                                <ul class="supmenu-dropdown collapse" id="desk-feature">
                                                    <li class="supmenu-li">
                                                        <a href="../pages/cancellation.php" class="suplink-title">
                                                            <span class="supmenu-title">Cancellation</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="../pages/cart_page.php" class="suplink-title">
                                                            <span class="supmenu-title">Cart page</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="wishlist-product.html" class="suplink-title">
                                                            <span class="supmenu-title">Wishlist product</span>
                                                        </a>
                                                    </li>
                                                    <!-- <li class="supmenu-li">
                                                        <a href="sitemap.html" class="suplink-title">
                                                            <span class="supmenu-title">Sitemap</span>
                                                        </a>
                                                    </li> -->
                                                </ul>
                                            </li>
                                            <!-- <li class="submenu-li">
                                                <a href="faq.html" class="sublink-title">
                                                    <span class="sp-link-title">Faq's</span>
                                                </a>
                                                <a href="faq.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Faq's</span>
                                                </a>
                                            </li> -->
                                            <!-- <li class="submenu-li">
                                                <a href="privacy-policy.html" class="sublink-title">
                                                    <span class="sp-link-title">Privacy policy</span>
                                                </a>
                                                <a href="privacy-policy.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Privacy policy</span>
                                                </a>
                                            </li> -->
                                            <!-- <li class="submenu-li">
                                                <a href="payment-policy.html" class="sublink-title">
                                                    <span class="sp-link-title">Payment policy</span>
                                                </a>
                                                <a href="payment-policy.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Payment policy</span>
                                                </a>
                                            </li> -->
                                            <!-- <li class="submenu-li">
                                                <a href="terms-condition.html" class="sublink-title">
                                                    <span class="sp-link-title">Terms & condition</span>
                                                </a>
                                                <a href="terms-condition.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Terms & condition</span>
                                                </a>
                                            </li> -->
                                            <!-- <li class="submenu-li">
                                                <a href="return-policy.html" class="sublink-title">
                                                    <span class="sp-link-title">Return policy</span>
                                                </a>
                                                <a href="return-policy.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Return policy</span>
                                                </a>
                                            </li> -->
                                            <!-- <li class="submenu-li">
                                                <a href="404.html" class="sublink-title">
                                                    <span class="sp-link-title">404</span>
                                                </a>
                                                <a href="404.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">404</span>
                                                </a>
                                            </li> -->
                                            <!-- <li class="submenu-li">
                                                <a href="coming-soon.html" class="sublink-title">
                                                    <span class="sp-link-title">Coming soon</span>
                                                </a>
                                                <a href="coming-soon.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Coming soon</span>
                                                </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- header megamenu end -->
                    <!-- right-block-box start-->
                    <div class="header-element right-block-box">
                        <ul class="shop-element text-dark">
                            <!-- button toggler start -->
                             
                            <li class="side-wrap toggle-wrap ">
                                <button class="toggler-button "><i class="feather-menu "></i></button>
                            </li>
                            <!-- button toggler end -->
                            <!-- search-modal start -->
                            <li class="side-wrap search-wrap">
                                <a href="#seachmodal" class="search-popup" data-bs-toggle="modal">
                                    <i class="feather-search"></i>
                                </a>
                                <a href="#seachmodal" class="search-popup search-popup-lg" data-bs-toggle="modal"><i class="feather-search"></i></a>
                            </li>
                            <!-- search-modal end -->
                            <!-- login-account start -->
                            <li class="side-wrap user-wrap">
                                <div class="acc-desk-header">
                                    <?php
                                    @$user = $_SESSION['banno']['id'];

                                    if (!empty($user)) {

                                    ?>

                                        <div class="acc-title">
                                            <a href="controller/sign_out.php"><span class="user-icon"><i class="fa-solid fa-right-from-bracket"></i></span></a>
                                        </div>
                                    <?php
                                    } else {
                                    ?>


                                        <div class="acc-title">
                                            <a href="../pages/login.php"> <span class="user-icon"><i class="feather-user"></i></span></a>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="acc-title-lg">
                                        <a href="../pages/wishlist.php"><i class="feather-user"></i></a>
                                    </div>
                                </div>
                            </li>
                            <!-- login-account end -->
                            <!-- wishlist start -->
                            <li class="side-wrap wishlist-wrap">
                                <a href="../pages/wishlist.php" class="header-wishlist-btn">
                                    <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                </a>
                            </li>
                            <!-- wishlist end -->
                            <!-- cart start -->
                            <?php
                            $sql = "SELECT * FROM `cart`";
                            $result = mysqli_query($conn, $sql);

                            //   $count = count($result);
                            $row = mysqli_num_rows($result);
                            ?>
                            <li class="side-wrap cart-wrap">
                                <div class="shopping-widget">
                                    <div class="shopping-cart">
                                        <a href="../pages/add_to_cart.php" class="cart-count">
                                            <span class="cart-icon">
                                                <i class="feather-shopping-bag"></i>
                                                <span class="bigcounter"><?= $row ?></span>
                                            </span>
                                            <div class="icon-heading">
                                                <h6 class="cart-title">My cart</h6>
                                                <span>(<span class="bigcounter">8</span> item)</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- wishlist start -->

                            <!-- cart end -->
                        </ul>
                    </div>
                    <!-- right-block-box end-->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->