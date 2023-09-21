<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];
    $code = $_POST['Code'];  

       $username = stripcslashes($username);  
        $password = stripcslashes($password);
        $code = stripcslashes($code);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
        $code = mysqli_real_escape_string($con, $code);  

        $sql = "select *from hlogin where user_name = '$username' and password = '$password' and code='$code'";
        $ty="select type from hlogin where user_name='$username' and password='$password' and code='$code'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'organ_donation');
            $query = "SELECT * from hospital where code='$code'";
            $query_run = mysqli_query($connection,$query);
            $row=mysqli_fetch_array($query_run);
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            $_SESSION['code']=$code;
            $_SESSION['hospital_ID']=$row['Hospital_ID'];
            header("location: Hhome.php"); 
        }  
        else{  
            echo '<script language="javascript">';
            echo 'alert("WRONG CREDENTIALS! Please Go Back to Login Page.")';
            echo '</script>';
            
        }     
?>  
      