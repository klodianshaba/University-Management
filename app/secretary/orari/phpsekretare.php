

<?php include '../Database.php';?>
<?php include '../format.php';?>

<?php
$db = new Database ();
$fm = new format ();
?>
<?php include '../connection.php';?>
<?php
    session_start();
    $user = @$_SESSION['username'];
    $sql=$conn->query("SELECT emri, s_id from sekretaria where username='$user'");
    $get=$sql->fetch_assoc();
    $emri=$get['emri'];
    $id=$get['s_id'];
    
      
?>

<!-- Fillon Krijo Njoftim ................................................ -->
   <?php
    if(isset($_POST['submit'])){
          $titulli=$_POST['titulli'];
          $pershkrimi=$_POST['pershkrimi'];
          $dega=$_POST['degaselect'];
          $viti=$_POST['vitiselect'];
          
          
    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['ngarko']['name'];
    $file_size = $_FILES['ngarko']['size'];
    $file_temp = $_FILES['ngarko']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "../../uni/foto./upload/".$unique_image;
    $uploaded = $unique_image;

    if (empty($file_name)) {
     $foto="kot.jpg";

    }elseif ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    } elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    } else{

          $foto=$uploaded;
          move_uploaded_file($file_temp, $uploaded_image);
      }

          $sql = "INSERT INTO njoftimet (titulli,pershkrimi,foto,autori,id_autori,Dg_id,viti) VALUES ('$titulli','$pershkrimi','$foto','$emri','$id','$dega','$viti')";
          $conn->query($sql);
          $conn->close();
          echo '<script type="text/javascript">
                window.alert("Njoftimi u be me sukses");
                window.location.href="shtonjoftim.php"
                </script>';
         
 
    
   
     
       

 
    }
    ?>
<!-- Mbaron Krijo Njoftim ................................................ -->

<!-- Fillon Ndrysho emrin ................................................ -->
<?php
 if(isset($_POST['emri'])){

    $emri=$_POST['name'];

    $sql="UPDATE sekretaria set  emri = '$emri'   where '$user'= username ";
    $conn->query($sql);
    $conn->close();
       echo '<script type="text/javascript">
                    window.alert("Emri u ndryshua me sukses");
                    window.location.href=""
                    </script>';
 }
?>
<!-- Mbaron Ndrysho emrin ................................................ -->

<!-- fillon Ndrysho Mbiemrin ................................................ -->
<?php

 if(isset($_POST['mbiemri'])){

    $mbiemri=$_POST['mbi'];

    $sql="UPDATE sekretaria set  mbiemri = '$mbiemri'   where '$user'= username ";
    $conn->query($sql);
    $conn->close();
       echo '<script type="text/javascript">
                    window.alert("Mbiemri u ndryshua me sukses");
                    window.location.href=""
                    </script>';


  }
?>
<!-- Mbaron Ndrysho Mbiemrin ................................................ -->

<!-- Fillon Ndrysho Email-in ................................................ -->
<?php

 if(isset($_POST['email'])){

    $emailivjeter=$_POST['emailivjeter'];
    $emailiri=$_POST['emailiri'];
    $konfirmoemail=$_POST['konfirmoemail'];


    $sql= mysql_query("SELECT* from sekretaria  where '$user'= username and  '$emailivjeter'= email ");

    if(mysql_num_rows($sql)==0){
       
             echo '<script type="text/javascript">
                    window.alert("Emaili vjeter qe keni futur nuk eshte i sakte me ate ne Database");
                    window.location.href=""
                    </script>';
    }else{
       $sqli= "UPDATE sekretaria  set email='$emailiri' where '$user'= username ";
        $conn->query($sqli);
        $conn->close();
        echo '<script type="text/javascript">
                    window.alert("Emaili u ndryshua me sukses");
                    window.location.href=""
                    </script>';
    }
  
       

  }
?>
<!-- Mbarom Ndrysho Email-in ................................................ -->

<!-- Fillon Ndrysho numrin e telefonit ................................................ -->
<?php

 if(isset($_POST['nr'])){

    $nrtel=$_POST['nrtel'];

    $sql="UPDATE sekretaria set  nrtel = '$nrtel'   where '$user'= username ";
    $conn->query($sql);
    $conn->close();
       echo '<script type="text/javascript">
                    window.alert("Numri telefonit u ndryshua me sukses");
                    window.location.href=""
                    </script>';


  }
?>
<!-- Mbaron Ndrysho numrin e telefonit ................................................ -->

<!-- Fillon Ndrysho Fjalkalimin ................................................ -->
<?php

 if(isset($_POST['fjal'])){

    $f=$_POST['fjalivjeter'];
    $fri=$_POST['fjaliri'];
    $kfri=$_POST['konfirmofjal'];


    $sql= mysql_query("SELECT* from sekretaria  where '$user'= username  and '$f'= password ");

    if(mysql_num_rows($sql)==0){
       
             echo '<script type="text/javascript">
                    window.alert("Fjalkalimi vjeter nuk eshte i sakte");
                   
                    </script>';
    }else{
       $sqli= "UPDATE sekretaria  set password='$fri' where '$user'= username  ";
        $conn->query($sqli);
        $conn->close();
        echo '<script type="text/javascript">
                    window.alert("Fjalkalimi u ndryshua me sukses");
                   
                    </script>';
    }
  
       

  }
?>
<!-- Mbaron Ndrysho Fjalkalimin ................................................ -->

<!-- Fillon  Dilni nga Profili ................................................ -->
<?php
if(isset($_POST['dil'])){
  session_destroy();
  echo '<script type="text/javascript">
        window.location.href="../../../uni/Login form 2/admin/";
          </script>';

}


?>
<!-- Mbaron  Dilni nga Profili ................................................ -->

<!-- Fillon  Ndrysho foton e profilit  ................................................ -->

                <?php

   if (isset($_POST['fotoprofili'])){
    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "foto./upload/".$unique_image;
    $uploaded = $unique_image;

    if (empty($file_name)) {
     echo "<span class='error'>Please Select any Image !</span>";
    }elseif ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    } elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    } else{
       move_uploaded_file($file_temp, $uploaded_image);
       $sqli= "UPDATE sekretaria  set foto='$uploaded' where '$user'= username  ";
        $conn->query($sqli);
        
        echo '<script type="text/javascript">
              window.alert("Foto Profilit u ndryshua me sukses");
              window.location="secretary.php";
              </script>';
    
    if ($sqli) {
     echo "<span class='success'>Image Inserted Successfully.
     </span>";
    }else {
     echo "<span class='error'>Image Not Inserted !</span>";
    }
    }
    $conn->close();
   }



?>

<!-- Mbaron  Ndrysho foton e profilit  ................................................ -->

<!-- Fillon fshi njoftim ................................................ -->
<?php
if(isset($_GET['id'])){
  $id= $_GET['id'];
  $sql= "delete from njoftimet where id= '$id' ";
  $conn->query($sql);
  $conn->close();

       echo '<script type="text/javascript">
              window.location="njoftimet.php";
              </script>';
}
?> 
<!-- Mbaron fshi njoftim ................................................ -->



<!-- Fillon update njoftim................................................ -->
 <?php
if(isset($_POST['updatenjoftim'])){

  
  $autori=$_POST['autorinjoftim'];
  $titulli=$_POST['titullinjoftim'];
  $pershkrimi=$_POST['pershkriminjoftim'];

  $id=$_SESSION['id'];

  $sql= "UPDATE  njoftimet  SET titulli= '$titulli', pershkrimi='$pershkrimi' where '$id'= id";
  $conn->query($sql);
  $conn->close();
   echo '<script type="text/javascript">
              
              window.location="njoftimet.php";
              </script>';
}

 ?>


<!-- Mbaron update njoftim................................................ -->



<!-- Fillon  anullo update njoftim................................................ -->
 <?php
if(isset($_POST['anulloupdatenjoftim'])){

  

   echo '<script type="text/javascript">
              
              window.location="njoftimet.php";
              </script>';
}

 ?>


<!-- Mbaron anullo update njoftim................................................ -->
