<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoTipoModel extends Model
{
    protected $table="Catalogo.VehiculoTipo";
    protected $primaryKey = "VehiculoTipoId";
    protected $fillable = [
    'Nombre',
    'EsHabilitado',
    'EsEliminado',
    'FechaCreacion',
    'UsuarioCreacionId',
    'FechaModificacion',
    'UsuarioModificacionId'];
    public $timestamps = false;




}
