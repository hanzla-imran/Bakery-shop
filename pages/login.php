<?php
include "../config/database.php";
include "../controller/log_in.php";
include "../include/pages_header.php";
include "../include/pages_navbar.php";
?>

<section class="form-contact-2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- contact us title start -->
                            <div class="section-capture">
                                <div class="section-title">
                                    <h2><span>Sign In To Banno Bakery</span></h2>
                                    <div class="text-gray-400 mt-3 sub-title fs-6">New Here?
								<a href="sign_up.php" class="link-primary ">Create an Account</a>
							</div>
                                </div>
                            </div>
                            <!-- contact us title end -->
                            <!-- contact us from start -->
                            <div class="form-warp contact-detail">
                                <div class="contact-form-list">
                                    <form method="POST">
                                        <ul class="form-fill">
                                           
                                            <li class="Email">
                                                <label>Email address</label>
                                                <input type="email" name="email" autocomplete="email" placeholder="Email address">
                                            </li>
                                            <li class="Phone number">
                                                <label>Password</label>
                                                <input type="password" name="password" placeholder="********">
                                            </li>
                                        </ul>
                                        <div class="contact-submit">
                                            <button type="submit" name="buttonn" class="btn btn-style2">
                                            <span>Log In</span>
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
include "../include/pages_footer.php";

?>