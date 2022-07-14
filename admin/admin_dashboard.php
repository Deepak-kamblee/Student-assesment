<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbms";
    $conn = mysqli_connect("$servername" , "$username" , "$password" , "$dbname" ) ;
    mysqli_error($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin_dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                   
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                VIEW 
            </div>

             <!-- Nav Item - users -->
             <li class="nav-item">
                <a class="nav-link" href="view_students.php">
                <i class="fa fa-graduation-cap"></i>

                    <span>Students</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view_faculty.php">
                <i class="fa fa-user"></i>
                    <span>Faculty</span></a>
            </li>
           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               MENU
            </div>

            <li class="nav-item">
                <a class="nav-link" href="add_user.php">
                <i class="fa fa-plus"></i>

                    <span>NEW USER</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="assign_student.php">
                <i class="fa fa-arrow-right"></i>


                    <span>ASSIGN STUDENT</span></a>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <div>WELCOME BACK!</div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                          

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                            </a>
                            <!-- Dropdown - Alerts -->
                           

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                            </a>
                            
                            
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin 01</span>
                                <i class="fa fa-user-circle"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a> -->
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="../login/adminLogin.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                   <!-- Card Example -->
                   <div class="row">
                   <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                TOTAL STUDENTS</div>
                                                  <!-- ********************************************************************************* -->
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                               $sql = " SELECT count(*)  as total FROM `student` ";
                                               $result = mysqli_query($conn,$sql);
                                               if($result){
                                               while($row = mysqli_fetch_array($result)){
                                           
                                                   echo $row['total'];
                                               }
                                           }
                                           else{
                                           
                                               die("error".mysqli_error($conn));
                                           }
                                            
                                            ?></div>
                                              <!-- ********************************************************************************* -->
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-graduation-cap fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                TOTAL FACULTY</div>
                                                  <!-- ********************************************************************************* -->
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                            
                                            $sql = " SELECT count(*)  as total FROM `faculty` ";
                                            $result = mysqli_query($conn,$sql);
                                            if($result){
                                            while($row = mysqli_fetch_array($result)){
                                        
                                                echo $row['total'];
                                            }
                                        }
                                        else{
                                        
                                            die("error".mysqli_error($conn));
                                        }
                                            
                                            ?></div>
                                              <!-- ********************************************************************************* -->
                                        </div>
                                        <div class="col-auto">
                                          
                                            <i class="fa fa-user  fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                                        

              

                <!-- ########### collapse card############# -->
                  <!-- Collapsable Card  1 Example -->
                  <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample1">
                                    <h6 class="m-0 font-weight-bold text-primary">View Assigned Students List:</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample1">
                                <div class="card-body">
                                <table class="table">
                                     <thead class="thead-light">
                                        <tr>
                                        <th scope="col">Sr no.</th>
                                        <th scope="col">Student ID</th>
                                        <th scope="col">Student Dept</th>
                                        <th scope="col">Faculty ID</th>
                                        <th scope="col">Faculty Name</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

        

                                                $sql2 = "SELECT * FROM  assign_student";
                                                $result2 = mysqli_query($conn,$sql2); 

                                                mysqli_error($conn);
                                              
                                                $i=1;
                                                while($row1 = mysqli_fetch_array($result2)){

                                                            echo "<tr>";
                                                            echo " <th scope='row'>".$i."</th>";
                                                            echo "<td>".$row1['stud_id']."</td>";
                                                            echo "<td>".$row1['stud_department']."</td>";
                                                            echo "<td>".$row1['f_id']."</td>";
                                                            echo "<td>".$row1['f_name']."</td>";
                                                            $i=$i+1;

                                                }
                                                    echo "</tr>";
                                                
                                            ?>
                                             
                                           
                                          
                                        </tbody>
                                </table>
                    
                
                                        
                                    </div>
                                </div>
                            </div>
                            </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../login/adminLogin.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>

