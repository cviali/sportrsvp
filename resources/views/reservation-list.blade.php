@extends('admin_template')

@php
use App\User;
use App\Court;
use Carbon\Carbon;
$page_title = 'Reservations'
@endphp

@section('content')
<div class='row'>
    <div class='col-12 col-md-6'>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">New Reservation</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <form role="form" method="POST" action="{{route('add-reservation')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Reservation Date</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input name="date" type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="selectCourt">Court</label>
                        <select class="custom-select" name="court_id" id="selectCourt">
                            @foreach($courts as $court)
                            <option value="{{ $court->id }}">{{ $court->types->first()->name }} {{ $court->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Reservation List</h3>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px;">#</th>
                            <th>Court Name</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Duration</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ Court::where('id', $reservation->court_id)->first()->name }}</td>
                            <td>{{ User::where('id', $reservation->user_id)->first()->name }}</td>
                            <td>{{ $reservation->reservation_date }}</td>
                            <td>{{ $reservation->duration }} hour(s)</td>
                            <td>{{ $reservation->status_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@endsection

@section('script')

@if (session()->has('msg'))
<script>
    toastr.success('{!! session()->get("msg") !!}')
</script>
@endif

<script>
    $(function() {
        $('#reservationdatetime').datetimepicker({
            icons: {
                time: 'far fa-clock'
            },
            format: 'DD-MM-yyyy HH:mm',
            disabledHours: [23, 24, 0, 1, 2, 3, 4, 5],
            stepping: 60
        })
    })
</script>
@endsection