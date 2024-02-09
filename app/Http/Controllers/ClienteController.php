<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; 
use App\Models\Cuenta; 

class ClienteController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'ciudadorigen' => 'required|string|max:45',
            'titular' => 'required|string|max:45',
            'tipocliente' => 'required|integer|in:1,2', 
            'tipocuenta' => 'required|integer|in:1,2',             
            'cuenta' => 'required|string|min:15', 
            'tipotransaccion' => 'required|integer|in:1,2', 
            'monto' => 'required|numeric|min:0.01' 
        ]);
        //dd($request->all());
        // Crear un nuevo cliente
        $cliente = new Cliente();
        $cliente->ciudadorigen = $request->ciudadorigen;
        $cliente->titular = $request->titular;
        $cliente->tipocliente = $request->tipocliente;     

        try {
            $cliente->save();
        } catch (\Exception $e) {
            dd($e->getMessage()); 
        }
        // Obtener el ID del cliente recién creado
        $clienteId = $cliente->id;

        // Crear una nueva cuenta asociada al cliente
        $cuenta = new Cuenta();
        $cuenta->tipocuenta = $request->tipocuenta;
        $cuenta->cuenta = $request->cuenta;
        $cuenta->tipotransaccion = $request->tipotransaccion;    
        $cuenta->fkidcliente = $clienteId; // Asignar el ID del cliente a la cuenta
        $cuenta->monto = $request->monto;
        $cuenta->save();
        
        return redirect()->route('clientes.successfull')->with('success', 'Cliente registrado exitosamente.');
    }

    public function successfull()
    {
        return view('successfull');
    }    
}
