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
                        <li><a  href="../../shtonota/shtonota.php"><img src="../../img/sign.png" class="circle-icon-sm">Vendos Nota</a></li>
                    </ul>
                </li>

				<li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../../orari/" ><img src="../../img/sign.png" class="circle-icon-sm">Shiko Orarin</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../"><img src="../../img/sign.png" class="circle-icon-sm" id="" >Shiko Njoftimet</a></li>
                        <li><a href=""><img src="../../img/sign.png" class="circle-icon-sm" id="" >Vendos Njoftimet</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <?php  include '../Querymenu.php';?>

    <div class="right-container">
        <div>
           <div class="title-bar" style="width:100%; height: 33px;margin-top: -4.25%;"><div id="" style="padding-top: 10px;">Shto Njoftim </div></div>
            <div class="bar-container" style=" min-height: 502px;">
              
             

            
 
                   <form action="" name="for"  method="post" enctype="multipart/form-data">
                        <div class="titull">
                             
                                  <label>Titulli <div id="ylli" style="color:red;">* <div id="error" style="font-size: 14px; display: inline; color:red
                                  ;"></div></div> </label>  <br><input type="text" placeholder="Vendosni Titullin e Njoftimit"  name="titulli" 
                  style="width:50%;height:30px; border: solid 1px #555;margin-top:5px"><br><br>
                              </div>
                             
                                   <label>Pershkrimi <div id="ylli" style="color:red;">* <div id="error1" style="font-size: 14px; color:red; display: inline;"></div></div> </label><br>  <textarea rows="10" cols="80" placeholder="Vendosni Pershkrimin e Njoftimit"   
                   id="pershkrimi" name="pershkrimi" style="width:50%;border: solid 1px #555;margin-top:5px"> </textarea> <br><br>
                                   <div id="indentifikues">
                                       <label>Selektoni Degen, Ose All <div id="ylli" style="color:red;">* <div id="error2" style="font-size: 14px; display: inline; color:red;"></div></div> </label> <br><br>



                                             <?php  
                                             ?>
                                   
                                       <select id="degaselect" name="degaselect" style="color:white;">
                                            <option value="">Selektoni Degen, Ose All</option>
                                            <option value="0">All</option>
                                           <?php
                                                $coni = mysqli_connect("localhost","root","","university"); 
                                                $sql=mysqli_query($coni,"SELECT Emri , Dg_id from deget");
                                                $length=mysqli_num_rows($sql); 

                                                if($length > 0){
                                                 while($res=mysqli_fetch_assoc($sql)){
                                                    echo '<option value='.$res['Dg_id'].'> '.$res['Emri'].'</option>';
                                                 }
                                                }
                                            ?>
                                       </select>
                                  
                                    </div><br>
                                        <div id="indentifikues">
                                       <label>Selektoni Vitin, Ose All <div id="ylli" style="color:red;">* <div id="error3" style="font-size: 20px; display: inline; color:red ;"></div></div> </label> <br><br>
                                       <select name="vitiselect" id="vitiselect" style="color:white;">
                                           <option value="">Selektoni Vitin , Ose All</option>
                                           <option value="0">All</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                      </select>
                                   </div><br>
                               <div>
                               <label>Zgjidhni nje foto <div id="ylli" style="color:red;"><div id="error3" style="font-size: 14px; display: inline; color:red ;"></div></div> </label> 
                               <input id="files"  type="file"  name="ngarko" style="margin-left: -5px;">
                                 </div><br><br>
                              <input type="submit" name="submit" onclick="return validate()" value="Krijoni Njoftimin" style="width:200px;margin-top:-20px; height:30px;border: solid 1px #555;background-color:#354052; color:white; "><br><br>
                   </form>
 
  
    



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