<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talle extends Model
{
    public $table = "talles";
    public $primaryKey = "id_talle";
    public $timestamps = false;
    public $guarded = [];


    public function zapatilla () {
        return $this->belongsToMany("App\Zapatilla", "zapatillas", "id_talle", "id_zapa");
    }
}
