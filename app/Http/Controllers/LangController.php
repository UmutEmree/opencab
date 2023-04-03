<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LangController extends Controller
{
 	
    public function index($locale){

       if(!in_array($locale, ['en','de'])){
       	$locale = 'de';
       }

       \Session::put('locale',$locale);
       return back();

       }
}
