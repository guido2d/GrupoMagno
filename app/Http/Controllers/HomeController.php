<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = Producto::join('categorias', 'productos.categoria', 'categorias.id')
                                ->select('productos.*', 'categorias.nombre')
                                ->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.productos', compact('productos'));
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'imagen' => 'required',
        ]);

        /* GUARDO LA IMAGEN */
        $file = $request->file('imagen');
        $path = public_path() . '/assets/img/productos/';
        $extension = $file->extension();
        $nuevo_nombre = date("d") . date("m") . date("y") . date("i") . date("s") . "BG." . $extension;
        $file->move($path, $nuevo_nombre);

        /* GUARDO LA NOTICIA */
        $new = new Producto;
        $new->titulo = $request->get('titulo');
        $new->descripcion = $request->get('descripcion');
        $new->categoria = $request->get('categoria');
        $new->imagen = $nuevo_nombre;
        $new->save();

        return redirect('/admin')->with('correcto', 'El producto se ha guardado correctamente.');
    }

    public function borrar($id)
    {

        $prod = Producto::where('id', $id)->delete();

        return redirect('/admin')->with('correcto', 'El producto se ha eliminado correctamente.');

    }

    public function editar($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        return view('admin.editar', compact('producto', 'categorias'));
    }

    public function actualizar(Request $request)
    {

        $validatedData = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);

        /* GUARDO LA IMAGEN */
        if (!empty($request->file('imagen'))) {
            $file = $request->file('imagen');
            $path = public_path() . '/assets/img/productos/';
            $extension = $file->extension();
            $nombre = date("d") . date("m") . date("y") . date("i") . date("s") . "BG." . $extension;
            $file->move($path, $nombre);
        } else {
            $nombre = $request->get('file_name');
        }

        /*Guardo la noticia*/
        $new = Producto::find($request->get('producto_id'));
        $new->titulo = $request->get('titulo');
        $new->descripcion = $request->get('descripcion');
        $new->categoria = $request->get('categoria');
        $new->imagen = $nombre;
        $new->save();

        return redirect('/admin')->with('correcto', 'El producto se ha actualizado correctamente.');
    }
}
