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

    		@yield('nav-izquierda')

    	</ul>

		</div>



</div>
</div>
<!--Fin de la navbar-->

@yield('cuerpo')

</div> <!--Fin del cuerpo de la pagina-->



</body>
</html>