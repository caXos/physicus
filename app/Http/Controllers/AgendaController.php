<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        // $blah = Agenda::all()->sortBy('date');
        // echo $blah;
        $agendas = Agenda::all()->sortBy('date')->toArray();
        // echo json_encode($agendas);
        return Inertia::render('Agenda', ['agendas' => $agendas]);
    }
}
