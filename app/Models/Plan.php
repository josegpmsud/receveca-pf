<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plan
 *
 * @property $id
 * @property $ter_muerte
 * @property $ter_invalidez
 * @property $ter_medicos
 * @property $ocu_muerte
 * @property $ocu_invalidez
 * @property $ocu_medicos
 * @property $danos
 * @property $materiales
 * @property $legal
 * @property $limites
 * @property $funerarios
 * @property $grua
 * @property $indem
 * @property $extra
 * @property $valor
 * @property $descripcion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Contrato[] $contratos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plan extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['ter_muerte', 'ter_invalidez', 'ter_medicos', 'ocu_muerte', 'ocu_invalidez', 'ocu_medicos', 'danos', 'materiales', 'legal', 'limites', 'funerarios', 'grua', 'indem', 'extra', 'valor', 'descripcion', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contratos()
    {
        return $this->hasMany(\App\Models\Contrato::class, 'id', 'id_plan');
    }
    
}
