<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Helpers\EventsHelper;

class EventController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $eventsHelper = new EventsHelper;
        $eventData = $request->all();
        $event = new Event;
        $event->cedula = 1234567;
        $event->tipoAnimal = $eventData['tipo-animal'];
        $event->unidadAnimal = $eventData['unidad-animal'];
        $event->evento = $eventData['evento'];
        $event->cantidad = $eventData['cantidad'];

        if (in_array($event->evento, $eventsHelper->eventosUAnegativo)) {
            $event->unidadAnimal *= -1; 
        }
        
        $event->save();

        return view('register', [
            'message' => 'Su movimiento ha sido registrado exitosamente'
        ]);
    }

    public function show()
    {
        $cedula = 1234567;
        $eventsHelper = new EventsHelper;
        $events = new Event;
        $date = Carbon::now();
        
        return view('year', [
            'events' => $events->getGrouped($cedula),
            'tiposAnimal' => $eventsHelper->tiposAnimal,
            'tiposEvento' => $eventsHelper->tiposEvento,
            'totals' => $events->getTotals($cedula)[0],
            'year' => $date->year
        ]);
    }
}
