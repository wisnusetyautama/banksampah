<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo site_url("Admin"); ?>"><span class="fa fa-recycle"></span> ADMIN [Bank Sampah Makmur]</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li <?php if ($title == "Dashboard") { echo "class=\"active\""; } ?> 
           class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo site_url("Admin"); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-newspaper-o"></i>
            <span class="nav-link-text">Blog</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li <?php if ($title == "Manage Blog") { echo "class=\"active\""; } ?>>
              <a href="<?php echo site_url("Blog"); ?>">Manage Blog</a>
            </li>
            <li <?php if ($title == "Input Category") { echo "class=\"active\""; } ?>>
              <a href="<?php echo site_url("Category"); ?>">Input Category</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
            <i class="fa fa-picture-o"></i>
            <span class="nav-link-text">Gallery</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents2">
           <li <?php if ($title == "Gambar") { echo "class=\"active\""; } ?>>
              <a href="<?php echo site_url("Gambar"); ?>">Gambar</a>
            </li>
           <li <?php if ($title == "Video") { echo "class=\"active\""; } ?>>
              <a href="<?php echo site_url("Video"); ?>">Video</a>
            </li>
          </ul>
        </li>

        <li <?php if ($title == "Manage User") { echo "class=\"active\""; } ?>
         class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo site_url("Manageuser"); ?>">
            <i class="fa fa-users"></i>
            <span class="nav-link-text">Manage User</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
       <a class="nav-link" data-toggle="modal" data-target="#exampleModal">            
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">LOG OUT</span>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

      </ul>
    </div>
  </nav>

<nav style="position: relative;">
<br />
<br />
</nav>

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
            <a class="btn btn-primary" href="<?php echo base_url("Login/logout"); ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>