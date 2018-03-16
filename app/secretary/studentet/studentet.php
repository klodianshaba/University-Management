<?php 


  if(isset($_SESSION['Sktrloguar']) && $_SESSION['Sktrloguar'] == false) {
       echo'<script> 
      window.alert("Ju nuk jeni te kycur!!!!!")
      window.location="../../../../uni/Login form 2/admin/"; </script> ';
  }
 ?>

<?php include '../connection.php';?>
<?php include '../phpsekretare.php';?>
<?php include '../Querymenu.php';?>

<?php
$user = @$_SESSION['username'];
$query = "select * from sekretaria where '".mysql_real_escape_string($user)."' = username";
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

        <div class="menu-container" style="margin-left:-10px;margin-top:0px">
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
                        <li><a href="../shtonota/shtonota.php"><img src="../img/sign.png" class="circle-icon-sm">Vendos Nota</a></li>
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
            <div class="title-bar" style="width:100%; height: 33px;"><div id="" style="padding-top: 10px;">Studentet</div></div>
            <div class="bar-container" style="padding:0px;width:250px; display:inline;">
              

                
<?php
include ("objekti_sql.php");
    //Lidhje me databazen dhe krijimi i objektit
    include('dbConfig.php');
    
    //Merr gjithe departamentet nga DB
    $query = $db->query("SELECT * FROM departamentet ");
    
    //Numerojm rreshtat e tabeles se departamenteve     
    $rowCount = $query->num_rows;
    ?>
    <!-- Fillimi i dropdown per zgjedhje e Departamenteve dhe Degeve --><br>
    <form action="" method="post">
        <div class="dep" style="display: inline;">
            <select name="dep" id="dep" style="color:#fff;margin-left:10px">
                <option value="">Selekto Departamentin</option>
                <?php
                if($rowCount > 0){
                    while($row = $query->fetch_assoc()){ 
                        echo '<option value="'.$row["D_id"].'" '.(($_GET["dep"]==$row["D_id"])?'selected="selected"':"").'>'.$row["Emri"].'</option>';               
                    }
                }else{
                    echo '<option value="">Nuk ka Departamente</option>';
                }
                ?>
            </select>
        </div>

        <div class="dega" style="display: inline;">
            <select name="dega" id="dega" style="color:#fff">
                <option value="">Selekto Degen </option>
            </select>
        </div>
   
        <div class="ren" style="display: inline;">
            <input type="submit" value="Afisho Tabelen" id="butoni" name="kot" class="result-btn"> 
        </div>
    </form> <!-- Mbyllja e dropdown per zgjedhjen e dep dhe degeve -->

      
    <!-- Shfaqim  tabelen mbas selektimin e suksesshem te dropdown -->
   
    <?php
    if(isset($_POST['kot'])){

        //merr id-te e vlerave te selektuara
        $dep=$_POST['dep'];
        $dega=$_POST['dega'];
        $_SESSION['dep'] = $dep;
        $_SESSION['dega'] = $dega;
       
        if(!empty($dep)  && !empty($dega)){

              
                ?>

                <script type="text/javascript">
                $(function(){
                    $('.containe').css({display:'block'});
                    $('#default').css({display:'none'});
                }); header("Refresh:0; url=page2.php"); 
                
                </script>


                <?php
        }else{
            echo '<div id="perqef"  style="margin-left:10px; margin-top:5px;"> Selektoni Departamentin dhe Degen qe te Shfaqet tabela per te shikuar studentet!!</div>';
        }

    }
    ?>   <br>
  <style type="text/css">
   .containe{
    display: none;
   } 

</style>

    <!-- Fillimi i tabeles per shtimin e studenteve-->
<div class="containe"  >
     
        <img width="40px" style="margin-left: -10px;"> 
        <caption style="text-align:center;color:black">

			<?php $em_dega = mysql_query("select Emri from deget where Dg_id = ".$dega);
				  $em_dega = mysql_fetch_assoc($em_dega);

				  $em_dep = mysql_query("select Emri from departamentet where D_id = ".$dep);
				  $em_dep = mysql_fetch_assoc($em_dep);
				  $EmriDepartamentin = $em_dep['Emri'];
				  $EmriDeges = $em_dega['Emri'];

				echo "Ju jeni duke Shikuar student tek Departamenti : ".$EmriDepartamentin.",Dega : ".$EmriDeges;
			?>
		</caption><br><br>
        <div style="height:470px;overflow: auto;margin:10px;margin-top:0px;">

    <table border="0" class=" table table-striped table-hover table-bordered table-condensed tableDemo bordered order-table table"  style="margin-top:-5px;">

            <tr id="header">
              
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>Nr Tel</th>
                <th>Username</th>
                <th>Fjalkalimi</th>
            </tr>
                <?php
              $sql= $db->query("SELECT * from student where  Dg_id='$dega' " );
             
              $length = $sql->num_rows;

              if($length>0){

                  while($result=$sql->fetch_assoc()){
                        ?>
                        <tr>
                             <td style="height: 30px;"> <?php echo $result['Emri'];?> </td>
                             <td> <?php echo $result['Mbiemri'];?> </td>
                             <td> <?php echo $result['Email'];?> </td>
                             <td> <?php echo $result['nrtel'];?> </td>
                             <td> <?php echo $result['Username'];?> </td>
                             <td> <?php echo $result['Password'];?> </td>
                   
                            

                             
                   <?php }?>

            <?php }?>
                   
        </tr>
           

            </tbody>
    </table>

 </div>
</div>
<!-- Mbarrimi i tabeles -->


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

  
     <?php } ?>
  
</body>
</html>