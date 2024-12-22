<?php
include "../../config/database.php";
if (!empty($userid)) {
include "../../controller/footer.php";
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
                <h2 class="mb-0">Footer Headings</h2>
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
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                    <th>Heading 5</th>
                                    <th>Heading 6</th>
                                    <th>Link</th>
                                    <th>Data</th>
                                    <th>Heading 7</th>
                                    <th>Link 2</th>
                                    <th>Dat 2</th>
                                    <th>Heading 8</th>
                                    <th>Data 3</th>
                                    <th>Heading 9</th>
                                    <th>Data 4</th>
                                    <th>Button Name</th>
                                    <th>Link 3</th>
                                    <th>Img 1</th>
                                    <th>Img 2</th>
                                    <th>Img 3</th>
                                    <th>Img 4</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $sql = "SELECT * FROM `footer_headinds` ORDER BY `id` DESC";
                                    $result = mysqli_query($conn, $sql);
                                    $x = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "   <tr>
                <td>" . $x . "</td>
                <td>" . $row['id'] . "</td>
                <td>" . $row['h_1'] . "</td>
                <td>" . $row['h_2'] . "</td>
                <td>" . $row['h_3'] . "</td>
                <td>" . $row['h_4'] . "</td>
                <td>" . $row['h_5'] . "</td>
                <td>" . $row['h_6'] . "</td>
                <td>" . $row['link'] . "</td>
                <td>" . $row['data'] . "</td>
                <td>" . $row['h_7'] . "</td>
                <td>" . $row['link_2'] . "</td>
                <td>" . $row['data_2'] . "</td>
                <td>" . $row['h_8'] . "</td>
                <td>" . $row['data_3'] . "</td>
                <td>" . $row['h_9'] . "</td>
                <td>" . $row['data_4'] . "</td>
                <td>" . $row['btn'] . "</td>
                <td>" . $row['link_3'] . "</td>
                 <td '><img  style ='width:100px' src='" . $row['img_1'] . "' ></td>
                 <td '><img  style ='width:100px' src='" . $row['img_2'] . "' ></td>
                 <td '><img  style ='width:100px' src='" . $row['img_3'] . "' ></td>
                 <td '><img  style ='width:100px' src='" . $row['img_4'] . "' ></td>
               
                
               
                <td>
            
                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary ' data-bs-toggle='modal' data-bs-target='#exaampleModal" . $row['id'] . "'>
                                    
                                    <i class='ti ti-edit f-20'></i>
                                    
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

                                                                <!-- Heading 1 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_1" class="col-sm-2 col-form-label">Heading 1</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="h_1" value="<?php echo $row['h_1']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Heading 2 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_2" class="col-sm-2 col-form-label">Heading 2</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="h_2" value="<?php echo $row['h_2']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Heading 3 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_3" class="col-sm-2 col-form-label">Heading 3</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="h_3" value="<?php echo $row['h_3']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Heading 4 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_4" class="col-sm-2 col-form-label">Heading 4</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="h_4" value="<?php echo $row['h_4']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Heading 5 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_5" class="col-sm-2 col-form-label">Heading 5</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="h_5" value="<?php echo $row['h_5']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Heading 6 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_6" class="col-sm-2 col-form-label">Heading 6</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="h_6" value="<?php echo $row['h_6']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Link 1 -->
                                                                <div class="row mb-3">
                                                                    <label for="link" class="col-sm-2 col-form-label">Link 1</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="link" value="<?php echo $row['link']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Data 1 -->
                                                                <div class="row mb-3">
                                                                    <label for="data" class="col-sm-2 col-form-label">Data 1</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="data" value="<?php echo $row['data']; ?>">

                                                                    </div>
                                                                </div>

                                                                <!-- Heading 7 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_7" class="col-sm-2 col-form-label">Heading 7</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="h_7" value="<?php echo $row['h_7']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Link 2 -->
                                                                <div class="row mb-3">
                                                                    <label for="link_2" class="col-sm-2 col-form-label">Link 2</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="link_2" value="<?php echo $row['link_2']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Data 2 -->
                                                                <div class="row mb-3">
                                                                    <label for="data_2" class="col-sm-2 col-form-label">Data 2</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="data_2" value="<?php echo $row['data_2']; ?>">

                                                                    </div>
                                                                </div>

                                                                <!-- Heading 8 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_8" class="col-sm-2 col-form-label">Heading 8</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="h_8" value="<?php echo $row['h_8']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Data 3 -->
                                                                <div class="row mb-3">
                                                                    <label for="data_3" class="col-sm-2 col-form-label">Data 3</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="data_3" value="<?php echo $row['data_3']; ?>">

                                                                    </div>
                                                                </div>

                                                                <!-- Heading 9 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_9" class="col-sm-2 col-form-label">Heading 9</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="h_9" value="<?php echo $row['h_9']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Data 4 -->
                                                                <div class="row mb-3">
                                                                    <label for="data_4" class="col-sm-2 col-form-label">Data 4</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="data_4" value="<?php echo $row['data_4']; ?>">

                                                                    </div>
                                                                </div>

                                                                <!-- Button Text -->
                                                                <div class="row mb-3">
                                                                    <label for="btn" class="col-sm-2 col-form-label">Button Text</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="btn" value="<?php echo $row['btn']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Link 3 -->
                                                                <div class="row mb-3">
                                                                    <label for="link_3" class="col-sm-2 col-form-label">Link 3</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="link_3" value="<?php echo $row['link_3']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Image 1 -->
                                                                <div class="row mb-3">
                                                                    <label for="img_1" class="col-sm-2 col-form-label">Image 1</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="file" class="form-control" name="uploadfilee">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <img style='width:100px' src="<?php echo $row['img_1']; ?>" alt="">
                                                                    </div>
                                                                </div>

                                                                <!-- Image 2 -->
                                                                <div class="row mb-3">
                                                                    <label for="img_2" class="col-sm-2 col-form-label">Image 2</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="file" class="form-control" name="uploadfileee">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <img style='width:100px' src="<?php echo $row['img_2']; ?>" alt="">
                                                                    </div>
                                                                </div>

                                                                <!-- Image 3 -->
                                                                <div class="row mb-3">
                                                                    <label for="img_3" class="col-sm-2 col-form-label">Image 3</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="file" class="form-control" name="uploadfilee2">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <img style='width:100px' src="<?php echo $row['img_3']; ?>" alt="">
                                                                    </div>
                                                                </div>

                                                                <!-- Image 4 -->
                                                                <div class="row mb-3">
                                                                    <label for="img_4" class="col-sm-2 col-form-label">Image 4</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="file" class="form-control" name="uploadfileee2">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <img style='width:100px' src="<?php echo $row['img_4']; ?>" alt="">
                                                                    </div>
                                                                </div>



                                                                <!-- Submit Button -->
                                                                <button type="submit" class="btn btn-primary my-3" name="batton">Submit</button>
                                                            </form>
                                                        </div>

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


        <!-- sectino 2 -->

        <div class="col-md-12 my-3">
            <div class="page-header-title">
                <h2 class="mb-0">Informatin List</h2>
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

                                            <!-- Heading 1 -->
                                            <div class="row mb-3">
                                                <label for="h_1" class="col-sm-2 col-form-label">Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="l">
                                                </div>
                                            </div>

                                            <!-- Heading 2 -->
                                            <div class="row mb-3">
                                                <label for="h_2" class="col-sm-2 col-form-label">Heading</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hh">
                                                </div>
                                            </div>






                                            <!-- Submit Button -->
                                            <button type="submit" class="btn btn-primary my-3" name="baattone">Submit</button>
                                        </form>
                                    </div>

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
                                    <th>Link</th>
                                    <th>Heading</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $sql = "SELECT * FROM `footer_list1` ORDER BY `id` DESC";
                                    $result = mysqli_query($conn, $sql);
                                    $x = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "   <tr>
                <td>" . $x . "</td>
                <td>" . $row['id'] . "</td>
                <td>" . $row['link'] . "</td>
                <td>" . $row['heading'] . "</td>
               
                <td>
            
                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary ' data-bs-toggle='modal' data-bs-target='#exampleModal" . $row['id'] . "'>
                                    
                                    <i class='ti ti-edit f-20'></i>
                                    
                                    </a>   

                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm' data-bs-toggle='modal' data-bs-target='#staticBackdrop" . $row['id'] . "'>
                                   
                                   <i class='ti ti-trash f-20'></i>
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

                                                                <!-- Heading 1 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_1" class="col-sm-2 col-form-label">Link</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="l" value="<?php echo $row['link']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Heading 2 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_2" class="col-sm-2 col-form-label">Heading</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="hh" value="<?php echo $row['heading']; ?>">
                                                                    </div>
                                                                </div>






                                                                <!-- Submit Button -->
                                                                <button type="submit" class="btn btn-primary my-3" name="baatton">Submit</button>
                                                            </form>
                                                        </div>

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
                                                            <button type="submit" class="btn btn-danger" name="del">Yes, Delete</button>
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


        <!-- sectino 3 -->

        <div class="col-md-12 my-3">
            <div class="page-header-title">
                <h2 class="mb-0">Social Media List</h2>
            </div>
        </div>

        <div class="col-12">
            <div class="card table-card ">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5 class="mb-0">Data</h5>
                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exammpleModal">Add Data</a>
                    <!-- modal -->

                    <div class="modal fade" id="exammpleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Member</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container my-2">
                                        <form class="w-100" method="POST" enctype="multipart/form-data">

                                            <!-- Heading 1 -->
                                            <div class="row mb-3">
                                                <label for="h_1" class="col-sm-2 col-form-label">Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ll">
                                                </div>
                                            </div>

                                            <!-- Heading 2 -->
                                            <div class="row mb-3">
                                                <label for="h_2" class="col-sm-2 col-form-label">Heading</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hhh">
                                                </div>
                                            </div>






                                            <!-- Submit Button -->
                                            <button type="submit" class="btn btn-primary my-3" name="be">Submit</button>
                                        </form>
                                    </div>

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
                                    <th>Link</th>
                                    <th>Heading</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $sql = "SELECT * FROM `footer_list2` ORDER BY `id` DESC";
                                    $result = mysqli_query($conn, $sql);
                                    $x = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "   <tr>
                <td>" . $x . "</td>
                <td>" . $row['id'] . "</td>
                <td>" . $row['link'] . "</td>
                <td>" . $row['heading'] . "</td>
               
                <td>
            
                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary ' data-bs-toggle='modal' data-bs-target='#exmpleModal" . $row['id'] . "'>
                                    
                                    <i class='ti ti-edit f-20'></i>
                                    
                                    </a>   

                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm' data-bs-toggle='modal' data-bs-target='#staaticBackdrop" . $row['id'] . "'>
                                   
                                   <i class='ti ti-trash f-20'></i>
                                </a>
                </td>
                </tr>";
                                        $x += 1;
                                    ?>
                                        <div class="modal fade" id="exmpleModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                                <!-- Heading 1 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_1" class="col-sm-2 col-form-label">Link</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="ll" value="<?php echo $row['link']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Heading 2 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_2" class="col-sm-2 col-form-label">Heading</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="hhh" value="<?php echo $row['heading']; ?>">
                                                                    </div>
                                                                </div>


                                                                <!-- Submit Button -->
                                                                <button type="submit" class="btn btn-primary my-3" name="bn">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- modal 2 -->
                                        <div class="modal fade" id="staaticBackdrop<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?= $row['id'] ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel<?= $row['id'] ?>">Do you really want to delete this data?</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="POST">
                                                            <input type="hidden" class="form-control" value="<?= $row['id'] ?>" name="id">
                                                            <button type="submit" class="btn btn-danger" name="dhl">Yes, Delete</button>
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
        <!-- sectino 4 -->

        <div class="col-md-12 my-3">
            <div class="page-header-title">
                <h2 class="mb-0">Catagories List</h2>
            </div>
        </div>

        <div class="col-12">
            <div class="card table-card ">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5 class="mb-0">Data</h5>
                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exammppleModal">Add Data</a>
                    <!-- modal -->

                    <div class="modal fade" id="exammppleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Member</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container my-2">
                                        <form class="w-100" method="POST" enctype="multipart/form-data">

                                            <!-- Heading 1 -->
                                            <div class="row mb-3">
                                                <label for="h_1" class="col-sm-2 col-form-label">Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ll">
                                                </div>
                                            </div>

                                            <!-- Heading 2 -->
                                            <div class="row mb-3">
                                                <label for="h_2" class="col-sm-2 col-form-label">Heading</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hhh">
                                                </div>
                                            </div>






                                            <!-- Submit Button -->
                                            <button type="submit" class="btn btn-primary my-3" name="bnnn">Submit</button>
                                        </form>
                                    </div>

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
                                    <th>Link</th>
                                    <th>Heading</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $sql = "SELECT * FROM `footer_list3` ORDER BY `id` DESC";
                                    $result = mysqli_query($conn, $sql);
                                    $x = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "   <tr>
                <td>" . $x . "</td>
                <td>" . $row['id'] . "</td>
                <td>" . $row['link'] . "</td>
                <td>" . $row['heading'] . "</td>
               
                <td>
            
                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary ' data-bs-toggle='modal' data-bs-target='#exmmpleModal" . $row['id'] . "'>
                                    
                                    <i class='ti ti-edit f-20'></i>
                                    
                                    </a>   

                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm' data-bs-toggle='modal' data-bs-target='#staaiccBackdrop" . $row['id'] . "'>
                                   
                                   <i class='ti ti-trash f-20'></i>
                                </a>
                </td>
                </tr>";
                                        $x += 1;
                                    ?>
                                        <div class="modal fade" id="exmmpleModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                                <!-- Heading 1 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_1" class="col-sm-2 col-form-label">Link</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="ll" value="<?php echo $row['link']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Heading 2 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_2" class="col-sm-2 col-form-label">Heading</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="hhh" value="<?php echo $row['heading']; ?>">
                                                                    </div>
                                                                </div>
                                                                <!-- Submit Button -->
                                                                <button type="submit" class="btn btn-primary my-3" name="bnn">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- modal 2 -->
                                        <div class="modal fade" id="staaiccBackdrop<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?= $row['id'] ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel<?= $row['id'] ?>">Do you really want to delete this data?</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="POST">
                                                            <input type="hidden" class="form-control" value="<?= $row['id'] ?>" name="id">
                                                            <button type="submit" class="btn btn-danger" name="dll">Yes, Delete</button>
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


        <!-- sectino 5 -->

        <div class="col-md-12 my-3">
            <div class="page-header-title">
                <h2 class="mb-0">Customer care List</h2>
            </div>
        </div>

        <div class="col-12">
            <div class="card table-card ">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5 class="mb-0">Data</h5>
                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exaeModal">Add Data</a>
                    <!-- modal -->

                    <div class="modal fade" id="exaeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Member</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container my-2">
                                        <form class="w-100" method="POST" enctype="multipart/form-data">

                                            <!-- Heading 1 -->
                                            <div class="row mb-3">
                                                <label for="h_1" class="col-sm-2 col-form-label">Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ll">
                                                </div>
                                            </div>

                                            <!-- Heading 2 -->
                                            <div class="row mb-3">
                                                <label for="h_2" class="col-sm-2 col-form-label">Heading</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hhh">
                                                </div>
                                            </div>
                                            <!-- Submit Button -->
                                            <button type="submit" class="btn btn-primary my-3" name="bee">Submit</button>
                                        </form>
                                    </div>

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
                                    <th>Link</th>
                                    <th>Heading</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $sql = "SELECT * FROM `footer_list4` ORDER BY `id` DESC";
                                    $result = mysqli_query($conn, $sql);
                                    $x = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "   <tr>
                <td>" . $x . "</td>
                <td>" . $row['id'] . "</td>
                <td>" . $row['link'] . "</td>
                <td>" . $row['heading'] . "</td>
               
                <td>
            
                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary ' data-bs-toggle='modal' data-bs-target='#eeModal" . $row['id'] . "'>
                                    
                                    <i class='ti ti-edit f-20'></i>
                                    
                                    </a>   

                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm' data-bs-toggle='modal' data-bs-target='#stccBackdrop" . $row['id'] . "'>
                                   
                                   <i class='ti ti-trash f-20'></i>
                                </a>
                </td>
                </tr>";
                                        $x += 1;
                                    ?>
                                        <div class="modal fade" id="eeModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                                <!-- Heading 1 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_1" class="col-sm-2 col-form-label">Link</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="ll" value="<?php echo $row['link']; ?>">
                                                                    </div>
                                                                </div>

                                                                <!-- Heading 2 -->
                                                                <div class="row mb-3">
                                                                    <label for="h_2" class="col-sm-2 col-form-label">Heading</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="hhh" value="<?php echo $row['heading']; ?>">
                                                                    </div>
                                                                </div>
                                                                <!-- Submit Button -->
                                                                <button type="submit" class="btn btn-primary my-3" name="ee">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- modal 2 -->
                                        <div class="modal fade" id="stccBackdrop<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?= $row['id'] ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel<?= $row['id'] ?>">Do you really want to delete this data?</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="POST">
                                                            <input type="hidden" class="form-control" value="<?= $row['id'] ?>" name="id">
                                                            <button type="submit" class="btn btn-danger" name="dee">Yes, Delete</button>
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

    </div>




</div>






<?php
include "../../include/dashboard/dashboard_footer.php";
} else {
    header("Location: ../../pages/login.php");
    exit();
  }
?>