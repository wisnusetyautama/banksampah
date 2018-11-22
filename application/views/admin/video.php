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

<style type="text/css">
  <style>
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</style>

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
          Gallery  
        </li>
        <li class="breadcrumb-item">Video</li>
      </ol>

<!-- start content -->
              <a href="#inputModal" class="btn btn-primary btn-xs no-border" id="open-event" data-toggle="modal"><i class="fa fa-pencil"></i> New Post</a>
              
              <br><br>

<div class="table-responsive">
    <table class="table no-border">
        <tbody>
            <tr>
                <td>
                    <div class="gallery">
                      <video width="240" height="160" controls>
                        <source src="<?php echo base_url(); ?>public/sampah 1.mp4" type="video/mp4">
                        Your browser does not support the video tags.
                      </video>
                        <div class="desc">Add a description of the image heres</div>
                        <div class="desc">
                         <a href="#updateModal" class="btn btn-primary btn-xs no-border " id="open-event" data-toggle="modal" title="Update">
                              <i class="fa fa-pencil-square-o"></i>
                          </a>                             
                          <button class="btn btn-danger btn-xs no-border"  id="show-option" title="Delete">
                              <i class="fa fa-trash-o"></i>
                          </button>       
                        </div>
                    </div>
                </td>
                <td>
                    <div class="gallery">
                      <video width="240" height="160" controls>
                        <source src="<?php echo base_url(); ?>public/sampah 1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                        <div class="desc">Add a description of the image here</div>
                        <div class="desc">
                          <button class="btn btn-primary btn-xs no-border " id="hide-option" title="Update">
                              <i class="fa fa-pencil-square-o"></i>
                          </button>                               
                          <button class="btn btn-danger btn-xs no-border"  id="show-option" title="Delete">
                              <i class="fa fa-trash-o"></i>
                          </button>       
                        </div>
                    </div>                  
                </td>
                <td>
                    <div class="gallery">
                      <video width="240" height="160" controls>
                        <source src="<?php echo base_url(); ?>public/sampah 1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                        <div class="desc">Add a description of the image here</div>
                        <div class="desc">
                          <button class="btn btn-primary btn-xs no-border " id="hide-option" title="Update">
                              <i class="fa fa-pencil-square-o"></i>
                          </button>                               
                          <button class="btn btn-danger btn-xs no-border"  id="show-option" title="Delete">
                              <i class="fa fa-trash-o"></i>
                          </button>       
                        </div>
                    </div>            
                </td>
                <td>
                    <div class="gallery">
                      <video width="240" height="160" controls>
                        <source src="<?php echo base_url(); ?>public/sampah 1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                        <div class="desc">Add a description of the image here</div>
                        <div class="desc">
                          <button class="btn btn-primary btn-xs no-border " id="hide-option" title="Update">
                              <i class="fa fa-pencil-square-o"></i>
                          </button>                               
                          <button class="btn btn-danger btn-xs no-border"  id="show-option" title="Delete">
                              <i class="fa fa-trash-o"></i>
                          </button>       
                        </div>
                    </div>  
                </td>                            
            </tr>
        </tbody>
    </table>
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

    <!-- Input Modal--> 
    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="inputModalLabel">Input</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

                <form action="<?php echo base_url("Video/postvideo"); ?>" class="form-horizontal style-form" method="post" name="power">          
              <label class="col-lg-3 control-label" for="varchar"><strong>Video</strong></label>
                  <div class="form-group">
                      <div class="col-lg-5">
                        <article class="styled">
                            <div class="imagePreview"></div>                        
                        <input id="uploadImage" type="file" name="image" onchange="previewImage(this,[150],4);" />
                        </article>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="caption" id="caption" placeholder="Caption ..." style="border: none; border-bottom: 2px solid green; font-size: 16px;  overflow: hidden; word-wrap: break-word; resize: horizontal;" required="true" />
                    </div>
                  </div>   
          </form>               
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info" name="submit" value="submit">Submit</button>
          </div>
        </div>
      </div>
    </div> 

    <!-- Input Modal--> 
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="inputModalLabel">Update</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

                <form action="<?php echo base_url("Video/updatevideo"); ?>" class="form-horizontal style-form" method="post" name="power">          
              <label class="col-lg-3 control-label" for="varchar"><strong>Video</strong></label>
                  <div class="form-group">
                      <div class="col-lg-5">
                        <article class="styled">
                            <div class="imagePreview"></div>                        
                        <input id="uploadImage" type="file" name="image" onchange="previewImage(this,[150],4);" />
                        </article>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="caption" id="caption" style="border: none; border-bottom: 2px solid green; font-size: 16px;  overflow: hidden; word-wrap: break-word; resize: horizontal;" required="true" />
                    </div>
                  </div>   
          </form>               
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info" name="submit" value="submit">Submit</button>
          </div>
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
  </div>
</body>

</html>
