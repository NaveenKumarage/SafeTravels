<?php 
require "connection.php";

$ID = $_POST["Vid"];

Database::iud("UPDATE `claimrequest` SET `Status` = '2'  WHERE `ID` = '".$ID."' ");
echo("Approved Claim");


?>