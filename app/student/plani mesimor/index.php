<?php include '../student/connection.php';?>
<?php include '../student/stEditim.php';?>

  <?php 
    

        if (!isset($_SESSION['stusername'])) {
       echo ("<script language = 'javascript'>
                      window.alert('Ju nuk jeni te loguar,ju lutem logohuni')
                      window.location.href='../../../uni/Login form 2/'
             </script>");
       die();
      }else if(isset($_SESSION['stusername'])){
       $GLOBALS['username'] = $_SESSION['stusername'];
       $user = @$_SESSION['stusername'];
       $id_st = mysqli_query($conn,"SELECT ID from student where Username = '$user'");
       $id_st = mysqli_fetch_assoc($id_st);
       $GLOBALS['id_st'] = $id_st['ID'];
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
    <link rel="stylesheet" type="text/css" href="style/notat.css">


      <style type="text/css">

      #etera{
        margin:10px;
        width: calc(100% - 20px) ;

      }

      table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
      }

thead, tbody, tr, td, th { box-sizing: border-box;display: block; }

tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}

thead th { 
    height: 30px;
    line-height: 30px;
    /*text-align: left;*/
}

/*any os other than mac*/
tbody {
  min-height: 20px;
  max-height: 510px;
  overflow-y: auto;
  width: 100%;
}

/*any os other than mac*/
thead {
  width: 100%;
  background-color: white;
  background-color:#003366;
}
/*if mac os*/
body.MacOS thead {
  padding-right: 0;
}


tbody td, thead th {
    width: 20%;
    float: left;
    background-color: #354052;
    color: #fff;
    font-size: 14px;
}


thead th {
    height: 40px;
    padding: 5px;
}

.table--class td{
      vertical-align: middle;
    background-color: rgba(0, 0, 0, 0.06);
    padding: 15px;
    font-size: 12px;
    font-family: Arial;
    font-weight: normal;
    color: #354052;
}
</style>

       <!--  Querymenu -->
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
</head>
<body>

<!-- ------  Fillon div qe permban tere faqen   ------ -->
  <div class="horizontal-container">


       <!-- ------  Fillon div orizontal qe permban Universiteti i Tiranes dhe profilin  ------ -->
        <div class="left-nav">
            Universiteti I Tiranes
        </div>
          <form class="" method="post">
            <div class="right-nav">
              <div class="h-nav-mmenu" value="hide">
                <img src="../img/account.png" class="account-icon"><a href="#" class="admin-btn"><?php echo $result['Emri'];?> <?php echo $result['Mbiemri'];?></a>
                <div class="submenu-dropdown" style="display: none">
                  <a href="../">Profili</a>
                  <a href="logout/logout.php">Dilni</a>
                </div>
              </div>
            </div>
          </form>
        </div>

        <!-- --------  Mbaron div orizontal qe permban Universiteti i Tiranes dhe profilin  -------- -->




      <!-- --------  Fillon menu qe ndodhet majtas tek faqja -------- -->        
          <div class="left-container">

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
                              <li><a href=""><img src="../img/sign.png" class="circle-icon-sm">Plani Mesimor</a></li>
                          </ul>
                      </li>

                      <li class="tabs"><a href="#">Notat</a> <span class="plus" id="plus6">+</span>
                          <ul class="submenu" value="none" id="sub3">
                              <li><a href="../notat"><img src="../img/sign.png" class="circle-icon-sm">Shiko Notat</a></li>
                          </ul>
                      </li>

                      <li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                          <ul class="submenu" value="none" id="sub3">
                              <li><a href="../orari/" ><img src="../img/sign.png" class="circle-icon-sm">Shiko Oraret</a></li>
                          </ul>
                      </li>

                      <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                          <ul class="submenu" value="none" id="sub3">
                              <li><a href="../njoftimet/"><img src="../img/sign.png" class="circle-icon-sm" id="" >Shiko Njoftimet</a></li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
    
      <!-- ------  Mbaron menu qe ndodhet majtas tek faqja  ------ -->    
       



<div class="right-container">
<div class="title-bar" style="width: 100%;
    height: 33px;
    background-color: #29b6f6;
    color: white;
    padding: 10px;"><div id="" style="padding-top: 10px;">Plani Mesimor</div></div>



<div id="etera" class="table--class">
<table>
    <thead>
        <tr>
            <th>Lenda</th>
            <th>Leksionet</th>
            <th>Seminaret</th>
            <th>Kredite</th>
            <th>Viti</th>
        </tr>
    </thead>
    <tbody>


    <?php 
      $sql = "SELECT ID,Viti,Dg_id from student where Username = '$username'";
      $res = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($res);
      $dg_id = $res['Dg_id'];
      $Dg_id =$dg_id;
      $dg_id = mysqli_query($conn,"SELECT Emri,D_id from deget where Dg_id='$dg_id'");
      $dg_id = mysqli_fetch_assoc($dg_id);
      $d_id = $dg_id['D_id'];
      $d_id = mysqli_query($conn,"SELECT Emri from departamentet where D_id='$d_id' ");
      $d_id = mysqli_fetch_assoc($d_id);

      $Departamenti = $d_id['Emri'];//Departamenti i studentit
      $Dega = $dg_id['Emri'];//Dega te ciles i perket studenti
      $Viti = $res['Viti'];//Viti ne te cilin eshte studenti 
     ?>
    
        </tr>
         <tr>
          <td style=" width: 100%;line-height: 5px;text-align:center;font-size:14px;font-family:Arial;background-color: #354052; border-top: solid 2px #29b6f6;">
          <center style="color:white;">Viti Pare</center>
          </td>
          
        </tr>
    <?php 

      $query = mysqli_query($conn,"SELECT L_id,Emri,Kredite,L_P_id,S_P_id from lendet where Viti='1' AND Dg_id='$Dg_id'");
      $sum_kred1 = 0;$kaluar1=0;$ngeles1=0;
      $sum_nota1 = 0;$lendet1=0;
      while ($row = mysqli_fetch_assoc($query)) {
         ?>
        <tr>
          <td><?php echo "<center>",$row['Emri'],"</center>";$lendet1++;?></td>

          <td><?php 
          $id_prof = $row['L_P_id'];
          $prof = mysqli_query($conn,"SELECT Emri,Mbiemri from profesoret where P_id='$id_prof'");
          $prof = mysqli_fetch_assoc($prof);
          echo "<center>",$prof['Emri']," ",$prof['Mbiemri'],"</center>";
          ?></td>

          <td><?php 
          $id_prof = $row['S_P_id'];
          $prof = mysqli_query($conn,"SELECT Emri,Mbiemri from profesoret where P_id='$id_prof'");
          $prof = mysqli_fetch_assoc($prof);
          echo "<center>",$prof['Emri']," ",$prof['Mbiemri'],"</center>";
          ?></td>


          <td><?php echo "<center>",$row['Kredite'],"</center>"?></td>

          <td><center>Viti i pare</center></td>

      
      <?php }?>

        </tr>
         <tr>
          <td style=" width: 100%;line-height: 5px;text-align:center;font-size:14px;font-family:Arial;background-color: #354052; border-top: solid 2px #29b6f6;">
           <center style="color:white;">Viti Dyte</center>
          </td>
          
        </tr>
        <?php
     
       
        


      $query = mysqli_query($conn,"SELECT L_id,Emri,Kredite,L_P_id,S_P_id from lendet where Viti='2' AND Dg_id='$Dg_id'");
      $sum_kred2 = 0;$kaluar2=0;$ngeles2=0;
      $sum_nota2 = 0;$lendet2=0;
      while ($row = mysqli_fetch_assoc($query)) {
         ?>
        <tr>
          <td><?php echo "<center>",$row['Emri'],"</center>";$lendet2++;?></td>

          <td><?php 
          $id_prof = $row['L_P_id'];
          $prof = mysqli_query($conn,"SELECT Emri,Mbiemri from profesoret where P_id='$id_prof'");
          $prof = mysqli_fetch_assoc($prof);
          echo "<center>",$prof['Emri']," ",$prof['Mbiemri'],"</center>";
          ?></td>

           <td><?php 
          $id_prof = $row['S_P_id'];
          $prof = mysqli_query($conn,"SELECT Emri,Mbiemri from profesoret where P_id='$id_prof'");
          $prof = mysqli_fetch_assoc($prof);
          echo "<center>",$prof['Emri']," ",$prof['Mbiemri'],"</center>";
          ?></td>

          <td><?php echo "<center>",$row['Kredite'],"</center>" ?></td>


          <td ><center>Viti i dyte</center></td>

          
      <?php }
     ?>

        <tr>
          <td style=" width: 100%;line-height: 5px;text-align:center;font-size:14px;font-family:Arial;background-color: #354052; border-top: solid 2px #29b6f6;">
           <center style="color:white;">Viti Trete</center>
          </td>
          
        </tr>


            <?php 

      $query = mysqli_query($conn,"SELECT L_id,Emri,Kredite,L_P_id,S_P_id from lendet where Viti='3' AND Dg_id='$Dg_id'");
      $sum_kred3 = 0;$kaluar3=0;$ngeles3=0;
      $sum_nota3 = 0;$lendet3=0;
      while ($row = mysqli_fetch_assoc($query)) {
         ?>
        <tr>
          <td><?php echo "<center>",$row['Emri'],"</center>";$lendet3++;?></td>

          <td><?php 
          $id_prof = $row['L_P_id'];
          $prof = mysqli_query($conn,"SELECT Emri,Mbiemri from profesoret where P_id='$id_prof'");
          $prof = mysqli_fetch_assoc($prof);
          echo "<center>",$prof['Emri']," ",$prof['Mbiemri'],"</center>";
          ?></td>

          <td><?php 
          $id_prof = $row['S_P_id'];
          $prof = mysqli_query($conn,"SELECT Emri,Mbiemri from profesoret where P_id='$id_prof'");
          $prof = mysqli_fetch_assoc($prof);
          echo "<center>",$prof['Emri']," ",$prof['Mbiemri'],"</center>";
          ?></td>


          <td><?php echo "<center>",$row['Kredite'],"</center>" ?></td>

          <td><center>Viti i trete</center></td>          

        </tr>
      <?php }?>
     

    </tbody>
</table>
</div>  


</div>











<!-- ------  Mabron div qe permban tere faqen   ------ -->

  
     <?php } ?>
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



          $('.h-nav-mmenu').on('mouseover',function(){
          
              $('.submenu-dropdown').slideDown('fast');

              $('.submenu-dropdown a').on('mouseover',function(){
                $(this).css({"background-color":"black"});
                $(this).css({"color":"white"});
              }).on('mouseleave',function(){
                $(this).css({"background-color":"white"});
                $(this).css({"color":"black"});
              });

          });


          $('.submenu-dropdown').on('mouseleave',function(){
            $(this).slideUp('fast');
          });

          $('.h-nav-mmenu').on('focusout',function(){
            $('.submenu-dropdown').slideUp('fast');
          });

          $('.h-nav-mmenu').click(function(e){
            $('.submenu-dropdown').slideDown('fast');
             e.stopPropagation();
          });

          $(window).click(function() {
              $('.submenu-dropdown').slideUp('fast');
          });

                    
    });


    </script>
</body>
</html>

