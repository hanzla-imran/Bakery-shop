<?php
include "../../config/database.php";
if (!empty($userid)) {
include "../../controller/section_5.php";
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
        
        <hr>

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
                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Data</a>
                    <!-- modal -->

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Member</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="container my-2">
                                                            <form class="w-100" method="POST" enctype="multipart/form-data">
                                                              
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">icon</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="icon">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Heading</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="hedng">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Link</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="lnk">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <span class="text-danger"> </span>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary my-3" name="bne">Update Now</button>
                                                        <a href="https://fontawesome.com/search" class="btn btn-primary">More Icons</a>
                                                        </form>
                                </div>

                            </div>
                        </div>
                    </div>




                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Id</th>
                                    <th>Icon</th>
                                    <th>Heading</th>
                                    <th>Link</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $sql = "SELECT * FROM `section_5` ORDER BY `id` DESC";
                                    $result = mysqli_query($conn, $sql);
                                    $x = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "   <tr>
                <td>" . $x . "</td>
                <td>" . $row['id'] . "</td>
                <td>" . $row['icon'] . "</td>
                <td>" . $row['heading'] . "</td>
                <td>" . $row['link'] . "</td>
                
               
                <td>
            
                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary ' data-bs-toggle='modal' data-bs-target='#exaampleModal" . $row['id'] . "'>
                                    
                                    <i class='ti ti-edit f-20'></i>
                                    
                                    </a>   

                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm' data-bs-toggle='modal' data-bs-target='#staticBackdrop" . $row['id'] . "'>
                                   
                                   <i class='ti ti-trash f-20'></i>
                                </a>
                </td>
                </tr>";
                                        $x += 1;
                                    ?>
                                        <div class="modal fade" id="exaampleModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">icon</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="icon" value="<?=@$row['icon']?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Heading</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="hedng" value="<?=@$row['heading']?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Link</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="lnk" value="<?=@$row['link']?>">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <span class="text-danger"> </span>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary my-3" name="bttn">Update Now</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- modal 2 -->
                                        <div class="modal fade" id="staticBackdrop<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?= $row['id'] ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel<?= $row['id'] ?>">Do you really want to delete this data?</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form method="POST">
                                                                <input type="hidden" class="form-control" value="<?= $row['id'] ?>" name="id">
                                                                <button type="submit" class="btn btn-danger" name="deel">Yes, Delete</button>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
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


        <hr>



      

       
    </div>




</div>






<?php
include "../../include/dashboard/dashboard_footer.php";
} else {
    header("Location: ../../pages/login.php");
    exit();
  }
?>