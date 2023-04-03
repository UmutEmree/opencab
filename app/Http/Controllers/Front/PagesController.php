<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;
use Mail;

class PagesController extends Controller
{
   
	public function index(){
		return view('front.pages.home');
	}


	public function about(){
		
		return view('front.pages.about');
	}

	public function price(){
		
		return view('front.pages.price');
	}

	public function contact(){
		
		return view('front.pages.contact');
	}

	public function business(){
		
		return view('front.pages.business');
	}

	public function sightseeing(){
		
		return view('front.pages.sightseeing');
	}

	  public function sendmail(Request $request)
    {
        $data = $request->all();

        //  order...
        
        if ($request->birthday != NULL) {
   return redirect('/kontakt');
}

        Mail::send('mail.contact', $data, function($message) use ($data)
            {
                $message->from('info@infinitumagency.com', "OpenCab");
                $message->subject("Kontakt Form");
                $message->to('office@opencab.at');
            });
        return redirect('/kontakt')->with('success', true)->with('message','Ihre Nachricht wurde gesendet!');

    }

     

	
}
