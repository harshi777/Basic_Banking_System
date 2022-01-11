<?php
    $user = 'root';
    $password = '';
    $database = 'bank';
    $servername='localhost';
    $mysqli = new mysqli($servername, $user, $password, $database);
    if ($mysqli->connect_error) {
        die('Connect Error (' .
            $mysqli->connect_errno . ') '.
            $mysqli->connect_error);
    }
    $sql = "SELECT * FROM `transactions`";
    $result = $mysqli->query($sql);
    $mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Customer Details</title>
        <link rel="stylesheet" href="tstyle.css"/>
    </head>
    <body>
        <div class = "topnav">
            <a href = "TSB.html">Home</a>
            <a href = "customers.php">Customers</a>
            <a href = "TransferMoney.php">Transfer Money</a>
            <a href = "History.php">History</a>
        </div>
        <section>
            <h1>HISTORY</h1>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Amount</th>
                </tr>

                <?php 
                    while($rows=$result->fetch_assoc())
                    {
                        ?>
                        <tr>
                            <td><?php echo $rows['Name'];?></td>
                            <td class = 'e'><?php echo $rows['Email'];?></td>
                            <td> &#x20B9 <?php echo $rows['Amount'];?></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </section>
    </body>
</html>


