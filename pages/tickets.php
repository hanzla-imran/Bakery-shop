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
                                    <h2>Pro tickets</h2>
                                </div>
                                <!-- breadcrumb main-title end-->
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item-link">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item-link">
                                        <span>Pro tickets</span>
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
                                                <a href="order-history.html">
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
                                                <a href="pro-tickets.html" class="active">
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
                                <!-- profile-tickets start -->
                                <div class="profile-tickets">
                                    <div class="pro-add-title">
                                        <h4>Tickets</h4>
                                    </div>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ticket subject</th>
                                                <th>Date submitted</th>
                                                <th>Type</th>
                                                <th>Priority</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>My new ticket</td>
                                                <td>02/05/2022</td>
                                                <td>Website problem</td>
                                                <td class="delayed">High</td>
                                                <td>Open</td>
                                            </tr>
                                            <tr>
                                                <td>Another ticket</td>
                                                <td>03/06/2022</td>
                                                <td>Partner request</td>
                                                <td class="process">Medium</td>
                                                <td>Closed</td>
                                            </tr>
                                            <tr>
                                                <td>Yet another ticket</td>
                                                <td>19/04/2022</td>
                                                <td>Complaint</td>
                                                <td class="canceled">Urgent</td>
                                                <td>Closed</td>
                                            </tr>
                                            <tr class="no-bottom-border">
                                                <td>My old ticket</td>
                                                <td>05/06/2022</td>
                                                <td>Info inquiry</td>
                                                <td class="delivered">Low</td>
                                                <td>Closed</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- profile-tickets end -->
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