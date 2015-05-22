 @include('admin/nav')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                            <div class="produc-content">
                              <div class="box">
                                <ul class="nav nav-tabs">
                                  <li class="active">
                                    <a href="#product" data-toggle="tab">
                                      <i class="icon-reorder"></i>
                                      <span>Registrar Productos</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#return" data-toggle="tab">
                                      <i class="icon-reorder"></i>
                                      <span>Listar Productos</span>
                                    </a>
                                  </li>
                                </ul>

                                <div class="tab-content">
                                  <div class="tab-pane active" id="product">
                                    <div class="details">
                                      <h1>a</h1>
                                      <div class="prices">
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
                                     <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Categorias</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nº</th>
                                                <th>Categoria</th>
                                                <th>Sub Categoria</th>
                                                <th>Producto</th>
                                                <th>Imagen</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($productos as $producto)
                                            <tr>
                                                <td>{{$producto->cod_producto}}</td>
                                                <td>{{$producto->cp}}</td>
                                                <td>{{$producto->scp}}</td>
                                                <td>{{$producto->nom_producto}}</td>
                                                <td>{{$producto->imagen}}</td>
                                                <td><a href="<?=URL::to('panel_admin/producto/edi/'.$producto->cod_producto.''); ?>"><img src="<?=URL::to('img/edit/lapiz.gif'); ?>" alt=""></a></td>
                                                <td><a href="<?=URL::to('panel_admin/producto/edi/'.$producto->cod_producto.''); ?>"><img src="<?=URL::to('img/edit/borrar.png'); ?>" alt=""></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
                <!-- /.row -->


               
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=URL::to('js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=URL::to('js/bootstrap.min.js'); ?>"></script>

</body>

</html>
