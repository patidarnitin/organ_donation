<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "organ_donation";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
   

   $result = mysqli_query($conn,"Hospital_ID,Hospital_name,City,State");
   echo "<centre>";
echo "<h1>Display Hospital details</h1>";
echo "<hr/>";
echo "<table border='1'>
<tr>
                  <th>Hospital ID  </th><br>
                    <th>Hospital Name</th>
                    <th>City</th>
                    <th>State</th>
                    </tr>";
while ($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['Hospital_ID']."</td>";
    echo "<td>".$row['Hospital_name']."</td>";
    echo "<td>".$row['City']."</td>";
    //echo "<td>".$row['State']."</td>";
    echo "</tr>";
}
echo "</tables>";
echo "</centre>";
 mysqli_close($conn);
?>  