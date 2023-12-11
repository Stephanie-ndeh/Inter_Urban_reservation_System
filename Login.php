<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;1,200&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/Login.css">
    <title>Login</title>
</head>
<style>
    body {
        background-image: linear-gradient(to right top, #ffffff, #f0f1f2, #e1e3e5, #d1d5d7, #c2c8c9);
    }
</style>

<body>
    <section class="header">
        <?php include 'navbar.php' ?>
    </section>
   
    <section class="register">
        <div class="form-container">

            <form action="" method="post">
               <h3>login now</h3>
          
               <input type="email" name="email" required placeholder="enter your email">
               <input type="password" name="password" required placeholder="enter your password">
               <input type="submit" name="submit" value="login now" class="form-btn">
               <p>don't have an account with us? <a href="register.php">register now</a></p>
            </form>
         
         </div>
    </section>


    <section >
    <?php include 'footer.php' ?>
    </section>

</body>

</html>