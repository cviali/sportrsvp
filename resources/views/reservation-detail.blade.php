@extends('admin_template')

@php
use App\User;
use App\Court;
use Carbon\Carbon;
$page_title = 'Reservation Detail'
@endphp

@section('content')
<div class='row'>
    <div class="col-12 pb-3">
        <a href="/reservations"><i class="fas fa-arrow-left mr-2"></i>Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header @switch($reservation->status_id) 
                    @case(0)bg-info @break 
                    @case(1)bg-primary @break 
                    @case(2)bg-success @break 
                    @case(3)bg-danger @break 
                    @case(4)bg-secondary @break 
                @endswitch">

                <h3 class="card-title">{{Court::where('id', '=', $reservation->court_id)->first()->name}} - {{ User::where('id', '=', $reservation->user_id)->first()->name }} - {{ Carbon::parse($reservation->reservation_date)->format('d M Y - H:i') }}</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label>Court</label>
                        <input class="form-control" disabled value="{{ Court::where('id', '=', $reservation->court_id)->first()->name }}">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" disabled value="{{ User::where('id', '=', $reservation->user_id)->first()->name }}">
                    </div>
                    <div class="form-group">
                        <label>Reservation Date</label>
                        <input class="form-control" disabled value="{{ Carbon::parse($reservation->reservation_date)->format('d M Y - H:i') }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection