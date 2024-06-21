<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $id_cliente
 * @property $id_marca
 * @property $id_clase
 * @property $modelo
 * @property $id_color
 * @property $id_tipo
 * @property $id_uso
 * @property $placa
 * @property $ano
 * @property $peso
 * @property $serial_motor
 * @property $puestos
 * @property $serial_niv
 * @property $created_at
 * @property $updated_at
 *
 * @property Clase $clase
 * @property Cliente $cliente
 * @property Color $color
 * @property Marca $marca
 * @property Tipo $tipo
 * @property Uso $uso
 * @property Contrato[] $contratos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_cliente', 'id_marca', 'id_clase', 'modelo', 'id_color', 'id_tipo', 'id_uso', 'placa', 'ano', 'peso', 'serial_motor', 'puestos', 'serial_niv'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clase()
    {
        return $this->belongsTo(\App\Models\Clase::class, 'id_clase', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'id_cliente', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function color()
    {
        return $this->belongsTo(\App\Models\Color::class, 'id_color', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marca()
    {
        return $this->belongsTo(\App\Models\Marca::class, 'id_marca', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo()
    {
        return $this->belongsTo(\App\Models\Tipo::class, 'id_tipo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uso()
    {
        return $this->belongsTo(\App\Models\Uso::class, 'id_uso', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contratos()
    {
        return $this->hasMany(\App\Models\Contrato::class, 'id', 'id_vehiculo');
    }
    
}
