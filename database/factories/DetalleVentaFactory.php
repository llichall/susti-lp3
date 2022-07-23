<?php

namespace Database\Factories;

use App\Models\Prenda;
use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleVenta>
 */
class DetalleVentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "cantidad" => 1,
            "subtotal" => 99,
            "id_venta" => Venta::factory(),
            "id_prenda" => Prenda::factory(),
        ];
    }
}
