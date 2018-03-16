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
$user = $_SESSION['username'];
$query = "select * from sekretaria where '$user'=username ";
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

       <!--  Querymenu -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<style>
  body{
    background-color: #ebf1f5;
  }
</style>
        
</head>
<body>
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
		</form>
    </div>

    <div class="left-container">

        <div class="logo-container">
        <img src="img/logo-fshn.png" >
        </div>

        <div class="menu-container" style="margin-left:-10px;margin-top:0px">
            <ul>
				<li class="tabs"><a href="#" style="padding-left:10px;">Te Dhenat</a> <span class="plus" id="plus9">+</span>
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
                    <ul class="submenu" value="none" id="sub3">
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
                        <li><a href="orari/shikooret.php" ><img src="img/sign.png" class="circle-icon-sm">Shiko Oraret</a></li>
                        <li><a href="orari/orarii.php.php"><img src="img/sign.png" class="circle-icon-sm">Shto Orare</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="njoftimet.php"><img src="img/sign.png" class="circle-icon-sm" id="ntf">Njoftimet</a></li>
                        <li><a href="shtonjoftim.php"><img src="img/sign.png" class="circle-icon-sm" id="" >Shto Njoftim</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <?php  include 'Querymenu.php';?>

    <div class="right-container">
       
        <div class="shto-njoftim" id="Njoftim">
            <div class="title-bar" style="width:100%; height: 33px;"><div id="" style="padding-top: 10px;">Njoftimet | Shto Njoftime</div></div>
            <div class="bar-container" style=" min-height: 502px; background-color: #ebf1f5;">
              

                   <form action="phpsekretare.php" name="for"  method="post" enctype="multipart/form-data">
                        <div class="titull">
                             
                                  <label>Titulli <div id="ylli" style="color:red;">* <div id="error" style="font-size: 14px; display: inline; color:red
                                  ;"></div></div> </label>  <br><input type="text" placeholder="Vendosni Titullin e Njoftimit"  name="titulli" 
								  style="width:50%;height:30px; border: solid 1px #555;margin-top:5px"><br><br>
                              </div>
                             
                                   <label>Pershkrimi <div id="ylli" style="color:red;">* <div id="error1" style="font-size: 14px; color:red; display: inline;"></div></div> </label><br>  <textarea rows="10" cols="80" placeholder="Vendosni Pershkrimin e Njoftimit"   
								   id="pershkrimi" name="pershkrimi" style="width:50%;border: solid 1px #555;margin-top:5px"> </textarea> <br><br>
                                   <div id="indentifikues">
                                       <label>Selektoni Degen Ose per te gjithe <div id="ylli" style="color:red;">* <div id="error2" style="font-size: 14px; display: inline; color:red;"></div></div> </label> <br><br>



                                             <?php  
                                             ?>
                                   
                                       <select id="degaselect" name="degaselect">
                                            <option value="">Selektoni Degen Ose per te gjithe</option>
                                            <option value="0">Per te gjithe</option>
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
                                       <label>Selektoni Vitin Ose per te gjithe <div id="ylli" style="color:red;">* <div id="error3" style="font-size: 14px; display: inline; color:red ;"></div></div> </label> <br><br>
                                       <select name="vitiselect" id="vitiselect">
                                           <option value="">Selektoni Vitin  Ose per te gjithe</option>
                                           <option value="0">Per te gjithe</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                      </select>
                                   </div><br>
                               <div>
                               <label><h4>Zgjdhni nje foto</h4></label>
                               <input id="files"  type="file"  name="ngarko" style="margin-left: -5px;">
                                 </div><br><br>
                              <input type="submit" name="submit" onclick="return validate()" value="Krijoni Njoftimin" style="width:200px;margin-top:-20px; height:30px;border: solid 1px #555;background-color:#354052; color:white; "><br><br>
                   </form>
            </div>
        </div>
    </div>

  
     <?php } ?>
  
</body>
</html>