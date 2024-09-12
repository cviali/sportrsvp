@extends('admin_template')

@php
    use App\User;
    use App\Court;
    use Carbon\Carbon;
    $page_title = 'Reservations';
@endphp

@section('content')
    <div class='row'>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Reservation List</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover">
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
                            @foreach ($reservations as $reservation)
                                <tr role="button" class="table-button" data-href="detail/{{ $reservation->id }}">
                                    <td>{{ $reservation->id }}</td>
                                    <td>{{ Court::where('id', $reservation->court_id)->first()->name }}</td>
                                    <td>{{ User::where('id', $reservation->user_id)->first()->name }}</td>
                                    <td>{{ $reservation->reservation_date }}</td>
                                    <td>{{ $reservation->duration }} hour{{ $reservation->duration != 1 ? 's' : '' }}</td>
                                    <td>
                                        @switch($reservation->status_id)
                                            @case(0)
                                                <span class="badge bg-info">Pending</span>
                                            @break

                                            @case(1)
                                                <span class="badge bg-primary">Approved</span>
                                            @break

                                            @case(2)
                                                <span class="badge bg-success">Checked In</span>
                                            @break

                                            @case(3)
                                                <span class="badge bg-danger">Cancelled</span>
                                            @break

                                            @case(4)
                                                <span class="badge bg-secondary">Finished</span>
                                            @break
                                        @endswitch
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class='col-12 col-md-6'>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">New Reservation</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <form role="form" method="POST" action="{{ route('add-reservation') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="selectCourt">Court</label>
                            <select class="custom-select" name="court_id" id="selectCourt">
                                @foreach ($courts as $court)
                                    <option value="{{ $court->id }}">{{ $court->types->first()->name }} {{ $court->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Reservation Date</label>
                            <div class="input-group date" id="reservationdatetime" data-target-input="nearest" data-toggle="datetimepicker">
                                <input name="date" type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <div class="input-group">
                                <input type="number" min="0" name="duration" class="form-control" id="duration"
                                    placeholder="Enter duration in hour(s)">
                                <div class="input-group-append">
                                    <span class="input-group-text">hour(s)</span>
                                </div>
                            </div>
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
    <script>
        $(function() {
            $('.table-button').click(function() {
                window.location = $(this).data('href');
                return false;
            });
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
