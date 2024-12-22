<?php
include "../../config/database.php";
include "../../controller/add_account.php";
include "../../include/add_account_header.php";
include "../../include/dashboard/dashboard_header.php";
include "../../include/dashboard/dashboard_sidebar.php";
include "../../include/dashboard/dashboard_navbar.php";
// include "../include/pages_navbar.php";
?>

<section class="form-contact-2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                       <h2 class="text-center">Add Account</h2>
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
                                            <button type="submit" name="button" class="btn btn-primary">
                                            <span>submit</span>
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
if (!empty($error)) {
    echo "<script>
    window.onload = function() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '" . $error . "',
        });
    };
    </script>";
} elseif (!empty($success)) {
    echo "<script>
    window.onload = function() {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '" .$success . "',
        });
    };
    </script>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


            <?php
// include "../include/pages_footer.php";
include "../../include/dashboard/dashboard_footer.php";

?>

            