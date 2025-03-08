<div>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-success">
        <!-- MAIN CONTENT -->
        <main class="text-center p-4 rounded shadow-lg bg-white w-100" style="max-width: 900px;">
            <h1 class="fw-bold text-success"> Welcome, Admin! </h1>
            <p class="text-muted fs-5">
                Manage attendance, track activities, and oversee accounts efficiently using the tools below.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dashboard-card">
                        <i class="bi bi-pencil-square"></i>
                        <h5>Create Attendance</h5>
                        <p>Log attendance records.</p>
                        <a href="{{ route('a-create-attendance') }}" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dashboard-card">
                        <i class="bi bi-folder-check"></i>
                        <h5>Activity Reports</h5>
                        <p>View and analyze activities.</p>
                        <a href="{{ route('a-activity-reports') }}" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dashboard-card">
                        <i class="bi bi-journal-text"></i>
                        <h5>Attendance Reports</h5>
                        <p>Track attendance data.</p>
                        <a href="{{ route('a-attendance-reports') }}" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dashboard-card">
                        <i class="bi bi-people"></i>
                        <h5>Manage Accounts</h5>
                        <p>Edit and manage user roles.</p>
                        <a href="{{ route('a-manage-profiles') }}" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dashboard-card logout-card">
                        <i class="bi bi-box-arrow-right text-danger"></i>
                        <h5 class="text-danger">Logout</h5>
                        <p>Securely exit your session.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <style>
        /* Center main content */
        .container-fluid {
            border-radius: 0 0 50px 50px;
        }

        /* Dashboard Cards */
        .dashboard-card {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: 0.3s;
            cursor: pointer;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background-color: #198754;
            color: white !important;
        }

        .dashboard-card:hover i {
            color: white !important;
        }

        .dashboard-card i {
            font-size: 40px;
            color: #1E8449;
            background: rgba(30, 132, 73, 0.2);
            padding: 15px;
            border-radius: 50%;
        }

        .dashboard-card h5 {
            margin-top: 10px;
            font-weight: bold;
            color: #145A32;
        }

        .dashboard-card p {
            font-size: 14px;
            color: #555;
        }

        /* Logout Card */
        .logout-card:hover {
            background-color: #dc3545 !important;
        }

        .logout-card:hover h5, .logout-card:hover i {
            color: white !important;
        }
    </style>


</div>
