<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;
use App\Http\Requests;

class BookingApiController extends Controller
{
    public function index()
    {
        $booking = Booking::where('is_approved', 1)->pluck('seat_number');
        return $booking;
    }
    public function store(Request $request)
    {
        $status = 'success';
        $booking = new Booking($request->all());
        if (!$booking->save()) {
            $status = 'failed';
        }
        return $status;
    }

    public function update(Booking $booking, Request $request)
    {
        $status = 'success';
        $booking->is_approved = $request->is_approved;
        if (!$booking->save()) {
            $status = 'failed';
        }
        $approvings = Booking::where('is_approved', 1)->get();
        return view('approve', compact('approvings'));
    }

    public function destroy(Booking $booking)
    {
        $status = 'success';
        if (!$booking->delete()) {
            $status = 'failed';
        }
        return $status;
    }
}
