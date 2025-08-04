<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="journey/trip.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script>
        function openTab(tabName) {
    const tabs = document.querySelectorAll('.form-section');
    const buttons = document.querySelectorAll('.tablink');

    tabs.forEach(tab => tab.classList.remove('active'));
    buttons.forEach(btn => btn.classList.remove('active'));

    document.getElementById(tabName).classList.add('active');
    event.target.classList.add('active');
  }
     </script>

</head>
<body>
    <nav class="navbar navbar-expand-sm   header">
        <div class="container-fuild ">
            <a href="#" class="navbar-brand">
                <h1>Travazo</h1>
                <h5>Travel more!! worry less</h5>
            </a>
        </div>
       <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="trip.php" class="nav-link text-menu">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a href="contact.php" class="nav-link text-menu">contact us</a>
                    </li>
                    <li class="nav-item ">
                        <a href="Register.php" class="nav-link text-menu">Register</a>
                    </li>
                     <li class="nav-item ">
                        <a href="Booking.php" class="nav-link text-menu">Booking </a>
                    </li>
                     <li class="nav-item ">
                        <a href="#" class="nav-link text-menu">Deshboard</a>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="container">
  <h2 style="text-align:center;">Book Your Journey</h2>

  <!-- Tabs -->
  <div class="tab-buttons">
    <button class="tablink active" onclick="openTab('train')">Train</button>
    <button class="tablink" onclick="openTab('bus')">Bus</button>
    <button class="tablink" onclick="openTab('flight')">Flight</button>
  </div>

  <!-- Train Form -->
  <div id="train" class="form-section active">
    <form>
      <input type="text" placeholder="From (e.g., Delhi)" required>
      <input type="text" placeholder="To (e.g., Jaipur)" required>
      <input type="date" required>
      <input type="number" placeholder="Passengers" required>
      <button class="book-btn">Book Train</button>
    </form>
  </div>

  <!-- Bus Form -->
  <div id="bus" class="form-section">
    <form>
      <input type="text" placeholder="From (e.g., Jaipur)" required>
      <input type="text" placeholder="To (e.g., Udaipur)" required>
      <input type="date" required>
      <input type="number" placeholder="Passengers" required>
      <button class="book-btn">Book Bus</button>
    </form>
  </div>

  <!-- Flight Form -->
  <div id="flight" class="form-section">
    <form>
      <input type="text" placeholder="From (e.g., Mumbai)" required>
      <input type="text" placeholder="To (e.g., Goa)" required>
      <input type="date" required>
      <input type="number" placeholder="Passengers" required>
      <button class="book-btn">Book Flight</button>
    </form>
  </div>
</div>

</body>

</html>
