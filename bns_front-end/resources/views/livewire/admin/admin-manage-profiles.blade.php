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
            border-top: 3px solid #145A32; /* Adjusted green */
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
            background: linear-gradient(180deg, #145A32, #0E3B21); /* Darker shade */
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
            gap: 10px;
            white-space: nowrap;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: white;
            color: #145A32 !important;
            font-weight: bold;
        }

        /* Logout Styling */
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
            margin-left: 260px;
            margin-top: 56px;
            /* Adjust for fixed navbar */
            height: calc(100vh - 56px);
            overflow-y: auto;
            background-color: white;
            padding: 20px;
        }

        /* Shortcut Boxes */
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

        /* Logout Box */
        .dashboard-card.logout-card p {
            color: red !important;
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
                    <a href="{{ route('a-activity-reports') }}" class="nav-link">
                        <i class="bi bi-folder-check"></i> Activity Reports
                    </a>
                    <a href="{{ route('a-attendance-reports') }}" class="nav-link">
                        <i class="bi bi-journal-text"></i> Attendance Reports
                    </a>
                    <a href="{{ route('a-manage-profiles') }}" class="nav-link active">
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
                <div class="container mt-4">
                    <h2 class="mb-3">Manage Profiles</h2>

                    <!-- Add Profile Button -->
                    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addProfileModal">
                        <i class="bi bi-plus-lg"></i> Add Profile
                    </button>

                    <!-- Profiles Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-success">
                                <tr>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>johndoe</td>
                                    <td>Barangay Nutrition Scholar</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteProfileModal">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Add Profile Modal -->
                <div class="modal fade" id="addProfileModal" tabindex="-1" aria-labelledby="addProfileModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-success text-white">
                                <h5 class="modal-title" id="addProfileModalLabel">Add New Profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter full name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" placeholder="Enter username">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Role</label>
                                        <select class="form-select">
                                            <option selected>Barangay Nutrition Scholar</option>
                                            <option>Admin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter password">
                                    </div>
                                    <button type="submit" class="btn btn-success w-100">Add Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Profile Modal -->
                <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-warning text-dark">
                                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" value="John Doe">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" value="johndoe@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Contact Number</label>
                                        <input type="text" class="form-control" value="+63 912 345 6789">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Facebook Account</label>
                                        <input type="text" class="form-control" value="facebook.com/johndoe">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Barangay & Street</label>
                                        <input type="text" class="form-control" value="1234 Sto. Domingo Street, Barangay Sto. Domingo">
                                    </div>
                                    <button type="submit" class="btn btn-warning w-100">Update Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delete Profile Modal -->
                <div class="modal fade" id="deleteProfileModal" tabindex="-1" aria-labelledby="deleteProfileModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title" id="deleteProfileModalLabel">Delete Profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete <strong>John Doe</strong>? This action cannot be undone.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
</div>

