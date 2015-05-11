 @include('nav')


    

    <section class="portfolio">
       <div class="container">
       		<div class="row">
       			<div class="span9">
       				<ul class="product-list">
       					@foreach($sub_categorias as $sub_categoria)	
       					<li class="standard isotope-item" data-price="58">
        					<a href="<?=URL::to('productos/'.$sub_categoria->cod_sub_categoria.''); ?>" title="{{$sub_categoria->subcategoria}}">
        					    <div class="image">
        					        <img class="primary" src="<?=URL::to('img/sc/'.$sub_categoria->imagen.''); ?>" alt="Lisette Dress">
        					    </div>
					
        					    <div class="title">
        					        <h3>{{$sub_categoria->subcategoria}}</h3>
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
