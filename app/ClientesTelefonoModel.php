<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesTelefonoModel extends Model
{
    protected $table="Cliente.ClienteTelefono";
    protected $primaryKey = "ClienteTelefonoId";
    protected $fillable = [
    'ClienteId',
    'Operadora',
    'Prefijo',
    'Numero',
    'Extension',
    'EsFavorito',
    'EsHabilitado',
    'EsEliminado',
    'FechaCreacion',
    'UsuarioCreacionId',
    'FechaModificacion',
    'UsuarioModificacionId'];
    public $timestamps = false;




}
