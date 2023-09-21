<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  

       $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  

        $sql = "select *from login where username = '$username' and password = '$password'";
        $ty="select type from login where username='$username' and password='$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            header("location: home.php"); 
        }  
        else{  
            echo '<script language="javascript">';
            echo 'alert("WRONG CREDENTIALS! Please Go Back to Login Page.")';
            echo '</script>';
            
        }     
?>  
      