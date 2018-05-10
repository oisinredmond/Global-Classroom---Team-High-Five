


<html lang="en" >

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>Register</title>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" type="text/css" href="../css/temp2.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js" ></script>
<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<script type="text/javascript" src="../js/mySignupForm.js"></script>
	<link href="http://cdn.layoutit.com/css/app.min-af7c774190.css" rel="stylesheet">


</head>

<body class="fontbody" style="overflow:scroll; background-image : url(https://exp.cdn-hotels.com/hotels/2000000/1200000/1194500/1194461/61b5b4c0_z.jpg);background-repeat: no-repeat;;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; " >
	  <header>
        <a href="main.html" id="logo">
          <a href="index.php" title="juhee"><img class="site-logo"style="margin-left : 90px;max-height: 100px" src="//juuheeeee950625.xyz/wp-content/uploads/2018/04/hilton-logo-1.png" alt="juhee" /></a>

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
             <button class="dropbtn" onclick="location.href='offer.php'">OFFERS
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
         <a href = "offer.php">Links</a>
      </div>
      </div>
        <div class="dropdown">
           <button class="dropbtn" onclick="location.href='login.php'">LOGINN
</button>
</div>

</div>

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

		</div>
	</div>


  <form name="signUp" action="./memberSave.php" method="post" onsubmit="return checkSubmit()">
	  <div class="modal fade" id="layoutitModal" tabindex="-1" role="dialog" aria-labelledby="layoutitModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"></div>
		</div>
	</div>
<div class="signUpForm">
  <div id="login-page" class="row">
  <div class="col s12 z-depth-4 card-panel">
    <form class="login-form">
      <div class="row">
        <div class="input-field col s12 center">
          <h4>Register</h4>
          <p class="center">Join to our community now !</p>
        </div>

      </div>
			<div class="row margin">
		 <div class="input-field col s12">

		  </div>
		 </div>
		 
      <div class="row margin" style ="margin-top:30px">
        <div class="input-field col s12">
          <!-- <i class="mdi-social-person-outline prefix"></i> -->
          <i class="material-icons prefix">account_circle</i>
          <input id="username" name="username" type="text"/>
          <label for="username">User Name</label>
        </div>
      </div>
			<div class="row margin">
				<div class="input-field col s12">
					<!-- <i class="mdi-social-person-outline prefix"></i> -->
					<i class="material-icons prefix">local_phone</i>
					<input id="userPhone" name="userPhone" type="text"/>
					<label for="userPhone">Phone</label>
				</div>
			</div>
      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-social-person-outline prefix"></i> -->
          <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="email" style="cursor: auto;" />
          <label for="email">Email</label>
                  <div class="memberEmailAddressComment"></div>
        </div>
      </div>
			<div class="row margin">
				<div class="input-field col s12">
					<!-- <i class="mdi-action-lock-outline prefix"></i> -->
					<i class="material-icons prefix">person_add</i>
					<input id="userId" name="userId" type="text" />
					<label for="user_id">ID</label>
                        <div class="memberIdComment"></div>
				</div>
			</div>
      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-action-lock-outline prefix"></i> -->
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" name="password" type="password" />
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-action-lock-outline prefix"></i> -->
          <i class="material-icons prefix">vpn_key</i>
          <input id="password_a" name="password_a" type="password" />
          <label for="password_a">Password again</label>
              <div class="memberPw2Comment"></div>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <button type="submit" style="  background-color:#141b55 ;"class="btn waves-effect waves-light col s12">REGISTER NOW</button>

        </div>
        <div class="input-field col s12">
          <p class="margin center medium-small sign-up">Already have an account? <a href="./login">Login</a></p>
        </div>
      </div>


    </form>
  </div>
</div>
</form>
echo
<div class="formCheck">

		<input type="hidden" name="idCheck" class="idCheck" />
		<input type="hidden" name="pw2Check" class="pwCheck2" />
		<input type="hidden" name="eMailCheck" class="eMailCheck" />
</div>
</div>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js'></script>
<script type="text/javascript">
if(!NREUMQ.f){
  NREUMQ.f=function()
  {
    NREUMQ.push(["load",new Date().getTime()]);
    var e=document.createElement("script");
    e.type="text/javascript";
    e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";
    document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};
    NREUMQ.a=window.onload;window.onload=NREUMQ.f;};
    NREUMQ.push(["nrfj","bam.nr-data.net","0748fcde3e","2111746","M1ZVZxRUDRJZAE0IXgocdlASXAwPFwFMCF0AbEEASVwNBV0b",0,197,new Date().getTime(),"","","","",""]);
  </script>
<link rel="javascript" type="text/javascript" href="js/temp2.js">
</body>

</html>
