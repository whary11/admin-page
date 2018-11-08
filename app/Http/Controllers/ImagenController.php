<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;

class ImagenController extends Controller
{
    public function upload(Request $req){

        // dd($req->file('imagen'));
        $nombre = $req->file('imagen')->store('public/logos');
        $imagen = Imagen::where('seccion', $req->input('seccion'))->update([
            'nombre' => $nombre,
        ]);
        if ($imagen) {
            return [
                'resp' => 'Imagen actualizada',
                'imagen' => $nombre
            ];
        }else{
            return[
                'resp' => 'Error en el proceos de actualización.'
            ];
        }
    }
}
