<link rel="stylesheet" href="../stylesheets/carousel.css" />

<!-- Using Bootstrap's Carousel code to create a carousel under the navigation bar. -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <img class="first-slide" src="../images/BANNERGuitar1.jpeg" alt="nogalaxy :(">
            <div class="container">
                <div class="carousel-caption">
                    <h1>The New Yamaha SA2200</h1>
                    <p>Early 60% Off Deal</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Purchase!</a></p>
                </div>
            </div>
        </div>

        <div class="item">
            <img class="second-slide" src="../images/BANNERUkulele1.jpeg" alt="not here :c">
            <div class="container">
                <div class="carousel-caption">
                    <h1>The Cordoba 15TM</h1>
                    <p>Now on sale!</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Purchase!</a></p>
                </div>
            </div>
        </div>

        <div class="item">
            <img class="third-slide" src="../images/BANNERUkulele2.jpg" alt="whoa">
            <div class="container">
                <div class="carousel-caption">
                    <h1>The Kala Makala Waterman</h1>
                    <p>Water-proof ukulele!</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Check it out!</a></p>
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
