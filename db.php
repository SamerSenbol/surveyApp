<?php

$con = mysqli_connect('localhost','root','','surveyApp');


if(!$con){
    die("Database connection failed");
}

//$con->close();