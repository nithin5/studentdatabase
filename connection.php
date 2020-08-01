<?php
$connection_mysql = mysqli_connect("localhost","nithin","nithin123","studentdb");

if (mysqli_connect_errno($connection_mysql)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{ }

mysqli_select_db($connection_mysql,"studentdb");

?>