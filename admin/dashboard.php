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

    <h2 class="dashboardLabel">Dashboard</h2>

<?php
    $sqlSelect = "SELECT id_marka FROM carrent.marka";
    $resultSelect = $dbConn->query($sqlSelect);
    $vehicleCount = $resultSelect->num_rows;
?>

    <div class="dashboardInfo">
        <p class="phpText">Vehicles: <?php echo $vehicleCount; ?></p>
    </div>

<?php 
    $sqlSelect2 = "SELECT id_slujitel FROM carrent.slujitel";
    $resultSelect2 = $dbConn->query($sqlSelect2);
    $employeeCount = $resultSelect2->num_rows;
?>

    <div class="dashboardInfo" style="padding-top: 20px;">
        <p class="phpText">Employees: <?php echo $employeeCount; ?></p>
    </div>

<?php 
    $sqlSelect3 = "SELECT id_klient FROM carrent.klient";
    $resultSelect3 = $dbConn->query($sqlSelect3);
    $customerCount = $resultSelect3->num_rows;
?>

    <div class="dashboardInfo" style="padding-top: 40px;">
        <p class="phpText">Customers: <?php echo $customerCount; ?></p>
    </div>
</body>
</html>
<?php } ?>

