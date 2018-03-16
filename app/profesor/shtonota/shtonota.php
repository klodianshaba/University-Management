
<?php include '../profesor/connection.php';?>
<?php include '../profesor/stEditim.php';?>
<?php include '../profesor/Querymenu.php';?>

<?php
if (!isset($_SESSION['prusername'])) {
       echo ("<script language = 'javascript'>
                      window.alert('Ju nuk jeni te loguar,ju lutem logohuni')
                      window.location.href='../../uni/Login form 2/profesori'
             </script>");
       die();
      }else if(isset($_SESSION['prusername'])){
       $GLOBALS['prusername'] = $_SESSION['prusername'];
      }else{
       echo "This page does not exist!!!!";
      }
?>

<?php
$user = $_SESSION['prusername'];
$query = "select * from profesoret where '$user'=username ";
$post = $db->select($query);
if($post){
        $result = $post->fetch_assoc();
         $user_id=$result['P_id'];
         $_SESSION['P_id']=$user_id; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UT-FSHN</title>
    <link rel="stylesheet" type="text/css" href="../profesor-css/profesor.css">
     <link rel="stylesheet" type="text/css" href="../profesor-css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../profesor-css/popup.css">
    <link rel="stylesheet" type="text/css" href="../profesor-css/css.css">

       <!--  Querymenu -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

            <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <style type="text/css">
    .select-boxes{width: 280px;text-align: center;}
    select {
       
       
        color: black;
        font-family: arial;
        font-weight: 100;
        font-size: 12px;
        height: 32px;
        padding: 7px 8px;
        width: 250px;
        outline: none;
        margin-left: -10px;

      
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
    </style>


    <style type="text/css">

 
        th,td{
            text-align:center;
        }
        .container{
            display: none;
        }
       body{
        background-color:none;
       }
    </style>
    <title>Change the Informations</title>
    <script>
        // Column names must be identical to the actual column names in the database, if you dont want to reveal the column names, you can map them with the different names at the server side.
        var columns = new Array("Emri","Mbiemri","Nota");
        var placeholder = new Array("Emri","Mbiemri","Nota");
        var inputType = new Array("text","text","text");
        var table = "table";
        // var selectOpt = new Array("Pune","Karad","Kolhapur","Satara","Sangli");;


        // Set button class names
        var savebutton = "ajaxSave";
        var deletebutton = "ajaxDelete";
        var editbutton = "ajaxEdit";
        var updatebutton = "ajaxUpdate";
        var cancelbutton = "cancel";

        var saveImage = ""
        var editImage = ""
        var deleteImage = ""
        var cancelImage = ""
        var updateImage = ""

        // Set highlight animation delay (higher the value longer will be the animation)
        var saveAnimationDelay = 3000;
        var deleteAnimationDelay = 1000;

        // 2 effects available available 1) slide 2) flash
        var effect = "slide";

    </script>



    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div class="horizontal-container" style="z-index: 1 !important;">
		<div class="left-nav" style="font-size: 16px;">
            Universiteti I Tiranes
        </div>
        <form class="" method="post" style="font-size: 16px;">
			<div class="right-nav">
				<div class="h-nav-mmenu">
					<img src="../img/account.png" class="account-icon"><a href="#" class="admin-btn"><?php echo $result['Emri'];?> <?php echo $result['Mbiemri'];?></a>
					<div class="submenu-dropdown">
						<a href="../">Profili</a>
						<a style="padding:0px"><input type="submit" name="dil" value="Dilni" style="width:30px;padding: 12px 20px;padding-right:80px;border:none"></a>
					</div>
				</div>
			</div>
		</form>
    </div>

   <div class="left-container" style=" z-index: 7 !important">

        <div class="logo-container">
        <img src="../img/logo-fshn.png">
        </div>

        <div class="menu-container" style="margin-left:-10px;margin-top:0px">
            <ul>
                <li class="tabs"><a href="#" style="padding-left:10px">Te Dhenat</a> <span class="plus" id="plus9">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../"><img src="../img/sign.png" class="circle-icon-sm">Modifiko Te Dhenat</a></li>
                    </ul>
                </li>
                

                <li class="tabs"><a href="#">Plani Mesimor</a><span class="plus" id="plus5">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../plani mesimor/"><img src="../img/sign.png" class="circle-icon-sm">Plani Mesimor</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Notat</a> <span class="plus" id="plus6">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href=""><img src="../img/sign.png" class="circle-icon-sm">Vendos Notat</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../orari/" ><img src="../img/sign.png" class="circle-icon-sm">Shiko Orarin</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../njoftimet/"><img src="../img/sign.png" class="circle-icon-sm" id="" >Shiko Njoftimet</a></li>
                        <li><a href="../njoftimet/shtonjoftim/shtonjoftim.php"><img src="../img/sign.png" class="circle-icon-sm" id="" >Vendos Njoftimet</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <?php  include '../profesor/Querymenu.php';?>

    <div class="right-container">
        
        <div>
            <div class="title-bar" style="width:100%; height: 33px;">
				<div id="" style="padding-top: 10px;">Vendos Nota</div>
				<input type="search" class="light-table-filter" id="search" data-table="order-table" placeholder="Kerko Student"  style="  width:300px;height: 23px;background-color:#fff;color:#000;float:right;margin-top:-25px;border:none;padding:5px">
			</div>

            <div class="bar-container" style=" min-height: 502px;">

<?php
    //Lidhje me databazen dhe krijimi i objektit
    include('dbConfig.php');
    
    //Merr gjithe departamentet nga DB
    $query = $db->query("SELECT * FROM deget ");
    
    //Numerojm rreshtat e tabeles se departamenteve     
    $rowCount = $query->num_rows;
    ?>
    <!-- Fillimi i dropdown per zgjedhje e Departamenteve dhe Degeve -->
    <form action="" method="post">
        <div class="dep" style="display: inline;">
            <select name="dep" id="dep" style="color:#fff;margin:0px;">
                <option value="">Selekto Degen</option>
                <?php
                if($rowCount > 0){
                    while($row = $query->fetch_assoc()){ 
                        echo '<option value="'.$row["Dg_id"].'" '.(($_GET["dep"]==$row["Dg_id"])?'selected="selected"':"").'>'.$row["Emri"].'</option>';               
                    }
                }else{
                    echo '<option value="">Nuk ka Dege</option>';
                }
                ?>
            </select>
        </div>

        <div class="dega" style="display: inline;">
            <select name="dega" id="dega" style="color:#fff; margin-left: 0px;">
                <option value="">Selekto Lenden </option>
            </select>
        </div>
   
        <div class="ren" style="display: inline;">
            <input type="submit" value="Afisho Tabelen" id="butoni"  name="afishotabelen" class="result-btn" style="margin-top:0px"> 
        </div>

    </form> <!-- Mbyllja e dropdown per zgjedhjen e dep dhe degeve -->

      
    <!-- Shfaqim  tabelen mbas selektimin e suksesshem te dropdown -->
   
    <?php
    if(isset($_POST['afishotabelen'])){

        //merr id-te e vlerave te selektuara
        $dega=$_POST['dep'];
        $lenda=$_POST['dega'];
        $_SESSION['dega'] = $dega;
        $_SESSION['lenda'] = $lenda;
        $sql=$db->query("SELECT Emri from lendet where L_id='$lenda'");
        $emri=$sql->fetch_assoc();
        $Emri=$emri['Emri'];
        if(!empty($dega)  && !empty($lenda)){
            ?>
               <script type="text/javascript">
                $(function(){
                    $('.containe').css({display:'block'});
                    $('#save').css({display:'block'});
                }); header("Refresh:0; url=page2.php"); 
                
                </script>


            <?php
        }else{
            echo '<div id="perqef"  style="margin-left:0px; margin-top:5px;"> Selektoni Departamentin dhe Degen qe te Shfaqet tabela per te vendosur notat!!</div>';
        }

    }
    ?>   
  <style type="text/css">
   .containe{
    display: none;
   } 

</style>
<div class="containe" >
<div class="udhezim" style="text-align: center; margin-top:10px;">
<?php
   $dega=$_SESSION['dega'];
   $lenda= $_SESSION['lenda'];
   $sql=$db->query("SELECT Emri from deget where Dg_id='$dega'");
   $sqli=$sql->fetch_assoc();
   $emri=$sqli['Emri'];
   $query=$db->query("SELECT * from lendet where L_id='$lenda'");
   $queryi=$query->fetch_assoc();
   $emrilenda=$queryi['Emri'];

   echo"Ju jeni duke vendosur nota tek Lenda: " .$emrilenda. "  Dega:  " .$emri;
?>
   </div><br>
<div style="height:460px;overflow: auto;border-bottom: 2px solid;">
  <form action="shtonota.php" method="post" >
     <table border="0" class=" table table-striped table-hover table-bordered table-condensed tableDemo bordered order-table table"  style="margin-top:-5px; width: 100%; font-size: 14px;">
     <style> tf{background-color: red;}</style>
       <tr id="heade">
           <td style="background-color:  #354052; color:white;" >ID</td>
           <td style="background-color:  #354052; color:white;"  >Emri Studentit</td>
           <td style="background-color:  #354052; color:white;" > Mbiemri Studentit</td>
           <td style="background-color:  #354052; color:white;" > Emri Lendes</td>
           <td style="background-color:  #354052; color:white;" > Nota</td>
           <td style="background-color:  #354052; color:white;" >Actionn</td>
       </tr>
        
           <?php 
           $query = $db->query("SELECT * FROM student where Dg_id= '$dega' ");
           $count=$query->num_rows;
           if($count>0){
                while ($result=$query->fetch_assoc()){ 
                     ?>
                     <tr>
                        <td> <?php echo $result['ID'];?> <input type="hidden" name="id[]" value="<?php echo $result['ID'];?>"></td>
                        <td> <?php echo $result['Emri'];?></td>
                        <td><?php echo $result['Mbiemri'];?></td>
                        <td><?php echo $Emri?></td>
                        <?php
                        $id=$result['ID'];
                        $sql = $db->query("SELECT * FROM notat where ID='$id' and L_id='$lenda' ");
                        $length=$sql->num_rows;
                        $nota=$sql->fetch_assoc();
                             ?>     
      
                             <td> <input onblur="doUpdateEntries(this.id, this.value );"  id="<?php echo $nota['N_id'];?>" style="border-radius: 5px; width:50px;" type="text" name="nota[]" value="<?php echo $nota['Nota'];?>"> </td>
                             <script type="text/javascript">
                                 function doUpdateEntries(id, value) {
                                    var id= id;
                                    var nota= value;
                                    document.cookie = "notavendosur= " + nota + "," + id;
                                    console.log(document.cookie);
                                 }
                             </script>
                     
                                    
                        
                        <td><a href="shtonota.php?ID=<?php echo $result['ID'];?>">Save</a></td>
                     </tr>
               <?php } ?>
            <?php }?>
       </table>
     </div>
   </div><br>
   <div id="save" style="display: none;">
   <input type="submit" name="saveall" style="width:99%; background-color: #354052; color:white; border:none;" value="Save All">
   </div>
</form>

<?php
if(isset($_POST['saveall'])){
    $dega = $_SESSION['dega'];
    $lenda = $_SESSION['lenda'];
    $query = $db->query("SELECT * FROM student where Dg_id= '$dega' ");
    $count = $query->num_rows;
    $nota = $_POST["nota"]; //Vektori me Notat
    $id = $_POST["id"];     // Vektori me ID
    $panota=-1;
    for ($i=0; $i<=$count; $i++){
        if(empty($nota[$i]) || $nota[$i] < 4){
             $panota++;
        }else{
             $sql= $db->query("SELECT * from notat where ID='$id[$i]' and L_id='$lenda'");
             $length=$sql->num_rows;
             if($length < 1){
                   $db->query("REPLACE INTO notat (Nota,ID,L_id) VALUES ('$nota[$i]','$id[$i]','$lenda')");
             }else{
                   $db->query(" UPDATE notat SET Nota='$nota[$i]' where ID='$id[$i]' and L_id='$lenda' ");
             }
        } 
    }
    $_SESSION['nukkannota']=$panota;  
}
?>
<?php

if (isset($_GET['ID']) && isset($_COOKIE['notavendosur'])){  
       $ID= $_GET['ID'];
       $nota = $_COOKIE['notavendosur'];
       $dega= $_SESSION['dega'];
       $lenda=$_SESSION['lenda'];
       $sql= $db->query("SELECT * from notat where ID='$ID' and L_id='$lenda'");
       $count=$sql->num_rows;
       if($count > 0){
              $db->query(" UPDATE notat SET Nota='$nota' where ID='$ID' and L_id='$lenda' ");
       }
       else{
              $db->query("INSERT into notat (Nota,ID,L_id)values('$nota','$ID','$lenda')");
       }
}
?>

<!-- Skripti per mbushjen e dropdown e degeve perkatese te departamentit te selektuar -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#dep').on('change',function(){
            var dg_id = $(this).val();
            if(dg_id){
                $.ajax({
                    type:'POST',
                    url:'ajaxData.php',
                    data:'Dg_id='+dg_id,
                    success:function(html){
                    $('#dega').html(html);
                    }
                }); 
            }else{
                $('#dega').html('<option value="">Zgjidh Degen</option>');
            }
        });
    });
</script>


<!-- Skripti per kerkimin ne kohe reale (REAL TIME) ne tabelen  -->
<script type="text/javascript">
    (function(document) {
        'use strict';

        var LightTableFilter = (function(Arr) {

            var _input;

            function _onInputEvent(e) {
                _input = e.target;
                var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                Arr.forEach.call(tables, function(table) {
                    Arr.forEach.call(table.tBodies, function(tbody) {
                        Arr.forEach.call(tbody.rows, _filter);
                    });
                });
            }

            function _filter(row) {
                var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
            }

            return {
                init: function() {
                    var inputs = document.getElementsByClassName('light-table-filter');
                    Arr.forEach.call(inputs, function(input) {
                        input.oninput = _onInputEvent;
                    });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                LightTableFilter.init();
            }
        });

    })(document); 

</script>




            </div>
        </div>

       
        <div class="notification" id="note">
            <div class="title-bar">Njoftimet e Fundit</div>
        </div>

    </div>

 <?php }?> 
     
  
</body>
</html>