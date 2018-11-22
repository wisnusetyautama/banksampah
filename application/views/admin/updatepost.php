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
        <li class="breadcrumb-item active">
          Manage Blog  
        </li>        
        <li class="breadcrumb-item">New Post</li>
      </ol>

<!-- start content -->

                <form action="<?php echo base_url("Blog/update2/") . $id; ?>" class="form-horizontal style-form" method="post" name="power" enctype="multipart/form-data" onsubmit="return validation();">
                          <div class="col-lg-12" align="right">
                            <button type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-send"></span> Update&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </button>
                            <a href="<?php echo base_url("Blog"); ?>" class="btn btn-danger btn-lg " data-dismiss="modal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-trash"></span> Cancel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                          </div> 
<br><br>
                    <center><div class="form-group">
                      <div class="col-lg-5">
                        <input type="text" class="form-control" name="judul_post" id="judul_post" placeholder="       Judul       " style="    border: none; border-bottom: 2px solid red; font-size: 40px; text-align: center; overflow: hidden; word-wrap: break-word; height: 62px; resize: horizontal;" value="<?php echo $blog->judul; ?>" required="true" />
                      </div>
                    </div></center>

                  <label class="col-lg-3 control-label" for="varchar"><strong>Penulis</strong></label>
                    <div class="form-group">
                      <div class="col-lg-5">
                        <input type="text" class="form-control" name="penulis" id="penulis" value="<?php echo $blog->penulis; ?>" placeholder="Penulis        " style=" border: none; border-bottom: 2px solid red; font-size: 18px;" />
                      </div>
                    </div>

                  <label class="col-lg-3 control-label" for="file"><strong>Post</strong></label>
                    <div class="form-group">
                      <div class="col-lg-12">
                        <textarea class="ckeditor" id="ckedtor" name="post"><?php echo $blog->post; ?></textarea>
                      </div>
                    </div>

                  <label class="col-lg-3 control-label" for="file"><strong>Foto</strong></label>
                    <div class="form-group">
                      <div class="col-lg-5">     
                        <img id="uploadPreview" style="width: 150px; height: 150px;" src="<?php echo $blog->foto; ?>"/><br>
                        <h3><br>Change With : <br></h3>                        
                        <input id="uploadImage" type="file" name="image" onchange="previewImage(this,[150],4);" />
                        <div class="imagePreview"></div>                      
                      </div>
                    </div> 

                  <label class="col-lg-3 control-label"><strong> Category</strong></label>
                    <div class="form-group col-lg-5">
                      <?php
                        $arr_category = explode(",", $blog->category);
                        foreach ($listCategory as $category) {
                          $checked = "";
                          foreach ($arr_category as $ac) {
                            if ($ac == $category->id) {
                              $checked = "checked";
                              break;
                            }
                          }
                      ?>
                        <div class="checkbox-group required">
                          <label>
                            <input type="checkbox" name="category[]" value="<?php echo $category->id; ?>" <?php echo $checked; ?>> <?php echo $category->kategori; ?>
                          </label>
                        </div>
                      <?php
                          }
                      ?>
                    </div>
                  </form>
                                                                          
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
    <script src="<?php echo base_url(); ?>asset/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/js/stretchy.min.js" async></script>
    <script src="<?php echo base_url(); ?>asset/admin/js/html5.image.preview.min.js"></script>    
  </div>

  <script>
    function validation() {
       if ($('div.checkbox-group.required :checkbox:checked').length == 0) {
          alert("isi kategori !");
          return false;
       } else {
        return true;
       }
    }
  </script>
</body>

</html>
