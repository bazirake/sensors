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
                                <li class="breadcrumb-item active" aria-current="page">Clients</li>
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
                <div class="col-lg-7">
                    <div class="card">
                      <div class="card-header py-3">
                        <div class="float-left">
                         <i class="fa fa-list"></i>
                              Client<button class="btn btn-danger btn-sm" onclick="getClient(0)" data-toggle="modal" data-target="#clientreg">
                           <i class="fa fa-plus-circle"></i> Add Client</button>
                             <a style="background-color: #8c6c44; border-color: #8c6c44; margin-left: 6px;" href="javascript:;" class="btn btn-warning btn-sm" id="trefresh">
                             <i class="fa fa-check-circle" aria-hidden="true"></i>Reflesh table</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="overflow-x-auto">
                                <table class="table table-hover">
                                <thead>
                                   <tr>
                                     <th class="whitespace-nowrap">N<sub>o</sub></th>
                                      <th class="whitespace-nowrap">First Name</th>
                                       <th class="whitespace-nowrap">Last Name</th>
                                       <th class="whitespace-nowrap">Phone</th>
                                       <th class="whitespace-nowrap">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody id="tcontent">
                                 </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                      <div class="card-header py-3">
                         <div class="float-left">
                           <i class="fa fa-list"></i>
                             Device <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#registrationmodel">
                               <i class="fa fa-plus-circle"></i>Add Device</button>
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

    <div class="modal fade " id="clientreg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                 <div class="card  px-4 w-100 py-2" id="ccontent">
                 </div>
                </div>
            </div>
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include('include/footer.php');?>
        <!-- ============================================================== -->
     <?php include('include/script.php'); ?>
     <script type="text/x-handlebars-template" id="cid">
        <form id="client-form" method="post">
          <div class="row">
           <div class="form-group row">
            <label class="col-sm-4 col-form-label">Firstname</label>
            <div class="col-sm-8">
             <input type="hidden"  value='{{id}}' id="idc" class="form-control"  required>
              <input type="text" value='{{fname}}' placeholder="Firstname" id="fname" class="form-control" required>
                </div>
               </div>
               <div class="form-group row">
                 <label class="col-sm-4 col-form-label">Lastname</label>
                   <div class="col-sm-8">
                      <input type="text" value='{{lname}}' placeholder="Lastname" id="lname" class="form-control" required>
                  </div>
                 </div>
            </div>
             <div class="row">
                 <div class="form-group row">
                     <label class="col-sm-4 col-form-label">RegistrationDate</label>
                     <div class="col-sm-8">
                         <input type="date" value='{{dates}}' id="dates" class="form-control" required >
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-4 col-form-label">Email</label>
                     <div class="col-sm-8">
                         <input type="email" value='{{email}}' id="email" placeholder="Email" class="form-control" required>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="form-group row">
                     <label class="col-sm-4 col-form-label">Phone</label>
                     <div class="col-sm-8">
                         <input type="phone" value='{{tel}}'  class="form-control" id="tel" placeholder="Eg:0787124101" required >
                     </div>
                 </div>
                  <div class="form-group row">
                     <label class="col-sm-4 col-form-label">IDnumber</label>
                     <div class="col-sm-8">
                         <input type="text"  value='{{nid}}' class="form-control" id="nid" placeholder="eg:1199434343348888" required >
                     </div>
                  </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                   <div class="row">
                     <div class="col-md-6">
                       <div class="float-right mb-2">
                          <button type="button"  color="accent" class="btn btn-success" data-dismiss="modal">Cancel</button>
                            <button id="save-id" type="submit" color="primary" class="btn btn-primary  ml-4">
                                Save
                              </button>
                           </div>
                         </div>
                     </div>
                 </div>
             </div>
         </form>
     </script>
     <script type="text/x-handlebars-template" id="clientid">
        {{#each data}}
          <tr><td>{{no}}</td><td>{{fname}}</td><td>{{lname}}</td>
              <td>{{tel}}</td>
              <td>
                  <div class="dropstart">
                     <a  href="" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-h w-5 h-5" aria-hidden="true"></i>
                     </a>
                      <ul class="dropdown-menu">
                     <li id="{{cid}}" onclick="getClient(this.id)" data-toggle="modal" data-target="#clientreg"><a class="dropdown-item" href="javascript:;" >
                       <i class="fa fa-edit" style="font-size:17px;color:red"></i>Edit</a>
                      </li>
                          <li><a class="dropdown-item" href="javascript:;">
                         <i class="fa fa-trash" style="font-size:17px;color:red" aria-hidden="true"></i>Delete</a></li>
                      </ul>
                  </div>
              </td>
          </tr>
        {{/each}}
     </script>
    <script>
     var client_tem=$("#clientid").html();
     var client_com=Handlebars.compile(client_tem);
     var ctem=$("#cid").html();
       var ccompile=Handlebars.compile(ctem);
       function getClient(id)
         {
       var loader='<span class="spinner-grow" style="margin: auto;width: 3rem; height: 3rem;" role="status"><span class="text-white" style="position: relative;top: 10px; left: 9px;">wait..</span></span>';
          $("#ccontent").html(loader);
         var path='database/client.php';
           $.ajax({
           type:'GET',
           dataType:'json',
           data:{id:id},
           url:path
           })
          .done(function(data){
           $("#ccontent").html(ccompile(data[0]));
            console.log(data[0]);
           }).fail(function(data){
            console.log(data);
           });
         }



       $(document).on('submit','#client-form',function(e){
         e.preventDefault();
           var nid= $('#nid').val();
           var fname=$('#fname').val();
           var lname=$('#lname').val();
           var id=$('#idc').val();
           var email=$('#email').val();
           var tel=$('#tel').val();
           var dates=$('#dates').val();
           var jqxhr =$.ajax(
              {
                type:'POST',
                dataType: 'json',
                data:{fname:fname,lname:lname,id:id,nid:nid,email:email,tel:tel,dates:dates},
                url:'database/registerclient.php',
               }
            ).done(function(data){
             if(data[0].statuss==='insert')
               {
               $('#clientreg').modal().hide();
                loadClients();
                location.href=location.href;
                // console.log(data[0].statuss);
               }
               else if(data[0].statuss==='exit'){
                 console.log(data[0].statuss);
             }

           })
            .fail(function(data){
               console.log(data);
            })
       });


      function loadClients(){
         $.ajax({
          url:'database/clients.php',
          dataType:'json',
          type:'GET'
          }).done(function(response){
           $("#tcontent").html(client_com(response));
            console.log(response);
           }).fail(function (error){
            console.log(error);
          });
      }

      function editClient(id){
          alert(id);
      }

     (function(){
      loadClients();
     })();
    </script>
