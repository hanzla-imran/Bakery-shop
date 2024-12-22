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
                                    <h2>Billing info</h2>
                                </div>
                                <!-- breadcrumb main-title end-->
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item-link">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item-link">
                                        <span>Billing info</span>
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
            <section class="contact section-ptb">
                <div class="container">
                    <div class="col">
                        <div class="row">
                            <div class="billing-area">
                                <div class="billing-title">
                                    <h4>Billing address</h4>
                                </div>
                                <div class="billing-address-1">
                                    <ul class="add-name">
                                        <li class="billing-name">
                                            <label>First name</label>
                                            <input type="text" name="name" placeholder="First name">
                                        </li>
                                        <li class="billing-name">
                                            <label>Last name</label>
                                            <input type="text" name="name" placeholder="Last name">
                                        </li>
                                    </ul>
                                    <ul class="add-name">
                                        <li class="billing-name">
                                            <label>Address 1</label>
                                            <input type="text" name="address" placeholder="Address line 1">
                                        </li>
                                        <li class="billing-name">
                                            <label>Address 2</label>
                                            <input type="text" name="address" placeholder="Address line 2">
                                        </li>
                                    </ul>
                                    <ul class="billing-location">
                                        <li class="billing-info">
                                            <label>City</label>
                                            <input type="text" name="city" placeholder="Enter your city">
                                        </li>
                                        <li class="billing-info">
                                            <label>State</label>
                                            <input type="text" name="State" placeholder="Enter your state">
                                        </li>
                                        <li class="billing-info">
                                            <label>Pincode</label>
                                            <input type="text" name="pin" placeholder="Enter your pincode">
                                        </li>
                                    </ul>
                                    <ul class="country-info">
                                        <li class="billing-country">
                                            <label>Country</label>
                                            <select>
                                                <option>Afghanistan</option>
                                                <option>Austria </option>
                                                <option>Belgium</option>
                                                <option>Bhutan</option>
                                                <option>Canada</option>
                                                <option>France</option>
                                                <option>Germany</option>
                                                <option selected>India</option>
                                                <option>Maldives</option>
                                                <option>Nepal</option>
                                            </select>
                                        </li>
                                        <li class="billing-country">
                                            <label>Phone number</label>
                                            <input type="text" name="phone" placeholder="Enter your phone number">
                                        </li>
                                    </ul>
                                </div>
                                <div class="billing-title">
                                    <h4>Shipping address</h4>
                                </div>
                                <div class="billing-address-1">
                                    <ul class="add-name">
                                        <li class="billing-name">
                                            <label>First name</label>
                                            <input type="text" name="name" placeholder="First name">
                                        </li>
                                        <li class="billing-name">
                                            <label>Last name</label>
                                            <input type="text" name="name" placeholder="Last name">
                                        </li>
                                    </ul>
                                    <ul class="add-name">
                                        <li class="billing-name">
                                            <label>Address 1</label>
                                            <input type="text" name="address" placeholder="Address line 1">
                                        </li>
                                        <li class="billing-name">
                                            <label>Address 2</label>
                                            <input type="text" name="address" placeholder="Address line 2">
                                        </li>
                                    </ul>
                                    <ul class="billing-location">
                                        <li class="billing-info">
                                            <label>City</label>
                                            <input type="text" name="city" placeholder="Enter your city">
                                        </li>
                                        <li class="billing-info">
                                            <label>State</label>
                                            <input type="text" name="State" placeholder="Enter your state">
                                        </li>
                                        <li class="billing-info">
                                            <label>Pincode</label>
                                            <input type="text" name="pin" placeholder="Enter your pincode">
                                        </li>
                                    </ul>
                                    <ul class="country-info">
                                        <li class="billing-country">
                                            <label>Country</label>
                                            <select>
                                                <option>Afghanistan</option>
                                                <option>Austria </option>
                                                <option>Belgium</option>
                                                <option>Bhutan</option>
                                                <option>Canada</option>
                                                <option>France</option>
                                                <option>Germany</option>
                                                <option selected>India</option>
                                                <option>Maldives</option>
                                                <option>Nepal</option>
                                            </select>
                                        </li>
                                        <li class="billing-country">
                                            <label>Phone number</label>
                                            <input type="text" name="phone" placeholder="Enter your phone number">
                                        </li>
                                    </ul>
                                </div>
                                <div class="next-button">
                                    <a href="index.html">Back</a>
                                    <a href="cart-page.html">Next</a>
                                </div>
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