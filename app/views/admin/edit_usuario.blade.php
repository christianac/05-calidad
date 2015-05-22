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
                                      <span>Editar Usuarios</span>
                                    </a>
                                  </li>
                                </ul>

                                <div class="tab-content">
                                  <div class="tab-pane active" id="product">
                                    <div class="details">
                                      <div class="prices">
                                      </div>
                                      <div class="short-description">
                                        <div class="form-group"> 
                                           <h1>Editar Usuario</h1>
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
                                              {{ Form::open(array('url' => 'panel_admin/usuarios/edi', 'method' => 'POST'), array('role' => 'form')) }}

                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('full_name', 'Nombre completo') }}
                                                    {{ Form::text('full_name', $usuario->nombres, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('email', 'Dirección de E-mail') }}
                                                    {{ Form::text('email', $usuario->email, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
                                                  </div>
                                                  <input type="hidden" name="hidden" value="<?php echo $id;?>">
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('usuario', 'Nombre de Usuario') }}
                                                    {{ Form::text('usuario', $usuario->username, array('placeholder' => '', 'class' => 'form-control')) }}        
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('estado', 'Estado') }}
                                                    @if($usuario->estado=='A')
                                                    {{ Form::radio('activo', 'A', true) }} Activo
                                                    {{ Form::radio('activo', 'I') }} Inactivo
                                                    @else
                                                    {{ Form::radio('activo', 'A') }} Activo
                                                    {{ Form::radio('activo', 'I', true) }} Inactivo
                                                    @endif
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('password', 'Contraseña') }}
                                                    {{ Form::password('password', array('class' => 'form-control')) }}
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('password_confirmation', 'Confirmar contraseña') }}
                                                    {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                                                  </div>
                                                </div>
                                                {{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
                                            {{ Form::close() }}
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
