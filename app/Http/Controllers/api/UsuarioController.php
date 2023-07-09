<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function read(Request $request){
        $user = new Usuario();

        if($request->query("id")){
            $usuario = $user->find($request->query("id"));
        }else{
            $usuario = $user->all();
        }
        return response()->json($usuario);
    }

    public function create(Request $request){
        $user = new Usuario();

        $user->nombres = $request->input("nombres");
        $user->apellidos = $request->input("apellidos");
        $user->tipoIdentificacion = $request->input("tipoIdentificacion");
        $user->nIdentificacion = $request->input("nIdentificacion");
        $user->telefono = $request->input("telefono");
        $user->email = $request->input("email");
        $user->profesion = $request->input("profesion");
        $user->rol = $request->input("rol");
        $user->save();
        $message = ["message" =>"Registrado!!"];
        return response()->json($message,Response::HTTP_CREATED);
    

    }

    public function update(Request $request){

        $idUsuario = $request->query("id");

        $user = new Usuario();

        $userParticular = $user->find($idUsuario);

        $userParticular->nombres = $request->input("nombres");
        $userParticular->apellidos = $request->input("apellidos");
        $userParticular->tipoIdentificacion = $request->input("tipoIdentificacion");
        $userParticular->nIdentificacion = $request->input("nIdentificacion");
        $userParticular->telefono = $request->input("telefono");
        $userParticular->email = $request->input("email");
        $userParticular->profesion = $request->input("profesion");
        $userParticular->rol = $request->input("rol");
        $userParticular->save();

        $message=[
            "message" => "Actualización Exitosa!!",
            "idUsuario" => $request->query("id"),
            "nameUsuario"=>$userParticular->Nombre
        ];

        return $message;
    }

        

    public function delete(Request $request){

        $idUsuario = $request->query("id");

        $usuario = new Usuario();

        $userParticular = $usuario->find($idUsuario);

        $userParticular->delete();

        $message=[
            "message" => "Eliminación Exitosa!!",
            "idUsuario" => $request->query("id"),
        ];

        return $message;
    }

}
