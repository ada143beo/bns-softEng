<div>
    <style>
        /* Prevent Horizontal Scrolling */
        html, body {
            overflow-x: hidden;
            width: 100vw;
        }

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
            top: 56px; /* To prevent overlap with top navbar */
            left: 0;
            background-color: white;
            border-right: 3px solid #198754; /* Green separator */
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
            background-color: #198754; /* Dark Green */
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

        /* Main Content */
        .main-content {
            margin-left: 260px;
            margin-top: 56px; /* Adjust for fixed navbar */
            height: calc(100vh - 56px);
            overflow-y: auto;
            overflow-x: hidden;
            background-color: white;
            padding: 20px;
            width: calc(100vw - 260px);
        }

        /* Ensure Full Width Usage */
        .container-fluid {
            width: 100vw;
            max-width: 100vw;
        }

        /* Prevent table from causing overflow */
        .table {
            table-layout: fixed;
            word-wrap: break-word;
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
                width: 100vw;
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
                        <a href="{{ route('attendance') }}" class="nav-link">
                            <i class="bi bi-journal-check"></i> View Attendance
                        </a>
                        <a href="{{ route('submit-activities') }}" class="nav-link">
                            <i class="bi bi-clipboard-plus"></i> Submit Activities
                        </a>
                        <a href="{{ route('activities') }}" class="active nav-link">
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

            <!-- MAIN CONTENT -->
            <main class="col-md-9 col-lg-10 main-content">
                <div id="pastActivities" class="p-4 mb-4">
                    <h3 class="text-success"><i class="bi bi-folder"></i> Past Activities</h3>
                    <p>Review your submitted activities and track your progress over time.</p>
                    <div class="activity-group">
                        <h4 class="text-success">February 2025</h4>
                        <div class="activity-card border rounded p-3 mb-3 shadow-sm">
                            <h5 class="fw-bold">Nutrition Seminar</h5>
                            <p class="text-muted mb-1"><i class="bi bi-calendar"></i> February 18, 2025</p>
                            <p><i class="bi bi-geo-alt"></i> Barangay Hall</p>
                            <p>Seminar on proper nutrition and healthy eating habits.</p>
                        </div>
                        <div class="activity-card border rounded p-3 mb-3 shadow-sm">
                            <h5 class="fw-bold">Community Feeding Program</h5>
                            <p class="text-muted mb-1"><i class="bi bi-calendar"></i> February 15, 2025</p>
                            <p><i class="bi bi-geo-alt"></i> Covered Court</p>
                            <p>Provided free meals to children in the community.</p>
                        </div>
                    </div>

                    <div class="activity-group">
                        <h4 class="text-success">January 2025</h4>
                        <div class="activity-card border rounded p-3 mb-3 shadow-sm">
                            <h5 class="fw-bold">Health Awareness Drive</h5>
                            <p class="text-muted mb-1"><i class="bi bi-calendar"></i> January 20, 2025</p>
                            <p><i class="bi bi-geo-alt"></i> Barangay Gym</p>
                            <p>Conducted a campaign about health and sanitation.</p>
                        </div>
                    </div>
                </div>
            </main>

            <style>
                .activity-group {
                    margin-bottom: 20px;
                }
                .activity-card {
                    background-color: #f8f9fa;
                }
            </style>
        </div>
    </div>
</div>
