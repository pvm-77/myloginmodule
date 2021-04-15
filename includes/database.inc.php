<?php
$server="localhost";
$myusername="root";
$password="zmq12345";
$dbname="loginmodule";

//create connecton

$con=mysqli_connect($server,$myusername,$password,$dbname);
if(!$con){
    die("could not connect to internet".mysqli_connect_error());
}


?>