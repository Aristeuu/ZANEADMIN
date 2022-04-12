<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Locais extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'locais';

    protected $fillable = ['local','preco','status'];

    public static function getAll()
    {
        return $table = Locais::select('*')
                            ->whereNUll('deleted_at')
                            ->paginate(6);
    }
}
