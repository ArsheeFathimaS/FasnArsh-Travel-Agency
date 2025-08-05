<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="jumbotron">
        <h1>Book Your Hotel</h1>
        <p>Fill in the details below to book your hotel stay.</p>
    </div>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="process_hotel_booking.php" method="post">
                       <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
                        <div class="form-group">
                            <label for="hotel_name">Hotel Name:</label>
                            <input type="text" class="form-control" id="hotel_name" name="hotel_name" required>
                        </div>
                        <div class="form-group">
                            <label for="check_in">Check-in Date:</label>
                            <input type="date" class="form-control" id="check_in" name="check_in" required>
                        </div>
                        <div class="form-group">
                            <label for="check_out">Check-out Date:</label>
                            <input type="date" class="form-control" id="check_out" name="check_out" required>
                        </div>
                        <div class="form-group">
                            <label for="guests">Number of Guests:</label>
                            <input type="number" class="form-control" id="guests" name="guests" min="1" required>
                        </div>
                        <div class="form-group">
                            <label for="room_type">Room Type:</label>
                            <select class="form-control" id="room_type" name="room_type" required>
                                <option value="single">Single Room</option>
<option value="double">Double Room</option>
<option value="suite">Suite</option>

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <h4 class="p-3 bg-dark text-white text-center">@FasnArshtravels. Contact: +91 9176395921</h4>
    </footer>
</body>
</html>
