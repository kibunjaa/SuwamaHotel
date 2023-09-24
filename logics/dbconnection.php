<?php
$server="localhost";
$username="root";
$password="";
$database="suwamaweb";

$conn=mysqli_connect($server,$username,$password,$database);

//check connection
if ($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
?>