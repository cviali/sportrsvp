@extends('admin_template')

@php
    use App\User;
    use App\Court;
    use App\Reservation;
    use Carbon\Carbon;
    $page_title = 'Reservation Detail';
@endphp

@section('content')
    <div class='row'>
        <div class="col-12 pb-3">
            <a href="{{ Request::get('from') == 'home' ? '/home' : '/reservations' }}"><i class="fas fa-arrow-left mr-2"></i>Back</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div
                    class="card-header @switch($reservation->status_id) 
                    @case(0)bg-info @break 
                    @case(1)bg-primary @break 
                    @case(2)bg-success @break 
                    @case(3)bg-danger @break 
                    @case(4)bg-secondary @break 
                @endswitch">
                    <h3 class="card-title">{{ Court::where('id', '=', $reservation->court_id)->first()->name }} -
                        {{ User::where('id', '=', $reservation->user_id)->first()->name }} -
                        {{ Carbon::parse($reservation->reservation_date)->format('d M Y - H:i') }}</h3>
                </div>
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
                    <div class="form-group">
                        <label>Duration</label>
                        <input class="form-control" disabled value="{{ $reservation->duration }}">
                    </div>
                </div>
                @switch($reservation->status_id)
                    @case(0)
                        <div class="card-footer">
                            <a href="/update-status/{{ $reservation->id }}/1" type="submit" class="btn btn-primary">Approve</a>
                            <a href="/update-status/{{ $reservation->id }}/3" type="submit" class="btn btn-danger">Reject</a>
                            <a href="/update-status/{{ $reservation->id }}/4" type="submit" class="btn btn-secondary">Cancel</a>
                        </div>
                    @break

                    @case(1)
                        <div class="card-footer">
                            @if (Reservation::where([['court_id', '=', $reservation->court_id], ['status_id', '=', 2]])->first())
                                <div>This court is currently being reserved by other customer.</div>
                        </div>
                    @else
                        <a href="/update-status/{{ $reservation->id }}/2" type="submit" class="btn btn-success">Check in</a>
                    </div>
                    @endif
                @break

                @case(2)
                    <div class="card-footer">
                        <a href="/update-status/{{ $reservation->id }}/4" type="submit" class="btn btn-info">Finish Reservation</a>
                        <a href="/update-status/{{ $reservation->id }}/3" type="submit" class="btn btn-danger">Cancel Reservation</a>
                    </div>
                @break
            @endswitch
        </div>
    </div>
    </div>
@endsection

@section('script')
@endsection
