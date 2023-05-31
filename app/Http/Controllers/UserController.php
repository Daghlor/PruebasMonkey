<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        User::create([
            'nombre' => $request->all()['nombre'],
            'apellido' => $request->all()['apellido'],
            'email' => $request->all()['email'],
            'password' => $request->all()['password'],
            'tipo_documento_id' => $request->all()['tipo_documento_id'],
        ]);

        return response()->json(array(
            'create' => true,
            'data' => 'se guardo correctamente'
        ), 200);
    }

    public function findOne($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(array(
                'error' => 'Usuario no econtrado'
            ), 404);
        }
        return response()->json($user, 200);
    }

    public function findAll()
    {
        $user = User::all();

        return response()->json(array(
            'create' => true,
            'data' => $user
        ), 200);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(array(
                'error' => 'Usuario no econtrado'
            ), 404);
        }
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function delete($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(array(
                'error' => 'Usuario no econtrado'
            ), 404);
        }
        $user->delete();
        return response()->json(["message" => "registro eliminado"], 200);
    }
}
