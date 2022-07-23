<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use Illuminate\Http\Request;

class PrendaController extends Controller
{
    public $categorias = ["elegante", "sport", "ropa interior", "chompas"];

    public function registrar() {
        $categorias = $this->categorias;
        return view("registrar-producto", compact("categorias"));
    }

    public function registrarProcesar(Request $request) {
        // dd($request->all());
        $request->validate([
            "nombre" => "required|string",
            "categoria" => "required|string",
            "precio" => "required|int",
        ]);
        $prenda = new Prenda();
        $prenda->nombre = $request->input("nombre");
        $prenda->categoria = $request->input("categoria");
        $prenda->precio = $request->input("precio");
        $prenda->save();

        return redirect()->back()->with(
            "success", "producto registrado correctamente"
        );
    }
}
