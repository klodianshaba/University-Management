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
                        <li><a  href="../nota/"><img src="../img/sign.png" class="circle-icon-sm">Vendos Nota</a></li>
                    </ul>
                </li>

				<li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="" ><img src="../img/sign.png" class="circle-icon-sm">Shiko Orarin</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../njoftimet/"><img src="../img/sign.png" class="circle-icon-sm" id="ntf">Njoftimet</a></li>
                        <li><a href="../njoftimet/"><img src="../img/sign.png" class="circle-icon-sm" id="" >Shto Njoftim</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <?php  include '../Querymenu.php';?>

    <div class="right-container">
        <div>
           <div class="title-bar" style="width:100%; height: 33px;margin-top: -4.25%;"><div id="" style="padding-top: 10px;">Shiko Oraret</div></div>
            <div class="bar-container" style=" min-height: 502px;">
              

                   

<?php 

  $dbhost = 'localhost';
                    $dbuser = 'root';
                    $dbpass = '';
                    $db ='university';
                    $conni = mysql_connect($dbhost, $dbuser, $dbpass);
                    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
                    mysql_select_db('university');

?>







    <?php
    //Lidhje me databazen dhe krijimi i objektit
    include('orari/dbConfig.php');
    
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
            <input type="submit" value="Shikoni Orarin" id="butoni" name="kot" class="result-btn" style="width:10%;">  
        </div>
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
                    $('#oraristudent').css({display:'block'});
                });
                
                </script>


                <?php
        }else{
            echo '<div id="perqef" style="margin-top:10px;"> Selektoni Departamentin , Degen , Viti dhe Grupin qe tju shfaqim Orarin!! </div>';
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

<br><br><br>
<center  id="oraristudent" style="display: none;">
  <form>
    <table border="1">
      <tr>
        <td class="e1" >Ora</td>
        <td >E Hene</td>
        <td >E Marte</td>
        <td >E Merkure</td>
        <td >E Ejnte</td>
        <td >E Premte</td>
      </tr>
      <tr>
        <td class="e1">8:00 - 8:50</td>
        <td>
            <?php 

                 $hene1  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='1'");
               $hene1 = mysql_fetch_assoc($hene1);
               $LOSh1 = $hene1['LOS'];
               $hene1 = $hene1['L_id'];
               if ($LOSh1==1) {
                  $LOSh1 = 'LEKSION';
                 $lend_hen1 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene1'");
                 $lend_hen1 = mysql_fetch_assoc($lend_hen1);
                 $lend_hen1 = $lend_hen1['L_P_id'];
                 $lend_hen1 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen1'");
                 $lend_hen1 = mysql_fetch_assoc($lend_hen1);
                 $prof_hen1 = $lend_hen1['Emri'].$lend_hen1['Mbiemri'];
               }else if($LOSh1 == 2){
                  $LOSh1 = 'SEMINAR';
                 $lend_hen1 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene1'");
                 $lend_hen1 = mysql_fetch_assoc($lend_hen1);
                 $lend_hen1 = $lend_hen1['L_P_id'];
                 $lend_hen1 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen1'");
                 $lend_hen1 = mysql_fetch_assoc($lend_hen1);
                 $prof_hen1 = $lend_hen1['Emri'].$lend_hen1['Mbiemri']; 
               }
               if ($LOSh1 == '-1') {
                 echo "";
               }else{
                 $lend_hen1 = mysql_query("SELECT Emri from lendet where L_id='$hene1'");
                 $lend_hen1 = mysql_fetch_assoc($lend_hen1);
                 $lend_hen1 = $lend_hen1['Emri'];

                 echo @$lend_hen1,"<br>",@$LOSh1,"<br>",@$prof_hen1;
               }

           ?>         
        </td>

        <td>
          <?php 

               $marte1  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='1'");
               $marte1 = mysql_fetch_assoc($marte1);
               $LOSm1 = $marte1['LOS'];
               $marte1 = $marte1['L_id'];
               if ($LOSm1==1) {
                  $LOSm1 = 'LEKSION';
                 $lend_mar1 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte1'");
                 $lend_mar1 = mysql_fetch_assoc($lend_mar1);
                 $lend_mar1 = $lend_mar1['L_P_id'];
                 $lend_mar1 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar1'");
                 $lend_mar1 = mysql_fetch_assoc($lend_mar1);
                 $prof_mar1 = $lend_mar1['Emri'].$lend_mar1['Mbiemri'];
               }else if($LOSm1 == 2){
                  $LOSm1 = 'SEMINAR';
                 $lend_mar1 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte1'");
                 $lend_mar1 = mysql_fetch_assoc($lend_mar1);
                 $lend_mar1 = $lend_mar1['L_P_id'];
                 $lend_mar1 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar1'");
                 $lend_mar1 = mysql_fetch_assoc($lend_mar1);
                 $prof_mar1 = $lend_mar1['Emri'].$lend_mar1['Mbiemri']; 
               }
               if($LOSm1 == '-1'){

                echo "";
               }else{
               $lend_mar1 = mysql_query("SELECT Emri from lendet where L_id='$marte1'");
               $lend_mar1 = mysql_fetch_assoc($lend_mar1);
               $lend_mar1 = $lend_mar1['Emri'];
               echo @$lend_mar1,"<br>",@$LOSm1,"<br>",@$prof_mar1;
               }


               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure1  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='1'");
               $merkure1 = mysql_fetch_assoc($merkure1);
               $LOSmer1 = $merkure1['LOS'];
               $merkure1 = $merkure1['L_id'];
               if ($LOSmer1==1) {
                  $LOSmer1 = 'LEKSION';
                 $lend_mer1 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure1'");
                 $lend_mer1 = mysql_fetch_assoc($lend_mer1);
                 $lend_mer1 = $lend_mer1['L_P_id'];
                 $lend_mer1 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer1'");
                 $lend_mer1 = mysql_fetch_assoc($lend_mer1);
                 $prof_mer1 = $lend_mer1['Emri'].$lend_mer1['Mbiemri'];
               }else if($LOSmer1 == 2){
                  $LOSmer1 = 'SEMINAR';
                 $lend_mer1 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure1'");
                 $lend_mer1 = mysql_fetch_assoc($lend_mer1);
                 $lend_mer1 = $lend_mer1['L_P_id'];
                 $lend_mer1 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer1'");
                 $lend_mer1 = mysql_fetch_assoc($lend_mer1);
                 $prof_mer1 = $lend_mer1['Emri'].$lend_mer1['Mbiemri']; 
               }
               if ($LOSmer1 == '-1') {
                 echo "";
               }else{
               $lend_mer1 = mysql_query("SELECT Emri from lendet where L_id='$merkure1'");
               $lend_mer1 = mysql_fetch_assoc($lend_mer1);
               $lend_mer1 = $lend_mer1['Emri'];
               echo @$lend_mer1,"<br>",@$LOSmer1,"<br>",@$prof_mer1;
               }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte1  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='1'");
               $ejnte1 = mysql_fetch_assoc($ejnte1);
               $LOSe1 = $ejnte1['LOS'];
               $ejnte1 = $ejnte1['L_id'];
               if ($LOSe1==1) {
                  $LOSe1 = 'LEKSION';
                 $lend_e1 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte1'");
                 $lend_e1 = mysql_fetch_assoc($lend_e1);
                 $lend_e1 = $lend_e1['L_P_id'];
                 $lend_e1 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e1'");
                 $lend_e1 = mysql_fetch_assoc($lend_e1);
                 $prof_e1 = $lend_e1['Emri'].$lend_e1['Mbiemri'];
               }else if($LOSe1 == 2){
                  $LOSe1 = 'SEMINAR';
                 $lend_e1 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte1'");
                 $lend_e1 = mysql_fetch_assoc($lend_e1);
                 $lend_e1 = $lend_e1['L_P_id'];
                 $lend_e1 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e1'");
                 $lend_e1 = mysql_fetch_assoc($lend_e1);
                 $prof_e1 = $lend_e1['Emri'].$lend_e1['Mbiemri']; 
               }
               if ($LOSe1 == '-1') {
                 echo "";
               }else{
               $lend_e1 = mysql_query("SELECT Emri from lendet where L_id='$ejnte1'");
               $lend_e1 = mysql_fetch_assoc($lend_e1);
               $lend_e1 = $lend_e1['Emri'];

               echo @$lend_e1,"<br>",@$LOSe1,"<br>",@$prof_e1;
               }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte1  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='1'");
               $premte1 = mysql_fetch_assoc($premte1);
               $LOSpr1 = $premte1['LOS'];
               $premte1 = $premte1['L_id'];
               if ($LOSpr1==1) {
                  $LOSpr1 = 'LEKSION';
                 $lend_pr1 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte1'");
                 $lend_pr1 = mysql_fetch_assoc($lend_pr1);
                 $lend_pr1 = $lend_pr1['L_P_id'];
                 $lend_pr1 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr1'");
                 $lend_pr1 = mysql_fetch_assoc($lend_pr1);
                 $prof_pr1 = $lend_pr1['Emri'].$lend_pr1['Mbiemri'];
               }else if($LOSpr1 == 2){
                  $LOSpr1 = 'SEMINAR';
                 $lend_pr1 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte1'");
                 $lend_pr1 = mysql_fetch_assoc($lend_pr1);
                 $lend_pr1 = $lend_pr1['L_P_id'];
                 $lend_pr1 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr1'");
                 $lend_pr1 = mysql_fetch_assoc($lend_pr1);
                 $prof_pr1 = $lend_pr1['Emri'].$lend_pr1['Mbiemri'];  
               }
               if ($LOSpr1 == '-1') {
                 echo "";
               }else{
               $lend_pr1 = mysql_query("SELECT Emri from lendet where L_id='$premte1'");
               $lend_pr1 = mysql_fetch_assoc($lend_pr1);
               $lend_pr1 = $lend_pr1['Emri'];

               echo @$lend_pr1,"<br>",@$LOSpr1,"<br>",@$prof_pr1;
               }
               
           ?>         
        </td>
      </tr>

      <tr>
        <td class="e1">9:00 - 9:50</td>

        <td>
          <?php 

                 $hene2  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='2'");
               $hene2 = mysql_fetch_assoc($hene2);
               $LOShen2 = $hene2['LOS'];
               $hene2 = $hene2['L_id'];
               if ($LOShen2==1) {
                  $LOShen2 = 'LEKSION';
                 $lend_hen2 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene2'");
                 $lend_hen2 = mysql_fetch_assoc($lend_hen2);
                 $lend_hen2 = $lend_hen2['L_P_id'];
                 $lend_hen2 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen2'");
                 $lend_hen2 = mysql_fetch_assoc($lend_hen2);
                 $prof_hen2 = $lend_hen2['Emri'].$lend_hen2['Mbiemri'];
               }else if($LOShen2 == 2){
                  $LOShen2 = 'SEMINAR';
                 $lend_hen2 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene2'");
                 $lend_hen2 = mysql_fetch_assoc($lend_hen2);
                 $lend_hen2 = $lend_hen2['L_P_id'];
                 $lend_hen2 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen2'");
                 $lend_hen2 = mysql_fetch_assoc($lend_hen2);
                 $prof_hen2 = $lend_hen2['Emri'].$lend_hen2['Mbiemri']; 
               }
               if ($LOShen2 == '-1') {
                 echo "";
               }else{
               $lend_hen2 = mysql_query("SELECT Emri from lendet where L_id='$hene2'");
               $lend_hen2 = mysql_fetch_assoc($lend_hen2);
               $lend_hen2 = $lend_hen2['Emri'];

               echo @$lend_hen2,"<br>",@$LOShen2,"<br>",@$prof_hen2;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $marte2  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='2'");
               $marte2 = mysql_fetch_assoc($marte2);
               $LOSmar2 = $marte2['LOS'];
               $marte2 = $marte2['L_id'];
               if ($LOSmar2==1) {
                  $LOSmar2 = 'LEKSION';
                 $lend_mar2 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte2'");
                 $lend_mar2 = mysql_fetch_assoc($lend_mar2);
                 $lend_mar2 = $lend_mar2['L_P_id'];
                 $lend_mar2 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar2'");
                 $lend_mar2 = mysql_fetch_assoc($lend_mar2);
                 $prof_mar2 = $lend_mar2['Emri'].$lend_mar2['Mbiemri'];
               }else if($LOSmar2 == 2){
                  $LOSmar2 = 'SEMINAR';
                 $lend_mar2 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte2'");
                 $lend_mar2 = mysql_fetch_assoc($lend_mar2);
                 $lend_mar2 = $lend_mar2['L_P_id'];
                 $lend_mar2 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar2'");
                 $lend_mar2 = mysql_fetch_assoc($lend_mar2);
                 $prof_mar2 = $lend_mar2['Emri'].$lend_mar2['Mbiemri']; 
               }
               if ($LOSmar2 == '-1') {
                 echo "";
               }else{
               $lend_mar2 = mysql_query("SELECT Emri from lendet where L_id='$marte2'");
               $lend_mar2 = mysql_fetch_assoc($lend_mar2);
               $lend_mar2 = $lend_mar2['Emri'];

               echo @$lend_mar2,"<br>",@$LOSmar2,"<br>",@$prof_mar2;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure2  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='2'");
               $merkure2 = mysql_fetch_assoc($merkure2);
               $LOSmer2 = $merkure2['LOS'];
               $merkure2 = $merkure2['L_id'];
               if ($LOSmer2==1) {
                  $LOSmer2 = 'LEKSION';
                 $lend_mer2 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure2'");
                 $lend_mer2 = mysql_fetch_assoc($lend_mer2);
                 $lend_mer2 = $lend_mer2['L_P_id'];
                 $lend_mer2 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer2'");
                 $lend_mer2 = mysql_fetch_assoc($lend_mer2);
                 $prof_mer2 = $lend_mer2['Emri'].$lend_mer2['Mbiemri'];
               }else if($LOSmer2 == 2){
                  $LOSmer2 = 'SEMINAR';
                 $lend_mer2 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure2'");
                 $lend_mer2 = mysql_fetch_assoc($lend_mer2);
                 $lend_mer2 = $lend_mer2['L_P_id'];
                 $lend_mer2 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer1'");
                 $lend_mer2 = mysql_fetch_assoc($lend_mer2);
                 $prof_mer2 = $lend_mer2['Emri'].$lend_mer2['Mbiemri']; 
               }
               if ($LOSmer2 == '-1') {
                 echo "";
               }else{
               $lend_mer2 = mysql_query("SELECT Emri from lendet where L_id='$merkure2'");
               $lend_mer2 = mysql_fetch_assoc($lend_mer2);
               $lend_mer2 = $lend_mer2['Emri'];

               echo @$lend_mer2,"<br>",@$LOSmer2,"<br>",@$prof_mer2;
                }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte2  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='2'");
               $ejnte2 = mysql_fetch_assoc($ejnte2);
               $LOSe2 = $ejnte2['LOS'];
               $ejnte2 = $ejnte2['L_id'];
               if ($LOSe2==1) {
                  $LOSe2 = 'LEKSION';
                 $lend_e2 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte2'");
                 $lend_e2 = mysql_fetch_assoc($lend_e2);
                 $lend_e2 = $lend_e2['L_P_id'];
                 $lend_e2 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e2'");
                 $lend_e2 = mysql_fetch_assoc($lend_e2);
                 $prof_e2 = $lend_e2['Emri'].$lend_e2['Mbiemri'];
               }else if($LOSe2 == 2){
                  $LOSe2 = 'SEMINAR';
                 $lend_e2 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte2'");
                 $lend_e2 = mysql_fetch_assoc($lend_e2);
                 $lend_e2 = $lend_e2['L_P_id'];
                 $lend_e2 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e2'");
                 $lend_e2 = mysql_fetch_assoc($lend_e2);
                 $prof_e2 = $lend_e2['Emri'].$lend_e2['Mbiemri']; 
               }
               if ($LOSe2 == '-1') {
                echo "";
               }else{
               $lend_e2 = mysql_query("SELECT Emri from lendet where L_id='$ejnte2'");
               $lend_e2 = mysql_fetch_assoc($lend_e2);
               $lend_e2 = $lend_e2['Emri'];

               echo @$lend_e2,"<br>",@$LOSe2,"<br>",@$prof_e2;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte2  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='2'");
               $premte2 = mysql_fetch_assoc($premte2);
               $LOSpr2 = $premte2['LOS'];
               $premte2 = $premte2['L_id'];
               if ($LOSpr2==1) {
                  $LOSpr2 = 'LEKSION';
                 $lend_pr2 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte2'");
                 $lend_pr2 = mysql_fetch_assoc($lend_pr2);
                 $lend_pr2 = $lend_pr2['L_P_id'];
                 $lend_pr2 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr2'");
                 $lend_pr2 = mysql_fetch_assoc($lend_pr2);
                 $prof_pr2 = $lend_pr2['Emri'].$lend_pr2['Mbiemri'];
               }else if($LOSpr2 == 2){
                  $LOSpr2 = 'SEMINAR';
                 $lend_pr2 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte2'");
                 $lend_pr2 = mysql_fetch_assoc($lend_pr2);
                 $lend_pr2 = $lend_pr2['L_P_id'];
                 $lend_pr2 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr2'");
                 $lend_pr2 = mysql_fetch_assoc($lend_pr2);
                 $prof_pr2 = $lend_pr2['Emri'].$lend_pr2['Mbiemri'];  
               }
               if ($LOSpr2 == '-1') {
                 echo "";
               }else{
               $lend_pr2 = mysql_query("SELECT Emri from lendet where L_id='$premte2'");
               $lend_pr2 = mysql_fetch_assoc($lend_pr2);
               $lend_pr2 = $lend_pr2['Emri'];

               echo @$lend_pr2,"<br>",@$LOSpr2,"<br>",@$prof_pr2;
             }
               
           ?>         
        </td>
      </tr>

      <tr>
        <td class="e1">10:00 - 10:50</td>

        <td>
          <?php 

                 $hene3  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='3'");
               $hene3 = mysql_fetch_assoc($hene3);
               $LOShen3 = $hene3['LOS'];
               $hene3 = $hene3['L_id'];
               if ($LOShen3==1) {
                  $LOShen3 = 'LEKSION';
                 $lend_hen3 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene3'");
                 $lend_hen3 = mysql_fetch_assoc($lend_hen3);
                 $lend_hen3 = $lend_hen3['L_P_id'];
                 $lend_hen3 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen3'");
                 $lend_hen3 = mysql_fetch_assoc($lend_hen3);
                 $prof_hen3 = $lend_hen3['Emri'].$lend_hen3['Mbiemri'];
               }else if($LOShen3 == 2){
                  $LOShen3 = 'SEMINAR';
                 $lend_hen3 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene3'");
                 $lend_hen3 = mysql_fetch_assoc($lend_hen3);
                 $lend_hen3 = $lend_hen3['L_P_id'];
                 $lend_hen3 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen3'");
                 $lend_hen3 = mysql_fetch_assoc($lend_hen3);
                 $prof_hen3 = $lend_hen3['Emri'].$lend_hen3['Mbiemri']; 
               }
               if ($LOShen3 == '-1') {
                 echo "";
               }else{
               $lend_hen3 = mysql_query("SELECT Emri from lendet where L_id='$hene3'");
               $lend_hen3 = mysql_fetch_assoc($lend_hen3);
               $lend_hen3 = $lend_hen3['Emri'];

               echo @$lend_hen3,"<br>",@$LOShen3,"<br>",@$prof_hen3;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $marte3  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='3'");
               $marte3 = mysql_fetch_assoc($marte3);
               $LOSmar3 = $marte3['LOS'];
               $marte3 = $marte3['L_id'];
               if ($LOSmar3==1) {
                  $LOSmar3 = 'LEKSION';
                 $lend_mar3 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte3'");
                 $lend_mar3 = mysql_fetch_assoc($lend_mar3);
                 $lend_mar3 = $lend_mar3['L_P_id'];
                 $lend_mar3 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar3'");
                 $lend_mar3 = mysql_fetch_assoc($lend_mar3);
                 $prof_mar3 = $lend_mar3['Emri'].$lend_mar3['Mbiemri'];
               }else if($LOSmar3 == 2){
                  $LOSmar3 = 'SEMINAR';
                 $lend_mar3 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte3'");
                 $lend_mar3 = mysql_fetch_assoc($lend_mar3);
                 $lend_mar3 = $lend_mar3['L_P_id'];
                 $lend_mar3 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar3'");
                 $lend_mar3 = mysql_fetch_assoc($lend_mar3);
                 $prof_mar3 = $lend_mar3['Emri'].$lend_mar3['Mbiemri']; 
               }
               if ($LOSmar3 == '-1') {
                 echo "";
               }else{
               $lend_mar3 = mysql_query("SELECT Emri from lendet where L_id='$marte3'");
               $lend_mar3 = mysql_fetch_assoc($lend_mar3);
               $lend_mar3 = $lend_mar3['Emri'];

               echo @$lend_mar3,"<br>",@$LOSmar3,"<br>",@$prof_mar3;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure3  = mysql_query("select LOS,L_id from orari where  Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='3'");
               $merkure3 = mysql_fetch_assoc($merkure3);
               $LOSmer3 = $merkure3['LOS'];
               $merkure3 = $merkure3['L_id'];
               if ($LOSmer3==1) {
                  $LOSmer3 = 'LEKSION';
                 $lend_mer3 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure3'");
                 $lend_mer3 = mysql_fetch_assoc($lend_mer3);
                 $lend_mer3 = $lend_mer3['L_P_id'];
                 $lend_mer3 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer3'");
                 $lend_mer3 = mysql_fetch_assoc($lend_mer3);
                 $prof_mer3 = $lend_mer3['Emri'].$lend_mer3['Mbiemri'];
               }else if($LOSmer3 == 2){
                  $LOSmer3 = 'SEMINAR';
                 $lend_mer3 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure3'");
                 $lend_mer3 = mysql_fetch_assoc($lend_mer3);
                 $lend_mer3 = $lend_mer3['L_P_id'];
                 $lend_mer3 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer3'");
                 $lend_mer3 = mysql_fetch_assoc($lend_mer3);
                 $prof_mer3 = $lend_mer3['Emri'].$lend_mer3['Mbiemri']; 
               }
               if ($LOSmer3 == '-1') {
                 echo "";
               }else{
               $lend_mer3 = mysql_query("SELECT Emri from lendet where L_id='$merkure3'");
               $lend_mer3 = mysql_fetch_assoc($lend_mer3);
               $lend_mer3 = $lend_mer3['Emri'];

               echo @$lend_mer3,"<br>",@$LOSmer3,"<br>",@$prof_mer3;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte3  = mysql_query("select LOS,L_id from orari where  Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='3'");
               $ejnte3 = mysql_fetch_assoc($ejnte3);
               $LOSe3 = $ejnte3['LOS'];
               $ejnte3 = $ejnte3['L_id'];
               if ($LOSe3==1) {
                  $LOSe3 = 'LEKSION';
                 $lend_e3 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte3'");
                 $lend_e3 = mysql_fetch_assoc($lend_e3);
                 $lend_e3 = $lend_e3['L_P_id'];
                 $lend_e3 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e3'");
                 $lend_e3 = mysql_fetch_assoc($lend_e3);
                 $prof_e3 = $lend_e3['Emri'].$lend_e3['Mbiemri'];
               }else if($LOSe3 == 2){
                  $LOSe3 = 'SEMINAR';
                 $lend_e3 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte3'");
                 $lend_e3 = mysql_fetch_assoc($lend_e3);
                 $lend_e3 = $lend_e3['L_P_id'];
                 $lend_e3 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e3'");
                 $lend_e3 = mysql_fetch_assoc($lend_e3);
                 $prof_e3 = $lend_e3['Emri'].$lend_e3['Mbiemri']; 
               }
               if ($LOSe3 == '-1') {
                 echo "";
               }else{
               $lend_e3 = mysql_query("SELECT Emri from lendet where L_id='$ejnte3'");
               $lend_e3 = mysql_fetch_assoc($lend_e3);
               $lend_e3 = $lend_e3['Emri'];

               echo @$lend_e3,"<br>",@$LOSe3,"<br>",@$prof_e3;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte3  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='3'");
               $premte3 = mysql_fetch_assoc($premte3);
               $LOSpr3 = $premte3['LOS'];
               $premte3 = $premte3['L_id'];
               if ($LOSpr3==1) {
                  $LOSpr3 = 'LEKSION';
                 $lend_pr3 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte3'");
                 $lend_pr3 = mysql_fetch_assoc($lend_pr3);
                 $lend_pr3 = $lend_pr3['L_P_id'];
                 $lend_pr3 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr3'");
                 $lend_pr3 = mysql_fetch_assoc($lend_pr3);
                 $prof_pr3 = $lend_pr3['Emri'].$lend_pr3['Mbiemri'];
               }else if($LOSpr3 == 2){
                  $LOSpr3 = 'SEMINAR';
                 $lend_pr3 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte3'");
                 $lend_pr3 = mysql_fetch_assoc($lend_pr3);
                 $lend_pr3 = $lend_pr3['L_P_id'];
                 $lend_pr3 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr3'");
                 $lend_pr3 = mysql_fetch_assoc($lend_pr3);
                 $prof_pr3 = $lend_pr3['Emri'].$lend_pr3['Mbiemri'];  
               }
               if ($LOSpr3 == '-1') {
                 echo "";
               }else{
               $lend_pr3 = mysql_query("SELECT Emri from lendet where L_id='$premte3'");
               $lend_pr3 = mysql_fetch_assoc($lend_pr3);
               $lend_pr3 = $lend_pr3['Emri'];

               echo @$lend_pr3,"<br>",@$LOSpr3,"<br>",@$prof_pr3;
             }
               
           ?>         
        </td>
      </tr>

      <tr>
        <td class="e1">11:00 - 11:50</td>

        <td>
          <?php 

                 $hene4  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='4'");
               $hene4 = mysql_fetch_assoc($hene4);
               $LOShen4 = $hene4['LOS'];
               $hene4 = $hene4['L_id'];
               if ($LOShen4==1) {
                  $LOShen4 = 'LEKSION';
                 $lend_hen4 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene4'");
                 $lend_hen4 = mysql_fetch_assoc($lend_hen4);
                 $lend_hen4 = $lend_hen4['L_P_id'];
                 $lend_hen4 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen4'");
                 $lend_hen4 = mysql_fetch_assoc($lend_hen4);
                 $prof_hen4 = $lend_hen4['Emri'].$lend_hen4['Mbiemri'];
               }else if($LOShen4 == 2){
                  $LOShen4 = 'SEMINAR';
                 $lend_hen4 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene4'");
                 $lend_hen4 = mysql_fetch_assoc($lend_hen4);
                 $lend_hen4 = $lend_hen4['L_P_id'];
                 $lend_hen4 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen4'");
                 $lend_hen4 = mysql_fetch_assoc($lend_hen4);
                 $prof_hen4 = $lend_hen4['Emri'].$lend_hen4['Mbiemri']; 
               }
               if ($LOShen4 == '-1') {
                 echo "";
               }else{
               $lend_hen4 = mysql_query("SELECT Emri from lendet where L_id='$hene4'");
               $lend_hen4 = mysql_fetch_assoc($lend_hen4);
               $lend_hen4 = $lend_hen4['Emri'];

               echo @$lend_hen4,"<br>",@$LOShen4,"<br>",@$prof_hen4;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $marte4  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='4'");
               $marte4 = mysql_fetch_assoc($marte4);
               $LOSmar4 = $marte4['LOS'];
               $marte4 = $marte4['L_id'];
               if ($LOSmar4==1) {
                  $LOSmar4 = 'LEKSION';
                 $lend_mar4 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte4'");
                 $lend_mar4 = mysql_fetch_assoc($lend_mar4);
                 $lend_mar4 = $lend_mar4['L_P_id'];
                 $lend_mar4 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar4'");
                 $lend_mar4 = mysql_fetch_assoc($lend_mar4);
                 $prof_mar4 = $lend_mar4['Emri'].$lend_mar4['Mbiemri'];
               }else if($LOSmar4 == 2){
                  $LOSmar4 = 'SEMINAR';
                 $lend_mar4 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte4'");
                 $lend_mar4 = mysql_fetch_assoc($lend_mar4);
                 $lend_mar4 = $lend_mar4['L_P_id'];
                 $lend_mar4 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar4'");
                 $lend_mar4 = mysql_fetch_assoc($lend_mar4);
                 $prof_mar4 = $lend_mar4['Emri'].$lend_mar4['Mbiemri']; 
               }
               if ($LOSmar4 == '-1') {
                 echo "";
               }else{
               $lend_mar4 = mysql_query("SELECT Emri from lendet where L_id='$marte4'");
               $lend_mar4 = mysql_fetch_assoc($lend_mar4);
               $lend_mar4 = $lend_mar4['Emri'];

               echo @$lend_mar4,"<br>",@$LOSmar4,"<br>",@$prof_mar4;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure4  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='4'");
               $merkure4 = mysql_fetch_assoc($merkure4);
               $LOSmer4 = $merkure4['LOS'];
               $merkure4 = $merkure4['L_id'];
               if ($LOSmer4==1) {
                  $LOSmer4 = 'LEKSION';
                 $lend_mer4 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure4'");
                 $lend_mer4 = mysql_fetch_assoc($lend_mer4);
                 $lend_mer4 = $lend_mer4['L_P_id'];
                 $lend_mer4 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer4'");
                 $lend_mer4 = mysql_fetch_assoc($lend_mer4);
                 $prof_mer4 = $lend_mer4['Emri'].$lend_mer4['Mbiemri'];
               }else if($LOSmer4 == 2){
                  $LOSmer4 = 'SEMINAR';
                 $lend_mer4 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure4'");
                 $lend_mer4 = mysql_fetch_assoc($lend_mer4);
                 $lend_mer4 = $lend_mer4['L_P_id'];
                 $lend_mer4 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer4'");
                 $lend_mer4 = mysql_fetch_assoc($lend_mer4);
                 $prof_mer4 = $lend_mer4['Emri'].$lend_mer4['Mbiemri']; 
               }
               if ($LOSmer4 == '-1') {
                 echo "";
               }else{
               $lend_mer4 = mysql_query("SELECT Emri from lendet where L_id='$merkure4'");
               $lend_mer4 = mysql_fetch_assoc($lend_mer4);
               $lend_mer4 = $lend_mer4['Emri'];

               echo @$lend_mer4,"<br>",@$LOSmer4,"<br>",@$prof_mer4;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte4  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='4'");
               $ejnte4 = mysql_fetch_assoc($ejnte4);
               $LOSe4 = $ejnte4['LOS'];
               $ejnte4 = $ejnte4['L_id'];
               if ($LOSe4==1) {
                  $LOSe4 = 'LEKSION';
                 $lend_e4 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte4'");
                 $lend_e4 = mysql_fetch_assoc($lend_e4);
                 $lend_e4 = $lend_e4['L_P_id'];
                 $lend_e4 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e4'");
                 $lend_e4 = mysql_fetch_assoc($lend_e4);
                 $prof_e4 = $lend_e4['Emri'].$lend_e4['Mbiemri'];
               }else if($LOSe4 == 2){
                  $LOSe4 = 'SEMINAR';
                 $lend_e4 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte4'");
                 $lend_e4 = mysql_fetch_assoc($lend_e4);
                 $lend_e4 = $lend_e4['L_P_id'];
                 $lend_e4 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e4'");
                 $lend_e4 = mysql_fetch_assoc($lend_e4);
                 $prof_e4 = $lend_e4['Emri'].$lend_e4['Mbiemri']; 
               }
               if ($LOSe4 == '-1') {
                 echo "";
               }else{
               $lend_e4 = mysql_query("SELECT Emri from lendet where L_id='$ejnte4'");
               $lend_e4 = mysql_fetch_assoc($lend_e4);
               $lend_e4 = $lend_e4['Emri'];

               echo @$lend_e4,"<br>",@$LOSe4,"<br>",@$prof_e4;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte4  = mysql_query("select LOS,L_id from orari where  Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='4'");
               $premte4 = mysql_fetch_assoc($premte4);
               $LOSpr4 = $premte4['LOS'];
               $premte4 = $premte4['L_id'];
               if ($LOSpr4==1) {
                  $LOSpr4 = 'LEKSION';
                 $lend_pr4 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte4'");
                 $lend_pr4 = mysql_fetch_assoc($lend_pr4);
                 $lend_pr4 = $lend_pr4['L_P_id'];
                 $lend_pr4 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr4'");
                 $lend_pr4 = mysql_fetch_assoc($lend_pr4);
                 $prof_pr4 = $lend_pr4['Emri'].$lend_pr4['Mbiemri'];
               }else if($LOSpr4 == 2){
                  $LOSpr4 = 'SEMINAR';
                 $lend_pr4 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte4'");
                 $lend_pr4 = mysql_fetch_assoc($lend_pr4);
                 $lend_pr4 = $lend_pr4['L_P_id'];
                 $lend_pr4 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr4'");
                 $lend_pr4 = mysql_fetch_assoc($lend_pr4);
                 $prof_pr4 = $lend_pr4['Emri'].$lend_pr4['Mbiemri'];  
               }
               if ($LOSpr4 == '-1') {
                 echo "";
               }else{
               $lend_pr4 = mysql_query("SELECT Emri from lendet where L_id='$premte4'");
               $lend_pr4 = mysql_fetch_assoc($lend_pr4);
               $lend_pr4 = $lend_pr4['Emri'];

               echo @$lend_pr4,"<br>",@$LOSpr4,"<br>",@$prof_pr4;
             }
               
           ?>         
        </td>
      </tr>

      <tr>
        <td class="e1">12:00 - 12:50</td>

        <td>
          <?php 

                 $hene5  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='5'");
               $hene5 = mysql_fetch_assoc($hene5);
               $LOShen5 = $hene5['LOS'];
               $hene5 = $hene5['L_id'];
               if ($LOShen5==1) {
                  $LOShen5 = 'LEKSION';
                 $lend_hen5 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene5'");
                 $lend_hen5 = mysql_fetch_assoc($lend_hen5);
                 $lend_hen5 = $lend_hen5['L_P_id'];
                 $lend_hen5 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen5'");
                 $lend_hen5 = mysql_fetch_assoc($lend_hen5);
                 $prof_hen5 = $lend_hen5['Emri'].$lend_hen5['Mbiemri'];
               }else if($LOShen5 == 2){
                  $LOShen5 = 'SEMINAR';
                 $lend_hen5 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene5'");
                 $lend_hen5 = mysql_fetch_assoc($lend_hen5);
                 $lend_hen5 = $lend_hen5['L_P_id'];
                 $lend_hen5 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen5'");
                 $lend_hen5 = mysql_fetch_assoc($lend_hen5);
                 $prof_hen5 = $lend_hen5['Emri'].$lend_hen5['Mbiemri']; 
               }
               if ($LOShen5 == '-1') {
                 echo "";
               }else{
               $lend_hen5 = mysql_query("SELECT Emri from lendet where L_id='$hene5'");
               $lend_hen5 = mysql_fetch_assoc($lend_hen5);
               $lend_hen5 = $lend_hen5['Emri'];

               echo @$lend_hen5,"<br>",@$LOShen5,"<br>",@$prof_hen5;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $marte5  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='5'");
               $marte5 = mysql_fetch_assoc($marte5);
               $LOSmar5 = $marte5['LOS'];
               $marte5 = $marte5['L_id'];
               if ($LOSmar5==1) {
                  $LOSmar5 = 'LEKSION';
                 $lend_mar5 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte5'");
                 $lend_mar5 = mysql_fetch_assoc($lend_mar5);
                 $lend_mar5 = $lend_mar5['L_P_id'];
                 $lend_mar5 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar5'");
                 $lend_mar5 = mysql_fetch_assoc($lend_mar5);
                 $prof_mar5 = $lend_mar5['Emri'].$lend_mar5['Mbiemri'];
               }else if($LOSmar5 == 2){
                  $LOSmar5 = 'SEMINAR';
                 $lend_mar5 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte5'");
                 $lend_mar5 = mysql_fetch_assoc($lend_mar5);
                 $lend_mar5 = $lend_mar5['L_P_id'];
                 $lend_mar5 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar5'");
                 $lend_mar5 = mysql_fetch_assoc($lend_mar5);
                 $prof_mar5 = $lend_mar5['Emri'].$lend_mar5['Mbiemri']; 
               }
               if ($LOSmar5 == '-1') {
                 echo "";
               }else{
               $lend_mar5 = mysql_query("SELECT Emri from lendet where L_id='$marte5'");
               $lend_mar5 = mysql_fetch_assoc($lend_mar5);
               $lend_mar5 = $lend_mar5['Emri'];

               echo @$lend_mar5,"<br>",@$LOSmar5,"<br>",@$prof_mar5;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure5  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and  dita='merkure' AND ora='5'");
               $merkure5 = mysql_fetch_assoc($merkure5);
               $LOSmer5 = $merkure5['LOS'];
               $merkure5 = $merkure5['L_id'];
               if ($LOSmer5==1) {
                  $LOSmer5 = 'LEKSION';
                 $lend_mer5 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure5'");
                 $lend_mer5 = mysql_fetch_assoc($lend_mer5);
                 $lend_mer5 = $lend_mer5['L_P_id'];
                 $lend_mer5 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer5'");
                 $lend_mer5 = mysql_fetch_assoc($lend_mer5);
                 $prof_mer5 = $lend_mer5['Emri'].$lend_mer5['Mbiemri'];
               }else if($LOSmer5 == 2){
                  $LOSmer5 = 'SEMINAR';
                 $lend_mer5 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure5'");
                 $lend_mer5 = mysql_fetch_assoc($lend_mer5);
                 $lend_mer5 = $lend_mer5['L_P_id'];
                 $lend_mer5 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer5'");
                 $lend_mer5 = mysql_fetch_assoc($lend_mer5);
                 $prof_mer5 = $lend_mer5['Emri'].$lend_mer5['Mbiemri']; 
               }
               if ($LOSmer5 == '-1') {
                 echo "";
               }else{
               $lend_mer5 = mysql_query("SELECT Emri from lendet where L_id='$merkure5'");
               $lend_mer5 = mysql_fetch_assoc($lend_mer5);
               $lend_mer5 = $lend_mer5['Emri'];

               echo @$lend_mer5,"<br>",@$LOSmer5,"<br>",@$prof_mer5;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte5  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='5'");
               $ejnte5 = mysql_fetch_assoc($ejnte5);
               $LOSe5 = $ejnte5['LOS'];
               $ejnte5 = $ejnte5['L_id'];
               if ($LOSe5==1) {
                  $LOSe5 = 'LEKSION';
                 $lend_e5 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte5'");
                 $lend_e5 = mysql_fetch_assoc($lend_e5);
                 $lend_e5 = $lend_e5['L_P_id'];
                 $lend_e5 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e5'");
                 $lend_e5 = mysql_fetch_assoc($lend_e5);
                 $prof_e5 = $lend_e5['Emri'].$lend_e5['Mbiemri'];
               }else if($LOSe5 == 2){
                  $LOSe5 = 'SEMINAR';
                 $lend_e5 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte5'");
                 $lend_e5 = mysql_fetch_assoc($lend_e5);
                 $lend_e5 = $lend_e5['L_P_id'];
                 $lend_e5 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e5'");
                 $lend_e5 = mysql_fetch_assoc($lend_e5);
                 $prof_e5 = $lend_e5['Emri'].$lend_e5['Mbiemri']; 
               }
               if ($LOSe5 == '-1') {
                 echo "";
               }else{
               $lend_e5 = mysql_query("SELECT Emri from lendet where L_id='$ejnte5'");
               $lend_e5 = mysql_fetch_assoc($lend_e5);
               $lend_e5 = $lend_e5['Emri'];

               echo @$lend_e5,"<br>",@$LOSe5,"<br>",@$prof_e5;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte5  = mysql_query("select LOS,L_id from orari where  Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='5'");
               $premte5 = mysql_fetch_assoc($premte5);
               $LOSpr5 = $premte5['LOS'];
               $premte5 = $premte5['L_id'];
               if ($LOSpr5==1) {
                  $LOSpr5 = 'LEKSION';
                 $lend_pr5 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte5'");
                 $lend_pr5 = mysql_fetch_assoc($lend_pr5);
                 $lend_pr5 = $lend_pr5['L_P_id'];
                 $lend_pr5 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr5'");
                 $lend_pr5 = mysql_fetch_assoc($lend_pr5);
                 $prof_pr5 = $lend_pr5['Emri'].$lend_pr5['Mbiemri'];
               }else if($LOSpr5 == 2){
                  $LOSpr5 = 'SEMINAR';
                 $lend_pr5 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte5'");
                 $lend_pr5 = mysql_fetch_assoc($lend_pr5);
                 $lend_pr5 = $lend_pr5['L_P_id'];
                 $lend_pr5 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr5'");
                 $lend_pr5 = mysql_fetch_assoc($lend_pr5);
                 $prof_pr5 = $lend_pr5['Emri'].$lend_pr5['Mbiemri'];  
               }
               if ($LOSpr5 == '-1') {
                 echo "";
               }else{
               $lend_pr5 = mysql_query("SELECT Emri from lendet where L_id='$premte5'");
               $lend_pr5 = mysql_fetch_assoc($lend_pr5);
               $lend_pr5 = $lend_pr5['Emri'];

               echo @$lend_pr5,"<br>",@$LOSpr5,"<br>",@$prof_pr5;
             }
               
           ?>         
        </td>
      </tr>

      <tr>
        <td class="e1">13:00 - 13:50</td>

        <td>
          <?php 

                 $hene6  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='6'");
               $hene6 = mysql_fetch_assoc($hene6);
               $LOShen6 = $hene6['LOS'];
               $hene6 = $hene6['L_id'];
               if ($LOShen6==1) {
                  $LOShen6 = 'LEKSION';
                 $lend_hen6 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene6'");
                 $lend_hen6 = mysql_fetch_assoc($lend_hen6);
                 $lend_hen6 = $lend_hen6['L_P_id'];
                 $lend_hen6 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen6'");
                 $lend_hen6 = mysql_fetch_assoc($lend_hen6);
                 $prof_hen6 = $lend_hen6['Emri'].$lend_hen6['Mbiemri'];
               }else if($LOShen6 == 2){
                  $LOShen6 = 'SEMINAR';
                 $lend_hen6 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene6'");
                 $lend_hen6 = mysql_fetch_assoc($lend_hen6);
                 $lend_hen6 = $lend_hen6['L_P_id'];
                 $lend_hen6 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen6'");
                 $lend_hen6 = mysql_fetch_assoc($lend_hen6);
                 $prof_hen6 = $lend_hen6['Emri'].$lend_hen6['Mbiemri']; 
               }
               if ($LOShen6 == '-1') {
                 echo "";
               }else{
               $lend_hen6 = mysql_query("SELECT Emri from lendet where L_id='$hene6'");
               $lend_hen6 = mysql_fetch_assoc($lend_hen6);
               $lend_hen6 = $lend_hen6['Emri'];

               echo @$lend_hen6,"<br>",@$LOShen6,"<br>",@$prof_hen6;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $marte6  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='6'");
               $marte6 = mysql_fetch_assoc($marte6);
               $LOSmar6 = $marte6['LOS'];
               $marte6 = $marte6['L_id'];
               if ($LOSmar6==1) {
                  $LOSmar6 = 'LEKSION';
                 $lend_mar6 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte6'");
                 $lend_mar6 = mysql_fetch_assoc($lend_mar6);
                 $lend_mar6 = $lend_mar6['L_P_id'];
                 $lend_mar6 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar6'");
                 $lend_mar6 = mysql_fetch_assoc($lend_mar6);
                 $prof_mar6 = $lend_mar6['Emri'].$lend_mar6['Mbiemri'];
               }else if($LOSmar6 == 2){
                  $LOSmar6 = 'SEMINAR';
                 $lend_mar6 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte6'");
                 $lend_mar6 = mysql_fetch_assoc($lend_mar6);
                 $lend_mar6 = $lend_mar6['L_P_id'];
                 $lend_mar6 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar6'");
                 $lend_mar6 = mysql_fetch_assoc($lend_mar6);
                 $prof_mar6 = $lend_mar6['Emri'].$lend_mar6['Mbiemri']; 
               }
               if ($LOSmar6 == '-1') {
                 echo "";
               }else{
               $lend_mar6 = mysql_query("SELECT Emri from lendet where L_id='$marte6'");
               $lend_mar6 = mysql_fetch_assoc($lend_mar6);
               $lend_mar6 = $lend_mar6['Emri'];

               echo @$lend_mar6,"<br>",@$LOSmar6,"<br>",@$prof_mar6;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure6  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='6'");
               $merkure6 = mysql_fetch_assoc($merkure6);
               $LOSmer6 = $merkure6['LOS'];
               $merkure6 = $merkure6['L_id'];
               if ($LOSmer6==1) {
                  $LOSmer6 = 'LEKSION';
                 $lend_mer6 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure6'");
                 $lend_mer6 = mysql_fetch_assoc($lend_mer6);
                 $lend_mer6 = $lend_mer6['L_P_id'];
                 $lend_mer6 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer6'");
                 $lend_mer6 = mysql_fetch_assoc($lend_mer6);
                 $prof_mer6 = $lend_mer6['Emri'].$lend_mer6['Mbiemri'];
               }else if($LOSmer6 == 2){
                  $LOSmer6 = 'SEMINAR';
                 $lend_mer6 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure6'");
                 $lend_mer6 = mysql_fetch_assoc($lend_mer6);
                 $lend_mer6 = $lend_mer6['L_P_id'];
                 $lend_mer6 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer6'");
                 $lend_mer6 = mysql_fetch_assoc($lend_mer6);
                 $prof_mer6 = $lend_mer6['Emri'].$lend_mer6['Mbiemri']; 
               }
               if ($LOSmer6 == '-1') {
                 echo "";
               }else{
               $lend_mer6 = mysql_query("SELECT Emri from lendet where L_id='$merkure6'");
               $lend_mer6 = mysql_fetch_assoc($lend_mer6);
               $lend_mer6 = $lend_mer6['Emri'];

               echo @$lend_mer6,"<br>",@$LOSmer6,"<br>",@$prof_mer6;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte6  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='6'");
               $ejnte6 = mysql_fetch_assoc($ejnte6);
               $LOSe6 = $ejnte6['LOS'];
               $ejnte6 = $ejnte6['L_id'];
               if ($LOSe6==1) {
                  $LOSe6 = 'LEKSION';
                 $lend_e6 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte6'");
                 $lend_e6 = mysql_fetch_assoc($lend_e6);
                 $lend_e6 = $lend_e6['L_P_id'];
                 $lend_e6 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e6'");
                 $lend_e6 = mysql_fetch_assoc($lend_e6);
                 $prof_e6 = $lend_e6['Emri'].$lend_e6['Mbiemri'];
               }else if($LOSe6 == 2){
                  $LOSe6 = 'SEMINAR';
                 $lend_e6 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte6'");
                 $lend_e6 = mysql_fetch_assoc($lend_e6);
                 $lend_e6 = $lend_e6['L_P_id'];
                 $lend_e6 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e6'");
                 $lend_e6 = mysql_fetch_assoc($lend_e6);
                 $prof_e6 = $lend_e6['Emri'].$lend_e6['Mbiemri']; 
               }
               if ($LOSe6 == '-1') {
                 echo "";
               }else{
               $lend_e6 = mysql_query("SELECT Emri from lendet where L_id='$ejnte6'");
               $lend_e6 = mysql_fetch_assoc($lend_e6);
               $lend_e6 = $lend_e6['Emri'];

               echo @$lend_e6,"<br>",@$LOSe6,"<br>",@$prof_e6;

               }
           ?>         
        </td>

        <td>
          <?php 

                 $premte6  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='6'");
               $premte6 = mysql_fetch_assoc($premte6);
               $LOSpr6 = $premte6['LOS'];
               $premte6 = $premte6['L_id'];
               if ($LOSpr6==1) {
                  $LOSpr6 = 'LEKSION';
                 $lend_pr6 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte6'");
                 $lend_pr6 = mysql_fetch_assoc($lend_pr6);
                 $lend_pr6 = $lend_pr6['L_P_id'];
                 $lend_pr6 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr6'");
                 $lend_pr6 = mysql_fetch_assoc($lend_pr6);
                 $prof_pr6 = $lend_pr6['Emri'].$lend_pr6['Mbiemri'];
               }else if($LOSpr6 == 2){
                  $LOSpr6 = 'SEMINAR';
                 $lend_pr6 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte6'");
                 $lend_pr6 = mysql_fetch_assoc($lend_pr6);
                 $lend_pr6 = $lend_pr6['L_P_id'];
                 $lend_pr6 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr6'");
                 $lend_pr6 = mysql_fetch_assoc($lend_pr6);
                 $prof_pr6 = $lend_pr6['Emri'].$lend_pr6['Mbiemri'];  
               }
               if ($LOSpr6 == '-1') {
                 echo "";
               }else{
               $lend_pr6 = mysql_query("SELECT Emri from lendet where L_id='$premte6'");
               $lend_pr6 = mysql_fetch_assoc($lend_pr6);
               $lend_pr6 = $lend_pr6['Emri'];

               echo @$lend_pr6,"<br>",@$LOSpr6,"<br>",@$prof_pr6;
             }
               
           ?>         
        </td>
      </tr>

      <tr>
        <td class="e1">14:00 - 14:50</td>

        <td>
          <?php 

                 $hene7  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' AND dita='hene' AND ora='7'");
               $hene7 = mysql_fetch_assoc($hene7);
               $LOShen7 = $hene7['LOS'];
               $hene7 = $hene7['L_id'];
               if ($LOShen7==1) {
                  $LOShen7 = 'LEKSION';
                 $lend_hen7 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene7'");
                 $lend_hen7 = mysql_fetch_assoc($lend_hen7);
                 $lend_hen7 = $lend_hen7['L_P_id'];
                 $lend_hen7 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen7'");
                 $lend_hen7 = mysql_fetch_assoc($lend_hen7);
                 $prof_hen7 = $lend_hen7['Emri'].$lend_hen7['Mbiemri'];
               }else if($LOShen7 == 2){
                  $LOShen7 = 'SEMINAR';
                 $lend_hen7 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene7'");
                 $lend_hen7 = mysql_fetch_assoc($lend_hen7);
                 $lend_hen7 = $lend_hen7['L_P_id'];
                 $lend_hen7 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen7'");
                 $lend_hen7 = mysql_fetch_assoc($lend_hen7);
                 $prof_hen7 = $lend_hen7['Emri'].$lend_hen7['Mbiemri']; 
               }
               if ($LOShen7 == '-1') {
                 echo "";
               }else{
               $lend_hen7 = mysql_query("SELECT Emri from lendet where L_id='$hene7'");
               $lend_hen7 = mysql_fetch_assoc($lend_hen7);
               $lend_hen7 = $lend_hen7['Emri'];

               echo @$lend_hen7,"<br>",@$LOShen7,"<br>",@$prof_hen7;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $marte7  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and  dita='marte' AND ora='7'");
               $marte7 = mysql_fetch_assoc($marte7);
               $LOSmar7 = $marte7['LOS'];
               $marte7 = $marte7['L_id'];
               if ($LOSmar7==1) {
                  $LOSmar7 = 'LEKSION';
                 $lend_mar7 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte7'");
                 $lend_mar7 = mysql_fetch_assoc($lend_mar7);
                 $lend_mar7 = $lend_mar7['L_P_id'];
                 $lend_mar7 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar7'");
                 $lend_mar7 = mysql_fetch_assoc($lend_mar7);
                 $prof_mar7 = $lend_mar7['Emri'].$lend_mar7['Mbiemri'];
               }else if($LOSmar7 == 2){
                  $LOSmar7 = 'SEMINAR';
                 $lend_mar7 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte7'");
                 $lend_mar7 = mysql_fetch_assoc($lend_mar7);
                 $lend_mar7 = $lend_mar7['L_P_id'];
                 $lend_mar7 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar7'");
                 $lend_mar7 = mysql_fetch_assoc($lend_mar7);
                 $prof_mar7 = $lend_mar7['Emri'].$lend_mar7['Mbiemri']; 
               }
               if ($LOSmar7 == '-1') {
                 echo "";
               }else{
               $lend_mar7 = mysql_query("SELECT Emri from lendet where L_id='$marte7'");
               $lend_mar7 = mysql_fetch_assoc($lend_mar7);
               $lend_mar7 = $lend_mar7['Emri'];

               echo @$lend_mar7,"<br>",@$LOSmar7,"<br>",@$prof_mar7;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure7  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' AND dita='merkure' AND ora='7'");
               $merkure7 = mysql_fetch_assoc($merkure7);
               $LOSmer7 = $merkure7['LOS'];
               $merkure7 = $merkure7['L_id'];
               if ($LOSmer7==1) {
                  $LOSmer7 = 'LEKSION';
                 $lend_mer7 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure7'");
                 $lend_mer7 = mysql_fetch_assoc($lend_mer7);
                 $lend_mer7 = $lend_mer7['L_P_id'];
                 $lend_mer7 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer7'");
                 $lend_mer7 = mysql_fetch_assoc($lend_mer7);
                 $prof_mer7 = $lend_mer7['Emri'].$lend_mer7['Mbiemri'];
               }else if($LOSmer7 == 2){
                  $LOSmer7 = 'SEMINAR';
                 $lend_mer7 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure7'");
                 $lend_mer7 = mysql_fetch_assoc($lend_mer7);
                 $lend_mer7 = $lend_mer7['L_P_id'];
                 $lend_mer7 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer7'");
                 $lend_mer7 = mysql_fetch_assoc($lend_mer7);
                 $prof_mer7 = $lend_mer7['Emri'].$lend_mer7['Mbiemri']; 
               }
               if ($LOSmer7 == '-1') {
                 echo "";
               }else{
               $lend_mer7 = mysql_query("SELECT Emri from lendet where L_id='$merkure7'");
               $lend_mer7 = mysql_fetch_assoc($lend_mer7);
               $lend_mer7 = $lend_mer7['Emri'];

               echo @$lend_mer7,"<br>",@$LOSmer7,"<br>",@$prof_mer7;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte7  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='7'");
               $ejnte7 = mysql_fetch_assoc($ejnte7);
               $LOSe7 = $ejnte7['LOS'];
               $ejnte7 = $ejnte7['L_id'];
               if ($LOSe7==1) {
                  $LOSe7 = 'LEKSION';
                 $lend_e7 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte7'");
                 $lend_e7 = mysql_fetch_assoc($lend_e7);
                 $lend_e7 = $lend_e7['L_P_id'];
                 $lend_e7 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e7'");
                 $lend_e7 = mysql_fetch_assoc($lend_e7);
                 $prof_e7 = $lend_e7['Emri'].$lend_e7['Mbiemri'];
               }else if($LOSe7 == 2){
                  $LOSe7 = 'SEMINAR';
                 $lend_e7 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte7'");
                 $lend_e7 = mysql_fetch_assoc($lend_e7);
                 $lend_e7 = $lend_e7['L_P_id'];
                 $lend_e7 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e7'");
                 $lend_e7 = mysql_fetch_assoc($lend_e7);
                 $prof_e7 = $lend_e7['Emri'].$lend_e7['Mbiemri']; 
               }
               if ($LOSe7 == '-1') {
                 echo "";
               }else{
               $lend_e7 = mysql_query("SELECT Emri from lendet where L_id='$ejnte7'");
               $lend_e7 = mysql_fetch_assoc($lend_e7);
               $lend_e7 = $lend_e7['Emri'];

               echo @$lend_e7,"<br>",@$LOSe7,"<br>",@$prof_e7;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte7  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='7'");
               $premte7 = mysql_fetch_assoc($premte7);
               $LOSpr7 = $premte7['LOS'];
               $premte7 = $premte7['L_id'];
               if ($LOSpr7==1) {
                  $LOSpr7 = 'LEKSION';
                 $lend_pr7 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte7'");
                 $lend_pr7 = mysql_fetch_assoc($lend_pr7);
                 $lend_pr7 = $lend_pr7['L_P_id'];
                 $lend_pr7 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr7'");
                 $lend_pr7 = mysql_fetch_assoc($lend_pr7);
                 $prof_pr7 = $lend_pr7['Emri'].$lend_pr7['Mbiemri'];
               }else if($LOSpr7 == 2){
                  $LOSpr7 = 'SEMINAR';
                 $lend_pr7 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte7'");
                 $lend_pr7 = mysql_fetch_assoc($lend_pr7);
                 $lend_pr7 = $lend_pr7['L_P_id'];
                 $lend_pr7 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr7'");
                 $lend_pr7 = mysql_fetch_assoc($lend_pr7);
                 $prof_pr7 = $lend_pr7['Emri'].$lend_pr7['Mbiemri'];  
               }
               if ($LOSpr7 == '-1') {
                 echo "";
               }else{
               $lend_pr7 = mysql_query("SELECT Emri from lendet where L_id='$premte7'");
               $lend_pr7 = mysql_fetch_assoc($lend_pr7);
               $lend_pr7 = $lend_pr7['Emri'];

               echo @$lend_pr7,"<br>",@$LOSpr7,"<br>",@$prof_pr7;

               }
           ?>         
        </td>
      </tr>
      <tr>
        <td class="e1">15:00 - 15:50</td>
        <td>
            <?php 
              

                 $hene8   = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='8'");
               $hene8 = mysql_fetch_assoc($hene8);
               $LOSh8 = $hene8['LOS'];
               $hene8 = $hene8['L_id'];
               if ($LOSh8==1) {
                  $LOSh8 = 'LEKSION';
                 $lend_hen8 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene8'");
                 $lend_hen8 = mysql_fetch_assoc($lend_hen8);
                 $lend_hen8 = $lend_hen8['L_P_id'];
                 $lend_hen8 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen8'");
                 $lend_hen8 = mysql_fetch_assoc($lend_hen8);
                 $prof_hen8 = $lend_hen8['Emri'].$lend_hen8['Mbiemri'];
               }else if($LOSh8 == 2){
                  $LOSh8 = 'SEMINAR';
                 $lend_hen8 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene8'");
                 $lend_hen8 = mysql_fetch_assoc($lend_hen8);
                 $lend_hen8 = $lend_hen8['L_P_id'];
                 $lend_hen8 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen8'");
                 $lend_hen8 = mysql_fetch_assoc($lend_hen8);
                 $prof_hen8 = $lend_hen8['Emri'].$lend_hen8['Mbiemri']; 
               }
               if ($LOSh8 == '-1') {
                 echo "";
               }else{
               $lend_hen8 = mysql_query("SELECT Emri from lendet where L_id='$hene8'");
               $lend_hen8 = mysql_fetch_assoc($lend_hen8);
               $lend_hen8 = $lend_hen8['Emri'];

               echo @$lend_hen8,"<br>",@$LOSh8,"<br>",@$prof_hen8;
             }
           ?>         
        </td>

        <td>
          <?php 

                 $marte8  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='8'");
               $marte8 = mysql_fetch_assoc($marte8);
               $LOSm8 = $marte8['LOS'];
               $marte8 = $marte8['L_id'];
               if ($LOSm8==1) {
                  $LOSm8 = 'LEKSION';
                 $lend_mar8 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte8'");
                 $lend_mar8 = mysql_fetch_assoc($lend_mar8);
                 $lend_mar8 = $lend_mar8['L_P_id'];
                 $lend_mar8 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar8'");
                 $lend_mar8 = mysql_fetch_assoc($lend_mar8);
                 $prof_mar8 = $lend_mar8['Emri'].$lend_mar8['Mbiemri'];
               }else if($LOSm8 == 2){
                  $LOSm8 = 'SEMINAR';
                 $lend_mar8 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte8'");
                 $lend_mar8 = mysql_fetch_assoc($lend_mar8);
                 $lend_mar8 = $lend_mar8['L_P_id'];
                 $lend_mar8 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar8'");
                 $lend_mar8 = mysql_fetch_assoc($lend_mar8);
                 $prof_mar8 = $lend_mar8['Emri'].$lend_mar8['Mbiemri']; 
               }
               if ($LOSm8 == '-1') {
                 echo "";
               }else{
               $lend_mar8 = mysql_query("SELECT Emri from lendet where L_id='$marte8'");
               $lend_mar8 = mysql_fetch_assoc($lend_mar8);
               $lend_mar8 = $lend_mar8['Emri'];

               echo @$lend_mar8,"<br>",@$LOSm8,"<br>",@$prof_mar8;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure8  = mysql_query("select LOS,L_id from orari where  Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='8'");
               $merkure8 = mysql_fetch_assoc($merkure8);
               $LOSmer8 = $merkure8['LOS'];
               $merkure8 = $merkure8['L_id'];
               if ($LOSmer8==1) {
                  $LOSmer8 = 'LEKSION';
                 $lend_mer8 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure8'");
                 $lend_mer8 = mysql_fetch_assoc($lend_mer8);
                 $lend_mer8 = $lend_mer8['L_P_id'];
                 $lend_mer8 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer8'");
                 $lend_mer8 = mysql_fetch_assoc($lend_mer8);
                 $prof_mer8 = $lend_mer8['Emri'].$lend_mer8['Mbiemri'];
               }else if($LOSmer8 == 2){
                  $LOSmer8 = 'SEMINAR';
                 $lend_mer8 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure8'");
                 $lend_mer8 = mysql_fetch_assoc($lend_mer8);
                 $lend_mer8 = $lend_mer8['L_P_id'];
                 $lend_mer8 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer8'");
                 $lend_mer8 = mysql_fetch_assoc($lend_mer8);
                 $prof_mer8 = $lend_mer8['Emri'].$lend_mer8['Mbiemri']; 
               }
               if ($LOSmer8 == '-1') {
                 echo "";
               }else{
               $lend_mer8 = mysql_query("SELECT Emri from lendet where L_id='$merkure8'");
               $lend_mer8 = mysql_fetch_assoc($lend_mer8);
               $lend_mer8 = $lend_mer8['Emri'];

               echo @$lend_mer8,"<br>",@$LOSmer8,"<br>",@$prof_mer8;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte8  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and  dita='ejnte' AND ora='8'");
               $ejnte8 = mysql_fetch_assoc($ejnte8);
               $LOSe8 = $ejnte8['LOS'];
               $ejnte8 = $ejnte8['L_id'];
               if ($LOSe8==1) {
                  $LOSe8 = 'LEKSION';
                 $lend_e8 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte8'");
                 $lend_e8 = mysql_fetch_assoc($lend_e8);
                 $lend_e8 = $lend_e8['L_P_id'];
                 $lend_e8 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e8'");
                 $lend_e8 = mysql_fetch_assoc($lend_e8);
                 $prof_e8 = $lend_e8['Emri'].$lend_e8['Mbiemri'];
               }else if($LOSe8 == 2){
                  $LOSe8 = 'SEMINAR';
                 $lend_e8 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte8'");
                 $lend_e8 = mysql_fetch_assoc($lend_e8);
                 $lend_e8 = $lend_e8['L_P_id'];
                 $lend_e8 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e8'");
                 $lend_e8 = mysql_fetch_assoc($lend_e8);
                 $prof_e8 = $lend_e8['Emri'].$lend_e8['Mbiemri']; 
               }
               if ($LOSe8 == '-1') {
                 echo "";
               }else{
               $lend_e8 = mysql_query("SELECT Emri from lendet where L_id='$ejnte8'");
               $lend_e8 = mysql_fetch_assoc($lend_e8);
               $lend_e8 = $lend_e8['Emri'];

               echo @$lend_e8,"<br>",@$LOSe8,"<br>",@$prof_e8;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte8  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='8'");
               $premte8 = mysql_fetch_assoc($premte8);
               $LOSpr8 = $premte8['LOS'];
               $premte8 = $premte8['L_id'];
               if ($LOSpr8==1) {
                  $LOSpr8 = 'LEKSION';
                 $lend_pr8 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte8'");
                 $lend_pr8 = mysql_fetch_assoc($lend_pr8);
                 $lend_pr8 = $lend_pr8['L_P_id'];
                 $lend_pr8 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr8'");
                 $lend_pr8 = mysql_fetch_assoc($lend_pr8);
                 $prof_pr8 = $lend_pr8['Emri'].$lend_pr8['Mbiemri'];
               }else if($LOSpr8 == 2){
                  $LOSpr8 = 'SEMINAR';
                 $lend_pr8 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte8'");
                 $lend_pr8 = mysql_fetch_assoc($lend_pr8);
                 $lend_pr8 = $lend_pr8['L_P_id'];
                 $lend_pr8 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr8'");
                 $lend_pr8 = mysql_fetch_assoc($lend_pr8);
                 $prof_pr8 = $lend_pr8['Emri'].$lend_pr8['Mbiemri'];  
               }
               if ($LOSpr8 == '-1') {
                 echo "";
               }else{
               $lend_pr8 = mysql_query("SELECT Emri from lendet where L_id='$premte8'");
               $lend_pr8 = mysql_fetch_assoc($lend_pr8);
               $lend_pr8 = $lend_pr8['Emri'];

               echo @$lend_pr8,"<br>",@$LOSpr8,"<br>",@$prof_pr8;
             }
               
           ?>         
        </td>
      </tr>
      <tr>
        <td class="e1">16:00 - 16:50</td>

        <td>
          <?php 

                 $hene9  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='9'");
               $hene9 = mysql_fetch_assoc($hene9);
               $LOShen9 = $hene9['LOS'];
               $hene9 = $hene9['L_id'];
               if ($LOShen9==1) {
                  $LOShen9 = 'LEKSION';
                 $lend_hen9 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene9'");
                 $lend_hen9 = mysql_fetch_assoc($lend_hen9);
                 $lend_hen9 = $lend_hen9['L_P_id'];
                 $lend_hen9 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen9'");
                 $lend_hen9 = mysql_fetch_assoc($lend_hen9);
                 $prof_hen9 = $lend_hen9['Emri'].$lend_hen9['Mbiemri'];
               }else if($LOShen9 == 2){
                  $LOShen9 = 'SEMINAR';
                 $lend_hen9 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene9'");
                 $lend_hen9 = mysql_fetch_assoc($lend_hen9);
                 $lend_hen9 = $lend_hen9['L_P_id'];
                 $lend_hen9 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen9'");
                 $lend_hen9 = mysql_fetch_assoc($lend_hen9);
                 $prof_hen9 = $lend_hen9['Emri'].$lend_hen9['Mbiemri']; 
               }
               if ($LOShen9 == '-1') {
                 echo "";
               }else{
               $lend_hen9 = mysql_query("SELECT Emri from lendet where L_id='$hene9'");
               $lend_hen9 = mysql_fetch_assoc($lend_hen9);
               $lend_hen9 = $lend_hen9['Emri'];

               echo @$lend_hen9,"<br>",@$LOShen9,"<br>",@$prof_hen9;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $marte9  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='9'");
               $marte9 = mysql_fetch_assoc($marte9);
               $LOSmar9 = $marte9['LOS'];
               $marte9 = $marte9['L_id'];
               if ($LOSmar9==1) {
                  $LOSmar9 = 'LEKSION';
                 $lend_mar9 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte9'");
                 $lend_mar9 = mysql_fetch_assoc($lend_mar9);
                 $lend_mar9 = $lend_mar9['L_P_id'];
                 $lend_mar9 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar9'");
                 $lend_mar9 = mysql_fetch_assoc($lend_mar9);
                 $prof_mar9 = $lend_mar9['Emri'].$lend_mar9['Mbiemri'];
               }else if($LOSmar9 == 2){
                  $LOSmar9 = 'SEMINAR';
                 $lend_mar9 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte9'");
                 $lend_mar9 = mysql_fetch_assoc($lend_mar9);
                 $lend_mar9 = $lend_mar9['L_P_id'];
                 $lend_mar9 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar9'");
                 $lend_mar9 = mysql_fetch_assoc($lend_mar9);
                 $prof_mar9 = $lend_mar9['Emri'].$lend_mar9['Mbiemri']; 
               }
               if ($LOSmar9 == '-1') {
                 echo "";
               }else{
               $lend_mar9 = mysql_query("SELECT Emri from lendet where L_id='$marte9'");
               $lend_mar9 = mysql_fetch_assoc($lend_mar9);
               $lend_mar9 = $lend_mar9['Emri'];

               echo @$lend_mar9,"<br>",@$LOSmar9,"<br>",@$prof_mar9;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure9  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='9'");
               $merkure9 = mysql_fetch_assoc($merkure9);
               $LOSmer9 = $merkure9['LOS'];
               $merkure9 = $merkure9['L_id'];
               if ($LOSmer9==1) {
                  $LOSmer9 = 'LEKSION';
                 $lend_mer9 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure9'");
                 $lend_mer9 = mysql_fetch_assoc($lend_mer9);
                 $lend_mer9 = $lend_mer9['L_P_id'];
                 $lend_mer9 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer9'");
                 $lend_mer9 = mysql_fetch_assoc($lend_mer9);
                 $prof_mer9 = $lend_mer9['Emri'].$lend_mer9['Mbiemri'];
               }else if($LOSmer9 == 2){
                  $LOSmer9 = 'SEMINAR';
                 $lend_mer9 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure9'");
                 $lend_mer9 = mysql_fetch_assoc($lend_mer9);
                 $lend_mer9 = $lend_mer9['L_P_id'];
                 $lend_mer9 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer9'");
                 $lend_mer9 = mysql_fetch_assoc($lend_mer9);
                 $prof_mer9 = $lend_mer9['Emri'].$lend_mer9['Mbiemri']; 
               }
               if ($LOSmer9 == '-1') {
                 echo "";
               }else{
               $lend_mer9 = mysql_query("SELECT Emri from lendet where L_id='$merkure9'");
               $lend_mer9 = mysql_fetch_assoc($lend_mer9);
               $lend_mer9 = $lend_mer9['Emri'];

               echo @$lend_mer9,"<br>",@$LOSmer9,"<br>",@$prof_mer9;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte9  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='9'");
               $ejnte9 = mysql_fetch_assoc($ejnte9);
               $LOSe9 = $ejnte9['LOS'];
               $ejnte9 = $ejnte9['L_id'];
               if ($LOSe9==1) {
                  $LOSe9 = 'LEKSION';
                 $lend_e9 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte9'");
                 $lend_e9 = mysql_fetch_assoc($lend_e9);
                 $lend_e9 = $lend_e9['L_P_id'];
                 $lend_e9 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e9'");
                 $lend_e9 = mysql_fetch_assoc($lend_e9);
                 $prof_e9 = $lend_e9['Emri'].$lend_e9['Mbiemri'];
               }else if($LOSe9 == 2){
                  $LOSe9 = 'SEMINAR';
                 $lend_e9 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte9'");
                 $lend_e9 = mysql_fetch_assoc($lend_e9);
                 $lend_e9 = $lend_e9['L_P_id'];
                 $lend_e9 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e9'");
                 $lend_e9 = mysql_fetch_assoc($lend_e9);
                 $prof_e9 = $lend_e9['Emri'].$lend_e9['Mbiemri']; 
               }
               if ($LOSe9 == '-1') {
                 echo "";
               }else{
               $lend_e9 = mysql_query("SELECT Emri from lendet where L_id='$ejnte9'");
               $lend_e9 = mysql_fetch_assoc($lend_e9);
               $lend_e9 = $lend_e9['Emri'];

               echo @$lend_e9,"<br>",@$LOSe9,"<br>",@$prof_e9;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte9  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and  dita='premte' AND ora='9'");
               $premte9 = mysql_fetch_assoc($premte9);
               $LOSpr9 = $premte9['LOS'];
               $premte9 = $premte9['L_id'];
               if ($LOSpr9==1) {
                  $LOSpr9 = 'LEKSION';
                 $lend_pr9 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte9'");
                 $lend_pr9 = mysql_fetch_assoc($lend_pr9);
                 $lend_pr9 = $lend_pr9['L_P_id'];
                 $lend_pr9 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr9'");
                 $lend_pr9 = mysql_fetch_assoc($lend_pr9);
                 $prof_pr9 = $lend_pr9['Emri'].$lend_pr9['Mbiemri'];
               }else if($LOSpr9 == 2){
                  $LOSpr9 = 'SEMINAR';
                 $lend_pr9 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte9'");
                 $lend_pr9 = mysql_fetch_assoc($lend_pr9);
                 $lend_pr9 = $lend_pr9['L_P_id'];
                 $lend_pr9 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr9'");
                 $lend_pr9 = mysql_fetch_assoc($lend_pr9);
                 $prof_pr9 = $lend_pr9['Emri'].$lend_pr9['Mbiemri'];  
               }
               if ($LOSpr9 == '-1') {
                 echo "";
               }else{
               $lend_pr9 = mysql_query("SELECT Emri from lendet where L_id='$premte9'");
               $lend_pr9 = mysql_fetch_assoc($lend_pr9);
               $lend_pr9 = $lend_pr9['Emri'];

               echo @$lend_pr9,"<br>",@$LOSpr9,"<br>",@$prof_pr9;
             }
               
           ?>         
        </td>
      </tr>

      <tr>
        <td class="e1">17:00 - 17:50</td>

        <td>
            <?php 
              

                 $hene10  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='10'");
               $hene10 = mysql_fetch_assoc($hene10);
               $LOSh10 = $hene10['LOS'];
               $hene10 = $hene10['L_id'];
               if ($LOSh10==1) {
                  $LOSh10 = 'LEKSION';
                 $lend_hen10 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene10'");
                 $lend_hen10 = mysql_fetch_assoc($lend_hen10);
                 $lend_hen10 = $lend_hen10['L_P_id'];
                 $lend_hen10 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen10'");
                 $lend_hen10 = mysql_fetch_assoc($lend_hen10);
                 $prof_hen10 = $lend_hen10['Emri'].$lend_hen10['Mbiemri'];
               }else if($LOSh10 == 2){
                  $LOSh10 = 'SEMINAR';
                 $lend_hen10 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene10'");
                 $lend_hen10 = mysql_fetch_assoc($lend_hen10);
                 $lend_hen10 = $lend_hen10['L_P_id'];
                 $lend_hen10 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen10'");
                 $lend_hen10 = mysql_fetch_assoc($lend_hen10);
                 $prof_hen10 = $lend_hen10['Emri'].$lend_hen10['Mbiemri'];  
               }
               if ($LOSh10 == '-1') {
                 echo "";
               }else{
               $lend_hen10 = mysql_query("SELECT Emri from lendet where L_id='$hene10'");
               $lend_hen10 = mysql_fetch_assoc($lend_hen10);
               $lend_hen10 = $lend_hen10['Emri'];

               echo @$lend_hen10,"<br>",@$LOSh10,"<br>",@$prof_hen10;
             }
           ?>         
        </td>

        <td>
          <?php 

                 $marte10  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='10'");
               $marte10 = mysql_fetch_assoc($marte10);
               $LOSm10 = $marte10['LOS'];
               $marte10 = $marte10['L_id'];
               if ($LOSm10==1) {
                  $LOSm10 = 'LEKSION';
                 $lend_mar10 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte10'");
                 $lend_mar10 = mysql_fetch_assoc($lend_mar10);
                 $lend_mar10 = $lend_mar10['L_P_id'];
                 $lend_mar10 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar10'");
                 $lend_mar10 = mysql_fetch_assoc($lend_mar10);
                 $prof_mar10 = $lend_mar10['Emri'].$lend_mar10['Mbiemri'];
               }else if($LOSm10 == 2){
                  $LOSm10 = 'SEMINAR';
                 $lend_mar10 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte10'");
                 $lend_mar10 = mysql_fetch_assoc($lend_mar10);
                 $lend_mar10 = $lend_mar10['L_P_id'];
                 $lend_mar10 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar10'");
                 $lend_mar10 = mysql_fetch_assoc($lend_mar10);
                 $prof_mar10 = $lend_mar10['Emri'].$lend_mar10['Mbiemri'];  
               }
               if ($LOSm10 == '-1') {
                 echo "";
               }else{
               $lend_mar10 = mysql_query("SELECT Emri from lendet where L_id='$marte10'");
               $lend_mar10 = mysql_fetch_assoc($lend_mar10);
               $lend_mar10 = $lend_mar10['Emri'];

               echo @$lend_mar10,"<br>",@$LOSm10,"<br>",@$prof_mar10;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure10  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='10'");
               $merkure10 = mysql_fetch_assoc($merkure10);
               $LOSmer10 = $merkure10['LOS'];
               $merkure10 = $merkure10['L_id'];
               if ($LOSmer10==1) {
                  $LOSmer10 = 'LEKSION';
                 $lend_mer10 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure10'");
                 $lend_mer10 = mysql_fetch_assoc($lend_mer10);
                 $lend_mer10 = $lend_mer10['L_P_id'];
                 $lend_mer10 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer10'");
                 $lend_mer10 = mysql_fetch_assoc($lend_mer10);
                 $prof_mer10 = $lend_mer10['Emri'].$lend_mer10['Mbiemri'];
               }else if($LOSmer10 == 2){
                  $LOSmer10 = 'SEMINAR';
                 $lend_mer10 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure10'");
                 $lend_mer10 = mysql_fetch_assoc($lend_mer10);
                 $lend_mer10 = $lend_mer10['L_P_id'];
                 $lend_mer10 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer10'");
                 $lend_mer10 = mysql_fetch_assoc($lend_mer10);
                 $prof_mer10 = $lend_mer10['Emri'].$lend_mer10['Mbiemri'];  
               }
               if ($LOSmer10 == '-1') {
                 echo "";
               }else{
               $lend_mer10 = mysql_query("SELECT Emri from lendet where L_id='$merkure10'");
               $lend_mer10 = mysql_fetch_assoc($lend_mer10);
               $lend_mer10 = $lend_mer10['Emri'];

               echo @$lend_mer10,"<br>",@$LOSmer10,"<br>",@$prof_mer10;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte10  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='10'");
               $ejnte10 = mysql_fetch_assoc($ejnte10);
               $LOSe10 = $ejnte10['LOS'];
               $ejnte10 = $ejnte10['L_id'];
               if ($LOSe10==1) {
                  $LOSe10 = 'LEKSION';
                 $lend_e10 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte10'");
                 $lend_e10 = mysql_fetch_assoc($lend_e10);
                 $lend_e10 = $lend_e10['L_P_id'];
                 $lend_e10 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e10'");
                 $lend_e10 = mysql_fetch_assoc($lend_e10);
                 $prof_e10 = $lend_e10['Emri'].$lend_e10['Mbiemri'];
               }else if($LOSe10 == 2){
                  $LOSe10 = 'SEMINAR';
                 $lend_e10 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte10'");
                 $lend_e10 = mysql_fetch_assoc($lend_e10);
                 $lend_e10 = $lend_e10['L_P_id'];
                 $lend_e10 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e10'");
                 $lend_e10 = mysql_fetch_assoc($lend_e10);
                 $prof_e10 = $lend_e10['Emri'].$lend_e10['Mbiemri'];  
               }
               if ($LOSe10 == '-1') {
                 echo "";
               }else{
               $lend_e10 = mysql_query("SELECT Emri from lendet where L_id='$ejnte10'");
               $lend_e10 = mysql_fetch_assoc($lend_e10);
               $lend_e10 = $lend_e10['Emri'];

               echo @$lend_e10,"<br>",@$LOSe10,"<br>",@$prof_e10;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte10  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='10'");
               $premte10 = mysql_fetch_assoc($premte10);
               $LOSpr10 = $premte10['LOS'];
               $premte10 = $premte10['L_id'];
               if ($LOSpr10==1) {
                  $LOSpr10 = 'LEKSION';
                 $lend_pr10 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte10'");
                 $lend_pr10 = mysql_fetch_assoc($lend_pr10);
                 $lend_pr10 = $lend_pr10['L_P_id'];
                 $lend_pr10 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr10'");
                 $lend_pr10 = mysql_fetch_assoc($lend_pr10);
                 $prof_pr10 = $lend_pr10['Emri'].$lend_pr10['Mbiemri'];
               }else if($LOSpr10 == 2){
                  $LOSpr10 = 'SEMINAR';
                 $lend_pr10 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte10'");
                 $lend_pr10 = mysql_fetch_assoc($lend_pr10);
                 $lend_pr10 = $lend_pr10['L_P_id'];
                 $lend_pr10 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr10'");
                 $lend_pr10 = mysql_fetch_assoc($lend_pr10);
                 $prof_pr10 = $lend_pr10['Emri'].$lend_pr10['Mbiemri']; 
               }
               if ($LOSpr10 == '-1') {
                 echo "";
               }else{
               $lend_pr10 = mysql_query("SELECT Emri from lendet where L_id='$premte10'");
               $lend_pr10 = mysql_fetch_assoc($lend_pr10);
               $lend_pr10 = $lend_pr10['Emri'];

               echo @$lend_pr10,"<br>",@$LOSpr10,"<br>",@$prof_pr10;
             }
               
           ?>         
        </td>
      </tr>

      <tr>
        <td class="e1">18:00 - 18:50</td>
        <td>
            <?php 
              

                 $hene11  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='11'");
               $hene11 = mysql_fetch_assoc($hene11);
               $LOSh11 = $hene11['LOS'];
               $hene11 = $hene11['L_id'];
               if ($LOSh11==1) {
                  $LOSh11 = 'LEKSION';
                 $lend_hen11 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene11'");
                 $lend_hen11 = mysql_fetch_assoc($lend_hen11);
                 $lend_hen11 = $lend_hen11['L_P_id'];
                 $lend_hen11 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen11'");
                 $lend_hen11 = mysql_fetch_assoc($lend_hen11);
                 $prof_hen11 = $lend_hen11['Emri'].$lend_hen11['Mbiemri'];
               }else if($LOSh11 == 2){
                  $LOSh11 = 'SEMINAR';
                 $lend_hen11 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene11'");
                 $lend_hen11 = mysql_fetch_assoc($lend_hen11);
                 $lend_hen11 = $lend_hen11['L_P_id'];
                 $lend_hen11 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen11'");
                 $lend_hen11 = mysql_fetch_assoc($lend_hen11);
                 $prof_hen11 = $lend_hen11['Emri'].$lend_hen11['Mbiemri'];  
               }
               if ($LOSh11 == '-1') {
                 echo "";
               }else{
               $lend_hen11 = mysql_query("SELECT Emri from lendet where L_id='$hene11'");
               $lend_hen11 = mysql_fetch_assoc($lend_hen11);
               $lend_hen11 = $lend_hen11['Emri'];

               echo @$lend_hen11,"<br>",@$LOSh11,"<br>",@$prof_hen11;
             }
           ?>         
        </td>

        <td>
          <?php 

                 $marte11  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='11'");
               $marte11 = mysql_fetch_assoc($marte11);
               $LOSm11 = $marte11['LOS'];
               $marte11 = $marte11['L_id'];
               if ($LOSm11==1) {
                  $LOSm11 = 'LEKSION';
                 $lend_mar11 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte11'");
                 $lend_mar11 = mysql_fetch_assoc($lend_mar11);
                 $lend_mar11 = $lend_mar11['L_P_id'];
                 $lend_mar11 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar11'");
                 $lend_mar11 = mysql_fetch_assoc($lend_mar11);
                 $prof_mar11 = $lend_mar11['Emri'].$lend_mar11['Mbiemri'];
               }else if($LOSm11 == 2){
                  $LOSm11 = 'SEMINAR';
                 $lend_mar11 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte11'");
                 $lend_mar11 = mysql_fetch_assoc($lend_mar11);
                 $lend_mar11 = $lend_mar11['L_P_id'];
                 $lend_mar11 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar11'");
                 $lend_mar11 = mysql_fetch_assoc($lend_mar11);
                 $prof_mar11 = $lend_mar11['Emri'].$lend_mar11['Mbiemri'];  
               }
               if ($LOSm11 == '-1') {
                 echo "";
               }else{
               $lend_mar11 = mysql_query("SELECT Emri from lendet where L_id='$marte11'");
               $lend_mar11 = mysql_fetch_assoc($lend_mar11);
               $lend_mar11 = $lend_mar11['Emri'];

               echo @$lend_mar11,"<br>",@$LOSm11,"<br>",@$prof_mar11;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure11  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='11'");
               $merkure11 = mysql_fetch_assoc($merkure11);
               $LOSmer11 = $merkure11['LOS'];
               $merkure11 = $merkure11['L_id'];
               if ($LOSmer11==1) {
                  $LOSmer11 = 'LEKSION';
                 $lend_mer11 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure11'");
                 $lend_mer11 = mysql_fetch_assoc($lend_mer11);
                 $lend_mer11 = $lend_mer11['L_P_id'];
                 $lend_mer11 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer11'");
                 $lend_mer11 = mysql_fetch_assoc($lend_mer11);
                 $prof_mer11 = $lend_mer11['Emri'].$lend_mer11['Mbiemri'];
               }else if($LOSmer11 == 2){
                  $LOSmer11 = 'SEMINAR';
                 $lend_mer11 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure11'");
                 $lend_mer11 = mysql_fetch_assoc($lend_mer11);
                 $lend_mer11 = $lend_mer11['L_P_id'];
                 $lend_mer11 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer11'");
                 $lend_mer11 = mysql_fetch_assoc($lend_mer11);
                 $prof_mer11 = $lend_mer11['Emri'].$lend_mer11['Mbiemri'];  
               }
               if ($LOSmer11 == '-1') {
                 echo "";
               }else{
               $lend_mer11 = mysql_query("SELECT Emri from lendet where L_id='$merkure11'");
               $lend_mer11 = mysql_fetch_assoc($lend_mer11);
               $lend_mer11 = $lend_mer11['Emri'];

               echo @$lend_mer11,"<br>",@$LOSmer11,"<br>",@$prof_mer11;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte11  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and  dita='ejnte' AND ora='11'");
               $ejnte11 = mysql_fetch_assoc($ejnte11);
               $LOSe11 = $ejnte11['LOS'];
               $ejnte11 = $ejnte11['L_id'];
               if ($LOSe11==1) {
                  $LOSe11 = 'LEKSION';
                 $lend_e11 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte11'");
                 $lend_e11 = mysql_fetch_assoc($lend_e11);
                 $lend_e11 = $lend_e11['L_P_id'];
                 $lend_e11 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e11'");
                 $lend_e11 = mysql_fetch_assoc($lend_e11);
                 $prof_e11 = $lend_e11['Emri'].$lend_e11['Mbiemri'];
               }else if($LOSe11 == 2){
                  $LOSe11 = 'SEMINAR';
                 $lend_e11 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte11'");
                 $lend_e11 = mysql_fetch_assoc($lend_e11);
                 $lend_e11 = $lend_e11['L_P_id'];
                 $lend_e11 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e11'");
                 $lend_e11 = mysql_fetch_assoc($lend_e11);
                 $prof_e11 = $lend_e11['Emri'].$lend_e11['Mbiemri'];  
               }
               if ($LOSe11 == '-1') {
                 echo "";
               }else{
               $lend_e11 = mysql_query("SELECT Emri from lendet where L_id='$ejnte11'");
               $lend_e11 = mysql_fetch_assoc($lend_e11);
               $lend_e11 = $lend_e11['Emri'];

               echo @$lend_e11,"<br>",@$LOSe11,"<br>",@$prof_e11;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte11  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='11'");
               $premte11 = mysql_fetch_assoc($premte11);
               $LOSpr11= $premte11['LOS'];
               $premte11 = $premte11['L_id'];
               if ($LOSpr11==1) {
                  $LOSpr11 = 'LEKSION';
                 $lend_pr11 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte11'");
                 $lend_pr11 = mysql_fetch_assoc($lend_pr11);
                 $lend_pr11 = $lend_pr11['L_P_id'];
                 $lend_pr11 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr11'");
                 $lend_pr11 = mysql_fetch_assoc($lend_pr11);
                 $prof_pr11 = $lend_pr11['Emri'].$lend_pr11['Mbiemri'];
               }else if($LOSpr11 == 2){
                  $LOSpr11 = 'SEMINAR';
                 $lend_pr11 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte11'");
                 $lend_pr11 = mysql_fetch_assoc($lend_pr11);
                 $lend_pr11 = $lend_pr11['L_P_id'];
                 $lend_pr11 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr11'");
                 $lend_pr11 = mysql_fetch_assoc($lend_pr11);
                 $prof_pr11 = $lend_pr1['Emri'].$lend_pr11['Mbiemri'];  
               }
               if ($LOSpr11 == '-1') {
                 echo "";
               }else{
               $lend_pr11 = mysql_query("SELECT Emri from lendet where L_id='$premte11'");
               $lend_pr11 = mysql_fetch_assoc($lend_pr11);
               $lend_pr11 = $lend_pr11['Emri'];

               echo @$lend_pr11,"<br>",@$LOSpr11,"<br>",@$prof_pr11;
             }
               
           ?>         
        </td>
      </tr>

      <tr>
        <td class="e1">19:00 - 19:50</td>

        <td>
            <?php 
              

                 $hene12  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='12'");
               $hene12 = mysql_fetch_assoc($hene12);
               $LOSh12 = $hene12['LOS'];
               $hene12 = $hene12['L_id'];
               if ($LOSh12==1) {
                  $LOSh12 = 'LEKSION';
                 $lend_hen12 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene12'");
                 $lend_hen12 = mysql_fetch_assoc($lend_hen12);
                 $lend_hen12 = $lend_hen12['L_P_id'];
                 $lend_hen12 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen12'");
                 $lend_hen12 = mysql_fetch_assoc($lend_hen12);
                 $prof_hen12 = $lend_hen12['Emri'].$lend_hen12['Mbiemri'];
               }else if($LOSh12 == 2){
                  $LOSh12 = 'SEMINAR';
                 $lend_hen12 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene12'");
                 $lend_hen12 = mysql_fetch_assoc($lend_hen12);
                 $lend_hen12 = $lend_hen12['L_P_id'];
                 $lend_hen12 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen12'");
                 $lend_hen12 = mysql_fetch_assoc($lend_hen12);
                 $prof_hen12 = $lend_hen12['Emri'].$lend_hen12['Mbiemri'];  
               }
               if ($LOSh12 == '-1') {
                echo "";
               }else{
               $lend_hen12 = mysql_query("SELECT Emri from lendet where L_id='$hene12'");
               $lend_hen12 = mysql_fetch_assoc($lend_hen12);
               $lend_hen12 = $lend_hen12['Emri'];

               echo @$lend_hen12,"<br>",@$LOSh12,"<br>",@$prof_hen12;
             }
           ?>         
        </td>

        <td>
          <?php 

                 $marte12  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='12'");
               $marte12 = mysql_fetch_assoc($marte12);
               $LOSm12 = $marte12['LOS'];
               $marte12 = $marte12['L_id'];
               if ($LOSm12==1) {
                  $LOSm12 = 'LEKSION';
                 $lend_mar12 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte12'");
                 $lend_mar12 = mysql_fetch_assoc($lend_mar12);
                 $lend_mar12 = $lend_mar12['L_P_id'];
                 $lend_mar12 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar12'");
                 $lend_mar12 = mysql_fetch_assoc($lend_mar12);
                 $prof_mar12 = $lend_mar12['Emri'].$lend_mar12['Mbiemri'];
               }else if($LOSm12 == 2){
                  $LOSm12 = 'SEMINAR';
                 $lend_mar12 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte12'");
                 $lend_mar12 = mysql_fetch_assoc($lend_mar12);
                 $lend_mar12 = $lend_mar12['L_P_id'];
                 $lend_mar12 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar12'");
                 $lend_mar12 = mysql_fetch_assoc($lend_mar12);
                 $prof_mar12 = $lend_mar12['Emri'].$lend_mar12['Mbiemri'];  
               }
               if ($LOSm12 == '-1') {
                 echo "";
               }else{
               $lend_mar12 = mysql_query("SELECT Emri from lendet where L_id='$marte12'");
               $lend_mar12 = mysql_fetch_assoc($lend_mar12);
               $lend_mar12 = $lend_mar12['Emri'];

               echo @$lend_mar12,"<br>",@$LOSm12,"<br>",@$prof_mar12;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure12  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='12'");
               $merkure12 = mysql_fetch_assoc($merkure12);
               $LOSmer12 = $merkure12['LOS'];
               $merkure12 = $merkure12['L_id'];
               if ($LOSmer12==1) {
                  $LOSmer12 = 'LEKSION';
                 $lend_mer12 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure12'");
                 $lend_mer12 = mysql_fetch_assoc($lend_mer12);
                 $lend_mer12 = $lend_mer12['L_P_id'];
                 $lend_mer12 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer12'");
                 $lend_mer12 = mysql_fetch_assoc($lend_mer12);
                 $prof_mer12 = $lend_mer12['Emri'].$lend_mer12['Mbiemri'];
               }else if($LOSmer12 == 2){
                  $LOSmer12 = 'SEMINAR';
                 $lend_mer12 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure12'");
                 $lend_mer12 = mysql_fetch_assoc($lend_mer12);
                 $lend_mer12 = $lend_mer12['L_P_id'];
                 $lend_mer12 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer12'");
                 $lend_mer12 = mysql_fetch_assoc($lend_mer12);
                 $prof_mer12 = $lend_mer12['Emri'].$lend_mer12['Mbiemri'];  
               }
               if ($LOSmer12 == '-1') {
                 echo "";
               }else{
               $lend_mer12 = mysql_query("SELECT Emri from lendet where L_id='$merkure12'");
               $lend_mer12 = mysql_fetch_assoc($lend_mer12);
               $lend_mer12 = $lend_mer12['Emri'];

               echo @$lend_mer12,"<br>",@$LOSmer12,"<br>",@$prof_mer12;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte12  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='12'");
               $ejnte12 = mysql_fetch_assoc($ejnte12);
               $LOSe12 = $ejnte12['LOS'];
               $ejnte12 = $ejnte12['L_id'];
               if ($LOSe12==1) {
                  $LOSe12 = 'LEKSION';
                 $lend_e12 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte12'");
                 $lend_e12 = mysql_fetch_assoc($lend_e12);
                 $lend_e12 = $lend_e12['L_P_id'];
                 $lend_e12 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e12'");
                 $lend_e12 = mysql_fetch_assoc($lend_e12);
                 $prof_e12 = $lend_e12['Emri'].$lend_e12['Mbiemri'];
               }else if($LOSe12 == 2){
                  $LOSe12 = 'SEMINAR';
                 $lend_e12 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte12'");
                 $lend_e12 = mysql_fetch_assoc($lend_e12);
                 $lend_e12 = $lend_e12['L_P_id'];
                 $lend_e12 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e12'");
                 $lend_e12 = mysql_fetch_assoc($lend_e12);
                 $prof_e12 = $lend_e12['Emri'].$lend_e12['Mbiemri'];  
               }
               if ($LOSe12 == '-1') {
                 echo "";
               }else{
               $lend_e12 = mysql_query("SELECT Emri from lendet where L_id='$ejnte12'");
               $lend_e12 = mysql_fetch_assoc($lend_e12);
               $lend_e12 = $lend_e12['Emri'];

               echo @$lend_e12,"<br>",@$LOSe12,"<br>",@$prof_e12;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte12  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='12'");
               $premte12 = mysql_fetch_assoc($premte12);
               $LOSpr12 = $premte12['LOS'];
               $premte12 = $premte12['L_id'];
               if ($LOSpr12==1) {
                  $LOSpr12 = 'LEKSION';
                 $lend_pr12 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte12'");
                 $lend_pr12 = mysql_fetch_assoc($lend_pr12);
                 $lend_pr12 = $lend_pr12['L_P_id'];
                 $lend_pr12 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr12'");
                 $lend_pr12 = mysql_fetch_assoc($lend_pr12);
                 $prof_pr12 = $lend_pr12['Emri'].$lend_pr12['Mbiemri'];
               }else if($LOSpr12 == 2){
                  $LOSpr12 = 'SEMINAR';
                 $lend_pr12 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte12'");
                 $lend_pr12 = mysql_fetch_assoc($lend_pr12);
                 $lend_pr12 = $lend_pr12['L_P_id'];
                 $lend_pr12 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr12'");
                 $lend_pr12 = mysql_fetch_assoc($lend_pr12);
                 $prof_pr12 = $lend_pr12['Emri'].$lend_pr12['Mbiemri']; 
               }
               if ($LOSpr12 == '-1') {
                 echo "";
               }else{
               $lend_pr12 = mysql_query("SELECT Emri from lendet where L_id='$premte12'");
               $lend_pr12 = mysql_fetch_assoc($lend_pr12);
               $lend_pr12 = $lend_pr12['Emri'];

               echo @$lend_pr12,"<br>",@$LOSpr12,"<br>",@$prof_pr12;
             }
               
           ?>         
        </td>
      </tr>

      <tr>
        <td class="e1">20:00 - 20:50</td>

        <td>
            <?php 
              

                 $hene13  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='hene' AND ora='13'");
               $hene13 = mysql_fetch_assoc($hene13);
               $LOSh13 = $hene13['LOS'];
               $hene13 = $hene13['L_id'];
               if ($LOSh13==1) {
                  $LOSh13 = 'LEKSION';
                 $lend_hen13 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene13'");
                 $lend_hen13 = mysql_fetch_assoc($lend_hen13);
                 $lend_hen13 = $lend_hen13['L_P_id'];
                 $lend_hen13 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen13'");
                 $lend_hen13 = mysql_fetch_assoc($lend_hen13);
                 $prof_hen13 = $lend_hen13['Emri'].$lend_hen13['Mbiemri'];
               }else if($LOSh13 == 2){
                  $LOSh13 = 'SEMINAR';
                 $lend_hen13 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$hene13'");
                 $lend_hen13 = mysql_fetch_assoc($lend_hen13);
                 $lend_hen13 = $lend_hen13['L_P_id'];
                 $lend_hen13 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_hen13'");
                 $lend_hen13 = mysql_fetch_assoc($lend_hen13);
                 $prof_hen13 = $lend_hen13['Emri'].$lend_hen13['Mbiemri'];  
               }
               if ($LOSh13 == '-1') {
                 echo "";
               }else{
               $lend_hen13 = mysql_query("SELECT Emri from lendet where L_id='$hene13'");
               $lend_hen13 = mysql_fetch_assoc($lend_hen13);
               $lend_hen13 = $lend_hen13['Emri'];

               echo @$lend_hen13,"<br>",@$LOSh13,"<br>",@$prof_hen13;
             }
           ?>         
        </td>

        <td>
          <?php 

                 $marte13  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='marte' AND ora='13'");
               $marte13 = mysql_fetch_assoc($marte13);
               $LOSm13 = $marte13['LOS'];
               $marte13 = $marte13['L_id'];
               if ($LOSm13==1) {
                  $LOSm13 = 'LEKSION';
                 $lend_mar13 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte13'");
                 $lend_mar13 = mysql_fetch_assoc($lend_mar13);
                 $lend_mar13 = $lend_mar13['L_P_id'];
                 $lend_mar13 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar13'");
                 $lend_mar13 = mysql_fetch_assoc($lend_mar13);
                 $prof_mar13 = $lend_mar13['Emri'].$lend_mar13['Mbiemri'];
               }else if($LOSm13 == 2){
                  $LOSm13 = 'SEMINAR';
                 $lend_mar13 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$marte13'");
                 $lend_mar13 = mysql_fetch_assoc($lend_mar13);
                 $lend_mar13 = $lend_mar13['L_P_id'];
                 $lend_mar13 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mar13'");
                 $lend_mar13 = mysql_fetch_assoc($lend_mar13);
                 $prof_mar13 = $lend_mar13['Emri'].$lend_mar13['Mbiemri'];  
               }
               if ($LOSm13 == '-1') {
                 echo "";
               }else{
               $lend_mar13 = mysql_query("SELECT Emri from lendet where L_id='$marte13'");
               $lend_mar13 = mysql_fetch_assoc($lend_mar13);
               $lend_mar13 = $lend_mar13['Emri'];

               echo @$lend_mar13,"<br>",@$LOSm13,"<br>",@$prof_mar13;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $merkure13  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='merkure' AND ora='13'");
               $merkure13 = mysql_fetch_assoc($merkure13);
               $LOSmer13 = $merkure13['LOS'];
               $merkure13 = $merkure13['L_id'];
               if ($LOSmer13==1) {
                  $LOSmer13 = 'LEKSION';
                 $lend_mer13 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure13'");
                 $lend_mer13 = mysql_fetch_assoc($lend_mer13);
                 $lend_mer13 = $lend_mer13['L_P_id'];
                 $lend_mer13 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer13'");
                 $lend_mer13 = mysql_fetch_assoc($lend_mer13);
                 $prof_mer13 = $lend_mer13['Emri'].$lend_mer13['Mbiemri'];
               }else if($LOSmer13 == 2){
                  $LOSmer13 = 'SEMINAR';
                 $lend_mer13 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$merkure13'");
                 $lend_mer13 = mysql_fetch_assoc($lend_mer13);
                 $lend_mer13 = $lend_mer13['L_P_id'];
                 $lend_mer13 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_mer13'");
                 $lend_mer13 = mysql_fetch_assoc($lend_mer13);
                 $prof_mer13 = $lend_mer13['Emri'].$lend_mer13['Mbiemri'];  
               }
               if ($LOSmer13 == '-1') {
                 echo "";
               }else{
               $lend_mer13 = mysql_query("SELECT Emri from lendet where L_id='$merkure13'");
               $lend_mer13 = mysql_fetch_assoc($lend_mer13);
               $lend_mer13 = $lend_mer13['Emri'];

               echo @$lend_mer13,"<br>",@$LOSmer13,"<br>",@$prof_mer13;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $ejnte13  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='ejnte' AND ora='13'");
               $ejnte13 = mysql_fetch_assoc($ejnte13);
               $LOSe13 = $ejnte13['LOS'];
               $ejnte13 = $ejnte13['L_id'];
               if ($LOSe13==1) {
                  $LOSe13 = 'LEKSION';
                 $lend_e13 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte13'");
                 $lend_e13 = mysql_fetch_assoc($lend_e13);
                 $lend_e13 = $lend_e13['L_P_id'];
                 $lend_e13 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e13'");
                 $lend_e13 = mysql_fetch_assoc($lend_e13);
                 $prof_e13 = $lend_e13['Emri'].$lend_e13['Mbiemri'];
               }else if($LOSe13 == 2){
                  $LOSe13 = 'SEMINAR';
                 $lend_e13 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$ejnte13'");
                 $lend_e13 = mysql_fetch_assoc($lend_e13);
                 $lend_e13 = $lend_e13['L_P_id'];
                 $lend_e13 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_e13'");
                 $lend_e13 = mysql_fetch_assoc($lend_e13);
                 $prof_e13 = $lend_e13['Emri'].$lend_e13['Mbiemri'];  
               }
               if ($LOSe13 == '-1') {
                 echo "";
               }else{
               $lend_e13 = mysql_query("SELECT Emri from lendet where L_id='$ejnte13'");
               $lend_e13 = mysql_fetch_assoc($lend_e13);
               $lend_e13 = $lend_e13['Emri'];

               echo @$lend_e13,"<br>",@$LOSe13,"<br>",@$prof_e13;
             }
               
           ?>         
        </td>

        <td>
          <?php 

                 $premte13  = mysql_query("select LOS,L_id from orari where Dg_id='$dega' and Viti='$viti' and Grupi='$grupi' and dita='premte' AND ora='13'");
               $premte13 = mysql_fetch_assoc($premte13);
               $LOSpr13 = $premte13['LOS'];
               $premte13 = $premte13['L_id'];
               if ($LOSpr13==1) {
                  $LOSpr13 = 'LEKSION';
                 $lend_pr13 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte13'");
                 $lend_pr13 = mysql_fetch_assoc($lend_pr13);
                 $lend_pr13 = $lend_pr13['L_P_id'];
                 $lend_pr13 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr13'");
                 $lend_pr13 = mysql_fetch_assoc($lend_pr13);
                 $prof_pr13 = $lend_pr13['Emri'].$lend_pr13['Mbiemri'];
               }else if($LOSpr13 == 2){
                  $LOSpr13 = 'SEMINAR';
                 $lend_pr13 = mysql_query("SELECT Emri,L_P_id from lendet where L_id='$premte13'");
                 $lend_pr13 = mysql_fetch_assoc($lend_pr13);
                 $lend_pr13 = $lend_pr13['L_P_id'];
                 $lend_pr13 = mysql_query("SELECT Emri,Mbiemri from profesoret where P_id='$lend_pr13'");
                 $lend_pr13 = mysql_fetch_assoc($lend_pr13);
                 $prof_pr13 = $lend_pr13['Emri'].$lend_pr13['Mbiemri']; 
               }
               if ($LOSpr13 == '-1') {
                 echo "";
               }else{
               $lend_pr13 = mysql_query("SELECT Emri from lendet where L_id='$premte13'");
               $lend_pr13 = mysql_fetch_assoc($lend_pr13);
               $lend_pr13 = $lend_pr13['Emri'];

               echo @$lend_pr13,"<br>",@$LOSpr13,"<br>",@$prof_pr13;
             }
               
           ?>         
        </td>
      </tr>

    </table>
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