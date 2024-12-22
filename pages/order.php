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
                                    <h2>Order history</h2>
                                </div>
                                <!-- breadcrumb main-title end-->
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item-link">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item-link">
                                        <span>Order history</span>
                                    </li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->
            <!-- order history start -->
            <section class="order-histry-area section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="order-history">
                                <!-- order profile start -->
                                <div class="profile">
                                    <div class="order-pro">
                                        <div class="pro-img">
                                            <a href="javascript:void(0)">
                                                <img src="img/testimonial/testi-1.jpg" class="img-fluid" alt="testi-1">
                                            </a>
                                        </div>
                                        <div class="order-name">
                                            <h4>Miranda joy</h4>
                                            <span>Joined April 06, 2022</span>
                                        </div>
                                    </div>
                                    <div class="order-his-page">
                                        <ul class="profile-ul">
                                            <li class="profile-li">
                                                <a href="order-history.html" class="active">
                                                    <span>Orders</span>
                                                    <span class="pro-count">5</span>
                                                </a>
                                            </li>
                                            <li class="profile-li">
                                                <a href="profile.html">Profile</a>
                                            </li>
                                            <li class="profile-li">
                                                <a href="pro-address.html">Address</a>
                                            </li>
                                            <li class="profile-li">
                                                <a href="pro-wishlist.html">
                                                    <span>Wishlist</span>
                                                    <span class="pro-count">3</span>
                                                </a>
                                            </li>
                                            <li class="profile-li">
                                                <a href="change-password.html">
                                                    <span>Change password</span>
                                                </a>
                                            </li>
                                            <li class="profile-li">
                                                <a href="pro-tickets.html">
                                                    <span>My tickets</span>
                                                    <span class="pro-count">4</span>
                                                </a>
                                            </li>
                                            <li class="profile-li">
                                                <a href="index.html">
                                                    <span>Sign out</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- order profile start -->
                                <!-- order info start -->
                                <div class="order-info">
                                    <div class="pro-add-title">
                                        <h4>Order</h4>
                                    </div>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Date purchased</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>78A643CD409</td>
                                                <td>April 08, 2022</td>
                                                <td class="canceled">Canceled</td>
                                                <td>$760.50</td>
                                            </tr>
                                            <tr>
                                                <td>34VB5540K83</td>
                                                <td>April 11, 2022</td>
                                                <td class="process">In progress</td>
                                                <td>$540.30</td>
                                            </tr>
                                            <tr>
                                                <td>78A643CD409</td>
                                                <td>April 15, 2022</td>
                                                <td class="delayed">Delayed</td>
                                                <td>$412.00</td>
                                            </tr>
                                            <tr>
                                                <td>78A643CD409</td>
                                                <td>April 18, 2022</td>
                                                <td class="delivered">Delivered</td>
                                                <td>$805.00</td>
                                            </tr>
                                            <tr class="no-bottom-border">
                                                <td>78A643CD409</td>
                                                <td>April 21, 2022</td>
                                                <td class="delivered">Delivered</td>
                                                <td>$270.20</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- order info end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- order history end -->
        </main>
        
        <?php
include "../include/pages_footer.php";

?>