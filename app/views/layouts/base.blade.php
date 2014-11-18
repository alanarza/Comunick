<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	@section('titulo')
	<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<script src="{{asset('bootstrap/js/jquery-2.1.1.min.js')}}"></script>
	<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
  </script>
  <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>

<!--Inicio del cuerpo de la pagina-->
<div class="navbar navbar-default" role="navigation"> <!--Inicio de la navbar-->
<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
    	</button>
    	<a class="navbar-brand" href="#">Comunick</a>
		</div>

		<div style="height: 1px;" aria-expanded="false" class="navbar-collapse navbar-responsive-collapse collapse">
			<ul class="nav navbar-nav">
	      <li><a href="#">Acerca de</a></li>
	      <li><a href="#">Contacto</a></li>
    	</ul>

    	<form class="navbar-form navbar-left">
      	<input class="form-control col-lg-8" placeholder="Busqueda" type="text">
    	</form>

    	<ul class="nav navbar-nav navbar-right">

    		@if(Session::get('key'))

				<!--parte de la navbar con opciones de usuario-->

			@else

				<li><a href="#" data-toggle="modal" data-target="#myModal">Registrarse</a></li>

		          	<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					        <h4 class="modal-title" id="myModalLabel">Registrarse</h4>
					      </div>
					      <div class="modal-body">
					        
					      	<!--Inicio del formulario-->
					      	<form class="form-horizontal">
					      	<fieldset>

					      	

					      	<div class="form-group">
		      					<label for="inputUser" class="col-lg-2 control-label">  Usuario</label>
		      					<div class="col-lg-8">
		        					<input type="text" class="form-control" id="inputUser" placeholder="Usuario">
		      					</div>
		    				</div>

		    				<div class="form-group">
						    	<label for="inputPassword" class="col-lg-2 control-label">Contraseña</label>
						      	<div class="col-lg-8">
						        	<input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
						      	</div>
						    </div>

						    <div class="form-group">
						    	<label for="inputPassword2" class="col-lg-2 control-label">Contraseña</label>
						      	<div class="col-lg-8">
						        	<input type="password" class="form-control" id="inputPassword2" placeholder="Repetir Contraseña">
						      	</div>
						    </div>

						    <hr>

						    <div class="form-group">
						    	<label for="inputName" class="col-lg-2 control-label">Nombre</label>
						      	<div class="col-lg-8">
						        	<input type="text" class="form-control" id="inputName" placeholder="nombre">
						      	</div>
						    </div>

						    <div class="form-group">
						    	<label for="inputSname" class="col-lg-2 control-label">Apellido</label>
						      	<div class="col-lg-8">
						        	<input type="text" class="form-control" id="inputSname" placeholder="Apellido">
						      	</div>
						    </div>

						    <div class="form-group">
						    	<label for="inputDate" class="col-lg-2 control-label">Edad</label>
						      	<div class="col-lg-8">
						        	<input type="text" class="form-control" id="inputDate" placeholder="Edad">
						      	</div>
						    </div>

						    <div class="form-group">
						    	<label for="inputCity" class="col-lg-2 control-label">Ciudad</label>
						      	<div class="col-lg-8">
						        	<input type="text" class="form-control" id="inputCity" placeholder="Ciudad">
						      	</div>
						    </div>

						    <div class="form-group">
						    	<label for="inputProf" class="col-lg-2 control-label">Profesion</label>
						      	<div class="col-lg-8">
						        	<input type="text" class="form-control" id="inputProf" placeholder="Profesion">
						      	</div>
						    </div>

						    <div class="form-group">
						      	<label for="textArea" class="col-lg-2 control-label">Sobre Ti</label>
						      	<div class="col-lg-8">
						        	<textarea class="form-control" rows="3" id="textArea" style="margin: 0px -0.84375px 0px 0px; width: 362px; height: 100px;"></textarea>
						        	<span class="help-block">Agrega una descripcion sobre ti, tus gustos, tu comida preferida, tus hobbies..</span>
						      	</div>
						    </div>


		    				</fieldset>
		    				</form>
					      	<!--Fin del formulario-->

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					        <button type="button" class="btn btn-primary">Registrarse</button>
					      </div>
					    </div>
					  </div>
					</div>

					<!--Dropdown de registrarse-->
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">
							Ingresar 
							<strong class="caret"></strong>
						</a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;">
							
							{{ Form::open(array('url' => 'login'))}}

								{{ Form::label('usuario', 'Usuario'); }}
								{{ Form::text('Usuario'); }}
								{{ Form::label('password', 'Clave'); }}
								{{ Form::password('password'); }}
								<div class="button" style="padding-top: 10px">
								{{ Form::submit('Ingresar'); }}
								</div>

							{{ Form::close() }}

						</div>
					</li>

			@endif

    	</ul>

		</div>



</div>
</div>
<!--Fin de la navbar-->
<div class="container">

@yield('cuerpo')

<hr>
	<footer>
		<div class="container">
			<p class="navbar-text">Copyright © 2013-2014 - QsK Enterprise Inc.</p>
		</div>
	</footer>
</div> <!--Fin del cuerpo de la pagina-->

	

</body>
</html>