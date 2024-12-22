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
                                    <h2>Contact us</h2>
                                </div>
                                <!-- breadcrumb main-title end-->
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item-link">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item-link">
                                        <span>Contact us</span>
                                    </li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->
            <section class="form-contact-3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="about-content">
                                <!-- about title start -->
                                <div class="section-capture">
                                    <div class="section-title">
                                        <span class="sub-title">Hear from you</span>
                                        <h2><span>Get in touch</span></h2>
                                    </div>
                                </div>
                                <!-- about title end -->
                                <!-- contact-detail start -->
                                <div class="get-info contact-detail">
                                    <ul class="contact-info-list">
                                        <li class="ftcon-li">
                                            <span class="con-icon"><i class="bi bi-geo"></i></span>
                                            <span class="con-add contact-block">
                                                <span>7882, Reliance GIDC</span>
                                                <span>Chowk bazzar, New York</span>
                                            </span>
                                        </li>
                                        <li class="ftcon-li">
                                            <span class="con-icon"><i class="bi bi-telephone"></i></span>
                                            <div class="contact-block">
                                                <a href="tel:(+91)123456789" class="con-add">(+00) 1 23 45 67 89</a>
                                                <a href="tel:(+91)123456789" class="con-add">(+1) 1 23 45 67 89</a>
                                            </div>
                                        </li>
                                        <li class="ftcon-li">
                                            <span class="con-icon"><i class="bi bi-envelope"></i></span>
                                            <div class="contact-block">
                                                <a href="mailto:demo@support.com" class="con-add">demo@support.com</a>
                                                <a href="mailto:support@spacingtech.com" class="con-add">support@spacingtech.com</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- contact-detail end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="google-map">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="contact-map">
                                <div class="google-map-area">
                                    <div class="map" id="map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3178.943120902953!2d-7.963813984699448!3d37.177822679872456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ab161c81fb0ff%3A0x867380c80c46b1d!2sAmendoeira%20Organics!5e0!3m2!1sen!2spt!4v1631184615272!5m2!1sen!2spt" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="form-contact-2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- contact us title start -->
                            <div class="section-capture">
                                <div class="section-title">
                                    <span class="sub-title">Contact now</span>
                                    <h2><span>Drop us message</span></h2>
                                </div>
                            </div>
                            <!-- contact us title end -->
                            <!-- contact us from start -->
                            <div class="form-warp contact-detail">
                                <div class="contact-form-list">
                                    <form method="post">
                                        <ul class="form-fill">
                                            <li class="Name">
                                                <label>Name</label>
                                                <input type="text" name="q" autocomplete="name" placeholder="Name">
                                            </li>
                                            <li class="Email">
                                                <label>Email address</label>
                                                <input type="email" name="q" autocomplete="email" placeholder="Email address">
                                            </li>
                                            <li class="Phone number">
                                                <label>Phone number</label>
                                                <input type="tel" name="q" placeholder="Phone number">
                                            </li>
                                            <li class="Message">
                                                <label>Message</label>
                                                <textarea rows="10" placeholder="Message" class="custom-textarea"></textarea>
                                            </li>
                                        </ul>
                                        <div class="contact-submit">
                                            <button type="submit" class="btn btn-style2">
                                            <span>Send</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- contact us from start -->
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php
include "../include/pages_footer.php";

?>