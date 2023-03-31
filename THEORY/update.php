<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="bankdb";

    $conn=mysqli_connect($servername, $username, $password, $dbname);
    
    $emi=$_GET["emi"];
    $tenure=$_GET["tenure"];
    $custid=$_GET["custid"];
    
    $sql="UPDATE loan SET EMI=" . $emi . "," . "Tenure=" . $tenure . " WHERE Customer_ID='" . $custid . "';";

    $result=mysqli_query($conn, $sql);
    echo 1;

?>