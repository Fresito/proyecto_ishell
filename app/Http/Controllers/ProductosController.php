<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Usuarios;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$productos= Productos::all();
        //return view('productos.index', compact('productos'));
        $productos= Productos::all();
        $usuarios= Usuarios::all();
        return view('productos.index',compact('usuarios'), [
            'productos' => DB::table('tb_producto')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'clave' => 'required|max:9|unique:tb_producto',
            'nombre' => 'required|max:45',
            'cantidad' => 'required|max:5',
            'costo' => 'required|max:8',
        ]);
        
        if($request->file('foto') != ''){
            $file = $request->file('foto');
            $foto = $file->getClientOriginalName();
            $date = date('Ymd_His_');
            $foto2 = $date . $foto;
            \Storage::disk('local')->put($foto2, \File::get($file));
        }
        /*else{
            $foto2 = "estandar.png";
        }*/

        $query = Productos::create(array(
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
            'cantidad' => $request->input('cantidad'),
            'costo' => $request->input('costo'),
            'foto' => $foto2,
            'activo' => $request->input('activo'),
        ));

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $producto = Productos::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto = Producto::findOrFail($id);

        \Storage::disk('local')->delete($producto->foto); 
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
