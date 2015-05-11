 @include('nav')


    <section class="main">

    <div class="row">
      <div class="col-lg-4">
        <div class="product-images">
          <div class="primary">
            <img src="<?=URL::to('img/portfolio/'.$detalles->imagen.''); ?>" class="img-responsive" alt="">
          </div>
        </div>  
      </div>

      <div class="col-lg-8">
        <div class="produc-content">
          <div class="box">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#product" data-toggle="tab">
                  <i class="icon-reorder"></i>
                  <span>Producto</span>
                </a>
              </li>
              <li>
                <a href="#return" data-toggle="tab">
                  <i class="icon-reorder"></i>
                  <span>Returns</span>
                </a>
              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="product">
                <div class="details">
                  <h1>{{$detalles->nom_producto}}</h1>
                  <div class="prices">
                    @if($detalles->oferta=="SI")
                    <del>{{$detalles->precio_normal}}</del>
                    <span class="price">{{$detalles->precio_oferta}}</span>
                    @else
                    <span class="price">{{$detalles->precio_normal}}</span>
                    @endif
                  </div>
                  <div class="short-description">
                    <div class="form-group">  
                      <form action="add_cart" method="post">
                    <label>Cantidad: </label>
                    <div class="row">
                      <div class="col-xs-2">
                    <input type="text" class="form-control" name="num"></div>
                    </div>
                    
                    </div>
                  </div>
                  <div class="add-to-cart">
                    <i class="icon-plus"></i><input class="btn btn-primary btn-large" type="submit" value="&nbsp;Añadir al carro">
                      </form>                             
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="return">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              </div>
            </div>

          </div>
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
