<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parceiros extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'parceiros';

    protected $fillable = ['foto','titulo','descricao','facebook','instagram','status'];


    public static function listar_parceiros()
    {
        return $table = parceiros::select('*')->whereNull('deleted_at')->where('status', '1')->get();
    }

}
