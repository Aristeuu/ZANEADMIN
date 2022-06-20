<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foto extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'fotos';

    protected $fillable = ['foto','categoria_id'];



    public static function get_all()
    {
        return $table = foto::select('fotos.foto','categoria.titulo')
                            ->join('categoria','categoria.id', '=','fotos.categoria_id')
                            ->whereNull('categoria.deleted_at')->paginate(10);
    }
}
