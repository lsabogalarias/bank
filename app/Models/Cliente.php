<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // Nombre de la tabla asociada al modelo
    protected $table = 'clientes';

    // Campos
    protected $fillable = ['ciudadorigen', 'titular','tipocliente'];

    public $timestamps = true;

    public function cuentas()
    {
        return $this->hasMany(Cuenta::class);
    }
}
