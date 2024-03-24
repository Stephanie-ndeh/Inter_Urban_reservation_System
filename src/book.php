<?php
session_start();
include 'db/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $cardNo = $_POST['cardNo'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phoneNo = $_POST['phoneNo'];

    $passenger_sql = "INSERT INTO passengers (fname, cardNo, Gender, email, phoneNo) VALUES (:fname, :cardNo, :gender, :email, :phoneNo)";
    $passenger_stmt = $pdo->prepare($passenger_sql);
    $passenger_stmt->bindParam(':fname', $fname);
    $passenger_stmt->bindParam(':cardNo', $cardNo);
    $passenger_stmt->bindParam(':gender', $gender);
    $passenger_stmt->bindParam(':email', $email);
    $passenger_stmt->bindParam(':phoneNo', $phoneNo);
    $passenger_stmt->execute();
    $passenger_id = $pdo->lastInsertId();

    $selected_bus = $_SESSION['selected_bus'];
    $selected_seats = $_SESSION['selectedSeats'];
    $totalPrice = $_GET['totalPrice'];
    $totalPrice = urldecode($totalPrice);

    foreach ($selected_seats as $seat_number) {
        $seat_sql = "SELECT id FROM seats WHERE bus_id = :bus_id AND seat_number = :seat_number";
        $seat_stmt = $pdo->prepare($seat_sql);
        $seat_stmt->bindParam(':bus_id', $selected_bus['id']);
        $seat_stmt->bindParam(':seat_number', $seat_number);
        $seat_stmt->execute();
        $seat_result = $seat_stmt->fetch(PDO::FETCH_ASSOC);
        $seat_id = $seat_result['id'];

        // Update seat status to booked
        $update_seat_sql = "UPDATE seats SET is_booked = 1 WHERE id = :seat_id";
        $update_seat_stmt = $pdo->prepare($update_seat_sql);
        $update_seat_stmt->bindParam(':seat_id', $seat_id);
        $update_seat_stmt->execute();

        $reservation_sql = "INSERT INTO reservations (passenger_id, seat_id, bus_id, seat_number, seat_price) 
        VALUES (:passenger_id, :seat_id, :bus_id, :seat_number, :total_price)";
        $reservation_stmt = $pdo->prepare($reservation_sql);
        $reservation_stmt->bindParam(':passenger_id', $passenger_id);
        $reservation_stmt->bindParam(':seat_id', $seat_id);
        $reservation_stmt->bindParam(':bus_id', $selected_bus['id']);
        $reservation_stmt->bindParam(':seat_number', $seat_number);
        $reservation_stmt->bindParam(':total_price', $totalPrice); // Update this line
        $reservation_stmt->execute();
    }
    $booking_id = $pdo->lastInsertId();

    header('Location: confirmation.php?booking_id=' . $booking_id);
}
