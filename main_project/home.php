<?php

include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="journey/project.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center blinking-text my-5">Welcome to GHOOMOindia</h1>
        <p class="text-center">Your one-stop solution for all travel needs. Book flights, trains, and buses with ease.</p>
        
    </div>
    <div class="container mt-5">
    <h1 class="text-center  ">Explore Some Places</h1>
    <!-- cities selection-->
    <div class="row justify-content-center mt-5">
      <div class="col-auto">
       <form class="d-flex" role="search">
        <input class="form-control-md custom-search-box  me-2 rounded p-3  rounded-pill" list="cities" placeholder="Search city..." aria-label="Search">
        <datalist id="cities">
          <option value="Delhi">
          <option value="Mumbai">
          <option value="Chennai">
          <option value="Kolkata">
          <option value="Bangalore">
          <option value="Hyderabad">
          <option value="Pune">
          <option value="Ahmedabad">
          <option value="Jaipur">
          <option value="Lucknow">
          <option value="Kanpur">
          <option value="Nagpur">
          <option value="Indore">
          <option value="Bhopal">
          <option value="Patna">
          <option value="Ranchi">
          <option value="Surat">
          <option value="Chandigarh">
          <option value="Amritsar">
          <option value="Varanasi">
        </datalist>
        <button class="btn btn-primary" type="submit">Search</button>
       </form>
      </div>
     </div>
    </div>
   <!--train bus and flight section-->
   <div class="container py-5 mt-5">
    
  <div class="row g-4 justify-content-center">

    <!-- Train Card -->
    <div class="col-md-4">
      <div class="card">
        <video src="video/video1.mp4" autoplay loop muted></video>
        <div class="card-body text-center">
          <h5 class="card-title">Train Booking</h5>
          <p class="card-text">Book your train tickets across India at affordable prices.</p>
          <a href="trainbooking.php" class="btn btn-primary btn-book">Book Now</a>
        </div>
      </div>
    </div>

    <!-- Bus Card -->
    <div class="col-md-4">
      <div class="card">
        <video src="video/video2.mp4" autoplay loop muted></video>
        <div class="card-body text-center">
          <h5 class="card-title">Bus Booking</h5>
          <p class="card-text">Find and book buses to your favorite destinations.</p>
          <a href="busbooking.php" class="btn btn-success btn-book">Book Now</a>
        </div>
      </div>
    </div>

    <!-- Flight Card -->
    <div class="col-md-4">
      <div class="card">
        <video src="video/video3.mp4" autoplay loop muted></video>
        <div class="card-body text-center">
          <h5 class="card-title">Flight Booking</h5>
          <p class="card-text">Book domestic flights with easy method.</p>
          <a href="flightbooking.php" class="btn btn-danger btn-book">Book Now</a>
        </div>
      </div>
    </div>

  </div>
 </div>
 <!-- addess section-->
  <?php
include("footer.php");
?>
   
</body>
</html>