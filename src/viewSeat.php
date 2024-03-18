<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/seats.css">
    <title>Document</title>
</head>

<body class="bg-gray-300">
    <section class="text-gray-600 body-font overflow-hidden">

        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="lg:w-2/6 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full ">
                    <h2 class="text-gray-900 text-center text-3xl font-bold title-font mb-5">Register</h2>
                    <?php
                    include 'db/db_connect.php';

                    $bus_id = $_GET['bus_id'];


                    $sql = "SELECT seat_number
                    FROM seats
                    WHERE bus_id = :bus_id
                    AND is_booked = 0";

                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':bus_id', $bus_id, PDO::PARAM_INT);
                    $stmt->execute();

                    $available_seats = $stmt->fetchAll(PDO::FETCH_COLUMN);
                    $seat_image_path = '../assets/pics/629421-200.png';


                    if (count($available_seats) > 0) {
                    ?>
                        <div class="flex -mb-2">
                            <div class="flex-1  ml-8">
                            <?php
                            // echo "Available seats for Bus ID $bus_id:";
                            foreach ($available_seats as $seat) {
                                echo '<div class="seat-container">';
                                echo '<button class=" w-12 h-11 focus:outline-none ">';
                                echo '<img src="' . $seat_image_path . '" alt="Seat Image">';
                                echo '<span class="seat-number"> ' . $seat . '</span>';
                                echo '</button>';
                                echo '</div>';
                            }
                        } else {
                            echo "No available seats for Bus ID $bus_id.";
                        }
                            ?>

                            </div>
                        </div>
                </div>
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <!-- <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium -mb-2">The Catcher in the Rye</h1> -->
                    <div class="flex mb-4">
                        <div class="flex text-xl font-bold">
                            <span class="mr-3  text-[#1d818c]">Boarding Point</span>
                            <p>Douala</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="flex text-xl  font-bold">
                            <span class="mr-3   text-[#1d818c]">Departure Point</span>
                            <p>Yaounde</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="flex text-xl  font-bold">
                            <span class="mr-3   text-[#1d818c]">Seat No</span>
                            <p>12,13,14</p>
                        </div>
                    </div>

                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">

                        <div class="flex">
                            <span class="mr-3">Available</span>
                            <button
                                class="border-2 border-gray-300 ml-2  bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>

                            <span class="mr-3">Reserved</span>
                            <button
                                class="border-2 border-gray-300 ml-2 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>

                            <span class="mr-3">Selected</span>
                            <button
                                class="border-2 border-gray-300 ml-2 bg-[#1d818c] rounded-full w-6 h-6 focus:outline-none"></button>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>

                           
                        </div>

                    </div>
                    <div class="flex">
                        <span class="title-font font-bold text-2xl text-black">Total: </span>
                        <span class="title-font font-medium text-2xl text-[#1d818c] ml-3">$58.00</span>
                        <button
                            class="flex ml-auto text-white bg-[#1d818c] border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"><a
                                href="booking.php">Book Now</a></button>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>