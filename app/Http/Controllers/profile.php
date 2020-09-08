<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userf;

class profile extends Controller
{
    //
    public function home(Request $req){
    	 $req->session()->put('data',$req->input());
    	    

    //return $req->session()->get('data');
    //	 return redirect('userhome');

    }




}
