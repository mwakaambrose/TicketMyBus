<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BookingApiController;

class Booking extends Model
{
    protected $fillable = [
    	'name',
    	'phone_number',
    	'to_from',
    	'price',
    	'seat_number',
    	'departure_time',
    	'is_approved'
    ];
}
