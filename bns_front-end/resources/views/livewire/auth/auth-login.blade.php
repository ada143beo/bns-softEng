<div class="d-flex align-items-center justify-content-center vh-100 bg-image">
    <div class="login-box p-5 rounded shadow">
      <h2 class="text-center text-success fw-bold mb-4">Login to Your Account</h2>
      <form>
        <div class="mb-4">
          <label class="form-label text-dark fw-semibold">Username</label>
          <input type="text" class="form-control" placeholder="Enter your username">
        </div>
        <div class="mb-4">
          <label class="form-label text-dark fw-semibold">Password</label>
          <input type="password" class="form-control" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-success w-100 py-2">Login</button>
      </form>
    </div>


  <style>
    /* Background Image */
    .bg-image {
      background: url({{ asset("assets/image/login_background.png") }}) no-repeat center center/cover;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Login Box Styling */
    .login-box {
      width: 450px;
      max-width: 90%; /* Responsive for smaller screens */
      background: rgba(255, 255, 255, 0.9); /* Slight transparency for smooth effect */
      border: 3px solid #4caf50; /* Green border */
      border-radius: 12px;
      padding: 40px;
    }

    /* Form Input Fields */
    .form-control {
      background: rgba(255, 255, 255, 1);
      border: 1px solid #4caf50; /* Green border */
      color: black;
      padding: 12px;
      font-size: 16px;
    }

    .form-control::placeholder {
      color: gray;
      font-style: italic;
    }

    .form-control:focus {
      background: white;
      border-color: #388e3c; /* Darker green */
      box-shadow: none;
    }

    /* Button Styling */
    .btn-success {
      background-color: #4caf50;
      border: none;
      padding: 12px;
      font-size: 18px;
      font-weight: bold;
      border-radius: 8px;
    }

    .btn-success:hover {
      background-color: #388e3c; /* Darker green */
    }
  </style>
</div>
