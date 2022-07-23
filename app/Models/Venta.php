<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venta extends Model
{
    use HasFactory;
    protected $table = "ventas";

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class, "id");
    }

    public function detalle_ventas(): HasMany
    {
        return $this->hasMany(DetalleVenta::class, "id_venta");
    }

}
