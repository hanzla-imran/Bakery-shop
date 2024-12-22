<?php
include "../config/database.php";
include "../controller/sign_up.php";
include "../include/pages_header.php";
// include "../include/pages_navbar.php";
?>

<section class="form-contact-2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- contact us title start -->
                            <div class="section-capture">
                                <div class="section-title">
                                    <h2><span>Sign Up To Banno Bakery</span></h2>
                                    <div class="text-gray-400 mt-3 sub-title fs-6">Already have an account?
								<a href="login.php" class="link-primary ">Sign in here</a>
							</div>
                                </div>
                            </div>
                            <!-- contact us title end -->
                            <!-- contact us from start -->
                            <div class="form-warp contact-detail">
                                <div class="contact-form-list">
                                    <form method="POST">
                                        <ul class="form-fill">
                                            <div class="row">

                                            
                                        <li class="Name " style="width: 50% importa;">
                                                <label>Name</label>
                                                <input type="text" name="first-name" autocomplete="name" placeholder="Name">
                                            </li>
                                        <li class="Name">
                                                <label>Last Name</label>
                                                <input type="text" name="last-name" autocomplete="name" placeholder="Name">
                                            </li>
                                            <li class="Email">
                                                <label>Email address</label>
                                                <input type="email" name="email" autocomplete="email" placeholder="Email address">
                                            </li>
                                            <li class="Phone number">
                                                <label>Phone number</label>
                                                <input type="tel" name="phone" placeholder="Phone number">
                                            </li>
                                            <li class="Phone number">
                                                <label>Password</label>
                                                <input type="password" name="password" placeholder="********">
                                            </li>
                                            <li class="Phone number">
                                                <label>Confirm Password</label>
                                                <input type="password" name="confirm-password" placeholder="********">
                                            </li>
                                            </div>
                                        </ul>
                                        <div class="contact-submit">
                                            <button type="submit" name="button" class="btn btn-style2">
                                            <span>sign up</span>
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
            <?php
// include "../include/pages_footer.php";


?>

            