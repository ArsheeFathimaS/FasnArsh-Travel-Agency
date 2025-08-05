<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FasnArsh.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
       <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'Flight_Bookings.php' ? 'active' : ''; ?>">
          <a class="nav-link" href="Flight_Bookings.php">Flight Bookings</a>
        </li>
        <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'Hotel_Bookings.php' ? 'active' : ''; ?>">
          <a class="nav-link" href="Hotel_Bookings.php">Hotel Bookings</a>
        </li>
        <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'Car_rentals.php' ? 'active' : ''; ?>">
          <a class="nav-link" href="Car_rentals.php">Car Rentals</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
