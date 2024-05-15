@extends('admin_template')

@php
$page_title = 'Reservations'
@endphp

@section('content')
<div class='row'>
    <div class='col-md-6'>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">New Reservation</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Reservation Date:</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(function() {
        $('#reservationdatetime').datetimepicker({
            icons: {
                time: 'far fa-clock'
            },
            format: 'ddd/MM/YYYY HH:mm',
            disabledHours: [23, 24, 0, 1, 2, 3, 4, 5]
        })
    })
</script>
@endsection