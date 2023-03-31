<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
    <script src="javascript.js"></script>
    <style>
    body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
    }
    
    form {
        margin: 0 auto; /* Center the form horizontally */
        width: 50%; /* Set the width of the form */
        padding: 20px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    input[type="text"], input[type="submit"] {
        padding: 10px;
        /* border: none; */
        border-radius: 5px;
    }
    
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }
    
    label {
        display: block;
        margin-bottom: 10px;
    }
    
    #custalert, #loanalert {
        display: none;
        color: red;
    }
    
    .error {
        border: 1px solid red;
    }
</style>
</head>
<body>
    <form onsubmit="return(validate2())">
        <label for="custid">Enter Customer ID</label>
        <input type="text" name="custid" id="custid"  onchange="checkcustid()" onmouseleave="checkcustid()"> <span id="custalert">CustId required</span><br><br>
        <label for="loanid">Enter Loan ID</label>
        <input type="text" name="loanid" id="loanid"  onchange="checkloanid()" onmouseleave="checkloanid()"> <span id="loanalert">LoanId required</span><br><br>
        <input type="submit">
    </form>
</body>
</html>