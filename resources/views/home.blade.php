@extends('admin_template')

@php
    use App\Reservation;
    $page_title = 'Home';
@endphp

@section('style')
@endsection

@section('content')
    <div class='row'>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Court List</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 10px;">#</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courts as $court)
                                @if (Reservation::where([['court_id', '=', $court->id], ['status_id', '=', 2]])->first())
                                    <tr role="button" class="table-button"
                                        data-href="detail/{{ Reservation::where([['court_id', '=', $court->id], ['status_id', '=', 2]])->first()['id'] }}?from=home">
                                    @else
                                    <tr>
                                @endif
                                <td>{{ $court->id }}</td>
                                <td>{{ $court->name }}</td>
                                <td>{{ $court->types->first()->name }}</td>
                                <td>
                                    @if (Reservation::where([['court_id', '=', $court->id], ['status_id', '=', 2]])->first())
                                        <span class="badge bg-success">In Use</span>
                                    @else
                                        <span class="badge bg-secondary">Free</span>
                                    @endif
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
        })
    </script>
@endsection
