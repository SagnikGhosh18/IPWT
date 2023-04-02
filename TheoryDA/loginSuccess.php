<?php

$cust=$_GET['cust'];
$loan=$_GET['loan'];

$con = mysqli_connect("localhost","root", "","bank");

$sql="SELECT * FROM loan WHERE Customer_Id='" . $cust . "' AND Loan_Id='" . $loan . "';";

$result=mysqli_query($con, $sql);

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
    <script src="index.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="bank"><h1>ABC BANK LOAN MANAGEMENT</h1></div>
<div>
    <form ><!--onsubmit="return(update())">-->
        <label for="customerid">Customer Id</label>
        <input type="text" name="customerid" id="customerid" readonly value=<?php echo $row["Customer_Id"]?>><br><br>
        <label for="loanId">Loan Id</label>
        <input type="text" name="loanId" id="loanId" readonly value=<?php echo $row["Loan_Id"]?>><br><br>
        <label for="loantype">Loan type</label>
        <input type="text" name="loantype" id="loantype" readonly value=<?php echo $row["Loan_Type"]?>><br><br>
        <label for="loanamt">Loan Amount</label>
        <input type="text" name="loanamt" id="loanamt" readonly value=<?php echo $row["Loan_Amount"]?>><br><br>
        <label for="emi">EMI</label>
        <input type="text" name="emi" id="emi" value=<?php echo $row["EMI"]?>><br><br>
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
        <input type="text" name="status" id="status" readonly value=<?php echo $row["Status"]?>><br>
        <br>
        <input type="button" value="Update Loan" id="button" onclick="return(updateDetails())">
    </form>
</div>
</body>
</html>