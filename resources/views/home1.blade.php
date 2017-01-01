<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E- | Cantina</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{$css}}bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{$css}}font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{$ico}}ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{$css}}AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{$css}}skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{$plg}}iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{$plg}}morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{$plg}}jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{$plg}}datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{$plg}}daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{$plg}}bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><span class="ion-ios-home"></span></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E-</b>Cantina</span>
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
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Solicitudes de aprobación de Recarga</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  @for($i=0; $i<4; $i++)
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                      </div>
                      <h4>
                        Mensaje N&uacute;mero <?=$i + 1?>
                        <small><i class="fa fa-clock-o"></i> Fecha</small>
                      </h4>
                      <p>Glosa mensaje <?=$i + 1?></p>
                    </a>
                  </li>
                  <!-- end message -->
                  @endfor
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todos los mensajes</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Solicitudes de afiliaci&oacute;n</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  @for($i=0;$i<10;$i++)
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Solicitud: <?=$i + 1?>
                      <small class="pull-right"><i class="fa fa-clock-o"></i> Fecha</small>
                    </a>
                  </li>
                  @endfor
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todas las solicitudes</a></li>
            </ul>
          </li>
          <!--Usuario-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{$pic}}lodeseo.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{$pic}}lodeseo.jpg" class="img-circle" alt="User Image">

                <p>
                  Nombre del usuario - Nivel
                  <small>Instituci&oacute;n a la que pertenece</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!--
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
              </li>
              -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Salir</a>
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
          <img src="{{$pic}}lodeseo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
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
        <li class="header">MENU</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="mn-empleado"><a href="#"><i class="fa fa-circle-o"></i> Empleados</a></li>
            <li id="mn-representante"><a href="#"><i class="fa fa-circle-o"></i> Representantes</a></li>
            <li id="mn-estudiante"><a href="#"><i class="fa fa-circle-o"></i> Estudiantes</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Productos</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Alim. procesados</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Alim. no procesados</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Otros productos</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-credit-card"></i> <span>Facturaci&oacute;n</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Inventario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Art&iacute;culos consumibles</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Alimentos procesados</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Facturaci&oacute;n</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Recargas</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Ganancias y p&eacute;rdidas</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inventario</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Escritorio
        <small>Instituci&oacute;n</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <section class="col-lg-12">
        <!--================================================================================================-->
        <!--CAJAS SUPERIORES-->
        <!--================================================================================================-->
        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->

          <div class="small-box bg-aqua">
            <div class="inner">
                <h3><span class="ion-social-usd"></span></h3>

              <p>Nueva Factura</p>
            </div>
            <div class="icon">
                <i class="ion ion-card"></i>
            </div>
            <a href="#" class="small-box-footer">Click aqu&iacute; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
 
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Alcance Diario</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Click aqu&iacute; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Clientes afiliados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Click aqu&iacute; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
                <h3><span class="ion-ios-list"></span></h3>

              <p>Reportes</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
              <a href="#" class="small-box-footer">Cilck aqu&iacute; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!--================================================================================================-->
        <!--./CAJAS SUPERIORES-->
        <!--================================================================================================-->    
          
      </section>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-8 connectedSortable">
            <!--ACA VA UN YIELD-->
        </section>

        <section class="col-lg-4 connectedSortable">
            <!--ACA VA OTRO YIELD-->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="#">IDR-SERV</a>.</strong>

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" id="menu-derecha-home" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Actividad Reciente</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cumplea&ntilde;os empleado</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Ventas por producto</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
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
            <a href="javascript:void(0)">
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
            <a href="javascript:void(0)">
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
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">Configuraciones</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Descuentos
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">%</span>
                <input type="text" class="form-control" placeholder="Descuento" aria-describedby="sizing-addon2">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="fa fa-save text-success"></span>
                    </button>
                  </span>
              </div>
            <br>
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              I.V.A.
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">%</span>
                <input type="text" class="form-control" placeholder="I.V.A." aria-describedby="sizing-addon2">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                      <span class="fa fa-save text-success"></span>
                  </button>
                  </span>
              </div>
            <br>
            </p>
          </div>
          
          <hr class="text-success"/>
          <!-- /.form-group -->
          <div class="form-group">
              <p>
                  <button class="btn btn-success" style="width: 100%;">Establecer Permisos</button>
              </p>
          </div>
          
          <h3 class="control-sidebar-heading">Eliminar Empleado</h3>

          <div class="form-group"> 
            <p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar" aria-describedby="sizing-addon2">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                      <span class="fa fa-binoculars text-success"></span>
                  </button>
                  </span>
              </div>
            <br>
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
                Datos del Empleado<br>
                Se eliminan solo de manera lógica
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Eliminar
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{$js}}jquery-3.1.1.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{$js}}bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{$plg}}morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{$plg}}sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{$plg}}jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{$plg}}jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{$plg}}knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{$plg}}daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{$plg}}datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{$plg}}bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{$plg}}slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{$plg}}fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{$js}}app.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#menu-derecha-home").click();
    });
</script>

</body>
</html>
