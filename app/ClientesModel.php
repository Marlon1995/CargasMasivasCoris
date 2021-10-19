<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesModel extends Model
{
    protected $table="Cliente.Cliente";
    protected $primaryKey = "ClienteId";
    protected $fillable = [
    'IdentificacionTipoId',
    'ClienteTipoId',
    'SexoId',
    'CiudadId',
    'Identificacion',
    'PrimerNombre',
    'SegundoNombre',
    'PrimerApellido',
    'SegundoApellido',
    'NombreCompleto',
    'FechaNacimiento',
    'Observacion',
    'EsVip',
    'EsHabilitado',
    'EsEliminado',
    'FechaCreacion',
    'UsuarioCreacionId',
    'FechaModificacion',
    'UsuarioModificacionId'];
    public $timestamps = false;




}
