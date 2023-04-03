<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name','surname','phone','email','passenger','bags','service','pickupaddress','dropoffaddress','pickupdate','pickuphour','pickupminute','vechile','status','code','message','zipcode','flightnumber','stadt','zipcode2','stadt2','fromcity','payment'];
}
