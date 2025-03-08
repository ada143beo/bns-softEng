<div>
    <style>
        .top-navbar {
            position: fixed;
            width: 100%;
            z-index: 1030;
        }

        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 56px;
            left: 0;
            background-color: white;
            border-right: 3px solid #198754;
        }

        .sidebar .nav-link {
            font-size: 16px;
            padding: 12px;
            color: black;
            border-radius: 5px;
            transition: 0.3s ease-in-out;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #198754;
            color: white;
            font-weight: bold;
        }

        .sidebar .logout {
            font-weight: bold;
            color: red;
        }

        .sidebar .logout:hover {
            background-color: #dc3545;
            color: white;
        }

        .main-content {
            margin-left: 260px;
            margin-top: 56px;
            height: calc(100vh - 56px);
            overflow-y: auto;
            overflow-x: hidden; /* Prevents horizontal scrolling */
            background-color: white;
            padding: 20px;
        }

        .form-container {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                border-right: none;
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success top-navbar">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('a-welcome') }}">
                <img src="{{ asset('assets/image/admin_logo.png') }}" alt="Admin Logo"
                    class="rounded-circle border border-white" style="height: 30px; margin-right: 10px;">
                    Barangay Nutrition Scholar - BNS Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse show" id="sidebarMenu">
                <div class="p-3">
                    
                    <nav class="nav flex-column">
                        <a href="{{ route('submit-attendance') }}" class="active nav-link">
                            <i class="bi bi-pencil-square"></i> Submit Attendance
                        </a>
                        <a href="{{ route('attendance') }}" class="nav-link">
                            <i class="bi bi-journal-check"></i> View Attendance
                        </a>
                        <a href="{{ route('submit-activities') }}" class="nav-link">
                            <i class="bi bi-clipboard-plus"></i> Submit Activities
                        </a>
                        <a href="{{ route('activities') }}" class="nav-link">
                            <i class="bi bi-folder"></i> View Activities
                        </a>
                        <a href="{{ route('profile') }}" class="nav-link">
                            <i class="bi bi-person-circle"></i> Profile
                        </a>
                        <a href="#" class="nav-link logout">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </nav>
                </div>
            </nav>

            <main class="col-md-9 col-lg-10 main-content">
                <div id="attendanceForm" class="p-4 mb-4">
                    <h3 class="text-success"><i class="bi bi-pencil-square"></i> Submit Attendance</h3>
                    <p>Record your attendance. Ensure all details are accurate before submission.</p>
                    <div class="form-container">
                        <form>
                            <div class="mb-3">
                                <label for="meetingDate" class="form-label">Date</label>
                                <input type="text" class="form-control" id="meetingDate" value="March 1, 2025" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="meetingTitle" class="form-label">Meeting Title</label>
                                <input type="text" class="form-control" id="meetingTitle" value="Monthly Barangay Nutrition Meeting" readonly>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="attendanceCheck" required>
                                <label class="form-check-label" for="attendanceCheck">Mark as Present</label>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Submit Attendance</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
