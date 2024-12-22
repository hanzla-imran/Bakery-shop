<?php

include "../../config/database.php";
include "../../include/dashboard/dashboard_header.php";
if (!empty($userid)) {
  include "../../include/dashboard/dashboard_sidebar.php";
  include "../../include/dashboard/dashboard_navbar.php";
?>

  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <!-- <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Home</li>
              </ul> -->
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Dashboard</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="card statistics-card-1 overflow-hidden">
            <div class="card-body">
              <img src="../../assets2/images/widget/img-status-4.svg" alt="img" class="img-fluid img-bg" />
              <h5 class="mb-4">Total Users</h5>
              <div class="d-flex align-items-center mt-3">

                <?php
                $total_users = "SELECT * FROM `banno` ORDER BY `id`";

                $rult = mysqli_query($conn, $total_users);
                if ($numb = mysqli_num_rows($rult)) {
                  echo "  <h3 class='f-w-300 d-flex align-items-center m-b-0'>$numb</h3>";
                } else {

                  echo "No Data";
                }
                ?>

                <!-- <h3 class="f-w-300 d-flex align-items-center m-b-0">$249.95</h3> -->
                <!-- <span class="badge bg-light-success ms-2">36%</span> -->
              </div>
              <!-- <p class="text-muted mb-2 text-sm mt-3">You made an extra 35,000 this daily</p> -->
              <!-- <div class="progress" style="height: 7px">
                  <div
                    class="progress-bar bg-brand-color-3"
                    role="progressbar"
                    style="width: 75%"
                    aria-valuenow="75"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div> -->
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="card statistics-card-1 overflow-hidden">
            <div class="card-body">
              <img src="../../assets2/images/widget/img-status-9.svg" alt="img" class="img-fluid img-bg" />
              <h5 class="mb-4">Active Users</h5>
              <div class="d-flex align-items-center mt-3">


                <?php
                $total_users = "SELECT * FROM `banno` WHERE `status` = 'Active'";

                $rult = mysqli_query($conn, $total_users);
                if ($numb = mysqli_num_rows($rult)) {
                  echo "  <h3 class='f-w-300 d-flex align-items-center m-b-0'>$numb</h3>";
                } else {

                  echo "No Data";
                }
                ?>

                <!-- <h3 class="f-w-300 d-flex align-items-center m-b-0">$249.95</h3> -->
                <!-- <span class="badge bg-light-primary ms-2">20%</span> -->
              </div>
              <!-- <p class="text-muted mb-2 text-sm mt-3">You made an extra 35,000 this Monthly</p> -->
              <!-- <div class="progress" style="height: 7px">
                  <div
                    class="progress-bar bg-brand-color-3"
                    role="progressbar"
                    style="width: 75%"
                    aria-valuenow="75"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div> -->
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="card statistics-card-1 overflow-hidden bg-brand-color-3">
            <div class="card-body">
              <img src="../../assets2/images/widget/img-status-66.svg" alt="img" class="img-fluid img-bg" />
              <h5 class="mb-4 text-white">Block Users</h5>

              <div class="d-flex align-items-center mt-3">
                <?php
                $total_users = "SELECT * FROM `banno` WHERE `status` = 'Block'";

                $rult = mysqli_query($conn, $total_users);
                if ($numb = mysqli_num_rows($rult)) {
                  echo "  <h3 class='f-w-300 d-flex align-items-center m-b-0'>$numb</h3>";
                } else {

                  echo "No Data";
                }
                ?>
                <!-- <h3 class="text-white f-w-300 d-flex align-items-center m-b-0">$249.95</h3> -->
              </div>
              <!-- <p class="text-white text-opacity-75 mb-2 text-sm mt-3">You made an extra 35,000 this Daily</p> -->
              <!-- <div class="progress bg-white bg-opacity-10" style="height: 7px">
                  <div
                    class="progress-bar bg-white"
                    role="progressbar"
                    style="width: 75%"
                    aria-valuenow="75"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div> -->
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  </div>

<?php
  include "../../include/dashboard/dashboard_footer.php";
} else {

  header("Location: ../../pages/login.php");
  exit();
}
?>