<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>

<head>
    <title>Adukeade</title>
    <link rel="stylesheet" href="css/new.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body class="good">
    <?php include 'header.php'; ?>

    <?php
    $message = isset($_GET['msp']) ? $_GET['msp'] : '';
    $message = htmlentities($message, ENT_QUOTES, "UTF-8");
    echo $message;
    ?>
    <main>
        <section>
            <div class="f"><br>
                <h1 class="yeah">WELCOME TO ADUKEADE'S KITCHEN</h1>
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="content">
                                    <p>GOOD FOOD IS YOUR ESSENTIAL COMPANION TO EATING OUT, EATING IN AND EVERYTHING IN
                                        BETWEEN.
                                        @ADUKEADE'S KITCHEN... ONE TASTE YOU CANT RESIST.</p>
                                    <button class="btn1" onclick="redirectToMenu()">ORDER NOW</a></button>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-container">
                                    <img src="images/food.jpg" class="myImg" alt="" />
                                </div>
                            </div>

                        </div>
                    </div>
        </section>



    </main>
    <!-- <section class="center">


    </section> -->
    <?php include 'footer.php'; ?>

    <script>
        function redirectToMenu() {
            window.location.href = "menu.php"; // Redirects to menu.php
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>