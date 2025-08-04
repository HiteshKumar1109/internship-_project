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
  <script src="journey/script.js"></script>
    <div class="container-fluid mt-5 rounded-pill">
        <h1 class="text-center train-booking fs-9">  Train Booking </h1>
        <div class="container">
  <div class="booking-card">
   

    <form>
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">From</label>
          <input type="text" class="form-control" placeholder="Enter Departure City">
        </div>
        <div class="col">
          <label class="form-label">To</label>
          <input type="text" class="form-control" placeholder="Enter Destination City">
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Travel Date</label>
        <input type="date" class="form-control">
      </div>

      <div class="row mb-3">
        <div class="col">
          <label class="form-label">Class</label>
          <select class="form-select">
            <option>Sleeper (SL)</option>
            <option>AC 3 Tier (3A)</option>
            <option>AC 2 Tier (2A)</option>
            <option>AC First Class (1A)</option>
          </select>
        </div>
        <div class="col">
          <label class="form-label">Passengers</label>
          <input type="number" class="form-control" min="1" max="6" value="1">
        </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary px-5">Search Trains</button>
      </div>
    </form>
  </div>
</div>

</div>
<!--booking modal-->
        <div class="modal fade" id="bookingModal" tabindex="-1" aria-lebelledby="bookingModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">confirm booking</h5>
                <button type="buttom" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
              <input type="hidden" id="selectedTrainIndex">
              <div class="mb-3">
              <label for="PassengerName" class="form-label">PassengerName</label>"
              <input type="text" class="form-control" placeholder="Enter passenger name" id="passengername">
               </div>
            </div>
            <div class="modal-footer">
              <button type ="button" class="btn btn-primary" id="confirmBookingBtn">Confirm Booking</button>
            </div>"
          </div>
        </div>
        <!--ticket will be generated here-->
      <div class="container" id="ticketContainer" style="max-width:600px;"></div>

</body>
</html>
<?php
include("footer.php");
?>