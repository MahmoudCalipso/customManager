<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Nouveau Article</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="/css/app.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="/vendors/Buttons/css/buttons.css" />
    <link rel="stylesheet" href="/css/pages/advbuttons.css" />
    <link rel="stylesheet" type="text/css" href="/vendors/iCheck/css/all.css">
    <link rel="stylesheet" type="text/css" href="/vendors/iCheck/css/line/line.css">
    <link rel="stylesheet" type="text/css" href="/vendors/bootstrap-switch/css/bootstrap-switch.css">
    <link rel="stylesheet" type="text/css" href="/vendors/switchery/css/switchery.css">
    <link rel="stylesheet" type="text/css" href="/vendors/awesome-bootstrap-checkbox/css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="/css/pages/radio_checkbox.css">
    <link href="/vendors/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="/vendors/select2/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/vendors/selectize/css/selectize.css" rel="stylesheet" type="text/css">
    <link href="/vendors/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css">
    <link href="/vendors/iCheck/css/all.css" rel="stylesheet" type="text/css">
    <link href="/vendors/daterangepicker/css/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet">
    <link href="/vendors/iCheck/css/all.css" rel="stylesheet" type="text/css" />
    <link href="/css/pages/form_layouts.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="/vendors/iCheck/css/all.css">
    <link rel="stylesheet" type="text/css" href="/vendors/iCheck/css/line/line.css">
    <link rel="stylesheet" type="text/css" href="/vendors/switchery/css/switchery.css">
    <link rel="stylesheet" type="text/css" href="/vendors/awesome-bootstrap-checkbox/css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="/css/pages/radio_checkbox.css">
    <!--
    <link href="/vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="/css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="/vendors/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/css/pages/only_dashboard.css" />
     -->
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
                                <a href="{{route('client.index')}}">
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
                                    <i class="fa fa-angle-double-right"></i> liste TVA
                                </a>
                            </li>
                            <li>
                                <a href="{{route('tva.create')}}">
                                    <i class="fa fa-angle-double-right"></i> Ajouter TVA
                                </a>
                            </li>
                            <li>
                                <a href="{{route('marques.index')}}">
                                    <i class="fa fa-angle-double-right"></i> liste Marques
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

        <!-- Main content -->
        <section class="content-header">
            <h1>Nouveau Article</h1>

        </section>
        <!-- content -->
        <section class="content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" class="form-horizontal" action="{{ route('article.update', $article->Art_Id) }}"  >
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav  nav-tabs">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">INFORMATIONS PRINCIPALES</a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">PRIX D'ACHAT</a>
                            </li>
                            <li>
                                <a href="#tab3" data-toggle="tab">PRIX DE VENTE</a>
                            </li>

                        </ul>
                        <div class="tab-content mar-top">
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Personal Details Product
                                                </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="RefArt">Ref Article:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="Art_Ref"class="form-control" id="RefArt" placeholder="Reference article" value="{{$article->Art_Ref}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="desArt">Designation Article:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="Art_Designation" class="form-control" id="desArt" placeholder="Designation Article" value="{{$article->Art_Designation}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="cdBar">Code Barre:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="Art_CodeBarre" class="form-control" id="cdBar" placeholder="Code A Barre Article" value="{{$article->Art_CodeBarre}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="qteArt">Qte Article:</label>
                                                            <div class="col-md-9">
                                                                <input type="number" name="Qte" class="form-control" id="qteArt" placeholder="Qte Articles" value="{{$article->Qte}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Date Achat Article:</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                        <i class="livicon" data-name="laptop" data-size="14" data-loop="true"></i>
                                                                    </div>
                                                                    <input type="text" name="DateAchat" class="form-control" id="rangepicker4" value="{{$article->DateAchat}}"/>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="select21">Marque Art:</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group select2-bootstrap-append">
                                                                    <select id="select21" name="Marque_Id" class="form-control">

                                                                        @foreach(App\Marque::get() as $marque)
                                                                            <option value='{{ $marque->Marque_Id }}'>{{  $marque->Marque_Intitule}}</option>
                                                                        @endforeach

                                                                    </select>
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button" data-select2-open="single-append-text">
                                                                        <span class="glyphicon glyphicon-search"></span>
                                                                    </button>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="select25">Types Art:</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group select2-bootstrap-append">
                                                                    <select id="select25" name="idTypeArt" class="form-control">
                                                                        @foreach(App\Type_articles::get() as $typeArt)
                                                                            <option value='{{ $typeArt->idTypeArt}}'>{{ $typeArt->libelleTypeArt}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button" data-select2-open="single-append-text">
                                                                        <span class="glyphicon glyphicon-search"></span>
                                                                    </button>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Gender:</label>
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                                <div>
                                                                <span class="btn btn-default btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" name="Art_Image" value="">
                                                                </span>
                                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Gestion D'achat
                                                </h3>

                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="select25">Fournisseur:</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group select2-bootstrap-append">
                                                                    <select id="select25" name="Four_Id" class="form-control">
                                                                        @foreach(App\fournisseur::get() as $fourni)
                                                                            <option value='{{ $fourni->Four_Id}}'>{{ $fourni->nom}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button" data-select2-open="single-append-text">
                                                                        <span class="glyphicon glyphicon-search"></span>
                                                                    </button>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="select22">TVA:</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group select2-bootstrap-append">
                                                                    <select id="select22" class="form-control" name="TVA_Id">
                                                                        @foreach(App\Tva::get() as $tva)
                                                                            <option value='{{ $tva->TVA_Id}}'>{{ $tva->TVA_Des}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="prixAchHT">Prix Achat HT:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="Art_HT" class="form-control" id="prixAchHT" placeholder="Prix Achat HT" value="{{$article->ArtA_HT}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="prixAchTTC">Prix Achat TTC:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="Art_TTC"class="form-control" id="prixAchTTC" placeholder="Prix Achat TTC" value="{{$article->ArtA_TTC}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="tab3" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Gestion De Vente
                                                </h3>

                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="prixVentHT">Prix Vente HT:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="ArtRv_HT" class="form-control" id="prixVentHT" placeholder="Prix vente HT" value="{{$article->ArtV_HT}}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="ArtRv_TTC">Prix Vente TTC:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="ArtRv_TTC" class="form-control" id="ArtRv_TTC" placeholder="Prix vente TTC" value="{{$article->ArtV_TTC}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="Art_PrixUht">Prix Vente Unitaire ht:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="Art_PrixUht" class="form-control" id="Art_PrixUht" placeholder="Prix vente unitaire ht" value="{{$article->Art_PrixUht}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="Art_PrixUTtc">Prix Vente Unitaire ttc:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="Art_PrixUTtc" class="form-control" id="Art_PrixUTtc" placeholder="Prix vente unitaire ttc" value="{{$article->Art_PrixUTtc}}">
                                                            </div>
                                                        </div>

                                                        <br><br>
                                                        <div class="text-right">
                                                            <div class="ui-group-buttons">
                                                                <button type="submit" class="btn btn-success">
                                                                    <span class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#fff" data-hc="white" style="position: relative; top:4px; right:4px;"></span>
                                                                    <span>Save</span>
                                                                </button>
                                                                <div class="or"></div>
                                                                <button class="btn btn-default" type="reset">
                                                                    <span class="livicon" data-name="remove" data-size="18" data-loop="true" data-c="#333" data-hc="black" style="position: relative; top:4px; right:4px;"></span>
                                                                    <span>Reset</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </form>
        </section>
        <!-- end content -->
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
<script src="/js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!--
<script src="/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
<script src="/vendors/iCheck/js/icheck.js"></script>
<script src="/js/pages/form_layouts.js"></script> -->

<script src="/vendors/moment/js/moment.min.js" type="text/javascript"></script>
<script src="/vendors/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
<script src="/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/vendors/clockface/js/clockface.js" type="text/javascript"></script>
<script src="/js/pages/datepicker.js" type="text/javascript"></script>

<script src="/vendors/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
<script src="/vendors/select2/js/select2.js" type="text/javascript"></script>
<script src="/vendors/selectize/js/standalone/selectize.min.js" type="text/javascript"></script>
<script src="/vendors/iCheck/js/icheck.js" type="text/javascript"></script>
<script src="/vendors/bootstrap-switch/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="/vendors/switchery/js/switchery.js" type="text/javascript"></script>
<script src="/js/pages/custom_elements.js" type="text/javascript"></script>
<script src="/js/pages/form_examples.js"></script>
<script src="/vendors/favicon/favicon.js"></script>
<script src="/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
<script src="/vendors/iCheck/js/icheck.js"></script>
<script type="text/javascript" src="/js/pages/radio_checkbox.js"></script>
<script type="text/javascript" src="/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js"></script>
<script type="text/javascript" src="/vendors/card/lib/js/jquery.card.js"></script>
<script type="text/javascript" src="/js/pages/radio_checkbox.js"></script>


<!-- end of page level js -->

</body>

</html>
