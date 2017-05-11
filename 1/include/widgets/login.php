<!DOCTYPE html>
<html>

  <head>

    <meta charset="UTF-8">
    <title>Login Screen</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <style>
            input[type=submit] {
    border-radius: 5px;
    font-family: Tahoma;
    background: ;
    /* Old browsers */
    background: -moz-linear-gradient(top, #78BEFF 1%, #ededed 100%);
    /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #78BEFF), color-stop(100%, #ededed));
    /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #78BEFF 1%, #ededed 100%);
    /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,#78BEFF 1%, #ededed 100%);
    /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #78BEFF 1%, #ededed 100%);
    /* IE10+ */
    background: linear-gradient(to bottom, #78BEFF 1%, #ededed 100%);
    /

}
    
    * {
  box-sizing: border-box;
  padding: 0 0 0 0;
  font-weight: 300;

}
body {
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  font-weight: 300;
  padding: 0 0 0 0;
  margin: 0 0 0 0;
}
body ::-webkit-input-placeholder {
  /* WebKit browsers */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  font-weight: 300;
}
body :-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  opacity: 1;
  font-weight: 300;
}
body ::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  opacity: 1;
  font-weight: 300;
}
body :-ms-input-placeholder {
  /* Internet Explorer 10+ */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  font-weight: 300;
}
.wrapper {
  background: #78BEFF ;
  background: -webkit-linear-gradient(top left, #F78181 0%, #78BEFF 100%);
  background: linear-gradient(to bottom right, #F78181 0%, #78BEFF 100%);
  position: absolute;
  left: 0;
  width: 100%;
  height: 110%;
  overflow: hidden;
  margin-top: -5%;
  padding-top:-5%;
}
.wrapper.form-success .container h1 {
  -webkit-transform: translateY(85px);
      -ms-transform: translateY(85px);
          transform: translateY(85px);
}
.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 80px 0;
  height: 400px;
  text-align: center;
  padding-top: 10%;
}
.container h1 {
  font-size: 70px;
  color:white;
  -webkit-transition-duration: 1s;
          transition-duration: 1s;
  -webkit-transition-timing-function: ease-in-put;
          transition-timing-function: ease-in-put;
  font-weight: 900;
}
form {
  padding: 20px 0;
  position: relative;
  z-index: 2;
}
form input {
  appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: rgba(255, 255, 255, 0.2);
  width: 350px;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
}
form input:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
form input:focus {
  background-color: white;
  width: 300px;
  color: #78BEFF;
}
form button {
  appearance: none;
  outline: 0;
  background-color: white;
  border: 0;
  padding: 10px 15px;
  color: #70A2FF;
  border-radius: 3px;
  width: 350px;
  cursor: pointer;
  font-size: 20px;
  font-weight: 100px;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
}
form button:hover {
  background-color: #f5f7f9;
}
.bg-bubbles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.bg-bubbles li {
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.15);
  bottom: -160px;
  -webkit-animation: circle 25s infinite;
  animation: circle 25s infinite;
  -webkit-transition-timing-function: linear;
  transition-timing-function: linear;
}
.bg-bubbles li:nth-child(1) {
  left: 10%;
}
.bg-bubbles li:nth-child(2) {
  left: 20%;
  width: 80px;
  height: 80px;
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
  -webkit-animation-duration: 17s;
          animation-duration: 17s;
}
.bg-bubbles li:nth-child(3) {
  left: 25%;
  -webkit-animation-delay: 4s;
          animation-delay: 4s;
}
.bg-bubbles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  -webkit-animation-duration: 22s;
          animation-duration: 22s;
  background-color: rgba(255, 255, 255, 0.25);
}
.bg-bubbles li:nth-child(5) {
  left: 70%;
}
.bg-bubbles li:nth-child(6) {
  left: 80%;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 3s;
          animation-delay: 3s;
  background-color: rgba(255, 255, 255, 0.2);
}
.bg-bubbles li:nth-child(7) {
  left: 32%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 7s;
          animation-delay: 7s;
}
.bg-bubbles li:nth-child(8) {
  left: 55%;
  width: 20px;
  height: 20px;
  -webkit-animation-delay: 15s;
          animation-delay: 15s;
  -webkit-animation-duration: 40s;
          animation-duration: 40s;
}
.bg-bubbles li:nth-child(9) {
  left: 25%;
  width: 10px;
  height: 10px;
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
  -webkit-animation-duration: 40s;
          animation-duration: 40s;
  background-color: rgba(255, 255, 255, 0.3);
}
.bg-bubbles li:nth-child(10) {
  left: 90%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 11s;
          animation-delay: 11s;
}
@-webkit-keyframes circle {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
            transform: translateY(-700px) rotate(600deg);
  }
}
@keyframes circle {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
            transform: translateY(-700px) rotate(600deg);
  }
}

/*FONT STYLE*/

@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 200;
  src: local('Source Sans Pro ExtraLight'), local('SourceSansPro-ExtraLight'), url(http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGAIasgMoEcVHo3r268QTaWo.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
}

@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 200;
  src: local('Source Sans Pro ExtraLight'), local('SourceSansPro-ExtraLight'), url(http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGJCDkYQxybH_Rl7Qv7ee2N4.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 200;
  src: local('Source Sans Pro ExtraLight'), local('SourceSansPro-ExtraLight'), url(http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGCVh0V6fR69OLaFLklYbiSk.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}

@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGD_j0nMiB9fPhg_k1wdK2h0.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
}

@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGDRVvBvQIc1z78c__uoBcyI.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGOode0-EuMkY--TSyExeINg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}

}
    </style>
       
    
    <script>
        window.console = window.console || function(t) {};
        window.open = function(){ console.log('window.open is disabled.'); };
        window.print = function(){ console.log('window.print is disabled.'); };
        if (false) {
            window.ontouchstart = function(){};
        }
    </script>
    
    <script src='js/jquery.js'></script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage('resize', "*");
        }
    </script>

    <script src="js/timeout.js"></script>
    <script>
        $('#login-button').click(function (event) {
            event.preventDefault();
            $('form').fadeOut(800);
            $('.wrapper').addClass('form-success');
        });

    </script>

</head>

<body>

    <div class="wrapper">
        <div class="container">
            
            <h1 style="font-size:xx-large">FACOS Hotel Reservation System</h1>

            <img src="../../img/Hotel Logo.png" width="350px" height="160px">

            <form class="form" action="login.php" method="post">
                <input type="text" name="email" placeholder="Email address" />
                <input type="password" name="password" placeholder="Password" />
                <button class="submit" name="submit" value="Login">Login</button><br/><br>
				<a style = "color:white;" href  = "recovery.php" >Change Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a style = "color:white;" href  = "signup.php" >Sign Up</a>
            </form>
        </div>

    <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        
    </div>


</body>

</html>
