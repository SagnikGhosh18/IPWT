<?php

$emi=$_GET['emi'];
$tenure=$_GET['tenure'];
$cus=$_GET['cus'];

$con = mysqli_connect("localhost","root", "","bank");

$sql="UPDATE loan SET EMI=" . $emi . "," . "Tenure=" . $tenure . " WHERE Customer_Id='" . $cus . "';";

$result=mysqli_query($con, $sql);
echo 1;
?>