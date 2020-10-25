<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once("config.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
    crossorigin="anonymous">
    <!-- FontAwesome -->
    <script src="https://use.fontawesome.com/d472af4436.js"></script>
    <title>Cars</title>
</head>
<body>
    <?php include("header.html") ?>

    <section class="carsHeader">
        <div class="container">
            <div class="carsHeaderText">
                <h1>Cars Ordered By Customers</h1>
            </div>
        </div>
        <div class="dark-overlay2"></div>
    </section>

    <section class="sectionPadding">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-centered">
<?php
if (isset($_POST["findSubmit"]))
{
    $date = $_POST["inputDate"];
    $dateTypeDate = date('Y-m-d', strtotime($date));

    $sqlSelect = "SELECT marka.marka, model.model, naem.data, naem.br_dni, avtomobil.cena, avtomobil.id_avt
    from carrent.naem
    join carrent.klient
    on naem.id_klient = klient.id_klient
    join carrent.avtomobil
    on naem.id_avt = avtomobil.id_avt
    join carrent.model
    on avtomobil.id_model = model.id_model
    join carrent.marka
    on model.id_marka = marka.id_marka
    where naem.data = '{$dateTypeDate}'
    order by klient.id_klient";

    $resultSelect = $dbConn->query($sqlSelect);
    if ($resultSelect -> num_rows > 0)
    {
        while ($result = $resultSelect->fetch_assoc())
        {
?>                  
                    <div class="carsListing col-centered">
                        <div class="carListingImg">
                            <img src="assets/images/vehicle<?php echo $result['id_avt']; ?>.jpg" alt="image" class="responsive">
                        </div>
                        <div class="carsInfo">
                            <h5><?php echo $result['marka'];?> <?php echo $result['model'];?></h5>
                            <p class="carPrice"><?php echo $result['cena'];?> BGN/PER DAY</p>
                            <ul>
                                <li><i class="fa fa-info"></i>AC</li>
                                <li><i class="fa fa-info"></i>Manual</li>
                                <li><i class="fa fa-info"></i>Insurance</li>
                                <li><?php echo $result['data'];?></li>
                                <li><i class="fa fa-info"></i>For <?php echo $result['br_dni'];?> Days</li>
                            </ul>
                            <a href="#"><button class="carsBtn"><span>Rent </span></button></a>
                        </div>
                    </div>
                </div>
        <?php }}} ?>
            </div>
        </div>
    </section>

    <?php include("footer.html") ?>
</body>
</html>