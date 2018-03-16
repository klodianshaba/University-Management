<?php include 'meshume/connection.php';?>
<?php include 'meshume/stEditim.php';?>
<?php include 'meshume/Querymenu.php';?>
  <?php 

        
      if (!isset($_SESSION['stusername'])) {
       echo ("<script language = 'javascript'>
                      window.alert('Ju nuk jeni te loguar,ju lutem logohuni')
                      window.location.href='../../../uni/Login form 2/'
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
      <link rel="stylesheet" type="text/css" href="../student-css/student.css">
     <link rel="stylesheet" type="text/css" href="../student-css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../student-css/popup.css">
    <link rel="stylesheet" type="text/css" href="../student-css/css.css">
    <link rel="stylesheet" type="text/css" href="../student-css/njofti.css">
       <!--  Querymenu -->
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
</head>
<body>

  

    <div class="horizontal-container" style="z-index: 2!important;">
        <div class="left-nav">
            Universiteti I Tiranes
        </div>
        <form class="" method="post">
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

    <div class="left-container" style="z-index: 2!important;">

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
                        <li><a href="../notat/"><img src="../img/sign.png" class="circle-icon-sm">Shiko Notat</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Orari</a> <span class="plus" id="plus7">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href="../orari/" ><img src="../img/sign.png" class="circle-icon-sm">Shiko Oraret</a></li>
                    </ul>
                </li>

                <li class="tabs"><a href="#">Njoftime</a> <span class="plus" id="plus8">+</span>
                    <ul class="submenu" value="none" id="sub3">
                        <li><a href=""><img src="../img/sign.png" class="circle-icon-sm" id="" >Shiko Njoftimet</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
   <?php  include 'meshume/Querymenu.php';?>
      
      
      
             
  
            
        <!-- Njoftimet -->
  <div class="dim1">
    <div class="dim2" style="margin-left: 220px;">
        <div class="njoftime-container" id="njoftime">
            <br><br><br>
          
            <br>
           <div class="title-bar" style="width:100%; height: 33px; margin-top: -3px;"><div id="" style="padding-top: 10px;">Njoftimet | Shiko Njoftimet</div>

           <div class="bar-container" style="margin-left: 30px;">



   


                <ul id="itemContainer">
             <!--faqet-->  
             <?php
               $dg_st=$result['Dg_id'];
               $viti_st=$result['Viti'];
           

               $query = "SELECT * from njoftimet  where  (Dg_id='$dg_st' || Dg_id='0') and (viti='$viti_st' || Viti='0') order by id desc";
               $post = $db->select($query);
               if($post){
                   while($result = $post->fetch_assoc()){
          
                   ?>
                   
                   <div class="njoftimet1" style="-webkit-box-shadow: 0px 1px 4px 2px rgba(97,86,97,1);
                      -moz-box-shadow: 0px 1px 4px 2px rgba(97,86,97,1);
                      box-shadow: 0px 3px 4px 2px rgba(97,86,97,1);">

                            <div class="hija"> </div>

                                                  
                             <div class="njoftim3">

                                 <a href="meshume.php?id=<?php echo $result['id'];?>"><img src="../../../uni/foto/upload/<?php echo $result['foto'];?>" style="width:275px; height:110px; "> </a>
                             </div> 
                              <div id="njoftim2" style="color:black;">
                             <h2 style="margin-left: 50px; margin-top: 7px;"><?php echo $fm->formatDate($result['data']);?> </h2><br>
                           </div>  <br>
                          
                           <div id="njoftim7" >
                               <div class="njoftim"  action="">

                                    <b><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $fm->titulli ($result['titulli']);?></a></b>
                                </div> <br> 

                                 <h3 style="color:black; text-align: justify; margin-right: 5px;"><?php echo $fm->meshume ($result['pershkrimi']);?></h3>
                           </div>   <br>

                        <div id="meshume" style="margin-top: 3px;">
                            <a href="meshume/meshume.php?id=<?php echo $result['id']; ?>" >Me  shume</a>
                       </div>
                   
                </div>

                <?php } ?> 
            <br><br>
               
       
      <?php } else {
          echo'<div class="skanjoftim" style="margin-top:40px; color:black;" > Nuk ka Njoftime</div>';
      
      
       }?>

              </ul>
        </div>
        </div>
       

 
  
     <?php } ?>
  
</body>
</html>