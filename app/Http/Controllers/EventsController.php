<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Evenement;

class EventsController extends Controller
{
    public function index(){

        $event=Evenement::all();
        return view("pages.events", ["liste"=>$event]);


    }
}
