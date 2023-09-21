
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datepicker.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

    <body>
      <form action="Booking.php" method="post">
      <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Book You Slot Now and Save your time</h1>
                        <h2>For Help Call : +189-123-000</h2>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointemnt</h2>
                        </div>
                        <div class="form-body">
                            <div class="row form-row">
                              <input type="text" placeholder="Enter First name" class="form-control" name="First_name">
                            </div>
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Last name" class="form-control" name="Last_name">
                            </div>
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Mobile Number" class="form-control" name="Mobile">
                            </div>
                             <div class="row form-row">
                              <input type="text" placeholder="Enter Email Adreess" class="form-control" name="Email_add">
                            </div>
                           <div class="row form-row">
                              <input id="date" type="date" placeholder="Appointment Date" class="form-control" name="App_Date">
                            </div>
                            <div class="row form-row">
                              <input id="dat" type="hidden" placeholder="Hname" class="form-control" name="Hname" value="<?php echo $_GET['Hname']?>">
                            </div>
                            <div class="row form-row">
                              <input id="dat" type="hidden" placeholder="Hid" class="form-control" name="Hid" value="<?php echo $_GET['Hid']?>">
                            </div>
                            <h6>Address Details</h6>

                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter Area" class="form-control"  name="Area">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter City" class="form-control"  name="City">
                                </div>
                            </div>
                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter State" class="form-control"  name="State">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Postal Code" class="form-control" name="Code">
                                </div>
                            </div>

                             <div class="row form-row">

                               <input  class="btn btn-success btn-appointment" type="submit" value="Book Appointment" /> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
</form>
    </body>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>

    <script>
      $(document).ready(function(){
          $("#dat").datepicker();
      })
    </script>
    
  </body>
</html>