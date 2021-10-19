<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesEmpresaAplicacionModel extends Model
{
    protected $table="Cliente.ClienteEmpresaAplicacion";
    protected $primaryKey = "ClienteEmpresaAplicacionId";
    protected $fillable = [
    'ClienteDatoTipoId',
    'ProductoId',
    'EsHabilitado',
    'EsEliminado',
    'FechaCreacion',
    'UsuarioCreacionId',
    'FechaModificacion',
    'UsuarioModificacionId'];
    public $timestamps = false;




}
