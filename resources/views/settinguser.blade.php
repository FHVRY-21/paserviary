<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PASR | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    
    <link href="{{ url('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Ionicons -->
    <link href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ url('css/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ url('css/dist/css/AdminLTE.min.css')}}" rel="stylesheet">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ url('css/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>PASR</b> </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Pemberitahuan</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ url('/css/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ \Auth::user()->nama_depan }} {{ \Auth::user()->nama_belakang }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ url('/css/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                    <p>
                      {{ \Auth::user()->nama_depan }} {{ \Auth::user()->nama_belakang }} - {{ \Auth::user()->role }}
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ url('/settingusr')}}" class="btn btn-default btn-flat">Setting</a>
                    </div>
                    <div class="pull-right">
<a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" id="jas" class="btn btn-default btn-flat"><i class="icon wb-power" aria-hidden="true"></i>Logout</a>
    
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
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
              <img src="{{ url('/css/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ \Auth::user()->nama_depan }} {{ \Auth::user()->nama_belakang }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <ul class="sidebar-menu">
            <li class="header"  class="active">Navigasi Utama</li>
            <li class="active treeview">
            <a href="{{ url('/ptnusr')}}">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
                <span class="label label-primary pull-right"></span>
              </a>
              <li class="treeview">
              <a href="#">
                <i class="fa fa-leaf"></i> <span>Produksi</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/inputprdks')}}"><i class="fa fa-circle-o"></i> Input Hasil Produksi </a></li>
                <li><a href="{{ url('/prdkstab')}}"><i class="fa fa-circle-o"></i>Data Hasi Produksi</a></li>
              </ul>
            </li>
                                      <li class="treeview">
              <a href="#">
                <i class="fa  fa-envelope"></i> <span>Pesanan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/orderptn')}}""><i class="fa fa-circle-o"></i> Daftar Pesanan </a></li>
                <li><a href="{{ url('/orderptnh')}}"><i class="fa fa-circle-o"></i>Data Hasi Produksi</a></li>
              </ul>
            </li>
              <li class=" treeview">
            <a href="{{ url('/shop')}}">
                <i class="fa fa-shopping-chart"></i>
                <span>Belanja</span>
                <span class="label label-primary pull-right"></span>
              </a>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Profil
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ url('/ptnusr')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ url('/')}}">Setting</a></li>
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
<!-- /.box -->


                
                
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Informasi Pribadi</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ url('/updateusr')}}">
                  <div class="box-body">
                  
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">          

                  <label for="exampleInputEmail1">Nama Depan</label>
  <div class="input-group">
                     
                    <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                    <input type="text" class="form-control" name="nama_depan value="{{ \Auth::user()->nama_depan }}">  </input>
                  </div>

                                    <label for="exampleInputEmail1">Foto Profil</label>
  <div class="input-group">
                     
                  <label>Input Gambar</label>
                      <input type="file" name="gambar">
                  </div>
                                    <label for="exampleInputEmail1">Nama Belakang</label>
  <div class="input-group">
                     
                    <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                    <input type="text" class="form-control" name="nama_belakang" value="{{ \Auth::user()->nama_belakang }}">  </input>
                  </div>
                  <br>
                                    <label for="exampleInputEmail1">Password</label>
  <div class="input-group">
                     
                    <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                    <input type="password" class="form-control" name="password" value="">  </input>
                                      <label for="exampleInputEmail1">Konfirmasi Password</label>
  <div class="input-group">
                     
                    <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                    <input type="pasword" class="form-control" name="password" value="">  </input>
                  </div>
                  </div>
                                    <label for="exampleInputEmail1">Alamat</label>
  <div class="input-group">
                     
                    <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                    <input type="text" class="form-control" name="alamat" value="{{ \Auth::user()->alamat }}">  </input>
                  </div>
                                            <label for="exampleInputEmail1">No. Telp</label>
  <div class="input-group">
                     
                    <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                    <input type="text" class="form-control" name="no_telp" value="{{ \Auth::user()->no_telp }}">  </input>
                  </div>
        @if(Auth::user()->role="Petani")
                                    <label for="exampleInputEmail1">Nomor Rekening</label>
  <div class="input-group">
                     
                    <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                    <input type="text" class="form-control" name="no_rekening" value="{{ \Auth::user()->no_rekening  }}">  </input>
                  </div>
                  @endif
                                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                  </div>
                </form>
              </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ url('js/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script> 
    <!-- Bootstrap 3.3.5 -->

    <script src="{{ url('js/js/bootstrap.min.js')}}"></script> 
    <!-- DataTables -->
    <script src="{{ url('js/plugins/datatables/jquery.dataTables.min.js')}}"></script> 
        <script src="{{ url('js/plugins/datatables/dataTables.bootstrap.min.js')}}"></script> 
    <!-- SlimScroll -->
        <script src="{{ url('js/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script> 
  
    <!-- FastClick -->

        <script src="{{ url('js/plugins/fastclick/fastclick.min.js')}}"></script> 

    <!-- AdminLTE App -->
            <script src="{{ url('js/dist/js/app.min.js')}}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('js/dist/js/demo.js')}}"></script> 
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
