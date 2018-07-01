<header class="main-header">
    <!-- Logo -->
    <a href="/App/phpappbuilder/admin/assets/index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><?=$LogoSmall?></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><?=$LogoBig?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
                <?php if (isset($dropdown) && is_array($dropdown)) {
                    foreach ($dropdown as $key => $value) { ?>
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="<?php echo $value['fa_icon'];?>"></i>
                                <?php if (isset($value['label']) && $value['label']!='') {?>
                                <span class="label label-<?php if(isset($value['label_type']) && $value['label_type']!='') { echo $value['label_type']; } else {echo "success"; }?>"><?php echo $value['label']; ?></span>
                                <?php } ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if (isset($value['header'])) {?>
                                    <li class="header"><?php echo $value['header']; ?></li>
                                <?php } ?>
                                <?php if (isset($value['content'])) {?>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <?php echo $value['content']; ?>
                                            </li>
                                        </ul>
                                    </li>
                                <?php } ?>
                                <?php if (isset($value['footer'])) {?>
                                    <li class="footer"><?php echo $value['footer']; ?></li>
                                <?php } ?>

                            </ul>
                        </li>
                <?php }}?>

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/App/phpappbuilder/admin/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">user<!--Alexander Pierce--></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="/App/phpappbuilder/admin/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
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
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
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