<?php

include "../config/database.php";
include "../include/pages_header.php";
include "../include/pages_navbar.php";
include "../controller/wishlist.php";
include "../controller/product.php";
// $prduct_id =  $_GET['id'];

// $sql =  "SELECT * FROM section_3 WHERE id = '$prduct_id'";
// $result =  mysqli_query($conn, $sql);
// $section_3 =  mysqli_fetch_assoc($result);
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
                            <h2>Pro wishlist</h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item-link">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item-link">
                                <span>Pro wishlist</span>
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
                                        <a href="pro-wishlist.html" class="active">
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
                        <!-- profile-wishlist start -->
                        <div class="profile-wishlist">
                            <div class="pro-add-title">
                                <h4>Wishlist</h4>
                            </div>
                            <div class="wishlist-area">
                                <div class="wishlist-details">
                                    <div class="wishlist-item">
                                        <span class="wishlist-head">My wishlist:</span>
                                        <span class="sp-link-title">3 item</span>
                                    </div>

                                    <?php
                                    $total_sum = 0;
                                    $sql = "SELECT wishlist.product_id, section_3.image, section_3.new_price, section_3.catagories , section_3.product
                                            FROM wishlist
                                            INNER JOIN section_3 ON wishlist.product_id = section_3.id";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $product_id = $row['product_id'];
                                            $image = $row['image'];
                                            $product = $row['product'];
                                            $new_price = $row['new_price'];
                                            $catagories = $row['catagories'];
                                            // $quantity =  $row['quantity'];
                                            // $sum = $quantity *  $new_price;
                                            // $total_sum += $sum;
                                    ?>
                                           <form method="POST">
                                           <input type="hidden" name="product_id" value="<?= @$product_id ?>">
                                           <input type="hidden" name="quantity" value="1">
                                                <div class="wishlist-all-pro">
                                                    <div class="wishlist-pro">
                                                        <div class="wishlist-pro-image">
                                                            <a href="product.html">
                                                                <img src="<?= $image ?>" class="img-fluid" alt="p-1">
                                                            </a>
                                                        </div>
                                                        <div class="pro-details">
                                                            <h4>
                                                                <a href="product.html"><?= $product ?></a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="qty-item">
                                                    <button type="submit" name="add_to_cart" class="btn add-to-cart ajax-spin-cart">
                                                              
                                                              <!-- <span class="tooltip-text">Wishlist</span> -->
                                                              <!-- <span class="quickview-icon"><i class="feather-eye"></i></span> -->
                                                          <a  class="add-wishlist">    Add to cart</a>
                                                </button>
                                                        <!-- <a href="cart-page.html" class="add-wishlist">Add to cart</a> -->
                                                        <a href="checkout-1.html" class="add-wishlist">Buy now</a>
                                                        <a  href="../controller/wishlist.php?id=<?=$product_id?>" class="add-wishlist">
                                                            Del
                                                        </a>
                                                    </div>
                                                    <div class="all-pro-price">
                                                        <span class="new-price">$<?= $new_price ?></span>
                                                        <span class="old-price">
                                                            <del>$91.00</del>
                                                        </span>
                                                        <span><i class="fa fa-heart text-danger"></i></span>
                                                    </div>
                                                </div>
                                                </form>
                                    <?php
                                        }
                                    }
                                    ?>


                                </div>
                            </div>


                        </div>
                        <!-- profile-wishlist end -->
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