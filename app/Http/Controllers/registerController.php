<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        
        $user = new User;
        $user = $request->all();
        $validacao = \Validator::make($user,[
          'nome' => 'required|string',
          'email' => 'required|string|email|max:50|unique:users',
          'password' => 'required|string|min:6'
          
        ],[
         //Mensagens de validação de erros
         'nome.required'=>'Por favor, informe o nome',
         'email.required'=>'Por favor, informe o email',
         'email.unique'=>'O email já foi associado a outra conta',         
         'password.min'=>'Por favor, informe uma senha com 6 caracteres no mínimo',
         'password.required'=>'Por favor, informe uma senha',
         
          
         
     ]);
  
     
        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }
        
      
     $idUser = DB::table('users')->insertGetId(
         ['email' => $request->email,'nome' => $request->nome,'password' =>Hash::make($request->password),'created_at' =>date("Y-m-d H:i:s")]
     );
    
     
     $request->session()->flash('alert-success', 'Conta criada com sucesso');
     
     return redirect()->route('showLogin');        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
