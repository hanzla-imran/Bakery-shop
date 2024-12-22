<?php
include "../include/pages_header.php";
include "../include/pages_navbar.php";
?>

<main>
            <!-- breadcrumb start -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="col">
                        <div class="row">
                            <div class="breadcrumb-index">
                                <!-- breadcrumb main-title start-->
                                <div class="breadcrumb-title">
                                    <h2>Your Shopping Cart</h2>
                                </div>
                                <!-- breadcrumb main-title end-->
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item-link">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item-link">
                                        <span>Your Shopping Cart</span>
                                    </li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->
            <section class="cart-page section-ptb">
                <form method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="cart-page-wrap">
                                    <div class="cart-wrap-info">
                                        <div class="cart-item-wrap">
                                            <div class="cart-title">
                                                <h6>My cart:</h6>
                                                <span class="cart-count">
                                                    <span class="cart-counter">3</span>
                                                    <span class="cart-item-title">Item</span>
                                                </span>
                                            </div>
                                            <div class="item-wrap">
                                                <ul class="cart-wrap">
                                                    <!-- cart-info start -->
                                                    <li class="item-info">
                                                        <!-- cart-img start -->
                                                        <div class="item-img">
                                                            <a href="product-template.html">
                                                                <img src="img/product-list/p-1.jpg" class="img-fluid" alt="p-1">
                                                            </a>
                                                        </div>
                                                        <!-- cart-img end -->
                                                        <!-- cart-title start -->
                                                        <div class="item-title">
                                                            <a href="product-template.html">Candy nut chocolate</a>
                                                            <span class="item-option">
                                                                <span class="pro-variant-title">Flavor:</span>
                                                                <span class="pro-variant-type">Sponge</span>
                                                            </span>
                                                            <span class="item-option">
                                                                <span class="item-price">€11,00</span>
                                                            </span>
                                                        </div>
                                                        <!-- cart-title send -->
                                                    </li>
                                                    <!-- cart-info end -->
                                                    <!-- cart-qty start -->
                                                    <li class="item-qty">
                                                        <div class="product-quantity-action">
                                                            <div class="product-quantity">
                                                                <div class="cart-plus-minus">
                                                                    <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                                                                    <input type="text" name="quantity" value="1">
                                                                    <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-remove">
                                                            <span class="remove-wrap">
                                                                <a href="javascript:void(0)" class="text-danger">Remove</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <!-- cart-qty end -->
                                                    <!-- cart-price start -->
                                                    <li class="item-price">
                                                        <span class="amount full-price">€11,00</span>
                                                    </li>
                                                    <!-- cart-price end -->
                                                </ul>
                                                <ul class="cart-wrap">
                                                    <!-- cart-info start -->
                                                    <li class="item-info">
                                                        <!-- cart-img start -->
                                                        <div class="item-img">
                                                            <a href="product-template.html">
                                                                <img src="img/product-list/p-2.jpg" class="img-fluid" alt="p-2">
                                                            </a>
                                                        </div>
                                                        <!-- cart-img end -->
                                                        <!-- cart-title start -->
                                                        <div class="item-title">
                                                            <a href="product-template.html">A bekery doughnuts</a>
                                                            <span class="item-option">
                                                                <span class="pro-variant-title">Flavor:</span>
                                                                <span class="pro-variant-type">Decadent</span>
                                                            </span>
                                                            <span class="item-option">
                                                                <span class="item-price">€21,00</span>
                                                            </span>
                                                        </div>
                                                        <!-- cart-title send -->
                                                    </li>
                                                    <!-- cart-info end -->
                                                    <!-- cart-qty start -->
                                                    <li class="item-qty">
                                                        <div class="product-quantity-action">
                                                            <div class="product-quantity">
                                                                <div class="cart-plus-minus">
                                                                    <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                                                                    <input type="text" name="quantity" value="1">
                                                                    <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                                                                </div>
                                                                <span class="dec qtybtn"></span>
                                                                <span class="inc qtybtn"></span>
                                                            </div>
                                                        </div>
                                                        <div class="item-remove">
                                                            <span class="remove-wrap">
                                                                <a href="javascript:void(0)" class="text-danger">Remove</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <!-- cart-qty end -->
                                                    <!-- cart-price start -->
                                                    <li class="item-price">
                                                        <span class="amount full-price">€21,00</span>
                                                    </li>
                                                    <!-- cart-price end -->
                                                </ul>
                                                <ul class="cart-wrap">
                                                    <!-- cart-info start -->
                                                    <li class="item-info">
                                                        <!-- cart-img start -->
                                                        <div class="item-img">
                                                            <a href="product-template.html">
                                                                <img src="img/product-list/p-3.jpg" class="img-fluid" alt="p-3">
                                                            </a>
                                                        </div>
                                                        <!-- cart-img end -->
                                                        <!-- cart-title start -->
                                                        <div class="item-title">
                                                            <a href="product-template.html">Fresh bread toast</a>
                                                            <span class="item-option">
                                                                <span class="pro-variant-title">Flavor:</span>
                                                                <span class="pro-variant-type">Vanilla</span>
                                                            </span>
                                                            <span class="item-option">
                                                                <span class="item-price">€24,00</span>
                                                            </span>
                                                        </div>
                                                        <!-- cart-title send -->
                                                    </li>
                                                    <!-- cart-info end -->
                                                    <!-- cart-qty start -->
                                                    <li class="item-qty">
                                                        <div class="product-quantity-action">
                                                            <div class="product-quantity">
                                                                <div class="cart-plus-minus">
                                                                    <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                                                                    <input type="text" name="quantity" value="1">
                                                                    <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                                                                </div>
                                                                <span class="dec qtybtn"></span>
                                                                <span class="inc qtybtn"></span>
                                                            </div>
                                                        </div>
                                                        <div class="item-remove">
                                                            <span class="remove-wrap">
                                                                <a href="javascript:void(0)" class="text-danger">Remove</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <!-- cart-qty end -->
                                                    <!-- cart-price start -->
                                                    <li class="item-price">
                                                        <span class="amount full-price">€24,00</span>
                                                    </li>
                                                    <!-- cart-price end -->
                                                </ul>
                                            </div>
                                            <div class="cart-buttons">
                                                <a href="collection.html" class="btn-style2">Continue shopping</a>
                                                <a href="cart-empty.html" class="btn-style2">Clear cart</a>
                                            </div>
                                        </div>
                                        <div class="special-notes">
                                            <label>Special instructions for seller</label>
                                            <textarea rows="10" name="note"></textarea>
                                        </div>
                                    </div>
                                    <div class="cart-info-wrap">
                                        <div class="cart-calculator cart-info">
                                            <h6>Shipping info</h6>
                                            <div class="culculate-shipping" id="shipping-calculator">
                                                <ul>
                                                    <li class="field">
                                                        <label>Country</label>
                                                        <select>
                                                            <option>India</option>
                                                            <option>Afghanistan</option>
                                                            <option>Austria </option>
                                                            <option>Belgium</option>
                                                            <option>Bhutan</option>
                                                            <option>Canada</option>
                                                            <option>France</option>
                                                            <option>Germany</option>
                                                            <option>Maldives</option>
                                                            <option>Nepal</option>
                                                        </select>
                                                    </li>
                                                    <li class="field">
                                                        <label>State</label>
                                                        <select>
                                                            <option>Gujarat</option>
                                                            <option>Andaman and Nicobar Islands</option>
                                                            <option>Andhra Pradesh</option>
                                                            <option>Bihar</option>
                                                            <option>Chandigarh</option>
                                                            <option>Delhi</option>
                                                            <option>Haryana</option>
                                                            <option>Jammu and Kashmir</option>
                                                            <option>Karnataka</option>
                                                            <option>Ladakh</option>
                                                        </select>
                                                    </li>
                                                    <li class="field cpn-code">
                                                        <label>Postal/Zip Codes</label>
                                                        <input type="text" name="q" placeholder="Zip/Postal Code">
                                                    </li>
                                                </ul>
                                                <div class="shipping-info">
                                                    <a href="javascript:void(0)" class="get-rates">Calculate</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-total-wrap cart-info">
                                            <div class="cart-total">
                                                <div class="total-amount">
                                                    <h6 class="total-title">Total</h6>
                                                    <span class="amount total-price">€56.00</span>
                                                </div>
                                                <div class="proceed-to-discount">
                                                    <input type="text" name="discount" placeholder="Discount code">
                                                </div>
                                                <div class="proceed-to-checkout">
                                                    <a href="checkout-style1.html">Checkout</a>
                                                </div>
                                                <div class="cart-payment-icon">
                                                    <a href="javascript:void(0)" class="payment-icon">
                                                        <img src="img/payment/visa.svg" class="img-fluid" alt="visa">
                                                        <img src="img/payment/master.svg" class="img-fluid" alt="master">
                                                        <img src="img/payment/express.svg" class="img-fluid" alt="express">
                                                        <img src="img/payment/paypal.svg" class="img-fluid" alt="paypal">
                                                        <img src="img/payment/diners.svg" class="img-fluid" alt="diners">
                                                        <img src="img/payment/discover.svg" class="img-fluid" alt="discover">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
            <section class="cart-category collection-category">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="collection-category">
                                <!-- cart-title start -->
                                <div class="section-capture">
                                    <div class="section-title">
                                        <div class="section-cont-title">
                                            <h2><span>Featured collection</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- cart-title end -->
                                <!-- cart-wrap slider start -->
                                <div class="collection-wrap">
                                    <div class="collection-slider swiper" id="cart-pro-template">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- product start -->
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <div class="product-image">
                                                        <a href="product-template2.html" class="pro-img">
                                                            <img src="img/product/p-1.jpg" class="img-fluid img1" alt="p-1">
                                                            <img src="img/product/p-2.jpg" class="img-fluid img2" alt="p-2">
                                                        </a>
                                                        <!-- product-label start -->
                                                        <div class="product-label">
                                                            <span class="new-sale-title">New</span>
                                                        </div>
                                                        <!-- product-label end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-img end -->
                                                    <!-- product-content start -->
                                                    <div class="product-content">
                                                        <!-- product-title start -->
                                                        <h6><a href="product-template2.html">Play game</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">$22.00</span>
                                                        </div>
                                                        <!-- product-price end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-content end -->
                                                </div>
                                                <!-- product end -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- product start -->
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <div class="product-image">
                                                        <a href="product-template2.html" class="pro-img">
                                                            <img src="img/product/p-3.jpg" class="img-fluid img1" alt="p-3">
                                                            <img src="img/product/p-4.jpg" class="img-fluid img2" alt="p-4">
                                                        </a>
                                                        <!-- product-label start -->
                                                        <div class="product-label">
                                                            <span class="new-sale-title">Sale</span>
                                                        </div>
                                                        <!-- product-label end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-img end -->
                                                    <!-- product-content start -->
                                                    <div class="product-content">
                                                        <!-- product-title start -->
                                                        <h6><a href="product-template2.html">Notebook horizon</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">$49.00</span>
                                                            <span class="old-price">$79.00</span>
                                                        </div>
                                                        <!-- product-price end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-content end -->
                                                </div>
                                                <!-- product end -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- product start -->
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <div class="product-image">
                                                        <a href="product-template2.html" class="pro-img">
                                                            <img src="img/product/p-5.jpg" class="img-fluid img1" alt="p-5">
                                                            <img src="img/product/p-6.jpg" class="img-fluid img2" alt="p-6  ">
                                                        </a>
                                                        <!-- product-label start -->
                                                        <div class="product-label">
                                                            <span class="new-sale-title">New</span>
                                                        </div>
                                                        <!-- product-label end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-img end -->
                                                    <!-- product-content start -->
                                                    <div class="product-content">
                                                        <!-- product-title start -->
                                                        <h6><a href="product-template2.html">Bluetooth speaker</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">$61.00</span>
                                                        </div>
                                                        <!-- product-price end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-content end -->
                                                </div>
                                                <!-- product end -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- product start -->
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <div class="product-image">
                                                        <a href="product-template2.html" class="pro-img">
                                                            <img src="img/product/p-7.jpg" class="img-fluid img1" alt="p-7">
                                                            <img src="img/product/p-8.jpg" class="img-fluid img2" alt="p-8">
                                                        </a>
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-img end -->
                                                    <!-- product-content start -->
                                                    <div class="product-content">
                                                        <!-- product-title start -->
                                                        <h6><a href="product-template2.html">Party speakers</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">$35.00</span>
                                                            <span class="old-price">$45.00</span>
                                                        </div>
                                                        <!-- product-price end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-content end -->
                                                </div>
                                                <!-- product end -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- product start -->
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <div class="product-image">
                                                        <a href="product-template2.html" class="pro-img">
                                                            <img src="img/product/p-9.jpg" class="img-fluid img1" alt="p-9">
                                                            <img src="img/product/p-10.jpg" class="img-fluid img2" alt="p-10">
                                                        </a>
                                                        <!-- product-label start -->
                                                        <div class="product-label">
                                                            <span class="new-sale-title">New</span>
                                                        </div>
                                                        <!-- product-label end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-img end -->
                                                    <!-- product-content start -->
                                                    <div class="product-content">
                                                        <!-- product-title start -->
                                                        <h6><a href="product-template2.html">DSLR camera</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">$21.00</span>
                                                            <span class="old-price">$25.00</span>
                                                        </div>
                                                        <!-- product-price end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-content end -->
                                                </div>
                                                <!-- product end -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- product start -->
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <div class="product-image">
                                                        <a href="product-template2.html" class="pro-img">
                                                            <img src="img/product/p-11.jpg" class="img-fluid img1" alt="p-11">
                                                            <img src="img/product/p-12.jpg" class="img-fluid img2" alt="p-12">
                                                        </a>
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-img end -->
                                                    <!-- product-content start -->
                                                    <div class="product-content">
                                                        <!-- product-title start -->
                                                        <h6><a href="product-template2.html">Large tablet</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">$10.00</span>
                                                            <span class="old-price">$15.00</span>
                                                        </div>
                                                        <!-- product-price end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-content end -->
                                                </div>
                                                <!-- product end -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- product start -->
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <div class="product-image">
                                                        <a href="product-template2.html" class="pro-img">
                                                            <img src="img/product/p-13.jpg" class="img-fluid img1" alt="p-13">
                                                            <img src="img/product/p-14.jpg" class="img-fluid img2" alt="p-14">
                                                        </a>
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-img end -->
                                                    <!-- product-content start -->
                                                    <div class="product-content">
                                                        <!-- product-title start -->
                                                        <h6><a href="product-template2.html">Smart watch</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">$59.00</span>
                                                            <span class="old-price">$74.00</span>
                                                        </div>
                                                        <!-- product-price end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-content end -->
                                                </div>
                                                <!-- product end -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- product start -->
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <div class="product-image">
                                                        <a href="product-template2.html" class="pro-img">
                                                            <img src="img/product/p-15.jpg" class="img-fluid img1" alt="p-15">
                                                            <img src="img/product/p-16.jpg" class="img-fluid img2" alt="p-16">
                                                        </a>
                                                        <!-- product-label start -->
                                                        <div class="product-label">
                                                            <span class="new-sale-title">Sale</span>
                                                        </div>
                                                        <!-- product-label end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-img end -->
                                                    <!-- product-content start -->
                                                    <div class="product-content">
                                                        <!-- product-title start -->
                                                        <h6><a href="product-template2.html">Slow juicer</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">$24.00</span>
                                                            <span class="old-price">$35.00</span>
                                                        </div>
                                                        <!-- product-price end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-content end -->
                                                </div>
                                                <!-- product end -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- product start -->
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <div class="product-image">
                                                        <a href="product-template2.html" class="pro-img">
                                                            <img src="img/product/p-17.jpg" class="img-fluid img1" alt="p-17">
                                                            <img src="img/product/p-18.jpg" class="img-fluid img2" alt="p-18">
                                                        </a>
                                                        <!-- product-label start -->
                                                        <div class="product-label">
                                                            <span class="new-sale-title">New</span>
                                                        </div>
                                                        <!-- product-label end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-img end -->
                                                    <!-- product-content start -->
                                                    <div class="product-content">
                                                        <!-- product-rating end -->
                                                        <!-- product-title start -->
                                                        <h6><a href="product-template2.html">Air fryer</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">$44.00</span>
                                                            <span class="old-price">$49.00</span>
                                                        </div>
                                                        <!-- product-price end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-content end -->
                                                </div>
                                                <!-- product end -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- product start -->
                                                <div class="single-product-wrap">
                                                    <!-- product-img start -->
                                                    <div class="product-image">
                                                        <a href="product-template2.html" class="pro-img">
                                                            <img src="img/product/p-21.jpg" class="img-fluid img1" alt="p-21">
                                                            <img src="img/product/p-22.jpg" class="img-fluid img2" alt="p-22">
                                                        </a>
                                                        <!-- product-label start -->
                                                        <div class="product-label">
                                                            <span class="new-sale-title">Sale</span>
                                                        </div>
                                                        <!-- product-label end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-img end -->
                                                    <!-- product-content start -->
                                                    <div class="product-content">
                                                        <!-- product-title start -->
                                                        <h6><a href="product-template2.html">Smart phone</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">$22.00</span>
                                                        </div>
                                                        <!-- product-price end -->
                                                        <!-- product-action start -->
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
                                                            </a>
                                                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist-product">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                                                            </a>
                                                        </div>
                                                        <!-- product-action end -->
                                                    </div>
                                                    <!-- product-content end -->
                                                </div>
                                                <!-- product end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- cart-wrap slider end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- instra start -->
            <section class="instagram-warp bt section-ptb">
                <div class="container-fluid">
                    <div class="row">
                        <div lang="col">
                            <div class="section-capture">
                                <div class="section-title">
                                    <span class="sub-title">@Our instagram</span>
                                    <h2>Follow on instagram</h2>
                                </div>
                            </div>
                            <div class="insta-slider owl-carousel owl-theme" id="insta-slider">
                                <div class="item">
                                    <a href="javascript:void(0)" class="banner-hover">
                                        <img src="img/insta/backery-instagram-01.jpg" class="img-fluid" alt="backery-instagram-01">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="banner-hover">
                                        <img src="img/insta/backery-instagram-02.jpg" class="img-fluid" alt="backery-instagram-02">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="banner-hover">
                                        <img src="img/insta/backery-instagram-03.jpg" class="img-fluid" alt="backery-instagram-03">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="banner-hover">
                                        <img src="img/insta/backery-instagram-04.jpg" class="img-fluid" alt="backery-instagram-04">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="banner-hover">
                                        <img src="img/insta/backery-instagram-05.jpg" class="img-fluid" alt="backery-instagram-05">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- instra end -->
        </main>
        
        <?php
include "../include/pages_footer.php";

?>