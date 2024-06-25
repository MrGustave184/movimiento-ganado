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
        return DB::select('SELECT
            tipoAnimal,
            cantidad,
            UAinicial,
            nacimientos,
            muertes,
            descartes,
            venta_cria,
            venta_beneficio,
            cantidad - (muertes + descartes + venta_cria + venta_beneficio) as cantidadFinal,
            UAfinal
        FROM (
            SELECT
                SUM(CASE WHEN evento = 0 OR evento = 1 THEN cantidad END) AS cantidad,
                SUM(CASE WHEN evento = 0 THEN unidadAnimal END) AS UAinicial,
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
                END AS tipoAnimal,
                SUM(unidadAnimal) as UAfinal,
                COALESCE(SUM(CASE WHEN evento = 1 THEN cantidad END), 0) AS nacimientos,
                COALESCE(SUM(CASE WHEN evento = 2 THEN cantidad END), 0) AS muertes,
                COALESCE(SUM(CASE WHEN evento = 3 THEN cantidad END), 0) AS descartes,
                COALESCE(SUM(CASE WHEN evento = 4 THEN cantidad END), 0) AS venta_cria,
                COALESCE(SUM(CASE WHEN evento = 5 THEN cantidad END), 0) AS venta_beneficio
            FROM events
            WHERE cedula = ?
            AND year(created_at) = year(curdate())
            GROUP BY tipoAnimal
        ) eventData', [$cedula]);
    }

    public function getTotals($cedula) 
    {
        return DB::select('SELECT
            cantidad,
            totalAnimales,
            totalUAInicial,
            totalNacimientos,
            totalMuertes,
            totalDescartes,
            totalVenta_cria,
            totalVenta_beneficio,
            UAFinal,
            totalAnimales + totalNacimientos - (totalMuertes + totalDescartes + totalVenta_cria + totalVenta_beneficio) as cantidadFinal
        FROM (
            SELECT
                SUM(CASE WHEN evento = 0 OR evento = 1 THEN cantidad END) AS cantidad,
                COALESCE(SUM(CASE WHEN evento = 0 THEN cantidad END), 0) AS totalAnimales,
                COALESCE(SUM(CASE WHEN evento = 0 THEN unidadAnimal END), 0) AS totalUAInicial,
                COALESCE(SUM(CASE WHEN evento = 1 THEN cantidad END), 0) AS totalNacimientos,
                COALESCE(SUM(CASE WHEN evento = 2 THEN cantidad END), 0) AS totalMuertes,
                COALESCE(SUM(CASE WHEN evento = 3 THEN cantidad END), 0) AS totalDescartes,
                COALESCE(SUM(CASE WHEN evento = 4 THEN cantidad END), 0) AS totalVenta_cria,
                COALESCE(SUM(CASE WHEN evento = 5 THEN cantidad END), 0) AS totalVenta_beneficio,
                SUM(unidadAnimal) as UAfinal
            FROM events
            WHERE cedula = ?
        ) eventData', [$cedula]);
    }
}
