<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prenda extends Model
{
    use HasFactory;
    protected $table = "prendas";

    public function detalle_ventas(): HasMany
    {
        return $this->hasMany(DetalleVenta::class, "id_prenda");
    }
}
