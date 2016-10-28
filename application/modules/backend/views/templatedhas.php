<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>News</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/css/bootstrap.min.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/css/AdminLTE.min.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/plugins/morris/morris.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/plugins/iCheck/all.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href=" <?php echo base_url();?>backend/dhasboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>News</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>News</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src=" <?php echo base_url();?>assets/backend/img/user.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">  <?php echo  $this->session->userdata('back_name'); ?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/backend/img/user.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('back_name'); ?>
                  <small>
                    </small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href=" <?php  echo base_url();?>auth/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="  <?php echo base_url();?>assets/backend/img/user.jpg " class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $this->session->userdata('back_name'); ?>  </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Admins</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href=" <?php echo base_url();?>backend/admins"><i class="fa fa-circle-o"></i>Account</a></li>
            <li><a href=" <?php echo base_url();?>backend/level"><i class="fa fa-circle-o"></i>Level</a></li>
            <li><a href=" <?php echo base_url();?>backend/access"><i class="fa fa-circle-o"></i>Access Level</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>backend/article"><i class="fa fa-circle-o"></i>Article</a></li>
            <li><a href="<?php echo base_url();?>backend/category"><i class="fa fa-circle-o"></i>Category</a></li>
            <li><a href="<?php echo base_url();?> "><i class="fa fa-circle-o"></i>Gallery</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


  <?php echo $contents; ?>


  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Belajar Codeiniter</b>
    </div>
     News
  </footer>

    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>




 <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery-1.11.2.min.js" ></script>   

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src=" <?php echo base_url();?>assets/backend/js/bootstrap.min.js"></script>

<script src=" <?php echo base_url();?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src=" <?php echo base_url();?>assets/backend/plugins/datatables/dataTables.bootstrap.min.js"></script>

  <script>
  $(function () {
    $("#datatables1").DataTable();
    $('#datatables2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<!-- Script Data Table Harus Diwaha js data table -->

<script src=" <?php echo base_url();?>assets/backend/plugins/morris/morris.min.js"></script>
<script src=" <?php echo base_url();?>assets/backend/plugins/ckeditor/ckeditor.js"></script>

<script src=" <?php echo base_url();?>assets/backend/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src=" <?php echo base_url();?>assets/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src=" <?php echo base_url();?>assets/backend/plugins/knob/jquery.knob.js"></script>
<script src=" <?php echo base_url();?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
<script src=" <?php echo base_url();?>assets/backend/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src=" <?php echo base_url();?>assets/backend/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src=" <?php echo base_url();?>assets/backend/plugins/fastclick/fastclick.js"></script>
<script src=" <?php echo base_url();?>assets/backend/js/app.min.js"></script>
<script src=" <?php echo base_url();?>assets/backend/js/pages/dashboard.js"></script>
<script src=" <?php echo base_url();?>assets/backend/js/demo.js"></script>
<script src=" <?php echo base_url();?>assets/backend/plugins/iCheck/icheck.min.js"></script>


</body>
</html>
