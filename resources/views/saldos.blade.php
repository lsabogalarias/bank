<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bluesoft Bank</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5"> 
        <div class="border p-4 mb-4"> 
            <div class="form-group">
                <label for="consignatario" class="text-center">
                    <h3> Bluesoft Bank </h3>
                </label>
            </div> 

            <div class="form-group">
                <div class="text-center">
                    <label for="consignatario">
                        <h3> Saldos </h3>
                    </label>
                </div>    
            </div>
            
            <form id="saldos" name="saldos" action="{{ route('cuentas.saldos') }}" method="POST">
                @csrf
                <hr>
                <div class="form-group">
                    <div class="text-center">
                        <label for="consignatario">
                            <h3> Consultar Saldos de Cuentas </h3>
                        </label>
                    </div>    
                </div> 
                
                <div class="form-group">
                    <label for="cuenta">Número de Cuenta:</label>
                    <input type="text" id="cuenta" name="cuenta" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div> 

                <div class="form-group text-right">
                    <button type="button" id="consultar" class="btn btn-primary">Consultar</button>
                </div> 
            </form> 
            
            <div class="form-group">
                <label for="cuenta" id="saldototal"></label>                  
            </div> 

            <div class="form-group text-right">
                <button type="button" name="volver" id="volver" class="btn btn-primary">Volver</button>
            </div>
        </div>          
    </div>
</body>
<!-- Incluimos los enlaces a los archivos JavaScript de Bootstrap y jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!--<script src="{{ asset('js/scripts.js') }}"></script>-->
<script> 
    $('#volver').click(function() {
        // Utilizamos el método de JavaScript history para volver a la página anterior
        window.history.back();
    });
    // Asignamos un evento de click al botón de Volver
    $('#consultar').click(function() {
        var cuenta = $('#cuenta').val();
        var token = $('input[name="_token"]').val(); // Obtenemos el valor del token CSRF
        
        // Enviamos una solicitud AJAX al servidor
        $.ajax({            
            url: '{{ route('cuentas.consulta.saldos') }}', 
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token 
            },
            data: {
                cuenta: cuenta,
                _token: token 
            },
            success: function(response) {   
                // Manejamos la respuesta del servidor
                console.log(response.saldo_total);                
                $('#saldototal').text("El saldo total es: " + response.saldo_total);

            },
            error: function(xhr, status, error) {
                // Manejamos los errores de la solicitud AJAX
                console.error(error);
            }
        });    
    });
</script>

</html>