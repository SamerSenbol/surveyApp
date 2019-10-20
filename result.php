<?php
include "./includes/html-start.php";
include_once 'db.php';
?>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Nu</th>
            <th>Email</th>
            <th>Tel</th>
            <th>Date</th>
            <th>Ip Address</th>
        </tr>
    </thead>
    <tbody>
        <?php   
        $sql = "SELECT * FROM users";
        $users = mysqli_query($con,$sql);

        while($row = mysqli_fetch_assoc($users)){
            $Nu       = $row['Nu'];
            $Email    = $row['Email'];
            $Tel      = $row['Tel'];
            $date     = $row['Date'];
            $line     = $row['ipAddress'];

            echo "<tr>";
            
            echo "<td>$Nu </td>";
            echo "<td>$Email </td>";
            echo "<td>$Tel</td>";
            echo "<td>$date</td>";
            echo "<td>$line</td>";

            echo "</tr>";
        }
        
        $con->close();
        ?>
    </tbody>
</table>
<?php
include "./includes/html-end.php";