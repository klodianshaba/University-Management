<?php include '../profesor/connection.php';?>
<?php include '../profesor/stEditim.php';?>

  <?php 
    

        if (!isset($_SESSION['prusername'])) {
       echo ("<script language = 'javascript'>
                      window.alert('Ju nuk jeni te loguar,ju lutem logohuni')
                      window.location.href='../../../uni/Login form 2/profesori/'
             </script>");
       die();
      }else if(isset($_SESSION['prusername'])){
       $GLOBALS['username'] = $_SESSION['prusername'];
       $user = @$_SESSION['prusername'];
       $id_st = mysqli_query($conn,"SELECT P_id from profesoret where Username = '$user'");
       $id_st = mysqli_fetch_assoc($id_st);
       $GLOBALS['id_st'] = $id_st['P_id'];
      }else{
       echo "This page does not exist!!!!";
      }



   ?>
<?php
$user = @$_SESSION['prusername'];
$query = "select * from profesoret where '$user'=username ";
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
    margin-left:20%;
    margin-top:5%;
  }





      table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    border: 2px solid black;
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
  padding-right: 17px;
  background:-o-linear-gradient(bottom, #003366 5%, #003f7f 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #003366), color-stop(1, #003f7f) );
  background:-moz-linear-gradient( center top, #003366 5%, #003f7f 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#003366", endColorstr="#003f7f");  background: -o-linear-gradient(top,#003366,003f7f);

  background-color:#003366;
}
/*if mac os*/
body.MacOS thead {
  padding-right: 0;
}

tbody { border-top: 2px solid black; }

tbody td, thead th {
    width: 20%;
    float: left;
    border-right: 1px solid black;
}

.table--class {
  margin:0px;padding:0px;
  margin-left: auto;
    margin-right: auto;
  width:100%;
  box-shadow: 10px 10px 5px #888888;
  border:1px solid #4c7299;
  
  -moz-border-radius-bottomleft:0px;
  -webkit-border-bottom-left-radius:0px;
  border-bottom-left-radius:0px;
  
  -moz-border-radius-bottomright:0px;
  -webkit-border-bottom-right-radius:0px;
  border-bottom-right-radius:0px;
  
  -moz-border-radius-topright:0px;
  -webkit-border-top-right-radius:0px;
  border-top-right-radius:0px;
  
  -moz-border-radius-topleft:0px;
  -webkit-border-top-left-radius:0px;
  border-top-left-radius:0px;
}.table--class tr:last-child td:last-child {
  -moz-border-radius-bottomright:0px;
  -webkit-border-bottom-right-radius:0px;
  border-bottom-right-radius:0px;
}
.table--class table tr:first-child td:first-child {
  -moz-border-radius-topleft:0px;
  -webkit-border-top-left-radius:0px;
  border-top-left-radius:0px;
}
.table--class table tr:first-child td:last-child {
  -moz-border-radius-topright:0px;
  -webkit-border-top-right-radius:0px;
  border-top-right-radius:0px;
}.table--class tr:last-child td:first-child{
  -moz-border-radius-bottomleft:0px;
  -webkit-border-bottom-left-radius:0px;
  border-bottom-left-radius:0px;
}.table--class tr:hover td{
  background-color:#cccccc;
    

}
.table--class td{
  vertical-align:middle;
  
  background-color:#6699cc;

  border:1px solid #4c7299;
  border-width:0px 1px 1px 0px;
  text-align:left;
  padding:7px;
  font-size:10px;
  font-family:Arial;
  font-weight:normal;
  color:#ffffff;
}.table--class tr:last-child td{
  border-width:0px 1px 0px 0px;
}.table--class tr td:last-child{
  border-width:0px 0px 1px 0px;
}.table--class tr:last-child td:last-child{
  border-width:0px 0px 0px 0px;
}
.table--class tr:first-child th{
  
  border:0px solid #4c7299;
  text-align:center;
  border-width:0px 0px 1px 1px;
  font-size:18px;
  font-family:Arial Black;
  font-weight:bold;
  color:#1d53e5;
}
.table--class tr:first-child:hover th{

}
.table--class tr:first-child th:first-child{
  border-width:0px 0px 1px 0px;
}
.table--class tr:first-child th:last-child{
  border-width:0px 0px 1px 1px;
}

tbody td:last-child, thead th:last-child {
    border-right: none;
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
                <img src="../img/account.png" class="account-icon"><a href="#" class="admin-btn"><?php echo ucfirst($result['Emri']);?> <?php echo ucfirst($result['Mbiemri']);?></a>
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
                              <li><a href="../orari/"><img src="../img/sign.png" class="circle-icon-sm">Shiko Orarin</a></li>
                          </ul>
                      </li>

                      <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                          <ul class="submenu" value="none" id="sub3">
                              <li><a href="#"><img src="../img/sign.png" class="circle-icon-sm" id="" >Shiko Njoftimet</a></li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
    
      <!-- ------  Mbaron menu qe ndodhet majtas tek faqja  ------ -->    

           

       
  </div>

<div id="etera" class="table--class" style="width:74%;">

<table>
    <thead>
        <div style="height: 30px;line-height: 30px;border:0px solid #4c7299;text-align:center;border-width:0px 0px 1px 1px;font-size:18px;font-family:Arial Black;font-weight:bold;color:#1d53e5; color:#098979;  background:-o-linear-gradient(bottom, #003366 5%, #003f7f 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #003366), color-stop(1, #003f7f) );background:-moz-linear-gradient( center top, #003366 5%, #003f7f 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#003366", endColorstr="#003f7f");  background: -o-linear-gradient(top,#003366,003f7f);" >
        Notat dhe Informacione
        </div>
        <tr>
            <th>Lenda</th>
            <th>Tipi</th>
            <th>Kredite</th>
            <th>Dega</th>
            <th>Viti</th>
        </tr>
    </thead>
    <tbody>




    <?php 

      $query = mysqli_query($conn,"SELECT L_id,Emri,Kredite,Dg_id,Viti from lendet where L_P_id = '$id_st'");


      while ($row = mysqli_fetch_assoc($query)) {
         ?>
        <tr>
          <td><?php echo "<center>",$row['Emri'],"</center>"; ?></td>

          <td><center>Leksion</center></td>

          <td><?php echo "<center>",$row['Kredite'],"</center>"; ?></td>

          <td><?php 
          $dega = $row['Dg_id'];
          $sql = mysqli_query($conn,"SELECT Emri from deget where Dg_id = '$dega' ");
          $dega = mysqli_fetch_assoc($sql);
          echo "<center>",$dega['Emri'],"</center>";
           ?></td>

           <td><?php
                  if ($row['Viti'] == 1) {
                      echo "<center>Viti i pare</center>";
                   }else if($row['Viti'] == 2){
                      echo "<center>Viti i dyte</center>";
                   }else if($row['Viti'] == 3){
                      echo "<center>Viti i trete</center>";
                   }
              ?></td>
        </tr>
      
      <?php }?>



         <?php 

      $query = mysqli_query($conn,"SELECT L_id,Emri,Kredite,Dg_id,Viti from lendet where S_P_id = '$id_st'");


      while ($row = mysqli_fetch_assoc($query)) {
         ?>
        <tr>
          <td><?php echo "<center>",$row['Emri'],"</center>"; ?></td>

          <td><center>Seminar</center></td>

          <td><?php echo "<center>",$row['Kredite'],"</center>"; ?></td>

          <td><?php 
          $dega = $row['Dg_id'];
          $sql = mysqli_query($conn,"SELECT Emri from deget where Dg_id = '$dega' ");
          $dega = mysqli_fetch_assoc($sql);
          echo "<center>",$dega['Emri'],"</center>";
           ?></td>

           <td><?php
                  if ($row['Viti'] == 1) {
                      echo "<center>Viti i pare</center>";
                   }else if($row['Viti'] == 2){
                      echo "<center>Viti i dyte</center>";
                   }else if($row['Viti'] == 3){
                      echo "<center>Viti i trete</center>";
                   }
              ?></td>
        </tr>
      
      <?php }
     ?>


        
    </tbody>
</table>
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