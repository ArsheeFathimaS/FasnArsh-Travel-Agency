<?php
// Start or resume a session
session_start();

// Establish database connection
$con = mysqli_connect('localhost', 'root', '', 'travel_info');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if Username is set in session or form
if (isset($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
} elseif (isset($_POST['username'])) { // If Username is set in form data
    $username = mysqli_real_escape_string($con, $_POST['username']);
} else {
    // Handle case where Username is not available
    echo "<script>alert('Error: Username not provided.'); window.location='login.php';</script>";
    exit();
}

// Sanitize and validate other input data for hotel booking
$hotel_name = mysqli_real_escape_string($con, $_POST['hotel_name']);
$check_in = mysqli_real_escape_string($con, $_POST['check_in']);
$check_out = mysqli_real_escape_string($con, $_POST['check_out']);
$guests = intval($_POST['guests']);
$room_type = $_POST['room_type'];

// Calculate total price based on room type and number of guests for hotel booking
$total_price = calculateTotalPrice($room_type, $guests);

// Function to calculate total price based on room type and guests for hotel booking
function calculateTotalPrice($room_type, $guests) {
    $basePrice = 100; // Base price per guest
    switch ($room_type) {
        case 'single':
            return $basePrice * $guests;
        case 'double':
            return $basePrice * 2 * $guests;
        case 'suite':
            return $basePrice * 3 * $guests;
        default:
            return 0;
    }
}

// Use prepared statement to insert data into hotel_bookings table
$query = "INSERT INTO hotel_bookings (Username, hotel_name, check_in, check_out, guests, room_type, total_price) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($con);

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'ssssisd', $username, $hotel_name, $check_in, $check_out, $guests, $room_type, $total_price);
    mysqli_stmt_execute($stmt);

    // Check if the data was successfully inserted for hotel booking
    if (mysqli_stmt_affected_rows($stmt) > 0) {
         echo "<script>alert('Your hotel booking is successful. Your total fare is: $total_price');";
    echo "window.location='Hotel_Bookings.php';</script>";
    } else {
        echo "<script>alert('Error: Unable to book hotel.');</script>"; // Show error message
    }

    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('Error: " . mysqli_error($con) . "');</script>"; // Show error message
}

mysqli_close($con);
?>