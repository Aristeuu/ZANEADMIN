<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categoria';

    protected $fillable = ['titulo'];


    public static function getAll()
    {
        return $table = Categoria::select('*')->whereNull('deleted_at')->paginate(5);
    }
    
}
