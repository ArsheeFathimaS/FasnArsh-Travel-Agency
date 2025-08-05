<?php
// Establish database connection
$con = mysqli_connect('localhost', 'root', '', 'travel_info'); // Update database credentials as needed

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sanitize and validate input data
$from = mysqli_real_escape_string($con, $_POST['from']);
$to = mysqli_real_escape_string($con, $_POST['to']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$passengers = intval($_POST['passengers']);
$class = mysqli_real_escape_string($con, $_POST['class']);
$username = mysqli_real_escape_string($con, $_POST['username']); // Added username

// Calculate fare based on class and passengers (optional, adjust as needed)
$fare = calculateFare($class, $passengers);

// Use prepared statement to insert data into flight_bookings table
$query = "INSERT INTO flight_bookings (Username, from_location, to_location, travel_date, passengers, class, fare) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($con);

if (mysqli_stmt_prepare($stmt, $query)) {
     
    mysqli_stmt_bind_param($stmt, 'ssssisd', $username, $from, $to, $date, $passengers, $class, $fare); // Updated bind_param
    mysqli_stmt_execute($stmt);
    

    // Check if the data was successfully inserted
    if (mysqli_stmt_affected_rows($stmt) > 0) {
         echo "<script>alert('Your flight booking is successful. Your total fare is: $fare');";
    echo "window.location='Flight_Bookings.php';</script>";
    } else {
        echo "<script>alert('Error: Unable to book flight.');</script>"; // Show error message
    }

    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('Error: " . mysqli_error($con) . "');</script>"; // Show error message
}

mysqli_close($con);

// Function to calculate fare based on class and passengers
function calculateFare($class, $passengers) {
    // Your fare calculation logic here
    $baseFare = 300; // Base fare per passenger
    switch ($class) {
        case 'economy':
            return $baseFare * $passengers;
        case 'business':
            return $baseFare * 2 * $passengers; // Example: Business class fare is twice the base fare
        case 'first':
            return $baseFare * 3 * $passengers; // Example: First class fare is three times the base fare
        default:
            return 0; // Default to zero if class is not recognized
    }
}
?>