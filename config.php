<?php
$conn = mysqli_connect('127.0.0.1','root','','zombie_bank');

if(!$conn)
{
die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}
?>