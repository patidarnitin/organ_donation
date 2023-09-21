<?php
session_start();
$servername='localhost';
$username='root';
$password='';
$dbname = "organ_donation";
try {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $medical_history = $_POST['medical_history'];
    $doctor = $_POST['doctor'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal = $_POST['postal'];
    $phone = $_POST['phone'];
    $Blood_group = $_POST['Blood_group'];
    $code=$_SESSION['hospital_ID'];
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO patient (first_name,last_name,age,medical_history,doctor,
   area,city,state,postal,phone,Blood_group,hospital_id)
    VALUES ('$first_name', '$last_name','$age','$medical_history','$doctor',
'$area','$city','$state','$postal','$phone','$Blood_group','$code')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>