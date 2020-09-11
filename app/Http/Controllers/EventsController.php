<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Events_details;

class EventsController extends Controller
{
    public function index(){

        $event=Events_details::all();
        return view("pages.events", ["liste"=>$event]);

    }
}
