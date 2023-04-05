<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #17a2b8;
    }

    .login-form {
      width: 340px;
      margin: 50px auto;
      font-size: 15px;
    }

    .login-form form {
      margin-bottom: 15px;
      background: #fff;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 30px;
    }

    .login-form h2 {
      margin: 0 0 15px;
    }

    .form-control,
    .btn {
      min-height: 38px;
      border-radius: 2px;
    }

    .btn {
      font-size: 15px;
      font-weight: bold;
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn:hover,
    .btn:focus {
      background-color: #108080;
      border-color: #108080;
    }
  </style>
</head>

<body>
  <div class="login-form">
    <form>
      <h2 class="text-center">Log in</h2>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Log in</button>
      </div>
    </form>
  </div>
</body>

</html>