<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class RegisterController extends Controller
{
    public function obtenerData()
    {
        $registro = register::all();
        return $registro;
    }
    public function agregar (Request $request)
    {
        $registro = register::create($request->all());
        return $registro;
    }
    public function get($id){
        $registro = register::find($id);
        return $registro;
    }
    public function editar($id,Request $request)
    {
        $registro = $this->get($id);
        $registro->fill($request->all())->save();
        return $registro;
    }
    public function eliminar ($id)
    {
        $registro = $this->get($id);
        $registro->delete();
        return $registro;
    }

}
