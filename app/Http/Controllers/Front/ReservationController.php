<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Support\Facades\Input;
use Mail;



class ReservationController extends Controller
{
	
	public function step1($code){

		  $rezervasyon = Reservation::where('code',$code)->where('status',0)->first();
       	  return view('front.pages.reservation.select-vehicle')->with(compact('rezervasyon'));
	}

	public function step2($code){

		  $rezervasyon = Reservation::where('code',$code)->where('status',0)->first();
       	  return view('front.pages.reservation.view-order')->with(compact('rezervasyon'));
	}

		public function step3($code){

		  $rezervasyon = Reservation::where('code',$code)->first();
       	  return view('front.pages.reservation.confirmation')->with(compact('rezervasyon'));
	}


    public function reservation(Request $request){

	    Reservation::create($request->all());

		return redirect('reservation/'.$request->code);

    }

    public function reservation2(Request $request){

	   	    $rez = Reservation::where('code', $request->code);
			
			$input = Input::except('_method', '_token');
			
			$rez->update($input);
			
			
		return redirect('reservation/view-order/'.$request->code);

    }

    public function reservation3(Request $request){

	   	    $rez = Reservation::where('code', $request->code);
			
			$input = Input::except('_method', '_token');
			
			$rez->update($input);
			
			  Mail::send('mail.reservation', $input, function($message) use ($input)
            {
                $message->from('info@infinitumagency.com', "OpenCab");
                $message->subject($input['name'].' '.$input['surname']." - Bestellformular");
                $message->to('bestellung@opencab.at');
            });
			
		return redirect('reservation/confirmation/'.$request->code);

    }

    

}
