<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="./assets/css/style2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;1,200&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>

<body>
    <section class="header">
        <?php include 'navbar.php' ?>
    </section>

    <section class="sectionTwo">
        <div class="text-box">
            <h1>Bus Tickets</h1>
            <p>Search Bus Tickets Online</p>
            <form>
                <input type="text" id="from" name="from" placeholder="Origin" />
                <input type="text" id="to" name="to" placeholder="Destination" />
                <input type="text" id="date" name="date" placeholder="Departure Date" onfocus="(this.type='date')" />

                <button  type="submit">SEARCH</button>
            </form>
        </div>
    </section>

    <section class="aboutUs">
        <div class="container">
            <section class="about">
                <div class="about-image">
                    <img src="./assets/pics/pexels-kaique-rocha-68427.jpg" alt="" />
                </div>
                <div class="about-content">
                    <h2>About Us</h2>
                    <p>
                        The first ever online bus ticket booking platform in Cameroon that
                        aims to offer a great level of convenience and reliability. With
                        {{}}, you will be able to get rid of the long queues on bus
                        stations or jammed streets to book the bus tickets. We are the
                        most reliable online portal, where you will be able to book bus
                        tickets directly from the major bus operators (over 1000 bus
                        operators) for all the routes in Cameroon.
                    </p>
                    <button  type="submit">SEARCH</button>
                </div>
            </section>
        </div>
    </section>

    <section class="routes">
        <div>
            <h1>Our Routes</h1>
        </div>
        <ul>
            <li>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Bamenda</span>
                    <i class="fa-solid fa-right-left"></i>
                    <span>Douala</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Douala</span>
                    <i class="fa-solid fa-right-left"></i>
                    <span>Bamenda</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Buea</span>
                    <i class="fa-solid fa-right-left"></i>
                    <span>Bamenda</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Yaounde</span>
                    <i class="fa-solid fa-right-left"></i>
                    <span>Douala</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Douala</span>
                    <i class="fa-solid fa-right-left"></i>
                    <span>Yaounde</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Douala</span>
                    <i class="fa-solid fa-right-left"></i>
                    <span>Ebolowa</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Ebolowa</span>
                    <i class="fa-solid fa-right-left"></i>
                    <span>Douala</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Dshang</span>
                    <i class="fa-solid fa-right-left"></i>
                    <span>Yaounde</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Yaounde</span>
                    <i class="fa-solid fa-right-left"></i>
                    <span>Mbouda</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Buea</span>
                    <i class="fa-solid fa-right-left"></i>
                    <span>Yaounde</span>
                </a>
            </li>
        </ul>
    </section>

    <section class="reasons">
        <h1>Why Ride With Us</h1>
        <div class="row">
            <div class="course-col">
                <div class="box-info">
                    <i class='bx bx-time'></i>
                </div>
                <h2>SERVICES</h2>
                <p>
                    We offer the best in class facilities and services for a happy
                    journey
                </p>
            </div>
            <div class="course-col">
                <div class="box-info">
                    <i class='bx bxs-check-circle'></i>
                </div>
                <h2>SECURE</h2>
                <p>High standard safety measures and customer friendly staffs</p>
            </div>
            <div class="course-col">
                <div class="box-info">
                    <i class='bx bxl-pocket'></i>
                </div>
                <h2>POCKET FRIENDLY</h2>
                <p>Affordable rates to suit every pocket</p>
            </div>
            <!-- <div class="course-col">
                <h2>hello world</h2>
                <p>We offer unmatched discounts to make your journey more economical</p>
            </div> -->
        </div>
    </section>

    <section >
       <?php include 'footer.php' ?>
        
    </section>

</body>

</html>