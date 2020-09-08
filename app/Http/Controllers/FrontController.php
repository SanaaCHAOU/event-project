<?php

namespace App\Http\Controllers;


use App\Userf;
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

   public function homeUser(){
        return view('FrontEnd.homeUser');


   }


    public function loginT(){

    return view('FrontEnd.loginT');

   }


    public function save( Request $req ){

       //print_r($req->input());
       $user = new Userf;
      $user->firstName=$req->firstName;
      $user->lastName=$req->lastName;
      $user->email=$req->email;
      $user->password=$req->password;
      $user->age=$req->age;
      $user->city=$req->city;
      $user->category=$req->category;
      $user->save();

     return view('FrontEnd.loginT');
     

  }   


/*
    public function userhome(){

    return view('FrontEnd.userhome');

   } */

    public function save1( Request $req ){

      //print_r($req->input());
      // $user = new Userf;
     // $user->email=$req->email;
   //   $user->password=$req->password;
     // $user->login();
      $req->session()->put('data',$req->input());
      //return  view('FrontEnd.myprofile');

     //return  redirect('/userhome');
     

  }  



}

