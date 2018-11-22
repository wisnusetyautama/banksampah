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
        <li class="breadcrumb-item">Manage Blog</li>
      </ol>

<!-- start content -->
              <a href="<?php echo base_url("Blog/tambahpost"); ?>"><button class="btn btn-primary btn-xs no-border" id="open-event" title="Posting Baru">
                <i class="fa fa-pencil"></i> New Post
              </button></a><br><br>
      <div class="card mb-3">
        <div class="card-header">
        <i class="fa fa-table"></i> Review Blog</div>
        <div class="card-body">
          <div class="table-responsive">             
            <table class="table table-bordered" id="tblBlog" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>Writter</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>Writter</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
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
    
    <!-- Delete Modal-->
    <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="<?php echo base_url("Blog/deleteblog/"); ?>"  class="form-horizontal style-form" method="post" name="power">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Blog</h5>
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
      var id_pariwisata;
    
      $(function() {
        var tblBlog = $("#tblBlog").DataTable({
          "columnDefs": [{
            "searchable": false,
            "orderable": false,
            "targets": [0, 4]
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
            url: "<?php echo site_url("Welcome/get_all_blog"); ?>",
            type: "POST",
            error: function() {
              $("#tblBlog_processing").css("display", "none");
            }
          },
          "dom": "<\"pull-left\"f><\"pull-left\"l><\"pull-left\"r><<t>ip>"
        });
        tblBlog.on("draw.dt", function () {
          var page = tblBlog.page.info().page;
          var length = tblBlog.page.info().length;
          tblBlog.column(0, {
            search: "applied", 
            order: "applied"
          }).nodes().each(function (cell, i) {
            cell.innerHTML = ((page * length) + (i + 1)) + ".";
          });
        });
      });
      
      function deleteblog(id) {
        $("#id_delete").val(id);
        $("#modal_delete").modal("show");
      }
    </script>
  </div>
</body>

</html>
