<!DOCTYPE html>
<?php
session_start();

include './auth.php';
$re = mysqli_query($dbConnect,"SELECT * from users where User_id = '".$_SESSION['userID']."'  AND Password = '".$_SESSION['password']."' " );
echo mysqli_error($dbConnect);

if(mysqli_num_rows($re) > 0)
{
$name=$_SESSION['userID'];
}
else
{
session_destroy();
header("location: main.html");
}
 ?>

<html>
    <head>
        <meta charset="utf-8">
       <title>Hilton Hotel || Dublin</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
        <!--link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link href="ninja-slider.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../scss/normalize.css">
        <link rel="stylesheet" href="../scss/foundation.css">
        <link rel="stylesheet" href="../scss/style.css">
        <link rel="stylesheet" href="../scss/datepicker.css">
        <link href="../scss/datepicker.css" rel="stylesheet" type="text/css"/>
        <script src="ninjaVideoPlugin.js" type="text/javascript"></script>
        <script src="ninja-slider.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
          $(document).ready(function() {
         		$("#checkout").datepicker();
         		$("#checkin").datepicker({
         		minDate : new Date(),
         		onSelect: function (dateText, inst) {
                 var date = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);
                 $("#checkout").datepicker("option", "minDate", date);
         		}
         		});
           });
         </script>


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
    <header style="margin-top:0px">
        <a href="main.html" id="logo">
          <a href="main3.php" title="juhee"><img class="site-logo"style="margin-left : 90px;max-height: 100px" src="//juuheeeee950625.xyz/wp-content/uploads/2018/04/hilton-logo-1.png" alt="juhee" /></a>

        </a>

        <div style=" float: right;margin-top : 20px;margin-right: 20px;"class="navbar">
          <div class="dropdown">
             <button class="dropbtn" onclick="location.href='about.html'">ABOUT
             <i class="fa fa-caret-down"></i>
             </button>
         <div class="dropdown-content">
              <a href = "about2.php">Dublin Hilton</a>
             <a href = "qna.html">Q&A</a>
         </div>
      </div>
          <div class="dropdown">
             <button class="dropbtn" onclick="location.href='offer.html'">OFFERS
             <i class="fa fa-caret-down"></i>
             </button>
         <div class="dropdown-content">
              <a href = "roomInfo.php">Rooms</a>
             <a href = "facility.php">Facility</a>
         </div>
      </div>
      <div class="dropdown">
         <button class="dropbtn">ATTRACTIONS
         <i class="fa fa-caret-down"></i>
         </button>
      <div class="dropdown-content">
          <a href = "travel.php">Travel Site</a>
         <a href = "contact.html">Links</a>
      </div>
      </div>
          <div class="dropdown">
             <button class="dropbtn" onclick="location.href='myAccount.php'">Mypage
             <i class="fa fa-caret-down"></i>
             </button>
         <div class="dropdown-content">
              <a href = "signout.php">Logout</a>

         </div>
      </div>
</div>
<?echo $_SESSION['userID'];?>
<style>

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

    <div
        <div id='ninja-slider'style="background-color: white" >
            <ul>
                <li>
                  <div data-image="https://exp.cdn-hotels.com/hotels/2000000/1200000/1194500/1194461/61b5b4c0_z.jpg">
                      <h3 style="position:absolute;margin:0;width:100%;height:36px;line-height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(0,0,0,0.25);">
                          Welcome to the Hilton hotel dublin!
                  </div>
              </liv>
               <li>
                  <div data-image="../img/room3.jpg">
                      <h3 style="position:absolute;margin:0;width:100%;height:36px;line-height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(0,0,0,0.25);"> We put a bright smile on your face
                  </div>
              </liv>

                <li>
                    <div data-image="../img/relax.jpg">
                        <h3 style="position:absolute;margin:0;width100%;height:36px;line-height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(0,0,0,0.25);">The best of the best holiday experience
                    </div>
                </liv>
                <li>
                    <div data-image="../img/main2.jpg">
                        <h3 style="position:absolute;margin:0;width:100%;height:36px;line-height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(0,0,0,0.25);"> A one you will never forget
                    </div>
                </liv>
            </ul>
        </div>

</div>

 <table>
    <td>
      	<div class="large-4 columns blackblur fontcolor" style="margin-top:70px ; ">
      <div class="large-12 columns " >
      <p class="fontcolor"><b  class="fontcolor" >Check Date</b></p><hr style="background-color:#011449; font-color : white;  border:1px solid #011449; " class="line">
          <form name="form" action="../page2/checkroom.php" method="post" onSubmit="return validateForm(this);">
          <div class="row">

              <div class="large-6 columns" style="max-width:100%;">
                <label class="fontcolor" for="checkin">Check In
                  <input name="checkin" id="checkin" style="width:100%;"/>
                </label>
              </div>

              <div class="large-6 columns" style="max-width:100%;">
                <label class="fontcolor" for="checkout">Check Out
                  <input name="checkout" id="checkout" style="width:100%;"/>
                </label>


              </div>
          </div>

          <div class="row">

              <div class="large-6 columns">
                <label class="fontcolor">Adults

                    <select  name="totaladults" id="totaladults" style="width:100%;">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    </select>

                </label>
              </div>

              <div class="large-6 columns"  style="max-width:100%;">
                <label class="fontcolor">Children
                  <select  name="totalchildrens" id="totalchildrens" style="width:100%; color:black;">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  </select>
                </label>
              </div>


          </div>

            <div class="row">
            <div class="large-12 columns" >
              <button name="submit" href="#" class="button small fontslabo" style="background-color:#011449; width:100%;" >Check Availability</button>
            </div>
            </div>
          </form>
      </div>
</div>
    <h1 style = "color: #1e4979; " align = "middle" >The Hiltons </h1><img src="../img/hilton.jpg" alt="hilton" style=" width:700px; height: 400px;" class = "logo" ><p align = "middle"> Hilton Worldwide Holdings Inc., formerly Hilton Hotels Corporation, is an American multinational hospitality company that manages and franchises a broad portfolio of hotels and resorts. Founded by Conrad Hilton in 1919. As of 2013, about 70% of the rooms branded under Hilton were franchised to independent operators and companies. During its 2007–2013 ownership of Hilton, Blackstone Group pursued a strategy of predominantly expanding Hilton's reach through franchise agreements, while relatively few new properties were actually operated by Hilton. Hence, the proportion of franchised rooms grew significantly during this period. The practice of franchising is popular within the hospitality industry among most major hotel chains, as the parent company does not have to pay for the maintenance and overhead costs of franchised properties. Franchisees must follow strict brand standards in order to maintain a licensing agreement with Hilton. Many of Hilton's flagship properties, airport properties, and largest resorts, however, are corporately managed.

    <br><br>
    <form align  = "middle">
        <input class="button button1" type="button" value="Discover More" onclick="window.location.href='about.html'" />
    </form>
    </br></br>
</td>
</table>

<table>
    <td>
    <h1 style = "color: #1e4979; " align = "middle" ><img src="../img/din1.jpg" alt="dine" style=" float:left; width:700px; height: 400px;" align = "left"> Dine with us </h1>
    <p align = "middle"> The hotel restaurant is an old favourite reinvented as a Dublin steakhouse and seafood restaurant serving breakfast, lunch and dinner. It has two private dining rooms, available for private hire for lunch or dinner, both with their own unique style and decor. The hotel restaurant is an old favourite reinvented as a Dublin steakhouse and seafood restaurant serving breakfast, lunch and dinner. It has two private dining rooms, available for private hire for lunch or dinner, both with their own unique style and decor. At Hilton, dining options are designed with you in mind. Start the day with a hearty breakfast or nutritious light bite; savor innovative dishes prepared with only the freshest ingredients, or simply relax with a cup of coffee in the hotel lounge. From business brunches to pre-dinner drinks and everything in between, the options at Hilton are catered especially for you. For breakfast enjoy our extensive buffet. We inform you that the restaurant service may be occasionally moved to an adjacent room/space, depending on Hotel occupancy.

    <br><br>
    <form align  = "middle">
        <input class="button button1" type="button" value="Discover More" onclick="window.location.href='facility.html'" />
    </form>

    </br></br>
</td>
</table>

<table>
    <td>
    <h1 style = "color: #1e4979; " align = "middle" ><img src="../img/double.jpg" alt="double" style=" float:right; width:600px; height: 400px;" align = "right"> Rooms </h1>
    <p align = "middle"> Our rooms are designed with comfort and convenience in mind; providing a place to unwind or to catch up on work. You will immediately feel at home in these bright and airy rooms with large windows. Explore the various types of rooms, explore the amenities and choose the space that's right for you. Take the whole family to the historic city of Prague for an unforgettable adventure. Here at Hilton Prague, we have made it easier for you to ensure that you fully enjoy your family break. Enjoy the vast space of our 35m high, natural daylight Atrium to relax in the sofas and armchairs. Just one floor up is Café & Bistro with indoor terrace, the perfect place for relaxed moments with your family during lunch, dinner or afternoon tea and sweets. Have a stunning viewpoint over the city from our rooftop bar Cloud 9 and its outdoor terraces - kids are welcome with a wide range of nonalcoholic, fun to drink mocktails, accompanied by delicious finger food, marshmallows or ice cream.

    <br><br>
   <form align  = "middle">
        <input class="button button1" type="button" value="Discover More" onclick="window.location.href='room.html'" />
    </form>
    </br></br>
</td>
</table>



            <footer>
                <p>&copy; 2017 High Five</p>
                <a href="http://twitter.com"><img src="twitter-wrap.png" height="50%" width="50%" alt="Twitter Logo" class="social-icon"></a>
                <a href="http://facebook.com"><img src="facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
            </footer>


</body>
</html>
<script>
	function validateForm(form) {
		var a = form.checkin.value;
		var b = form.checkout.value;
		var c = form.totaladults.value;
		var d = form.totalchildrens.value;
			if(a == null || b == null || a == "" || b == "")
			{
			 alert("Please choose date");
			 return false;
			}
			if(c == 0)
			{
			 	if(d == 0)
				{
				 alert("Please choose no. of guest");
				 return false;
				}
			}
			if(d == 0)
			{
			 	if(c == 0)
				{
				 alert("Please choose no. of guest");
				 return false;
				}
			}

	}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57205452-1', 'auto');
  ga('send', 'pageview');

</script>
