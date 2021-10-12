<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\MAil\TestMail;
//use Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $nom = $request->input('nom');
        $correo = $request->input('correo');
        $asunto = $request->input('asunto');
        $mensaje = $request->input('mensaje');
        $details= ['nombre'=>$nom,
                   'correo'=>$correo,
                   'asunto'=>$asunto,
                   'mensaje'=>$mensaje
        ];
        Mail::to("asesoriafinan2021@gmail.com")->send(new TestMail($details));
       // return "Correo electronico enviado";
       return redirect()->back();
    }

}
