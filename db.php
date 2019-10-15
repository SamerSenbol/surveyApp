<?php

$con = mysqli_connect('doitonline.se.mysql','doitonline_se_surveyapp','123456','doitonline_se_surveyapp');


if(!$con){
    die("Database connection failed");
}

//$con->close();