<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index(){

    return view('FrontEnd.home.homeContenent');

   }

    public function about(){

    return view('FrontEnd.about');

   }
    public function contact(){

    return view('FrontEnd.contact');

   }
    public function faq(){

    return view('FrontEnd.faq');

   }
   public function events(){

    return view('FrontEnd.events');

   }
    public function registre(){

    return view('FrontEnd.registre');

   }
}
