<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class Agendamento extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $entidade = $request->entidade;
        $email    = $request->email;
        $contacto = $request->contacto;
        $servico  = $request->servico;
        $data     = $request->data;
        $horario  = $request->horario;
        $mensagem = $request->mensagem; 

        return $this->from($email)->subject('Agendamento')->view('emails.agendamento',compact('entidade','email','contacto','servico','data','horario','mensagem'));
    }
}
