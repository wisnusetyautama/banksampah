<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <?php
      $page = "Admin";
      $title = "Admin - Bank Sampah Makmur";
      include_once("head_import.php");
    ?>
</head>

<body data-spy="scroll" data-target="#mainNav" id="page-top" >
  <!-- Navigation-->
    <?php
      include_once("header.php");
    ?>
    
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item ">
          Ubah Password  
        </li>
      </ol>
<!-- start content -->

                <form role="form" action="<?php echo site_url("ManageUser/proses"); ?>" method="post" id="form_ubah" name="form_ubah">
                  <label class="col-lg-3 control-label" for="varchar"><strong>Current Password</strong></label>
                    <div class="form-group">
                      <div class="col-lg-5">
                        <input type="Password" class="form-control" name="Password" id="Password" required="true" />
                      </div>
                    </div>

                  <label class="col-lg-3 control-label" for="varchar"><strong>New Password</strong></label>
                    <div class="form-group">
                      <div class="col-lg-5">
                        <input type="Password" class="form-control" name="Password1" id="Password1" value="" required="true" />
                      </div>
                    </div>

                  <label class="col-lg-3 control-label" for="varchar"><strong>Confirm New Password</strong></label>
                    <div class="form-group">
                      <div class="col-lg-5">
                        <input type="Password" class="form-control" name="Password2" id="Password2" required="true" />
                      </div>
                    </div>

                          <div class="col-lg-12" align="right">
                            <button class="btn btn-success btn-lg ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-save"></span> Save&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </button>
                            <a href="#" class="btn btn-danger btn-lg " data-dismiss="modal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-trash"></span> Cancel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                          </div> 
<!-- end content -->

    </div>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Bank Sampah Salatiga 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

        <!-- Update Modal-->
    <div class="modal fade" id="tambahu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
          </div>
                <div class="modal-body">
                  <form action=""  class="form-horizontal style-form" method="post" name="power" enctype="multipart/form-data" >
                 <label>Nama Pemakai</label> <input type="text" class="form-control" name="pemakai" id="pemakai" placeholder="Pemakai"/>
                </div>


          <div class="modal-footer">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button> 
                  <a href="#" data-dismiss="modal" class="btn btn-danger">Cancel</a>
                </div>
          </div>
        </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>asset/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>asset/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>asset/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>asset/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
  </div>
</body>

</html>
