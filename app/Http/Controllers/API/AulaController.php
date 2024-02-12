<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Aula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AulaController extends Controller
{
    public function get(){
        try {
            $data = Aula::get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error('Error en la creación de aula', ['error' => $th]);
            return response()->json(['msg'=>'Error interno del servidor'], 500);
        }
    }

    public function create(Request $request){
        try {
            $data['nombre'] = $request['nombre'];
            $data['descripcion'] = $request['descripcion'];
            $data['capacidad'] = $request['capacidad'];
            $data['tipo'] = $request['tipo'];
            $data['equipamiento'] = $request['equipamiento'];
            $res = Aula::create($data);
            return response()->json($res, 200);
        } catch (\Throwable $th) {
            Log::error('Error en la creación de aula', ['error' => $th]);
            return response()->json(['msg'=>'Error en la creación de aula'], 500);
        }
    }

    public function getById($id){
        $data = Aula::find($id);
        if(is_null($data)) return response()->json(['msg'=>'El Aula no existe'], 404);
        return response()->json($data, 200);
    }

    public function update(Request $request, $id){
        try {
            $data['nombre'] = $request['nombre'];
            $data['descripcion'] = $request['descripcion'];
            $data['capacidad'] = $request['capacidad'];
            $data['tipo'] = $request['tipo'];
            $data['equipamiento'] = $request['equipamiento'];
            Aula::find($id)->update($data);
            $res = Aula::find($id);
            return response()->json($res, 200);
        } catch (\Throwable $th) {
            Log::error('Error al modificar el Aula', ['error' => $th]);
            return response()->json(['msg'=>'Error al modificar el Aula'], 500);
        }
    }

    public function delete($id){
        $data = Aula::find($id);
        if(is_null($data)) return response()->json(['msg'=>'Error, no se ha encontrado el Aula a eliminar'], 404);
        $data->delete();
        return response()->json(['msg'=>'El Aula se ha eliminado exitosamente'], 200);
    }
}
