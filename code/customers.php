<?php
$user = 'root';
$password = '';
$database = 'bank';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
    $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') '.
        $mysqli->connect_error);
}
$sql = "SELECT * FROM `customers`";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Customer Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel ="stylesheet" href="tstyle.css"/>
</head>

<body>
<div class = "topnav">
    <a href = "TSB.html">Home</a>
    <a href = "customers.php">Customers</a>
    <a href = "TransferMoney.php">Transfer Money</a>
    <a href = "History.php">History</a>
</div>
<section>
    <h1>Customer Details</h1>
    <table id="mytable">
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Account number</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Current Balance (Rs.)</th>
        </tr>
        <?php 
        while($rows=$result->fetch_assoc())
        {
            ?>
            <tr>
                <td><?php echo $rows['PersonID'];?></td>
                <td class = 'e'><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['Account_num'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Phone'];?></td>
                <td> &#x20B9 <?php echo $rows['Current_Balance'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</section>
<script>
    let m = $('.e');
    for (let i = 0 ; i < m.length ; i++)
    {
            m[i].addEventListener('click', function (){
                var name = document.getElementById("mytable").rows[i+1].cells[1].textContent;
                var anum = document.getElementById("mytable").rows[i+1].cells[2].textContent;
                var mail = document.getElementById("mytable").rows[i+1].cells[3].textContent;
                var phone =document.getElementById("mytable").rows[i+1].cells[4].textContent;
                var cn = document.getElementById("mytable").rows[i+1].cells[5].textContent;
                sessionStorage.setItem("name",name);
                sessionStorage.setItem("anum",anum);
                sessionStorage.setItem("mail",mail);
                sessionStorage.setItem("phone",phone);
                sessionStorage.setItem("cn",cn);
                location.replace("view.php");
            });
            
    }
</script> 
</body>
</html>

