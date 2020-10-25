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
                $bodyType = $_POST["inputBodyType"];
                $price = $_POST["inputPrice"];
                
                $sqlInsertVid = "INSERT INTO carrent.vid(id_vid, vid_avt) VALUES(6, '$bodyType')";
                $queryVid = $dbConn->query($sqlInsertVid);

                $sqlInsertMarka = "INSERT INTO carrent.marka(id_marka, marka) VALUES(6, '$make')";
                $queryMarka = $dbConn->query($sqlInsertMarka);

                $sqlInsertModel = "INSERT INTO carrent.model(id_model, model, id_marka) VALUES(6, '$model', 6)";
                $queryModel = $dbConn->query($sqlInsertModel);

                $sqlInsertCena = "INSERT INTO carrent.avtomobil(id_vid, id_model, cena, id_avt) VALUES(6, 6, '$price', 6)";
                $queryCena = $dbConn->query($sqlInsertCena);
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

    <h2 class="dashboardLabel">Create Vehicle</h2>

    <div class="vehicleInfo">
            <form method="post">
                <p class="formLabelText">Make</p>
                <input type="text" name="inputMake" required>
                <p class="formLabelText">Model</p>
                <input type="text" name="inputModel" required>
                <p class="formLabelText">body Type</p>
                <input type="text" name="inputBodyType" required>
                <p class="formLabelText">price</p>
                <input type="text" name="inputPrice" required>
                <div class="formSubmit d-flex justify-content-center">
                    <button name="buttonSubmit" type="submit">Add</button>
                </div>
            </form>
    </div>
</body>
</html>
<?php } ?>

