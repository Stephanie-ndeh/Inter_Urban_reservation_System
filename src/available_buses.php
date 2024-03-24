<?php
include 'db/db_connect.php';
session_start();
// Your existing code...

// Save the selected bus information in the session
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <section class="text-gray-600 body-font">
        <div class="sticky top-0">
            <?php include 'nav.html' ?>
        </div>
        <div class="container px-5 py-24 mx-auto flex flex-wrap ">
            <div class="flex flex-col flex-wrap lg:py-6  -mb-10  lg:w-1/2 lg:pl-12 lg:text-left -mr-1">

                <?php
                $from_location = $_POST['from_location'];
                $to_location = $_POST['to_location'];
                $departure_date = $_POST['departure_date'];

                $sql = "SELECT b.id, b.route_id, b.BusType
                FROM buses b
                INNER JOIN routes r ON b.route_id = r.id
                WHERE r.from_location_id = :from_location
                AND r.to_location_id = :to_location 
                AND b.departure_date = :departure_date";

                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':from_location', $from_location, PDO::PARAM_INT);
                $stmt->bindParam(':to_location', $to_location, PDO::PARAM_INT);
                $stmt->bindParam(':departure_date', $departure_date, PDO::PARAM_STR);

                $stmt->execute();

                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if (!empty($results)) {
                    $_SESSION['selected_bus'] = $results[0]; // Assuming the first result is the selected bus
            
                    foreach ($results as $row) {
                        echo '<div class="flex flex-wrap -mx-4 mt-auto  mb-8 bg-white rounded h-50 content-start  p-14">';
                        echo '<div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">';
                        echo '<h2 class="font-bold text-gray-900">Bus ID</h2>';
                        echo '<p class="leading-relaxed">' . $row['id'] . '</p>';
                        echo '</div>';

                        echo '<div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">';
                        echo '<h2 class="font-bold text-gray-900">Route ID</h2>';
                        echo '<p class="leading-relaxed">' . $row['route_id'] . '</p>';
                        echo '</div>';

                        echo '<div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">';
                        echo '<h2 class="font-bold text-gray-900">Bus Type</h2>';
                        echo '<p class="leading-relaxed">' . $row['BusType'] . '</p>';
                        echo '</div>';

                        echo ' <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">';
                        echo '<button onclick="redirectToSeats(' . $row['id'] . ')" class="h-9   px-6  font-semibold rounded-md bg-[#1d818c] text-white shadow-xl hover:bg-teal-600">';
                        echo ' View Seats';
                        echo '</button> </div>';
                        echo '</div>';

                        // echo "Bus ID: " . $row['id'] . ", Route ID: " . $row['id'] . ", Bus Type: " . $row['BusType'] . "<br>";
                    }
                } else {
                    echo "No buses available for the selected route.";
                }
                ?>


            </div>
            <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden ">
                <img alt="feature" class=" h-96 w-full ml-9" src="../assets/pics/undraw_selected_box_09k4.svg">
            </div>
        </div>
        <?php include 'foot.html' ?>
    </section>
    <script>
        function redirectToSeats(busId) {
            // Redirect to the seat selection page with the bus ID
            window.location.href = 'viewSeat.php?bus_id=' + busId;
        }
    </script>
</body>

</html>