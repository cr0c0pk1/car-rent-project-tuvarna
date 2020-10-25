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
    <title>Find Cars</title>
</head>
<body>
    <?php include("header.html") ?>

    <section class="carsHeader">
        <div class="container">
            <div class="carsHeaderText">
                <h1>Cars Ordered By Rent Date</h1>
            </div>
        </div>
        <div class="dark-overlay2"></div>
    </section>

    <section class="sectionPadding">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-centered">
                    <div class="findForm">
                        <form action="showRentDate.php" method="post">
                            <input type="text" name="findInputCustomerName" placeholder="Customer Name" required>
                            <div class="formSubmit d-flex justify-content-center">
                                <button name="findSubmit" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.html") ?>
</body>
</html>