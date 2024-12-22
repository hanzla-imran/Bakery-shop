<?php
include "../../config/database.php";
if (!empty($userid)) {
include "../../controller/logo.php";
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

                </div>
            </div>
        </div>


        <!-- Section_1 -->

        <div class="col-md-12 my-3">
            <div class="page-header-title">
                <h2 class="mb-0">Section 5</h2>
            </div>
        </div>

        <div class="col-12">
            <div class="card table-card ">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5 class="mb-0">Data</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>

                                    <th>Sno</th>
                                    <th>Id</th>
                                    <th>Logo</th>
                                    <th>Logo 2nd</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>


                                <tr>

                                    <?php

                                    $sql = "SELECT * FROM `website_logo` ORDER BY `id` DESC";
                                    $result = mysqli_query($conn, $sql);
                                    $x = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {


                                            echo "   <tr>
                                            <td>" . $x . "</td>
                                            <td>" . $row['id'] . "</td>
                        
                                             <td '><img  style ='width:100px' src='" . $row['logo'] . "' ></td>
                                             <td '><img  style ='width:100px' src='" . $row['logo_2'] . "' ></td>
                                          
                                            <td>
                                        
                                                                <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary ' data-bs-toggle='modal' data-bs-target='#exaampleMdal" . $row['id'] . "'>
                                                                
                                                                <i class='ti ti-edit f-20'></i>
                                                                
                                                                </a>   
                                                                                    
                                            </td>
                                            </tr>";
                                                                        $x += 1;
                                                                    ?>

                              
                                <div class=" modal fade" id="exaampleMdal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <label for="emailedit" class="col-sm-2 col-form-label">Logo</label>
                                                            <div class="col-sm-6">
                                                                <input type="file" class="form-control" name="uploadfileee">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <img style ='width:100px' src="<?php echo $row['logo']; ?>" alt="">
                                                            </div>
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="emailedit" class="col-sm-2 col-form-label">Logo 2nd</label>
                                                            <div class="col-sm-6">
                                                                <input type="file" class="form-control" name="upldfilee">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <img style ='width:100px' src="<?php echo $row['logo_2']; ?>" alt="">
                                                            </div>
                                                            <span class="text-danger"> </span>
                                                        </div>

                                                        <span class="text-danger"> </span>
                                                </div>
                                                <button type="submit" class="btn btn-primary my-3" name="bxn">Update Now</button>
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