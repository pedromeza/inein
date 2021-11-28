<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table ="proveedor";
    protected $primaryKey = 'id_proveedor';
    protected $fillable = ['empresa','rfc','giro'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
