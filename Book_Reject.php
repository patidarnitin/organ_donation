<?php      
    include('connection.php');  
    $ID = $_GET['BID'];
         
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'organ_donation');
            $query = "update booking_req set status='Reject' where ID='$ID'";
            $query_run = mysqli_query($connection,$query);
            header("location: Hhome.php"); 
         
        
?>  
      