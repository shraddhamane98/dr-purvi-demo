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
            --secondary-color: #f8f9fa;
            --text-primary: #2c3e50;
            --text-secondary: #6c757d;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            color: var(--text-primary);
        }

        .dashboard-card {
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-bottom: 20px;
            transition: var(--transition);
            background-color: white;
            border: none;
            overflow: hidden;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            border-bottom: none;
        }

        .card-header h5 {
            font-weight: 600;
            margin: 0;
            font-size: 1.1rem;
        }

        .card-body {
            padding: 20px;
        }

        .appointment-item {
            background: white;
            border-radius: var(--border-radius);
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid var(--primary-color);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .appointment-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

        .appointment-details-row {
            background-color: var(--secondary-color);
            padding: 10px 15px;
            border-radius: var(--border-radius);
            margin-bottom: 12px;
        }

        .appointment-details-row p {
            margin: 0;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .doctor-info-row {
            margin-bottom: 12px;
        }

        .doctor-info-row h4 {
            font-size: 1rem;
            font-weight: 500;
            color: var(--text-primary);
            margin: 0;
        }

        .patient-info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .patient-info-row h5 {
            font-size: 1rem;
            font-weight: 500;
            color: var(--text-primary);
            margin: 0;
        }

        .btn-reschedule {
            background-color: var(--warning-color);
            color: var(--text-primary);
            border: none;
            padding: 8px 15px;
            border-radius: var(--border-radius);
            font-size: 0.9rem;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-reschedule:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
        }

        .btn-pass {
            background-color: var(--danger-color);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: var(--border-radius);
            font-size: 0.9rem;
            font-weight: 500;
            opacity: 0.7;
            cursor: not-allowed;
        }

        .btn-update {
            background-color: var(--success-color);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: var(--border-radius);
            font-size: 0.9rem;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-update:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .patient-message {
            background-color: var(--secondary-color);
            padding: 12px 15px;
            border-radius: var(--border-radius);
            margin-top: 12px;
        }

        .patient-message p {
            margin: 0;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .patient-message strong {
            color: var(--text-primary);
            font-weight: 600;
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

        .calendar-modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 25px;
            border-radius: var(--border-radius);
            width: 90%;
            max-width: 500px;
            box-shadow: var(--box-shadow);
        }

        .calendar-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--secondary-color);
        }

        .calendar-modal-header h4 {
            color: var(--primary-color);
            margin: 0;
            font-weight: 600;
        }

        .close-calendar {
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-secondary);
            transition: var(--transition);
        }

        .close-calendar:hover {
            color: var(--primary-color);
        }

        #rescheduleDate {
            border: 1px solid #ced4da;
            border-radius: var(--border-radius);
            padding: 12px;
            width: 100%;
            font-family: 'Poppins', sans-serif;
        }

        @media (max-width: 768px) {
            .appointment-date-row,
            .appointment-details-row,
            .doctor-info-row,
            .patient-info-row {
                flex-direction: column;
                gap: 10px;
            }

            .appointment-date-row h4 {
                font-size: 1rem;
            }

            .btn-reschedule,
            .btn-pass,
            .btn-update {
                width: 100%;
                margin-top: 5px;
            }

            .calendar-modal-content {
                width: 95%;
                margin: 10% auto;
                padding: 20px;
            }
        }

        @media (max-width: 576px) {
            .card-header h5 {
                font-size: 1rem;
            }

            .appointment-item {
                padding: 12px;
            }

            .appointment-details-row,
            .patient-message {
                padding: 10px;
            }
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
                <a href=""> <i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-hospital"></i><span>Departments Appointments</span></a>
            </li>
            <li>
                <a href=""><i class="fas fa-heartbeat"></i><span>Health
                        Packages</span></a>
            </li>
            <li>
                <a href=""><i class="fas fa-file-medical"></i><span>Add
                        Family</span></a>
            </li>
            <li>
                <form action="" method="POST">
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
                <div class="col-md-8 mx-auto">
                    <div class="card dashboard-card">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="fas fa-hospital me-2"></i>Department Appointments</h5>
                        </div>
                        <div class="card-body">
                           
                                    <div class="appointment-item">
                                        <!-- First Row: Appointment Date with Reschedule Button -->
                                        <div class="appointment-date-row">
                                            <h4 class="mb-0">Appointment Date:
                                               
                                            </h4>
                                           
                                                <button class="btn-pass" disabled>
                                                    <i class="fas fa-calendar-times me-1"></i>Pass
                                                </button>
                                                <button class="btn-reschedule" >
                                                    <i class="fas fa-calendar-alt me-1"></i>Reschedule
                                                </button>
                                        </div>

                                        <!-- Second Row: Booked Date and Time -->
                                        <div class="appointment-details-row">
                                            <p class="mb-0"><small>Booked At:
                                              tjngfdj   </small> | Time:
                                            35 465  </small></p>
                                        </div>

                                        <!-- Third Row: Department Name -->
                                        <div class="doctor-info-row">
                                            <h4 class="mb-0 me-3"></h4>
                                        </div>

                                        <!-- Fourth Row: Patient Name with Update Button and Message -->
                                        <div class="patient-info-row">
                                            <h5 class="mb-0">Patient: fgbtyj</h5>
                                            <button class="btn-update">
                                                <i class="fas fa-edit me-1"></i>Update Patient Details
                                            </button>
                                        </div>

                                        <!-- Message Section -->
                                        <div class="patient-message">
                                            <p class="mb-0"><strong>Message:</strong> sdhuykjy</p>
                                        </div>
                                    </div>
                               
                           
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
   
</body>

</html>
