<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cuenta; 
 

class CuentaController extends Controller
{
    public function consultaSaldoCuenta(Request $request)
    {   
        $saldo_total = '';
        return view('saldos', compact('saldo_total'));
    } 
    
    public function consultaSaldo(Request $request)
    {
        // Obtener el número de cuenta enviado en la solicitud
        $cuenta = $request->input('cuenta');

        // Consulta SQL para sumar los valores del campo "monto" correspondientes a la cuenta especificada
        $saldoTotal = DB::table('cuentas')
            ->where('cuenta', $cuenta)
            ->sum('monto');            
       
        // Devolver el saldo total como respuesta
        return response()->json(['saldo_total' => $saldoTotal]);
    } 

    public function realizarRetiro()
    {
        //$saldoTotal = Cuenta::sum('monto');
        $consignaciones = Cuenta::where('tipo_transaccion', 1)->sum('monto');
        $retiros = Cuenta::where('tipo_transaccion', 2)->sum('monto');

        // Verifica si el saldo total menos el saldo de las transacciones 1 es menor o igual a cero
        $puedeRetirar = ($consignaciones - $retiros) >= 0;

        return view('welcome')->with('puedeRetirar', $puedeRetirar);
    } 

    public function consultaMovimientos()
    {
        return view('movimientos');
    } 
    
    public function realizarConsignacion()
    {
        return view('successfull');
    } 
    

    public function generarExtractoMensual()
    {
        return view('successfull');
    } 
}
