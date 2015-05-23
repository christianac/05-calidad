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
                                      
                                            <h1>Registrar producto</h1>
                                           @if(Session::has('message'))
                                           <div class="alert alert-danger">
                                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                                              <strong>{{Session::get('message')}}</strong>
                                            </div>
                                           @endif
                                           @if ($errors->any())
                                            <div class="alert alert-danger">
                                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                                              <strong>Por favor corrige los siguentes errores:</strong>
                                              <ul>
                                              @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                              @endforeach
                                              </ul>
                                            </div>
                                          @endif

                                           <?php
 /*                                          $user = User::find(1);
                                           if( $user->group->id == 1 )
{
   echo 'D:' ;
}*/
                                           ?>
                                              {{ Form::open(array('url' => 'panel_admin/reg_prod', 'method' => 'POST'), array('role' => 'form')) }}

                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('categoria', 'Categoria') }}
                                                    <select name="categoria" class="form-control">
                                                      @foreach ($categorias as $categoria)
                                                            <option value="{{$categoria->cod_categoria}}">{{$categoria->categoria}}</option>
                                                      @endforeach
                                                    </select>                    
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('sub_cat', 'Sub Categoria') }}
                                                    <select name="sub_cat" class="form-control">
                                                       @foreach ($sub_categorias as $sub_categoria)
                                                            <option value="{{$sub_categoria->cod_sub_categoria}}">{{$sub_categoria->subcategoria}}</option>
                                                        @endforeach
                                                    </select> 
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('nombre', 'Nombre:') }}
                                                    {{ Form::text('nombre', null, array('placeholder' => '', 'class' => 'form-control')) }}        
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('descripcion', 'Descripcion') }}
                                                    {{ Form::textarea('descripcion',null , array('placeholder' => '', 'class' => 'form-control')) }}
                                                  </div>
                                                </div> 
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('oferta', 'Oferta') }}
                                                    {{ Form::radio('oferta', 'SI', true) }} Si
                                                    {{ Form::radio('oferta', 'NO') }} No
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('pre_ofe', 'Precio Oferta') }}
                                                    {{ Form::text('pre_ofe', null, array('class' => 'form-control')) }}
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('pre_nor', 'Precio Normal') }}
                                                    {{ Form::text('pre_nor', null, array('class' => 'form-control')) }}
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('pre_ofe', 'Precio Oferta') }}
                                                    {{ Form::text('pre_ofe', null, array('class' => 'form-control')) }}
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('novedad', 'Novedad') }}
                                                    {{ Form::radio('novedad', 'SI', true) }} Si
                                                    {{ Form::radio('novedad', 'NO') }} No
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('imagen', 'Imagen') }}
                                                    {{ Form::file('imagen', null, array('class' => 'form-control')) }}
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('fic_tec', 'Ficha tecnica') }}
                                                    {{ Form::file('fic_tec', null, array('class' => 'form-control')) }}
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('video', 'Video') }}
                                                    {{ Form::text('video', null, array('class' => 'form-control')) }}
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('estado', 'estado') }}
                                                    {{ Form::radio('estado', 'A', true) }} Activo
                                                    {{ Form::radio('estado', 'I') }} Inactivo
                                                  </div>
                                                </div>
                                                {{ Form::button('Crear producto', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
                                            {{ Form::close() }}
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
