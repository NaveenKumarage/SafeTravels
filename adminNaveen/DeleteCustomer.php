<?php

require "../connection.php";
$nic = $_POST["NIC"];


$Vrs = Database::search("SELECT * FROM `vehicle` INNER JOIN `customer` ON
`vehicle`.`cus_nic` = `customer`.`NIC`   
WHERE `customer`.`NIC` = '" . $nic . "' "); 

$vdata = $Vrs->fetch_assoc();
$num = $Vrs->num_rows;

if ($num != 0) {
    Database::iud("DELETE FROM `vehicle` WHERE `Vehicle_No` = '" . $vdata["Vehicle_No"] . "'  "); 

    Database::iud("DELETE FROM `customer` WHERE `NIC` = '" . $nic . "'  ");
    echo ("Delete Success (vehicle and Customer)");
} else {
    Database::iud("DELETE FROM `customer` WHERE `NIC` = '" . $nic . "'  ");
    echo ("Delete  Success (Customer)"); 
}
