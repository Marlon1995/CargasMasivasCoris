<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesDatoTipoModel extends Model
{
    protected $table="Cliente.ClienteDatoTipo";
    protected $primaryKey = "CLienteDatoTipoId";
    protected $fillable = [
    'DatoTipoId',
    'ClienteId',
    'Dato',
    'EsHabilitado',
    'EsEliminado',
    'FechaCreacion',
    'UsuarioCreacionId',
    'FechaModificacion',
    'UsuarioModificacionId'];
    public $timestamps = false;




}
