<?php

namespace App\Helpers;

class EventsHelper
{
    public $tiposAnimal;
    public $tiposEvento; 

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
            'Nacimiento',
            'Muerte',
            'Descarte',
            'venta para cría',
            'venta para beneficio',
        ];
    }
}