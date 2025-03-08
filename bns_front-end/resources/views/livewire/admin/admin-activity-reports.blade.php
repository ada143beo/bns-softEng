<div>
    <style>
        /* Prevent Horizontal Scrolling */
        html, body {
            overflow-x: hidden;
            max-width: 100vw;
        }

        /* Top Navbar */
        .top-navbar {
            position: fixed;
            width: 100%;
            z-index: 1030;
            background: white;
            border-top: 3px solid #145A32;
            border-bottom: 3px solid #145A32;
            padding: 10px 20px;
        }

        .top-navbar .navbar-brand {
            font-size: 20px;
            font-weight: bold;
            color: #145A32 !important;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 56px;
            background: linear-gradient(180deg, #145A32, #0E3B21);
            color: white;
            left: 0;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Sidebar Links */
        .sidebar .nav-link {
            font-size: 16px;
            padding: 12px;
            color: white;
            border-radius: 5px;
            transition: 0.3s;
            white-space: nowrap;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: white;
            color: #145A32 !important;
            font-weight: bold;
        }

        .sidebar .logout {
            font-weight: bold;
            color: red;
        }

        .sidebar .logout:hover {
            background: red;
            color: white !important;
        }

        /* Main Content */
        .main-content {
            margin-left: 260px; /* Matches sidebar width */
            margin-top: 70px; /* Adjusted for navbar */
            padding: 20px;
            min-height: calc(100vh - 70px);
            background-color: white;
        }

        /* Fix for smaller screens */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
                padding: 15px;
            }
        }
    </style>

    <!-- TOP NAVBAR -->
    <nav class="navbar navbar-expand-lg top-navbar">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('a-welcome') }}">
                <img src="{{ asset('assets/image/logo.png') }}" alt="Admin Logo"
                    class="rounded-circle border border-white" style="height: 30px; margin-right: 10px;">
                    Barangay Nutrition Scholar - Admin Panel</a>
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
                    <a href="{{ route('a-create-attendance') }}" class="nav-link">
                        <i class="bi bi-pencil-square"></i> Create Attendance
                    </a>
                    <a href="{{ route('a-activity-reports') }}" class="nav-link active">
                        <i class="bi bi-folder-check"></i> Activity Reports
                    </a>
                    <a href="{{ route('a-attendance-reports') }}" class="nav-link">
                        <i class="bi bi-journal-text"></i> Attendance Reports
                    </a>
                    <a href="{{ route('a-manage-profiles') }}" class="nav-link">
                        <i class="bi bi-people"></i> Manage Accounts
                    </a>
                    <a href="#" class="nav-link logout">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </nav>
                </div>
            </nav>

            <!-- MAIN CONTENT -->
            <main class="col-md-9 col-lg-10 main-content">
                <div class="p-4 mb-4">
                    <h3 class="text-success"><i class="bi bi-folder-check"></i> Activity Reports</h3>
                    <p>View activities sorted by BNS.</p>

                    <!-- Search & Filter -->
                    <div class="d-flex justify-content-between flex-wrap mb-3">
                        <input type="text" class="form-control w-50" id="searchBNS" placeholder="Search BNS...">
                        <input type="date" class="form-control w-25" id="filterDate">
                    </div>

                    <!-- Reports by BNS -->
                    <div class="accordion" id="activityReports">
                        <!-- Example BNS Section -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="bns1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bns1Activities">
                                    <strong>Juan Dela Cruz</strong>
                                </button>
                            </h2>
                            <div id="bns1Activities" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Activity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2024-02-28</td>
                                                <td>Nutrition Seminar</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>2024-02-29</td>
                                                <td>Weighing Program</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat for other BNS dynamically -->
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
