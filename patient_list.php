<?php 
    session_start();
    $code = $_SESSION['hospital_ID'];
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
<form>
 <input type="button" value="Go back!" onclick="history.back()">
</form>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    
        <div class="wrapper wrapper--w790">
            <div class="card card-4">
                <div class="card-body">
                    <h1 class="title">List of Patient</h1>
                    
                    <table>
                <tr>
                    <th>Patient ID </th><br>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Blood group</th>
                    <th>Medical History</th>
                    <th>Doctor</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>  
                    <th>Phone No.</th>  
                </tr><br>
                <?php
                   $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'organ_donation');
                
                
                    $query = "SELECT * from patient where hospital_id='$code'";
                    $query_run = mysqli_query($connection,$query);
                    
                    while($row=mysqli_fetch_array($query_run)){
                        ?>
                             <tr>
                                 <td> <?php echo $row['Patient_ID'];?></td>
                                 <td> <?php echo $row['first_name'];?></td>
                                 <td> <?php echo $row['last_name'];?></td>
                                 <td> <?php echo $row['age'];?></td>
                                 <td> <?php echo $row['Blood_group'];?></td>
                                 <td> <?php echo $row['medical_history'];?></td>
                                 <td> <?php echo $row['doctor'];?></td>
                                  <td> <?php echo $row['area'];?></td>
                                  <td> <?php echo $row['city'];?></td>
                                  <td> <?php echo $row['state'];?></td>
                                  <td> <?php echo $row['postal'];?></td>
                                  <td> <?php echo $row['phone'];?></td>
                                  
                                 
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