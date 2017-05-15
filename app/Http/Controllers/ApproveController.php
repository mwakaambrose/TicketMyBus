<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Approve;
use App\Booking;
use App\Http\Requests;

class ApproveController extends Controller
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

    public function index()
    {
        $approvings = Booking::where('is_approved', 1)->get();
        return view('approve', compact('approvings'));
    }
}
