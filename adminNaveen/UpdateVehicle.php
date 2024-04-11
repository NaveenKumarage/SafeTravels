<?php 
require "connection.php";
session_start();

$vehicle_No = $_POST["vehicleNo"];
$Engine_No = $_POST["Engine_No"];
$Chasis_No = $_POST["Chasis_No"];



    Database::iud("UPDATE `vehicle` SET  `Engine_No` = '".$Engine_No."', `Chasis_No` = '".$Chasis_No."' 
    WHERE `Vehicle_No` = '".$vehicle_No."' ");

    echo("Update Success");

?>