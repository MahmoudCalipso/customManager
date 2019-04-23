<!DOCTYPE html>
<html>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Liste TVA</title>
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
    <link href="vendors/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css">
    <link href="/css/pages/tables.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/caisse.css">
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
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content body-content">
            <!-- Second Data Table -->
            <div class="row content_filters">
              <form action="" method="get" id="filterForm">
                <?php
                if(isset($_GET['id'])) {
                  ?>
                  <input type="hidden" name="page" value="<?php echo htmlentities($_GET['id']); ?>" />
                  <?php
                }
                ?>
                <div class="form-group">
                  <label for="mark_filter">Mark</label>
                  <br />
                  <select  class="form-control" id="mark_filter" name="mark">
                    <option selected value="">Marque</option>
                    <?php
                    foreach($marques as $marque) {
                      ?>
                      <option value="<?php echo htmlentities($marque["Marque_Id"]); ?>"><?php echo htmlentities($marque["Marque_Intitule"]); ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="type_filter">Type article</label>
                  <br />
                  <select  class="form-control" id="type_filter" name="type">
                    <option selected value="">Type</option>
                    <?php
                    foreach($typeArts as $type) {
                      ?>
                      <option value="<?php echo htmlentities($type["idTypeArt"]); ?>"><?php echo htmlentities($type["libelleTypeArt"]); ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
                <button class="btn btn-success" type="submit">Filter</button>
              </form>
            </div>
            <div class="row caisse_data">
              <div class="caisse_items col-sm-8">
                <?php
                foreach($articles as $article) {
                  ?>
                  <div class="panel panel-default item">
                    <div class="panel-body">
                      <div class="inline">
                        <h1><?php echo htmlentities($article["Art_Designation"]); ?></h1>
                        <h2>Prix HT : <?php echo number_format($article["ArtA_HT"], 2); ?> TND</h2>
                        <h2>Prix TTC : <?php echo number_format($article["TTC"], 2); ?> TND</h2>
                        <button class="btn btn-primary" onclick="addItem(<?php echo $article["Art_Id"]; ?>)">Ajouter article</button>
                      </div>
                      <div class="inline">
                        <img src="<?php echo $article["Art_Image"]; ?>" style="width: 120px;height: 80px" />
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?>
                <?php echo $articles->render(); ?>
              </div>
              <div class="caisse_invoice col-sm-4">
                <div class="panel panel-default">
                  <div class="panel-body {{ empty($items) ? 'hidden' : '' }}" id="itemsBody">
                    <ul id="dataItems">
                      @foreach($items as $articles)
                        <li id="item_{{$articles->Art_Id}}">
                          <div class="inline goodalign">
                            <img src="{{$articles->Art_Image}}" />
                          </div>
                          <div class="inline goodalign leftalign">
                            <h1>{{$articles->Art_Designation}}</h1>
                            <h2>Prix HT : {{$articles->ArtA_HT}} TND</h2>
                            <h2>Prix TTC : {{$articles->ArtA_TTC}} TND</h2>
                            <input onchange="changeItemCount({{$articles->Art_Id}})" id="item_count_{{$articles->Art_Id}}" type="number" value="{{$articles->count}}" class="form-control count inline" id="item_{{$articles->Art_Id}}_count" />
                            <button onclick="deleteItem({{$articles->Art_Id}})" class="btn btn-danger inline bottomalign"><fa class="fa fa-times"></button>
                            </div>
                          </li>
                      @endforeach
                    </ul>
                    <div class="invoice_info">
                      <h1>Prix totale HT : <span id="prix_total_ht">{{$price["ht"]}}</span> TND</h1>
                      <h1>Prix totale TTC : <span id="prix_total_ttc">{{$price["ttc"]}}</span> TND</h1>
                      <div class="separator"></div>
                      <button type="button" class="btn btn-success inline">Payer</button>
                      <button type="button" class="btn btn-primary inline">Facture</button>
                      <button type="button" class="btn btn-warning inline">Devis</button>
                    </div>
                  </div>

                  <div class="panel-body {{ !empty($items) ? 'hidden' : '' }}" id="noItemsBody">
                    <h4>No chosen items</h4>
                  </div>
                </div>
              </div>
            </div>
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
<!-- begining of page level js -->
<!-- EASY PIE CHART JS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/vendors/select2/js/select2.js"></script>
<script type="text/javascript" src="/vendors/datatables/js/jquery.dataTables.js"></script>
<script src="assets/caisse.js?v=<?php echo rand(); ?>" charset="utf-8"></script>
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
<script src="vendors/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
<!-- end of page level js -->

</body>

</html>
