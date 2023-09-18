<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rell="stylesheet"  href="{{asset('css/app.css')}}">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>-->



</head>
<body>
    <div class="container">
        <form action="{{url('formulario')}}" method="post">-
        <form action="{{ url('libros/consultar') }}" method="get">
            <div class="form-group">
                <label for="texto"> Título: </label>
                <input type="text" class="form-control" id="texto" name="texto" onkeyup="mostrar_sugerencias(this.value)">
            </div>
                <button type="Buscar" class="btn btn-prmary" id="buscar">Buscar</button>
        </form>
    </div>
    <p> 
		Sugerencias:<span id="sugerencias" style="color: #0080FF;"></span>
	</p>

    <script>
        /*var xhr;
        function mostrar_sugerencias(patron){
            //Si no se ha insertado nada
            if(patron.length==0){
                document.getElementById("sugerencias").innerHTML ="";
                return;
            } else {
                //Nuevo objeto XMLHttpRequest()
                var xhr = new XMLHttpRequest();

                //Resgistro del controlador de eventos. StateChange función manejadora
                 xhr.onreadystatechange = stateChange;

                 xhr.open("POST", "{{ url('libros/consultar') }}", true );

                 xhr.send();
            }
        }

            function stateChange(){
                if(xhr.readyState == 4 && xhr.status == 200) {
                    //Mostrar respuesta
                    var pasoJsonText = JSON.parse(xhr.responseText);

                    var resultadosControlador = "";
                    //Recorrer los resultados devueltos por el controlador
                for (var i=0; i<pasoJsonText.length; i++){
                    resultadosControlador += "<p>"+ pasoJsonText[i].titulo +"</p>";
                    }
                    document.getElementById("sugerencias").innerHTML=xhr.resultadosControlador;
                }

            }*/

    </script>





    <!--<script>
        $(document).ready(function() {
            if(($("#texto")).length >0) {
                $("#texto").validate({
                    rules:{
                        texto: {
                            required: true,   //es obligatorio
                            lettersonly: true //solo permite letras
                        }
                    }
                })
            }  
        });
    </script>-->


</body>
</html>