<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Agendamento;
use Illuminate\Support\Facades\Mail;

class AgendamentoController extends Controller
{
    //


    public function enviar(Request $request)
    {

       // dd('ok');

        $data = [
                "entidade" => $request->entidade,
                "email"    => $request->email,
                "contacto"    => $request->contacto,
                "servico"     => $request->servico,
                "data"        => $request->data,
                "hora"        => $request->hora,
                "texto"       => $request->texto,
        ];

        Mail::to('aristeuwalker@gmail.com')->send(new Agendamento($data));

        return redirect()->back();


    }

}
