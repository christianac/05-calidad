 @include('nav')


    

    <section class="portfolio">
       <div class="container">
       		<div class="row">
       			<div class="span9">
       				<ul class="product-list">
       					@foreach($productos as $producto)	
       					<li class="standard isotope-item" data-price="58">
        					<a href="<?=URL::to('prod_detalles/'.$producto->cod_producto.''); ?>" title="">
        					    <div class="image">
        					        <img class="primary" src="<?=URL::to('img/sc/'.$producto->imagen.''); ?>" alt="">
        					    </div>
					
        					    <div class="title">
        					        <h3>{{$producto->nom_producto}}</h3>
                          <div class="prices">
                            @if($producto->oferta=="SI")
                            <del class="base">{{$producto->precio_normal}}</del>
                            @endif
                            <span class="price">{{$producto->precio_oferta}}</span>
                          </div>
        					    </div>
					
        					</a>
    					</li>
    					@endforeach
       				</ul>	
       			</div>
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
