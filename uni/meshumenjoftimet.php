
<?php include 'connection.php';?>
<?php include 'Database.php';?>
<?php include 'format.php';?>
<?php
$db = new Database ();
$fm = new format ();
?>


<!DOCTYPE html>
<html>
<head>
	<title>MEshum njoftime</title>
</head>
<link rel="stylesheet" href="css/gradient.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="stylesheet" type="text/css" href="css/njofti.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/popup.css">
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/smoothscroll.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<body><br><br>

<h2>Te gjithe Njoftimet</h2><hr>

<div class="dim1">
<div class="dim2">


            
             <?php
               $query = "select * from njoftimet ORDER BY id DESC  ";
               $post = $db->select($query);
               if($post){
                   while($result = $post->fetch_assoc()){
          
                   ?>
                   
                   <div class="njoftimet1" style="-webkit-box-shadow: 0px 1px 4px 2px rgba(97,86,97,1);
-moz-box-shadow: 0px 1px 4px 2px rgba(97,86,97,1);
box-shadow: 0px 3px 4px 2px rgba(97,86,97,1);">

                            <div class="hija"> </div>

                                                  
                             <div class="njoftim3">

                                 <a href="post.php?id=<?php echo $result['id'];?>"><img src="foto/upload/<?php echo $result['foto'];?>" style="width:275px; height:110px;"> </a>
                             </div> 
                              <div id="njoftim2">
                             <h2><?php echo $fm->formatDate($result['data']);?> </h2><br>
                           </div>  <br>
                          
                           <div id="njoftim7" >
                               <div class="njoftim"  action="">

                                    <b><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $fm->titulli ($result['titulli']);?></a></b>
                                </div> <br> 
                                 <h3><?php echo $fm->meshume ($result['pershkrimi']);?></h3>
                           </div>   <br>

                        <div id="meshume">
                            <a href="post.php?id=<?php echo $result['id']; ?>">Me  shume</a>
                       </div>
                   
                </div>

                <?php } ?> 
                <?php } ?> 


</div></div>

</body>
</html>