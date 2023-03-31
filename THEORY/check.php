<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="bankdb";

    $conn=mysqli_connect($servername, $username, $password, $dbname);
    
    $cust=$_GET["custid"];
    $loan=$_GET["loanid"];
    
    $sql="SELECT * FROM loantable WHERE Customer_ID='" . $cust . "' AND Loan_ID='" . $loan . "';";

    $result=mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0)
    {
        echo 1;
    }

?>