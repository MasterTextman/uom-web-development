<?php

session_start();

if(isset($_POST['purchase'])){
    $totalcost = $_POST['purchase'];
}
else{
    echo '<p> No items in cart found - redirecting to home page </p>';
    header("Refresh: 5;:http://$_SERVER[HTTP_HOST]/WebApplications/page-structures/frontPage.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SyneWave - Music Store For All Your Favourites">
    <meta name="author" content="The Syne Bros.">
    <title>SyneWave</title>
    <link rel="stylesheet" href="../stylesheets/styles.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../images/synewave_icon.png" />
</head>

<body id="purchasebody">
    <header id="navbar">
        <nav>
            <?php include "../includes/header.php"?>
        </nav>
    </header>

    <main id="purchasemain">
        
    <div id="purchase">
    <h1 class="pagetitle">Almost there!</h1>
    <p>We're soon there! Please input the required information to confirm your purchase order! An email will then be sent to you concerning your purchase order.</p>
        <form method="POST" action="http://127.0.0.1:8080/WebApplications/php-functions/emailing.php">
            <label>
                <div id="nam1">Full name: <input class="userinput"type="text" name="fullName" required></div>
                <div id="em2">Email: <input class="userinput" type="email" name="email" required></div>

                <input type="submit" style="font-weight: 800">
            </label>
        </form>
    </div>

    <!-- Breaks to leave space for footer-->
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    </main>

    <footer>
        <?php include "../includes/footer.php"?>
    </footer>
</body>