<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductosController extends Controller
{
    public function list($categoria) {

        switch($categoria) {
            case "acondicionadores":
                $categoria = "Acondicionadores de superficie";
                $productos = Producto::where('categoria', 1)->paginate(20);
            break;

            case "impermeabilizantes":
                $categoria = "Impermeabilizantes";
                $productos = Producto::where('categoria', 2)->paginate(20);
            break;

            case "pinturas":
                $categoria = "Pinturas Látex";
                $productos = Producto::where('categoria', 3)->paginate(20);
            break;

            case "esmaltes":
                $categoria = "Esmaltes y anticorrosivos";
                $productos = Producto::where('categoria', 4)->paginate(20);
            break;

            case "madera":
                $categoria = "Protectores de madera";
                $productos = Producto::where('categoria', 5)->paginate(20);
            break;

            case "industrial":
                $categoria = "Línea Industrial";
                $productos = Producto::where('categoria', 6)->paginate(20);
            break;

            case "revestimientos":
                $categoria = "Revestimientos plásticos";
                $productos = Producto::where('categoria', 7)->paginate(20);
            break;

            case "accesorios":
                $categoria = "Accesorios";
                $productos = Producto::where('categoria', 8)->paginate(20);
            break;
        }

        return view('productos', compact('productos', 'categoria'));
    }
}
