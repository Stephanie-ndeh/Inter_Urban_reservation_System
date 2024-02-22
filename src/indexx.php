<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/style2.css" />
    <link href="../dist/output.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;1,200&display=swap"
        rel="stylesheet" />
    <title>Home</title>
</head>

<body class="bg-gray-100">
    <section class="header">
        <?php include 'nav.html' ?>
    </section>

    <section class="sectionTwo">
        <div class="text-box">
            <h1>Bus Tickets</h1>
            <p>Search Bus Tickets Online</p>
            <form>
                <input type="text" id="from" name="from" placeholder="Origin" />
                <input type="text" id="to" name="to" placeholder="Destination" />
                <input type="text" id="date" name="date" placeholder="Departure Date" onfocus="(this.type='date')" />

                <button type="submit">SEARCH</button>
            </form>
        </div>
    </section>

    <section class="aboutUs">
        <div class="container">
            <section class="about">
                <div class="about-image">
                    <img src="../assets/pics/pexels-kaique-rocha-68427.jpg" alt="" />
                </div>
                <div class="about-content">
                    <a href="#">About Us</a href="#">
                    <p>
                        The first ever online bus ticket booking platform in Cameroon that
                        aims to offer a great level of convenience and reliability. With
                        {{}}, you will be able to get rid of the long queues on bus
                        stations or jammed streets to book the bus tickets. We are the
                        most reliable online portal, where you will be able to book bus
                        tickets directly from the major bus operators (over 1000 bus
                        operators) for all the routes in Cameroon.
                    </p>
                    <button type="submit">SEARCH</button>
                </div>
            </section>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">OUR ROUTES</h1>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>

                            <h1 class="title-font font-medium text-lg text-gray-900">Bamenda</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 ml-1 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                            </svg>

                            <h1 class="title-font font-medium text-lg text-gray-900">Douala</h1>

                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>

                            <h1 class="title-font font-medium text-lg text-gray-900">Douala</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 ml-1 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                            </svg>

                            <h1 class="title-font font-medium text-lg text-gray-900">Bamenda</h1>

                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>

                            <h1 class="title-font font-medium text-lg text-gray-900">Bamenda</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 ml-1 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                            </svg>

                            <h1 class="title-font font-medium text-lg text-gray-900">Yaounde</h1>

                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>

                            <h1 class="title-font font-medium text-lg text-gray-900">Yaounde</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                            </svg>

                            <h1 class="title-font font-medium text-lg text-gray-900">Bamenda</h1>

                        </div>
                    </div>
                </div>
            </div>
            


        </div>
    </section>

    <section class="reasons">
        <h1>Why Ride With Us</h1>
        <div class="row">
            <div class="course-col">
                <div class="box-info">
                    <i class='bx bx-time'></i>
                </div>
                <a href="#">SERVICES</a href="#">
                <p>
                    We offer the best in class facilities and services for a happy
                    journey
                </p>
            </div>
            <div class="course-col">
                <div class="box-info">
                    <i class='bx bxs-check-circle'></i>
                </div>
                <a href="#">SECURE</a href="#">
                <p>High standard safety measures and customer friendly staffs</p>
            </div>
            <div class="course-col">
                <div class="box-info">
                    <i class='bx bxl-pocket'></i>
                </div>
                <a href="#">POCKET FRIENDLY</a href="#">
                <p>Affordable rates to suit every pocket</p>
            </div>

        </div>
    </section>

    <section>
        <?php include 'foot.html' ?>

    </section>

</body>

</html>