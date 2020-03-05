<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    public $table = "modelos";
    public $primaryKey = "id_modelo";
    public $timestamps = false;
    public $guarded = [];

    public function marca() {
        return $this->belongsTo("App\Marca", "id_marca");
    }

    public function zapatilla () {
        return $this->belongsToMany("App\Zapatilla", "zapatillas", "id_modelo", "id_zapa");
    }
}
