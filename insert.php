<?php
$con = mysqli_connect('localhost','root','','surveyApp');


if(!$con){
    echo'Not connected to the server';
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //getting form input values
    $Email=$_REQUEST['Email'];
    $Tel=$_REQUEST['Tel'];
    $date=date('Y-m-d H:i:s');
    $line =$_SERVER['REMOTE_ADDR'];
     
    $sql="INSERT INTO `users`(`Email`, `Tel`, `Date`, `ipAddress` ) VALUES ('$Email','$Tel','$date', '$line')";
    $data = mysqli_query($con,$sql);
       if($data){
        echo "<h1>Thank you</h1>";
       }
    }
    else{
      echo "No";
    }
