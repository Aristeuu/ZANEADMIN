<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Categoria;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotos =Foto::get_all();
        $categorias = Categoria::getAll();
        
        return view('fotos',compact('fotos','categorias'));
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
            if($file=$request->file('img')){

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
                        "foto" => $nameFile_F,                        
                        "categoria_id" =>$request->categoria_id               
                        
                    ];

                    $id = foto::create($dados)->id;
                    $file->move(public_path('images/'), $nameFile_F);           
                    //dd($id);
                $request->session()->flash('swalDefaultSuccess', 'Dados adicionados com sucesso.'); 
                return redirect()->back();
                

            }
            else
            {
                $request->session()->flash('swalDefaultError', 'Falha ao adicionar dados'); 
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
            //code...
            $nameFile_F  = null;
            if($file=$request->file('img')){

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
                        "categoria_id" => $request->categoria_id,                
                        "foto" => $nameFile_F,                        
                                        
                        
                    ];

                   
                    $data = foto::find($id);                                     
                    $data->foto        = $dados['foto'];
                    $data->categoria_id      = $dados['categoria_id'];
                    
                    $data->update();

                    $file->move(public_path('images/'), $nameFile_F);           
                    //dd($id);
                $request->session()->flash('swalDefaultSuccess', 'Dados atualizados com sucesso.'); 
                return redirect()->back();
                

            }
            else
            {
               
                $dados = [
                    "categoria_id" => $request->categoria_id,                                  
                    
                ];

               
                $data = foto::find($id);
                               
                $data->categoria_id      = $dados['categoria_id'];
               
               
                
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
    public function destroy($id)
    {
        $delete = foto::find($id)->delete();
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
