<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $documento
 * @property $investigador_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Investigadore $investigadore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'documento' => 'required',
		'investigador_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['documento','investigador_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function investigadore()
    {
        return $this->hasOne('App\Models\Investigadore', 'id', 'investigador_id');
    }
    

}
