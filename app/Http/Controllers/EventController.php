<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\EventsHelper;
use App\Models\Event;

class EventController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $eventData = $request->all();
        $event = new Event;
        $event->cedula = 1234567;
        $event->tipoAnimal = $eventData['tipo-animal'];
        $event->unidadAnimal = $eventData['unidad-animal'];
        $event->evento = $eventData['evento'];
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

        return view('year', [
            'events' => $events->getGrouped($cedula),
            'tiposAnimal' => $eventsHelper->tiposAnimal,
            'tiposEvento' => $eventsHelper->tiposEvento
        ]);
    }
}
