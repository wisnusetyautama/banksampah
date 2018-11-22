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

<body data-spy="scroll" data-target="#mainNav" id="page-top">
  <!-- Navigation-->
    <?php
      include_once("header.php");
    ?>
    
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          Blog
        </li>
        <li class="breadcrumb-item ">Input Category</li>
      </ol>
    </div>

                <form action="<?php echo base_url("Category/postcategory"); ?>" class="form-horizontal style-form" method="post" name="power">
                  <label class="col-lg-3 control-label" for="varchar"><strong>Input Category : </strong></label>
                    <div class="form-group">
                        <div class="col-sm-6">
                          <table>
                            <tr>
                              <th class="col-lg-3">
                              <input type="text" class="form-control" required="true" name="kategori" id="kategori" placeholder="Category" value="" />
                              </th>
                              <th>
                              <button type="submit" class="btn btn-info" name="submit" value="submit">Submit</button>
                              </th>
                            </tr>
                          </table>
                        </div>
                    </div>
              </form>

    <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Review Category</div>
        <div class="card-body">
          <div class="table-responsive">            
            <table class="table table-bordered" id="tblcategory" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th >No.</th>
                  <th >Kategori</th>
                  <th width="200px">Action</th>
                </tr>
              </thead>
 <!--              <tbody>
                <tr>
                  <td>System Architect</td>
                  <td>
                        
                    <button class="btn btn-primary btn-xs no-border" data-toggle="modal" data-target="#dd" id="hide-option" title="Update">
                        <i class="fa fa-pencil-square-o"></i>
                      </button>
                                                  
                    <button class="btn btn-danger btn-xs no-border"  id="show-option" title="Delete">
                        <i class="fa fa-trash-o"></i>
                      </button>                  
                  </td>
                </tr>
                </tr>
              </tbody> -->
            </table>
            </div>
          </div>
        </div>
      </div>
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
    <div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="<?php echo base_url("Category/updatecategory/"); ?>"  class="form-horizontal style-form" method="post" name="power">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
                <div class="modal-body">
                  <input type="hidden" name="id_update" id="id_update" />
                  <input type="text" class="form-control" name="kategori_update" id="kategori_update" placeholder="Category" value="" required="true" />
                </div>
              <div class="modal-footer">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="submit" value="submit">Update</button> 
                  <a href="#" data-dismiss="modal" class="btn btn-danger">Cancel</a>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="<?php echo base_url("Category/deletecategory/"); ?>"  class="form-horizontal style-form" method="post" name="power">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Caategory</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body"><input type="hidden" name="id_delete" id="id_delete" />Are You Sure ?</div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="submit" value="submit">Yes</button> 
              <a href="#" data-dismiss="modal" class="btn btn-danger">No</a>
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
    <script src="<?php echo base_url(); ?>asset/admin/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/js/sb-admin-charts.min.js"></script>

    <script>
      var id;
    
      $(function() {
        var tblcategory = $("#tblcategory").DataTable({
          "columnDefs": [{
            "searchable": false,
            "orderable": false,
            "targets": [0, 2]
          }],
          "order": [[1, "asc"]],
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "language": {
            "lengthMenu": "&nbspTampilkan _MENU_ data",
            "search": "Pencarian :",
            "searchPlaceholder": "Masukkan kata kunci",
            "zeroRecords": "Tidak ada data ditemukan",
            "info": "Menampilkan data _START_ s/d _END_ dari _TOTAL_ data",
            "infoEmpty": "Menampilkan data _END_ s/d _END_ dari _TOTAL_ data",
            "infoFiltered": " (pencarian dari total _MAX_ data)"
          },
          "bProcessing": true,
          "serverSide": true,
          "ajax": {
            url: "<?php echo site_url("Welcome/get_all_category"); ?>",
            type: "POST",
            error: function() {
              $("#tblcategory_processing").css("display", "none");
            }
          },
          "dom": "<\"pull-left\"f><\"pull-left\"l><\"pull-left\"r><<t>ip>"
        });
        tblcategory.on("draw.dt", function () {
          var page = tblcategory.page.info().page;
          var length = tblcategory.page.info().length;
          tblcategory.column(0, {
            search: "applied", 
            order: "applied"
          }).nodes().each(function (cell, i) {
            cell.innerHTML = ((page * length) + (i + 1)) + ".";
          });
        });
      });
      
      function deletecategory(id) {
        $("#id_delete").val(id);
        $("#modal_delete").modal("show");
      }

      function updatecategory(id, kategori) {
        $("#id_update").val(id);
        $("#kategori_update").val(kategori);
        $("#modal_update").modal("show");
      }
    </script>    
  </div>
</body>

</html>
