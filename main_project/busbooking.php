<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="journey/project.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <h2 class="mb-4 mt-5 text-center ">Search Your Trip</h2>
    <form">
      <div class="row justify-content-center mt-5 ">
        <div class="col-md-3 mb-3 mt-5">
          <input type="text" class="form-control" placeholder="From">
        </div>
        <div class="col-md-3 mb-3 mt-5">
          <input type="text" class="form-control" placeholder="To">
        </div>
        <div class="col-md-3 mb-3 mt-5">
          <input type="date" class="form-control">
        </div>
        <div class="col-md-2 mb- mt-5">
          <!-- Button to trigger modal -->
          <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#bookingModal">
            Search
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- Booking Modal -->
  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="bookingModalLabel">Book Your Seat</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="book.php" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
              <label for="contact" class="form-label">Contact</label>
              <input type="text" class="form-control" name="contact" required>
            </div>
            <div class="mb-3">
              <label for="seats" class="form-label">Number of Seats</label>
              <input type="number" class="form-control" name="seats" min="1" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Confirm Booking</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>