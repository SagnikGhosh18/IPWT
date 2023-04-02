<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="bank"><h1 id="bankName">ABC BANK LOAN MANAGEMENT</h1></div>
    <div>
    <h3>(All fields are mandatory)</h3>
    <form>
        <label for="cusid">Customer Id</label>
        <input type="text" id="cusid" name="cusid" /><br><br>
        <label for="loanid">Loan Id</label>
        <input type="text" id="loanid" name="loanid" /> <br><br>
        <input type="button" value="View Loan" id="button" onclick="return(validate())" />
    </form>
</div>
</body>
</html>

