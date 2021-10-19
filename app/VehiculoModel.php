<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoModel extends Model
{
    protected $table="Catalogo.Vehiculo";
    protected $primaryKey = "VehiculoId";
    protected $fillable = [
    'VehiculoMarcaId',
    'VehiculoTipoId',
    'Nombre',
    'EsHabilitado',
    'EsEliminado',
    'FechaCreacion',
    'UsuarioCreacionId',
    'FechaModificacion',
    'UsuarioModificacionId'];
    public $timestamps = false;




}
