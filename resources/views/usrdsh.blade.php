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

    <!-- Theme style -->
        <link href="{{ url('css/dist/css/AdminLTE.min.css')}}" rel="stylesheet">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
        <link href="{{ url('css/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet">
    <!-- iCheck -->
    
    <link href="{{ url('css/plugins/iCheck/flat/blue.css')}}" rel="stylesheet">
    <!-- Morris chart -->
 
        <link href="{{ url('css/plugins/morris/morris.css')}}" rel="stylesheet">

    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link href="{{ url('css/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">

    <!-- Date Picker -->
        <link href="{{ url('css/plugins/datepicker/datepicker3.css')}}" rel="stylesheet">

    <!--  picker -->
        <link href="{{ url('css/plugins/datarangepicker/datarangepicker-bs3.css')}}" rel="stylesheet">

    <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{ url('css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet">


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
        <a href="/usrdsh" class="logo">
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
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/css/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ \Auth::user()->nama_depan }} {{ \Auth::user()->nama_belakang }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/css/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      {{ \Auth::user()->nama_depan }} {{ \Auth::user()->nama_belakang }} - {{ \Auth::user()->role }}
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ url('/setting')}}" class="btn btn-default btn-flat">Setting</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
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
              <img src="/css/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"  class="active">Navigasi Utama</li>
            <li class="active treeview">
            <a href="{{ url('/usrdsh')}}">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
                <span class="label label-primary pull-right"></span>
              </a>
                                      <li class="treeview">
              <a href="#">
                <i class="fa  fa-envelope"></i> <span>Pesanan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="'{{ url('/orderusr')}}'"><i class="fa fa-circle-o"></i> Daftar Pesanan </a></li>
                <li><a href="{{ url('/orderusrh')}}"><i class="fa fa-circle-o"></i>Riwayat Pesanan</a></li>
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
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ \App\Pembelian::where(['id_user' => \Auth::user()->id, 'status_pembayaran' => "Belum Dibayar"])->get()->count() }}</h3>
                  <p>Kantong Belanja</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('/orderusr')}} class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{ \App\Pembelian::where(['id_user' => \Auth::user()->id, 'status_pembayaran' => "Menunggu Konfirmasi"])->get()->count() }}</h3>
                  <p>Order On Hold</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('/orderusr')}}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ \App\Pembelian::where(['id_user' => \Auth::user()->id, 'status_pembayaran' => "Sudah Dikonfirmasi"])->get()->count() }} </h3>
                  <p>Jumlah Transaksi</p>
                </div>
                <div class="icon">
                  <i class="ion ion-leaf"></i>
                </div>

                <a href="{{ url('/orderusrh')}}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              
              <!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->

              </div><!-- /.nav-tabs-custom -->

              <!-- Chat box -->
    <!-- /.box (chat box) -->

              <!-- TO DO List -->


              <!-- quick email widget -->

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
        <script src="{{ url('js/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>

    <!-- jQuery UI 1.11.4 -->
            <script src="{{ url('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js')}}"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ url('js/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
                    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>

    <script src="{{ url('js/plugins/morris/morris.min.js')}}"></script> 
    <!-- Sparkline -->
    <script src="{{ url('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script> 
    <!-- jvectormap -->
     <script src="{{ url('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script> 
   
     <script src="{{ url('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->

     <script src="{{ url('js/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')}}"></script>
    <script src="{{ url('js/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{ url('js/plugins/datepicker/bootstrap-datepicker.js')}}"></script>

    <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ url('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>


    <!-- Slimscroll -->
            <script src="{{ url('js/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>

    <!-- FastClick -->
                <script src="{{ url('js/plugins/fastclick/fastclick.min.js')}}"></script>

    <!-- AdminLTE App -->
     <script src="{{ url('js/dist/js/app.min.js')}}"></script> 

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('js/dist/js/dashboard.js')}}"></script> 
    <!-- AdminLTE for demo purposes -->
    
    <script src="{{ url('js/dist/js/demo.js')}}"></script> 
  </body>
</html>
