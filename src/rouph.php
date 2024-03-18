<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../assets/css/Login.css"> -->
  <title>Login</title>
</head>

<body class="bg-gray-200">


  <section class="text-gray-600 body-font">
    <div class="container  px-5 py-24 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <img src="../assets/pics/undraw_mobile_login_re_9ntv.svg" alt="">
      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h2 class="text-gray-900 text-center text-3xl font-bold title-font mb-5">Sign In</h2>

        <?php
        include 'db/db_connect.php';
        session_start();
        if (isset($_POST['submit'])) {
          $email = $_POST['email'];
          $password = $_POST['password'];

          // Hash the user's password
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);

          // Query the database with the hashed password
          $sql = "SELECT * FROM users WHERE email='$email'";
          $result = mysqli_query($conn, $sql);

          if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);

            // Verify the entered password against the stored hash
            if (password_verify($password, $row['password'])) {
              // Password is correct; set session and redirect
              $_SESSION['name'] = $row['name'];
              header("Location: indexx.php");
              exit; // Important: End the script after redirection
            } else {
              echo "<script>alert('Woops! Incorrect Password.')</script>";
            }
          } else {
            echo "<script>alert('Woops! Email Not Found.')</script>";
          }
        }
        ?>
        <!-- Your HTML form goes here -->

        <form action="Login.php" method="post">
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 rounded border  py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="w-full bg-gray-100 rounded border text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <button name="submit" value="submit" class="text-white bg-[#1d818c] border-0 py-2 px-8 focus:outline-none hover:bg-teal-800 rounded text-lg">Login</button>
          <p class="text-xl text-center text-neutral-950 mt-3">Not yet registered with us? <a href="register.php" class="text-teal-600">Register Now</a></p>
        </form>
      </div>

    </div>
  </section>


  <section>
    <?php include 'foot.html' ?>
  </section>

</body>

</html>