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

<body>

<header id="navbar">
    <nav>
        <?php include "../includes/header.php"?>
    </nav>
</header>

<main>

    <!-- TODO: Replace searchbar functionality with PHP code -->

    <!-- Using Bootstrap's Carousel code to create a carousel under the navigation bar. -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img class="first-slide" src="../images/BANNERGuitar1.png" alt="nogalaxy :(">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>The New Charlie CX9500</h1>
                        <p>Early 60% Off Deal</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Purchase</a></p>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="second-slide" src="../images/galaxyplaceholder.jpg" alt="not here :c">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>This is also a galaxy</h1>
                        <p>Hell yeah</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">PLACEHOLDER</a></p>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="third-slide" src="../images/galaxyplaceholder.jpg" alt="whoa">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Whoa this is cool</h1>
                        <p>Amazing my dude</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>

    <!-- TODO: Add content below the carousel -->

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

<!-- Added scripts necessary for site to function normally.
     Put near the bottom to make the website load more quickly. -->
<script>window.jQuery || document.write('<script src="../javascript/jquery.min.js"><\/script>')</script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../javascript/holder.min.js"></script>
<script src="../javascript/script.js"></script>
</body>

</html>