<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Form Login</title>
    <style>
      body {
        background-color: #dee2e6;
      }
    </style>
  </head>
  <body>
  <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $button = $_POST['login'];

    function cekLogin($username, $password) {
      if ($username == 'admin' && $password == 'mimin') {
        header('Location: /home.php');
        exit();
      }
      
    }
    
  ?>
    
    <form method="POST" action="#">
      <div class="row d-flex justify-content-center mt-4">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex justify-content-center mx-2 my-2">
              <h3>Log In</h3>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
              </div>
              <div class="mb-3">
                <input type="submit" class="btn btn-primary w-100 mt-4" name="login" value="Submit<?= cekLogin($username, $password) ?>">

              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
  <script src="assets/js/bootstrap.min.js"></script>
</html>




