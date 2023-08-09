<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Investigadore
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $grado
 * @property $profesion
 * @property $dni
 * @property $telefono
 * @property $email
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto[] $proyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Investigadore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'grado' => 'required',
		'profesion' => 'required',
		'dni' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','grado','profesion','dni','telefono','email','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto', 'investigador_id', 'id');
    }
    

}
