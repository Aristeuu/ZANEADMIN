<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipe extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'equipe';

    protected $fillable = ['nome','foto','funcao','facebook','twitter','instagram'];


    public static function getAll()
    {
        return $table = Equipe::select('*')->whereNUll('deleted_at')->paginate(10);
    }
    
}
