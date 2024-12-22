<?php
include "../../config/database.php";
// if (!empty($userid)) {
include "../../controller/sign_up.php";
// include "../../controller/active_inactive.php";

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
                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Users</a>
                    <!-- modal -->

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Usersr</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="container my-2">
                                                            <form class="w-100" method="POST" >
                                                              
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="first-name">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Last Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="last-name">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Email address</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="email">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Phone number</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="phone">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="password">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="emailedit" class="col-sm-2 col-form-label">Confirm Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="confirm-password">
                                                                    </div>
                                                                    <span class="text-danger"> </span>
                                                                </div>
                                                                <span class="text-danger"> </span>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary my-3" name="button">Insert data</button>
                                                        
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
                                    <th>Name</th>
                                    <th>Last Nmae</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Roll</th>
                                    <th >Status</th>
                                    <!-- <th></th> -->
                                    <th >Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $sql = "SELECT * FROM `banno` ORDER BY `id` DESC";
                                    $result = mysqli_query($conn, $sql);
                                    $x = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "   <tr>
                <td>" . $x . "</td>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['last_name'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['roll'] . "</td>

                
                 <td>" . (($row['status'] == "Active") ?
                                    "<span class='badge badge-light-success text-success'>Active</span>" :
                                    "<span class='badge badge-light-danger text-danger'>Block</span>"
                                ) . "</td>
              
               
               
                <td>

                " . (($row['status'] == "Active") ?



                                    "<a href='../../controller/active_inactive.php?id=" . $row['id'] . "&status=1' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1' >
                                  
                                    <span class='svg-icon svg-icon-3'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'>
                                            <path d='M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z' fill='currentColor' />
                                            <path opacity='0.3' d='M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z' fill='currentColor' />
                                        </svg>
                                    </span>
                                    
                                </a>" :

                                    "<a href='../../controller/active_inactive.php?id=" . $row['id'] . "&status=0' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1' >
                                  
                                <span class='svg-icon svg-icon-3'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'>
                                        <path d='M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z' fill='currentColor' />
                                        <path opacity='0.3' d='M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z' fill='currentColor' />
                                    </svg>
                                </span>
                                
                            </a>") . "
            
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
                                                                <button type="submit" class="btn btn-danger" name="dell">Yes, Delete</button>
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
// } else {
//     header("Location: ../../pages/login.php");
//     exit();
//   }
?>