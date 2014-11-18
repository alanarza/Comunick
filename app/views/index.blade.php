@extends('layouts.base')

@section('titulo')
	<title>Bienvenido!</title>
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
						
						<h3 data-toggle="modal" data-target="#myModal{{ $comunidad->id }}" style="margin-top:0px;"><center><button class="btn btn-link">{{ $comunidad->nombre }}</button></center></h3>
						<div class="modal fade" id="myModal{{ $comunidad->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <h4 class="modal-title text-primary" id="myModalLabel2" ><center>{{ $comunidad->nombre }}</center></h4>
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



