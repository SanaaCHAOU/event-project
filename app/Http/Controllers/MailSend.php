<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \App\Mail\SendMail;

use App\Demandes;

class MailSend extends Controller
{
    public function mailsend($id){
		$list=Demandes::find($id);

    	$details = [
    		'title' => 'Title : Mail from Real Programmer',
    		'body' => 'Body: This is for testing',];
    	\Mail::to($list->email)->send( new SendMail($details));
    	return view('emails.thanks');
	}
	
	public function mailsendrefus($id){
		$list=Demandes::find($id);
		$liste=Demandes::all();
    	$details = [
    		'title' => 'Title : Refus Mail from Real Programmer',
    		'body' => 'Body: This is for testing refusing',];
    	\Mail::to("$list->email")->send( new SendMail($details));
    	return view('pages.notifications', ['liste' =>$liste]);
    }
}
