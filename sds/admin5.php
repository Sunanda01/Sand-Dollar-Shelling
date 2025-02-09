<?php
session_start();

$server = "localhost";
$user = "root";
$password = "";
$db = "project";

$con = mysqli_connect($server,$user,$password,$db);
if(!$con) {
    echo "Connection Unsuccessful";
}

$query = "select * from order_manager";
$result = mysqli_query($con,$query);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIGNUP DETAILS</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" >

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                
                <div class="sidebar-brand-text mx-3" style="font-size: medium;color:aquamarine;">SAND-DOLLAR-SHELLING </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
           
            <!-- Divider -->
            <hr class="sidebar-divider">  

            
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin3.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <span>Admin Details</span>
                    
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin4.php"><i class="fa fa-check-square" aria-hidden="true"></i>
                    <span>SignUp Details</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin5.php"><i class="fa fa-bars" aria-hidden="true"></i>
                    <span>Order Details</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin6.php"><i class="fa fa-phone" aria-hidden="true"></i>
                    <span>Queries</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>
                    <span>Home</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
           <span style="font:bold;color:aquamarine;text-align:center">CONNECT WITH US</span>
            <div class="center">
                <span >
                    <a href="https://www.facebook.com/marketplace/item/2248908731951371/"style="color: white;"><i class="fa fa-facebook" style="margin: 15px;"></i></a>
                    <a href="https://www.instagram.com/_sea.shell_2001/"style="color: white;"><i class="fa fa-instagram" style="margin: 15px;"></i></a>
                    <a href="https://twitter.com/magioliveira?s=20&t=Gcsr1wcONcbxOhQ-NcfzKg"style="color: white;"><i class="fa fa-twitter" style="margin: 15px;"></i></a>
                    <a href=" mailto:sunandasadhukhan674@gmail.com"style="color: white;"><i class="fa fa-google-plus" style="margin: 15px;"></i></a>
                    <a href="https://youtu.be/HOiZrWtQ4Hg"style="color: white;"><i class="fa fa-youtube-play" ></i></a>
                </span>
            
                <hr class="sidebar-divider">
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


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><B>ADMIN</B></span>
                                <img class="img-profile rounded-circle"
                                    src="img\profile.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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


                    <!-- Content Row -->
                    <div >

                        <!-- Earnings (Monthly) Card Example -->
                        <div >
                        <h1 style="text-align:center;color:#0000ff;font-weight:bold;">ORDER DETAILS</h1>
                            <section id="signup">
                            <table class="table table-borderless table-group-divider">
                            <tr style="background: #e3e6f3;">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Address</th>
                            <th>Payment Mode</th>
                            <tr>

                            <?php 
                            while($rows=mysqli_fetch_assoc($result))
                            {
                                ?>

                                <tr class="tbody">
                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['name']; ?></td>
                                <td><?php echo $rows['phone']; ?></td>
                                <td><?php echo $rows['addr']; ?></td>
                                <td><?php echo $rows['pay_mode']; ?></td>
                                </tr>
                                <?php
                                }
                                ?>

                            </table>
                                <hr style="background: #e3e6f3; height: 2px;" >
                                </section>
                            
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        

                        <!-- Earnings (Monthly) Card Example -->
                        

                        <!-- Pending Requests Card Example -->
                        
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        

                        
                           

                           
            
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
                    <a class="btn btn-primary" href="adminlogin.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>