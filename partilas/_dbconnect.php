<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "billing";

$conn = mysqli_connect($server,$username,$password,$database);

if($conn)
{
    echo "<script>
    console.log('connected')</script>";
}else{
    die("Erroe". mysqli_connect_errot());
}

?>