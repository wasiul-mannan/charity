<?php
include("../../includes/db.php");
session_start();
if (!isset($_SESSION['admin_email'])) {
  echo "<script> window.open('../../login.php','_self')</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>AdminLTE 2 | Dashboard</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
  <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-blue">
  <div class="wrapper">

    <header class="main-header">
      <a href="../../index2.html" class="logo"><b>Admin</b>LTE</a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
        
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
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
            <p></p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..." />
            <span class="input-group-btn">
              <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="../../index.php">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="pull-right"></i>
            </a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Tables</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="../tables/data.php"><i class="fa fa-circle-o"></i> Donation tables</a></li>
              <li><a href="../tables/data1.php"><i class="fa fa-circle-o"></i> Volunteer tables</a></li>
            </ul>
          </li>
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Forms</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li class="treeview"><a href="blog.php"><i class="fa fa-circle-o"></i> Blog</a></li>
              <li class="treeview active"><a href="fundraise.php"><i class="fa fa-circle-o"></i> Fundraise</a></li>
            </ul>
          </li>
          <li>
            <a href="../calendar.php">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
              <small class="label pull-right bg-red">3</small>
            </a>
          </li>
          <li>
            <a href="../mailbox/mailbox.php">
              <i class="fa fa-envelope"></i> <span>Mailbox</span>
              <small class="label pull-right bg-yellow">12</small>
            </a>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          General Form Elements
          <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Forms</a></li>
          <li class="active">General Elements</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <form action="insert_fundraise.php" method="post" enctype="multipart/form-data">
          <div class="row">

            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">

                <!-- form start -->

                <div class="box-body">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File banner</label>
                    <input type="file" name="banner_path">
                  </div>
                </div><!-- /.box-body -->


                <div class="box-footer">
                  <input type="submit" class="btn btn-primary" name="submit" required>
                </div>

              </div><!-- /.box -->
            </div>
            <!--/.col (left) -->

            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">

                <div class="box-body">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" rows="3" placeholder="Enter content" name="content"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Target amount</label>
                    <input class="form-control" rows="3" placeholder="Enter target amount" name="target">
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
            <!--/.col (right) -->
          </div> <!-- /.row -->

        </form>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
      </div>
      <strong>Copyright &copy; 2021-2022 <a href="http://almsaeedstudio.com">Sabrina sultana</a>.</strong> All rights reserved.
    </footer>
  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.3 -->
  <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- FastClick -->
  <script src='../../plugins/fastclick/fastclick.min.js'></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/app.min.js" type="text/javascript"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js" type="text/javascript"></script>
</body>

</html>