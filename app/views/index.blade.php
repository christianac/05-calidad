 @include('nav')

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>MATERIALES ELECTRONICOS GMAR</h1>
                <hr>
                <p>GMAR Corporation SAC comercializa materiales electricos, repuestos y accesorios de todo tipo relacionado a instalaciones electricas. Contamos con un amplio stock de productos para abastecer en forma oportuna y eficiente a nuestros clientes logrando su satisfacción total</p>
                <a href="<?=URL::to('catalogo'); ?>" class="btn btn-primary btn-xl page-scroll">Ver el catalogo</a>
            </div>
        </div>
    </header>



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
