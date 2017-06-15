<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;
use App\Http\Requests;

class CancelApiController extends Controller
{
    public function index(Request $request)
    {
    	// dd(trim($request->phone_number));
        return Booking::where('is_approved', 1)
        				->where('phone_number', 'LIKE', '%'.trim($request->phone_number).'%')
        				->get();
    }

    public function destroy(Request $request, $id)
    {
        $booking = Booking::find($id);
        if (!$booking->delete()) {
            return "Cancelling failed!";
        }
        return "Booking Cancelled!";
    }
}
