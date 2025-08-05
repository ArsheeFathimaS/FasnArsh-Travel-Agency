<?php
$con = mysqli_connect('localhost', 'root', '', 'travel_info'); // Update the database name if needed

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_POST['user'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Comments = $_POST['Comments'];

$query = "INSERT INTO unserdata_info (user, Email, Phone, Comments) VALUES ('$user', '$Email', '$Phone', '$Comments')";

if (mysqli_query($con, $query)) {
    // Registration successful, show alert box with message and phone number
    echo "<script>alert('Your registration is successful. You will be contacted soon on your number: $Phone');";
    echo "window.location='index.php';</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>