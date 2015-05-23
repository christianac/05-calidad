 @include('nav')

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>GMAR CORPORATION</h1>
                <hr>
                <p>GMAR Corporation SAC comercializa materiales electricos, repuestos y accesorios de todo tipo relacionado a instalaciones electricas. Contamos con un amplio stock de productos para abastecer en forma oportuna y eficiente a nuestros clientes logrando su satisfacción total</p>
                <a href="<?=URL::to('catalogo'); ?>" class="btn btn-primary btn-xl page-scroll">Ver el catalogo</a>
            </div>

        </div>
    </header>
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                @foreach($categorias as $categoria)                 
                    <div class="col-lg-3 col-sm-4">
                        <a href="<?=URL::to('sub_categoria/'.$categoria->cod_categoria.''); ?>" class="portfolio-box">
                            <img src="img/portfolio/{{$categoria->imagen}}" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Ver categoria
                                    </div>
                                    <div class="project-name">
                                        {{$categoria->categoria}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- jQuery -->
    <script src="<?=URL::to('js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=URL::to('js/bootstrap.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
