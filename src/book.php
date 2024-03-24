<?php
session_start();
include 'db/db_connect.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve passenger details from the form
    $fname = $_POST['fname'];
    $cardNo = $_POST['cardNo'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phoneNo = $_POST['phoneNo'];

    // Insert passenger details into the passengers table
    $passenger_sql = "INSERT INTO passengers (fname, cardNo, Gender, email, phoneNo) VALUES (:fname, :cardNo, :gender, :email, :phoneNo)";
    $passenger_stmt = $pdo->prepare($passenger_sql);
    $passenger_stmt->bindParam(':fname', $fname);
    $passenger_stmt->bindParam(':cardNo', $cardNo);
    $passenger_stmt->bindParam(':gender', $gender);
    $passenger_stmt->bindParam(':email', $email);
    $passenger_stmt->bindParam(':phoneNo', $phoneNo);
    $passenger_stmt->execute();
    $passenger_id = $pdo->lastInsertId();

    // Retrieve selected bus and seats information from the session
    $selected_bus = $_SESSION['selected_bus'];
    $selected_seats = $_SESSION['selectedSeats']; // Decode JSON string into an array
    $totalPrice = $_GET['totalPrice'];
    $totalPrice = urldecode($totalPrice);

    // Insert reservation details into the reservations table
    foreach ($selected_seats as $seat_number) {
        // Retrieve seat ID based on seat number and bus ID
        $seat_sql = "SELECT id FROM seats WHERE bus_id = :bus_id AND seat_number = :seat_number";
        $seat_stmt = $pdo->prepare($seat_sql);
        $seat_stmt->bindParam(':bus_id', $selected_bus['id']);
        $seat_stmt->bindParam(':seat_number', $seat_number);
        $seat_stmt->execute();
        $seat_result = $seat_stmt->fetch(PDO::FETCH_ASSOC);
        $seat_id = $seat_result['id'];

        // Insert reservation details
        $reservation_sql = "INSERT INTO reservations (passenger_id, seat_id, bus_id, seat_number, seat_price) VALUES (:passenger_id, :seat_id, :bus_id, :seat_number, :seat_price)";
        $reservation_stmt = $pdo->prepare($reservation_sql);
        $reservation_stmt->bindParam(':passenger_id', $passenger_id);
        $reservation_stmt->bindParam(':seat_id', $seat_id);
        $reservation_stmt->bindParam(':bus_id', $selected_bus['id']);
        $reservation_stmt->bindParam(':seat_number', $seat_number);
        $reservation_stmt->bindParam(':seat_price', $totalPrice);
        $reservation_stmt->execute();
    }
    $booking_id = $pdo->lastInsertId();

    // Redirect to a confirmation page or display a success message
    // Assume $booking_id is the ID of the booking you just inserted
    header('Location: confirmation.php?booking_id=' . $booking_id);
}
?>