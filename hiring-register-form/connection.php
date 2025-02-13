<?php

$username= "root";
$password= "";
$server= 'Localhost';
$db= 'newprojectdemo';

$con= mysqli_connect($server, $username, $password, $db);

if($con){
    echo "Connection Sucessfull";
}




?>