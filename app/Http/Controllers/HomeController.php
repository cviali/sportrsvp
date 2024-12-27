<?php

namespace App\Http\Controllers;

use App\Court;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courts = Court::where('deleted_at', '=', null)->get();
        return view('home', compact(['courts']));
    }
}
