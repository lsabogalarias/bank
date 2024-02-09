<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    // Nombre de la tabla asociada al modelo
    protected $table = 'cuentas';

    // Campos
    protected $fillable = ['fkidcliente, tipocuenta', 'cuenta', 'tipotransaccion', 'monto'];

    public $timestamps = true;
}
