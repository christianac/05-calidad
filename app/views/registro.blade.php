 @include('nav')
<section>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                            <div class="produc-content">
                              <div class="box">

                                <div class="tab-content">
                                  <div class="tab-pane active" id="product">
                                    <div class="details">
                                      <div class="short-description">
                                        <div class="form-group"> 
                                           <h1>Registrarme</h1>
                                           @if(Session::has('message'))
                                           <div class="alert alert-success">
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
                                              {{ Form::open(array('url' => 'registrarse', 'method' => 'POST'), array('role' => 'form')) }}

                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('full_name', 'Nombre completo') }}
                                                    {{ Form::text('full_name', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('direccion', 'Dirección') }}
                                                    {{ Form::text('direccion', null, array('placeholder' => 'Introduce tu direccion', 'class' => 'form-control')) }}
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('email', 'Email') }}
                                                    {{ Form::text('email', null, array('placeholder' => 'Introduzca e-mail', 'class' => 'form-control')) }}        
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('fec_nac', 'Fecha de nacimiento') }}
                                                    <input type="date" name="fec_nac" placeholder="dd/mm/aaaa" size="45" required="" class="form-control">    
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-2">
                                                    {{ Form::label('telefono', 'Telefono') }}
                                                    {{ Form::text('telefono', null, array('placeholder' => '', 'class' => 'form-control')) }}        
                                                  </div>
                                                  <div class="form-group col-md-2">
                                                    {{ Form::label('empresa', 'Empresa') }}
                                                    {{ Form::text('empresa', null, array('placeholder' => '', 'class' => 'form-control')) }}        
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    {{ Form::label('sexo', 'Sexo') }}
                                                    {{ Form::radio('sexo', 'M', true) }} Masculino
                                                    {{ Form::radio('sexo', 'F') }} Femenino
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
                                                {{ Form::button('Registrarme', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
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
        <!-- /#page-wrapper --></section>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=URL::to('js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=URL::to('js/bootstrap.min.js'); ?>"></script>

</body>

</html>
