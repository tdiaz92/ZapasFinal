<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Zapatilla extends Model
{
    public $table = "zapatillas";
    public $primaryKey = "id_zapa";
    public $timestamps = false;
    public $guarded = [];

   public function modelo () {
       return $this->belongsToMany("App\Modelo", "zapatillas", "id_zapa", "id_modelo");
   }

   public function talle () {
    return $this->belongsToMany("App\Talle", "zapatillas", "id_zapa", "id_talle");
    }


    public function color () {
        return $this->belongsToMany("App\Color", "zapatillas", "id_zapa", "id_color");
    }

    public function getAll(){ /*
        $sql = "SELECT * FROM zapatillas z
        INNER JOIN modelos m ON m.id_modelo = z.id_modelo";
        $results = DB::select($sql);*/
        $results = DB::table('zapatillas')
            ->join('modelos', 'zapatillas.id_modelo', '=', 'modelos.id_modelo')
            ->join('colores', 'zapatillas.id_color', '=', 'colores.id_color')
            //->join('talles', 'zapatillas.id_talle', '=', 'talles.id_talle')
            ->select('zapatillas.*', 'modelos.modelo', 'colores.color')
            ->get();

        return $results;
    }
}
