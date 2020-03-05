<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public $table = "colores";
    public $primaryKey = "id_color";
    public $timestamps = false;
    public $guarded = [];


    public function zapatilla () {
        return $this->belongsToMany("App\Zapatilla", "zapatillas", "id_color", "id_zapa");
    }

}
