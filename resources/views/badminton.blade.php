@extends('frontpage')

@section('style')
    <style>
        .header-image {
            height: 500px;
            object-fit: cover;
        }

        .content-overlap {
            margin-top: -100px;
        }

        .calendar {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            gap: 5px;
        }

        .header {
            text-align: center;
            font-weight: bold;
            padding: 10px;
        }

        .time-slot {
            text-align: center;
            padding: 10px;
            color: white;
            font-size: 14px;
        }

        .available {
            background-color: #4CAF50;
        }

        .unavailable {
            background-color: #B0B0B0;
        }

        .legend {
            margin-top: 20px;
            gap: 10px;
            display: flex;
            justify-content: end;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 5px;
        }

        .green {
            background-color: #4CAF50;
        }

        .gray {
            background-color: #B0B0B0;
        }

        .court-select {
            display: flex;
            align-items: center;
            justify-content: end;
            gap: 10px;
        }
    </style>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid p-0">
                <img class="header-image w-100" src="{{ asset('badminton.jpeg') }}" />
            </div>
        </div>
        <div class="content content-overlap">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0">Badminton Court Schedule</h5>
                            </div>
                            <div class="card-body calendar-wrapper">
                                <div class="court-select">
                                    <div>Select Court:</div>
                                    <select id="courtSelect" class="form-control w-auto">
                                        <option value="court1">Court 1</option>
                                        <option value="court2">Court 2</option>
                                        <option value="court3">Court 3</option>
                                    </select>
                                </div>
                                <div class="calendar w-100" id="calendar"></div>
                                <div class="legend">
                                    <div class="legend-item">
                                        <div class="legend-color green"></div>
                                        <span>Available</span>
                                    </div>
                                    <div class="legend-item">
                                        <div class="legend-color gray"></div>
                                        <span>Unavailable</span>
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

@section('script')
    <script>
        const calendar = document.getElementById('calendar');
        const courtSelect = document.getElementById('courtSelect');

        // Get today's date
        const today = new Date();

        // Format date as "Day DD/MM"
        function formatDate(date) {
            const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            const day = dayNames[date.getDay()];
            const dayOfMonth = date.getDate().toString().padStart(2, '0');
            const month = (date.getMonth() + 1).toString().padStart(2, '0');
            return `${day} ${dayOfMonth}/${month}`;
        }

        // Generate random availability
        function getRandomAvailability(court) {
            // Simulate court-specific availability
            const courtAvailability = {
                court1: Math.random() < 0.5 ? 'available' : 'unavailable',
                court2: Math.random() < 0.5 ? 'available' : 'unavailable',
                court3: Math.random() < 0.5 ? 'available' : 'unavailable',
            };
            return courtAvailability[court];
        }

        // Add headers
        const headers = ['Time'];
        for (let i = 0; i < 7; i++) {
            const nextDay = new Date(today);
            nextDay.setDate(today.getDate() + i);
            headers.push(formatDate(nextDay));
        }

        // Function to reinitialize the calendar with selected court availability
        function initializeCalendar(court) {
            // Clear the previous calendar content
            calendar.innerHTML = '';

            // Add headers
            headers.forEach(header => {
                const headerDiv = document.createElement('div');
                headerDiv.className = 'header';
                headerDiv.textContent = header;
                calendar.appendChild(headerDiv);
            });

            // Add time slots (6:00 to 22:00)
            for (let hour = 6; hour <= 22; hour++) {
                const time = hour.toString().padStart(2, '0') + ':00';

                // Add time column
                const timeHeader = document.createElement('div');
                timeHeader.className = 'header';
                timeHeader.textContent = time;
                calendar.appendChild(timeHeader);

                // Add slots for each day
                for (let day = 1; day <= 7; day++) {
                    const timeSlot = document.createElement('div');
                    const availability = getRandomAvailability(court);
                    timeSlot.className = `time-slot ${availability}`;
                    timeSlot.textContent = time;
                    calendar.appendChild(timeSlot);
                }
            }
        }

        // Initialize calendar with default court (Court 1)
        initializeCalendar('court1');

        // Reinitialize the calendar when a new court is selected
        courtSelect.addEventListener('change', (event) => {
            const selectedCourt = event.target.value;
            initializeCalendar(selectedCourt);
        });
    </script>
@endsection
