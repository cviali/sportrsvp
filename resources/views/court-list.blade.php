@extends('admin_template')

@php
use App\Reservation;
$page_title = 'Courts'
@endphp

@section('style')
@endsection

@section('content')
<div class='row'>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">New Court</h3>
            </div>
            <form role="form" method="POST" action="{{route('add-court')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputCourtName">Court Name</label>
                        <input required class="form-control" id="inputCourtName" name="name" placeholder="Enter court name">
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="form-group">
                        <label for="inputCourtType">Court Type</label>
                        <select class="custom-select" id="inputCourtType" name="type">
                            @foreach($court_types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
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
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Court List</h3>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px;">#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courts as $court)
                        <tr>
                            <td>{{ $court->id }}</td>
                            <td>{{ $court->name }}</td>
                            <td>{{ $court->types->first()->name }}</td>
                            <td>
                                @if(Reservation::where([['court_id', '=', $court->id], ['status_id', '=', 2]])->first())
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
            <!-- /.card-body -->
        </div>
    </div>
</div>
@endsection