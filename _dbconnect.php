<?php
$server = "localhost:3306";
$username = "root";
$password = "";
$database = "project";

$conn = mysqli_connect($server,$username,$password,$database);
if ($conn){
    echo "";
}
else{
    die("Error". mysqli_connect_error());
}
?>