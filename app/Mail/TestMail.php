<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details; /*creamos un atributo publico para la variable correo*/
  
    
    /**
     * Create a new message instance.
     * 
     *
     * @return void
     */
    public function __construct($details)/* Agregamos la var details a la funcion*/ 
    {
            $this->details=$details;/*Agregamos lo que llega a details a details*/ 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('informacion.email');
    }
}
