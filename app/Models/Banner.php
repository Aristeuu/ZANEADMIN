<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softdeletes;

class Banner extends Model
{
    use HasFactory;
    use softdeletes;

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
