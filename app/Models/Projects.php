<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Projects extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'projectos';

    protected $fillable = ['titulo','descricao','categoria_id','foto'];

    public static function getAll()
    {
        return $table = Projects::select('projectos.id','projectos.titulo AS project_titulo','projectos.descricao','projectos.foto','categoria.id AS categoria_id','categoria.titulo AS categoria_titulo')
                                  ->join('categoria','categoria.id', '=','projectos.categoria_id')
                                  ->WhereNUll('projectos.deleted_at')
                                  ->paginate(10);
    }

    public static function listar_projectos(){

        return $table = Projects::select(DB::raw('ROW_NUMBER() OVER(ORDER BY ID DESC) AS ROW, projectos.id, projectos.titulo AS project_titulo,projectos.descricao,projectos.foto,categoria.id AS categoria_id,categoria.titulo AS categoria_titulo'))
                                ->join('categoria','categoria.id', '=','projectos.categoria_id')
                                ->WhereNUll('projectos.deleted_at')
                                ->orderBy('projectos.id','DESC')
                                ->paginate(4);
                            }

}
