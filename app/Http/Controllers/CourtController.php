<?php

namespace App\Http\Controllers;

use App\Court;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourtController extends Controller
{
    public function addCourt(Request $request)
    {
        $court = Court::create([
            'name' => $request->name,
        ]);
        $court
            ->types()
            ->attach(Type::where('id', $request->type)->first());

        session()->flash('msg', 'Court successfully added.');
        return redirect()->back();
    }

    public function index()
    {
        $courts = Court::where('deleted_at', '=', null)->get();
        $court_types = Type::all();
        // dd($court_types);
        return view('court-list', compact(['courts', 'court_types']));
    }
}
