<!DOCTYPE html>
    <html lang="en">

    <head>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Car Rent</title>
    </head>

    <body>
        <?php include("header.html") ?>
        
        <section class="contactHeader">
            <div class="container">
                <div class="carsHeaderText">
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="dark-overlay3"></div>
        </section>

        <section class="sectionPadding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-centered">
                        <div class="contactForm">
                            <form action="post">
                                <div class="formName">
                                    <input type="text" placeholder="Name" required>
                                </div>
                                <div class="formEmail">
                                    <input type="text" placeholder="Email" required>
                                </div>
                                <div class="formNumber">
                                    <input type="text" placeholder="Phone Number" required>
                                </div>
                                <div class="formMessage">
                                    <textarea name="message" cols="20" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="formSubmit d-flex justify-content-center">
                                    <button type="submit">Submit</button>
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