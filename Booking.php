<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "organ_donation";
try {
    $First_name = $_POST['First_name'];
    $Last_name=$_POST['Last_name'];
    $Mobile=$_POST['Mobile'];
    $Email_add=$_POST['Email_add'];
    $App_Date=$_POST['App_Date'];
    $Hname = $_POST['Hname'];
    $Hid = $_POST['Hid'];
    $Area = $_POST['Area'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Code = $_POST['Code'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO booking_req (Hospital_ID,Hospital_name,Donor_first_name,Donor_last_name,Donor_mobile,Donor_email,Appointment_date,Donor_area,Donor_city,Donor_state,Donor_postal)
    VALUES ('$Hid','$Hname','$First_name', '$Last_name','$Mobile','$Email_add','$App_Date',' $Area','$City','$State','$Code')";
    $f=$conn->exec($sql);
    echo "Appoinment Booked Successfully";
    alert("Register Successfully Now you may login!!");
    // header("location: home.php"); 
    }
catch(PDOException $e)
    {
        echo "some wrong information is entered";
    }

$conn = null;
?>