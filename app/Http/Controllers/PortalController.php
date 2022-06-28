<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Banner;
use App\Models\Categoria;
use App\Models\Projects;
use App\Models\Equipe;
use App\Models\Parceiros;

class PortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        $banners    = Banner::listar_banners();
        $categorias = Categoria::listar_categorias();
        $projectos  = Projects::listar_projectos();
        $teams      = Equipe::all();
        $parceiros  = Parceiros::listar_parceiros();
       // dd($parceiros);
        
        return view('portal.home',compact('banners','categorias','projectos','teams','parceiros'));
    }


    public function sobre()
    {
        $teams      = Equipe::all();
        $categorias = Categoria::listar_categorias();   

        return view('portal.sobre',compact('categorias','teams'));
    }


    public function servicos()
    {
        $teams      = Equipe::all();
        $categorias = Categoria::listar_categorias();

        return view('portal.servico',compact('teams','categorias'));
    }

    public function features()
    {
        $categorias = Categoria::listar_categorias();
        return view('portal.feature',compact('categorias'));
    }

    public function projectos()
    {
        $categorias = Categoria::listar_categorias();
        $projectos  = Projects::all();
        return view('portal.projectos',compact('categorias','projectos'));
    }

    public function equipe()
    {
        $categorias = Categoria::listar_categorias();
        $teams      = Equipe::all();
        return view('portal.equipe',compact('categorias','teams'));
    }    
    public function reuniao()
    {
        $categorias = Categoria::listar_categorias();
        return view('portal.reuniao',compact('categorias'));
    }
    public function projectosShow($id)
    {
        $categorias = Categoria::listar_categorias();
        $projectos  = Projects::listar_categoriaProject($id);
        return view('portal.projectosShow',compact('categorias','projectos'));

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
