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
}
