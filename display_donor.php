<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "organ_donation";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
   

   $result = mysqli_query($conn,"select first_name,last_name,age,medical_history,doctor,address,address2,address3,phone,Blood_group,organ,status from donor d1 inner join organs d2 on d1.Donor_ID=d2.Donor_id");
   echo "<centre>";
echo "<h1>Display donor details</h1>";
echo "<hr/>";
echo "<table border='1'>
<tr>
                  <th>First Name  </th><br>
                    <th>Last Name</th>
                    <th>age</th>
                    <th>Medical History</th>
                    
                    <th>Blood Group</th>
                    <th>Organ</th>
                    <th>Status</th>
                    </tr>";
while ($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['first_name']."</td>";
     echo "<td>".$row['last_name']."</td>";
    echo "<td>".$row['age']."</td>";
     echo "<td>".$row['medical_history']."</td>";
    //  echo "<td>".$row['doctor']."</td>";
    // echo "<td>".$row['address']."</td>";
    // echo "<td>".$row['address2']."</td>";
    // echo "<td>".$row['address3']."</td>";
    // echo "<td>".$row['phone']."</td>";
    // <th>Doctor id</th>
                    // <th>Address</th>
                    // <th>Address2</th>
                    // <th>Address3</th>
                    // <th>Phone Number</th>
     echo "<td>".$row['Blood_group']."</td>";
    echo "<td>".$row['organ']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "</tr>";
}
echo "</tables>";
echo "</centre>";
mysqli_close($conn);
?>  