<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use Auth;

class EventsController extends Controller
{
 //Lister
    public function index(){
        //utiliser le model pour recuperer la liste des evenements
        $event = Event::all();
        //return dd($listgardiennage);
        return view('events.tableau', ['events' => $events]);

    }
    //Affiche le formulaire
    public function create(){
        // create ghi katsiftek l formulaire machi katajouter
        // store li katajouter rah dayrinha f add ok
        return view('event.create');

    }

}

