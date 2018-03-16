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
                              <li><a href="../shtonota/shtonota.php"><img src="../img/sign.png" class="circle-icon-sm">Vendos Notat</a></li>
                          </ul>
                      </li>

                      <li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                          <ul class="submenu" value="none" id="sub3">
                              <li><a href="../orari/"><img src="../img/sign.png" class="circle-icon-sm">Shiko Orarin</a></li>
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
    
      <!-- ------  Mbaron menu qe ndodhet majtas tek faqja  ------ -->    

           

       
  </div>


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

           <td style=""><?php
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
</div>  </div>  

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