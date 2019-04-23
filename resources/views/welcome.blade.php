<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Acceuil</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="css/app.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="vendors/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/pages/only_dashboard.css" />
    <!--end of page level css-->
</head>

<body class="skin-josh">
<header class="header">
    <a href="index.html" class="logo">
        <img src="img/logo.png" alt="Logo">
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <div class="responsive_nav"></div>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="img/authors/avatar3.jpg" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                        <div class="riot">
                            <div>
                                Riot
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="img/authors/avatar3.jpg" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                            <p class="topprofiletext">Riot Zeast</p>
                        </li>
                        <!-- Menu Body -->
                        <li>
                            <a href="view_user.html">
                                <i class="livicon" data-name="user" data-s="18"></i> My Profile
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li>
                            <a href="adduser.html">
                                <i class="livicon" data-name="gears" data-s="18"></i> Account Settings
                            </a>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="lockscreen.html">
                                    <i class="livicon" data-name="lock" data-s="18"></i> Lock
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="login.html">
                                    <i class="livicon" data-name="sign-out" data-s="18"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar ">
            <div class="page-sidebar  sidebar-nav">
                <div class="nav_icons">
                    <ul class="sidebar_threeicons">
                        <li>
                            <a href="advanced_tables.html">
                                <i class="livicon" data-name="table" title="Advanced tables" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="tasks.html">
                                <i class="livicon" data-c="#EF6F6C" title="Tasks" data-hc="#EF6F6C" data-name="list-ul" data-size="25" data-loop="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="gallery.html">
                                <i class="livicon" data-name="image" title="Gallery" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="users_list.html">
                                <i class="livicon" data-name="users" title="Users List" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <!-- BEGIN SIDEBAR MENU -->
                <ul id="menu" class="page-sidebar-menu">
                    <li class="active">
                        <a href="">
                            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                            <span class="title">Accueil</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="users" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                            <span class="title">Users</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="users_list.html">
                                    <i class="fa fa-angle-double-right"></i> Users List
                                </a>
                            </li>
                            <li>
                                <a href="adduser.html">
                                    <i class="fa fa-angle-double-right"></i> Add New User
                                </a>
                            </li>
                            <li>
                                <a href="view_user.html">
                                    <i class="fa fa-angle-double-right"></i> View Profile
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                            <span class="title">Gestion Client</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('client.index')}}">
                                    <i class="fa fa-angle-double-right"></i> List Clients
                                </a>
                            </li>
                            <li>
                                <a href="{{route('client.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajout Client
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                            <span class="title">Gestion Fournisseur</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('fournisseur.index')}}">
                                    <i class="fa fa-angle-double-right"></i> List Fournisseurs
                                </a>
                            </li>
                            <li>
                                <a href="{{route('fournisseur.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajout Fournisseur
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                            <span class="title">Gestion Articles</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('articles')}}">
                                    <i class="fa fa-angle-double-right"></i> List Articles
                                </a>
                            </li>
                            <li>
                                <a href="{{route('article.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajout Article
                                </a>
                            </li>
                            <li>
                                <a href="{{route('tva.index')}}">
                                    <i class="fa fa-angle-double-right"></i> List TVA
                                </a>
                            </li>
                            <li>
                                <a href="{{route('tva.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajout TVA
                                </a>
                            </li>
                            <li>
                                <a href="{{route('marques.index')}}">
                                    <i class="fa fa-angle-double-right"></i> List Marques
                                </a>
                            </li>
                            <li>
                                <a href="{{route('marque.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajout Marque
                                </a>
                            </li>
                            <li>
                                <a href="{{route('type_art.index')}}">
                                    <i class="fa fa-angle-double-right"></i> List Type Articles
                                </a>
                            </li>
                            <li>
                                <a href="{{route('type_art.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajout Type Article
                                </a>
                            </li>

                        </ul>
                    </li>














                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">

        <!-- Main content -->
        <section class="content-header">
            <h1>Accueil</h1>

        </section>
        <br><br> <br><br>
        <div class="row">
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <a href="#" class="btn btn-primary btn-sm btn-responsive" role="button">
                                    <div class="col-xs-12 pull-left nopadmar">
                                        <div class="row" >
                                            <div class="square_box col-xs-7 pull-left">
                                                <h4>Caisse</h4>

                                            </div>
                                            <i class="livicon pull-right" data-name="table" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="redbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <a href="#" class="btn btn-light btn-sm btn-responsive" role="button">
                                    <div class="col-xs-12 pull-left nopadmar">
                                        <div class="row">
                                            <div class="square_box col-xs-7 pull-left">
                                                <h4>Clients</h4>

                                            </div>
                                            <i class="livicon pull-right" data-name="user" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="goldbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <a href="#" class="btn btn-light btn-sm btn-responsive" role="button">
                                    <div class="col-xs-12 pull-left nopadmar">
                                        <div class="row">
                                            <div class="square_box col-xs-7 pull-left">
                                                <h4>Articles</h4>

                                            </div>
                                            <i class="livicon pull-right" data-name="doc-portrait" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <a href="#" class="btn btn-light btn-sm btn-responsive" role="button">
                                    <div class="col-xs-12 pull-left nopadmar">
                                        <div class="row">
                                            <div class="square_box col-xs-7 pull-left">
                                                <h4>Fournisseur</h4>

                                            </div>
                                            <i class="livicon pull-right" data-name="truck" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
            </section>
        </div>
        <div class="row">
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <a href="#" class="btn btn-primary btn-sm btn-responsive" role="button">
                                    <div class="col-xs-12 pull-left nopadmar">
                                        <div class="row" >
                                            <div class="square_box col-xs-7 pull-left">
                                                <h4>Reglement</h4>

                                            </div>
                                            <i class="livicon pull-right" data-name="credit-card" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="redbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <a href="#" class="btn btn-light btn-sm btn-responsive" role="button">
                                    <div class="col-xs-12 pull-left nopadmar">
                                        <div class="row">
                                            <div class="square_box col-xs-7 pull-left">
                                                <h4>Documents</h4>

                                            </div>
                                            <i class="livicon pull-right" data-name="tags" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="goldbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <a href="#" class="btn btn-light btn-sm btn-responsive" role="button">
                                    <div class="col-xs-12 pull-left nopadmar">
                                        <div class="row">
                                            <div class="square_box col-xs-7 pull-left">
                                                <h4>G.Stock</h4>

                                            </div>
                                            <i class="livicon pull-right" data-name="exchange" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <a href="#" class="btn btn-light btn-sm btn-responsive" role="button">
                                    <div class="col-xs-12 pull-left nopadmar">
                                        <div class="row">
                                            <div class="square_box col-xs-7 pull-left">
                                                <h4>Calenderier</h4>

                                            </div>
                                            <i class="livicon pull-right" data-name="calendar" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
            </section>
        </div>
    </aside>
    <!-- right-side -->
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<!-- EASY PIE CHART JS -->
<script src="vendors/jquery.easy-pie-chart/js/easypiechart.min.js"></script>
<script src="vendors/jquery.easy-pie-chart/js/jquery.easypiechart.min.js"></script>
<script src="js/jquery.easingpie.js"></script>
<!--end easy pie chart -->
<!--for calendar-->
<script src="vendors/moment/js/moment.min.js" type="text/javascript"></script>
<script src="vendors/fullcalendar/js/fullcalendar.min.js" type="text/javascript"></script>
<!--   Realtime Server Load  -->
<script src="vendors/flotchart/js/jquery.flot.js" type="text/javascript"></script>
<script src="vendors/flotchart/js/jquery.flot.resize.js" type="text/javascript"></script>
<!--Sparkline Chart-->
<script src="vendors/sparklinecharts/jquery.sparkline.js"></script>
<!-- Back to Top-->
<script type="text/javascript" src="vendors/countUp.js/js/countUp.js"></script>
<!--   maps -->
<script src="vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="vendors/chartjs/Chart.js"></script>
<script type="text/javascript" src="vendors/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!--  todolist-->
<script src="js/pages/todolist.js"></script>
<script src="js/pages/dashboard.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>

</html>
