<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nac
 * @property $nombre
 * @property $apellido
 * @property $cedula_rif
 * @property $b_nac
 * @property $b_nombre
 * @property $b_apellido
 * @property $b_cedula
 * @property $direccion
 * @property $telefono
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nac', 'nombre', 'apellido', 'cedula_rif', 'b_nac', 'b_nombre', 'b_apellido', 'b_cedula', 'direccion', 'telefono', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany(\App\Models\Vehiculo::class, 'id', 'id_cliente');
    }
    
}
