<?php

$con = mysqli_connect('localhost','root','','surveyApp');


if(!$con){
    echo'Not connected to the server';
}