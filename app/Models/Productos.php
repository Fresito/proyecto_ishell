<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'tb_producto';
    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'clave',
        'nombre',
        'cantidad',
        'costo',
        'foto',
        'activo'
    ];
}
