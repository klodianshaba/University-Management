<?php include 'orari/connection.php';?>
<?php include 'orari/phpsekretare.php';?>
<?php include 'orari/Querymenu.php';?>
<?php 


  if (!isset($_SESSION['prusername'])) {
       echo ("<script language = 'javascript'>
                      window.alert('Ju nuk jeni te loguar,ju lutem logohuni')
                      window.location.href='../../../uni/Login form 2/'
             </script>");
       die();
      }else if(isset($_SESSION['prusername'])){
       $GLOBALS['username'] = $_SESSION['prusername'];
      }else{
       echo "This page does not exist!!!!";
      }

 ?>


<?php
$user = $_SESSION['prusername'];
$query = "select * from profesoret where '$user'= Username ";
$post = $db->select($query);
if($post){
        $result = $post->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UT-FSHN</title>
    <link rel="stylesheet" type="text/css" href="style/profesor.css">
     <link rel="stylesheet" type="text/css" href="style/dropdown.css">
    <link rel="stylesheet" type="text/css" href="style/popup.css">
    <link rel="stylesheet" type="text/css" href="style/css.css">
     <link rel="stylesheet" type="text/css" href="style/njofti.css">

       <!--  Querymenu -->
        

            <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">






        <link rel="stylesheet" type="text/css" href="orari/orari.css">

        <style type="text/css">
            .select-boxes{width: 280px;text-align: center;}
            .drp {
                background-color: #354052;
               
                color: #fff;
                font-family: arial;
                font-weight: 100;
                font-size: 12px;
                height: 39px;
                padding: 7px 8px;
                width: 250px;
                outline: none;
              
            }
            select option{
                font-family: arial;
                font-size: 12px;
               
            }
            .shteti{
                display: inline-block;
            }
            .qyteti{
                display: inline-block;
            }
            body{
                background-color: #ebf1f5;
            }
        </style>

</head>
<body>
    <div class="horizontal-container" style="z-index: 1 !important;">
        <div class="left-nav" style="font-size: 16px;">
            Universiteti I Tiranes
        </div>
        <form class="" method="post" style="font-size: 16px;">
			<div class="right-nav">
				<div class="h-nav-mmenu">
					<img src="../img/account.png" class="account-icon"><a href="#" class="admin-btn"><?php echo ucfirst($result['Emri']);?> <?php echo ucfirst($result['Mbiemri']);?></a>
					<div class="submenu-dropdown">
						<a href="../">Profili</a>
						<a style="padding:0px"><input type="submit" name="dil" value="Dilni" style="width:30px;padding: 12px 20px;padding-right:80px;border:none"></a>
					</div>
				</div>
			</div>
		</form>
    </div>

    <div class="left-container" style="z-index: 7 !important;">

        <div class="logo-container" >
        <img src="../img/logo-fshn.png">
        </div>
        <div class="menu-container" style="margin-left:-10px;margin-top:0px;">
            <ul>
				<li class="tabs"><a href="#" style="padding-left:10px;">Te Dhenat</a> <span class="plus" id="plus9">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../"><img src="../img/sign.png" class="circle-icon-sm">Modifiko Te Dhenat</a></li>
                    </ul>
                </li>
                

       
                
                <li class="tabs"><a href="#">Plani Mesimor</a><span class="plus" id="plus5">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../plani mesimor/"><img src="../img/sign.png" class="circle-icon-sm">Plani Mesimor</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Nota</a> <span class="plus" id="plus6">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a  href="../shtonota/shtonota.php"><img src="../img/sign.png" class="circle-icon-sm">Vendos Nota</a></li>
                    </ul>
                </li>

				<li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../orari/" ><img src="../img/sign.png" class="circle-icon-sm">Shiko Orarin</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../njoftimet/"><img src="../img/sign.png" class="circle-icon-sm" id="ntf">Njoftimet</a></li>
                        <li><a href="shtonjoftim/shtonjoftim.php"><img src="../img/sign.png" class="circle-icon-sm" id="" >Shto Njoftim</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <?php  include '../Querymenu.php';?>

    <div class="right-container">
        <div>
           <div class="title-bar" style="width:100%; height: 33px;margin-top: -3.5%;"><div id="" style="padding-top: 10px;">Shiko Njoftimet Tuaja</div></div>
            <div class="bar-container" style=" min-height: 502px; margin-left: 20px;">
              
             

            
 <div id="contenti" class="defaults">


      <!-- Butonat e paginimit -->
      <div class="holder"></div>


                <ul id="itemContainer">
             <!--faqet-->  
             <?php
            
             $id_prof=$result['P_id'];

               $query = "SELECT * from njoftimet where id_autori='$id_prof'";
               $post = $db->select($query);
               if($post){
                   while($result = $post->fetch_assoc()){
          
                   ?>
                   
                   <div class="njoftimet1" style="-webkit-box-shadow: 0px 1px 4px 2px rgba(97,86,97,1);
                      -moz-box-shadow: 0px 1px 4px 2px rgba(97,86,97,1);
                      box-shadow: 0px 3px 4px 2px rgba(97,86,97,1);">

                            <div class="hija"> </div>
                            <div class="deletee" style="margin-left: 245px;">
                                 <a onclick=" return confirm ('jeni i sigurt per ta fshir noftimin ')" href="orari/phpsekretare.php?id=<?php echo $result['id'];?>"><img src="../img/delete.png" style="width:25px; position:absolute;"></a>
                            </div>
                            <div class="updatee">
                                  <a href="meshume/njoftimet.php?njofi=<?php echo $result['id'];?>"><img src="../img/update.ico" style="width:25px; position:absolute; margin-left: 215px;"></a>
                            </div>
                            <div class="njoftim3">

                                 <a href="meshume.php?njofi=<?php echo $result['id'];?>"><img src="../../../uni/foto/upload/<?php echo $result['foto'];?>" style="width:275px; height:110px;"> </a>
                             </div> 
                              <div id="njoftim2" style="color:black; margin-top: -10px;">
                             <h4><?php echo $fm->formatDate($result['data']);?> </h4><br>
                           </div>  <br>
                          
                           <div id="njoftim7" >
                           <div class="njoftim"  action="">

                                    <b><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $fm->titulli ($result['titulli']);?></a></b>
                            </div>  

                                 <h5 style="color:black; margin-left: 5px;"><?php echo $fm->meshume ($result['pershkrimi']);?></h5>
                           </div>   <br>

                        <div id="meshume" style="margin-top: 3px; z-index: 0 !important">
                            <a href="meshume/njoftimet.php?njofi=<?php echo $result['id']; ?>">Me  shume</a>
                       </div>
                   
                </div>

                <?php } ?>
            <br><br>
               
       
      <?php } else {
          echo'<div class="skanjoftim" style="margin-top:40px; color:black; margin-left:-20px; margin-top:-0px;" > Nuk ka Njoftime</div>';
      
      
       }?>

              </ul>
        </div>
        </div>
        </div>

 
  
    



        </div>
      </div>

    </div>

  
     <?php } ?>
  

  <script type="text/javascript" src="orari/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">


     $(function(){
        $('.tabs').on('click',function(){
        var $panel = $(this).closest('.tabs');
        var value = $panel.find('.submenu').attr('value');


        if (value == 'none') {
            $('.submenu').attr('value','none');
            $('.submenu').slideUp();
            $('.plus').css({transform:'rotate(90deg)'});
            $panel.find('.plus').css({transform:'rotate(45deg)'});
            $panel.find('.submenu').attr('value','block');
            $panel.find('.submenu').slideDown();
        }else if(value == 'block'){
            $panel.find('.plus').css({transform:'rotate(90deg)'});

            $panel.find('.submenu').slideUp();
            $panel.find('.submenu').attr('value','none');
        }


        });
    });


    </script>
</body>
</html>