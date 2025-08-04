
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

</head>

<body>
    <nav class="navbar navbar-expand-sm header ">
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
                        <a href="Register.php" class="nav-link text-menu">Deshboard</a>
                    </li>
            </ul>
        </div>
    </nav>
    <div class="back-image">
        <h1> Explor the world</h1>
            <div class="form-container">
                  <h2>Create Travel Booking Account</h2>
                  <form action="register.php" method="POST">
                         <label>User ID:</label>
                         <input type="text" name="userid" placeholder="Enter User ID" required>
        
                         <label>Full Name:</label>
                         <input type="text" name="fullname" placeholder="Enter Full Name" required>
        
                         <label>Email:</label>
                         <input type="email" name="email" placeholder="Enter Email" required>
        
                         <label>Password:</label>
                         <input type="password" name="password" placeholder="Enter Password" required>
        
                         <label>Phone Number:</label>
                         <input type="tel" name="phone" placeholder="Enter Phone Number" required>
        
                         <input type="submit" value="Register">
                  </form>
                
            </div>
    </div> 
    
          

</body>

</html>