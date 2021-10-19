<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinatariosModel extends Model
{
    protected $table="Configuracion.ProductoEmailDestino";
    protected $primaryKey = "ProductoEmailDestinoId";
    protected $fillable = [
    'ProductoId',
    'Subject',
    'Destinatario',
    'CC',
    'Body',
    'Adjunto',
    'Descripcion',
    'EsHabilitado',
    'EsEliminado',
    'FechaCreacion',
    'UsuarioCreacionId',
    'FechaModificacion',
    'UsuarioModificacionId'];
    public $timestamps = false;




}
