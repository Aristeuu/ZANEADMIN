<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuarios extends Model
{
    use HasFactory;
    

    protected $table = 'users';
    protected $fillable = [
                'nome',
                'email',
                'password'
    ];

    
    public static function getAll()
    {
        return $table = Usuarios::select('*')
                            ->paginate(8);
    }
    
}
