<!DOCTYPE html>
<html>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Liste Marques</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="/vendors/Buttons/css/buttons.css" />
    <link rel="stylesheet" href="/css/pages/advbuttons.css" />
    <link rel="stylesheet" type="text/css" href="/vendors/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="/vendors/select2/css/select2-bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/vendors/datatables/css/buttons.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/vendors/datatables/css/colReorder.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/vendors/datatables/css/rowReorder.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/vendors/datatables/css/buttons.bootstrap.css"/>
    <link href="/css/pages/tables.css" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
</head>

<body class="skin-josh">
<header class="header">
    <a href="index.html" class="logo">
        <img src="/img/logo.png" alt="Logo">
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
                        <img src="/img/authors/avatar3.jpg" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
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
                            <img src="/img/authors/avatar3.jpg" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
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
                        <a href="index.html">
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
                                <a href="{{route('users.index')}}">
                                    <i class="fa fa-angle-double-right"></i> Users List
                                </a>
                            </li>
                            <li>
                                <a href="{{route('users.create')}}">
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
                                <a href="{{route('client.index')}}}">
                                    <i class="fa fa-angle-double-right"></i> Liste Clients
                                </a>
                            </li>
                            <li>
                                <a href="{{route('client.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajouter Client
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
                                    <i class="fa fa-angle-double-right"></i> Liste Fournisseurs
                                </a>
                            </li>
                            <li>
                                <a href="{{route('fournisseur.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajouter Fournisseur
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
                                    <i class="fa fa-angle-double-right"></i> Liste Articles
                                </a>
                            </li>
                            <li>
                                <a href="{{route('article.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajouter Article
                                </a>
                            </li>
                            <li>
                                <a href="{{route('tva.index')}}">
                                    <i class="fa fa-angle-double-right"></i> Liste TVA
                                </a>
                            </li>
                            <li>
                                <a href="{{route('tva.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajouter TVA
                                </a>
                            </li>
                            <li>
                                <a href="{{route('marques.index')}}">
                                    <i class="fa fa-angle-double-right"></i> Liste Marques
                                </a>
                            </li>
                            <li>
                                <a href="{{route('marque.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajouter Marque
                                </a>
                            </li>
                            <li>
                                <a href="{{route('type_art.index')}}">
                                    <i class="fa fa-angle-double-right"></i> Liste Type Articles
                                </a>
                            </li>
                            <li>
                                <a href="{{route('type_art.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajouter Type Article
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="livicon" data-name="lab" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
                            <span class="title">Magasin</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('magasin.index')}}">
                                    <i class="fa fa-angle-double-right"></i> Liste Magasins
                                </a>
                            </li>
                            <li>
                                <a href="{{route('magasin.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajouter Magasin
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
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Liste Marques</h1>

        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Second Data Table -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success filterable" style="overflow:auto;">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="tasks" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{route('marque.create')}}" role="button">Ajout Marque</a>

                                </div>
                                <br><br>
                            </h3>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-striped table-bordered" id="table2">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Marque Article</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($marques as $marque)
                                    <tr>
                                        <td>{{$marque->Marque_Id}}</td>
                                        <td>{{$marque->Marque_Intitule}}</td>
                                        <td>

                                            <a href="{{route('marque.edit',$marque->Marque_Id)}}" class="btn btn-success">
                                                <span class="livicon" data-name="pen" data-size="20" data-loop="true" data-c="#fff" data-hc="white"></span>
                                            </a>

                                            <a href="{{route('marque.delete',$marque->Marque_Id)}}" class="btn btn-danger" role="button">
                                                <span class="livicon" data-name="trash" data-size="20" data-loop="true" data-c="#fff" data-hc="white"></span>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- content -->
        <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Item</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure to delete?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" id="delete_item" data-dismiss="modal">Delete
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Confirm</h4>
                    </div>
                    <div class="modal-body">
                        <p>You are already editing a row, you must save or cancel that row before editing/deleting a new
                            row</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="saveConfirmModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Save Row</h4>
                    </div>
                    <div class="modal-body">
                        <p>Updated successfully, Do not forget to do some ajax to sync with backend.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </aside>
    <!-- right-side -->
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="/js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<!-- EASY PIE CHART JS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/vendors/select2/js/select2.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/dataTables.colReorder.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/dataTables.rowReorder.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/buttons.colVis.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/buttons.html5.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/buttons.print.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/buttons.bootstrap.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/pdfmake.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/vfs_fonts.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/dataTables.scroller.js"></script>
<script type="text/javascript" src="/js/pages/table-editable.js"></script>

<script type="text/javascript" src="/vendors/Buttons/js/scrollto.js"></script>
<script type="text/javascript" src="/vendors/Buttons/js/buttons.js"></script>
<!-- end of page level js -->

</body>

</html>
