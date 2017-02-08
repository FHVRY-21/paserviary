<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PASR | Input Produksi</title>
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
 
        <link href="{{ url('plugins/morris/morris.css')}}" rel="stylesheet">

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
                      <a href="{{ url('/setting')}}" class="btn btn-default btn-flat">Profile</a>
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
            <li class="header">Navigasi Utama</li>
            <li class=" treeview">
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
            Input Produksi
            <small>Petani</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/ptnusr"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Input Produksi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Input Hasil Produksi</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="inputprod" enctype="multipart/form-data">
                  <div class="box-body">
                  
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">  
                                  <input type="hidden" name="nama_petani" value=" ">            

                  <label for="exampleInputEmail1">Nama Hasil Produksi</label>
  <div class="input-group">
                                                       @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
                    <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                    <input type="text" class="form-control" name="nama_barang">
                  </div>
                  <br>
                                      <div class="form-group">
                      <label >Kategori</label>
                      <select class="form-control" name="kategori">
                        <option>Buah</option>
                        <option>Sayur</option>
                        <option>Jamur</option>
                        <option>Olahan</option>
                        <option>Daging Merah</option>
                        <option>Daging Putih</option>
                      </select>
                    </div>
             
                                        <label>Tanggal Panen</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input name="tanggal_panen" type="text" class="form-control" value="tttt/mm/dd">
                    </div><!-- /.input group -->
                  
                  <br>
                  <label for="exampleInputEmail1">Stok</label>
  <div class="input-group">                  
                    <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                    <input type="text" class="form-control" name="jumlah">
                  </div>
                  <br>

                   <br>
                  <label for="exampleInputEmail1">Deskripsi</label>
  <div class="input-group">                  
                    <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                    <textarea class="form-control" name="desr"></textarea>
                  </div>
                  <br>
<input type="hidden" name="id_petani" value="{{ \Auth::user()->id }} ">
<input type="hidden" name="nama_petani" value="{{ \Auth::user()->nama_depan }} ">
<input type="hidden" name="no_rekening" value="{{ \Auth::user()->no_rekening }} ">


                                         <label for="exampleInputEmail1">Harga</label>
                     <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" name="harga">
                  </div>
                  <br>
                                                        <div class="form-group">
                      <label>Satuan</label>
                      <select class="form-control" name="satuan">
                        <option>Kilogram</option>
                        <option>Karung</option>
                        <option>Buah</option>
                        <option>Kotak<option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Input Gambar</label>
                      <input type="file" name="gambar">

                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" formmethod="POST" action="inputprod" enctype="multipart/form-data">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
<div class="col-md-6">


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
