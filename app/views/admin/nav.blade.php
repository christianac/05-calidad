<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel de Administracion</title>

    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
    <link href="<?=URL::to('css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?=URL::to('css/sb-admin.css'); ?>" rel="stylesheet">
    <link href="<?=URL::to('font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=URL::to('panel_admin'); ?>">Panel de Administracion</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->username}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?=URL::to('panel_admin/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Sistemas <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse in">
                            <li>
                                <a href="<?=URL::to('panel_admin/usuarios'); ?>">Usuarios</a>
                            </li>
                            <li>
                                <a href="panel_admin/contactos">Contactos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#contenidos"><i class="fa fa-fw fa-arrows-v"></i> Contenidos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="contenidos" class="collapse">
                            <li>
                                <a href="panel_admin/clientes">Clientes</a>
                            </li>
                            <li>
                                <a href="panel_admin/contenidos">Contenidos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#galerias"><i class="fa fa-fw fa-arrows-v"></i> Galeria <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="galerias" class="collapse">
                            <li>
                                <a href="panel_admin/gal_fot">Galeria de fotos</a>
                            </li>
                            <li>
                                <a href="panel_admin/gal_vid">Galeria de videos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#productos"><i class="fa fa-fw fa-arrows-v"></i> Productos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="productos" class="collapse">
                            <li>
                                <a href="<?=URL::to('panel_admin/categorias'); ?>">Categorias</a>
                            </li>
                            <li>
                                <a href="<?=URL::to('panel_admin/sub_categorias'); ?>">Sub Categorias</a>
                            </li>
                            <li>
                                <a href="<?=URL::to('panel_admin/productos'); ?>">Productos</a>
                            </li>
                            <li>
                                <a href="<?=URL::to('panel_admin/stock'); ?>">Stock</a>
                            </li>
                            <li>
                                <a href="<?=URL::to('panel_admin/pedidos_online'); ?>">Pedidos en linea</a>
                            </li>
                            <li>
                                <a href="<?=URL::to('panel_admin/galeria'); ?>">Galeria</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>