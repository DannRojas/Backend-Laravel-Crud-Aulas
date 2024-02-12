<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function users(Request $request){
        // $users = User::all();
        $users = User::where('active', true)->get();
        return response()->json($users);
    }

    public function login (Request $request){
        $response = ['status' => 0, 'msg'=>''];
        $data = json_decode($request->getContent());
        $user = User::where('email', $data->email)->first();
        if($user){
            if(Hash::check($data->password, $user->password)){
                $token = $user->createToke('ejemplo');
                $response['status'] = 1;
                $response['token'] = $token->plainTextToken;
                $response['user'] = $user;
            }else{
                $response['msg'] = 'Credenciales Incorrectas';
            }
        }else{
            $response['msg'] = 'Credenciales Incorrectas';
        }
        return response()->json($response);
    }
}
