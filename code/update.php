<?php 
$v = filter_input(INPUT_POST, 'amnt', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'bn', FILTER_SANITIZE_STRING);
$mysqli = new mysqli('localhost', 'root', '', 'bank');
$sql = "UPDATE `customers` c1 SET c1.Current_Balance = c1.Current_Balance + $v WHERE PersonID = $id;";
$mysqli->query($sql);
$sq = "SELECT * FROM `customers` WHERE PersonID = $id;";
if ($mysqli->query($sq)){
  $result = $mysqli->query($sq);
  $row = $result -> fetch_row();
  $n = $row[1];
  $e = $row[3];
  $s = "INSERT INTO `transactions` VALUES ('$n', '$e', $v);";
  $mysqli->query($s);
}
?>

<!doctype html>
<head>
    <title>
        Transaction Successful 
    </title>
    <style>
        h2{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 70px;
            font-weight: bold;
            color: black;
            margin-left: 300px;
        }
        img{
            margin-top: -70px;
            margin-left: 300px;
        }       
    </style>
</head>
<body>
    <h2> Transaction Successful </h2>
    <img onclick="location.replace('customers.php')" src="success.png">
</body>
</html>
 

