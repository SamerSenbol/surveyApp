<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //getting form input values
    $Email=$_POST['Email'];
    $Tel=$_POST['Tel'];
    $date=date('Y-m-d H:i:s');
    $line =$_SERVER['REMOTE_ADDR'];

    $con = mysqli_connect('localhost','root','','surveyapp');
    if(!$con){
      die("Database connection failed");
    }
  
    $sql="INSERT INTO `users`(`Email`, `Tel`, `Date`, `ipAddress` ) VALUES ('$Email', '$Tel' ,'$date' ,'$line')";
    $data = mysqli_query($con, $sql);
      if($data){
      header("Location: thanks.php"); /* Redirect browser */
      exit();
    }
    else{
    printf("Error message: %s\n", mysqli_error($con));
      echo "No";
    }
    
    $con->close();
}
