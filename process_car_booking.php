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

// Sanitize and validate other input data for car booking
$pickup = mysqli_real_escape_string($con, $_POST['pickup']);
$dropoff = mysqli_real_escape_string($con, $_POST['dropoff']);
$pickup_date = mysqli_real_escape_string($con, $_POST['pickup_date']);
$days = intval($_POST['days']);
$car_type = $_POST['car_type'];

// Calculate total price based on car type and number of days for car booking
$total_price = calculateTotalPrice($car_type, $days);

// Function to calculate total price based on car type and days for car booking
function calculateTotalPrice($car_type, $days) {
    $basePrice = 50; // Base price per day
    switch ($car_type) {
        case 'compact':
            return $basePrice * $days;
        case 'midsize':
            return $basePrice * 1.5 * $days;
        case 'luxury':
            return $basePrice * 2 * $days;
        default:
            return 0;
    }
}

// Use prepared statement to insert data into car_rentals table
$query = "INSERT INTO car_rentals (Username, pickup, dropoff, pickup_date, days, car_type, total_price) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($con);

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'ssssisd', $username, $pickup, $dropoff, $pickup_date, $days, $car_type, $total_price);
    mysqli_stmt_execute($stmt);

    // Check if the data was successfully inserted for hotel booking
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "<script>alert('Your Car rental is successful. Your total fare is: $total_price');";
    echo "window.location='Car_rentals.php';</script>";
    } else {
        echo "<script>alert('Error: Unable to book a car.');</script>"; // Show error message
    }

    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('Error: " . mysqli_error($con) . "');</script>"; // Show error message
}

mysqli_close($con);
?>
