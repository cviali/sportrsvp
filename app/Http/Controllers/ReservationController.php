<?php

namespace App\Http\Controllers;

use App\Court;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $courts = Court::where('deleted_at', '=', null)->get();
        // dd($courts);
        return view('reservation-list', compact('courts'));
    }
}
