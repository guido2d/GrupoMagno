<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductosController extends Controller
{
    public function list($categoria) {

        switch($categoria) {
            case "revestimientos":
                $categoria = "Revestimientos";
                $productos = Producto::where('categoria', 1)->paginate(20);
            break;

            case "pinturas":
                $categoria = "Pinturas";
                $productos = Producto::where('categoria', 2)->paginate(20);
            break;

            case "ecologicos":
                $categoria = "Productos Ecológicos";
                $productos = Producto::where('categoria', 3)->paginate(20);
            break;

            case "industrial":
                $categoria = "Línea Industrial";
                $productos = Producto::where('categoria', 4)->paginate(20);
            break;

            case "especiales":
                $categoria = "Productos Especiales";
                $productos = Producto::where('categoria', 5)->paginate(20);
            break;

            case "accesorios":
                $categoria = "Accesorios";
                $productos = Producto::where('categoria', 6)->paginate(20);
            break;
        }

        return view('productos', compact('productos', 'categoria'));
    }
}
