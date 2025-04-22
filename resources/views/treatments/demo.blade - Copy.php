<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Dashboard - Bombay Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Add Flatpickr CSS for calendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
   
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <style>
   

        :root {
            --primary-color: #7d0a0a;
            --primary-hover: #5c0707;
        }

        body {
            background-color: #f5f7fa;
        }

        .dashboard-card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s;
            background-color: white;
            max-width: 95%;
            margin-left: auto;
            margin-right: auto;
          /*new*/
            border: none;
            overflow: hidden;
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            border-radius: 10px 10px 0 0;
            /*padding: 15px 20px;*/
            
            /* new */
            padding: 15px 20px;
            border-bottom: none;
        }
         .card-header h5 {
            font-weight: 600 ;
            margin: 0;
            font-size: 1.1rem;
        }

        .card-body {
            padding: 15px;
        }

        .appointment-item {
            border-left: 4px solid var(--primary-color);
            margin-bottom: 15px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
            
            /**/
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition:  all 0.3s ease;
        }

        .appointment-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        } 
        
        .holiday-item {
            padding: 6px 10px;
            margin-bottom: 6px;
        }

        .holiday-item i {
            font-size: 1.1rem;
        }

        .holiday-item h6 {
            margin-bottom: 2px;
            font-size: 0.9rem;
        }

        .holiday-item p {
            font-size: 0.8rem;
            margin-bottom: 0;
        }

         .appointment-date-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }
        
        .appointment-date-row h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0;
        }
        
        /* Update other styles to be more compact */
        .appointment-date-row h5 {
            font-size: 0.95rem;
            margin-bottom: 4px;
        }

        .appointment-details-row {
            background-color: #f3f3f3;
            padding: 10px 15px;
            border-radius: var(--border-radius);
            margin-bottom: 12px;
        }

        .appointment-details-row p {
            margin: 0;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
      
        .doctor-info-row h4 {
            /*font-size: 1rem;*/
            font-size:20px !important;
            font-weight: 500;
            color: var(--text-primary);
            margin: 0;
        } 
        
        /*.doctor-info-row h5 {*/
        /*    font-size: 1rem;*/
        /*    margin-bottom: 4px;*/
        /*}*/

         .patient-info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .patient-info-row h6 {
            font-size: 1rem;
            font-weight: 500;
            color: var(--text-primary);
            margin: 0;
        }
        /**/
        /*.patient-info-row h6 {*/
        /*    font-size: 0.85rem;*/
        /*    margin-bottom: 0;*/
        /*}*/

        .patient-message {
            padding: 12px 15px;
            margin-top: 12px;
            font-size: 0.85rem;
            /**/
             background-color: #f3f3f3;
            border-radius: 8px;
        }
         .patient-message p {
            margin: 0;
            font-size: 0.9rem;
            color: #6c757d;
        }

        .patient-message strong {
            color: #2c3e50;
            font-weight: 600;
        }

         

        .btn-reschedule,
        .btn-pass,
        .btn-update {
            padding: 3px 8px;
            font-size: 0.8rem;
        }

        .status-badge {
            font-size: 0.8rem;
        }

        /* Sidebar Styles */
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            background-color: var(--primary-color);
            color: white;
            width: 250px;
            z-index: 100;
            transition: all 0.3s;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
        }

        .sidebar-header {
            padding-bottom: 20px;
            border-bottom: 1px solid white;
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar-header h4 {
            font-weight: 600;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            font-size: 1.2rem;
            line-height: 1.4;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin-bottom: 15px;
            transition: all 0.3s;
        }

        .sidebar-menu a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 15px;
            border-radius: 8px;
            transition: all 0.3s;
            font-weight: 500;
            position: relative;
            overflow: hidden;
            /*- new -*/
               display: flex; /* Use flexbox to align items */
             align-items: center; /* Center vertically */
        }

        .sidebar-menu a:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }

        .sidebar-menu a i {
            margin-right: 15px;
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
           
        }

    

        .sidebar-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: white;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s;
            
        }

        .sidebar-menu a:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .sidebar-menu form {
            margin-top: 30px;
        }

        .sidebar-menu .btn-danger {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s;
            background-color: var(--primary-hover);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
        }

        .sidebar-menu .btn-danger:hover {
            background-color: #5c0707;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .sidebar-menu .btn-danger i {
            margin-right: 10px;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Appointment Section Styles */
        .appointment-date-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .appointment-details-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .doctor-info-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .patient-info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .patient-info-row h5 {
            font-size: 1rem;
            font-weight: 540;
            color: var(--text-primary);
            margin: 0;
        }

        .contact-icon {
            margin-right: 10px;
            color: var(--primary-color);
        }

        .btn-reschedule {
            /*background-color: #ffc107;*/
            color: #212529;
            border: none;
            padding: 5px 15px;
            border-radius: 5px;
            cursor: pointer;
            background-color: #ffc107;
            color: var(--text-primary);
            font-size: 0.9rem;
            font-weight: 500;
            transition:all 0.3s ease;;
        }

        .btn-reschedule:hover {
            background-color: #e0a800;
        }

        .btn-pass {
            background-color: #dc3545;
            color: white;
            border: none;
           padding: 8px 15px;
            border-radius: 5px;
          font-size: 0.9rem;
            cursor: not-allowed;
            font-weight: 500;
            /*opacity: 0.7;*/
        }

        .btn-update {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 5px;
            font-size: 0.8rem;
        }

        .btn-update:hover {
            background-color: #218838;
        }

      

        /* Calendar Modal Styles */
        .calendar-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .calendar-container {
            background-color: #f0f7ff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .calendar-modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .calendar-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 10px;
        }

        .calendar-modal-header h4 {
            color: #0d6efd;
            margin: 0;
        }

        .close-calendar {
            font-size: 1.5rem;
            cursor: pointer;
            color: #6c757d;
        }

        .close-calendar:hover {
            color: #0d6efd;
        }

        #rescheduleDate {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            background-color: white;
        }

        /* Flatpickr Calendar Customization - Blue Theme */
        .flatpickr-day.selected,
        .flatpickr-day.startRange,
        .flatpickr-day.endRange,
        .flatpickr-day.selected.inRange,
        .flatpickr-day.startRange.inRange,
        .flatpickr-day.endRange.inRange,
        .flatpickr-day.selected:focus,
        .flatpickr-day.startRange:focus,
        .flatpickr-day.endRange:focus,
        .flatpickr-day.selected:hover,
        .flatpickr-day.startRange:hover,
        .flatpickr-day.endRange:hover,
        .flatpickr-day.selected.prevMonthDay,
        .flatpickr-day.startRange.prevMonthDay,
        .flatpickr-day.endRange.prevMonthDay,
        .flatpickr-day.selected.nextMonthDay,
        .flatpickr-day.startRange.nextMonthDay,
        .flatpickr-day.endRange.nextMonthDay {
            background: #0d6efd;
            border-color: #0d6efd;
            color: white;
        }

        .flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)),
        .flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)),
        .flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)) {
            box-shadow: -10px 0 0 #0d6efd;
        }

        .flatpickr-day.inRange,
        .flatpickr-day.prevMonthDay.inRange,
        .flatpickr-day.nextMonthDay.inRange,
        .flatpickr-day.today.inRange,
        .flatpickr-day.prevMonthDay.today.inRange,
        .flatpickr-day.nextMonthDay.today.inRange,
        .flatpickr-day:hover,
        .flatpickr-day.prevMonthDay:hover,
        .flatpickr-day.nextMonthDay:hover,
        .flatpickr-day:focus,
        .flatpickr-day.prevMonthDay:focus,
        .flatpickr-day.nextMonthDay:focus {
            background: rgba(13, 110, 253, 0.1);
            border-color: rgba(13, 110, 253, 0.1);
        }

        .flatpickr-months .flatpickr-month {
            background: #0d6efd;
            color: white;
        }

        .flatpickr-current-month .flatpickr-monthDropdown-months {
            background: #0d6efd;
            color: white;
        }

        .flatpickr-weekday {
            color: #0d6efd;
            font-weight: bold;
        }

        .flatpickr-day.today {
            border-color: #0d6efd;
            font-weight: bold;
        }

        .flatpickr-day.today:hover,
        .flatpickr-day.today:focus {
            background: #0d6efd;
            border-color: #0d6efd;
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                padding: 10px;
            }

            .sidebar-header h4 {
                font-size: 0.9rem;
                line-height: 1.2;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .sidebar-menu a span {
                display: none;
            }

            .sidebar-menu a i {
                margin-right: 0;
                font-size: 1.2rem;
            }

            .sidebar-menu .btn-danger {
                padding: 10px;
                font-size: 0;
            }

            .sidebar-menu .btn-danger i {
                margin-right: 0;
                font-size: 1.2rem;
            }

            .main-content {
                margin-left: 70px;
            }

            .dashboard-card {
                max-width: 100%;
                margin: 10px;
            }

            .appointment-item {
                padding: 10px;
            }

            .appointment-date-row h4,
            .doctor-info-row h4 {
                font-size: 1.1rem;
            }

            .patient-info-row h5 {
                font-size: 1rem;
            }

            .btn-reschedule,
            .btn-pass,
            .btn-update {
                padding: 5px 10px;
                font-size: 0.75rem;
            }

            .calendar-modal-content {
                width: 95%;
                margin: 10% auto;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                width: 60px;
                padding: 8px;
            }

            .sidebar-header h4 {
                font-size: 0.8rem;
            }

            .sidebar-menu a i,
            .sidebar-menu .btn-danger i {
                font-size: 1.1rem;
            }

            .appointment-date-row,
            .appointment-details-row,
            .doctor-info-row,
            .patient-info-row {
                flex-direction: column;
                gap: 8px;
            }

            .appointment-date-row h4,
            .doctor-info-row h4 {
                font-size: 1rem;
            }

            .patient-info-row h5 {
                font-size: 0.9rem;
            }

            .btn-reschedule,
            .btn-pass,
            .btn-update {
                width: 100%;
                margin-top: 5px;
            }

            .holiday-item {
                padding: 8px;
            }

            .holiday-item h6 {
                font-size: 0.85rem;
            }

            .holiday-item p {
                font-size: 0.75rem;
            }
        }

        @media (min-width: 768px) {
            .dashboard-card {
                max-width: 90%;
            }
        }

        @media (min-width: 992px) {
            .dashboard-card {
                max-width: 85%;
            }
        }

        /* Loader Styles */
        .loader-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .loader {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }
        
        body {
       font-family: 'Roboto', sans-serif;
     }
    </style>
</head>

<body>
    <!-- Loader -->
    <div class="loader-overlay">
        <div class="loader"></div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h4>Bombay Hospital <br> Jaipur</h4>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('patient.dashboard') }}"><i class="fas fa-home"></i><span> Dashboard</span></a>
            </li>
            <li>
                <a href="#"><i class="fas fa-hospital"></i><span>Departments Appointments</span></a>
            </li>
            <li>
                <a href="{{ route('patient.health-pakage') }}"><i class="fas fa-heartbeat"></i><span>Health
                        Packages</span></a>
            </li>
            <li>
                <a href="{{ route('patient.add-family') }}"><i class="fas fa-file-medical"></i><span>Add
                        Family</span></a>
            </li>
            <li>
                <form action="{{ route('patient.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-sign-out-alt"></i>Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid py-4">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="mb-0">Patient Department Appointments</h1>
                    </div>
                    <hr>
                </div>
            </div>

            {{-- Holiday Section --}}
            @if (isset($holidays) && count($holidays) > 0)
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card dashboard-card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-calendar-times me-2"></i>Upcoming Holidays</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($holidays as $holiday)
                                        <div class="col-md-6 mb-3">
                                            <div class="holiday-item p-3 bg-light rounded">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-calendar-alt text-danger me-3"
                                                        style="font-size: 1.5rem;"></i>
                                                    <div>
                                                        <h6 class="mb-1">
                                                            {{ \Carbon\Carbon::parse($holiday['date'])->format('d M Y') }}
                                                        </h6>
                                                        <p class="mb-0 text-muted">{{ $holiday['name'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <!-- Department Appointments Section -->
                <div class="col-lg-12 col-md-12 col-sm-12 mx-auto">
                    <div class="card dashboard-card">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="fas fa-hospital me-2"></i>Department Appointments</h5>
                        </div>
                        <div class="card-body">
                            @if ($departmentAppointments->count() > 0)
                                @foreach ($departmentAppointments as $appointment)
                                    <div class="appointment-item">
                                        <!-- First Row: Appointment Date with Reschedule Button -->
                                        <div class="appointment-date-row">
                                            <h4 class="mb-0">Appointment Date:
                                                {{ \Carbon\Carbon::parse($appointment->booking_date)->format('d M Y') }}
                                            </h4>
                                            @php
                                                $appointmentDate = \Carbon\Carbon::parse($appointment->booking_date);
                                                $today = \Carbon\Carbon::now();
                                                $isPastAppointment = $appointmentDate->isPast();
                                            @endphp

                                            @if ($isPastAppointment)
                                                <button class="btn-pass" disabled>
                                                    <i class="fas fa-calendar-times me-1"></i>Pass
                                                </button>
                                            @else
                                                <button class="btn-reschedule"
                                                    onclick="openCalendar('{{ $appointment->id }}', '{{ $appointment->booking_date }}')">
                                                    <i class="fas fa-calendar-alt me-1"></i>Reschedule
                                                </button>
                                            @endif
                                        </div>

                                        <!-- Second Row: Booked Date and Time -->
                                        <div class="appointment-details-row">
                                            <p class="mb-0"><small>Booked At:
                                                    {{ $appointment->created_at->format('d M Y') }}</small> | Time:
                                                {{ $appointment->created_at->format('h:i A') }}</small></p>
                                        </div>

                                        <!-- Third Row: Department Name -->
                                        <div class="doctor-info-row">
                                            <h4 class="mb-0 me-3">Department  : {{ $appointment->department_name }}</h4>
                                        </div>

                                        <!-- Fourth Row: Patient Name with Update Button and Message -->
                                        <div class="patient-info-row">
                                            <h5 class="mb-0">Patient Name : {{ $appointment->patient_name }}</h5>
                                            <button class="btn-update">
                                                <i class="fas fa-edit me-1"></i>Update Patient Details
                                            </button>
                                        </div>

                                        <!-- Message Section -->
                                        <div class="patient-message">
                                            <p class="mb-0"><strong>Message:</strong> {{ $appointment->message }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-muted">No department appointments found.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar Modal -->
    <div id="calendarModal" class="calendar-modal">
        <div class="calendar-modal-content">
            <div class="calendar-modal-header">
                <h4>Reschedule Appointment</h4>
                <span class="close-calendar" onclick="closeCalendar()">&times;</span>
            </div>
            <div class="calendar-container">
                <input type="text" id="rescheduleDate" class="form-control" placeholder="Select new date">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" onclick="submitReschedule()">Confirm Reschedule</button>
                <button class="btn btn-secondary" onclick="closeCalendar()">Cancel</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add Flatpickr JS for calendar -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Variables to store appointment data
        let currentAppointmentId = null;
        let currentAppointmentDate = null;
        let flatpickrInstance = null;
        let holidayDates = @json(isset($holidays) ? collect($holidays)->pluck('date')->toArray() : []);

        // Debug holiday dates
        console.log('Holiday Dates:', holidayDates);

        // Initialize Flatpickr calendar
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize flatpickr on the input
            flatpickrInstance = flatpickr("#rescheduleDate", {
                dateFormat: "Y-m-d",
                minDate: "today",
                locale: {
                    firstDayOfWeek: 1
                },
                disable: [
                    function(date) {
                        const dateStr = date.toISOString().split('T')[0];
                        const isDisabled = holidayDates.some(holidayDate => {
                            const holidayDateObj = new Date(holidayDate);
                            return date.getDate() === holidayDateObj.getDate() &&
                                date.getMonth() === holidayDateObj.getMonth() &&
                                date.getFullYear() === holidayDateObj.getFullYear();
                        });
                        console.log('Checking date:', dateStr, 'Is disabled:', isDisabled);
                        return isDisabled;
                    }
                ],
                onOpen: function() {
                    this.calendarContainer.style.zIndex = 1001;
                },
                onValueUpdate: function(selectedDates, dateStr, instance) {
                    console.log('Selected date:', dateStr);
                    console.log('Holiday dates:', holidayDates);
                    const isHoliday = holidayDates.some(holidayDate => {
                        const holidayDateObj = new Date(holidayDate);
                        const selectedDateObj = new Date(dateStr);
                        return selectedDateObj.getDate() === holidayDateObj.getDate() &&
                            selectedDateObj.getMonth() === holidayDateObj.getMonth() &&
                            selectedDateObj.getFullYear() === holidayDateObj.getFullYear();
                    });

                    if (isHoliday) {
                        alert('This date is a holiday. Please select another date.');
                        instance.clear();
                    }
                }
            });
        });

        // Function to open calendar modal
        function openCalendar(appointmentId, appointmentDate) {
            currentAppointmentId = appointmentId;
            currentAppointmentDate = appointmentDate;

            // Set the current date in the calendar
            document.getElementById('rescheduleDate').value = appointmentDate;

            // Show the modal
            document.getElementById('calendarModal').style.display = 'block';

            // Open the flatpickr calendar immediately
            setTimeout(function() {
                flatpickrInstance.open();
            }, 100);
        }

        // Function to close calendar modal
        function closeCalendar() {
            document.getElementById('calendarModal').style.display = 'none';
            flatpickrInstance.close();
        }

        // Function to submit reschedule
        function submitReschedule() {
            const newDate = document.getElementById('rescheduleDate').value;

            if (!newDate) {
                alert('Please select a new date');
                return;
            }

            // Show loader
            document.querySelector('.loader-overlay').style.display = 'block';

            // Send AJAX request to update the appointment
            fetch('{{ route('reschedule.department') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        id: currentAppointmentId,
                        booking_date: newDate
                    })
                })
                .then(response => response.json())
                .then(data => {
                    // Hide loader
                    document.querySelector('.loader-overlay').style.display = 'none';

                    if (data.success) {
                        alert(data.message);
                        // Reload the page to show updated appointment
                        window.location.reload();
                    } else {
                        alert('Failed to reschedule appointment');
                    }
                })
                .catch(error => {
                    // Hide loader
                    document.querySelector('.loader-overlay').style.display = 'none';
                    console.error('Error:', error);
                    alert('An error occurred while rescheduling the appointment');
                });

            // Close the modal
            closeCalendar();
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const modal = document.getElementById('calendarModal');
            if (event.target == modal) {
                closeCalendar();
            }
        }
    </script>
</body>

</html>
