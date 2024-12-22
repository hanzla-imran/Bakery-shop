<section class="top-notification-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <ul class="grid-wrap">
                    <li class="grid-wrapper contact-wrap">
                        <div class="contact-link">
                            <div class="connect-wrap contact-mail">
                                <a href="mailto:demo@support.com"><i class="feather-mail"></i>
                                    <span>demo@support.com</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="grid-wrapper center-wrap">
                        <div class="offer-text">
                            <span class="icon"><i class="feather-truck"></i></span>
                            <p>Free shipping above $50</p>
                        </div>
                    </li>
                    <li class="grid-wrapper other-wrap">
                        <div class="other-link">
                            <!-- user start -->
                            <div class="noti-wrap user-wrap">
                                <div class="acc-desk-header">
                                    <div class="acc-title">
                                        <a href="../pages/login.php" class="acc-ti">
                                            <span class="user-icon"><i class="feather-user"></i></span>
                                            <span class="user-title">Account</span>
                                        </a>
                                    </div>
                                    <div class="acc-title-lg">
                                        <a href="login-account.html"><i class="feather-user"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $sql = "SELECT * FROM `wishlist`";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                $x = mysqli_num_rows($result);
                            }
                          
                            ?>
                            <!-- user end -->
                            <!-- wishlist start -->
                            <div class="noti-wrap wishlist-wrap">
                                <a href="../pages/wishlist.php" class="header-wishlist-btn">
                                    <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                    <span class="wishlist-title">Wishlist</span>
                                    <span class="wishlist-counter"><?= $x ?></span>
                                </a>
                            </div>
                            <!-- wishlist end -->
                            <!-- cart start -->
                            <?php
                            $sql = "SELECT * FROM `cart`";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                $row = mysqli_num_rows($result);
                            }
                          
                            ?>

                            <div class="noti-wrap cart-wrap">
                                <div class="shopping-widget">
                                    <div class="shopping-cart">
                                        <a href="../pages/add_to_cart.php" class="cart-count">
                                            <span class="cart-icon-wrap">
                                                <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                <span class="cart-title">My cart</span>
                                                <span class="bigcounter"><?= $row ?></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- cart end -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- top-notification end -->
<!-- header start -->
<header class="header-area">
    <div class="header-main-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-main">
                        <!-- header logo start -->
                        <div class="header-element logo">
                            <a href="index.html" class="theme-header-logo">
                                <img src="img/logo/logo.png" class="img-fluid" alt="logo">
                            </a>
                        </div>
                        <!-- header logo end -->
                        <!-- header megamenu start -->
                        <div class="header-element megamenu-content">
                            <div class="mainwrap collapse show" id="main-collapse">
                                <ul class="main-menu">
                                    <li class="menu-link">
                                        <a href="../index.php" class="link-title">
                                            <span class="sp-link-title">Home</span>
                                            <!-- <span class="menu-arrow"><i class="feather-chevron-down"></i></span> -->
                                        </a>
                                        <a href="../index.php" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Home</span>
                                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                        </a>
                                        <!-- <div class="menu-dropdown single-menu collapse" id="desk-home">
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
                                            </div> -->
                                    </li>

                                    <li class="menu-link">
                                        <a href="../pages/collection.php" class="link-title">
                                            <span class="sp-link-title">Collection</span>
                                            <!-- <span class="menu-arrow"><i class="feather-chevron-down"></i></span> -->
                                        </a>
                                        <a href="../pages/collection.php" class="link-title link-title-lg" data-bs-toggle="collapse">
                                            <span class="sp-link-title">Collection</span>
                                            <!-- <span class="menu-arrow"><i class="feather-chevron-down"></i></span> -->
                                        </a>

                                    </li>
                                    <li class="menu-link">
                                        <a href="../pages/blog.php" class="link-title">
                                            <span class="sp-link-title">Blogs</span>
                                            <!-- <span class="menu-arrow"><i class="feather-chevron-down"></i></span> -->
                                        </a>
                                        <a href="../pages/blog.php" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Blogs</span>
                                            <!-- <span class="menu-arrow"><i class="feather-chevron-down"></i></span> -->
                                        </a>

                                    </li>
                                    <li class="menu-link">
                                        <a href="../pages/about_us.php" class="link-title">
                                            <span class="sp-link-title">Pages</span>
                                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                        </a>
                                        <a href="#desk-pages" class="link-title link-title-lg" data-bs-toggle="collapse">
                                            <span class="sp-link-title">Pages</span>
                                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                        </a>
                                        <div class="menu-dropdown sub-menu collapse" id="desk-pages">
                                            <ul class="container p-0 ul">
                                                <li class="submenu-li">
                                                    <a href="../pages/about_us.php" class="sublink-title">
                                                        <span class="sp-link-title">About us</span>
                                                        <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                    </a>
                                                    <a href="#desk-about-us" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                                        <span class="sp-link-title">About us</span>
                                                        <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                    </a>
                                                    <ul class="supmenu-dropdown collapse" id="desk-about-us">
                                                        <li class="supmenu-li">
                                                            <a href="../pages/about_us.php" class="suplink-title">
                                                                <span class="sp-link-title">About us</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="#" class="sublink-title">
                                                        <span class="sp-link-title">My account</span>
                                                        <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                    </a>
                                                    <a href="#" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                                        <span class="sp-link-title">My account</span>
                                                        <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                                                    </a>
                                                    <ul class="supmenu-dropdown collapse" id="desk-account">
                                                        <li class="supmenu-li">
                                                            <a href="../pages/order.php" class="suplink-title">
                                                                <span class="supmenu-title">Order</span>
                                                            </a>
                                                        </li>
                                                        <!-- <li class="supmenu-li">
                                                        <a href="../pages/profile.php" class="suplink-title">
                                                            <span class="supmenu-title">Profile</span>
                                                        </a>
                                                    </li> -->
                                                        <li class="supmenu-li">
                                                            <a href="../pages/adress.php" class="suplink-title">
                                                                <span class="supmenu-title">Address</span>
                                                            </a>
                                                        </li>
                                                        <li class="supmenu-li">
                                                            <a href="../pages/wishlist.php" class="suplink-title">
                                                                <span class="supmenu-title">Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li class="supmenu-li">
                                                            <a href="../pages/tickets.php" class="suplink-title">
                                                                <span class="supmenu-title">My tickets</span>
                                                            </a>
                                                        </li>
                                                        <li class="supmenu-li">
                                                            <a href="../pages/billing.php" class="suplink-title">
                                                                <span class="supmenu-title">Billing info</span>
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
                            <ul class="shop-element">
                                <li class="side-wrap toggle-wrap">
                                    <!-- button toggler start -->
                                    <button class="toggler-button"><i class="feather-menu"></i></button>
                                    <!-- button toggler end -->
                                </li>
                                <li class="side-wrap search-bar-wrap">
                                    <div class="search-rap">
                                        <a class="search-crap" data-bs-toggle="collapse" href="#search-crap">
                                            <i class="feather-search"></i>
                                        </a>
                                        <div class="crap-search collapse" id="search-crap">
                                            <div class="form-search">
                                                <input type="search" name="q" value="" placeholder="Search product here..." id="search" class="input-text" aria-label="Search our store" required="" autocomplete="off">
                                                <a href="search.html" class="search-btn"><i class="feather-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="side-wrap search-wrap">
                                    <a href="#seachmodal" class="search-popup" data-bs-toggle="modal">
                                        <i class="feather-search"></i>
                                    </a>
                                    <a href="#seachmodal" class="search-popup search-popup-lg" data-bs-toggle="modal"><i class="feather-search"></i></a>
                                </li>
                                <li class="side-wrap user-wrap">
                                    <div class="acc-desk-header">
                                        <div class="acc-title">
                                            <span class="user-icon"><i class="feather-user"></i></span>
                                            <a href="../pages/login.php" class="acc-ti">Account</a>
                                        </div>
                                        <div class="acc-title-lg">
                                            <a href="../pages/login.php"><i class="feather-user"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="side-wrap wishlist-wrap">
                                    <a href="../pages/wishlist.php" class="header-wishlist-btn">
                                        <span class="wishlist-icon"><i class="feather-heart"></i></span>

                                        <span class="wishlist-title">Wishlist</span>
                                        <span class="wishlist-counter">5</span>
                                    </a>
                                </li>
                                <li class="side-wrap cart-wrap">
                                    <div class="shopping-widget">
                                        <div class="shopping-cart">
                                            <a href="../pages/add_to_cart.php" class="cart-count">
                                                <span class="cart-icon-wrap">
                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="cart-title">My cart</span>
                                                    <span class="bigcounter">8</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="side-wrap track-wrap">
                                    <div class="track-block">
                                        <a href="tel:+00123456789">
                                            <span class="icon"><i class="feather-headphones"></i></span>
                                            <span class="title-block">
                                                <span class="hot-title">Hotline:</span>+00-1234567890
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- right-block-box end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>