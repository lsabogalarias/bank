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
                <nav class="nav">
                    <a class="nav-link active" href="{{ route('cuentas.saldoscuentas') }}">Consulta de Saldo</a>
                    <a class="nav-link" href="{{ route('cuentas.movimientos') }}">Consulta de Movimientos</a>
                    <a class="nav-link" href="{{ route('cuentas.extractos') }}">Generar Extracto</a>
                    <a class="nav-link disabled" href="#">Reportes</a>
                </nav>                
            </div> 

            <form id="cliente" name="cliente" action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <hr>
                <div class="form-group">
                    <div class="text-center">
                        <label for="consignatario">
                            <h3> Formulario de Transacciones </h3>
                        </label>
                    </div>    
                </div> 
                
                <div class="form-group">
                    <label for="ciudadorigen">Ciudad Origen:</label>
                    <input type="text" id="ciudadorigen" name="ciudadorigen" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div> 

                <div class="form-group"> 
                    <label for="titular">Titular:</label>
                    <input type="text" id="titular" name="titular" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="form-group"> 
                    <label for="tipocliente">Tipo Cliente:</label>
                    <select class="custom-select" id="tipocliente" name="tipocliente">
                        <option selected>Seleccione</option>
                        <option value="1">Persona Natural</option>
                        <option value="2">Empresa</option>
                    </select>
                </div>                
                
                <div class="form-group">
                    <label for="tipocuenta">Tipo de Cuenta:</label>
                    <select class="custom-select" id="tipocuenta" name="tipocuenta">
                        <option selected>Seleccione</option>
                        <option value="1">Ahorros</option>
                        <option value="2">Corriente</option>
                    </select>
                </div>

                <div class="form-group"> 
                    <label for="cuenta">Numero Cuenta:</label>
                    <input type="text" id="cuenta" name="cuenta"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="form-group">
                    <label for="tipotransaccion">Tipo de Transacción:</label>
                    <select class="custom-select" id="tipotransaccion" name="tipotransaccion">
                        <option selected>Seleccione un tipo de transacción</option>
                        <option value="1">Consignación</option>
                        <option value="2">Retiro</option>
                    </select>
                </div>
                <div class="form-group"> 
                    <label for="monto">Monto:</label>
                    <input type="text" id="monto" name="monto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>    
            </form>
        </div>
    </div>
</body>
<!-- Incluimos los enlaces a los archivos JavaScript de Bootstrap y jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</html>