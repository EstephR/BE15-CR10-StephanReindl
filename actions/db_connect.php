<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "be15_cr_10_big_library_stephan_reindl";

$connect = mysqli_connect($hostname, $username, $password, $dbname);

//Check if connection works
// if ($connect) {
//     echo "Connection succeesful";
// } else {
//     die("connection failed". mysqli_connect_error());
// }
?>