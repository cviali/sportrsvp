<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationDetailController extends Controller
{
    public function index($id)
    {
        $reservation = Reservation::where('id', '=', $id)->first();
        // dd($reservation);
        return view('reservation-detail', compact('reservation'));
    }
}
