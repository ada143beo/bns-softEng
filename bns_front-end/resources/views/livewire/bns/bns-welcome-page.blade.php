<div>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <!-- MAIN CONTENT -->
        <main class="text-center p-4 rounded shadow-lg bg-success w-100">
            <div class="py-4">
                <h1 class="fw-bold text-white"> Welcome, Barangay Nutrition Scholars! </h1>
                <p class="fs-5 text-white">
                    Your dedication keeps the community healthy! Use the shortcut buttons below to <strong>quickly submit attendance, log activities, and track your records</strong>—all in just a few clicks!
                </p>
            </div>

            <!-- Shortcut Buttons -->
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <a href="{{ route('submit-attendance') }}" class="text-decoration-none">
                        <div class="card text-center p-4 shortcut-card border-success">
                            <i class="bi bi-pencil-square display-4 text-success"></i>
                            <h5 class="fw-bold mt-3">Submit Attendance</h5>
                            <p class="text-muted small">Mark your attendance in just a few taps.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('attendance') }}" class="text-decoration-none">
                        <div class="card text-center p-4 shortcut-card border-success">
                            <i class="bi bi-journal-check display-4 text-success"></i>
                            <h5 class="fw-bold mt-3">View Attendance</h5>
                            <p class="text-muted small">Check your attendance records anytime.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('submit-activities') }}" class="text-decoration-none">
                        <div class="card text-center p-4 shortcut-card border-success">
                            <i class="bi bi-clipboard-plus display-4 text-success"></i>
                            <h5 class="fw-bold mt-3">Submit Activities</h5>
                            <p class="text-muted small">Log your recent barangay activities easily.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('activities') }}" class="text-decoration-none">
                        <div class="card text-center p-4 shortcut-card border-success">
                            <i class="bi bi-folder display-4 text-success"></i>
                            <h5 class="fw-bold mt-3">View Activities</h5>
                            <p class="text-muted small">Review past and ongoing activities.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('profile') }}" class="text-decoration-none">
                        <div class="card text-center p-4 shortcut-card border-success">
                            <i class="bi bi-person-circle display-4 text-success"></i>
                            <h5 class="fw-bold mt-3">My Profile</h5>
                            <p class="text-muted small">Update and manage your personal details.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card text-center p-4 shortcut-card border-danger logout-card">
                            <i class="bi bi-box-arrow-right display-4 text-danger"></i>
                            <h5 class="fw-bold mt-3 text-danger">Logout</h5>
                            <p class="text-muted small">Sign out of your account safely.</p>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>

    <style>
        /* Main container adjustments */
        .container-fluid {

            border-radius: 0 0 50px 50px;
        }

        /* Shortcut Cards */
        .shortcut-card {
            transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
            cursor: pointer;
        }

        .shortcut-card:hover {
            transform: scale(1.05);
            background-color: #7df7a1;
            color: rgb(0, 0, 0) !important;
        }

        .shortcut-card:hover i {
            color: white !important;
        }

        /* Logout Card */
        .logout-card:hover {
            background-color: #dc3545 !important;
        }

        .logout-card:hover h5,
        .logout-card:hover i {
            color: white !important;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-content {
                width: 100%;
            }
        }
    </style>

</div>
