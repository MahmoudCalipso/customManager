
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Edit Client</title>
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
    <link href="/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet">
    <link href="/vendors/iCheck/css/all.css" rel="stylesheet" type="text/css" />
    <link href="/css/pages/form_layouts.css" rel="stylesheet" type="text/css" />
    <link href="/vendors/daterangepicker/css/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendors/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
    <link href="/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" type="text/css" />

    <!--end of page level css-->
</head>

<body class="skin-josh">
<header class="header">
    <a href="index.html" class="logo">
        <img src="/img/logo.png" alt="logo">
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
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages pull-right">
                        <li class="dropdown-title">4 New Messages</li>
                        <li class="unread message">
                            <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                <img src="/img/authors/avatar.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body"> <strong>Riot Zeast</strong>
                                    <br>Hello, You there?
                                    <br> <small>8 minutes ago</small> </div>
                            </a>
                        </li>

                        <li class="unread message">
                            <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                <img src="/img/authors/avatar1.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body"> <strong>John Kerry</strong>
                                    <br>Can we Meet ?
                                    <br> <small>45 minutes ago</small> </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">                                         <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>                                     </i>
                                <img src="/img/authors/avatar5.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body"> <strong>Jenny Kerry</strong>
                                    <br>Dont forgot to call...
                                    <br> <small>An hour ago</small> </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">                                         <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>                                     </i>
                                <img src="/img/authors/avatar4.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body"> <strong>Ronny</strong>
                                    <br>Hey! sup Dude?
                                    <br> <small>3 Hours ago</small> </div>
                            </a>
                        </li>
                        <li class="footer">
                            <a href="#">View all</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                        <span class="label label-warning">7</span>
                    </a>
                    <ul class=" notifications dropdown-menu">
                        <li class="dropdown-title">You have 7 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">after a long time</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        Just Now
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">Jef's Birthday today</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        Few seconds ago
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">out of space</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        8 minutes ago
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">New friend request</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        An hour ago
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">On sale 2 products</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        3 Hours ago
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">Lee Shared your photo</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        Yesterday
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">David liked your photo</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        2 July 2014
                                    </small>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all</a>
                        </li>
                    </ul>
                </li>
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
                            <img src="img/authors/avatar3.jpg" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                            <p class="topprofiletext">Riot Zeast</p>
                        </li>
                        <!-- Menu Body -->
                        <li>
                            <a href="view_user.html"> <i class="livicon" data-name="user" data-s="18"></i> My Profile </a>
                        </li>
                        <li role="presentation"></li>
                        <li>
                            <a href="adduser.html"> <i class="livicon" data-name="gears" data-s="18"></i> Account Settings </a>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="lockscreen.html"> <i class="livicon" data-name="lock" data-s="18"></i> Lock </a>
                            </div>
                            <div class="pull-right">
                                <a href="login.html"> <i class="livicon" data-name="sign-out" data-s="18"></i> Logout </a>
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
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->

            <h1>Edit Client  </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Acceuil
                    </a>
                </li>
                <li>
                    <a href="#">Gestion Client</a>
                </li>
                <li class="active">Edit Client</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">

            <form method="post" action="{{route('client.update',$client->Code)}}" class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-lg-12">

                        <ul class="nav  nav-tabs ">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">IDENTITÉ DE LA FICHE</a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">COORDONNÉES</a>
                            </li>
                            <li>
                                <a href="#tab3" data-toggle="tab">ADRESSES</a>
                            </li>
                            <li>
                                <a href="#tab4" data-toggle="tab">AUTRES INFORMATIONS</a>
                            </li>
                        </ul>

                        <div class="tab-content mar-top">
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="row">


                                    <div class="col-lg-12">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> IDENTITÉ DE LA FICHE
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                            </div>
                                            <div class="panel-body">

                                                <div class="row">

                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="first_Name" >Civilité:</label>
                                                            <div class="col-md-9">
                                                                <select id="select-gear" class="form-control" name="civilite">
                                                                    <option value=""></option>
                                                                    <option value="monsieur"  @if($client->civilite==='monsieur') selected='selected' @endif>Monsieur</option>
                                                                    <option value="madame" @if($client->civilite==='madame') selected='selected' @endif>Madame</option>
                                                                    <option value="mademoiselle" @if($client->civilite==='mademoiselle') selected='selected' @endif>Mademoiselle</option>
                                                                    <option value="monsieuroumadame"@if($client->civilite==='monsieuroumadame') selected='selected' @endif>Monsieur ou Madame</option>


                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="first_Name" >Type Client:</label>
                                                            <div class="col-md-9">
                                                                <select id="select-gear" class="form-control" name="typecl">
                                                                    <option value=""></option>
                                                                    <option value="fidele" @if($client->typecl==='fidele') selected='selected' @endif>Fidéle</option>
                                                                    <option value="passager" @if($client->typecl==='passager') selected='selected' @endif>Passager</option>

                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="input_Email" >Nom:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"  value="{{$client->nom}}" name="nom">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="prenom" >Prénom:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="prenom" value="{{$client->prenom}}" name="prenom">
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
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> COORDONNÉES
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="tel" >Téléphone 1:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"  value="{{$client->tel1}}" name="tel1">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="input_Email" >Téléphone 2:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="input_Email"  value="{{$client->tel2}}" name="tel2">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="email" >Email:</label>
                                                            <div class="col-md-9">
                                                                <input type="email" class="form-control" id="email" value="{{$client->email}}" name="email">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="fax" >Fax:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="fax" value="{{$client->fax}}" name="fax">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="GSM" >GSM:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="GSM" value="{{$client->gsm}}" name="gsm">
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
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> ADRESSES
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="Adresse" >Adresse:</label>
                                                            <div class="col-md-9">
                                                                <textarea class="form-control resize_vertical" rows="3"  name="adresse">{{$client->adresse}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="codepostal" name="codepostal">Code postal:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="codepostal" value="{{$client->codePostal}}" name="codepostal">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="ville" >Ville:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="ville" value="{{$client->ville}}" name="ville">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="pays" >Pays:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" value="{{$client->pays}}" name="pays">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>





                                    </div>
                                </div>
                            </div>
                            <div id="tab4" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">
                                                        <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> AUTRES INFORMATIONS
                                                    </h3>
                                                    <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3" for="solde" >Solde:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control"  value="{{$client->Solde}}" name="solde">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3" for="first_Name" >Matricule Fiscale:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control"  value="{{$client->matfiscal}}" name="matricule">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3" for="raison_soc" >Raison Social:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control"  value="{{$client->Raison_Social}}" name="social">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-md-3" > Date Création:</label>


                                                                <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                        <i class="livicon" data-name="laptop" data-size="14" data-loop="true"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="rangepicker4" value="{{$client->datecrea}}" name="date"/>
                                                                </div>

                                                            </div>



                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <div class="col-md-offset-3 col-md-9">

                                                                </div>
                                                            </div>
                                                            <br><br><br><br><br>
                                                            <div class="form-group form-actions">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button type="submit" class="btn btn-success ">Submit</button>
                                                                        <button type="reset" class="btn btn-effect-ripple btn-default">Reset</button>
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
                    </div>
                </div>
            </form>
        </section>
        <!-- content -->
    </aside>
    <!-- right-side -->
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="/js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<script src="/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
<script src="/vendors/iCheck/js/icheck.js"></script>
<script src="/js/pages/form_layouts.js"></script>
<script src="/vendors/moment/js/moment.min.js" type="text/javascript"></script>
<script src="/vendors/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
<script src="/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/vendors/clockface/js/clockface.js" type="text/javascript"></script>
<script src="/vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
<script src="/js/pages/datepicker.js" type="text/javascript"></script>

</body>

</html>
