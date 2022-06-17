<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categoria::getAll();

        return view('categoria', compact('data'));
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

            //code...
            $nameFile_F  = null;
            if ($file=$request->file('img')) {

                //foreach($files as $file){
                    
                $namePhoto = uniqid(date('HisYmd'));
                // Recupera a extensão do arquivo
                $extension = $file->extension();

                // Define finalmente o nome
                $nameFile_F = "{$namePhoto}.{$extension}";

                $name=$file->getClientOriginalName();
                //$file->move('image',$name);

                // Faz o upload:
                //$upload = $request->anexo->storeAs('public/recibos', $nameFile);
                                                   
                 
                    
                $dados = [
                    "titulo" => $request->titulo,
                    "foto" => $nameFile_F,
                ];
    
                    $id = Categoria::create($dados)->id;

               
                $file->move(public_path('images/'), $nameFile_F);
                //dd($id);
            


          
                $request->session()->flash('swalDefaultSuccess', 'Dados adicionados com sucesso.');
                return redirect()->back();
            }

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


            $nameFile_F  = null;
            if ($file=$request->file('img')) {

                //foreach($files as $file){
                    
                $namePhoto = uniqid(date('HisYmd'));

                // Recupera a extensão do arquivo
                $extension = $file->extension();

                // Define finalmente o nome
                $nameFile_F = "{$namePhoto}.{$extension}";

                $name=$file->getClientOriginalName();
                //$file->move('image',$name);

                // Faz o upload:
                //$upload = $request->anexo->storeAs('public/recibos', $nameFile);
                    
                     
                $dados = [
                        "titulo" => $request->titulo,                        
                        "foto" => $nameFile_F,                                        
                        
                    ];              
           
                $data = Categoria::find($id);
                $data->titulo    = $dados['titulo'];
                $data->foto      = $dados['foto'];
            
                $data->update();
                $file->move(public_path('images/'), $nameFile_F);
         
                $request->session()->flash('swalDefaultSuccess', 'Dados atualizados com sucesso.');
                return redirect()->back();
            }
            else{

                $dados = [
                    "titulo" => $request->titulo,
                    
                ];
               
                    $data = Categoria::find($id);
                    $data->titulo    = $dados['titulo'];
               
                
                    $data->update();
             
                    $request->session()->flash('swalDefaultSuccess', 'Dados atualizados com sucesso.');
                    return redirect()->back();

            }

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
        $delete = Categoria::find($id)->delete();
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
