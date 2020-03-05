<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $table = "marcas";
    public $primaryKey = "id_marca";
    public $timestamps = false;
    public $guarded = [];

    public function modelo(){
        return $this->hasMany("App\Modelo", "id_modelo");
    }
}
