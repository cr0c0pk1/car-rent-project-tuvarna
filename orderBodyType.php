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
                <h1>Cars Ordered By Body Type</h1>
            </div>
        </div>
        <div class="dark-overlay2"></div>
    </section>

    <section class="sectionPadding">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-centered">
<?php
    $sqlSelect = "SELECT marka.marka, model.model, avtomobil.cena, vid.vid_avt, slujitel.ime_s, naem.data, vid.id_vid
    from carrent.naem 
    join carrent.slujitel
    on naem.id_slujitel = slujitel.id_slujitel
    join carrent.avtomobil 
    on naem.id_avt = avtomobil.id_avt
    join carrent.vid 
    on avtomobil.id_vid = vid.id_vid
    join carrent.model
    on avtomobil.id_model = model.id_model
    join carrent.marka
    on model.id_marka = marka.id_marka
    order by vid.id_vid, naem.data";

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
                                <li><i class="fa fa-info"></i><?php echo $result['ime_s'];?></li>
                                <li><?php echo $result['data'];?></li>
                            </ul>
                            <a href="#"><button class="carsBtn"><span>Rent </span></button></a>
                        </div>
                    </div>
                </div>
        <?php }} ?>
            </div>
        </div>
    </section>

    <?php include("footer.html") ?>
</body>
</html>