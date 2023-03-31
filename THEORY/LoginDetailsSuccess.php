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
    $row=mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="javascript.js"></script>
</head>
<body>
    <form onsubmit="return(update())">
        <label for="custid">Customer Id</label>
        <input type="text" name="custid" id="custid" readonly value=<?php echo $row["Customer_Id"]?>><br><br>
        <label for="loanid">Loan Id</label>
        <input type="text" name="loanid" id="loanid" readonly value=<?php echo $row["Loan_Id"]?>><br><br>
        <label for="loantype">Loan type</label>
        <input type="text" name="loantype" id="loantype" readonly value=<?php echo $row["Loan_Type"]?>><br><br>
        <label for="loanamount">Loan Amount</label>
        <input type="text" name="loanamount" id="loanamount" readonly value=<?php echo $row["Loan_Amount"]?>><br><br>
        <label for="emi">EMI</label>
        <input type="text" name="emi" id="emi" value=<?php echo $row["EMI"]?> onchange="checkrange()" onmouseenter="checkrange()" onmouseleave="checkrange()"> <span id="emialert">Enter valid EMI</span><br><br>
        <label for="tenure">Tenure</label>
        <select name="tenure" id="tenure">
            <option value="3" <?php if($row["Tenure"]==3) echo "selected"?>>3</option>
            <option value="6" <?php if($row["Tenure"]==6) echo "selected"?>>6</option>
            <option value="9" <?php if($row["Tenure"]==9) echo "selected"?>>9</option>
            <option value="12" <?php if($row["Tenure"]==12) echo "selected"?>>12</option>
            <option value="22" <?php if($row["Tenure"]==22) echo "selected"?>>22</option>
            <option value="24" <?php if($row["Tenure"]==24) echo "selected"?>>24</option>
        </select><br><br>
        <label for="status">Status</label>
        <input type="text" name="status" id="status" readonly value=<?php echo $row["status"]?>><br>
        <br>
        <input type="submit" value="Update Loan">
    </form>
</body>
</html>