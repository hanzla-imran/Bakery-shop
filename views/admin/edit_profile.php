<?php
include "../../config/database.php";
include "../../controller/sign_up.php";
include "../../include/add_account_header.php";
// include "../include/pages_navbar.php";
?>

<section class="form-contact-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- contact us title start -->
                <div class="section-capture">
                    <div class="section-title">
                        <h2><span>Edit profile</span></h2>
                        <!-- <div class="text-gray-400 mt-3 sub-title fs-6">Already have an account?
								<a href="login.php" class="link-primary ">Sign in here</a>
							</div> -->
                    </div>
                </div>
                <!-- contact us title end -->
                <!-- contact us from start -->
                <div class="form-warp contact-detail">
                    <div class="contact-form-list">
                        <form method="POST" enctype="multipart/form-data">
                            <ul class="form-fill">
                                <div class="row">
                                    

                                    <li class="Name " style="width: 50% importa;">
                                        <label>Name</label>
                                        <input type="text" name="name" value="<?= $_SESSION['banno']['name'] ?>">
                                    </li>
                                    <li class="Name">
                                        <label>Last Name</label>
                                        <input type="text" name="last-name" value="<?= $_SESSION['banno']['last_name'] ?>">
                                    </li>
                                    <li class="Phone number">
                                        <label>Phone number</label>
                                        <input type="tel" name="phone" value="<?= $_SESSION['banno']['phone'] ?>">
                                    </li>
                                    <input type="hidden" name="profileid" value="<?= $_SESSION['banno']['id'] ?>">

                                    <li class="profile picture">
                                        <label>Profil picture</label>
                                        <input class="form-control" type="file" name="uploadfile">
                                    </li>
                                </div>
                            </ul>
                            <div class="contact-submit">
                                <button type="submit" name="buton" class="btn btn-style2">
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
            text: '" . $success . "',
        });
    };
    </script>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php
// include "../include/pages_footer.php";


?>