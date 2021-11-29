<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $ISBN
 * @property $Titulo
 * @property $Autor
 * @property $AnoPublicacion
 * @property $Paginas
 * @property $Editorial
 * @property $LugarPublicacion
 * @property $categoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'ISBN' => 'required',
		'Titulo' => 'required',
		'Autor' => 'required',
		'AnoPublicacion' => 'required',
		'Paginas' => 'required',
		'Editorial' => 'required',
		'LugarPublicacion' => 'required',
		'categoria_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ISBN','Titulo','Autor','AnoPublicacion','Paginas','Editorial','LugarPublicacion','categoria_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    

}
