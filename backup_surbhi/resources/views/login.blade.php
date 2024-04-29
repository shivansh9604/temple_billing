<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  </link>
  <style>
    body {
      background-image: url('assets/header-2.jpg');
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 0;
    }

    .login-container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    h1 {
      color: orange;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .form-group label {
      display: inline-block;
      width: 120px;
      margin-right: 10px;
    }

    .form-control {
      width: 450px;
      height: 40px;
      border-radius: 5px;
      border: 1px solid #ccc;
      padding: 5px 10px;
      box-sizing: border-box;
    }

    .btn-primary {
      width: 100%;
      height: 40px;
      border-radius: 5px;
      background-color: #007bff;
      border: none;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
  <title>Login</title>
</head>
<body>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="login-container">
    <h1>NAMASKAR</h1>
    <form id="loginForm">
      <div class="form-group">
        <label for="username">Username <span class="text-danger">*</span>:</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="username">Password <span class="text-danger">*</span>:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="button" id="login_btn" class="btn btn-primary">Login</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    var HOST_URL = "{{  url('') }}";
    $('#login_btn').click(function() {
      $.ajax({
        type: 'POST',
        url: "{{ route('authenticate')}}",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: {
          'username': $('#username').val(),
          'password': $('#password').val()
        },
        success: function(data) {
          if (data == 'success') {
            swal("LOGIN SUCCESSFUL", "Welcome...!", "success").then(function() {
              window.location.href = HOST_URL + "/home";
            });
          } else {
            swal("INVALID USERNAME PASSWORD", "PLEASE TRY AGAIN", "warning").then(function() {
              location.reload();
            });
          }
        },
        error: function(data) {
          swal("SOMETHING WENT WRONG...", "PLEASE TRY AGAIN", "warning").then(function() {
            location.reload();
          });
        }
      });
    });
  </script>
</body>
</html>