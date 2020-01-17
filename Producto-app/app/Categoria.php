<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //cuando ya existe bbdd creada
    //protected $table="wp_categoria";

    //definicion Llave primaria
    /*protected $primaryKey = 'cod_categoria';
    public $incrementing = false;
    protected $keyType = 'string';*/

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

}
