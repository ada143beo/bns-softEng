<div>
    <style>
        /* Make top navbar fixed */
        .top-navbar {
            position: fixed;
            width: 100%;
            z-index: 1030;
        }

        /* Sidebar (Fixed and Wide) */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 56px;
            /* Prevent overlap with navbar */
            left: 0;
            background-color: white;
            border-right: 3px solid #198754;
            /* Green separator */
            overflow-y: auto;
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
            /* Dark Green */
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

        /* Main Content - Ensuring No Side Scroll */
        .main-content {
            margin-left: 260px;
            margin-top: 56px;
            /* Adjust for fixed navbar */
            height: calc(100vh - 56px);
            overflow-y: auto;
            overflow-x: hidden;
            /* Prevents horizontal scrolling */
            background-color: white;
            padding: 20px;
            width: calc(100% - 260px);
            /* Ensures content does not exceed the screen width */
        }

        /* Responsive Sidebar */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                border-right: none;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>

    <!-- TOP NAVBAR -->
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

            <!-- SIDEBAR -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse show" id="sidebarMenu">
                <div class="p-3">
                    
                    <nav class="nav flex-column">
                        <a href="{{ route('submit-attendance') }}" class="nav-link">
                            <i class="bi bi-pencil-square"></i> Submit Attendance
                        </a>
                        <a href="{{ route('attendance') }}" class="active nav-link">
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
                        <a href="{{ route('logout') }}" class="nav-link logout">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </nav>
                </div>
            </nav>

            <!-- MAIN CONTENT (Scrollable) -->
            <main class="col-md-9 col-lg-10 main-content">
                <div class="p-4 mb-4">
                    <h3 class="text-success"><i class="bi bi-journal-check"></i> Past Attendance</h3>
                    <p>Check your past attendance records along with meeting details and status.</p>

                    <div class="mb-3 p-3 border rounded bg-light">
                        <h5 class="text-dark fw-bold">Barangay Nutrition Meeting - February 20, 2025</h5>
                        <p>Status: <span class="text-success fw-bold">Present</span> <i class="bi bi-check-circle text-success"></i></p>
                    </div>

                    <div class="mb-3 p-3 border rounded bg-light">
                        <h5 class="text-dark fw-bold">Community Health Seminar - February 19, 2025</h5>
                        <p>Status: <span class="text-danger fw-bold">Absent</span> <i class="bi bi-x-circle text-danger"></i></p>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
