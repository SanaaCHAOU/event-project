<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index(){

    return view('FrontEnd.home.homeContenent');

   }

    public function Categories(){

    return view('FrontEnd.Categories');

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
    public function loginT(){

    return view('FrontEnd.loginT');

   }

    public function insertUser( Request $req ){

      $firstName=$req-> input('firstName');
      $lastName=$req-> input('lastName');
      $email=$req-> input('email');
      $password=$req-> input('password');
      $age=$req-> input('age');
      $city=$req-> input('city');
      $category=$req-> input('select');


      DB::table('users')->insert(
      ['firstName'=>$firstName,'lastName'=>$lastName,'email'=>$email,'password'=>$password,'age'=>$age,'city'=>$city,'select'=>$Category] );

      echo 'success'; 




     }
}

