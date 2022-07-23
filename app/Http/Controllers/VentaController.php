<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class VentaController extends Controller
{
    public function ventasPorDia(Request $request) {
        $ventas = Venta::where("fecha", $request->input("fecha"))->get();
        return view("mostrar-ventas-dia", compact("ventas"));        
    }

    public function showVentas() {
        $ventas = [];
        return view("mostrar-ventas-dia", compact("ventas"));
    }
}
