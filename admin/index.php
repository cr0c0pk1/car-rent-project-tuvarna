<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        require_once("config.php");

        if (isset($_POST["buttonSubmit"]))
        {
            $Username = $_POST["inputUsername"];
            $Password = $_POST["inputPassword"];

            $sqlSelect = "SELECT username, password FROM carrent.admin WHERE username='{$Username}' and password='{$Password}'";
            $resultSelect = $dbConn->query($sqlSelect);
            if($resultSelect -> num_rows > 0)
            {
                $_SESSION["adminlogin"] = $_POST["inputUsername"];
                echo "<script type='text/javascript'> window.location.href = 'dashboard.php'; </script>";
            }
            else 
            {   
                echo "<script> alert('Wrong username/password'); </script>";
            }
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
    <title>Admin Login</title>
</head>
<body>
    <div class="loginPage bgImg">
        <div class="dark-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <h2 class="loginText">Sign In</h2>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 d-flex justify-content-center divStyle">
                    <div class="contactForm">
                        <form method="post">
                            <div class="formName">
                                <input type="text" name="inputUsername" placeholder="username" required>
                            </div>
                            <div class="formPass">
                                <input type="text" name="inputPassword" placeholder="password" requried>
                            </div>
                            <div class="formSubmit d-flex justify-content-center">
                                <button name="buttonSubmit" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</body>
</html>

