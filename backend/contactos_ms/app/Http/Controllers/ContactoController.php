<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Contacto::all();
        $data = ["data" => $rows];
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataBody = $request->all();
        $contacto = new Contacto();
        $contacto->nombre = $dataBody['nombre'];
        $contacto->email = $dataBody['email'];
        $contacto->telefono = $dataBody['telefono'];
        $contacto->save();
        $data = ["data" => $contacto];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $row = Contacto::find($id);
        if (empty($row)) {
            return response()->json(['msg' => "error"], 404);
        }
        $data = ["data" => $row];
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataBody = $request->all();
        $contacto = Contacto::find($id);
        if (empty($contacto)) {
            return response()->json(['msg' => "error"], 404);
        }
        $contacto->nombre = $dataBody['nombre'];
        $contacto->email = $dataBody['email'];
        $contacto->telefono = $dataBody['telefono'];
        $contacto->save();
        $data = ["data" => $contacto];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Contacto::find($id);
        if (empty($row)) {
            return response()->json(['msg' => "error"], 404);
        }
        $row->delete();
        $data = ["data" => "Contacto eliminado"];
        return response()->json($data, 200);
    }
}
