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
            /* може да се добавя и изтрива само 1 кола !
             id-тата се довабят ръчно чрез кода, защото не са auto_increment */
            if (isset($_POST["buttonSubmit"]))
            {
                $make = $_POST["inputMake"];
                $model = $_POST["inputModel"];
                $idVehicleToInt = filter_input(INPUT_POST, 'inputId', FILTER_VALIDATE_INT);

                $sqlDeleteAvtomobil = "DELETE FROM carrent.avtomobil WHERE id_avt=$idVehicleToInt";
                $queryAvtomobil = $dbConn->query($sqlDeleteAvtomobil);

                $sqlDeleteMarka = "DELETE FROM carrent.marka WHERE id_marka=$idVehicleToInt'";
                $queryMarka = $dbConn->query($sqlDeleteMarka);

                $sqlDeleteVid = "DELETE FROM carrent.vid WHERE id_vid=$idVehicleToInt";
                $queryVid = $dbConn->query($sqlDeleteVid);

                $sqlDeleteModel = "DELETE FROM carrent.model WHERE model='{$model}'";
                $queryModel = $dbConn->query($sqlDeleteModel);
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

    <h2 class="dashboardLabel">Delete Vehicle</h2>

    <div class="vehicleInfo">
            <form method="post">
                <p class="formLabelText">Make</p>
                <input type="text" name="inputMake" required>
                <p class="formLabelText">Model</p>
                <input type="text" name="inputModel" required>
                <p class="formLabelText">id</p>
                <input type="text" name="inputId" required>
                <div class="formSubmit d-flex justify-content-center">
                    <button name="buttonSubmit" type="submit">Delete</button>
                </div>
            </form>
    </div>
</body>
</html>
<?php } ?>

