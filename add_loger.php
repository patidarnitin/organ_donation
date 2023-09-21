<?php
$username1 = $_POST['username'];
$password_1 = $_POST['password_1'];
$password_2= $_POST['password_2'];
$servername='localhost';
$username='root';
$password='';
$dbname = "organ_donation";
try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($password_1==$password_2)
    {
        $sql = "INSERT INTO login (username,password) VALUES ('$username1','$password_1')";
    $conn->exec($sql);
    echo "New record created successfully";
    header("location: index.php"); 
   
    }
    else
    {
        echo "Password doesn't match";
    }
    
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>