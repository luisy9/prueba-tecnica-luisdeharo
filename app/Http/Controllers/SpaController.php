<?php

namespace App\Http\Controllers;

use App\Models\Perros;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function saveDog(Request $request)
    {
        try {
            $dog = new Perros();
            $dog->raza = $request->input('raza');
            $dog->tamaño = $request->input('tamaño');
            $dog->color_del_pelo = $request->input('colorPelo');
            if ($request->hasFile('foto')) {
                $request->validate([
                    'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $originalFileName = $request->file('foto')->getClientOriginalName();
                $imagenPath = $request->file('foto')->storeAs('public/fotos', $originalFileName);
                $dog->foto = $imagenPath;
                // $imagePath = $request->file('foto')->store('fotos_privadas', $originalFileName);
                $rutaDestinoLocal = 'perros';
                $filename = $request->file('foto')->getClientOriginalName();
                $uploadFile = $request->file('foto')->move($rutaDestinoLocal, $filename);
            }
            $dog->save();

            $success = true;
            $message = 'Perro guardado correctamente';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }
        return response()->json(['success' => $success, 'message' => $message]);
    }

    public function getDogs()
    {
        $dogs = Perros::all()->toArray();
        return $dogs;
    }

    public function getDog($opcion){
        $columna = Perros::pluck($opcion)->toArray();
        return $columna;
    }
}
