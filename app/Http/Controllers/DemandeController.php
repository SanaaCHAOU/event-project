<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Demandes;

class DemandeController extends Controller
{
    public function create(){
        return view('pages.notifications');
        

    }

    public function store(Request $req){
        $cat = new Demandes();
        $list=Demandes::all();
        $cat->nom= $req->input('nom');
        $cat->prenom= $req->input('prenom');
        $cat->email= $req->input('email');
        $cat->category= $req->input('category');
        $cat->sujet= $req->input('sujet');

        $cat->save();
        return view('pages.list', ['liste' =>$list]);
        
        
    

    }
}
