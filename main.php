<!DOCTYPE html>
<?php include 'dbConnect.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hilton Hotel || Dublin </title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href="ninja-slider.css" rel="stylesheet" type="text/css" />
        <script src="ninjaVideoPlugin.js" type="text/javascript"></script>
        <script src="ninja-slider.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <script type="text/javascript">
            var imagecount = 1;
            var total = 4;

            function slide(x) {
                var Image = document.getElementsByCID('img');
                imagecount = imagecount + 1;
                if (imagecount > total) { imagecount = 1; }
                if(imagecount < 1){ imagecount = total;}
                Image.src =".../img"+ imagecount +".jpg"
            }

            window.setInterval (function slideA() {
                var Image = document.getElementById('img');
                imagecount = imagecount + 1;
                if(imagecount > total){ imagecount = total;}
                Image.src = ".../img"+ imagecount +".jpg";
            }, 5000);

        </script>

    </head>
    
<body onload="slideA()">
    <header>
        <a href="main.html" id="logo">
            <h1>Hilton Hotel Dublin</h1>
            <h2>Best hotel in the city of Dublin</h2>
        </a>
        <nav>
            <ul>
                <li><a href="main.html" class="selected">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="offer.html">Offer</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </nav>

        <style>
            body {
                font: normal 0.9em Arial;
                margin: 0;
            }

            a {
                color: #1155CC;
            }

            ul li {
                padding: 10px 0;
            }

            /* --- override the ninja-slider.css settings --- */
            #ninja-slider {
                padding: 0 0;
            }

            /* --- Show pause/play button --- */
            #ninja-slider-pause-play {
                display: block;
                position: absolute;
                top: auto;
                bottom: 0;
                width: 64px;
                height: 64px;
                display: inline-block;
                background-image: url(img/navs.png);
                left: 0;
                background-position: 0 -128px;
            }

                #ninja-slider-pause-play.paused {
                    background-position: -64px -128px;
                }
        </style>
        <script>
            nsOptions.aspectRatio = "auto";
            nsOptions.effect = "fade";
            nslider.reload();
        </script>
    </header>

    <div>
        <div id='ninja-slider'>
            <ul>
                <li>
                    <div data-image="pic">
                        <h3 style="position:absolute;margin:0;width:100%;height:36px;line-height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(0,0,0,0.25);">
                            Welcome to the Hilton hotel dublin!
                    </div>
                </liv>
                 <li>
                    <div data-image="pic">
                        <h3 style="position:absolute;margin:0;width:100%;height:36px;line-height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(0,0,0,0.25);"> We put a bright smile on your face
</div>

                <li>
                    <div data-image="pic">
                        <h3 style="position:absolute;margin:0;width100%;height:36px;line-
                        height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(
                        0,0,0,0.25);">The best of the best holiday experience 
                    </div>
                </liv>
                <li>
                    <div data-image="pic">
                        <h3 style="position:absolute;margin:0;width:100%;height:36px;line-height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(0,0,0,0.25);"> A one you will never forget
                    </div>
        </div>
    </div>

      <div class="searchForm">
	  <h3 style = "text-align:center; color:#6172d8">Quick Search</h3>
        <form method = "post" action = "php/search_rooms.php">
		  <h3 style = "text-align:left; color:#6172d8; font-weight:normal"> No. of Adults</h3>
          <input type="number" name="quantityAdults" min="1" max="10" required>
		  <h3 style = "text-align:left; color:#6172d8; font-weight:normal">No. of Children</h3>
		  <input type="number" name="quantityChildren" min="0" max="10" required>
          <h3 style = "text-align:left; color:#6172d8; font-weight:normal">Check-in Date</h3>
		  <input type="date" name = "checkin" required>
		  <h3 style = "text-align:left; color:#6172d8; font-weight:normal">Check-out Date</h3>
          <input type="date" name = "checkout" required>
          <button type ="submit">Search Rooms</button>
        </form>
      </div>	 
		
        <div id="penguin">
            <section>
                <ul id="gallery">
                    <li>
                        <a href="pic">
                            <img src="pic" alt="">
                            <p>Hilton hotel 1</p>
                        </a>
                    </li>
                    <li>
                        <a href="pic">
                            <img src="pic" alt="">
                            <p>hilton hotel 2</p>
                        </a>
                    </li>
                    <li>
                        <a href="pic">
                            <img src="pic" alt="">
                            <p>hilton hotel 3</p>
                        </a>
                    </li>
                    <li>
                        <a href="pic">
                            <img src="pic" alt="">
                            <p>hilton hotel 4</p>
                        </a>
                    </li>
                </ul>
            </section>

            <footer>
                <p>&copy; 2017 High Five</p>
                <a href="http://twitter.com"><img src="twitter-wrap.png" height="50%" width="50%" alt="Twitter Logo" class="social-icon"></a>
                <a href="http://facebook.com"><img src="facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
            </footer>
        </div>
 
</body>
</html>
