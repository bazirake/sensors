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
                                <li class="breadcrumb-item active" aria-current="page">Client</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header py-3">
                          <div class="float-left">
                          <i class="fa fa-list"></i>
                              Client<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#clientreg">
                           <i class="fa fa-plus-circle"></i> Add Client</button>
                             <a style="background-color: #8c6c44; border-color: #8c6c44; margin-left: 6px;" href="javascript:;" class="btn btn-warning btn-sm" id="trefresh">
                             <i class="fa fa-check-circle" aria-hidden="true"></i>Reflesh table</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Tel</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                       <div class="card-header py-3">
                         <div class="float-left">
                           <i class="fa fa-list"></i>
                             Device <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#registrationmodel">
                               <i class="fa fa-plus-circle"></i> Add Device</button>
                             <a style="background-color: #8c6c44; border-color: #8c6c44; margin-left: 6px;" href="javascript:;" class="btn btn-warning btn-sm" id="trefresh">
                               <i class="fa fa-check-circle" aria-hidden="true"></i>Reflesh table</a>
                            </div>
                        </div>
                        <div class="card-body">
                            List of devices
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="modal fade  " id="clientreg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">
                        New Client Registration</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card  px-4 w-100 py-2 ">
                        <form id="member-form" method="post">
                            <div class="row">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Firstname</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Firstname" name="fname" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Lastname</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Lastname" name="lname" class="form-control" required>
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">RegistrationDate</label>
                                      <div class="col-sm-8">
                                       <input type="date" name="dates" class="form-control" required >

                                 </div>
                                </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                                        </div>
                                </div>
                            </div>

                            <div class="row">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Phone</label>
                                        <div class="col-sm-8">
                                            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Eg:0787124101" required >
                                        </div>
                                    </div>

                                  <div class="form-group row">
                                     <label class="col-sm-4 col-form-label">IDnumber</label>
                                       <div class="col-sm-8">
                                          <input type="text" name="phone" class="form-control" id="phone" placeholder="eg:1199434343348888" required >
                                      </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="float-right mb-2">
                                                <button type="button"  color="accent" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                                <button  id=save-id color="primary" type="submit" class="btn btn-primary  ml-4">
                                                    Save
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include('include/footer.php');?>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <?php include('include/script.php');?>
