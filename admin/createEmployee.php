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
            /* може да се добавя и изтрива само 1 служител !
             id-тата се довабят ръчно чрез кода, защото не са auto_increment */
            if (isset($_POST["buttonSubmit"]))
            {
                $name = $_POST["inputName"];
                $phNumber = $_POST["inputNumber"];
                $position = $_POST["inputPosition"];
                
                $sqlInsertPos = "INSERT INTO carrent.poziciq(id_poz, poziciq) VALUES(6, '$position')";
                $queryPos = $dbConn->query($sqlInsertPos);

                $sqlInsertEmpl = "INSERT INTO carrent.slujitel(ime_s, id_poz, tel_s, id_slujitel) VALUES('$name', 6, '$phNumber', 6)";
                $queryEmply = $dbConn->query($sqlInsertEmpl);
            }
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

    <h2 class="dashboardLabel">Create Employee</h2>

    <div class="vehicleInfo">
            <form method="post">
                <p class="formLabelText">Name</p>
                <input type="text" name="inputName" required>
                <p class="formLabelText">Phone Number</p>
                <input type="text" name="inputNumber" required>
                <p class="formLabelText">Position</p>
                <input type="text" name="inputPosition" required>
                <div class="formSubmit d-flex justify-content-center">
                    <button name="buttonSubmit" type="submit">Add</button>
                </div>
            </form>
    </div>
</body>
</html>
<?php } ?>

