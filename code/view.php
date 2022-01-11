<!DOCTYPE html>
<html lang="en">
<head>
    <title>Details</title>
    <link rel="stylesheet" href="vc.css"/>
</head>
<body>
<div class = "topnav">
    <a href = "index.php">Home</a>
    <a href = "customers.php">Customers</a>
    <a href = "TransferMoney.php">Transfer Money</a>
    <a href = "History.php">History</a>
</div>
<img src="cust.jpg">
<div class = "det">
    <h3>Name : <script> document.write(sessionStorage.getItem("name"));</script></h3>
    <h3>Account Number : <script> document.write(sessionStorage.getItem("anum"));</script></h3>
    <h3>Email : <script> document.write(sessionStorage.getItem("mail"));</script></h3>
    <h3>Phone : <script> document.write(sessionStorage.getItem("phone"));</script></h3>
    <h3>Current Balance : <script> document.write(sessionStorage.getItem("cn"));</script></h3>
</div>
</body>
</html>
