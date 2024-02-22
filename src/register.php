<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../assets/css/Login.css"> -->
  <title>Register</title>
</head>

<body class="bg-gray-200">
  <section class="header">
    <?php include 'nav.html' ?>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <img src="../assets/pics/undraw_mobile_login_re_9ntv.svg" alt="">
    
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-center text-3xl font-bold title-font mb-5">Register</h2>
      <div class="relative mb-4">
        <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
        <input type="text" id="full-name" name="full-name" class="w-full bg-gray-100 rounded border  py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-gray-100 rounded border  py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
        <input type="password" id="password" name="password" class="w-full bg-gray-100 rounded border text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <button class="text-white bg-[#1d818c] border-0 py-2 px-8 focus:outline-none hover:bg-teal-800 rounded text-lg">Sign UP</button>
      <p class="text-xl text-center text-neutral-950 mt-3">Already Registered with us? <a href="Login.php" class="text-teal-600">Login Now</a></p>
    </div>
    </div>
  </section>


  <section class="footer">
    <?php include 'foot.html' ?>
  </section>

</body>

</html>