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

    <section class="findHeader">
        <div class="container">
            <div class="carsHeaderText">
                <h1>Find Cars By Body Type</h1>
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
    $bodyType = $_POST["findInputBodyType"];

    $sqlSelect = "SELECT  marka.marka, model.model, avtomobil.cena, vid.vid_avt, vid.id_vid
    FROM carrent.vid
    JOIN carrent.avtomobil
    ON vid.id_vid = avtomobil.id_vid
    JOIN carrent.model
    ON avtomobil.id_model = model.id_model
    JOIN carrent.marka
    ON model.id_marka = marka.id_marka
    WHERE vid_avt='{$bodyType}' ";

    $resultSelect = $dbConn->query($sqlSelect);
    if ($resultSelect -> num_rows > 0)
    {
        while ($result = $resultSelect->fetch_assoc())
        {
?>                  
                    <div class="carsListing col-centered">
                        <div class="carListingImg">
                            <img src="assets/images/vehicle<?php echo $result['id_vid']; ?>.jpg" alt="image" class="responsive">
                        </div>
                        <div class="carsInfo">
                            <h5><?php echo $result['marka'];?> <?php echo $result['model'];?></h5>
                            <p class="carPrice"><?php echo $result['cena'];?> BGN/PER DAY</p>
                            <ul>
                                <li><i class="fa fa-info"></i>AC</li>
                                <li><i class="fa fa-info"></i>Manual</li>
                                <li><i class="fa fa-info"></i>Insurance</li>
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