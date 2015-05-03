 @include('nav')


    

    <section id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">

            	@foreach($categorias as $categoria)					
                	<div class="col-lg-3 col-sm-4">
                	    <a href="categoria/{{$categoria->cod_categoria}}" class="portfolio-box">
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
