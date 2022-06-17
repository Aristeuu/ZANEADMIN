<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parceiros;
use Auth;

class ParceirosController extends Controller
{
    //


    public function index()
    {
        $data = parceiros::all();
        return view('parceiros', compact('data'));
    }

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
                        "titulo" => $request->nome,
                        "facebook" => $request->facebook, 
                        "instagram" => $request->instagram,                
                        "foto" => $nameFile_F,                        
                        "status" =>'1'               
                        
                    ];

                    $id = parceiros::create($dados)->id;
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

    public function update(Request $request,$id)
    {
        try {
            //code...
            $nameFile_F  = null;
            if($file=$request->file('img')){

                    //dd('ok');
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
                        "titulo" => $request->nome,
                        "facebook" => $request->facebook, 
                        "instagram" => $request->instagram,                
                        "foto" => $nameFile_F,                        
                        "status" =>'1'               
                        
                    ];
                   
                    $data = parceiros::find($id);
                    $data->titulo    = $dados['titulo'];
                    $data->facebook = $dados['facebook']; 
                    $data->instagram = $dados['instagram'];                                                        
                    $data->status    = $dados['status'];
                    $data->foto      = $dados['foto'];

                   
                  
                    
                    $data->update();

                    $file->move(public_path('images/'), $nameFile_F);           
                    //dd($id);
                $request->session()->flash('swalDefaultSuccess', 'Dados atualizados com sucesso.'); 
                return redirect()->back();
                

            }
            else
            {
               
                $dados = [
                    "titulo" => $request->nome,
                    "facebook" => $request->facebook, 
                    "instagram" => $request->instagram,               
                    "status" =>'1'               
                    
                ];
               
                $data = parceiros::find($id);
                $data->titulo    = $dados['titulo'];
                $data->facebook = $dados['facebook']; 
                $data->instagram = $dados['instagram'];                                                                        
                
                
                $data->update();
             
                $request->session()->flash('swalDefaultSuccess', 'Dados atualizados com sucesso.'); 
                return redirect()->back();

            }               
             

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(Request $request,$id)
    {
        $delete = parceiros::find($id)->delete();
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
