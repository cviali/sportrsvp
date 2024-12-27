@extends('frontpage')

@section('style')
    <style>
        .court-image {
            height: 250px;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row py-5">
                <div class="col-lg-12 text-center">
                    <h1>Welcome to Velocity Arena</h1>
                    <p class="lead">Enjoy a professional grade courts for badminton, tennis, and padel.</p>
                </div>
            </div>
        </div>
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Featured Courts</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0">Badminton</h5>
                            </div>
                            <img class="w-100 court-image" src="{{ asset('badminton.jpg') }}" />
                            <div class="card-body">
                                <p class="card-text">Reserve a premium badminton court with professional flooring.</p>
                                <a href="{{ route('badminton') }}" class="btn btn-primary">Schedule</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0">Tennis</h5>
                            </div>
                            <img class="w-100 court-image" src="{{ asset('tennis.jpg') }}" />
                            <div class="card-body">
                                <p class="card-text">Play on high-quality tennis courts perfect for singles or doubles.</p>
                                <a href="{{ route('tennis') }}" class="btn btn-primary">Schedule</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0">Padel</h5>
                            </div>
                            <img class="w-100 court-image" src="{{ asset('padel.jpg') }}" />
                            <div class="card-body">
                                <p class="card-text">Enjoy a fun padel game on modern, high-quality courts.</p>
                                <a href="{{ route('padel') }}" class="btn btn-primary">Schedule</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">How to Reserve a Court</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="timeline">
                            <div>
                                <i class="fas fa-calendar-check bg-info"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header"><b>Check Court Availability</b></h3>
                                    <div class="timeline-body">
                                        Visit the "Courts" page to view available slots for badminton, tennis, and padel courts.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-user bg-info"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header"><b>Login into Your Account</b></h3>
                                    <div class="timeline-body">
                                        Sign in with your existing account or create a new one to make a reservation.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-bookmark bg-info"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header"><b>Create a Reservation</b></h3>
                                    <div class="timeline-body">
                                        After logging in, select a court and time slot to create your reservation.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-credit-card bg-info"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header"><b>Arrive at Location and Pay</b></h3>
                                    <div class="timeline-body">
                                        Arrive at the court location, complete your payment, and get ready for your game.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-check bg-success"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header"><b>Enjoy the Professional Court Experience</b></h3>
                                    <div class="timeline-body">
                                        Enjoy your game on our professional courts and have a great time!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
