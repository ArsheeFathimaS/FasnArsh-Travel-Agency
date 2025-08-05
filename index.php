<html>
<head>
    <meta charset="UTF-8">
    <title>FasnArsh Travel Agency!</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
 <?php include'menu.php';?>
 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/la1.jpg" alt="Los Angeles" width="100%" height="85%">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chicago.jpeg" alt="Chicago" width="100%" height="85%">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/nyc.jpg" alt="New York" width="100%" height="85%">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 <section class="my-5">
     <div class="py-5">
         <h2 class="text-center">About Us</h2>
     </div>
     <div class="container-fluid">
     <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
           <img src="images/fasars.jpg" class="img-fluid aboutimg">
         </div>
       <div class="col-lg-6 col-md-6 col-12">
    <h1 class="display-4">We are FasnArsh.</h1>
    <p class="py-3" style="font-size: 20px;">Our mission is to be the leading and most trustworthy travel management company that sets the standard for professionalism, reliability, and transparency for its customers.</p>
    <a href="#" class="#"></a>
</div>
         
     </div>
     </div>
 </section>
 <section class="my-5">
     <div class="py-5">
         <h2 class="text-center">Our Services</h2>
     </div>
     <div class="container-fluid">
        <div class="row"> 
        <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
  <img class="card-img-top" src="images/booking.jpg" alt="Card image">
  <div class="card-body serviceimg">
    <h4 class="card-title">Flight Bookings</h4>
    <p class="card-text">Enjoy your safe and comfortable journey.</p>
     <a href="Flight_Bookings.php" class="btn btn-success">Know More.</a>
  </div>
</div>
            
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
  <img class="card-img-top" src="images/hotel.jpg" alt="Card image">
  <div class="card-body serviceimg">
    <h4 class="card-title">Hotel Bookings</h4>
    <p class="card-text">Indulge in a truly luxurious experience during your stay.</p>
    <a href="Hotel_Bookings.php" class="btn btn-success">Know More.</a>
  </div>
</div>
            
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
  <img class="card-img-top" src="images/car1.jpg" alt="Card image">
  <div class="card-body serviceimg">
    <h4 class="card-title">Car Rentals</h4>
    <p class="card-text">Experience luxury on wheels with our premium car rentals.</p>
    <a href="Car_rentals.php" class="btn btn-success">Know More.</a>
  </div>
</div>
            
        </div>
        </div>
         
     </div>
    </section>
    <section class="my-5">
     <div class="py-5">
         <h2 class="text-center">Our Gallery</h2>
     </div>
     <div class="container-fluid">
     <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g1.jpg" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g6.jpeg" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g4.jpg" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g2.jpg" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g9.jpg" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g3.jpg" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g8.jpg" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g5.jpg" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g7.jpg" class="img-fluid pb-4">
         </div>
         </div>
        </div>
    </section>
    <section class="my-5">
     <div class="py-5">
         <h2 class="text-center">Register for a Call back!</h2>
     </div>
     <div class="w-50 m-auto">
         <form action="user_info.php" method="post">
             <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                <label>Email_Id</label>
                <input type="text" name="Email" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                <label>Phone no.</label>
                <input type="text" name="Phone" autocomplete="off" class="form-control">
             </div>
             
             <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="Comments">
                    
                </textarea>
             </div>
             <button type="submit" class="btn btn-success">Submit</button>
         </form>
     </div>
    </section>
    <footer>
        <h4 class="p-3 bg-dark text-white text-center">@FasnArshtravels. Contact: +91 9176395921</h4>
    </footer>
   
    
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>