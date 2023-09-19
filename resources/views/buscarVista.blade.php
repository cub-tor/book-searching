<!DOCTYPE html>
<html>
   <head>
   <title>Formulario Ajax Laravel 9 Ajax con validación jQuery</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<style>
	body {

		width: 996px;
		margin: 0px auto;
		display: flex;
		flex-direction: column;
		
    
	}
	header{
	
		text-align: center;
		font-weight: 500px;
		position: absolute;
		top: 0%;
		width: 1138px;
	}
	header h1 {
		color:black;
		padding: 3%;
		letter-spacing: 0.25em;
    	word-spacing: 0.25em;
	}
	
	main{
		align-items: center;
		padding-top: 25%;
	}
	main p, #sugerencias{
		padding-left:10%;
		padding-top: 3%;
	}
	footer{
		
		height: 50px;
		width: 1138px;
		position: absolute;
		bottom:10%;
		
	}
	footer a{
		padding-left: 40%;
	}

	.error{
	color: #FF0000; 
	}
</style>
</head>

<body>
<header>
	<h1><b>Búsqueda bibliográfica</b></h1><hr>
	
</header>
<main>
	<div class="container mt-4">
		<div class="card">
			<div class="card-header text-center font-weight-bold">
				<h2>Buscar libros</h2>
			</div>
			<div class="card-body">
			
				<form name="buscarLibros" id="buscarLibros" method="post" action="{{ url('libros/consultar') }}" >	
				@csrf
					<div class="form-group">
						<label for="titulo">Título</label>
						<input type="text" id="texto" name="texto" class="form-control" placeholder="Introduzca sólo letras">
					</div>          
					
				</form>
			</div>
		</div>
  </div> 
  <div class="form-group">  
		<p> 
			Sugerencias: <span id="sugerencias" style="color: #0080FF;"></span>
		</p>
	</div>
</main>
	<script>
	
	$(document).ready(function(){
		$(document).ready(function(){
			/*Configuración global para todas las solicitudes AJAX realizadas en la página. El token CSRF es un mecanismo de seguridad que se utiliza para proteger las aplicaciones
			 web contra ataques de suplantación de identidad. Al incluir el token en la solicitud AJAX, 
			 se garantiza que la solicitud proviene de la página web original y no de un sitio externo
			  malicioso.
			*/
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	       		}
	   		});

			$("#texto").keyup(function(){
				var texto = $("#texto").val();
				// Validar si solo contiene letras
				var letras = /^[a-zA-Z]+$/;
				//Para que no salga el aviso al presionar la tecla de borrar: texto != ''
				if (texto != '') {
					if(texto.match(letras)!= null) {
						console.log(texto);
						//llamada a ajax
						$.ajax({ 
							type: "POST",
							url: "{{ url('libros/consultar') }}",
							data: {"texto":texto},
							success: function(data) {
								console.log(data);
								let resultado = "<br>";
								for(let i=0;i<data.length;i++)
								{
									resultado = resultado + "<br>" + data[i].titulo; 
								}   
								console.log(data.length);
								$("#sugerencias").html(resultado); //Actualiza el contenido de sugerencias
							},
							error: function(data) {
								alert("fallo");
							}
						});
					} else {
						alert("Por favor, ingrese solo letras");
					}
				}
			});
		});
	});





	


</script>

<footer>
	<hr>
	<a href="https://nhtc000.000webhostapp.com/index.html" alt="documentacion">Ver documentación</a>
</footer>
	
    
</body>
</html>