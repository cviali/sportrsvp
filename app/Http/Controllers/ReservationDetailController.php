<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationDetailController extends Controller
{
    public function updateStatus($id, $status_id)
    {
        // dd($status_id);
        Reservation::where('id', $id)->update(['status_id' => $status_id]);

        session()->flash('msg', 'Reservation successfully updated.');
        return redirect()->back();
    }

    public function index($id)
    {
        $reservation = Reservation::where('id', '=', $id)->first();
        // dd($reservation);
        return view('reservation-detail', compact('reservation'));
    }
}
