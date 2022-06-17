<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Banner extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $table = 'banners';

    protected $fillable = ['titulo','descricao','foto','status'];



    public static function getAll()
    {
        return $table = Banner::select('*')
                                ->whereNUll('deleted_at')
                                ->paginate(8);
    }

    public static function listar_banners()
    {
        return $table = Banner::select('*')
        ->whereNUll('deleted_at')
        ->get();

    }
}
