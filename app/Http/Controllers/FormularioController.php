<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\MAil\FormMail;

class FormularioController extends Controller
{
    public function sendForm(Request $request){
        $sel = $request->input('seleccion');
        $nom = $request->input('nombre');
        $nit = $request->input('nit');
        $dir = $request->input('dir');
        $correo = $request->input('correo');
        $hora = $request->input('horas');
        $msj = $request->input('observaciones');
        $dat= ['sel'=>$sel,
                   'nom'=>$nom,
                   'nit'=>$nit,
                   'dir'=>$dir,
                   'correo'=>$correo,
                   'hora'=>$hora,
                   'msj'=>$msj

        ];
        Mail::to("asesoriafinan2021@gmail.com")->send(new FormMail($dat));
       // return "Correo electronico enviado";
       return redirect()->back();
    }
}
