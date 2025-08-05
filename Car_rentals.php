<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Rental Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="jumbotron">
        <h1>Book Your Car Rental</h1>
        <p>Fill in the details below to book your car rental.</p>
    </div>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="process_car_booking.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="pickup">Pickup Location:</label>
                            <input type="text" class="form-control" id="pickup" name="pickup" required>
                        </div>
                        <div class="form-group">
                            <label for="dropoff">Drop-off Location:</label>
                            <input type="text" class="form-control" id="dropoff" name="dropoff" required>
                        </div>
                        <div class="form-group">
                            <label for="pickup_date">Pickup Date:</label>
                            <input type="date" class="form-control" id="pickup_date" name="pickup_date" required>
                        </div>
                        <div class="form-group">
                            <label for="days">Number of Days:</label>
                            <input type="number" class="form-control" id="days" name="days" min="1" required>
                        </div>
                        <div class="form-group">
                            <label for="car_type">Car Type:</label>
                            <select class="form-control" id="car_type" name="car_type" required>
                                <option value="compact">Compact</option>
                                <option value="midsize">Midsize</option>
                                <option value="luxury">Luxury</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <h4  class="p-3 bg-dark text-white text-center">@FasnArshtravels. Contact: +91 9176395921</h4>
    </footer>
</body>
</html>
