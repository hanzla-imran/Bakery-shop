<?php

include "../../config/database.php";

// include "../../views/admin/logo.php";



$sql = "SELECT * FROM `website_logo` LIMIT 1";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $yx = $row['logo'];
  $xy =  $row['logo_2'];




?>
  <!-- [ Pre-loader ] End -->
  <!-- [ Sidebar Menu ] start -->
  <nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="index.php" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="<?= $xy ?>" alt="logo image" class=" w-50" />
        <?php } ?>
        <!-- <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version">v1.2.0</span> -->
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <li class="pc-item pc-caption">
            <label>Navigation</label>
            <i class="ph-duotone ph-gauge"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="../../views/admin/admin.php" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-gauge"></i>
              </span>
              <span class="pc-mtext">Dashboard</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
            <ul class="pc-submenu">
              <!-- <li class="pc-item"><a class="pc-link" href="../../views/admin/catagories.php">View Catagories</a></li> -->

            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-desktop"></i>
              </span>
              <span class="pc-mtext">Home</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              <!-- <span class="pc-badge">2</span> -->
            </a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../../views/admin/logo.php">Logo</a></li>
              <li class="pc-item"><a class="pc-link" href="../../views/admin/breadcrumb.php">Breadcrumb</a></li>
              <li class="pc-item"><a class="pc-link" href="../../views/admin/section_1.php">Section 1</a></li>
              <li class="pc-item"><a class="pc-link" href="../../views/admin/section_2.php">Section 2</a></li>
              <li class="pc-item"><a class="pc-link" href="../../views/admin/section_3.php">Section 3</a></li>
              <li class="pc-item"><a class="pc-link" href="../../views/admin/section_4.php">Section 4</a></li>
              <li class="pc-item"><a class="pc-link" href="../../views/admin/section_5.php">Section 5</a></li>
              <li class="pc-item"><a class="pc-link" href="../../views/admin/section_6.php">Section 6</a></li>
              <li class="pc-item"><a class="pc-link" href="../../views/admin/footer.php">Footer</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-grid-nine"></i>
              </span>
              <span class="pc-mtext">Catagories</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../../views/admin/catagories.php">View Catagories</a></li>

            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-shopping-cart"></i>
              </span>
              <span class="pc-mtext">Product</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../../views/admin/view_product.php">View Products</a></li>

            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-user-circle"></i>
              </span>
              <span class="pc-mtext">Users</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../../views/admin/list.php">List</a></li>
              <li class="pc-item"><a class="pc-link" href="../../views/admin/active_users.php">Active Users</a></li>
              <li class="pc-item"><a class="pc-link" href="../../views/admin/block_users.php">Block Users</a></li>
            </ul>
          </li>

        </ul>
      </div>

      <div class="card pc-user-card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="../../assets2/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
            </div>
            <div class="flex-grow-1 ms-3">
              <div class="dropdown">
                <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 me-2">
                      <h6 class="mb-0"><?= $_SESSION['banno']['name'] ?></h6>
                      <small><?= $_SESSION['banno']['email'] ?></small>
                    </div>
                    <div class="flex-shrink-0">
                      <div class="btn btn-icon btn-link-secondary avtar">
                        <i class="ph-duotone ph-windows-logo"></i>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu">
                  <ul>
                    <li>
                      <a class="pc-user-links">
                        <i class="ph-duotone ph-user"></i>
                        <span>My Account</span>
                      </a>
                    </li>
                    <li>
                      <a class="pc-user-links">
                        <i class="ph-duotone ph-gear"></i>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="pc-user-links">
                        <i class="ph-duotone ph-lock-key"></i>
                        <span>Lock Screen</span>
                      </a>
                    </li>
                    <li>
                      <a class="pc-user-links">
                        <i class="ph-duotone ph-power"></i>
                        <span>Logout</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>