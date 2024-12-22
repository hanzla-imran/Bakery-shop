<?php
include "../../config/database.php";
if (!empty($userid)) {
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
                    </div>
                </div>
            </div>






            <!-- Section_3 -->

            <div class="col-md-12 my-3">
                <div class="page-header-title">
                    <h2 class="mb-0">Section 3</h2>
                </div>
            </div>

            <div class="col-12">
                <div class="card table-card ">
                    <div class="card-header d-flex align-items-center justify-content-between py-3">
                        <h5 class="mb-0">Data</h5>
                        <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#examppleModal">Add Data</a>
                        <!-- modal -->

                        <div class="modal fade" id="examppleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="examppleModalLabel">Add New Member</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container my-2">
                                            <form class="w-100" method="POST" enctype="multipart/form-data">

                                                <div class="row mb-3">
                                                    <label for="emailedit" class="col-sm-2 col-form-label">Image </label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="upploadfilee">
                                                    </div>
                                                    <span class="text-danger"> </span>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="emailedit" class="col-sm-2 col-form-label">Hover image</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="uppploadfileee">
                                                    </div>
                                                    <span class="text-danger"> </span>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="emailedit" class="col-sm-2 col-form-label">Product</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="product" value="">
                                                    </div>
                                                    <span class="text-danger"> </span>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="emailedit" class="col-sm-2 col-form-label">New price</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="new" value="">
                                                    </div>
                                                    <span class="text-danger"> </span>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="emailedit" class="col-sm-2 col-form-label">Old price</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="old" value="">
                                                    </div>
                                                    <span class="text-danger"> </span>
                                                </div>





                                                <span class="text-danger"> </span>
                                        </div>
                                        <button type="submit" class="btn btn-primary my-3" name="buuttonne">Insert Data </button>
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
                                        <th>Image</th>
                                        <th>Hover img</th>
                                        <th>Product</th>
                                        <th>New price</th>
                                        <th>Old price</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        
                                        $sql = "SELECT * FROM `section_3` ORDER BY `id` DESC";
                                        $result = mysqli_query($conn, $sql);
                                        $x = 1;
                                        $rows = [];
                                        if  (mysqli_num_rows($result) > 0) {

                                        $rows = mysqli_fetch_all($result ,MYSQLI_ASSOC);
                                        }
                                       foreach ($rows as $row) {

                                        
                                       
                                            echo "   <tr>
        <td>" . $x . "</td>
        <td>" . $row['id'] . "</td>

         <td '><img  style ='width:100px' src='" . $row['image'] . "' ></td>
         <td '><img  style ='width:100px' src='" . $row['hover_img'] . "' ></td>
        
        <td>" . $row['product'] . "</td>
        <td>" . $row['new_price'] . "</td>
        <td>" . $row['old_price'] . "</td>
       
        <td>
    
                            <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary ' data-bs-toggle='modal' data-bs-target='#exaaampleModal" . $row['id'] . "'>
                            
                            <i class='ti ti-edit f-20'></i>
                            
                            </a>   

                            <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm' data-bs-toggle='modal' data-bs-target='#staticcBackdrop" . $row['id'] . "'>
                           
                           <i class='ti ti-trash f-20'></i>
                        </a>
        </td>
        </tr>";
                                            $x += 1;
                                        ?>
                                            <div class="modal fade" id="exaaampleModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">Image </label>
                                                                        <div class="col-sm-6">
                                                                            <input type="file" class="form-control" name="upploadfilee">
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <img style='width:100px' src="<?= $row['image'] ?>" alt="">
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">Hover image</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="file" class="form-control" name="uppploadfileee">
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <img style='width:100px' src="<?= $row['hover_img'] ?>" alt="">
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">Product</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="product" value="<?= $row['product'] ?>">
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">New price</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="new" value="<?= $row['new_price'] ?>">
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">Old price</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="old" value="<?= $row['old_price'] ?>">
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">SKU</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="sku" value="<?= $row['sku'] ?>">
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">Availability</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="availability" value="<?= $row['availability'] ?>">
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">Catagories</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-select" name="catagories" aria-label="Default select example">
                                                                                <option selected>Catagories</option>
                                                                                <?php

                                                                                $sql = "SELECT * FROM `section_1` ORDER BY `id` DESC";
                                                                                $result = mysqli_query($conn, $sql);

                                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                                ?>
                                                                                    <option><?= $row['heading'] ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">Description</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea class="form-control" name="description"   id="" rows="3"><?= @$row['description'] ?></textarea>
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>





                                                                    <span class="text-danger"> </span>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary my-3" name="buuttonn">Update Now</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- modal 2 -->
                                            <div class="modal fade" id="staticcBackdrop<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?= $row['id'] ?>" aria-hidden="true">
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
        </div>




    </div>








<?php
    include "../../include/dashboard/dashboard_footer.php";
} else {
    header("Location: ../../pages/login.php");
    exit();
}
?>