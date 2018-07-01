<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/App/phpappbuilder/admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/App/phpappbuilder/admin/assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/App/phpappbuilder/admin/assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/App/phpappbuilder/admin/assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/App/phpappbuilder/admin/assets/dist/css/skins/_all-skins.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<div class="wrapper">


   <?=$header?>


    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/App/phpappbuilder/admin/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                        <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                    </ul>
                </li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Layout Options</span>
                        <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                        <li><a href="boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                        <li><a href="fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                        <li class="active"><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../widgets.html">
                        <i class="fa fa-th"></i> <span>Widgets</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Charts</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                        <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                        <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                        <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                        <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                        <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                        <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                        <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                        <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                        <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                        <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                        <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../calendar.html">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href="../mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Examples</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                        <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                        <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                        <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                        <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                        <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                        <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                        <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                        <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-circle-o"></i> Level One
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    </ul>
                </li>
                <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sidebar Collapsed
                <small>Layout with collapsed sidebar on load</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Layout</a></li>
                <li class="active">Collapsed Sidebar</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="callout callout-info">
                <h4>Tip!</h4>

                <p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a
                    fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched
                    vertically.</p>
            </div>
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    Start creating your amazing application!
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>


    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="/App/phpappbuilder/admin/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="/App/phpappbuilder/admin/assets/bower_components/raphael/raphael.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/morris.js/morris.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/moment/min/moment.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/App/phpappbuilder/admin/assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="/App/phpappbuilder/admin/assets/dist/js/adminlte.min.js"></script>

</body>
</html>
