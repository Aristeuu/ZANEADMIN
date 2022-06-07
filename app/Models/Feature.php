<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feature extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'feature';

    protected $fillable = ['foto','titulo','descricao'];


    public static function getFirst()
    {
        return $table = Feature::select('*')->whereNUll('deleted_at')->where('id',1)->first();
    }

    public static function getAll()
    {
        return $table = Feature::select('*')->whereNull('deleted_at')->where('id','<>',1)->paginate(10);
    }
}
