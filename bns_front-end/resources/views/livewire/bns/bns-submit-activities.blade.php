<div>
    <style>
        /* Prevent horizontal scrolling */
        html,
        body {
            max-width: 100vw;
            overflow-x: hidden;
        }

        .container-fluid {
            overflow-x: hidden;
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
            top: 56px;
            /* Prevent overlap with top navbar */
            left: 0;
            background-color: white;
            border-right: 3px solid #198754;
            /* Green separator */
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

        /* Main Content (Scrollable) */
        .main-content {
            margin-left: 260px;
            margin-top: 56px;
            /* Adjust for fixed navbar */
            height: calc(100vh - 56px);
            overflow-y: auto;
            background-color: white;
            padding: 20px;
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
                        <a href="{{ route('submit-activities') }}" class="active nav-link">
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
            <!-- MAIN CONTENT (Scrollable) -->
            <main class="col-md-9 col-lg-10 main-content">
                <div class="p-4 mb-4">
                    <h3 class="text-success"><i class="bi bi-clipboard-plus"></i> Submit Activities</h3>
                    <p>Log your recent activities and accomplishments. Provide relevant details for accurate
                        record-keeping.</p>

                    <div class="mb-3 p-3 border rounded bg-light">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">What (Activity Name)</label>
                                <input type="text" class="form-control" placeholder="Enter activity" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Where (Location)</label>
                                <input type="text" class="form-control" placeholder="Enter location" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">When (Date & Time)</label>
                                <input type="datetime-local" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description (Optional)</label>
                                <textarea class="form-control" rows="3" placeholder="Enter additional details (optional)"></textarea>
                            </div>
                            <button class="btn btn-success w-100">Submit Activity</button>
                        </form>
                    </div>
                </div>
            </main>



        </div>
    </div>
</div>
