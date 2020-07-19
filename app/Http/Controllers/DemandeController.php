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
        $cat->nom= $req->input('nom');
        $cat->prenom= $req->input('prenom');
        $cat->email= $req->input('email');
        $cat->category= $req->input('category');
        $cat->sujet= $req->input('sujet');

        $cat->save();
        return view('pages.notifications');
        
    
    }
    public function edit($id){
        $listdem = Demandes::find($id);
        return view('pages.list', ['dmd' => $listdem]);

    }

    public function destroy($id){
        $listet=Demandes::all();
        $listcat = Demandes::find($id);
        $listcat->delete();
        return view('pages.notifications', ['liste' =>$listet]);
	}
}
