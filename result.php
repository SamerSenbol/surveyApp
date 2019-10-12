<?php

include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        $sql="SELECT * FROM users;";
        $data = mysqli_query($con,$sql);
        if($data){
            echo  $data;
        }
        else{
        echo "No";
        }
    ?>
    
</body>
</html>