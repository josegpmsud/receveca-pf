<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 *
 * @property $id
 * @property $id_usuario
 * @property $id_vehiculo
 * @property $id_plan
 * @property $fecha_ini
 * @property $fecha_fin
 * @property $codigo
 * @property $cobertura
 * @property $pago
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Plan $plan
 * @property Usuario $usuario
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contrato extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_usuario', 'id_vehiculo', 'id_plan', 'fecha_ini', 'fecha_fin', 'codigo', 'cobertura', 'pago', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan()
    {
        return $this->belongsTo(\App\Models\Plan::class, 'id_plan', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'id_usuario', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehiculo()
    {
        return $this->belongsTo(\App\Models\Vehiculo::class, 'id_vehiculo', 'id');
    }
    
}
