<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Booking;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::where('is_approved', 1)->get();
        return view('home', compact('bookings'));
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function update(Booking $booking, Request $request)
    {
        dd($request);
    }

    public function destroy(Request $request)
    {
        dd($request);
    }
}
