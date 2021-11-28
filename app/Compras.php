<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table ="compras";
    protected $primaryKey = 'id_compras';
    protected $fillable = ['name','fecha_compra','monto','descripcion','id_proveedor'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
