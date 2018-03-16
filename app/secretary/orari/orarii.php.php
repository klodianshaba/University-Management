<?php 


  if(isset($_SESSION['Sktrloguar']) && $_SESSION['Sktrloguar'] == false) {
       echo'<script> 
      window.alert("Ju nuk jeni te kycur!!!!!")
      window.location="../../../../uni/Login form 2/admin/"; </script> ';
  }
 ?>

<?php include '../connection.php';?>
<?php include 'phpsekretare.php';?>
<?php include '../Querymenu.php';?>

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
    <link rel="stylesheet" type="text/css" href="../secretary-css/secretary.css">
     <link rel="stylesheet" type="text/css" href="../secretary-css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../secretary-css/popup.css">
    <link rel="stylesheet" type="text/css" href="../secretary-css/css.css">

       <!--  Querymenu -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

            <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">





    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
        <link rel="stylesheet" type="text/css" href="orari.css">

        <style type="text/css">
            .select-boxes{width: 280px;text-align: center;}
            .drp {
                background-color:#354052;
               
                color: #fff;
                font-family: arial;
                font-weight: 100;
                font-size: 12px;
                height: 32px;
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
			.selekti{
				height:12px !important;
				background-color:#fff !important;
			}
       body{
                background-color: #ebf1f5;
            }
        </style>

    <script src="jquery-3.1.1.min.js"></script>
</head>
<body>

    <div class="horizontal-container" style="z-index: 2 !important;">

        <div class="left-nav" style="font-size: 16px;">
            Universiteti I Tiranes
        </div>
        <form class="" method="post" style="font-size: 16px;">
			<div class="right-nav">
				<div class="h-nav-mmenu">
					<img src="../img/account.png" class="account-icon"><a href="#" class="admin-btn"><?php echo $result['emri'];?> <?php echo $result['mbiemri'];?></a>
					<div class="submenu-dropdown">
						<a href="../secretary.php">Profili</a>
						<a style="padding:0px"><input type="submit" name="dil" value="Dilni" style="width:30px;padding: 12px 20px;padding-right:80px;border:none"></a>
					</div>
				</div>
			</div>
		</form>
    </div>

    <div class="left-container" style="z-index: 7 !important;">

        <div class="logo-container" >
        <img src="../img/logo-fshn.png" >
        </div>
        <div class="menu-container" style="margin-left:-10px;margin-top:0px;">
            <ul>
				<li class="tabs"><a href="#" style="padding-left:10px;">Te Dhenat</a> <span class="plus" id="plus9">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../secretary.php"><img src="../img/sign.png" class="circle-icon-sm">Modifiko Te Dhenat</a></li>
                    </ul>
                </li>
                <li class="tabs"><a href="#">Departamentet </a><span class="plus" id="plus1">+</span>
                    <ul class="submenu" value="none" id="sub1">
                        <li><a href="../departamentet.php"><img src="../img/sign.png" class="circle-icon-sm">Departamentet</a></li>
                        <li><a href="../shtodep/shtodep.php"><img src="../img/sign.png" class="circle-icon-sm">Shto Departament</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Deget</a> <span class="plus" id="plus2">+</span>
                    <ul class="submenu" value="none" id="sub2" >
                        <li><a href="../deget/deget.php"><img src="../img/sign.png" class="circle-icon-sm">Deget</a></li>
                        <li><a href="../shtodege/shtodege.php"><img src="../img/sign.png" class="circle-icon-sm">Shto Dege</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Lendet</a> <span class="plus" id="plus3">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../lendet/lendet.php"><img src="../img/sign.png" class="circle-icon-sm">Lendet</a></li>
                        <li><a href="../shtolende/shtolende.php"><img src="../img/sign.png" class="circle-icon-sm">Shto Lende</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Profesoret</a> <span class="plus" id="plus4">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../profesoret/profesoret.php"><img src="../img/sign.png" class="circle-icon-sm">Profesoret</a></li>
                        <li><a href="../shtoprofesore/shtoprofesore.php"><img src="../img/sign.png" class="circle-icon-sm">Shto Profesor</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Studente</a><span class="plus" id="plus5">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../studentet/studentet.php"><img src="../img/sign.png" class="circle-icon-sm">Studentet</a></li>
                        <li><a href="../shtostudent/shtostudent.php"><img src="../img/sign.png" class="circle-icon-sm">Shto Student</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Plani Mesimor</a><span class="plus" id="plus5">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../planimesimor/planimesimor.php"><img src="../img/sign.png" class="circle-icon-sm">Planet Mesimmore</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Nota</a> <span class="plus" id="plus6">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a  href="../shtonota/shtonota.php"><img src="../img/sign.png" class="circle-icon-sm">Vendos Nota</a></li>
                    </ul>
                </li>

				<li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../orari/shikooret.php" ><img src="../img/sign.png" class="circle-icon-sm">Shiko Oraret</a></li>
                        <li><a href="../orari/orarii.php.php" ><img src="../img/sign.png" class="circle-icon-sm">Shto Orare</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../njoftimet.php"><img src="../img/sign.png" class="circle-icon-sm" id="ntf">Njoftimet</a></li>
                        <li><a href="../shtonjoftim.php"><img src="../img/sign.png" class="circle-icon-sm" id="" >Shto Njoftim</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <?php  include '../Querymenu.php';?>

    <div class="right-container">
        <div>
           <div class="title-bar" style="width:100%; height: 33px;"><div id="" style="padding-top: 10px;">Vendos Orarin</div></div>
            <div class="bar-container" style=" min-height: 502px;">
              

                     

 <?php   

  $degaa = @$_SESSION['dega'];
  $viti = @$_SESSION['viti'];
  $grupi = @$_SESSION['grupi'];

 ?>
    <?php  
      if (isset($_POST["PlotesoOraret"])) {


               


                            $dbhost = 'localhost';
                            $dbuser = 'root';
                            $dbpass = '';
                            $db ='university';
                            $conni = mysql_connect($dbhost, $dbuser, $dbpass);
                            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
                            mysql_select_db('university');
       

        $hene1 = $_POST['hene1'];
        if($hene1 !== '-1'){
        	$LOShene1 = substr($hene1,0,1);        
        	$hene1 = substr($hene1,1,strlen($hene1));
        }else{
        	$LOShene1 = -1;
        	$hene1 = -1;        
        }
          $q_hene1 = mysql_query("SELECT Emri from lendet where L_id='$hene1'");
          $q_hene1 = mysql_fetch_assoc($q_hene1);
          $q_hene1 = $q_hene1['Emri'];
            
        
      

        $hene2 = $_POST['hene2'];
        if($hene2 !== '-1'){
        	$LOShene2 = substr($hene2,0,1);        
        	$hene2 = substr($hene2,1,strlen($hene2));
        }else{
        	$LOShene2 = -1;
        	$hene2 = -1;        
        }
          $q_hene2 = mysql_query("SELECT Emri from lendet where L_id='$hene2'");
          $q_hene2 = mysql_fetch_assoc($q_hene2);
          $q_hene2 = $q_hene2['Emri'];

        $hene3 = $_POST['hene3'];
        if($hene3 !== '-1'){
        	$LOShene3 = substr($hene3,0,1);        
        	$hene3 = substr($hene3,1,strlen($hene3));
        }else{
        	$LOShene3 = -1;
        	$hene3 = -1;        
        }
          $q_hene3 = mysql_query("SELECT Emri from lendet where L_id='$hene3'");
          $q_hene3 = mysql_fetch_assoc($q_hene3);
          $q_hene3 = $q_hene3['Emri'];

        $hene4 = $_POST['hene4'];
        if($hene4 !== '-1'){
        	$LOShene4 = substr($hene4,0,1);        
        	$hene4 = substr($hene4,1,strlen($hene4));
        }else{
        	$LOShene4 = -1;
        	$hene4 = -1;        
        }
            $q_hene4 = mysql_query("SELECT Emri from lendet where L_id='$hene4'");
          $q_hene4 = mysql_fetch_assoc($q_hene4);
          $q_hene4 = $q_hene4['Emri'];

        $hene5 = $_POST['hene5'];
        if($hene5 !== '-1'){
        	$LOShene5 = substr($hene5,0,1);        
        	$hene5 = substr($hene5,1,strlen($hene5));
        }else{
        	$LOShene5 = -1;
        	$hene5 = -1;        
        }
            $q_hene5 = mysql_query("SELECT Emri from lendet where L_id='$hene5'");
          $q_hene5 = mysql_fetch_assoc($q_hene5);
          $q_hene5 = $q_hene5['Emri'];

        $hene6 = $_POST['hene6'];
        if($hene6 !== '-1'){
        	$LOShene6 = substr($hene6,0,1);        
        	$hene6 = substr($hene6,1,strlen($hene6));
        }else{
        	$LOShene6 = -1;
        	$hene6 = -1;        
        }
            $q_hene6 = mysql_query("SELECT Emri from lendet where L_id='$hene6'");
          $q_hene6 = mysql_fetch_assoc($q_hene6);
          $q_hene6 = $q_hene6['Emri'];

        $hene7 = $_POST['hene7'];
        if($hene7 !== '-1'){
        	$LOShene7 = substr($hene7,0,1);        
        	$hene7 = substr($hene7,1,strlen($hene7));
        }else{
        	$LOShene7 = -1;
        	$hene7 = -1;        
        }
            $q_hene7 = mysql_query("SELECT Emri from lendet where L_id='$hene7'");
          $q_hene7 = mysql_fetch_assoc($q_hene7);
          $q_hene7 = $q_hene7['Emri'];

        $hene8 = $_POST['hene8'];
        if($hene8 !== '-1'){
        	$LOShene8 = substr($hene8,0,1);        
        	$hene8 = substr($hene8,1,strlen($hene8));
        }else{
        	$LOShene8 = -1;
        	$hene8 = -1;        
        }
            $q_hene8 = mysql_query("SELECT Emri from lendet where L_id='$hene8'");
          $q_hene8 = mysql_fetch_assoc($q_hene8);
          $q_hene8 = $q_hene8['Emri'];

        $hene9 = $_POST['hene9'];
        if($hene9 !== '-1'){
        	$LOShene9 = substr($hene9,0,1);        
        	$hene9 = substr($hene9,1,strlen($hene9));
        }else{
        	$LOShene9 = -1;
        	$hene9 = -1;        
        }
            $q_hene9 = mysql_query("SELECT Emri from lendet where L_id='$hene9'");
          $q_hene9 = mysql_fetch_assoc($q_hene9);
          $q_hene9 = $q_hene9['Emri'];

        $hene10 = $_POST['hene10'];
        if($hene10 !== '-1'){
        	$LOShene10 = substr($hene10,0,1);        
        	$hene10 = substr($hene10,1,strlen($hene10));
        }else{
        	$LOShene10 = -1;
        	$hene10 = -1;        
        }
            $q_hene10 = mysql_query("SELECT Emri from lendet where L_id='$hene10'");
          $q_hene10 = mysql_fetch_assoc($q_hene10);
          $q_hene10 = $q_hene10['Emri'];

        $hene11 = $_POST['hene11'];
        if($hene11 !== '-1'){
        	$LOShene11 = substr($hene11,0,1);        
        	$hene11 = substr($hene11,1,strlen($hene11));
        }else{
        	$LOShene11 = -1;
        	$hene11 = -1;        
        }
            $q_hene11 = mysql_query("SELECT Emri from lendet where L_id='$hene11'");
          $q_hene11 = mysql_fetch_assoc($q_hene11);
          $q_hene11 = $q_hene11['Emri'];

        $hene12 = $_POST['hene12'];
       if($hene12 !== '-1'){
        	$LOShene12 = substr($hene12,0,1);        
        	$hene12 = substr($hene12,1,strlen($hene12));
        }else{
        	$LOShene12 = -1;
        	$hene12 = -1;        
        }
            $q_hene12 = mysql_query("SELECT Emri from lendet where L_id='$hene12'");
          $q_hene12 = mysql_fetch_assoc($q_hene12);
          $q_hene12 = $q_hene12['Emri'];

        $hene13 = $_POST['hene13'];
        if($hene13 !== '-1'){
        	$LOShene13 = substr($hene13,0,1);        
        	$hene13 = substr($hene13,1,strlen($hene13));
        }else{
        	$LOShene13 = -1;
        	$hene13 = -1;        
        }
        
            $q_hene13 = mysql_query("SELECT Emri from lendet where L_id='$hene13'");
          $q_hene13 = mysql_fetch_assoc($q_hene13);
          $q_hene13 = $q_hene13['Emri'];


        $marte1 = $_POST['marte1'];
        if($marte1 !== '-1'){
        	$LOSmarte1 = substr($marte1,0,1);        
        	$marte1 = substr($marte1,1,strlen($marte1));
        }else{
        	$LOSmarte1 = -1;
        	$marte1 = -1;        
        }
          $q_marte1 = mysql_query("SELECT Emri from lendet where L_id='$marte1'");
          $q_marte1 = mysql_fetch_assoc($q_marte1);
          $q_marte1 = $q_marte1['Emri'];

        $marte2 = $_POST['marte2'];
        if($marte2 !== '-1'){
        	$LOSmarte2 = substr($marte2,0,1);        
        	$marte2 = substr($marte2,1,strlen($marte2));
        }else{
        	$LOSmarte2 = -1;
        	$marte2 = -1;        
        }
             $q_marte2 = mysql_query("SELECT Emri from lendet where L_id='$marte2'");
          $q_marte2 = mysql_fetch_assoc($q_marte2);
          $q_marte2 = $q_marte2['Emri'];

        $marte3 = $_POST['marte3'];
        if($marte3 !== '-1'){
        	$LOSmarte3 = substr($marte3,0,1);        
        	$marte3 = substr($marte3,1,strlen($marte3));
        }else{
        	$LOSmarte3 = -1;
        	$marte3 = -1;        
        }
             $q_marte3 = mysql_query("SELECT Emri from lendet where L_id='$marte3'");
          $q_marte3 = mysql_fetch_assoc($q_marte3);
          $q_marte3 = $q_marte3['Emri'];

        $marte4 = $_POST['marte4'];
        if($marte4 !== '-1'){
        	$LOSmarte4 = substr($marte4,0,1);        
        	$marte4 = substr($marte4,1,strlen($marte4));
        }else{
        	$LOSmarte4 = -1;
        	$marte4 = -1;        
        }
             $q_marte4 = mysql_query("SELECT Emri from lendet where L_id='$marte4'");
          $q_marte4 = mysql_fetch_assoc($q_marte4);
          $q_marte4 = $q_marte4['Emri'];

        $marte5 = $_POST['marte5'];
        if($marte5 !== '-1'){
        	$LOSmarte5 = substr($marte5,0,1);        
        	$marte5 = substr($marte5,1,strlen($marte5));
        }else{
        	$LOSmarte5 = -1;
        	$marte5 = -1;        
        }
             $q_marte5 = mysql_query("SELECT Emri from lendet where L_id='$marte5'");
          $q_marte5 = mysql_fetch_assoc($q_marte5);
          $q_marte5 = $q_marte5['Emri'];

        $marte6 = $_POST['marte6'];
        if($marte6 !== '-1'){
        	$LOSmarte6 = substr($marte6,0,1);        
        	$marte6 = substr($marte6,1,strlen($marte6));
        }else{
        	$LOSmarte6 = -1;
        	$marte6 = -1;        
        }
             $q_marte6 = mysql_query("SELECT Emri from lendet where L_id='$marte6'");
          $q_marte6 = mysql_fetch_assoc($q_marte6);
          $q_marte6 = $q_marte6['Emri'];

        $marte7 = $_POST['marte7'];
        if($marte7 !== '-1'){
        	$LOSmarte7 = substr($marte7,0,1);        
        	$marte7 = substr($marte7,1,strlen($marte7));
        }else{
        	$LOSmarte7 = -1;
        	$marte7 = -1;        
        }
             $q_marte7 = mysql_query("SELECT Emri from lendet where L_id='$marte7'");
          $q_marte7 = mysql_fetch_assoc($q_marte7);
          $q_marte7 = $q_marte7['Emri'];

        $marte8 = $_POST['marte8'];
        if($marte8 !== '-1'){
        	$LOSmarte8 = substr($marte8,0,1);        
        	$marte8 = substr($marte8,1,strlen($marte8));
        }else{
        	$LOSmarte8 = -1;
        	$marte8 = -1;        
        }
             $q_marte8 = mysql_query("SELECT Emri from lendet where L_id='$marte8'");
          $q_marte8 = mysql_fetch_assoc($q_marte8);
          $q_marte8 = $q_marte8['Emri'];

        $marte9 = $_POST['marte9'];
        if($marte9 !== '-1'){
        	$LOSmarte9 = substr($marte9,0,1);        
        	$marte9 = substr($marte9,1,strlen($marte9));
        }else{
        	$LOSmarte9 = -1;
        	$marte9 = -1;        
        }
             $q_marte9 = mysql_query("SELECT Emri from lendet where L_id='$marte9'");
          $q_marte9 = mysql_fetch_assoc($q_marte9);
          $q_marte9 = $q_marte9['Emri'];

        $marte10 = $_POST['marte10'];
        if($marte10 !== '-1'){
        	$LOSmarte10 = substr($marte10,0,1);        
        	$marte10 = substr($marte10,1,strlen($marte10));
        }else{
        	$LOSmarte10 = -1;
        	$marte10 = -1;        
        }
             $q_marte10 = mysql_query("SELECT Emri from lendet where L_id='$marte10'");
          $q_marte10 = mysql_fetch_assoc($q_marte10);
          $q_marte10 = $q_marte10['Emri'];

        $marte11 = $_POST['marte11'];
        if($marte11 !== '-1'){
        	$LOSmarte11 = substr($marte11,0,1);        
        	$marte11 = substr($marte11,1,strlen($marte11));
        }else{
        	$LOSmarte11 = -1;
        	$marte11 = -1;        
        }
             $q_marte11 = mysql_query("SELECT Emri from lendet where L_id='$marte11'");
          $q_marte11 = mysql_fetch_assoc($q_marte11);
          $q_marte11 = $q_marte11['Emri'];

        $marte12 = $_POST['marte12'];
        if($marte12 !== '-1'){
        	$LOSmarte12 = substr($marte12,0,1);        
        	$marte12 = substr($marte12,1,strlen($marte12));
        }else{
        	$LOSmarte12 = -1;
        	$marte12 = -1;        
        }
             $q_marte12 = mysql_query("SELECT Emri from lendet where L_id='$marte12'");
          $q_marte12 = mysql_fetch_assoc($q_marte12);
          $q_marte12 = $q_marte12['Emri'];

        $marte13 = $_POST['marte13'];
        if($marte13 !== '-1'){
        	$LOSmarte13 = substr($marte13,0,1);        
        	$marte13 = substr($marte13,1,strlen($marte13));
        }else{
        	$LOSmarte13 = -1;
        	$marte13 = -1;        
        }
             $q_marte13 = mysql_query("SELECT Emri from lendet where L_id='$marte13'");
          $q_marte13 = mysql_fetch_assoc($q_marte13);
          $q_marte13 = $q_marte13['Emri'];

        $merkure1 = $_POST['merkure1'];
        if($merkure1 !== '-1'){
        	$LOSmerkure1 = substr($merkure1,0,1);        
        	$merkure1 = substr($merkure1,1,strlen($merkure1));
        }else{
        	$LOSmerkure1 = -1;
        	$merkure1 = -1;        
        }
          $q_merkure1 = mysql_query("SELECT Emri from lendet where L_id='$merkure1'");
          $q_merkure1 = mysql_fetch_assoc($q_merkure1);
          $q_merkure1 = $q_merkure1['Emri'];

        $merkure2 = $_POST['merkure2'];
        if($merkure2 !== '-1'){
        	$LOSmerkure2 = substr($merkure2,0,1);        
        	$merkure2 = substr($merkure2,1,strlen($merkure2));
        }else{
        	$LOSmerkure2 = -1;
        	$merkure2 = -1;        
        }
            $q_merkure2 = mysql_query("SELECT Emri from lendet where L_id='$merkure2'");
          $q_merkure2 = mysql_fetch_assoc($q_merkure2);
          $q_merkure2 = $q_merkure2['Emri'];

        $merkure3 = $_POST['merkure3'];
        if($merkure3 !== '-1'){
        	$LOSmerkure3 = substr($merkure3,0,1);        
        	$merkure3 = substr($merkure3,1,strlen($merkure3));
        }else{
        	$LOSmerkure3 = -1;
        	$merkure3 = -1;        
        }
            $q_merkure3 = mysql_query("SELECT Emri from lendet where L_id='$merkure3'");
          $q_merkure3 = mysql_fetch_assoc($q_merkure3);
          $q_merkure3 = $q_merkure3['Emri'];

        $merkure4 = $_POST['merkure4'];
        if($merkure4 !== '-1'){
        	$LOSmerkure4 = substr($merkure4,0,1);        
        	$merkure4 = substr($merkure4,1,strlen($merkure4));
        }else{
        	$LOSmerkure4 = -1;
        	$merkure4 = -1;        
        }
            $q_merkure4 = mysql_query("SELECT Emri from lendet where L_id='$merkure4'");
          $q_merkure4 = mysql_fetch_assoc($q_merkure4);
          $q_merkure4 = $q_merkure4['Emri'];

        $merkure5 = $_POST['merkure5'];
        if($merkure5 !== '-1'){
        	$LOSmerkure5 = substr($merkure5,0,1);        
        	$merkure5 = substr($merkure5,1,strlen($merkure5));
        }else{
        	$LOSmerkure5 = -1;
        	$merkure5 = -1;        
        }
            $q_merkure5 = mysql_query("SELECT Emri from lendet where L_id='$merkure5'");
          $q_merkure5 = mysql_fetch_assoc($q_merkure5);
          $q_merkure5 = $q_merkure5['Emri'];

        $merkure6 = $_POST['merkure6'];
        if($merkure6 !== '-1'){
        	$LOSmerkure6 = substr($merkure6,0,1);        
        	$merkure6 = substr($merkure6,1,strlen($merkure6));
        }else{
        	$LOSmerkure6 = -1;
        	$merkure6 = -1;        
        }
            $q_merkure6 = mysql_query("SELECT Emri from lendet where L_id='$merkure6'");
          $q_merkure6 = mysql_fetch_assoc($q_merkure6);
          $q_merkure6 = $q_merkure6['Emri'];

        $merkure7 = $_POST['merkure7'];
        if($merkure7 !== '-1'){
        	$LOSmerkure7 = substr($merkure7,0,1);        
        	$merkure7 = substr($merkure7,1,strlen($merkure7));
        }else{
        	$LOSmerkure7 = -1;
        	$merkure7 = -1;        
        }
            $q_merkure7 = mysql_query("SELECT Emri from lendet where L_id='$merkure7'");
          $q_merkure7 = mysql_fetch_assoc($q_merkure7);
          $q_merkure7 = $q_merkure7['Emri'];

        $merkure8 = $_POST['merkure8'];
        if($merkure8 !== '-1'){
        	$LOSmerkure8 = substr($merkure8,0,1);        
        	$merkure8 = substr($merkure8,1,strlen($merkure8));
        }else{
        	$LOSmerkure8 = -1;
        	$merkure8 = -1;        
        }
            $q_merkure8 = mysql_query("SELECT Emri from lendet where L_id='$merkure8'");
          $q_merkure8 = mysql_fetch_assoc($q_merkure8);
          $q_merkure8 = $q_merkure8['Emri'];

        $merkure9 = $_POST['merkure9'];
        if($merkure9 !== '-1'){
        	$LOSmerkure9 = substr($merkure9,0,1);        
        	$merkure9 = substr($merkure9,1,strlen($merkure9));
        }else{
        	$LOSmerkure9 = -1;
        	$merkure9 = -1;        
        }
            $q_merkure9 = mysql_query("SELECT Emri from lendet where L_id='$merkure9'");
          $q_merkure9 = mysql_fetch_assoc($q_merkure9);
          $q_merkure9 = $q_merkure9['Emri'];

        $merkure10 = $_POST['merkure10'];
        if($merkure10 !== '-1'){
        	$LOSmerkure10 = substr($merkure10,0,1);        
        	$merkure10 = substr($merkure10,1,strlen($merkure10));
        }else{
        	$LOSmerkure10 = -1;
        	$merkure10 = -1;        
        }
            $q_merkure10 = mysql_query("SELECT Emri from lendet where L_id='$merkure10'");
          $q_merkure10 = mysql_fetch_assoc($q_merkure10);
          $q_merkure10 = $q_merkure10['Emri'];

        $merkure11 = $_POST['merkure11'];
        if($merkure11 !== '-1'){
        	$LOSmerkure11 = substr($merkure11,0,1);        
        	$merkure11 = substr($merkure11,1,strlen($merkure11));
        }else{
        	$LOSmerkure11 = -1;
        	$merkure11 = -1;        
        }
            $q_merkure11 = mysql_query("SELECT Emri from lendet where L_id='$merkure11'");
          $q_merkure11 = mysql_fetch_assoc($q_merkure11);
          $q_merkure11 = $q_merkure11['Emri'];

        $merkure12 = $_POST['merkure12'];
        if($merkure12 !== '-1'){
        	$LOSmerkure12 = substr($merkure12,0,1);        
        	$merkure12 = substr($merkure12,1,strlen($merkure12));
        }else{
        	$LOSmerkure12 = -1;
        	$merkure12 = -1;        
        }
            $q_merkure12 = mysql_query("SELECT Emri from lendet where L_id='$merkure12'");
          $q_merkure12 = mysql_fetch_assoc($q_merkure12);
          $q_merkure12 = $q_merkure12['Emri'];

        $merkure13 = $_POST['merkure13'];
        if($merkure13 !== '-1'){
        	$LOSmerkure13 = substr($merkure13,0,1);        
        	$merkure13 = substr($merkure13,1,strlen($merkure13));
        }else{
        	$LOSmerkure13 = -1;
        	$merkure13 = -1;        
        }
            $q_merkure13 = mysql_query("SELECT Emri from lendet where L_id='$merkure13'");
          $q_merkure13 = mysql_fetch_assoc($q_merkure13);
          $q_merkure13 = $q_merkure13['Emri'];

        $ejnte1 = $_POST['ejnte1'];
        if($ejnte1 !== '-1'){
        	$LOSejnte1 = substr($ejnte1,0,1);        
        	$ejnte1 = substr($ejnte1,1,strlen($ejnte1));
        }else{
        	$LOSejnte1 = -1;
        	$ejnte1 = -1;        
        }
          $q_ejnte1 = mysql_query("SELECT Emri from lendet where L_id='$ejnte1'");
          $q_ejnte1 = mysql_fetch_assoc($q_ejnte1);
          $q_ejnte1 = $q_ejnte1['Emri'];

        $ejnte2 = $_POST['ejnte2'];
        if($ejnte2 !== '-1'){
        	$LOSejnte2 = substr($ejnte2,0,1);        
        	$ejnte2 = substr($ejnte2,1,strlen($ejnte2));
        }else{
        	$LOSejnte2 = -1;
        	$ejnte2 = -1;        
        }
             $q_ejnte2 = mysql_query("SELECT Emri from lendet where L_id='$ejnte2'");
          $q_ejnte2 = mysql_fetch_assoc($q_ejnte2);
          $q_ejnte2 = $q_ejnte2['Emri'];

        $ejnte3 = $_POST['ejnte3'];
        if($ejnte3 !== '-1'){
        	$LOSejnte3 = substr($ejnte3,0,1);        
        	$ejnte3 = substr($ejnte3,1,strlen($ejnte3));
        }else{
        	$LOSejnte3 = -1;
        	$ejnte3 = -1;        
        }
             $q_ejnte3 = mysql_query("SELECT Emri from lendet where L_id='$ejnte3'");
          $q_ejnte3 = mysql_fetch_assoc($q_ejnte3);
          $q_ejnte3 = $q_ejnte3['Emri'];

        $ejnte4 = $_POST['ejnte4'];
        if($ejnte4 !== '-1'){
        	$LOSejnte4 = substr($ejnte4,0,1);        
        	$ejnte4 = substr($ejnte4,1,strlen($ejnte4));
        }else{
        	$LOSejnte4 = -1;
        	$ejnte4 = -1;        
        }
             $q_ejnte4 = mysql_query("SELECT Emri from lendet where L_id='$ejnte4'");
          $q_ejnte4 = mysql_fetch_assoc($q_ejnte4);
          $q_ejnte4 = $q_ejnte4['Emri'];

        $ejnte5 = $_POST['ejnte5'];
        if($ejnte5 !== '-1'){
        	$LOSejnte5 = substr($ejnte5,0,1);        
        	$ejnte5 = substr($ejnte5,1,strlen($ejnte5));
        }else{
        	$LOSejnte5 = -1;
        	$ejnte5 = -1;        
        }
             $q_ejnte5 = mysql_query("SELECT Emri from lendet where L_id='$ejnte5'");
          $q_ejnte5 = mysql_fetch_assoc($q_ejnte5);
          $q_ejnte5 = $q_ejnte5['Emri'];

        $ejnte6 = $_POST['ejnte6'];
        if($ejnte6 !== '-1'){
        	$LOSejnte6 = substr($ejnte6,0,1);        
        	$ejnte6 = substr($ejnte6,1,strlen($ejnte6));
        }else{
        	$LOSejnte6 = -1;
        	$ejnte6 = -1;        
        }
             $q_ejnte6 = mysql_query("SELECT Emri from lendet where L_id='$ejnte6'");
          $q_ejnte6 = mysql_fetch_assoc($q_ejnte6);
          $q_ejnte6 = $q_ejnte6['Emri'];

        $ejnte7 = $_POST['ejnte7'];
        if($ejnte7 !== '-1'){
        	$LOSejnte7 = substr($ejnte7,0,1);        
        	$ejnte7 = substr($ejnte7,1,strlen($ejnte7));
        }else{
        	$LOSejnte7 = -1;
        	$ejnte7 = -1;        
        }
             $q_ejnte7 = mysql_query("SELECT Emri from lendet where L_id='$ejnte7'");
          $q_ejnte7 = mysql_fetch_assoc($q_ejnte7);
          $q_ejnte7 = $q_ejnte7['Emri'];

        $ejnte8 = $_POST['ejnte8'];
        if($ejnte8 !== '-1'){
        	$LOSejnte8 = substr($ejnte8,0,1);        
        	$ejnte8 = substr($ejnte8,1,strlen($ejnte8));
        }else{
        	$LOSejnte8 = -1;
        	$ejnte8 = -1;        
        }
             $q_ejnte8 = mysql_query("SELECT Emri from lendet where L_id='$ejnte8'");
          $q_ejnte8 = mysql_fetch_assoc($q_ejnte8);
          $q_ejnte8 = $q_ejnte8['Emri'];

        $ejnte9 = $_POST['ejnte9'];
        if($ejnte9 !== '-1'){
        	$LOSejnte9 = substr($ejnte9,0,1);        
        	$ejnte9 = substr($ejnte9,1,strlen($ejnte9));
        }else{
        	$LOSejnte9 = -1;
        	$ejnte9 = -1;        
        }
             $q_ejnte9 = mysql_query("SELECT Emri from lendet where L_id='$ejnte9'");
          $q_ejnte9 = mysql_fetch_assoc($q_ejnte9);
          $q_ejnte9 = $q_ejnte9['Emri'];

        $ejnte10 = $_POST['ejnte10'];
        if($ejnte10 !== '-1'){
        	$LOSejnte10 = substr($ejnte10,0,1);        
        	$ejnte10 = substr($ejnte10,1,strlen($ejnte10));
        }else{
        	$LOSejnte10 = -1;
        	$ejnte10 = -1;        
        }
             $q_ejnte10 = mysql_query("SELECT Emri from lendet where L_id='$ejnte10'");
          $q_ejnte10 = mysql_fetch_assoc($q_ejnte10);
          $q_ejnte10 = $q_ejnte10['Emri'];

        $ejnte11 = $_POST['ejnte11'];
        if($ejnte11 !== '-1'){
        	$LOSejnte11 = substr($ejnte11,0,1);        
        	$ejnte11 = substr($ejnte11,1,strlen($ejnte11));
        }else{
        	$LOSejnte11 = -1;
        	$ejnte11 = -1;        
        }
             $q_ejnte11 = mysql_query("SELECT Emri from lendet where L_id='$ejnte11'");
          $q_ejnte11 = mysql_fetch_assoc($q_ejnte11);
          $q_ejnte11 = $q_ejnte11['Emri'];

        $ejnte12 = $_POST['ejnte12'];
        if($ejnte12 !== '-1'){
        	$LOSejnte12 = substr($ejnte12,0,1);        
        	$ejnte12 = substr($ejnte12,1,strlen($ejnte12));
        }else{
        	$LOSejnte12 = -1;
        	$ejnte12 = -1;        
        }
             $q_ejnte12 = mysql_query("SELECT Emri from lendet where L_id='$ejnte12'");
          $q_ejnte12 = mysql_fetch_assoc($q_ejnte12);
          $q_ejnte12 = $q_ejnte12['Emri'];

        $ejnte13 = $_POST['ejnte13'];
        if($ejnte13 !== '-1'){
        	$LOSejnte13 = substr($ejnte13,0,1);        
        	$ejnte13 = substr($ejnte13,1,strlen($ejnte13));
        }else{
        	$LOSejnte13 = -1;
        	$ejnte13 = -1;        
        }
             $q_ejnte13 = mysql_query("SELECT Emri from lendet where L_id='$ejnte13'");
          $q_ejnte13 = mysql_fetch_assoc($q_ejnte13);
          $q_ejnte13 = $q_ejnte13['Emri'];


        $premte1 = $_POST['premte1'];
        if($premte1 !== '-1'){
        	$LOSpremte1 = substr($premte1,0,1);        
        	$premte1 = substr($premte1,1,strlen($premte1));
        }else{
        	$LOSpremte1 = -1;
        	$premte1 = -1;        
        }
          $q_premte1 = mysql_query("SELECT Emri from lendet where L_id='$premte1'");
          $q_premte1 = mysql_fetch_assoc($q_premte1);
          $q_premte1 = $q_premte1['Emri'];

        $premte2 = $_POST['premte2'];
        if($premte2 !== '-1'){
        	$LOSpremte2 = substr($premte2,0,1);        
        	$premte2 = substr($premte2,1,strlen($premte2));
        }else{
        	$LOSpremte2 = -1;
        	$premte2 = -1;        
        }
             $q_premte2 = mysql_query("SELECT Emri from lendet where L_id='$premte2'");
          $q_premte2 = mysql_fetch_assoc($q_premte2);
          $q_premte2 = $q_premte2['Emri'];

        $premte3 = $_POST['premte3'];
        if($premte3 !== '-1'){
        	$LOSpremte3 = substr($premte3,0,1);        
        	$premte3 = substr($premte3,1,strlen($premte3));
        }else{
        	$LOSpremte3 = -1;
        	$premte3 = -1;        
        }
             $q_premte3 = mysql_query("SELECT Emri from lendet where L_id='$premte3'");
          $q_premte3 = mysql_fetch_assoc($q_premte3);
          $q_premte3 = $q_premte3['Emri'];

        $premte4 = $_POST['premte4'];
        if($premte4 !== '-1'){
        	$LOSpremte4 = substr($premte4,0,1);        
        	$premte4 = substr($premte4,1,strlen($premte4));
        }else{
        	$LOSpremte4 = -1;
        	$premte4 = -1;        
        }
             $q_premte4 = mysql_query("SELECT Emri from lendet where L_id='$premte4'");
          $q_premte4 = mysql_fetch_assoc($q_premte4);
          $q_premte4 = $q_premte4['Emri'];

        $premte5 = $_POST['premte5'];
        if($premte5 !== '-1'){
        	$LOSpremte5 = substr($premte5,0,1);        
        	$premte5 = substr($premte5,1,strlen($premte5));
        }else{
        	$LOSpremte5 = -1;
        	$premte5 = -1;        
        }
             $q_premte5 = mysql_query("SELECT Emri from lendet where L_id='$premte5'");
          $q_premte5 = mysql_fetch_assoc($q_premte5);
          $q_premte5 = $q_premte5['Emri'];

        $premte6 = $_POST['premte6'];
        if($premte6 !== '-1'){
        	$LOSpremte6 = substr($premte6,0,1);        
        	$premte6 = substr($premte6,1,strlen($premte6));
        }else{
        	$LOSpremte6 = -1;
        	$premte6 = -1;        
        }
             $q_premte6 = mysql_query("SELECT Emri from lendet where L_id='$premte6'");
          $q_premte6 = mysql_fetch_assoc($q_premte6);
          $q_premte6 = $q_premte6['Emri'];

        $premte7 = $_POST['premte7'];
        if($premte7 !== '-1'){
        	$LOSpremte7 = substr($premte7,0,1);        
        	$premte7 = substr($premte7,1,strlen($premte7));
        }else{
        	$LOSpremte7 = -1;
        	$premte7 = -1;        
        }
             $q_premte7 = mysql_query("SELECT Emri from lendet where L_id='$premte7'");
          $q_premte7 = mysql_fetch_assoc($q_premte7);
          $q_premte7 = $q_premte7['Emri'];

        $premte8 = $_POST['premte8'];
        if($premte8 !== '-1'){
        	$LOSpremte8 = substr($premte8,0,1);        
        	$premte8 = substr($premte8,1,strlen($premte8));
        }else{
        	$LOSpremte8 = -1;
        	$premte8 = -1;        
        }
             $q_premte8 = mysql_query("SELECT Emri from lendet where L_id='$premte8'");
          $q_premte8 = mysql_fetch_assoc($q_premte8);
          $q_premte8 = $q_premte8['Emri'];

        $premte9 = $_POST['premte9'];
        if($premte9 !== '-1'){
        	$LOSpremte9 = substr($premte9,0,1);        
        	$premte9 = substr($premte9,1,strlen($premte9));
        }else{
        	$LOSpremte9 = -1;
        	$premte9 = -1;        
        }
             $q_premte9 = mysql_query("SELECT Emri from lendet where L_id='$premte9'");
          $q_premte9 = mysql_fetch_assoc($q_premte9);
          $q_premte9 = $q_premte9['Emri'];

        $premte10 = $_POST['premte10'];
        if($premte10 !== '-1'){
        	$LOSpremte10 = substr($premte10,0,1);        
        	$premte10 = substr($premte10,1,strlen($premte10));
        }else{
        	$LOSpremte10 = -1;
        	$premte10 = -1;        
        }
             $q_premte10 = mysql_query("SELECT Emri from lendet where L_id='$premte10'");
          $q_premte10 = mysql_fetch_assoc($q_premte10);
          $q_premte10 = $q_premte10['Emri'];

        $premte11 = $_POST['premte11'];
        if($premte11 !== '-1'){
        	$LOSpremte11 = substr($premte11,0,1);        
        	$premte11 = substr($premte11,1,strlen($premte11));
        }else{
        	$LOSpremte11 = -1;
        	$premte11 = -1;        
        }
             $q_premte11 = mysql_query("SELECT Emri from lendet where L_id='$premte11'");
          $q_premte11 = mysql_fetch_assoc($q_premte11);
          $q_premte11 = $q_premte11['Emri'];

        $premte12 = $_POST['premte12'];
        if($premte12 !== '-1'){
        	$LOSpremte12 = substr($premte12,0,1);        
        	$premte12 = substr($premte12,1,strlen($premte12));
        }else{
        	$LOSpremte12 = -1;
        	$premte12 = -1;        
        }
             $q_premte12 = mysql_query("SELECT Emri from lendet where L_id='$premte12'");
          $q_premte12 = mysql_fetch_assoc($q_premte12);
          $q_premte12 = $q_premte12['Emri'];

        $premte13 = $_POST['premte13'];
        if($premte13 !== '-1'){
        	$LOSpremte13 = substr($premte13,0,1);        
        	$premte13 = substr($premte13,1,strlen($premte13));
        }else{
        	$LOSpremte13 = -1;
        	$premte13 = -1;        
        }
             $q_premte13 = mysql_query("SELECT Emri from lendet where L_id='$premte13'");
          $q_premte13 = mysql_fetch_assoc($q_premte13);
          $q_premte13 = $q_premte13['Emri'];

                   
            
                // fillimi i dites se hene ...................................

               $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='1' ");
               
               $value = $sql->num_rows;
              

               if ($value >= 1 ){
               		if($LOShene1 == '-1'){
                 		mysql_query("UPDATE orari SET LOS='$LOShene1' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='1'");
               		}else{
                 		mysql_query("UPDATE orari SET L_id='$hene1',LOS='$LOShene1' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='1'");
               		}
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','1','$LOShene1','$hene1','$degaa','$viti','$grupi') ");

                }



               $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='2' ");
               
               $value = $sql->num_rows;
             
               if ($value >= 1 ){
               		if($LOShene2 == '-1'){
                 		mysql_query("UPDATE orari SET LOS='$LOShene2' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='2'");
               		}else{
                 		mysql_query("UPDATE orari SET L_id='$hene2',LOS='$LOShene2' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='2'");
                 	}
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','2','$LOShene2','$hene2','$degaa','$viti','$grupi') ");

                }




               $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='3' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               		if ($LOShene3 == '-1') {
		                 mysql_query("UPDATE orari SET LOS='$LOShene3' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='3'");
               		}else{
		                 mysql_query("UPDATE orari SET L_id='$hene3',LOS='$LOShene3' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='3'");
               		}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','3','$LOShene3','$hene3','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='4' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               		if ($LOShene4 == '-1') {
                 		mysql_query("UPDATE orari SET LOS='$LOShene4' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='4'");
               			
               		}else{

                 		mysql_query("UPDATE orari SET L_id='$hene4',LOS='$LOShene4' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='4'");
               		}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','4','$LOShene4','$hene4','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='5' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               		if ($LOShene5 == '-1') {
                 		mysql_query("UPDATE orari SET LOS='$LOShene5' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='5'");
               		}else{
                 		mysql_query("UPDATE orari SET L_id='$hene5',LOS='$LOShene5' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='5'");
               		}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','5','$LOShene5','$hene5','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='6' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOShene6 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOShene6' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='6'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$hene6',LOS='$LOShene6' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='6'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','6','$LOShene6','$hene6','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='7' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOShene7 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOShene7' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='7'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$hene7',LOS='$LOShene7' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='7'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','7','$LOShene7','$hene7','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='8' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOShene8 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOShene8' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='8'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$hene8',LOS='$LOShene8' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='8'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','8','$LOShene8','$hene8','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='9' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOShene9 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOShene9' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='9'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$hene9',LOS='$LOShene9' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='9'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','9','$LOShene9','$hene9','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='10' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOShene10 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOShene10' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='10'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$hene10',LOS='$LOShene10' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='10'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','10','$LOShene10','$hene10','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='11' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOShene11 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOShene11' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='11'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$hene11',LOS='$LOShene11' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='11'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','11','$LOShene11','$hene11','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='12' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOShene12 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOShene12' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='12'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$hene12',LOS='$LOShene12' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='12'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','12','$LOShene12','$hene12','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='hene' and ora='13' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOShene13 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOShene13' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='13'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$hene13',LOS='$LOShene13' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='13'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('hene','13','$LOShene13','$hene13','$degaa','$viti','$grupi') ");

                }
               // Mbarimi i dites se hene

                // Fillimi i dites se marte....

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='1' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte1 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte1' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='1'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte1',LOS='$LOSmarte1' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='1'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','1','$LOSmarte1','$marte1','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='2' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte2 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte2' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='2'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte2',LOS='$LOSmarte2' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='2'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','2','$LOSmarte2','$marte2','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='3' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte3 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte3' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='3'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte3',LOS='$LOSmarte3' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='3'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','3','$LOSmarte3','$marte3','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='4' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte4 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte4' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='4'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte4',LOS='$LOSmarte4' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='4'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','4','$LOSmarte4','$marte4','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='5' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte5 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte5' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='5'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte5',LOS='$LOSmarte5' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='5'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','5','$LOSmarte5','$marte5','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='6' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte6 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte6' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='6'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte6',LOS='$LOSmarte6' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='6'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','6','$LOSmarte6','$marte6','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='7' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte7 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte7' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='7'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte7',LOS='$LOSmarte7' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='7'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','7','$LOSmarte7','$marte7','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='8' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte8 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte8' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='8'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte8',LOS='$LOSmarte8' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='8'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','8','$LOSmarte8','$marte8','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='9' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte9 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte9' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='9'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte9',LOS='$LOSmarte9' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='9'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','9','$LOSmarte9','$marte9','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='10' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte10 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte10' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='10'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte10',LOS='$LOSmarte10' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='10'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','10','$LOSmarte10','$marte10','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='11' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte11 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte11' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='11'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte11',LOS='$LOSmarte11' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='11'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','11','$LOSmarte11','$marte11','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='12' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte12 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte12' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='12'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte12',LOS='$LOSmarte12' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='12'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','12','$LOSmarte12','$marte12','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='marte' and ora='13' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmarte13 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmarte13' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='13'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$marte13',LOS='$LOSmarte13' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='13'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('marte','13','$LOSmarte13','$marte13','$degaa','$viti','$grupi') ");

                }

                // Mbarim i dites se marte.....

                // fillimi i dites se merkure...

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='1' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure1 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure1' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='1'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure1',LOS='$LOSmerkure1' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='1'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','1','$LOSmerkure1','$merkure1','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='2' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure2 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure2' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='2'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure2',LOS='$LOSmerkure2' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='2'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','2','$LOSmerkure2','$merkure2','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='3' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure3 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure3' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='3'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure3',LOS='$LOSmerkure3' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='3'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','3','$LOSmerkure3','$merkure3','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='4' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure4 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure4' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='4'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure4',LOS='$LOSmerkure4' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='4'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','4','$LOSmerkure4','$merkure4','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='5' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure5 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure5' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='5'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure5',LOS='$LOSmerkure5' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='5'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','5','$LOSmerkure5','$merkure5','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='6' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure6 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure6' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='6'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure6',LOS='$LOSmerkure6' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='6'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','6','$LOSmerkure6','$merkure6','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='7' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure7 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure7' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='7'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure7',LOS='$LOSmerkure7' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='7'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','7','$LOSmerkure7','$merkure7','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='8' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure8 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure8' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='8'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure8',LOS='$LOSmerkure8' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='8'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','8','$LOSmerkure8','$merkure8','$degaa','$viti','$grupi') ");

                }

                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='9' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure9 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure9' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='9'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure9',LOS='$LOSmerkure9' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='9'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','9','$LOSmerkure9','$merkure9','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='10' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure10 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure10' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='10'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure10',LOS='$LOSmerkure10' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='10'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','10','$LOSmerkure10','$merkure10','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='11' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure11 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure11' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='11'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure11',LOS='$LOSmerkure11' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='11'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','11','$LOSmerkure11','$merkure11','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='12' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure12 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure12' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='12'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure12',LOS='$LOSmerkure12' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='12'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','12','$LOSmerkure12','$merkure12','$degaa','$viti','$grupi') ");

                }


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='merkure' and ora='13' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSmerkure13 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSmerkure13' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='13'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$merkure13',LOS='$LOSmerkure13' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='13'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('merkure','13','$LOSmerkure13','$merkure13','$degaa','$viti','$grupi') ");

                }
                //Mbaron dita e merkure.....

                //Fillon dita e ejnte......


                 $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and Ora='1' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte1 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte1' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='1'") or die(mysql_error());
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte1',LOS='$LOSejnte1' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='enjte' AND Ora='1'") or die(mysql_error());
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','1','$LOSejnte1','$ejnte1','$degaa','$viti','$grupi') ");

                }

                   $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='2' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte2 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte2' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='2'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte2',LOS='$LOSejnte2' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='2'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','2','$LOSejnte2','$ejnte2','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='3' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte3 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte3' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='3'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte3',LOS='$LOSejnte3' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='3'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','3','$LOSejnte3','$ejnte3','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='4' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte4 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte4' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='4'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte4',LOS='$LOSejnte4' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='4'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','4','$LOSejnte4','$ejnte4','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='5' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte5 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte5' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='5'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte5',LOS='$LOSejnte5' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='5'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','5','$LOSejnte5','$ejnte5','$degaa','$viti','$grupi') ");

                }
                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='6' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte6 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte6' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='6'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte6',LOS='$LOSejnte6' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='6'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','6','$LOSejnte6','$ejnte6','$degaa','$viti','$grupi') ");

                }
                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='7' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte7 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte7' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='7'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte7',LOS='$LOSejnte7' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='7'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','7','$LOSejnte7','$ejnte7','$degaa','$viti','$grupi') ");

                }
                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='8' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte8 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte8' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='8'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte8',LOS='$LOSejnte8' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='8'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','8','$LOSejnte8','$ejnte8','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='9' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte9 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte9' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='9'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte9',LOS='$LOSejnte9' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='9'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','9','$LOSejnte9','$ejnte9','$degaa','$viti','$grupi') ");

                }
                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='10' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte10 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte10' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='10'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte10',LOS='$LOSejnte10' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='10'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','10','$LOSejnte10','$ejnte10','$degaa','$viti','$grupi') ");

                }
                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='11' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte11 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte11' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='11'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte11',LOS='$LOSejnte11' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='11'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','11','$LOSejnte11','$ejnte11','$degaa','$viti','$grupi') ");

                }
                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='12' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte12 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte12' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='12'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte12',LOS='$LOSejnte12' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='12'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','12','$LOSejnte12','$ejnte12','$degaa','$viti','$grupi') ");

                }
                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='ejnte' and ora='13' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSejnte13 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSejnte13' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='13'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$ejnte13',LOS='$LOSejnte13' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='13'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('ejnte','13','$LOSejnte13','$ejnte13','$degaa','$viti','$grupi') ");

                }

                //Mbarim i dites se ejnte....

                //Fillon dita e premte ..... 

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='1' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte1 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte1' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='1'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte1',LOS='$LOSpremte1' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='1'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','1','$LOSpremte1','$premte1','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='2' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte2 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte2' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='2'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte2',LOS='$LOSpremte2' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='2'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','2','$LOSpremte2','$premte2','$degaa','$viti','$grupi') ");

                }


                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='3' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte3 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte3' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='3'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte3',LOS='$LOSpremte3' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='3'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','3','$LOSpremte3','$premte3','$degaa','$viti','$grupi') ");

                }


                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='4' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte4 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte4' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='4'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte4',LOS='$LOSpremte4' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='4'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','4','$LOSpremte4','$premte4','$degaa','$viti','$grupi') ");

                }


                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='5' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte5 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte5' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='5'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte5',LOS='$LOSpremte5' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='5'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','5','$LOSpremte5','$premte5','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='6' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte6 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte6' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='6'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte6',LOS='$LOSpremte6' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='6'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','6','$LOSpremte6','$premte6','$degaa','$viti','$grupi') ");

                }


                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='7' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte7 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte7' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='7'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte7',LOS='$LOSpremte7' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='7'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','7','$LOSpremte7','$premte7','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='8' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte8 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte8' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='8'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte8',LOS='$LOSpremte8' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='8'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','8','$LOSpremte8','$premte8','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='9' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte9 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte9' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='9'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte9',LOS='$LOSpremte9' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='9'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','9','$LOSpremte9','$premte9','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='10' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte10 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte10' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='10'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte10',LOS='$LOSpremte10' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='10'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','10','$LOSpremte10','$premte10','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='11' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte11 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte11' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='11'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte11',LOS='$LOSpremte11' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='11'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','11','$LOSpremte11','$premte11','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='12' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte12 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte12' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='12'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte12',LOS='$LOSpremte12' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='12'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','12','$LOSpremte12','$premte12','$degaa','$viti','$grupi') ");

                }

                    $sql=$conn->query("SELECT LOS,L_id from orari where Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and Dita='premte' and ora='13' ");
               
               $value = $sql->num_rows;
               if ($value >= 1 ){
               	if ($LOSpremte13 == '-1') {
                 mysql_query("UPDATE orari SET LOS='$LOSpremte13' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='13'");
               	}else{
                 mysql_query("UPDATE orari SET L_id='$premte13',LOS='$LOSpremte13' where  Dg_id='$degaa' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='13'");
               	}
               
                }
                  
                if($value < 1){
                    $conn->query("INSERT into orari (Dita,Ora,LOS,L_id,Dg_id,Viti,Grupi) values('premte','13','$LOSpremte13','$premte13','$degaa','$viti','$grupi') ");

                }
    }

?>
    <?php
    //Lidhje me databazen dhe krijimi i objektit
    include('dbConfig.php');
    
    //Merr gjithe departamentet nga DB
    $query = $db->query("SELECT * FROM departamentet ");
    
    //Numerojm rreshtat e tabeles se departamenteve     
    $rowCount = $query->num_rows;
    ?>
    <!-- Fillimi i dropdown per zgjedhje e Departamenteve dhe Degeve -->
    <form action="" method="post">
        <div class="dep" style="display: inline;">
            <select name="dep" id="dep" class="drp" style="width:19%;">
                <option value="">Selekto Departamentin</option>
                <?php
                if($rowCount > 0){
                    while($row = $query->fetch_assoc()){ 
                    	$selected = "";
                    	if(isset($_POST['dep'])){
                    		if ($_POST['dep'] == $row['D_id']) {
                    			$selected = "selected='selected'";
                    		}
                    	}
                        echo '<option value="'.$row["D_id"].'" '.$selected.' >'.$row['Emri'].'</option>';              
                        
                    }
                }else{
                    echo '<option value="">Nuk ka Departamente</option>';
                }
                ?>
            </select>
        </div>

        <div class="dega" style="display: inline;">
            <select name="dega" id="dega" class="drp" style="width:19%;">
            	<?php if(isset($_POST['kot']) || isset($_POST['PlotesoOraret'])){
            		//Include database configuration file
						include('dbConfig.php');


						    //Merr te dhenat e degeve perkatese te departamentit te selektuar
						    $query = $db->query("SELECT * FROM deget WHERE D_id = ".$_POST['dep']."");
						    
						    //Rreshtat e querit
						    $rowCount = $query->num_rows;
						    
						    //Mbush dropdown e degeve 
						    if($rowCount > 0){
						        echo '<option value="">Zgjidh Degen</option>';
						        while($row = $query->fetch_assoc()){ 
						        	$sel = "";
						        	if($_POST['dega'] == $row['Dg_id']){
						        		$sel = "selected='selected'";
						        	}
						            
						            echo '<option value="'.$row['Dg_id'].'" '.$sel.'>'.$row['Emri'].'</option>';
						        }
						    }else{
						        echo '<option value="">Nuk ka dege perkatese</option>';
						    }



            		}else{?>
                <option value="">Selekto Degen </option>
                <?php }?>
            </select>
        </div>

        <div class="viti" style="display: inline;">
            <select name="viti" id="viti" class="drp" style="width:19%;">
                <option value="">Selekto Vitin </option>
                <option value="1" <?php if (isset($_POST['viti'])) {
                	if ($_POST['viti'] == 1) {
                		echo "selected='selected'";
                	}
                } ?>>1 </option>
                <option value="2" <?php if (isset($_POST['viti'])) {
                	if ($_POST['viti'] == '2') {
                		echo "selected='selected'";
                	}
                } ?>>2</option>
                <option value="3" <?php if (isset($_POST['viti'])) {
                	if ($_POST['viti'] == '3') {
                		echo "selected='selected'";
                	}
                } ?>>3 </option>
            </select>
        </div>

        <div class="Grupi" style="display: inline;">
            <select name="grupi" id="grupi" class="drp" style="width:19%;">
                <option value="">Selekto Grupin </option>
                <option value="A" <?php 
                if (isset($_POST['grupi'])) {
                 	if($_POST['grupi'] == 'A'){echo "selected='selected'";}
                 } ?>>A </option>
                <option value="B" <?php 
                if (isset($_POST['grupi'])) {
                	if ($_POST['grupi'] == 'B') {
                		echo "selected='selected'";
                	}
                }
                ?>>B</option>
                <option value="C" <?php
                if (isset($_POST['grupi'])) {
                	if ($_POST['grupi'] == 'C') {
                		echo "selected='selected'";
                	}
                }
                ?>>C</option>
            </select>
        </div>
   
        <div class="ren" style="display: inline;">
            <input type="submit" id="btn-orar" value="Vendos Orarin" id="butoni" name="kot" class="result-btn" style="width:14%;"> 
        </div><br><br>
     <!-- Mbyllja e dropdown per zgjedhjen e dep dhe degeve -->


    <!-- Shfaqim  tabelen mbas selektimin e suksesshem te dropdown -->
     <?php 

 if(isset($_POST['kot'])){

        //merr id-te e vlerave te selektuara
        $dep=$_POST['dep'];
        $dega=$_POST['dega'];
        $viti=$_POST['viti'];
        $grupi=$_POST['grupi'];
       
     
        $_SESSION['dep'] = $dep;
        $_SESSION['dega'] = $dega;
        $_SESSION['viti'] = $viti;
        $_SESSION['grupi'] = $grupi;
  
  
   
         if(!empty($dep)  && !empty($dega)){

              
                ?>

                <script type="text/javascript">
                $(function(){
                    $('#orari').css({display:'block'});
                });
                
                </script>


                <?php
        }else{
            echo '<div id="perqef" > Selektoni Departamentin , Degen , Vitin , Grupin qe te vendosni Orarin!!</div>';
        }

 

}?>




<!-- Skripti per mbushjen e dropdown e degeve perkatese te departamentit te selektuar -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#dep').on('change',function(){
            var dep_id = $(this).val();
            if(dep_id){
                $.ajax({
                    type:'POST',
                    url:'ajaxData.php',
                    data:'D_id='+dep_id,
                    success:function(html){
                    $('#dega').html(html);
                    }
                }); 
            }else{
                $('#dega').html('<option value="">Zgjidh departamentin</option>');
            }
        });
    });
</script>









    <center style="display: none; z-index: 1 !important;" class="orari" id="orari" >
        
            <table border="1">
                <tr>
                    <td>ora</td>
                    <td>E Hene</td>
                    <td>E Marte</td>
                    <td>E Merkure</td>
                    <td>E Ejnte</td>
                    <td>E Premte</td>
                </tr>

                <tr>
                    <td>08:00 - 08:50</td>

                    <td><select name="hene1" class="selekti" style="width:137px">
                    <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {



                        	$L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='1' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}


                        
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select></td>





                    <td> <select name="marte1" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                          
                        	$L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='1' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}

                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>






                    <td> <select name="merkure1" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='1' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="ejnte1" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
	                           $L_id = $rresht['L_id'];
	                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='1' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
	                    	$orari_rows = $sql->num_rows;
	                    	if($orari_rows == 1){
	                    		$rresht_orari = $sql->fetch_assoc();
	                    		if($rresht_orari['LOS'] == '1'){
	                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
	                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
	                    	    }else if($rresht_orari['LOS'] == '2'){
	                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
	                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
	                    	    }else{
	                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
	                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
	                    	    }
	                    	}else{
	                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
	                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
	                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>


                    <td> <select name="premte1" class="selekti" style="width:137px">
                   <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='1' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>

                <tr>
                    <td>09:00 - 09:50</td>
                        <td> <select name="hene2" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='2' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>


                    <td> <select name="marte2" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='2' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>


                    <td> <select name="merkure2" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='2' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>


                    <td> <select name="ejnte2" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                              $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='2' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="premte2" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                              $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='2' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>





                <tr>
                    <td>10:00 - 10:50</td>
                    <td> <select name="hene3" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                              $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='3' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>





                    <td> <select name="marte3" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='3' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="merkure3" class="selekti" style="width:137px">
                      <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                              $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='3' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="ejnte3" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='3' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="premte3" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='3' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>

                <tr>
                    <td>11:00 - 11:50</td>
                    <td> <select name="hene4" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='4' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>


                    <td> <select name="marte4" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='4' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>


                    <td> <select name="merkure4" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='4' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>


                    <td> <select name="ejnte4" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='4' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>


                    <td> <select name="premte4" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='4' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>

                <tr>
                    <td>12:00 - 12:50</td>
                    <td> <select name="hene5" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='5' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>




                    <td> <select name="marte5" class="selekti" style="width:137px">
                      <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='5' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="merkure5" class="selekti" style="width:137px">
                      <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='5' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="ejnte5" class="selekti" style="width:137px">
                      <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='5' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="premte5" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='5' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>

                <tr>
                    <td>13:00 - 13:50</td>
                    <td> <select name="hene6" class="selekti" style="width:137px">
                      <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='6' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="marte6" class="selekti" style="width:137px">
                      <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='6' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="merkure6" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='6' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="ejnte6" class="selekti" style="width:137px">
                      <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='6' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="premte6" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='6' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>

                <tr>
                    <td>14:00 - 14:50</td>
                    <td> <select name="hene7" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='7' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="marte7" class="selekti" style="width:137px">
                        <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='7' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="merkure7" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='7' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="ejnte7" class="selekti" style="width:137px">
                      <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='7' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="premte7" class="selekti" style="width:137px">
                       <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='7' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>     
                </tr>

                <tr>
                    <td>15:00 - 15:50</td>
                    <td> <select name="hene8" class="selekti" style="width:137px">
                          <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='8' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>


                    <td> <select name="marte8" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='8' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="merkure8" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='8' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="ejnte8" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='8' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>



                    <td> <select name="premte8" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='8' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>     
                </tr>

                <tr>
                    <td>16:00 - 16:50</td>
                    <td> <select name="hene9" class="selekti" style="width:137px">
                          <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='9' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="marte9" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='9' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="merkure9" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='9' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="ejnte9" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='9' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="premte9" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='9' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>

                <tr>
                    <td>17:00 - 17:50</td>
                        <td> <select name="hene10" class="selekti" style="width:137px">
                          <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='10' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="marte10" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='10' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="merkure10" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='10' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="ejnte10" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='10' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="premte10" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='10' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>

                <tr>
                    <td>18:00 - 18:50</td>
                        <td> <select name="hene11" class="selekti" style="width:137px">
                          <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                             $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='11' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="marte11" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='11' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="merkure11" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='11' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="ejnte11" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='11' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="premte11" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='11' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>

                <tr>
                    <td>19:00 - 19:50</td>
                        <td> <select name="hene12" class="selekti" style="width:137px">
                          <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='12' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="marte12" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='12' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="merkure12" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='12' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="ejnte12" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='12' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="premte12" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='12' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>

                <tr>
                    <td>20:00 - 20:50</td>
                        <td> <select name="hene13" class="selekti" style="width:137px">
                          <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='hene' AND Ora='13' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="marte13" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='marte' AND Ora='13' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="merkure13" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                            $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='merkure' AND Ora='13' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="ejnte13" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='ejnte' AND Ora='13' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                    <td> <select name="premte13" class="selekti" style="width:137px">
                         <option value="-1"></option>
                    <?php 
                            $query_orari = $db->query("SELECT * from lendet where Dg_id='$dega'");
                            $nr_rows = $query_orari->num_rows;
                    if ($nr_rows!=0) { 

                        while ($rresht = $query_orari->fetch_assoc()) {
                           $L_id = $rresht['L_id'];
                    	$sql = $db->query("SELECT * from orari where Dita='premte' AND Ora='13' AND L_id = '$L_id' AND Dg_id='$dega' AND Viti='$viti' AND Grupi='$grupi'");
                    	$orari_rows = $sql->num_rows;
                    	if($orari_rows == 1){
                    		$rresht_orari = $sql->fetch_assoc();
                    		if($rresht_orari['LOS'] == '1'){
                    		  echo "<option value='1".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." LEKSION</option>";
                    		  echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else if($rresht_orari['LOS'] == '2'){
                    	      echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                    	      echo "<option value='2".$rresht['L_id']."' selected='selected'>".$rresht['Emri']." SEMINAR</option>";
                    	    }else{
                    	    	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        		echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	    }
                    	}else{
                        	echo "<option value='1".$rresht['L_id']."'>".$rresht['Emri']." LEKSION</option>";
                        	echo "<option value='2".$rresht['L_id']."'>".$rresht['Emri']." SEMINAR</option>";
                    	}
                        }

                    }else{
                        echo "<option value=''>Nuk ka lende</option>";
                        } ?>
                    </select> </td>
                </tr>
            </table>
            <center id="butoni">
            <input type="submit"  value="Save Orari" name="PlotesoOraret" style="width:200px;border:none;border-radius:0px;margin-top:10px;background-color:  #808080; color:white;">
            </center>
         
        </form>

    </center>


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

    </div>

  
     <?php } ?>
  
</body>
</html>