<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesEmailModel extends Model
{
    protected $table="Cliente.ClienteEmail";
    protected $primaryKey = "ClienteEmailId";
    protected $fillable = [
    'ClienteId',
    'Email',
    'EsFavorito',
    'EsHabilitado',
    'EsEliminado',
    'FechaCreacion',
    'UsuarioCreacionId',
    'FechaModificacion',
    'UsuarioModificacionId'];
    public $timestamps = false;




}
