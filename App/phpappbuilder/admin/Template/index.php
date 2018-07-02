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
    <?=$sidebar?>

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
