<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./assets/css/nav.css" />
  <title>Navbar</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-transparent">
    <div class="container">
      <a class="navbar-brand fs-4" href="#">BUS TICKET RESERVATION</a>
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header text-black border-bottom">
          <h1 class="offcanvas-title" id="offcanvasNavbarLabel">
            BUS TICKET RESERVATION
          </h1>
          <button type="button" class="btn-close btn-close-black shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- sidebar body -->

        <div class="offcanvas-body flex-column flex-lg-row p-4 p-lg-3">
          <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="AboutUs.php">About</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#">Manage Booking</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="Login.php">Login</a>
            </li>
          </ul>

          <!-- login and signup -->
          <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
            <a href="register.php" class="text-white text-decoration-none px-3 py-1 rounded-2" style="background-color: #1d818c">Login/SignUP</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>