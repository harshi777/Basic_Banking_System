<!doctype html>
<html>
    <head>
        <title>
            Transfer Money
        </title>
        <link rel="stylesheet" href="ts.css"/>
    </head>
    <body>
        <div class = "topnav">
            <a href = "TSB.html">Home</a>
            <a href = "customers.php">Customers</a>
            <a href = "TransferMoney.php">Transfer Money</a>
            <a href = "History.php">History</a>
        </div>
        <fieldset class="center">
            <form action ="update.php" method="post">
                Name : <input class = "a" type ="text" required><br>
                Email Id : <input class = "a" type ="text" required><br>
                Phone : <input class = "a" type="text" required><br>
                Account Number : <input type="text" required><br>
                Amount : <input type ="text" class = "a" name = "amnt" required><br>
                Customer:
                  <select class = "a" name="bn">
                    <option disabled selected name>-- Select Customer --</option>
                    <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'bank');
                        if ($mysqli->connect_error) {
                            die('Connect Error (' .
                                $mysqli->connect_errno . ') '.
                                $mysqli->connect_error);
                        }
                        $sql = "SELECT * FROM `customers`";
                        $result = $mysqli->query($sql);  
                        while($data = mysqli_fetch_array($result))
                        {
                            echo "<option value='". $data['PersonID'] ."'>" .$data['Name'] ."</option>";  // displaying data in option menu
                        }	
                        $mysqli->close();
                    ?>  
                  </select>
                <input type ="submit">
            </form>
        <button onclick ="ask()"> Cancel </button>
        </fieldset>
        <script>
            function ask()
            {
                var t = confirm("Cancel transaction ? ");
                if(t === true)
                {
                   reload();
                }
            }
         </script>
    </body>
</html>
