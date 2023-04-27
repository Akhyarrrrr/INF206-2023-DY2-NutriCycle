<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NutriCycle</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #13192B;">
          <div class="container-fluid">
            <div class="navbar-brand text-white pe-3" style="border-right: 1px solid white;">
              <img src="image/logo.png" alt="Logo NutriCycle" width="40"> NutriCycle
            </div>
            <div class="text-white collapse navbar-collapse">Landing Page</div>
          </div>
        </nav>
      </header>
      <main>

    <br><br><br>

    <div class="container">

      <center>
        <div class="card my-5 py-3 px-5" style="background-color: #60A5FA;margin-left: 400px;margin-right: 400px;">
          <h1>Sign In</h1>
          <br>

          <form action="">
            <div class="mb-3">
              <input type="text" class="form-control p-2" style="border:none;border-radius: 30px;"
                placeholder="Username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control p-2" style="border:none;border-radius: 30px;"
                placeholder="Password">
              <i class="fas fa-eye-slash" style="position: relative;bottom: 32px;left: 170px;"></i>
            </div>
          </form>

          <div class="row justify-content-between">
            <div class="col" style="text-align: justify;">
              <input type="checkbox"> Remember me
            </div>
            <div class="col" style="text-align: right;">
              <a>Forgot the password?</a>
            </div>
          </div>

          <br>

          <button class="btn btn-dark p-2 rounded-pill" onclick="location.href='officerhome.html';">
            <h3>Login</h3>
          </button>

          <br>

          <div style="border-top: 1px solid white;">
            <span class="text-white px-1" style="background-color:#60A5FA;position: relative;bottom: 12px;">OR</span>
          </div>

          <div class="rounded bg-dark">
            <div class="row py-3 justify-content-center">
              <div class="col">
                <img src="image/fb.png" class="mx-4">
                <img src="image/google.png" class="mx-4">
                <img src="image/ig.png" class="mx-4">
              </div>
            </div>
          </div>

          <br><br><br><br>

        </div>
      </center>

      <br><br><br>

    </div>

  </main>

  <div style="background-color:white;" class="text-center pt-3">
    <p>Copyright 2023 &copy; NutriCycle</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  </main>

</body>

</html>