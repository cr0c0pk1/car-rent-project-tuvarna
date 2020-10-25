<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        require("config.php");
        if(strlen($_SESSION["adminlogin"]) == 0)
        {	
            echo "<script type='text/javascript'> window.location.href = 'index.php'; </script>";
        }
        else
        {
            $sqlSelect = "SELECT slujitel.ime_s, slujitel.tel_s, poziciq.poziciq, slujitel.id_slujitel
            FROM carrent.slujitel
            JOIN carrent.poziciq
            ON slujitel.id_poz = poziciq.id_poz";

            $resultSelect= $dbConn->query($sqlSelect);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom style -->
    <link rel="stylesheet" type="text/css" href="assets/css/adminStyle.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
    crossorigin="anonymous">
    <!-- FontAwesome -->
    <script src="https://use.fontawesome.com/d472af4436.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Admin Dashboard</title>
</head>
<body>
    
    <?php include("adminHeader.php"); ?>
    <?php include("sidebar.php"); ?>

    <h2 class="dashboardLabel">Manage Employee</h2>

    <div class="dashboardInfo">
        <?php 
            echo "<table border=1>";
            echo "<tr><th>Име</th> <th>Телефон</th><th>Позиция</th> <th>ID</th></tr>";

            if ($resultSelect->num_rows > 0)
            {
                while($row = $resultSelect->fetch_assoc())
                {
                    echo "<tr><td>".$row['ime_s']."</td><td>".$row['tel_s']."</td><td>".$row['poziciq']."</td><td>".$row['id_slujitel']."</td>";
                }
            }
            else 
            {
                echo "0 results";
            }

            echo "</table>";
        ?>
    </div>
</body>
</html>
<?php } ?>

