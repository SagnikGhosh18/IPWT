<?php

$cust=$_GET['cust'];
$loan=$_GET['loan'];

$con = mysqli_connect("localhost","root", "","bank");

$sql="SELECT * FROM loan WHERE Customer_Id='" . $cust . "' AND Loan_Id='" . $loan . "';";

$result=mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0)
    {
        echo 1;
    }

?>