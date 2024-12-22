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
                                    <h2>Traking</h2>
                                </div>
                                <!-- breadcrumb main-title end-->
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item-link">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item-link">
                                        <span>Traking</span>
                                    </li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->
            <!-- tracking start -->
            <section class="section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="track-area">
                                <div class="track-price">
                                    <ul class="track-order">
                                        <li>
                                            <h4>Your order id is: 121</h4>
                                        </li>
                                        <li>
                                            <span class="track-status">Status:</span>
                                            Picked by courier
                                        </li>
                                    </ul>
                                </div>
                                <div class="track-main">
                                    <div class="track">
                                        <div class="step active">
                                            <span class="icon"><i class="fa fa-check"></i></span>
                                            <span class="text">Order confirmed</span>
                                        </div>
                                        <div class="step active">
                                            <span class="icon"><i class="fa fa-user"></i></span>
                                            <span class="text">Picked by courier</span>
                                        </div>
                                        <div class="step">
                                            <span class="icon"><i class="fa fa-truck"></i></span>
                                            <span class="text"> On the way </span>
                                        </div>
                                        <div class="step">
                                            <span class="icon"><i class="fa fa-archive"></i></span>
                                            <span class="text">Ready for pickup</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tracking end -->
        </main>
        
        <?php
include "../include/pages_footer.php";

?>