<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>
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
                      <li><a href="<?php echo base_url(); ?>index.php/c_rapat">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Rapat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/c_rapat/rapat_k">Koordinasi</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/c_rapat/rapat_nr">Non Rutin</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
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
                    <!-- <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="<?php echo site_url('c_login/keluar')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <!-- <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a> -->
                  <!-- <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
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
                <h3><?= $title ?> <!-- <small>Some examples to get you started</small> --></h3>
              </div>
              <?php
                $date1="";
                $date2="";
              ?>  
              <form class="form-inline" action="<?php echo site_url('c_rapat/search_date');?>" method = "post">
               <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!-- <div class="input-group"> -->
                    <input type="date" class="form-control" name="date1" value="<?php echo $date1;?>"> s/d
                     <div class="input-group">
                    <input type="date" class="form-control" name="date2" value="<?php echo $date2;?>">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="submit" >Go!</button>
                    </span>
                  </div></div>
                </div>
              </div>
            </form>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jadwal Rapat <!-- <small>Users</small> --></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link btn btn-default btn-xs" ><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a href="" class="btn btn-default btn-xs"><i class="fa fa-refresh"></i></a>
                      </li>
                      <li><a href="<?php echo base_url(); ?>index.php/c_rapat/add" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah Rapat</a>
                      </li>
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- <p class="text-muted font-13 m-b-30">
                      This example shows FixedHeader being styling by the Bootstrap CSS framework.
                    </p> -->
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nomor Rispat</th>
                          <th>Agenda Rapat</th>
                          <th>Jam</th>
                          <th>Presenter</th>
                          <th>Undangan</th>
                          <th>Status</th>
                          <th>Keterangan</th>
                          <th>Rispat</th>
                          <th>Daftar Hadir</th>
                          <th><span class="glyphicon glyphicon-cog"></span></th>
                        </tr>
                      </thead>  

                      <tbody>
                      <?php
                          $datas = array();
                          foreach ($sql->result() as $row) {
                            if(!in_array($row->tanggal, $datas)){
                              $datas[$row->tanggal] = array(
                                'id'            => array(),
                                'nomer_rispat'  => array(),
                                'agenda'        => array(),
                                'jam'           => array(),
                                'presenter'     => array(),
                                'undangan'      => array(),
                                'status'        => array(),
                                'keterangan'    => array(),
                                'rispat'        => array(),
                                'daftar_hadir'  => array()
                              );
                            }
                          }
                          foreach ($sql->result() as $row) {
                            foreach ($datas as $key => $item) {
                              if ($row->tanggal == $key) {
                                  array_push($datas[$row->tanggal]['id'], $row->id);
                                  array_push($datas[$row->tanggal]['nomer_rispat'], $row->nomer_rispat);
                                  array_push($datas[$row->tanggal]['agenda'], $row->agenda);
                                  array_push($datas[$row->tanggal]['jam'], $row->jam);
                                  array_push($datas[$row->tanggal]['presenter'], $row->presenter);
                                  array_push($datas[$row->tanggal]['undangan'], $row->undangan);
                                  array_push($datas[$row->tanggal]['status'], $row->status);
                                  array_push($datas[$row->tanggal]['keterangan'], $row->keterangan);
                                  array_push($datas[$row->tanggal]['rispat'], $row->rispat);
                                  array_push($datas[$row->tanggal]['daftar_hadir'], $row->rispat);
                              }
                            }
                          }
                          // echo "<pre>";
                          foreach ($datas as $tanggal => $data) {
                            echo "<tr>
                                    <td colspan='10'><center>".$tanggal."</center></td>
                                    </tr>"; 
                                $count = count($data['nomer_rispat']);
                                for ($i = 0; $i < $count; $i++){
                                  echo "<tr>
                                        <td>".$data['nomer_rispat'][$i]."</td>";
                                  echo "<td>".$data['agenda'][$i]."</td>";
                                  echo "<td>".$data['jam'][$i]."</td>";
                                  echo "<td>".$data['presenter'][$i]."</td>";
                                  echo "<td>".$data['undangan'][$i]."</td>";
                                  echo "<td>".$data['status'][$i]."</td>";
                                  echo "<td>".$data['keterangan'][$i]."</td>";
                                  ?>
                                  <td>
                                    <!-- <?php echo $data['rispat'][$i]; ?> -->
                                    <a href="" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-upload"></span>
                                  </td>
                                  <td>
                                    <!-- <?php echo $data['daftar_hadir'][$i]; ?> -->
                                    <a href="" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-upload"></span>
                                  </td>
                                  <td>
                                    <a href="<?php echo base_url(); ?>index.php/c_rapat/edit/<?php echo $data['id'][$i];?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a href="<?php echo base_url(); ?>index.php/c_rapat/hapus/<?php echo $data['id'][$i];?>" onclick="return confirm('anda yakin ingin menghapus?')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                                  </td>
                                  <?php
                                  
                                   echo "</tr>";
                                }
                          }
                          // echo "</pre>";
                          // die();
                          ?>

<!-- 
                          <tr>
                            <td colspan="10"><center><?php echo $row->tanggal; ?></center></td>
                          </tr>
                          <tr>
                            <td><?php echo $row->nomer_rispat; ?></td>
                            <td><?php echo $row->agenda; ?></td>
                            <td><?php echo $row->jam; ?></td>
                            <td><?php echo $row->presenter; ?></td>
                            <td><?php echo $row->undangan; ?></td>
                            <td><?php echo $row->status; ?></td>
                            <td><?php echo $row->keterangan; ?></td>
                            <td>
                              <?php echo $row->rispat; ?>
                              <a href="" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-upload"></span>
                            </td>
                            <td>
                              <?php echo $row->daftar_hadir; ?>
                              <a href="" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-upload"></span>
                            </td>
                            <td>
                              <a href="<?php echo base_url(); ?>index.php/c_rapat/edit/<?php echo $row->id;?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                              <a href="<?php echo base_url(); ?>index.php/c_rapat/hapus/<?php echo $row->id;?>" onclick="return confirm('anda yakin ingin menghapus?')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                            </td> -->
                          </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            &copy; 2018 
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