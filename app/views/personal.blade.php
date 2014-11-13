@extends('layouts.base')

@section('titulo')
	<title>Bienvenido!</title>
@stop

@section('nav-izquierda')
	
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
					<form method="post" action="#" accept-charset="UTF-8">
										
						<input style="margin-bottom: 15px; min-width:165px;" type="text" placeholder="Usuario" id="user" name="user">
											
						<input style="margin-bottom: 15px; min-width:165px;" type="password" placeholder="Contraseña" id="pass" name="pass">
										
						<input class="btn btn-primary btn-block btn-sm" type="submit" id="sign-in" value="Ingresar">
						<button class="btn btn-default btn-sm">¿Olvidaste tu contraseña?</button>
										
					</form>
				</div>
			</li>

	@endif

@stop

@section('cuerpo')

	<div class="container-fluid">
		
		<!--Seccion de foto de perfil y estado-->	
		<div class="col-md-12">
			
			<div class="col-md-4">
			<div class="container-fluid">

				<div class="col-md-12">
					<div class="panel panel-default">
					  	<div class="panel-body">
					    	<img src='{{asset("images/Vicentico.jpg")}}' alt="..." style="height:245px;">
						</div>
					</div>

					<h2><span class="label label-default">Fernando Valdebenito</span></h2>
				</div>

				

				<div class="col-md-12">
					<div class="list-group">
						<a href="#" class="list-group-item">
						   <h4 class="list-group-item-heading">Rock Nacional</h4>
						   <p class="list-group-item-text">Comunidad de aficionados amantes del rock nacional, somos muchos unete a nuestra comunidad</p>
						</a>

						<a href="#" class="list-group-item">
						   <h4 class="list-group-item-heading">Rock Nacional</h4>
						   <p class="list-group-item-text">Comunidad de aficionados amantes del rock nacional, somos muchos unete a nuestra comunidad</p>
						</a>

						<a href="#" class="list-group-item">
						   <h4 class="list-group-item-heading">Rock Nacional</h4>
						   <p class="list-group-item-text">Comunidad de aficionados amantes del rock nacional, somos muchos unete a nuestra comunidad</p>
						</a>

						<a href="#" class="list-group-item">
						   <h4 class="list-group-item-heading">Rock Nacional</h4>
						   <p class="list-group-item-text">Comunidad de aficionados amantes del rock nacional, somos muchos unete a nuestra comunidad</p>
						</a>
					</div>
				</div>

			</div>
			</div>

			<div class="col-md-8">
			<div class="container-fluid">

				<div class="col-md-12">
					<div class="panel panel-default" style="height:100px;">
						<div class="panel-body">
					    	<div class="well">
								Look, I'm in a well!
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="panel panel-default" style="height:600px;">
						<div class="panel-body">
					    	<p>Aca va el cuerpo</p>
						</div>
					</div>
				</div>

			</div>
			</div>

		</div>
		<!--Fin de seccion -->

	</div>

@stop