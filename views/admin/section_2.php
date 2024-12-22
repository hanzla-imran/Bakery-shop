<?php
include "../../config/database.php";
if (!empty($userid)) {
include "../../controller/section_2.php";
include "../../include/dashboard/dashboard_header.php";
include "../../include/dashboard/dashboard_sidebar.php";
include "../../include/dashboard/dashboard_navbar.php";
?>

<!-- <div class="pc-container">
    <div class="pc-content"> -->
       

<div class="pc-container">
    <div class="pc-content my-4">
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
        <h2 class="mb-3">Section 2</h2>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Section 2 p-1st</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Section 2 p-3rd</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="col-12">
                    <div class="card table-card ">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Id</th>
                                            <th>Section Image</th>
                                            <th>Title</th>
                                            <th>Heading</th>
                                            <th>Btn Link</th>
                                            <th>Btn Name</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            $sql = "SELECT * FROM `section_2` ORDER BY `id` DESC";
                                            $result = mysqli_query($conn, $sql);
                                            $x = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "   <tr>
                <td>" . $x . "</td>
                <td>" . $row['id'] . "</td>
                 <td '><img  style ='width:100px' src='" . $row['section_2img'] . "' ></td>
                <td>" . $row['title'] . "</td>
                <td>" . $row['heading'] . "</td>
                <td>" . $row['btn_link'] . "</td>
                <td>" . $row['btn_name'] . "</td>
               
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
                                                                        <div class="row mb-3">
                                                                            <label for="emailedit" class="col-sm-2 col-form-label">Section Image</label>
                                                                            <div class="col-sm-6">
                                                                                <input type="file" class="form-control" name="uploadfileee">
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <img style ='width:100px' src="<?php echo $row['section_2img']; ?>" alt="">
                                                                            </div>
                                                                            <span class="text-danger"> </span>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <label for="emailedit" class="col-sm-2 col-form-label">Title</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="title" value="<?= $row['title'] ?>">
                                                                            </div>
                                                                            <span class="text-danger"> </span>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <label for="emailedit" class="col-sm-2 col-form-label">Heading</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="shead" value="<?= $row['heading'] ?>">
                                                                            </div>
                                                                            <span class="text-danger"> </span>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="emailedit" class="col-sm-2 col-form-label">Btn link</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="btn_link" value="<?= $row['btn_link'] ?>">
                                                                            </div>
                                                                            <span class="text-danger"> </span>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="emailedit" class="col-sm-2 col-form-label">Btn name</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="btn_name" value="<?= $row['btn_name'] ?>">
                                                                            </div>
                                                                            <span class="text-danger"> </span>
                                                                        </div>





                                                                        <span class="text-danger"> </span>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary my-3" name="buttonn">Update Now</button>
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
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class=" card-header d-flex align-items-center justify-content-between ">


                <a type="button" class="btn btn-primary  my-4 " data-bs-toggle="modal" data-bs-target="#exampleModal">Add Data</a>
            </div>
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
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">List</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="li" >
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>

                                                            </div>
                                                            <button type="submit" class="btn btn-primary my-3" name="buttonne">Insert Data</button>
                                                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 ">
                <div class="card table-card ">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Id</th>
                                        <th>List</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        $sql = "SELECT * FROM `section_2_li` ORDER BY `id` DESC";
                                        $result = mysqli_query($conn, $sql);
                                        $x = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "   <tr>
                <td>" . $x . "</td>
                <td>" . $row['id'] . "</td>
                <td>" . $row['li'] . "</td>
               
                <td>
            
                                    <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary ' data-bs-toggle='modal' data-bs-target='#exampleModal" . $row['id'] . "'>
                                    
                                    <i class='ti ti-edit f-20'></i>
                                    
                                    </a>   
                                       <a type='button' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm' data-bs-toggle='modal' data-bs-target='#staticcBackdrop" . $row['id'] . "'>
                           
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
                                                                  

                                                                    <div class="row mb-3">
                                                                        <label for="emailedit" class="col-sm-2 col-form-label">List</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="li" value="<?php echo $row['li']; ?>">
                                                                        </div>
                                                                        <span class="text-danger"> </span>
                                                                    </div>

                                                            </div>
                                                            <button type="submit" class="btn btn-primary my-3" name="buuttonne">Update Now</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <!-- modal2 -->
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