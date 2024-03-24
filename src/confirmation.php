<?php
include 'db/db_connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-gray-300">
    <section class="header">
        <?php include 'nav.html' ?>
    </section>
    <section class="text-gray-600 body-font relative">

        <div class="container px-5 bg-white py-10  mx-auto mt-30  mt-10 mb-12 lg:w-2/3 ">

            <div class="space-y-12">
                <div class=" border-gray-900/10 pb-12">
                    <h2 class=" mt-4 text-lg border-b  border-teal-700 font-semibold leading-7  text-[#1d818c] ">Bus Details</h2>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <?php
                        if (isset($_GET['booking_id']) && is_numeric($_GET['booking_id'])) {
                            $booking_id = $_GET['booking_id'];
                            $sql = "
                            SELECT b.id AS booking_id, p.fname, p.cardNo, p.gender, p.email, p.phoneNo,
                            l1.name AS from_location, l2.name AS to_location, bus.BusType, b.seat_price
                            FROM reservations b
                            INNER JOIN passengers p ON b.passenger_id = p.id
                            INNER JOIN buses bus ON b.bus_id = bus.id
                            INNER JOIN routes r ON bus.route_id = r.id
                            INNER JOIN locations l1 ON r.from_location_id = l1.id
                            INNER JOIN locations l2 ON r.to_location_id = l2.id
                            WHERE b.id = :booking_id
                        ";

                            // Execute SQL query
                            $stmt = $pdo->prepare($sql);
                            $stmt->bindParam(':booking_id', $booking_id, PDO::PARAM_INT);
                            $stmt->execute();

                            // Fetch results
                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            // Display results
                            foreach ($results as $row) { ?>
                                <div class="sm:col-span-2">
                                    <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">Boarding
                                        Point</label>
                                    <div class="mt-2">
                                        <div class="flex mb-4">
                                            <div class="flex text-xl font-bold">
                                                <span class="mr-3  "><?php echo  $row['from_location']; ?></span>
                                                <!-- <p>Douala</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">Departure
                                        Point</label>
                                    <div class="mt-2">
                                        <div class="flex mb-4">
                                            <div class="flex text-xl font-bold">
                                                <span class="mr-3  "><?php echo  $row['to_location']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">Bus
                                        Type</label>
                                    <div class="mt-2">
                                        <div class="flex mb-4">
                                            <div class="flex text-xl font-bold">
                                                <span class="mr-3  "><?php echo  $row['BusType']; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="sm:col-span-2">
                                    <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">Date
                                    </label>
                                    <div class="mt-2">
                                        <div class="flex mb-4">
                                            <div class="flex text-xl font-bold">
                                                <span class="mr-3  ">17/03/2021</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                    </div>
                    <h2 class="text-lg mt-4  border-b  border-teal-700 font-semibold leading-7  text-[#1d818c] ">Passenger Details</h2>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2">
                            <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">Name</label>
                            <div class="mt-2">
                                <div class="flex mb-4">
                                    <div class="flex text-xl font-bold">
                                        <span class="mr-3  "><?php echo  $row['fname']; ?></span>
                                        <!-- <p>Douala</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">Card Number</label>
                            <div class="mt-2">
                                <div class="flex mb-4">
                                    <div class="flex text-xl font-bold">
                                        <span class="mr-3  "><?php echo  $row['cardNo']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">Gender</label>
                            <div class="mt-2">
                                <div class="flex mb-4">
                                    <div class="flex text-xl font-bold">
                                        <span class="mr-3  "><?php echo  $row['gender']; ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="">
                            <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">Seat Price</label>
                            <div class="mt-2">
                                <div class="flex mb-4">
                                    <div class="flex text-xl font-bold">
                                    <span class="mr-3"><?php echo $row['seat_price']; ?></span>                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <h2 class="text-lg mt-4  border-b  border-teal-700 font-semibold leading-7  text-[#1d818c] ">Contact Details</h2>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2">
                            <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">Name</label>
                            <div class="mt-2">
                                <div class="flex mb-4">
                                    <div class="flex text-xl font-bold">
                                        <span class="mr-3  "><?php echo  $row['fname']; ?></span>
                                        <!-- <p>Douala</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">Mobile Number</label>
                            <div class="mt-2">
                                <div class="flex mb-4">
                                    <div class="flex text-xl font-bold">
                                        <span class="mr-3  "><?php echo  $row['phoneNo']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <label for="region" class="block text-lg font-medium leading-6  text-[#1d818c] ">email address</label>
                            <div class="mt-2">
                                <div class="flex mb-4">
                                    <div class="flex text-xl font-bold">
                                        <span class="mr-3  "><?php echo  $row['email']; ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="sm:col-span-2 ml-8">
                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button type="submit" class="rounded-md bg-[#1d818c] px-4 py-2 text-lg font-semibold text-white shadow-sm hover:bg-teal-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><a href="paymentMethod.php">MAKE PAYMENT</a></button>
                            </div>
                        </div>
                <?php }
                        } ?>

                    </div>

                </div>

    </section>
    <?php include 'foot.html' ?>

</body>

</html>