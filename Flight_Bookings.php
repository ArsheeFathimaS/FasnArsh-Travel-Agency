<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flight Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="jumbotron">
        <h1>Book Your Flight</h1>
        <p>Fill in the details below to book your flight.</p>
    </div>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="process_booking.php" method="post">
                    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="from">From:</label>
        <input type="text" class="form-control" id="from" name="from" required>
    </div>
    <div class="form-group">
        <label for="to">To:</label>
        <input type="text" class="form-control" id="to" name="to" required>
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="form-group">
        <label for="passengers">Passengers:</label>
        <input type="number" class="form-control" id="passengers" name="passengers" min="1" required>
    </div>
    <div class="form-group">
        <label for="class">Class:</label>
        <select class="form-control" id="class" name="class" required>
            <option value="economy">Economy</option>
            <option value="business">Business</option>
            <option value="first">First Class</option>
        </select>
    </div>
    <!-- Input field for username (if applicable) -->
    
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
