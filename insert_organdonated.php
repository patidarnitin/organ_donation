<?php

session_start();
$HID = $_SESSION['hospital_ID'];
// echo $_SESSION['hospital_id'];
$servername='localhost';
$username='root';
$password='';
$dbname = "organ_donation";
try {
    $patient_ID = $_POST['patient_ID'];
    $organ_ID = $_POST['organ_ID'];
    $date = $_POST['date'];
     $Status = $_POST['Status'];
    
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO transplants (patient_ID,organ,date,Status,hospital_id)
    VALUES ('$patient_ID', '$organ_ID','$date','$Status', '$HID')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>