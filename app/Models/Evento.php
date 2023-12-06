<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $fecha
 * @property $hora
 * @property $tipo
 * @property $Lugar
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'fecha' => 'required',
		'hora' => 'required',
		'tipo' => 'required',
		'Lugar' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','fecha','hora','tipo','Lugar','imagen'];



}
