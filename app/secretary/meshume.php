<?php 


  if(isset($_SESSION['Sktrloguar']) && $_SESSION['Sktrloguar'] == false) {
       echo'<script> 
      window.alert("Ju nuk jeni te kycur!!!!!")
      window.location="../../../../uni/Login form 2/admin/"; </script> ';
  }
 ?>
<?php include 'connection.php';?>
<?php include 'phpsekretare.php';?>
<?php include 'Querymenu.php';?>
<?php
$user = @$_SESSION['username'];
$user_id = @$_SESSION['user_id'];
$query = "select * from sekretaria where '".mysql_real_escape_string($user)."'=username ";
$post = $db->select($query);
if($post){
        $result = $post->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UT-FSHN</title>
    <link rel="stylesheet" type="text/css" href="secretary-css/secretary.css">
     <link rel="stylesheet" type="text/css" href="secretary-css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="secretary-css/popup.css">
    <link rel="stylesheet" type="text/css" href="secretary-css/css.css">
    <link rel="stylesheet" type="text/css" href="secretary-css/njofti.css">

       <!--  Querymenu -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <style type="text/css">
      body{
       background-color: #ebf1f5;;
      }
    </style>   
</head>
<body>

    <!-- POPUP -->
    <div id="popup1" class="modal">
        <div class="modal-content">
            <span class="close">MBYLL</span>
            Ndrysho Fjalekalimin
        </div>
    </div>

    <div id="popup2" class="modal">
        <div class="modal-content">
            <span class="close2">MBYLL</span>
            Ndrysho Foton
            <input type="file" name="ok" value="Zgjidh Foto">
        </div>
    </div>

    <div class="horizontal-container">
        <div class="left-nav">
            Universiteti I Tiranes
        </div>
     
    <form class="" method="post">
      <div class="right-nav">
        <div class="h-nav-mmenu">
          <img src="img/account.png" class="account-icon"><a href="#" class="admin-btn"><?php echo $result['emri'];?> <?php echo $result['mbiemri'];?></a>
          <div class="submenu-dropdown">
            <a href="secretary.php">Profili</a>
            <a style="padding:0px"><input type="submit" name="dil" value="Dilni" style="width:30px;padding: 12px 20px;padding-right:80px;border:none"></a>
          </div>
        </div>
      </div>
    </div>
    </form>

    <div class="left-container">

        <div class="logo-container">
         <img src="img/logo-fshn.png" >
        </div>

        <div class="menu-container" style="margin-left:-10px; margin-top: 0px;">
            <ul>
                  <li class="tabs"><a href="#">Te Dhenat</a> <span class="plus" id="plus9">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="secretary.php"><img src="img/sign.png" class="circle-icon-sm">Modifiko Te Dhenat</a></li>
                    </ul>
                </li>
                <li class="tabs"><a href="#">Departamentet </a><span class="plus" id="plus1">+</span>
                    <ul class="submenu" value="none" id="sub1">
                        <li><a href="departamentet.php"><img src="img/sign.png" class="circle-icon-sm">Departamentet</a></li>
                        <li><a href="shtodep/shtodep.php"><img src="img/sign.png" class="circle-icon-sm">Shto Departament</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Deget</a> <span class="plus" id="plus2">+</span>
                    <ul class="submenu" value="none" id="sub2" >
                        <li><a href="deget/deget.php"><img src="img/sign.png" class="circle-icon-sm">Deget</a></li>
                        <li><a href="shtodege/shtodege.php"><img src="img/sign.png" class="circle-icon-sm">Shto Dege</a></li>
                    </ul>
                </li>


                <li class="tabs"><a href="#">Lendet</a> <span class="plus" id="plus3">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="lendet/lendet.php"><img src="img/sign.png" class="circle-icon-sm">Lendet</a></li>
                        <li><a href="shtolende/shtolende.php"><img src="img/sign.png" class="circle-icon-sm">Shto Lende</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Profesoret</a> <span class="plus" id="plus4">+</span>
                    <ul class="submenu" value="none" id="sub3"">
                        <li><a href="profesoret/profesoret.php"><img src="img/sign.png" class="circle-icon-sm">Profesoret</a></li>
                        <li><a href="shtoprofesore/shtoprofesore.php"><img src="img/sign.png" class="circle-icon-sm">Shto Profesor</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Studente</a><span class="plus" id="plus5">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="studentet/studentet.php"><img src="img/sign.png" class="circle-icon-sm">Studentet</a></li>
                        <li><a href="shtostudent/shtostudent.php"><img src="img/sign.png" class="circle-icon-sm">Shto Student</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Plani Mesimor</a><span class="plus" id="plus5">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="planimesimor/planimesimor.php"><img src="img/sign.png" class="circle-icon-sm">Planet Mesimmore</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Nota</a> <span class="plus" id="plus6">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="shtonota/shtonota.php"><img src="img/sign.png" class="circle-icon-sm">Vendos Nota</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="orari/shikooret.php"><img src="img/sign.png" class="circle-icon-sm">Shiko Oret</a></li>
                        <li><a href="orari/orarii.php.php"><img src="img/sign.png" class="circle-icon-sm">Shto Orare</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="njoftimet.php"><img src="img/sign.png" class="circle-icon-sm" id="ntf">Njoftimet</a></li>
                        <li><a href="shtonjoftim.php"><img src="img/sign.png" class="circle-icon-sm" id="shtonjoftim" >Shto Njoftim</a></li>
                    </ul>
                </li>

              
            </ul>
        </div>
    </div>
    
    <?php  include 'Querymenu.php';?>

    <div class="right-container">
        
        <div class="shto-njoftim" id="Njoftim" style=" background-color: #ebf1f5; height:720px; ">
            <div class="title-bar" style="height: 25px;"> Ndrysho Njoftimin</div>
            <div class="bar-container" style="margin-left: 5px;  background-color: #ebf1f5;">
             <!-- fillon shfaq njoftimin e plote dhe update ................................................ -->






<?php
if(isset($_GET['meshume'])){

  $id=$_GET['meshume'];

  $sql="select * from njoftimet where '$id'= id";
  $post = $db->select($sql);

  $_SESSION['id']= $id;


  if($post){
    	$result= $post->fetch_assoc();
  	  	 ?>
  	<form action="phpsekretare.php" name="computer" method="post">
  	 <div class="datetime"  >
  	 <h3>Data njoftimit <div class="" style="color:red; display: inline-block; font-size: 20px;">*</div></h3>
  	 <input type="text" value="<?php echo $fm->formatDate($result['data']);?>" style="width:99%; height: 30px;  ">
  	 	 <br>
  	 </div><br><br>
  	  <div class="autori" >
  	  <h3>Autori njoftimit<div class="" style="color:red; display: inline-block; font-size: 20px;">*</div></h3> <div id="errorau" style="color:red;"></div>
  	  <input type="text" value="<?php echo $result['autori'];?>" name="autorinjoftim" style="width:99%; height: 30px; ">
  	 	
  	 </div><br><br>
  	 <div class="titulli" >
  	 <h3>Titulli<div class="" style="color:red; display: inline-block; font-size: 20px;">*</div></h3><div id="errortit" style="color:red;"></div>
  	 <input type="text" value="<?php echo $result['titulli'];?>"  name="titullinjoftim"  style="width:99%; height: 30px; display: inline-block;">
  	 </div><br><br>

  	 <div class="pershkrimi">
  	 <h3>Pershkrimi<div class="" style="color:red; display: inline-block; font-size: 20px;">*</div></h3><div id="errorpersh" style="color:red; display: inline-block;"></div>
  	 <textarea rows="10" cols="0"  name="pershkriminjoftim" style="width: 99%;  border:none;background-color: rgb(192, 199, 204);border-bottom: 1px solid;border-bottom-color:#A9A9A9;">
<?php echo $result['pershkrimi'];?>
  	 </textarea><br><br><br>
  	 </div>
     <div class="ruajndryshimet">
  	<l> <input type="submit" name="updatenjoftim" onclick="return upddnjoftim()" value="Ruaj Ndryshimet" style="width:48.5%; height: 30px;"></l>
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

  
     <?php } ?>
  
</body>
</html>

