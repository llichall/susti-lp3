<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $table = "detalle_ventas";

    public function venta(): BelongsTo
    {
        return $this->belongsTo(Venta::class, "id");
    }

    public function prenda(): BelongsTo
    {
        return $this->belongsTo(Prenda::class, "id");
    }
}
