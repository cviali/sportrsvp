@extends('admin_template')

@php
$page_title = 'Home'
@endphp

@section('content')
<div class='row'>
    <div class='col-md-6'>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Collapsible Card Example</h3>
                <div class="card-tools">
                    <!-- Collapse Button -->
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                The body of the card
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection