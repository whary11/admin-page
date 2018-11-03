<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function contacto(){
        $empresa = Empresa::find(1);
        return view('admin.datos-contacto', ['empresa' => $empresa]);
    }





    // Recurso de empresa
    public function index(){
        return Empresa::find(1);
    } 
    // Update
    public function update(Request $request)
    {
        $empresa = Empresa::where('id', $request->input('id'))->update($request->all());
        if ($empresa) {
            return 'Empresa actualizada';
        }
    }
}