<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;

class userDetailsController extends Controller
{
/**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function complete(){
        return view('user_details.complete');
    }
    public function organize(){
        return view("user_details.organize");
    }

    
}
