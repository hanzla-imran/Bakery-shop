<?php
include "../include/pages_header.php";
include "../include/pages_navbar.php";
?>

<!-- main section start-->
<main>
    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb main-title start-->
                        <div class="breadcrumb-title">
                            <h2>Pro address</h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item-link">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item-link">
                                <span>Pro address</span>
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
                                        <a href="pro-address.html" class="active">Address</a>
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
                        <!-- profile-form start -->
                        <div class="profile-address">
                            <form>
                                <div class="pro-add-title">
                                    <h4>Contact address</h4>
                                </div>
                                <ul class="add-label-input">
                                    <li>
                                        <label>Company</label>
                                        <input type="text" name="name" placeholder="Company">
                                    </li>
                                    <li>
                                        <label>Country</label>
                                        <select>
                                            <option>United states</option>
                                            <option>India</option>
                                            <option>Canada</option>
                                            <option>France</option>
                                            <option>Germany</option>
                                        </select>
                                    </li>
                                </ul>
                                <ul class="add-label-input">
                                    <li>
                                        <label>City</label>
                                        <select>
                                            <option>Choose city</option>
                                            <option>New york</option>
                                            <option>Berlin</option>
                                            <option>Geneve</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label>Zip Code</label>
                                        <input type="text" name="name" placeholder="Zip code">
                                    </li>
                                </ul>
                                <ul class="add-label-input">
                                    <li>
                                        <label>Address 1</label>
                                        <input type="text" name="name" placeholder="Address 1">
                                    </li>
                                    <li>
                                        <label>Address 2</label>
                                        <input type="text" name="name" placeholder="Address 2">
                                    </li>
                                </ul>
                                <ul class="pro-submit">
                                    <li class="label-info">
                                        <label class="box-area">
                                            <span class="text">Same as contact address</span>
                                            <input type="checkbox" class="cust-checkbox">
                                            <span class="cust-check"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <a href="pro-wishlist.html" class="btn btn-style2 checkout disabled">Update address</a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <!-- profile-form end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order history end -->
</main>
<!-- main section end-->

<?php
include "../include/pages_footer.php";

?>