<?php 

  session_start();

  if (isset($_SESSION['prusername'])) {
       echo ("<script language = 'javascript'>
                      window.alert('Ju jeni te kycur')
                      window.location.href='../../../app/profesor/'
             </script>");
       die();
      }
 ?>



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Profesor Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  

      <link rel="stylesheet" href="css/style.css">
      <script type="text/javascript" src="../../js/jquery-2.2.3.min.js"></script>
      <script>
  
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("fast");;
  });
</script>








  <style>

.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(../../img/loader/Preloader_3.gif) center no-repeat #fff;
}
</style>

  
</head>

<body>
<div class="se-pre-con"></div>

  <div class="cont">
     <div class="demo">
          <div class="login">
                <div class="login__check"></div>
                <form action="Login/Slogin.php" method="post" class="forma">
                  <div class=""><img src="img/logo-white.png" class="logo"></div>
                  <div class="logo-name">Fakulteti i Shkencave Te Natyres<br>Profesor Login</div>
                    <div class="login__form">
                      <div class="login__row">
                        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                          <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                        </svg>
                        <input type="text" class="login__input name kodiPerdoruesit" name="emri" placeholder="Kodi i perdoruesit"/>
                      </div>
                      <div class="login__row">
                        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                          <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <input type="password" class="login__input pass fjalekalimi" name="pass" placeholder="Fjalekalimi"/>
                      </div>
                      <button type="button" name="logimi" class="login__submit">Kycuni</button>
                  </form>
     </div>
  </div>
    
   <script src='http://code.jquery.com/jquery-1.12.4.js'></script>
  <script src='http://code.jquery.com/ui/1.12.0/jquery-ui.js'></script>

    <script src="js/index.js"></script>
    <script type="text/javascript">

          $(document).keypress(function(e) {
          if(e.which == 13) {
              $('.login__submit').click();
          }
      });

    </script>

</body>
</html>
