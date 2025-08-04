

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="journey/project.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const loginForm = document.getElementById("loginform");
      const registerForm = document.getElementById("registerform");
      const loginLink = document.querySelector(".login");
      const registerLink = document.querySelector(".register");

      registerLink.addEventListener("click", function (e) {
        e.preventDefault();
        loginForm.style.display = "none";
        registerForm.style.display = "block";
      });

      loginLink.addEventListener("click", function (e) {
        e.preventDefault();
        registerForm.style.display = "none";
        loginForm.style.display = "block";
      });
    });
    </script>
  
</head>


<body>
  <nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-between bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand " href="#">
        <img src="image/logo.jpg" class="logo" alt="Logo">
        <h1> GHOOMOindia</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <button type="button" class="bg-primary fs-5 mt-2 rounded-pill " data-bs-toggle="modal" data-bs-target="#myModal">Login</button>
            <div class="modal" id="myModal">
              <div class="modal-dialog modal-dialog-center">
                <div class="modal-content">
                  <!--login form-->
                <div id="loginform">
                  <div class="modal-header"> 
                  
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    
                  </div>
                  
                  <div class="modal-body ">
                    <form method="post" action="registration.php">
                      <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control  custom-input" id="email" placeholder="" required>
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control  custom-input" id="password" placeholder="" required>
                      </div>
                      <button type="submit" class="btn btn-primary">Login</button>
                      <h6>Not a member <a href="#" class="register">Sign up</a></h6>
                    </form>
                  </div>
                </div>
                <!--register form-->
                <div id="registerform" style="display:none;">
                  <div class="modal-header">
                    <h5 class="modal-title">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="registration.php">
                      <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control custom-input" id="name" placeholder="Name" required>
                      </div>
                      <div class="mb-3">
                        <label for="emailRegister" class="form-label">Email address</label>
                        <input type="email" class="form-control custom-input" id="email" placeholder="Email" required>
                      </div>
                      <div class="mb-3">
                        <label for="contactRegister" class="form-label ">Contact</label>
                        <input type="contact" class="form-control custom-input" id="contact" placeholder="contact" required>
                      </div>
                      <div class="mb-3">
                        <label for="passwordRegister" class="form-label">Password</label>
                        <i class="fa fas-lock" id="togglePassword" style="cursor: pointer;"></i>
                        <input type="password" class="form-control custom-input" id="password" placeholder="Password" required>
                      </div>
                      <button type="submit" class="btn btn-primary">Register</button>
                      <h6>Already a member? <a href="#" class="login">Login</a></h6>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>