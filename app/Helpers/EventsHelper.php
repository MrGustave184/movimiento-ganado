<?php

namespace App\Helpers;

class EventsHelper
{
    public $tiposAnimal;
    public $tiposEvento;
    public $eventosUAnegativo;
    public $indiceParicion;
    public $indiceNacimiento;
    public $indiceMortalidad;

    public function __construct()
    {
        $this->tiposAnimal = [
            'Toros',
            'Toretes',
            'Vacas en producción',
            'Vacas secas',
            'Vacas horras',
            'Novillas',
            'Mautas',
            'Mautes',
            'Becerras',
            'Becerros',
        ];

        $this->tiposEvento = [
            'Adquisicion',
            'Nacimiento',
            'Muerte',
            'Descarte',
            'venta para cría',
            'venta para beneficio',
        ];

        $this->eventosUAnegativo = [2, 3, 4, 5];

        $this->indiceParicion = 80;
        $this->indiceNacimiento = 80;
        $this->indiceMortalidad = 3;
    }
}