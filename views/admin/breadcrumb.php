<?php
include "../../config/database.php";
if (!empty($userid)) {
include "../../controller/breadcrumb.php";
include "../../controller/section_1.php";
include "../../controller/section_3.php";
include "../../include/dashboard/dashboard_header.php";
include "../../include/dashboard/dashboard_sidebar.php";
include "../../include/dashboard/dashboard_navbar.php";
?>



<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">breadcrumb</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Breadcrumb</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card table-card ">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5 class="mb-0">Data</h5>
                    <button class="btn btn-sm btn-link-primary">View All</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Id</th>
                                    <th>Product_name</th>
                                    <th>Heading</th>
                                    <th>Data</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Kkal</th>
                                    <th>Sqrl</th>
                                    <th>Fat</th>
                                    <th>Carbs</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $sql = "SELECT * FROM `breadcrum` ORDER BY `id` DESC";
                                    $result = mysqli_query($conn, $sql);
                                    $x = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "   <tr>
                <td>" . $x . "</td>
                <td>" . $row['id'] . "</td>
                <td>" . $row['product_name'] . "</td>
                <td>" . $row['heading'] . "</td>
                <td>" . $row['data'] . "</td>
                <td '><img  style ='width:100px' src='" . $row['img'] . "' ></td>
                <td>" . $row['price'] . "</td>
                <td>" . $row['kkal'] . "</td>
                <td>" . $row['sqrl'] . "</td>
                <td>" . $row['fat'] . "</td>
                <td>" . $row['carbs'] . "</td>
                <td>
            
                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary ' data-bs-toggle='modal' data-bs-target='#exampleModal" . $row['id'] . "'>
                                    
                                    <i class='ti ti-edit f-20'></i>
                                    
                                    </a>
                                    
                                   


                </td>
                </tr>";
                                        $x += 1;
                                    ?>
                                        <div class="modal fade" id="exampleModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container my-2">
                                                            <form class="w-100" method="POST" enctype="multipart/form-data">
                                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Product name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="producted" value="<?= $row['product_name'] ?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Heading</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="headinged" value="<?= $row['heading'] ?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Data</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="dataed" value="<?= $row['data'] ?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">image</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="file" class="form-control" name="uploadfile" >
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <img style ='width:100px' src="<?= $row['img'] ?>" alt="">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Price</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="priceed" value="<?= $row['price'] ?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Kkal</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="kkaled" value="<?= $row['kkal'] ?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Sqrl</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="sqrled" value="<?= $row['sqrl'] ?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Fat</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="fated" value="<?= $row['fat'] ?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Carbs</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="carbsed" value="<?= $row['carbs'] ?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>

                                                                <span class="text-danger"> </span>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary my-3" name="button">Update Now</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>


                <?php
                                    }
                ?>
                </tr>
                </tbody>
                </table>
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