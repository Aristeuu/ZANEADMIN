<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Servicos extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table  = 'servicos';
    protected $fillable = ['foto','titulo','descricao'];


    public static function getAll()
    {
        return $query = Servicos::select('*')->whereNull('deleted_at')->paginate(8);
    }
}
