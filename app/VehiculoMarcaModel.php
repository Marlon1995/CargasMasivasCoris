<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoMarcaModel extends Model
{
    protected $table="Catalogo.VehiculoMarca";
    protected $primaryKey = "VehiculoMarcaId";
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
