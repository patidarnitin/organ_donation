<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    
    <title>Organ Donation</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    
    <style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w790">
            <div class="card card-4">
                <div class="card-body">
                <h2 class="title"> Accepted Booking List</h2>
                    
                    <table>
                <tr>
                    <th>Hospital_name</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Mobile</th>
                    <th>Email Address</th>
                    <th>Date</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal</th>
                    
                    
                </tr><br>
                <?php
                   $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'organ_donation');
                
               
                    $HID=$_SESSION['hospital_ID'];
                    $query = "SELECT *from booking_req where Hospital_ID='$HID' and status='Accept'";
                    $query_run = mysqli_query($connection,$query);
                    
                    while($row=mysqli_fetch_array($query_run)){
                        ?>
                             <tr>
                                  <td> <?php echo $row['Hospital_name'];?></td>
                                  <td> <?php echo $row['Donor_first_name'];?></td>
                                  <td> <?php echo $row['Donor_last_name'];?></td>
                                  <td> <?php echo $row['Donor_mobile'];?></td>
                                  <td> <?php echo $row['Donor_email'];?></td>
                                  <td> <?php echo $row['Appointment_date'];?></td>
                                  <td> <?php echo $row['Donor_area'];?></td>
                                  <td> <?php echo $row['Donor_city'];?></td>
                                  <td> <?php echo $row['Donor_state'];?></td>
                                  <td> <?php echo $row['Donor_postal'];?></td>
                                  
                                               
                                 
                </tr>
                           <?php
                    }
                
                       ?>
                
            </table>
                </div>
            </div>
        </div>
    </div>

    

</body>
</html>
<!-- end document-->