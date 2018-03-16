
<?php include 'connection.php';?>
<?php include 'phpsekretare.php';?>
<?php include 'Querymenu.php';?>
<?php 


    if (!isset($_SESSION['Sktrloguar']) && empty(@$_SESSION['Sktrloguar'])) {
       echo'<script> 
            window.alert("Ju nuk jeni te kycur!!!!!")
            window.location.href="../../uni/Login form 2/admin/"; </script>';
            die();
    }

  
 
 ?>
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
		</form>
    </div>

    <div class="left-container">

        <div class="logo-container">
         <img src="img/logo-fshn.png" >
        </div>

        <div class="menu-container" style="margin-left:-10px;margin-top:0px">
            <ul>
                <li class="tabs"><a href="#" style="padding-left:10px">Te Dhenat</a> <span class="plus" id="plus9">+</span>
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
                        <li><a href="orari/orarii.php.php" ><img src="img/sign.png" class="circle-icon-sm">Shto Orare</a></li>
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
        <div class="banner">
            <div class="photo-container">
                <div class="photo">
                 <a href="#"><img src="foto/upload/<?php echo $result['foto'];?>" style="width:150px; height:150px;"> </a>
                    <div class="ndrysho-foto">
                        <a href="#"><button id="my" class="photoBtn">Ndrysho foton</button></a>
                    </div>
                </div>
                <!-- Trigger/Open The Modal -->
                <!-- The Modal -->
                <div id="myModa" class="moda">

                <!-- Modal content -->
                   <div class="modal-conten">
                       <span class="clos">&times;</span>
                       <form action="" name="form" method="post" enctype="multipart/form-data">
                          <div class="ndryshofoto">
                             <h3>Zgjidhni nje foto</h3><hr>
                             <div id="errorupload"></div><br>
                              
                               <input type="file" id="upload" name="image" style="width: 98%;" ><br> <br>
                               <input type="submit" name="fotoprofili" onclick="return file()" value="Ruaj Ndryshimet" style="width:97.5%; height: 25px;"><br><br>
                               <input type="submit" value="Anullo" name="anullo"  style="width:97.5%; height: 25px;">
                          </div>
                       </form>
                    </div>

                </div>

<script>
// Get the modal
var modal = document.getElementById('myModa');

// Get the button that opens the modal
var btn = document.getElementById("my");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("clos")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
       
    }
}
</script>


                <div class="data-container">
                    <div class="data">
                        <a><?php echo $result['emri'];?> <?php echo $result['mbiemri'];?></a><br>
                        <a style="margin-top:15px;">Perdorues i Autorizuar </a>
                    </div>
                 </div>
            </div>

        </div>
        

        <div class="personal-details-edit" id="p-detail-edit">
			<div class="title-bar" style="width:100%; height: 33px;"><div id="" style="padding-top: 10px;">Te Dhenat | Modifiko Te Dhenat</div></div>
            <div class="bar-container">
            
                <div class="color1 row-100">Emri:</div>
                <div class="color1 pdn"><?php echo $result['emri'];?>
                    <a href="#">
                        <div class="dropdownnn">
                             <button onclick="myFunctionnn()" class="dropbtnnn" id="emri">Ndrysho</button>
                             <br><br>
                        </div>
                    </a>
                </div>
                <form name="forma" method="post">
                    <div id="myDropdownnn" class="dropdown-contentnn edit-container"><br>
                        
                         <label> Ndrysho Emrin <div id="yjet">* <div id="gabim" class="error"></div></div></label><br><br>
                         <input type="text"  name="name" style="width:99.4%; height:20px;" placeholder=" Vendosni Emrin e Ri" ><br><br>
                         <input type="submit" name="emri" onclick="return ndryshoemrin()"  value="Ruaj Ndryshimet" class="buton">
                         <input type="submit" name=""  value="Anullo" class="buton"><br><br>
                    </div>
                </form>

                <div class="color2 row-100">Mbiemri:</div>
                <div class="color2 pdn"><?php echo $result['mbiemri'];?>
                    <a href="#">
                        <div class="dropdownnnn">
                            <button onclick="myFunctionnnn()" class="dropbtnnn" id="mbiemri">Ndrysho</button>
                            <br><br>
                        </div>
                    </a>
                </div>
                <form name="format" method="post">
                    <div id="myDropdownnnn" class="dropdown-contentnnn edit-container"><br>
                         <label> Ndrysho Mbiemrin <div id="yjet">*<div id="gabim1" class="error"></div></div></label><br><br>
                         <input type="text" name="mbi" style="width:99.4%; height:20px;" placeholder=" Vendosni Mbiemrin e Ri"><br><br>
                         <input type="submit" name="mbiemri" onclick="return ndryshombiemrin()" value="Ruaj Ndryshimet" class="buton">
                         <input type="submit" name=""  value="Anullo" class="buton"><br><br>
                    </div>
                </form>
                <div class="color1 row-100">ID:</div>
                <div class="color1 pdn"><?php echo $result['s_id'];?>
                    <a href="#">
                        <div class="dropdownnnnn">
                            <button onclick="myFunctionnnnn()" class="dropbtnnn hide" >Ndrysho</button>
                            <br><br>
                        </div>
                    </a>
                </div>
                <div class="color2 row-100">Pozicioni:</div>
                    <div class="color2 pdn">Admin
                        <a href="#">
                            <div class="dropdownnnnnn">
                                <button onclick="myFunctionnnnnn()" class="dropbtnnn hide">Ndrysho</button>
                                <br><br>
                            </div>
                       </a>
                    </div>

                    <div class="color1 row-100">Email:</div>
                    <div class="color1 pdn"><?php echo $result['email'];?>
                        <a href="#">
                            <div class="dropdownnnnnnn">
                                <button onclick="myFunctionnnnnnn()" class="dropbtnnn" id="eemail">Ndrysho</button>
                                <br><br>
                            </div>
                        </a>
                    </div>

                    <form name="formati" method="post">
                        <div id="myDropdownnnnnnn" class="dropdown-contentnnnnnn edit-container"><br>
                            <label> Ndrysho Email  <div id="yjet">*<div id="gabim2" class="error"></div></div></label><br><br>
                           
                            <input type="text" name="emailivjeter" style="width:99.4%; height:20px;" placeholder=" Vendosni Email-n e Vjeter" ><br><br>
                            <div id="gabim3" class="error"></div>
                            <input type="text" name="emailiri" style="width:99.4%; height:20px;" placeholder=" Vendosni Email-n e Ri" ><br><br>
                            <div id="gabim4" class="error"></div>
                            <input type="text" name="konfirmoemail" style="width:99.4%; height:20px;" placeholder=" Vendosni Email-n e Ri" ><br><br>
                            <input type="submit" value="Ruaj Ndryshimet" name="email" onclick="return ndryshoemail()" class="buton">
                            <input type="submit" name="" value="Anullo" class="buton"><br><br>
                       </div>
                    </form>

                    <div class="color2 row-100">Kontakt:</div>
                    <div class="color2 pdn"><?php echo $result['nrtel'];?>
                        <a href="#">
                            <div class="dropdownnnnnnnn">
                                <button onclick="myFunctionnnnnnnn()" class="dropbtnnn" id="teli">Ndrysho</button>
                                <br><br>
                            </div>
                        </a>
                    </div>
                    <form name="formatii" method="post">
                       <div id="myDropdownnnnnnnn" class="dropdown-contentnnnnnnn edit-container"><br>
                             <label> Ndrysho Nr e Telefonit <div id="yjet">*<div id="gabim6" class="error"></div></div></label><br><br>
                            
                             <input type="number"  name="nrtel" style="width:99.4%; height:20px;" placeholder=" Vendosni Numrin e Telefonit te Ri" ><br><br>
                             <input type="submit" name="nr" value="Ruaj Ndryshimet" onclick="return ndryshonrtel()" class="buton">
                             <input type="submit" value="Anullo" class="buton"><br><br>
                       </div>
                    </form>

                    <div class="color1 row-100">Fjalkalimi:</div>
                        <div class="color1 pdn">*************
                            <a href="#">
                                <div class="dropdownnnnnnnnn">
                                    <button onclick="myFunctionnnnnnnnn()" class="dropbtnnn" class="buton" id="fjal">Ndrysho</button>
                                    <br><br>
                                </div>
                            </a>
                        </div>
                        <form name="formatit" method="post">
                            <div id="myDropdownnnnnnnnn" class="dropdown-contentnnnnnnnn edit-container end-container "><br>
                                 <label> Ndrysho Fjalkalimin <div id="yjet">*<div id="gabim7" class="error"></div></div></label><br><br>
                            
                                 <input type="password" name="fjalivjeter" style="width:99.4%; height:20px;"  placeholder=" Vendosni Fjalkalimin e Vjeter " ><br><br>
                                 <div id="gabim8" class="error"></div>
                                 <input type="password" name="fjaliri" style="width:99.4%; height:20px;"  height:30px;" placeholder=" Vendosni Fjalkalimin e Ri" ><br><br>
                                 <div id="gabim9" class="error"></div>
                                 <input type="password" name="konfirmofjal" style="width:99.4%; height:20px;" placeholder=" Konfirmo Fjalkalimin e Ri" ><br><br>
                                 <input type="submit" name="fjal" onclick="return ndryshofjalkalimin()" value="Ruaj Ndryshimet" class="buton">
                                 <input type="submit"  value="Anullo"  class="buton"><br><br>
                            </div>
                        </form>
                    </div>
                </div>
    </div>

  
     <?php } ?>
  
</body>
</html>