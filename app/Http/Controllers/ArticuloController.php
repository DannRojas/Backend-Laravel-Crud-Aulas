<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use DataTables;
// use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\DataTables;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = Articulo::all();
            return Datatables::of($data)
                    ->addColumn('action', function ($data){
                        $acciones = '<a href="javascript:void(0)" onclick="updateArticulo('.$data->id.')" class="btn btn-info mr-1">Editar</a>';
                        $acciones .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger" data-toggle="modal" data-target="#confirmModal">Eliminar</button>';
                        return $acciones;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('articulo.index');
    }

    public function create(Request $request)
    {
        $articulo = Articulo::create($request->all());
        return back();
    }

    public function edit(string $id){
        $articulo = Articulo::find($id);
        return response()->json($articulo);
    }

    public function update(Request $request, string $id)
    {
        // echo($id);
        // echo($request);
        // Articulo::find($id)->update($request->all());
        // return back();
        echo $id;
        $articulo = Articulo::find($id);
        $articulo->nombre = $request->nombre;
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->save();
        return back()->with('success', 'Artículo actualizado correctamente');
    }

    public function destroy(string $id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return back();
    }
}
