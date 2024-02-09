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
            <div class="alert alert-success" role="alert">
                Su transaccion se ha ejecutado correctamentet!
            </div>            
        </div>

        <div class="form-group text-right">
            <button type="button" name="volver" id="volver" class="btn btn-primary">Volver</button>
        </div>  
    </div>
</body>
<!-- Incluimos los enlaces a los archivos JavaScript de Bootstrap y jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!--<script src="{{ asset('js/scripts.js') }}"></script>-->
<script>
    // Asignamos un evento de click al botón de Volver
    $('#volver').click(function() {
        // Utilizamos el método de JavaScript history para volver a la página anterior
        window.history.back();
    });
</script>

</html>