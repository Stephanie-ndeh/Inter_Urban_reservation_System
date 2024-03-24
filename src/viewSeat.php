<?php
include 'db/db_connect.php';
session_start();
$selected_bus = $_SESSION['selected_bus'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/seats.css">
    <title>ViewSeat</title>
</head>
<style>
    .seat {
        width: 30px;
        height: 30px;
        margin: 5px;
        background-color: #ccc;
        cursor: pointer;
    }

    .selected {
        background-color: green;
    }
</style>

<body class="bg-gray-300">
    <section class="text-gray-600 body-font overflow-hidden">

        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="lg:w-2/6 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full ">
                    <h2 class="text-gray-900 text-center text-3xl font-bold title-font mb-5">Register</h2>
                    <?php

                    function getAvailableSeats($bus_id)
                    {
                        global $pdo; // Assuming $pdo is the PDO connection object
                        $sql = "SELECT id, seat_number FROM seats WHERE bus_id = :bus_id AND is_booked = 0";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(':bus_id', $bus_id, PDO::PARAM_INT);
                        $stmt->execute();
                        return $stmt->fetchAll(PDO::FETCH_COLUMN);
                    }


                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selectedSeats'])) {
                        $bus_id = $_POST['bus_id']; // or $_GET['bus_id'] if passed via URL
                        $selectedSeats = json_decode($_POST['selectedSeats']);
                        $_SESSION['selectedSeats'] = $selectedSeats;
                    } else {
                        $bus_id = $_GET['bus_id']; // Assuming bus_id is passed via URL
                        $available_seats = getAvailableSeats($bus_id);
                        $seat_image_path = '../assets/pics/629421-200.png';
                        if (count($available_seats) > 0) {
                    ?>
                            <div class="flex -mb-2">
                                <div class="flex-1  ml-8">
                            <?php
                            foreach ($available_seats as $seat) {
                                echo '<div class="seat-container">';
                                echo '<button class=" w-12 h-11 focus:outline-none" onclick="toggleSeat(this)">';
                                echo '<img src="' . $seat_image_path . '" alt="Seat Image">';
                                echo '<span class="seat-number">' . $seat . '</span>';
                                echo '</button>';
                                echo '</div>';
                            }
                        }
                    }
                            ?>

                                </div>
                            </div>
                </div>
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <!-- <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium -mb-2">The Catcher in the Rye</h1> -->
                    <?php
                    $bus_id = $_GET['bus_id'];

                    $sql = "
                            SELECT l_from.name AS from_location_id, l_to.name AS to_location_id
                            FROM seats s
                            INNER JOIN buses b ON s.bus_id = b.id
                            INNER JOIN routes r ON b.route_id = r.id
                            INNER JOIN locations l_from ON r.from_location_id = l_from.id
                            INNER JOIN locations l_to ON r.to_location_id = l_to.id
                            WHERE b.id = :bus_id
                            AND s.is_booked = 0
                            LIMIT 1
                        ";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':bus_id', $bus_id, PDO::PARAM_INT);
                    $stmt->execute();

                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($results as $row) {
                        echo ' <div class="flex mb-4">';
                        echo ' <div class="flex text-xl font-bold">';
                        echo ' <span class="mr-3  text-[#1d818c]">Boarding Point: </span>';
                        echo ' <p>' . $row['from_location_id'] . '</p>';
                        echo '</div>';
                        echo '</div>';

                        echo ' <div class="flex mb-4">';
                        echo ' <div class="flex text-xl font-bold">';
                        echo ' <span class="mr-3  text-[#1d818c]">Departure Point: </span>';
                        echo ' <p>' . $row['to_location_id'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                    <div class="flex mb-4">
                        <div class="flex text-xl  font-bold">
                            <span class="mr-3   text-[#1d818c]">Seat No</span>
                            <p class="seat-numbers"></p>
                        </div>
                    </div>

                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                        <div class="flex">
                            <span class="mr-3">Available</span>
                            <button class="border-2 border-gray-300 ml-2  bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>

                            <span class="mr-3">Reserved</span>
                            <button class="border-2 border-gray-300 ml-2 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>

                            <span class="mr-3">Selected</span>
                            <button class="border-2 border-gray-300 ml-2 bg-[#1d818c] rounded-full w-6 h-6 focus:outline-none"></button>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>

                        </div>

                    </div>
                    <div class="flex">
                        <span class="title-font font-bold text-2xl text-black">Total: FRS CFA</span>
                        <span class="title-font font-medium text-2xl text-[#1d818c] ml-3" id="totalPrice">0</span>
                        <form id="bookingForm" action="booking.php" method="post">
                            <input type="hidden" id="selectedSeats" name="selectedSeats">
                            <!-- Other form fields -->
                        </form>
                        <button class="flex ml-auto text-white bg-[#1d818c] border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" onclick="submitBookingForm()">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add more seat divs as needed -->


    </section>
    <script>
        let selectedSeats = [];
        const seatPrice = 5000;



        function toggleSeat(seatButton) {
            // Toggle seat color
            seatButton.classList.toggle('selected');

            // Get the seat number
            var seatNumber = seatButton.querySelector('.seat-number').textContent;

            // Update the displayed seat numbers
            var seatNumbersContainer = document.querySelector('.seat-numbers');
            var seatNumbers = seatNumbersContainer.textContent.split(',').map(num => num.trim());
            if (seatNumbers.includes(seatNumber)) {
                // If seat is already selected, remove it
                seatNumbers = seatNumbers.filter(num => num !== seatNumber);
            } else {
                // If seat is not selected, add it
                seatNumbers.push(seatNumber);
            }
            seatNumbersContainer.textContent = seatNumbers.join(', ');

            // Calculate total price
            var totalPrice = 0;
            var selectedSeats = document.querySelectorAll('.selected');
            selectedSeats.forEach(function(seat) {
                totalPrice += 2000; // Assuming each seat costs $2000
            });

            // Display total price
            document.getElementById('totalPrice').textContent = totalPrice;

            // Update hidden input field with selected seat numbers
            document.getElementById('selectedSeats').value = JSON.stringify(seatNumbers);
        }

        function submitBookingForm() {
            var selectedSeats = document.querySelectorAll('.selected');
            if (selectedSeats.length === 0) {
                alert("Please select at least one seat to proceed with booking.");
            } else {
                // Get total price
                var totalPrice = document.getElementById('totalPrice').textContent;
                // Get selected seat numbers
                var selectedSeatNumbers = [];
                selectedSeats.forEach(function(seat) {
                    selectedSeatNumbers.push(seat.querySelector('.seat-number').textContent);
                });
                // Encode selected seat numbers
                var encodedSelectedSeats = encodeURIComponent(JSON.stringify(selectedSeatNumbers));
                // Encode total price
                var encodedTotalPrice = encodeURIComponent(totalPrice);
                // Redirect to booking.php with selected seats and total price as parameters
                window.location.href = "booking.php?selectedSeats=" + encodedSelectedSeats + "&totalPrice=" + encodedTotalPrice;
            }
        }
    </script>
</body>

</html>