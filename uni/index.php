

<?php include 'connection.php';?>
<?php include 'Database.php';?>
<?php include 'format.php';?>
<?php
$db = new Database ();
$fm = new format ();
?>

<!DOCTYPE html>
<html lang="en">
    <head>




  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="key browse">
  <meta name="keywords" content="jquery, pagination, javascript, plugin" />
  <meta name="author" content="Luís Almeida">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <link rel="stylesheet" href="css/style-njoftime.css">
  <link rel="stylesheet" type="text/css" href="css/njoftime.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/popup.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <script src="js/jquery-2.2.3.min.js"></script> 
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/highlight.pack.js"></script>
  <script src="js/jPages.js"></script>


<script>

  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>

  <script>
  /* Kur dokumenti eshte gati  */
  $(function(){

    /* initiate plugin */
    $("div.holder").jPages({
      containerID : "itemContainer",
      keyBrowse   : true
    });

  });
  </script>

  <style type="text/css">


  /* Style per butonat para pas per ndryshimin e njoftimeve */
  .holder {
    margin: 15px 0;
    text-align: center;
  }

  .holder a {
    font-size: 12px;
    cursor: pointer;
    margin: 0 5px;
    color: #333;
  }

  .holder a:hover {
    background-color: #222;
    color: #fff;
  }

  .holder a.jp-previous { margin-right: 15px; }
  .holder a.jp-next { margin-left: 15px; }

  .holder a.jp-current, a.jp-current:hover {
    color: #FF4242;
    font-weight: bold;
  }

  .holder a.jp-disabled, a.jp-disabled:hover {
    color: #bbb;
  }

  .holder a.jp-current, a.jp-current:hover,
  .holder a.jp-disabled, a.jp-disabled:hover {
    cursor: default;
    background: none;
  }

  .holder span { margin: 0 5px; }
  </style>

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
  background: url(img/loader/Preloader_3.gif) center no-repeat #fff;
}
</style>

    </head>

    <body>

<div class="se-pre-con"></div>
<!-- Menu -->
        <div class="header">
            <div class="menu">
                <img src="logo/utLogo.png" class="logo">
                <div class="logo-name">Universiteti I Tiranes</div>
                <div class="menu-container">
                    <ul>
                        <li><a  href="Login form 2/" target="_blank" id="">Login</a></li>
                        <li><a href="#">Orari</a></li>
                        <li><a href="#kontakt" class="smoothScroll">Kontakt</a></li>
                        <li><a href="#njoftime" class="smoothScroll">Njoftime</a></li>
                        <li><a href="#depart" class="smoothScroll">Departamentet</a></li>
                        <li><a href="#top" class="smoothScroll">Menu</a></li>
                    </ul>
                </div>
            </div>
        </div>

  <div class="container" id="top">
    <div class="form1">
      <div class="left-form"></div>
    </div>
    <div class="form2">
      <div class="description-title">Fakulteti I Shkencave Te Natyres</div>
      <div class="description-body">Fakulteti i Shkencave të Natyrës (FSHN) 
        është qendra kryesore në Shqipëri për përgatitjen e specialistëve të lartë në
        informatikë, matematikë, fizikë, kimi, kimi ndustriale, biologji, bioteknologji. F
        SHN është gjithashtu institucion i rëndësishëm për përgatitjen e mësuesve për 
        shkollat e mesme në lëndët mësimore të matematikës, fizikës, kimisë, biologjisë 
        dhe informatikës në gjithë sistemin e shkollave të mesme në Shqipëri. FSHN ka një 
        staf akademik të brendshëm prej mbi 181 punonjësish, prej të cilëve mbi rreth 80 
        profesorë ose profesorë shoqërues. Ai drejtohet nga Dekani, i zgjedhur nga votimi 
        i drejteperdrejte i stafit akademik, jo akademik dhe studentet.</div>
    </div>






<div class="panel panel-default">
  <div class="department-desc"> Departamentet</div>
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="item active" >
                <div class="slidet">
                    <div class="dep-container"  id="depart">
                        <div class="dep-body">
                            <div class="departament">

                              <div class="slide-item">
                                <div class="item-logo">
                                  <img src="foto/departamentet/tik.png" class="ico">
                                </div>
                                <div class="item-description">
                                  <div class="dep-text">Departamenti I Informatikes</div>
                                </div>
                              </div>

                              <div class="slide-item">
                                <div class="item-logo">
                                  <img src="foto/departamentet/fizike.png" class="ico">
                                </div>
                                <div class="item-description">
                                  <div class="dep-text">Departamenti I Fizikes</div>
                                </div>
                              </div>

                              <div class="slide-item">
                                <div class="item-logo">
                                  <img src="foto/departamentet/kimi.png" class="ico">
                                </div>
                                <div class="item-description">
                                  <div class="dep-text">Departamenti I Kimise</div>
                                </div>
                              </div>

                              <div class="slide-item">
                                <div class="item-logo">
                                  <img src="foto/departamentet/biologji.png" class="ico">
                                </div>
                                <div class="item-description">
                                  <div class="dep-text">Departamenti I Biologjise</div>
                                </div>
                              </div>

                            </div>
                        </div>
                    </div>                
                </div>
            </div>

            <div class="item " >
                <div class="slidet">
                    <div class="dep-container"  id="depart">
                        <div class="dep-body">
                            <div class="departament">

                              <div class="slide-item">
                                <div class="item-logo">
                                  <img src="foto/departamentet/ekonomi.png" class="ico">
                                </div>
                                <div class="item-description">
                                  <div class="dep-text">Departamenti I Ekonomise</div>
                                </div>
                              </div>

                              <div class="slide-item">
                                <div class="item-logo">
                                  <img src="foto/departamentet/math.png" class="ico">
                                </div>
                                <div class="item-description">
                                  <div class="dep-text">Departamenti I Matematikes</div>
                                </div>
                              </div>

                              <div class="slide-item">
                                <div class="item-logo">
                                  <img src="foto/departamentet/biotech.png" class="ico">
                                </div>
                                <div class="item-description">
                                  <div class="dep-text">Departamenti I Bioteknolog.</div>
                                </div>
                              </div>

                              <div class="slide-item">
                                <div class="item-logo">
                                  <img src="foto/departamentet/kimiab.png" class="ico">
                                </div>
                                <div class="item-description">
                                  <div class="dep-text">Departamenti I Kimise Ind.</div>
                                </div>
                              </div>

                            </div>
                        </div>
                    </div>                
                </div>
            </div>

        </div>

         <!--butonat e slideshow-->   <br><br>
        <ol class="carousel-indicators" style="color:black">
          <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example" data-slide-to="1"></li>
        </ol>
         <!--PREVIUS-NEXT BUTTONS-->
         <a class="left carousel-control arrow" href="#carousel-example" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
         <a class="right carousel-control arrow" href="#carousel-example" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
         </a>    
</div>


</div>

    </div>









<!-- 


<!-- Departamentet -- Slide Show -->
<!-- <div id="depart">
    <br><br><br>
    <div class="title-dep" >Departamentet</div>
    <br>

<div class="panel panel-default">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="item active" >
                <div class="slidet">
                    <div class="dep-container" >
                        <div class="dep-body">
                            <div class="departament">
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/1.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/1.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/1.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/1.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>


            <div class="item">
                <div class="slidet">
                    <div class="dep-container" id="depart">
                        <div class="dep-body">
                            <div class="departament">
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/2.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/2.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/2.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/2.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>


             <div class="item">
                <div class="slidet">
                    <div class="dep-container" id="depart">
                        <div class="dep-body">
                            <div class="departament">
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/3.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/3.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/3.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                                <div class="dep"><a href="#" target="_blank"><img src="img/slideshow/3.jpg" alt="sasasa" style="width:178px;height:198px;border-radius:4px;position:relative" /></a></div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>

    </div>      
</div>


</div> -->


        <!-- Njoftimet -->
  <div class="dim1">
    <div class="dim2">
        <div class="njoftime-container" id="njoftime">
            <br><br><br>
            <div class="title-dep">Njoftime</div>
            <br>
          





 <div id="contenti" class="defaults">


      <!-- Butonat e paginimit -->
      <div class="holder"></div>

             <ul id="itemContainer">
             <!--faqet-->  
            <?php
               $query = "select * from njoftimet ORDER BY id DESC";
               $post = $db->select($query);
               if($post){
                   while($result = $post->fetch_assoc()){
          
            ?>
                   <div class="njoftim-body">              
                      <div class="njoftim-img">
                          <a href="post.php?id=<?php echo $result['id'];?>"><img src="foto/upload/<?php echo $result['foto'];?>" class="img"> </a>
                      </div> 
                      <div id="njoftim-date">
                         <?php echo $fm->formatDate($result['data']);?><br>
                      </div>
                          
                       <div id="njoftimi" >
                         <div class="njoftim" action="">
                            <a href="post.php?id=<?php echo $result['id'];?>"><?php echo $fm->titulli ($result['titulli']);?></a>
                         </div> 
                          <p class="desc">
                            <?php echo $fm->meshume ($result['pershkrimi']);?>
                          </p>
                        </div> 
                        <div id="more">
                            <a href="post.php?id=<?php echo $result['id']; ?>">Me  Shume</a>
                       </div>
                   
                </div>

                <?php } ?> 
               
       
      <?php } else {
          echo'<div class="skanjoftim" > Nuk ka Njoftime</div>';
      
      
       }?>

              </ul>
        </div>
        </div>
        </div>




 </div>
  </div>





















































































        <div class="kontakt-container" id="kontakt">
            <br><br>
            <div class="contact">
                <div class="info-contact">
                  <div class="contact-title">Rreth Nesh <hr></div>
                  <div class="contact-desc">Fakulteti i Shkencave të Natyrës (FSHN) është qendra kryesore në 
                    Shqipëri për përgatitjen e specialistëve të lartë në informatikë, matematikë, fizikë, 
                    kimi, kimi ndustriale, biologji, bioteknologji. F SHN është gjithashtu institucion i 
                    rëndësishëm për përgatitjen e mësuesve për shkollat e mesme në lëndët mësimore të matematikës, 
                    fizikës, kimisë, biologjisë dhe informatikës në gjithë sistemin e shkollave të mesme në Shqipëri. <br><br>
                    FSHN ka një staf akademik të brendshëm prej mbi 181 punonjësish, 
                    prej të cilëve ...
                  </div>
                </div>
                <div class="info-page">
                  <div class="contact-title">Njoftime <hr></div>
                  <div class="contact-desc">


                    <ul id="itemContainer" style="
    margin-left: 0px;
    padding-left: 0px;
    margin-top: 0px;
    text-align: -webkit-auto;
    overflow: hidden;
    height: 227px;">
             <!--faqet-->  
            <?php
               $query = "select * from njoftimet ORDER BY id DESC";
               $post = $db->select($query);
               if($post){
                   while($result = $post->fetch_assoc()){
          
            ?>
                   <div>              
                         <?php echo $fm->formatDate($result['data']);?>
                            <a style="text-decoration:none;color:#999;" href="post.php?id=<?php echo $result['id'];?>"><?php echo $fm->titulli ($result['titulli']);?></a> 
                </div>

                <?php } ?> 
               
       
      <?php } else {
          echo'<div class="skanjoftim" > Nuk ka Njoftime</div>';
      
      
       }?>

              </ul>


                  </div>
                </div>
                <div class="contact-form">
                  <div class="contact-title">Na Kontaktoni <hr></div>
                  <div class="contact-desc">
                      <input type="text" placeholder=" Emri" class="input">
                      <input type="text" placeholder=" E-Mail" class="input">
                      <textarea  rows="5" cols="50" placeholder=" Mesazhi"  class="message"></textarea>
                      <input type="submit" value="Dergo Mesazhin" class="button">
                  </div>
                </div>
            </div>
        </div>

        <div class="copyright-container">
          <div class="copyright">Copyright &copy; RBKS Team (Roland Doda - Bedri Allkja - Klodian Shaba - Skerdi Hila)</div>
        </div>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
<!-- skills -->

<!-- skills --> 
                             <!-- js -->
                <script src="js/jquery.tools.min.js"></script>
                <script src="js/jquery.mobile.custom.min.js"></script>
                <script src="js/jquery.cm-overlay.js"></script>
                <script>
                    $(document).ready(function(){
                        $('.cm-overlay').cmOverlay();
                    });
                </script>
<!-- js files -->




<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>

    <script src="js/bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            
                // var defaults = {
                // containerID: 'toTop', // fading element id
                // containerHoverID: 'toTopHover', // fading element hover id
                // scrollSpeed: 1200,
                // easingType: 'linear' 
                // };
            
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>

    </body>
</html>