@extends('layouts.base')

@section('titulo')
	<title>Bienvenido!</title>
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