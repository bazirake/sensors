<?php include('include/header.php');?>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
       <div class="lds-pos"></div>
       <div class="lds-pos"></div>
     </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       <?php include('include/navbar.php');?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <?php include('include/sidesbar.php');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--==============================================================-->
            <!--End Bread crumb and right sidebar toggle-->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!--Container fluid-->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!--============================================================== -->
                <!--Sales chart-->
                <!--============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div>
                                                <h3 class="card-title">Sales Overview</h3>
                                                <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                                            </div>
                                            <div class="ms-lg-auto mx-sm-auto mx-lg-0">
                                             <ul class="list-inline d-flex">
                                                <li class="me-4">
                                                 <h6 class="text-success"><i
                                                      class="fa fa-circle font-10 me-2 "></i>Ample</h6>
                                                </li>
                                                <li>
                                                 <h6 class="text-info"><i
                                                      class="fa fa-circle font-10 me-2"></i>Pixel</h6>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                      <div class="amp-pxl" style="height: 360px;">
                                       <div class="chartist-tooltip"></div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="col-lg-4">
                    <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Our Visitors </h3>
                                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                                <div id="visitor"
                                    style="height: 290px; width: 100%; max-height: 290px; position: relative;"
                                    class="c3">
                                    <div class="c3-tooltip-container"
                                        style="position: absolute; pointer-events: none; display: none;">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr class="mt-0 mb-0">
                            </div>
                            <div class="card-body text-center ">
                             <ul class="list-inline d-flex justify-content-center align-items-center mb-0">
                                  <li class="me-4">
                                   <h6 class="text-info"><i class="fa fa-circle font-10 me-2 "></i>Mobile</h6>
                                  </li>
                                <li class="me-4">
                                   <h6 class=" text-primary"><i class="fa fa-circle font-10 me-2"></i>Desktop</h6>
                                </li>
                                <li class="me-4">
                                  <h6 class=" text-success"><i class="fa fa-circle font-10 me-2"></i>Tablet</h6>
                              </li>
                          </ul>
                      </div>
                 </div>
                </div>
                </div>
            </div>

            <!--============================================================== -->
            <!--End Container fluid  -->
            <!--============================================================== -->
            <!--============================================================== -->
            <!--footer-->
            <!--============================================================== -->
           <?php include('include/footer.php');?>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   <?php include('include/script.php');?>
