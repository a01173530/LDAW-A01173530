<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    // protected $fillable = [
    //     'id_libro',
    //     'Titulo',
    //     'Autor',
    //     'AnoPublicacion',
    //     'Paginas',
    //     'Editorial',
    //     'LugarPublicacion'
    // ];
    public $timestamps = false;
}
