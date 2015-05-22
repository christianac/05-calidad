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
                                      <span>Registrar Usuarios</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#return" data-toggle="tab">
                                      <i class="icon-reorder"></i>
                                      <span>Listar Usuarios</span>
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
                                           <h1>Crear Usuarios</h1>
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
                                              {{ Form::open(array('url' => 'panel_admin/usuarios', 'method' => 'POST'), array('role' => 'form')) }}

                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('full_name', 'Nombre completo') }}
                                                    {{ Form::text('full_name', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('email', 'Dirección de E-mail') }}
                                                    {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('usuario', 'Nombre de Usuario') }}
                                                    {{ Form::text('usuario', null, array('placeholder' => '', 'class' => 'form-control')) }}        
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('estado', 'Estado') }}
                                                    {{ Form::radio('activo', 'A', true) }} Activo
                                                    {{ Form::radio('activo', 'I') }} Inactivo
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
                                                {{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
                                            {{ Form::close() }}
                                         </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="return">
                                     <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Usuarios</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nº</th>
                                                <th>Nombres</th>
                                                <th>e-mail</th>
                                                <th>Usuario</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($usuarios as $usuario)
                                            <tr>
                                                <td>{{$usuario->id}}</td>
                                                <td>{{$usuario->nombres}}</td>
                                                <td>{{$usuario->email}}</td>
                                                <td>{{$usuario->username}}</td>
                                                <td><a href="<?=URL::to('panel_admin/usuarios/edi/'.$usuario->id.''); ?>"><img src="<?=URL::to('img/edit/lapiz.gif'); ?>" alt=""></a></td>
                                                <td><a href="<?=URL::to('panel_admin/usuarios/eli/'.$usuario->id.''); ?>"><img src="<?=URL::to('img/edit/borrar.png'); ?>" alt=""></a></td>
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
