<?php

include "../config/database.php";
include "../include/pages_header.php";
include "../include/pages_navbar.php";
include "../controller/product.php";
include "../controller/checkout.php";

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
                            <h2>Checkout 1</h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item-link">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item-link">
                                <span>Checkout 1</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <section class="section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="checkout-area">
                        <div class="billing-area">
                            <form>
                                <h2>Billing details</h2>
                                <div class="billing-form">
                                    <ul class="billing-ul input-2">
                                        <li class="billing-li input">
                                            <label>First name</label>
                                            <input type="text" name="f-name" placeholder="First name">
                                        </li>
                                        <li class="billing-li">
                                            <label>Last name</label>
                                            <input type="text" name="l-name" placeholder="Last name">
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>Company name (Optional)</label>
                                            <input type="text" name="company details" placeholder="Company name">
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>Country</label>
                                            <select>
                                                <option>Select a country</option>
                                                <option>United country</option>
                                                <option>Russia</option>
                                                <option>italy</option>
                                                <option>France</option>
                                                <option>Ukraine</option>
                                                <option>Germany</option>
                                                <option>india</option>
                                                <option>Australia</option>
                                                <option>canada</option>
                                            </select>
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>Street address</label>
                                            <input type="text" name="address" placeholder="Street address">
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>Apartment,suite,unit etc. (Optional)</label>
                                            <input type="text" name="--">
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>Town / City</label>
                                            <input type="text" name="city">
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>State / Country</label>
                                            <input type="text" name="--">
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>Postcode / Zip</label>
                                            <input type="text" name="--">
                                        </li>
                                    </ul>
                                    <ul class="billing-ul input-2">
                                        <li class="billing-li">
                                            <label>Email address</label>
                                            <input type="text" name="mail" placeholder="Email address">
                                        </li>
                                        <li class="billing-li">
                                            <label>Phone number</label>
                                            <input type="text" name="phone" placeholder="Phone number">
                                        </li>
                                    </ul>
                                </div>
                            </form>
                            <div class="billing-details">
                                <form>
                                    <h2>Shipping details</h2>
                                    <ul class="shipping-form pro-submit">
                                        <li class="check-box label-info">
                                            <label class="box-area">
                                                <span class="text">Ship to a different address?</span>
                                                <input type="checkbox" class="cust-checkbox">
                                                <span class="cust-check"></span>
                                            </label>
                                        </li>
                                        <li class="comment-area">
                                            <label>Order notes(Optional)</label>
                                            <textarea name="comments" rows="5" cols="80"></textarea>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="order-area">
                            <div class="check-pro">
                                <h2>In your cart (2)</h2>
                                <ul class="check-ul">
                                    <?php
                                    $total_sum = 0;
                                    $sql = "SELECT checkout_1.product_id,checkout_1.user_id,checkout_1.quantity,checkout_1.price, section_3.image, section_3.product
                                            FROM checkout_1
                                            INNER JOIN section_3 ON checkout_1.product_id = section_3.id";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            if ($_SESSION['banno']['id']  == $row['user_id']) {
                                            
                                            $product_id = $row['product_id'];
                                            $image = $row['image'];
                                            $product = $row['product'];
                                            $new_price = $row['price'];
                                            // $catagories = $row['catagories'];
                                            $quantity =  $row['quantity'];
                                            $sum = $quantity *  $new_price;
                                            $total_sum += $sum;
                                    ?>
                                            <li>
                                                <div class="check-pro-img">
                                                    <a href="product-template.html">
                                                        <img width="100" src="<?= $image ?>">
                                                    </a>
                                                </div>
                                                <div class="check-content">
                                                    <a href="product-template.html"><?= $product ?></a>
                                                    <span class="check-code-blod">
                                                        <span>Product code:</span>
                                                        <span>CA70051541B</span>
                                                    </span>
                                                    <span class="check-qty"><?= $quantity ?> X</span>
                                                    <span class="check-price">$<?= $new_price ?></span>
                                                </div>
                                            </li>
                                    <?php
                                        }
                                    }
                                }
                                    ?>

                                </ul>
                            </div>
                            <h2>Your order</h2>
                            <ul class="order-history">
                                <li class="order-details">
                                    <span>Product:</span>
                                    <span>Total</span>
                                </li>
                                <!-- <li class="order-details">
                                    <span>Candy nut chocolate</span>
                                    <span>€44,00</span>
                                </li>
                                <li class="order-details">
                                    <span>A bekery doughnutss</span>
                                    <span>€84,00</span>
                                </li> -->
                                <li class="order-details">
                                    <span>Subtotal</span>
                                    <span>$<?= @$total_sum ?></span>
                                </li>
                                <li class="order-details">
                                    <span>Shipping Charge</span>
                                    <span>Free shipping</span>
                                </li>
                                <li class="order-details">
                                    <span>Total</span>
                                    <span>$<?= @$total_sum ?></span>
                                </li>
                            </ul>
                            <form>
                                <ul class="order-form pro-submit">
                                    <li class="label-info">
                                        <label class="box-area">
                                            <span class="text">Direct bank transfer</span>
                                            <input type="checkbox" class="cust-checkbox">
                                            <span class="cust-check"></span>
                                        </label>
                                    </li>
                                    <li class="label-info">
                                        <label class="box-area">
                                            <span class="text">Paypal</span>
                                            <input type="checkbox" class="cust-checkbox">
                                            <span class="cust-check"></span>
                                        </label>
                                    </li>
                                    <li class="label-info">
                                        <label class="box-area">
                                            <span class="text">Cash on hand</span>
                                            <input type="checkbox" class="cust-checkbox">
                                            <span class="cust-check"></span>
                                        </label>
                                    </li>
                                    <li class="pay-icon">
                                        <a href="javascript:void(0)"><i class="fa-solid fa-credit-card"></i></a>
                                        <a href="javascript:void(0)"><i class="fa-brands fa-cc-visa"></i></a>
                                        <a href="javascript:void(0)"><i class="fa-brands fa-cc-paypal"></i></a>
                                        <a href="javascript:void(0)"><i class="fa-brands fa-cc-mastercard"></i></a>
                                    </li>
                                </ul>
                            </form>
                            <div class="checkout-btn">
                                <a href="order-complete.html" class="btn-style checkout disabled">Place order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include "../include/pages_footer.php";

?>