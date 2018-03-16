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
					<img src="../../img/account.png" class="account-icon"><a href="#" class="admin-btn"><?php echo ucfirst($result['Emri']);?> <?php echo ucfirst($result['Mbiemri']);?></a>
					<div class="submenu-dropdown">
						<a href="../../">Profili</a>
						<a style="padding:0px"><input type="submit" name="dil" value="Dilni" style="width:30px;padding: 12px 20px;padding-right:80px;border:none"></a>
					</div>
				</div>
			</div>
		</form>
    </div>

    <div class="left-container" style="z-index: 7 !important;">

        <div class="logo-container" >
        <img src="../../img/logo-fshn.png">
        </div>
        <div class="menu-container" style="margin-left:-10px;margin-top:0px;">
            <ul>
				<li class="tabs"><a href="#" style="padding-left:10px;">Te Dhenat</a> <span class="plus" id="plus9">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../../"><img src="../../img/sign.png" class="circle-icon-sm">Modifiko Te Dhenat</a></li>
                    </ul>
                </li>
                

       
                
                <li class="tabs"><a href="#">Plani Mesimor</a><span class="plus" id="plus5">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../../plani mesimor/"><img src="../../img/sign.png" class="circle-icon-sm">Plani Mesimor</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Nota</a> <span class="plus" id="plus6">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a  href="../nota/"><img src="../../img/sign.png" class="circle-icon-sm">Vendos Nota</a></li>
                    </ul>
                </li>

				<li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../../orari/"><img src="../../img/sign.png" class="circle-icon-sm">Shiko Orarin</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../"><img src="../../img/sign.png" class="circle-icon-sm" id="ntf">Njoftimet</a></li>
                        <li><a href="../shtonjoftim/shtonjoftim.php"><img src="../../img/sign.png" class="circle-icon-sm" id="" >Shto Njoftim</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <?php  include '../Querymenu.php';?>

    <div class="right-container">
        <div>
           <div class="title-bar" style="width:100%; height: 33px;margin-top: -4.25%;"><div id="" style="padding-top: 10px;">Shiko Njoftimin | Ndrysho</div></div>
            <div class="bar-container" style=" min-height: 502px; margin-left: 0px;">
              
             
          
<?php
if(isset($_GET['njofi'])){

  $id=$_GET['njofi'];

  $sql="select * from njoftimet where '$id'= id";
  $post = $db->select($sql);

  $_SESSION['id_njof']= $id;
  if($post){
      $result= $post->fetch_assoc();
         ?>
        <form action="orari/phpsekretare.php" name="computer" method="post">
            <div class="datetime"  >
                <h4>Data njoftimit <div id="" style="color:red; display: inline-block; font-size: 20px;"> *</div></h4>
                <input type="text" value="<?php echo $fm->formatDate($result['data']);?>" style="width:99%; height: 30px;  ">
                <br>
            </div><br><br>
            <div class="autori" >
                <h4>Autori njoftimit<div id="" style="color:red; display: inline-block; font-size: 20px;"> *</div></h4> <div id="errorau" style="color:red; font-size: 15px;" ></div>
                <input type="text" value="<?php echo $result['autori'];?>" name="autorinjoftim" style="width:99%; height: 30px; ">
            </div><br><br>
            <div class="titulli" >
                 <h4>Titulli <div id="" style="color:red; display: inline-block; font-size: 20px;"> *</div></h4><div id="errortit" style="color:red; font-size: 15px;"></div>
                 <input type="text" value="<?php echo $result['titulli'];?>"  name="titullinjoftim"  style="width:99%; height: 30px; display: inline-block;">
            </div><br><br><br>
            <div class="pershkrimi">
                 <h4>Pershkrimi <div id="" style="color:red; display: inline-block; font-size: 20px;"> *</div></h4><div id="errorpersh" style="color:red; font-size: 15px;"></div>
                 <textarea rows="10" cols="0"  name="pershkriminjoftim" style="width: 99%;  border:none;background-color: rgb(192, 199, 204);border-bottom: 1px solid;border-bottom-color:#A9A9A9;">
<?php echo $result['pershkrimi'];?>
                 </textarea><br><br><br>
            </div>
            <div class="ruajndryshimet">
                 <l> <input type="submit" name="updatenjoftim" onclick="return upddnjoftim()" value="Ruaj Ndryshimet" style="width:49%; height: 30px;"></l>
                 <form action="" method="post">
                      <m><input type="submit" name="anulloupdatenjoftim" value="Anullo" style="width:49%; height: 30px"></m>
                 </form>
            </div><br><br>
        </form>
    <?php } else{
       echo'<div class="skanjoftim" > Nuk ka Njoftime</div>';
      } ?>
    <?php
        
}

?>

<!-- Mbaron shfaq njoftimin e plote dhe update ................................................ -->
            
 
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