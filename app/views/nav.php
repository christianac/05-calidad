<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>El rincon del musico</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?=URL::to('css/bootstrap.css'); ?>" type="text/css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?=URL::to('font-awesome/css/font-awesome.min.css'); ?>" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?=URL::to('css/animate.min.css'); ?>" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=URL::to('css/creative.css'); ?>" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?=URL::to('/'); ?>">El rincon del musico</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="catalogo">Catalogo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="ofertas">Ofertas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="carrito">Carrito</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contacto">Sobre Nosotros</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>