<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locais;

class LocaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Locais::getAll();

        return view('locais', compact('data'));
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
        try {
           
               
            $dados = [
                "local" => $request->local,
                "preco" => $request->preco,              
                "status" => '1'                   
                
            ];        
           
           
            
            $id = Locais::create($dados)->id;
         
            $request->session()->flash('swalDefaultSuccess', 'Dados atualizados com sucesso.'); 
            return redirect()->back();

                       
         

    } catch (\Throwable $th) {
        throw $th;
    }
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
        try {
           
               
                $dados = [
                    "local" => $request->local,
                    "preco" => $request->preco,              
                    "status" => '1'                   
                    
                ];
               
                $data = Locais::find($id);
                $data->local    = $dados['local'];
                $data->preco = $dados['preco'];                                    
                $data->status    = $dados['status'];
               
                
                $data->update();
             
                $request->session()->flash('swalDefaultSuccess', 'Dados atualizados com sucesso.'); 
                return redirect()->back();

                           
             

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $delete = Locais::find($id)->delete();
        if($delete)
        {
            $request->session()->flash('swalDefaultSuccess', 'Registo eliminado com sucesso');
            return redirect()->back();
        }
        else
        {
            $request->session()->flash('swalDefaultError', 'Registo não eliminado');
            return redirect()->back();
        }

    }
}
