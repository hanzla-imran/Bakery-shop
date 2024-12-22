<?php

include "../config/database.php";
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
                                    <h2>Order complete</h2>
                                </div>
                                <!-- breadcrumb main-title end-->
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item-link">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item-link">
                                        <span>Order complete</span>
                                    </li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->
            <!-- order-complete start -->
            <section class="section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="order-area">
                                <!-- order-price start -->
                                <div class="order-price">
                                    <ul class="total-order">
                                        <li>
                                            <span class="order-no">Order no. 1724</span>
                                            <span class="order-date"><span class="order-date">23th jan 2022 3:04 pm</span></span>
                                        </li>
                                        <li>
                                            <span class="total-price">Order total</span>
                                            <span class="amount">€136,00</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- order-price end -->
                                <!-- order-details start -->
                                <div class="order-details">
                                    <span class="text-success order-i"><i class="fa fa-check-circle"></i></span>
                                    <h4>Thank you for order</h4>
                                    <span class="order-s">Your order will ship within few hours</span>
                                    <a href="track-page.html" class="tracking-link btn btn-style">Tracking details</a>
                                </div>
                                <!-- order-details start -->
                                <!-- order-delivery start -->
                                <div class="order-delivery">
                                    <ul class="delivery-payment">
                                        <li class="delivery">
                                            <h5>Delivery address</h5>
                                            <p>Lorem ipsum</p>
                                            <span class="order-span">7003 fairway street</span>
                                            <span class="order-span">New york</span>
                                            <span class="order-span">NY 10033</span>
                                            <span class="order-span">USA</span>
                                            <span class="order-span">Mobile No :+11-123456789</span>
                                        </li>
                                        <li class="pay">
                                            <h5>Payment summary</h5>
                                            <p class="transition">Transaction No : 66282856617</p>
                                            <span class="order-span p-label">
                                                <span class="n-price">Price</span>
                                                <span class="o-price">€128,00</span>
                                            </span>
                                            <span class="order-span p-label">
                                                <span class="n-price">Shipping charge</span>
                                                <span class="o-price">€8,00</span>
                                            </span>
                                            <span class="order-span p-label">
                                                <span class="n-price">Order Total</span>
                                                <span class="o-price">€136,00</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- order-delivery start -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- order-complete end -->
        </main>
        
        <?php
include "../include/pages_footer.php";

?>