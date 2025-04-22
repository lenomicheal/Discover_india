<?php
   include 'connect.php';

   if(isset($_POST['bookTicket'])){
      $fullName=$_POST['fullName'];
      $phoneNo=$_POST['phoneNo'];
      $destination=$_POST['destination'];
      $price=$_POST['price'];
      $calendar=$_POST['calendar'];
      $noPerson=$_POST['noPerson'];
   

      $insertQuery="INSERT INTO tourbooking(fullName,phoneNo,destination,price,calendar,noPerson)
                        VALUES ('$fullName','$phoneNo','$destination','$price','$calendar','$noPerson')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
    }      
?>