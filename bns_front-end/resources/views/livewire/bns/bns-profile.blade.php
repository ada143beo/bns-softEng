<div>
    <style>
        /* Top Navbar */
        .top-navbar {
            position: fixed;
            width: 100%;
            z-index: 1030;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 56px;
            left: 0;
            background-color: white;
            border-right: 3px solid #198754;
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
            margin-top: 56px;
            height: calc(100vh - 56px);
            overflow-y: auto;
            background-color: white;
            padding: 20px;
            width: calc(100% - 260px);
        }

        /* Profile Picture */
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #198754;
            object-fit: cover;
        }

        /* Profile Card */
        .profile-card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
                        <a href="{{ route('attendance') }}" class="nav-link">
                            <i class="bi bi-journal-check"></i> View Attendance
                        </a>
                        <a href="{{ route('submit-activities') }}" class="nav-link">
                            <i class="bi bi-clipboard-plus"></i> Submit Activities
                        </a>
                        <a href="{{ route('activities') }}" class="nav-link">
                            <i class="bi bi-folder"></i> View Activities
                        </a>
                        <a href="{{ route('profile') }}" class="active nav-link">
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
                <div class="p-4">
                    <h3 class="text-success"><i class="bi bi-person-circle"></i> Profile</h3>
                    <p>Manage your personal details and update your information.</p>

                    <div class="profile-card mx-auto col-md-6">
                        <img src="{{ asset("assets/image/sample_profile.png") }}" alt="Profile Picture" class="profile-pic mb-3">
                        <h4 class="text-dark fw-bold">John Doe</h4>
                        <p class="text-muted">Barangay Nutrition Scholar</p>
                        <hr>

                        <div class="text-start">
                            <h5 class="text-dark fw-bold"><i class="bi bi-envelope"></i> Email</h5>
                            <p>johndoe@example.com</p>

                            <h5 class="text-dark fw-bold"><i class="bi bi-telephone"></i> Contact Number</h5>
                            <p>+63 912 345 6789</p>

                            <h5 class="text-dark fw-bold"><i class="bi bi-facebook"></i> Facebook Account</h5>
                            <p><a href="https://facebook.com/johndoe" target="_blank">facebook.com/johndoe</a></p>

                            <h5 class="text-dark fw-bold"><i class="bi bi-geo-alt"></i> Barangay & Street</h5>
                            <p>1234 Sto. Domingo Street, Barangay Sto. Domingo</p>

                        </div>

                        <button class="btn btn-success mt-3">
                            <i class="bi bi-pencil-square"></i> Edit Profile
                        </button>
                    </div>
                </div>
            </main>

        </div>
    </div>
</div>
