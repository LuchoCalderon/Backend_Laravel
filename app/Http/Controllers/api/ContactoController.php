<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function read(Request $request){
        $user = new Contacto();

        if($request->query("id")){
            $contacto = $user->find($request->query("id"));
        }else{
            $contacto = $user->all();
        }
        return response()->json($contacto);
    }

    public function create(Request $request){
        $user = new Contacto();

        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->message = $request->input("message");
        $user->save();
        $message = ["message" =>"Registrado!!"];
        return response()->json($message,Response::HTTP_CREATED);
    
    }

    public function update(Request $request){

        $idContacto = $request->query("id");

        $user = new Contacto();

        $contactoParticular = $user->find($idContacto);

        $contactoParticular->name = $request->input("name");
        $contactoParticular->email = $request->input("email");
        $contactoParticular->message = $request->input("message");
        $contactoParticular->save();

        $message=[
            "message" => "Actualización Exitosa!!",
            "idContacto" => $request->query("id"),
            "nameContacto"=>$contactoParticular->Nombre
        ];

        return $message;
    }

        

    public function delete(Request $request){

        $idContacto = $request->query("id");

        $contacto = new Contacto();

        $contactoParticular = $contacto->find($idContacto);

        $contactoParticular->delete();

        $message=[
            "message" => "Eliminación Exitosa!!",
            "idContacto" => $request->query("id"),
        ];

        return $message;
    }



    

}
    
     

