<?php

namespace App\Http\Controllers;

use App\Court;
use App\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function addReservation(Request $request)
    {
        // dd(Carbon::parse($request->date));
        Reservation::create([
            'court_id' => $request->court_id,
            'user_id' => Auth::user()->id,
            'reservation_date' => Carbon::parse($request->date),
            'duration' => $request->duration,
            'status_id' => 0
        ]);

        session()->flash('msg', 'Reservation successfully created.');
        return redirect()->back();
    }

    public function index()
    {
        $courts = Court::where('deleted_at', '=', null)->get();
        $reservations = Reservation::where('deleted_at', '=', null)->get();
        // dd($courts[0]->types->first()->name);
        return view('reservation-list', compact('courts', 'reservations'));
    }
}
