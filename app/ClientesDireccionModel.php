<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesDireccionModel extends Model
{
    protected $table="Cliente.ClienteDireccion";
    protected $primaryKey = "ClienteDireccionId";
    protected $fillable = [
    'ClienteId',
    'Direccion',
    'Numero',
    'Sector',
    'Referencia',
    'CodigoPostal',
    'Posicion',
    'EsHabilitado',
    'EsEliminado',
    'FechaCreacion',
    'UsuarioCreacionId',
    'FechaModificacion',
    'UsuarioModificacionId'];
    public $timestamps = false;




}
