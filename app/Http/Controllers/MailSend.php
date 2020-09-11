<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \App\Mail\SendMail;

use App\Demandes;
use App\Events_details;

class MailSend extends Controller
{
    public function mailsend( $id){
		$list=Demandes::find($id);
        $evt = new Evenement();
		$evt->nom= $list->nom;
        $evt->prenom= $list->prenom;
        $evt->email= $list->email;
        $evt->category= $list->category;
        $evt->sujet= $list->sujet;
		$evt->save();
		Mail::send('emails.email', ["liste"=>$list], function($message) use($list) {
			$message->to($list->email);
			$message->subject('New email!!!');
		});
		$list->delete();
    	return redirect()->back();
	}


	public function mailsendrefus($id ){
		$list=Demandes::find($id);
		
		Mail::send('emails.annulation', ["liste"=>$list], function($message) use($list) {
			$message->to($list->email);
			$message->subject('Annuler!!!');
		});
       
		$list->delete();
		$listet=Demandes::all();
    	return view('pages.notifications', ['liste' =>$listet]);
    }
}
