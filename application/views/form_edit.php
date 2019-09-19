<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Rapat</title>
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.ico"/>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url()?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url()?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url()?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-plane"></i> <span>Angkasa Pura II</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url()?>assets/img/logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('nama') ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Keterangan</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Rapat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="">Koordinasi</a></li>
                      <li><a href="">Non Rutin</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()?>assets/img/logo.png" alt=""><?php echo $this->session->userdata('nama') ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo site_url('c_login/keluar')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Rapat <!-- <small>Users</small> --></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php
                        foreach ($sql->result() as $obj) {
                          $id = $obj->id;
                          $tanggal = $obj->tanggal;
                          $nomer_rispat = $obj->nomer_rispat;
                          $agenda = $obj->agenda;
                          $jam = $obj->jam;
                          $presenter = $obj->presenter;
                          $undangan = $obj->undangan;
                          $status = $obj->status;
                          $keterangan = $obj->keterangan;
                          $rapat = $obj->rapat;
                      }?> 
                    <form role="form" action="<?php echo base_url(); ?>index.php/c_rapat/simpan_edit" method="POST">
                      <input type="hidden" class="form-control"  name="id" value="<?php echo $id;?>">
                      <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control"  name="tanggal" min="2000-01-02" value="<?php echo $tanggal;?>" >
                      </div>
                      <div class="form-group">
                        <label>Nomer Rispat</label>
                        <input type="text" class="form-control"  name="nomer_rispat" value="<?php echo $nomer_rispat;?>" placeholder="Nomer Rispat">
                      </div>
                      <div class="form-group">
                        <label>Agenda Rapat</label>
                        <input type="text" class="form-control"  name="agenda" value="<?php echo $agenda;?>" placeholder="Agenda Rapat">
                      </div>
                      <div class="form-group">
                        <label>Jam</label>
                        <input type="time" class="form-control"  name="jam" value="<?php echo $jam;?>">
                      </div>
                      <div class="form-group">
                        <label>Presenter</label>
                        <input type="text" class="form-control"  name="presenter" value="<?php echo $presenter;?>" placeholder="Presenter">
                      </div>
                      <div class="form-group">
                        <label>Undangan : </label>
                        <br>
                        <input type="checkbox" name="undangan[]" value="EGM"> EGM <br>
                        <input type="checkbox" name="undangan[]" value="AAM"> AAM <br>
                        <input type="checkbox" name="undangan[]" value="ASF"> ASF <br>
                      </div>
                      <div class="form-group">
                        <label>Status : </label>
                        <select name="status">
                          <option value="Done">Done</option>
                          <option value="Pending">Pending</option>
                          <option value="Cancel">Cancel</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control"  name="keterangan" value="<?php echo $keterangan;?>" placeholder="Keterangan">
                      </div>
                     
                      <input type="hidden" class="form-control"  name="rapat" value="<?php echo $rapat;?>">
                        <button type="submit" value="submit" class="btn btn-default">Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            &copy; 2018 <!-- <a href="https://colorlib.com">Colorlib</a> -->
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url()?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url()?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url()?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url()?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url()?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url()?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url()?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url()?>assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url()?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url()?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>assets/build/js/custom.min.js"></script>
	
  </body>
</html>