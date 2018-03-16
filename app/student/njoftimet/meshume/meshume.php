<?php include '../../student/connection.php';?>
<?php include '../../student/stEditim.php';?>
<?php include '../../student/Querymenu.php';?>
  <?php 

        
      if (!isset($_SESSION['stusername'])) {
       echo ("<script language = 'javascript'>
                      window.alert('Ju nuk jeni te loguar,ju lutem logohuni')
                      window.location.href='../../../../uni/Login form 2/'
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
      <link rel="stylesheet" type="text/css" href="../../student-css/student.css">
     <link rel="stylesheet" type="text/css" href="../../student-css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../../student-css/popup.css">
    <link rel="stylesheet" type="text/css" href="../../student-css/css.css">
    <link rel="stylesheet" type="text/css" href="../../student-css/njofti.css">
     <link rel="stylesheet" type="text/css" href="../../student-css/meshume.css">
       <!--  Querymenu -->
        <script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>
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
          <img src="../../img/account.png" class="account-icon"><a href="#" class="admin-btn"><?php echo $result['Emri'];?> <?php echo $result['Mbiemri'];?></a>
          <div class="submenu-dropdown">
            <a href="index.php">Profili</a>
            <a style="padding:0px"><input type="submit" name="dil" value="Dilni" style="width:30px;padding: 12px 20px;padding-right:80px;border:none"></a>
          </div>
        </div>
      </div>
    </form>
    </div>

    <div class="left-container">

        <div class="logo-container">
            <img src="../../img/logo-fshn.png">
        </div>

        <div class="menu-container" style="margin-left:-10px;margin-top:0px">
            <ul>
                <li class="tabs"><a href="#" style="padding-left:10px">Te Dhenat</a> <span class="plus" id="plus9">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../../"><img src="../../img/sign.png" class="circle-icon-sm">Modifiko Te Dhenat</a></li>
                    </ul>
                </li>
                

                <li class="tabs"><a href="#">Plani Mesimor</a><span class="plus" id="plus5">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../../plani mesimor/"><img src="../../img/sign.png" class="circle-icon-sm">Plani Mesimor</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Notat</a> <span class="plus" id="plus6">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../../notat"><img src="../../img/sign.png" class="circle-icon-sm">Shiko Notat</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../../orari/"><img src="../../img/sign.png" class="circle-icon-sm">Shiko Oraret</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../"><img src="../../img/sign.png" class="circle-icon-sm" id="" >Shiko Njoftimet</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
   <?php  include '../../student/Querymenu.php';?>
      
      
      
             
  
            
        <!-- Njoftimet -->
  <div class="dim1">
    <div class="dim2" style="margin-left: 220px;">
        <div class="njoftime-container" id="njoftime">
            <br><br><br><br>
          <div class="title-bar" style="width:100%; height: 33px; margin-top: -3px;"><div id="" style="padding-top: 10px;">Njoftimet | Shiko Njoftimin e plote</div><br><br>
           <?php
           if(isset($_GET['id'])){
               $id=$_GET['id'];
               $sql="select * from njoftimet where '$id'= id";
               $post = $db->select($sql);
               $_SESSION['id']= $id;
               if($post){
                  $result= $post->fetch_assoc();
                  ?>
                     <div class="njoftimiiplote" >
                         <form action="phpsekretare.php" name="computer" method="post"><br>
                               <div class="datetime">
                                    <h3>Data Njoftimit:</h3><br>
                                    <?php echo $fm->formatDate($result['data']);?>
                                    
                                </div>
                                <div class="autori">
                                     <h3>Autori Njoftimit:</h3><br>
                                     <?php echo $result['autori'];?>
                               </div><br><br><br><br>
                               <div class="titulli" >
                                     <h3>Titulli Njoftimit:</h3><br>
                                     <?php echo $result['titulli'];?>
                               </div>
                               <div class="pershkrimi">
                                    <h3> Pershkrimi</h3><br>
                                    <?php echo $result['pershkrimi'];?>
                               </div><br><br>
                          </form>
                      </div>
              <?php } 
           }
           ?>
         </div>
      </div>
    </div>
  </div>
<!-- Mbaron shfaq njoftimin e plote ................................................ -->



 

              
        

 
  
     <?php } ?>
  
</body>
</html>