<?php

session_start();
if(!isset($_SESSION['menu_no'])){
  header('location:patient-info-login');
}

$inactive = 600;
if(!isset($_SESSION['timeout']))
  $_SESSION['timeout'] = time() + $inactive;
  $session_life = time() - $_SESSION['timeout'];

  if($session_life > $inactive){
    session_destroy();
    header('location:patient-info-login');
  }
$_session['timeout'] = time();

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DDC&GH-Patient Examation</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/patient-style.css" rel="stylesheet">

  <!-----------Custom CSS---------------->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar">
      <ul style="border-radius: 0;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="javascript:avoid(0)">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i> 
        </div>-->
        <div class="sidebar-brand-text patient_page_image_div">
          <img src="images/patient1.png" alt="">
        </div>
      </a>

      <!-- Divider -->
      <!-- <hr class="sidebar-divider my-0"> -->

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <span class="nav-link text-center">Name: <?= $_SESSION['name']; ?></span></a>
          <span class="nav-link text-center">Age: <?= $_SESSION['age']; ?></span></a>
          <span class="nav-link text-center">Gender: <?= $_SESSION['gender']; ?></span></a>
          <span class="nav-link text-center">Mobile: <?= $_SESSION['mobile']; ?></span></a>
      </li>
      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block"> -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    
    </div>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
            <li class="nav-item dropdown no-arrow" id="laptop_device">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="logout" data-toggle="" data-target="#">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>


          <li class="nav-item dropdown no-arrow" id="mobile_device">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-lg-inline text-gray-600 small">Profile</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
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
        <div id="patient_section">
          <div class="container-fluid">
              <!-- Page Heading -->
              <div class="patient_head">
                <h1 class="h3 mb-0 text-gray-800">Patient Report</h1>
                <a href="#"  data-toggle="modal" data-target="#reportModal" class="d-sm-inline-block view-btn btn btn-sm btn shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> View Report</a>
              </div>

              <div class='float-left'>
              <h4>Name: </h4>
              
            </div>
          </div>

            <!-- Report Modal-->
                <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title  text-center" id="exampleModalLongTitle">View, Download or Print Patient Test Report</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card shadow title">
                                        <div class="card-body text-left">
                                            <div class="row">
                                                    <div class="col-sm-3 d-none d-md-block font-weight-bold"><label for="name" class="form-label">Name : </label></div>
                                                    <div class="col-md-9"><input type="text" id="name" value="<?= $_SESSION['name']; ?>" disabled="disabled" class="form-control class_disabled"></div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-sm-3 d-none d-md-block font-weight-bold"><label for="name" class="form-label">Age : </label></div>
                                                    <div class="col-md-9"><input type="text" id="name" value="<?= ucfirst($_SESSION['age']); ?>" disabled="disabled" class="form-control class_disabled"></div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-sm-3 d-none d-md-block font-weight-bold"><label for="name" class="form-label">Gender : </label></div>
                                                    <div class="col-md-9"><input type="text" id="name" value="<?= isset($_SESSION['sex'])? $_SESSION['sex']: '' ?>" disabled="disabled" class="form-control class_disabled"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                          <!------------------------Patient report image------------------------>
                          <div class="patien_report_img_box pr-2">
                              <div class="row">
                                <div class="col-sm-4 col-md-4 patien_report_img">
                                  <a href="javascript:avoid(0)">
                                    <img src="uploads/<?= $_SESSION['ttwo_img']; ?>" alt="sss">
                                    <div class="img_box_button">
                                        <a href="image?dir=<?= base64_encode('uploads/') ?>&&file=<?= base64_encode($_SESSION['ttwo_img']); ?>" class="btn btn-info"><i class="fa fa-eye" id="eye" aria-hidden="true"></i> <span>View</span> </a>
                                        <a href="" class="btn btn-warning"><i class="fa fa-print" aria-hidden="true"></i> <span>Print</span> </a>
                                        <a href="download?dir=<?= base64_encode('uploads/') ?>&&file=<?= base64_encode($_SESSION['ttwo_img']); ?>" class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> <span>Download</span> </a>
                                    </div>
                                  </a>
                                </div>

                                <?php if(isset($_SESSION['ttwo_img'])){?>
                                  <div class="col-sm-4 col-md-4 patien_report_img">
                                    <a href="javascript:avoid(0)">
                                      <img src="uploads/<?= $_SESSION['tone_img']; ?>" alt="sss">
                                      <div class="img_box_button">
                                          <a href="image?dir=<?= base64_encode('uploads/') ?>&&file=<?= base64_encode($_SESSION['tone_img']); ?>" class="btn btn-info"><i class="fa fa-eye" id="eye" aria-hidden="true"></i><span>View</span></a>
                                          <a href="" class="btn btn-warning"><i class="fa fa-print" aria-hidden="true"></i><span>Print</span></a>
                                          <a href="download?dir=<?= base64_encode('uploads/') ?>&&file=<?= base64_encode($_SESSION['tone_img']); ?>" class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i><span>Download</span></a>
                                      </div>
                                    </a>
                                  </div>
                                <?php } ?>

                                <?php if(isset($_SESSION['tthree_img'])){?>
                                  <div class="col-sm-4 col-md-4 patien_report_img">
                                    <a href="javascript:avoid(0)">
                                      <img src="uploads/<?= $_SESSION['tthree_img']; ?>" alt="sss">
                                      <div class="img_box_button">
                                          <a href="image?dir=<?= base64_encode('uploads/') ?>&&file=<?= base64_encode($_SESSION['tthree_img']); ?>" class="btn btn-info"><i class="fa fa-eye" id="eye" aria-hidden="true"></i><span>View</span></a>
                                          <a href="" class="btn btn-warning"><i class="fa fa-print" aria-hidden="true"></i><span>Print</span></a>
                                          <a href="download?dir=<?= base64_encode('uploads/') ?>&&file=<?= base64_encode($_SESSION['tthree_img']); ?>" class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i><span>Download</span></a>
                                      </div>
                                    </a>
                                  </div>
                                <?php } ?>

                              </div>
                          </div>

                        </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="moda"> <i class="fa fa-print"></i> Print</button>
                          <button type="button" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Download</button>
                        </div> -->
                      </div>
                    </div>
                  </div>

                <!------------------------Modal end------------------------->

               <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-center">
                    <tr>
                      <th><?= $_SESSION['tone_name']; ?></th>
                      <th><?= $_SESSION['ttwo_name']; ?></th>
                      <th><?= $_SESSION['tthree_name'] ?></th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr>
                      <td><?= $_SESSION['tone_result']; ?></td>
                      <td><?= $_SESSION['ttwo_result']; ?></td>
                      <td><?= $_SESSION['tthree_result']; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer> -->
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Leave" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Leave</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="assets/js/patient-js.js"></script>

</body>

</html>

