<?php include 'student/connection.php';?>
<?php include 'student/stEditim.php';?>
<?php include 'student/Querymenu.php';?>
  <?php 

        
      if (!isset($_SESSION['stusername'])) {
       echo ("<script language = 'javascript'>
                      window.alert('Ju nuk jeni te loguar,ju lutem logohuni')
                      window.location.href='../../uni/Login form 2/'
             </script>");
       die();
      }else if(isset($_SESSION['stusername'])){
       $GLOBALS['username'] = $_SESSION['stusername'];
      }else{
       echo "This page does not exist!!!!";
      }


        
   ?>
<?php
$user = @$_SESSION['stusername'];
$query = "select * from student where '$user'=username ";
$post = $db->select($query);
if($post){
        $result = $post->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UT-FSHN</title>
    <link rel="stylesheet" type="text/css" href="student-css/student.css">
     <link rel="stylesheet" type="text/css" href="student-css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="student-css/popup.css">

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
					<img src="img/account.png" class="account-icon"><a href="#" class="admin-btn"><?php echo $result['Emri'];?> <?php echo $result['Mbiemri'];?></a>
					<div class="submenu-dropdown">
						<a href="">Profili</a>
						<a style="padding:0px"><input type="submit" name="dil" value="Dilni" style="width:30px;padding: 12px 20px;padding-right:80px;border:none"></a>
					</div>
				</div>
			</div>
		</form>
    </div>

    <div class="left-container">

        <div class="logo-container">
        <img src="img/logo-fshn.png">
        </div>

        <div class="menu-container" style="margin-left:-10px;margin-top:0px">
            <ul>
                <li class="tabs"><a href="#" style="padding-left:10px">Te Dhenat</a> <span class="plus" id="plus9">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href=""><img src="img/sign.png" class="circle-icon-sm">Modifiko Te Dhenat</a></li>
                    </ul>
                </li>
                

                <li class="tabs"><a href="#">Plani Mesimor</a><span class="plus" id="plus5">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="plani mesimor/"><img src="img/sign.png" class="circle-icon-sm">Plani Mesimor</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Notat</a> <span class="plus" id="plus6">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="notat/"><img src="img/sign.png" class="circle-icon-sm">Shiko Notat</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="orari/" ><img src="img/sign.png" class="circle-icon-sm">Shiko Oraret</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="njoftimet/"><img src="img/sign.png" class="circle-icon-sm" id="" >Shiko Njoftimet</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <?php  include 'student/Querymenu.php';?>

    <div class="right-container">
        <div class="banner">
            <div class="photo-container">
                <div class="photo">
                 <a href="#"><img src="foto/upload/<?php echo $result['Foto'];?>" style="width:150px; height:150px;"> </a>
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
                        <a><?php echo ucfirst($result['Emri']);?> <?php echo ucfirst($result['Mbiemri']);?></a><br>
                        <a style="margin-top:15px;">Perdorues i Autorizuar </a>
                    </div>
                 </div>
            </div>

        </div>
        

        <div class="personal-details-edit" id="p-detail-edit">
			<div class="title-bar" style="width:100%; height: 33px;"><div id="" style="padding-top: 10px;">Te Dhenat | Modifiko Te Dhenat</div></div>
            <div class="bar-container">
            
                <div class="color1 row-100">Emri:</div>
                <div class="color1 pdn"><?php echo ucfirst($result['Emri']);?>
                    <a href="#">
                        <div class="dropdownnn">
                             <button onclick="myFunctionnn()" id="emri" class="dropbtnnn hide" disabled="disabled">Ndrysho</button>
                             <br><br>
                        </div>
                    </a>
                </div>
                
                <div class="color2 row-100">Mbiemri:</div>
                <div class="color2 pdn"><?php echo ucfirst($result['Mbiemri']);?>
                    <a href="#">
                        <div class="dropdownnnn">
                            <button onclick="myFunctionnnn()" id="mbiemri" disabled="disabled" class="dropbtnnn hide">Ndrysho</button>
                            <br><br>
                        </div>
                    </a>
                </div>
                
                <div class="color1 row-100">ID:</div>
                <div class="color1 pdn"><?php echo $result['ID'];?>
                    <a href="#">
                        <div class="dropdownnnnn">
                            <button onclick="myFunctionnnnn()" disabled="disabled" class="dropbtnnn hide" >Ndrysho</button>
                            <br><br>
                        </div>
                    </a>
                </div>

                <div class="color2 row-100">Pozicioni:</div>
                    <div class="color2 pdn">Student
                        <a href="#">
                            <div class="dropdownnnnnn">
                                <button onclick="myFunctionnnnnn()" class="dropbtnnn hide" disabled="disabled">Ndrysho</button>
                                <br><br>
                            </div>
                       </a>
                    </div>
                     <div class="color1 row-100">Grupi:</div>
                <div class="color1 pdn"><?php echo $result['Grupi'];?>
                    <a href="#">
                        <div class="dropdownnnnn">
                            <button onclick="myFunctionnnnn()" disabled="disabled" class="dropbtnnn hide" >Ndrysho</button>
                            <br><br>
                        </div>
                    </a>
                </div>


                    <div class="color2 row-100">Email:</div>
                    <div class="color2 pdn"><?php echo $result['Email'];?>
                        <a href="#">
                            <div class="dropdownnnnnnn">
                                <button onclick="myFunctionnnnnnn()" class="dropbtnnn" id="eemail">Ndrysho</button>
                                <br><br>
                            </div>
                        </a>
                    </div>

                    <form name="formati" method="post">
                        <div id="myDropdownnnnnnn" class="dropdown-contentnnnnnn edit-container"><br>
                            <label> Ndrysho Email *</label><br><br>
                            <div id="gabim2" class="error"></div>
                            <input type="text" name="emailivjeter" style="width:99.4%; height:20px;" placeholder=" Vendosni Email-n e Vjeter" ><br><br>
                            <div id="gabim3" class="error"></div>
                            <input type="text" name="emailiri" style="width:99.4%; height:20px;" placeholder=" Vendosni Email-n e Ri" ><br><br>
                            <div id="gabim4" class="error"></div>
                            <input type="text" name="konfirmoemail" style="width:99.4%; height:20px;" placeholder=" Vendosni Email-n e Ri" ><br><br>
                            <input type="submit" value="Ruaj Ndryshimet" name="email" onclick="return ndryshoemail()" class="buton">
                            <input type="submit" name="" value="Anullo" class="buton"><br><br>
                       </div>
                    </form>

                    <div class="color1 row-100">Kontakt:</div>
                    <div class="color1 pdn"><?php echo $result['nrtel'];?>
                        <a href="#">
                            <div class="dropdownnnnnnnn">
                                <button onclick="myFunctionnnnnnnn()" class="dropbtnnn" id="teli">Ndrysho</button>
                                <br><br>
                            </div>
                        </a>
                    </div>
                    <form name="formatii" method="post">
                       <div id="myDropdownnnnnnnn" class="dropdown-contentnnnnnnn edit-container"><br>
                             <label> Ndrysho Nr e Telefonit *</label><br><br>
                             <div id="gabim6" class="error"></div>
                             <input type="text" name="nrtel" style="width:99.4%; height:20px;" placeholder=" Vendosni Numrin e Telefonit te Ri" ><br><br>
                             <input type="submit" name="nr" value="Ruaj Ndryshimet" onclick="return ndryshonrtel()" class="buton">
                             <input type="submit" value="Anullo" class="buton"><br><br>
                       </div>
                    </form>
                    <div class="color2 row-100">Username:</div>


                    <div class="color2 pdn"><?php echo $user;?>
                      <a href="#">
                          <div class="dropdownnnnn">
                              <button onclick="myFunctionnnnn()" disabled="disabled" class="dropbtnnn hide" >Ndrysho</button>
                              <br><br>
                          </div>
                      </a>
                    </div>

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
                                 <label> Ndrysho Fjalkalimin *</label><br><br>
                                 <div id="gabim7" class="error"></div>
                                 <input type="text" name="fjalivjeter" style="width:99.4%; height:20px;"  placeholder=" Vendosni Fjalkalimin e Vjeter " ><br><br>
                                 <div id="gabim8" class="error"></div>
                                 <input type="text" name="fjaliri" style="width:99.4%; height:20px;"  height:"30px;" placeholder=" Vendosni Fjalkalimin e Ri" ><br><br>
                                 <div id="gabim9" class="error"></div>
                                 <input type="text" name="konfirmofjal" style="width:99.4%; height:20px;" placeholder=" Konfirmo Fjalkalimin e Ri" ><br><br>
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