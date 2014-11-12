@extends('layouts.base')

@section('titulo')
	<title>Bienvenido!</title>
@stop

@section('nav-izquierda')
	
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
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar <strong class="caret"></strong></a>
				<ul class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;">
					<form method="post" action="controlador.php" accept-charset="UTF-8">
						<input style="margin-bottom: 15px;" type="text" placeholder="Usuario" id="user" name="user">
						<input style="margin-bottom: 15px;" type="password" placeholder="Contraseña" id="pass" name="pass">
						<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Ingresar">
						<button class="btn btn-default">¿Olvidaste tu contraseña?
					</form>
				</ul>
			</li>

@stop

@section('cuerpo')

<div class="container">
	<div class="col-sm-12">

		<div class="jumbotron">
		<h1>Comunick</h1>
		  <p>Comunick es una comunidad de comunidades. Aquí podrás encontrar y compartir información sobre cosas que te gustan y encontrar más gente como tú!</p>
		  <p><a class="btn btn-primary btn-lg">Informarme más</a></p>
		</div>

	<div class="row">
		@foreach ($comu as $comunidad)

			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
			  		
					<img src='{{asset("images/$comunidad->nombre.jpg")}}'  style="margin-top:15px;" alt="...">

					<div class="caption">
						
						<h3 data-toggle="modal" data-target="#myModal{{ $comunidad->id }}"><center><button class="btn btn-link">{{ $comunidad->nombre }}</button></center></h3>
						<div class="modal fade" id="myModal{{ $comunidad->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <h4 class="modal-title" id="myModalLabel2"><center>{{ $comunidad->nombre }}</center></h4>
						      </div>
						      <div class="modal-body">
						      	<div class="container-fluid">
						      		<div class="col-sm-4">
						        		<img src='{{asset("images/$comunidad->nombre.jpg")}}' alt="...">
						        	</div>
						    		<div class="col-sm-8" style="margin-top:45px;">
						    			{{ $comunidad->descripcion }}
						    		</div>
						        <div class="col-md-12">
						        	<hr>
						        	{{ $comunidad->descripcion_larga }}
						        </div>
						      </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						        <button type="button" class="btn btn-primary">Ver comunidad</button>
						      </div>
						    </div>
						  </div>
						</div>
						<p>{{ $comunidad->descripcion }}</p>
					</div>
				</div>
			</div>
		@endforeach
	</div>
  </div>
</div>

@stop



