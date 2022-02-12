<?php

if(isset($_POST['Fname'])){
     $servername = "localhost";
    $username = "u746449810_nursingpoint";
    $password = "Nursingpoint@pomm2000";

    // Create connection
    $conn = new mysqli($servername, $username, $password,"u746449810_nursingpoint");
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
   
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $Amob = $_POST['Amob'];
    $yoe = $_POST['yoe'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $degree = $_POST['degree'];
    $college = $_POST['college'];
  
    $query = mysqli_query($conn, "INSERT INTO applications (Fname,Lname,email,mob,Amob,yoe,address1,address2,dob,city,state,zip,degree,college) VALUES ('$Fname','$Lname','$email','$mob','$Amob','$yoe','$address1','$address2','$dob','$city','$state','$zip','$degree','$college')") or die(mysqli_error($conn));
    if($query)
        echo "success";
   
}



?>