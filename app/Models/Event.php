<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    public function getGrouped($cedula) 
    {
        return DB::select('select
            tipoAnimal,
            nacimientos - (muertes + descartes + venta_cria + venta_beneficio) as cantidadAnimal,
            totalUA,
            nacimientos,
            muertes,
            descartes,
            venta_cria,
            venta_beneficio
        from (
            select
                CASE
                    WHEN tipoAnimal = 0 THEN "Toros"
                    WHEN tipoAnimal = 1 THEN "Toretes"
                    WHEN tipoAnimal = 2 THEN "Vacas en producción"
                    WHEN tipoAnimal = 3 THEN "Vacas secas"
                    WHEN tipoAnimal = 4 THEN "Vacas horras"
                    WHEN tipoAnimal = 5 THEN "Novillas"
                    WHEN tipoAnimal = 6 THEN "Mautas"
                    WHEN tipoAnimal = 7 THEN "Mautes"
                    WHEN tipoAnimal = 8 THEN "Becerras"
                    WHEN tipoAnimal = 9 THEN "Becerros"
                END as tipoAnimal,
                SUM(unidadAnimal) as totalUA,
                COUNT(CASE WHEN evento = 0 THEN evento END) as nacimientos,
                COUNT(CASE WHEN evento = 1 THEN evento END) as muertes,
                COUNT(CASE WHEN evento = 2 THEN evento END) as descartes,
                COUNT(CASE WHEN evento = 3 THEN evento END) as venta_cria,
                COUNT(CASE WHEN evento = 4 THEN evento END) as venta_beneficio
            from events
            where cedula = ?
            group by tipoAnimal
        ) eventData', [$cedula]);
    }
}
