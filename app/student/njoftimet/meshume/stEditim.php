

<?php include 'Database.php';?>
<?php include 'format.php';?>

<?php
$db = new Database ();
$fm = new format ();
?>
<?php include 'connection.php';?>
<?php
    session_start();
    $user = @$_SESSION['stusername'];
    $user_id= @$_SESSION['user_id'];
    $user_emer= @$_SESSION['user_emer'];
      
?>




<!-- Fillon Ndrysho Email-in ................................................ -->
<?php

 if(isset($_POST['email'])){

    $emailivjeter=$_POST['emailivjeter'];
    $emailiri=$_POST['emailiri'];
    $konfirmoemail=$_POST['konfirmoemail'];


    $sql= mysql_query("SELECT* from student  where '$user'= Username and  '$emailivjeter'= Email ");

    if(mysql_num_rows($sql)==0){
       
             echo '<script type="text/javascript">
                    window.alert("Emaili vjeter qe keni futur nuk eshte i sakte me ate ne Database");
                    window.location.href=""
                    </script>';
    }else{
       $sqli= "UPDATE student  set Email='$emailiri' where '$user'= Username ";
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

    $sql="UPDATE student set  nrtel = '$nrtel'   where '$user'= Username ";
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


    $sql= mysqli_query($conn,"SELECT * from student  where Username = '$user'  AND Password = '$f' ");
    if(mysqli_num_rows($sql)==0){
       
             echo '<script type="text/javascript">
                    window.alert("Fjalkalimi vjeter nuk eshte i sakte");
                   
                    </script>';
    }else{
       $sqli= "UPDATE student  set Password='$fri' where '$user'= Username  ";
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
        window.location.href="../../../uni/Login form 2/";
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
    $uploaded_image = "../foto/upload/".$unique_image;
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
       $sqli= "UPDATE student  set foto='$uploaded' where '$user'= Username  ";
        $conn->query($sqli);
        
        echo '<script type="text/javascript">
              window.alert("Foto Profilit u ndryshua me sukses");
              window.location="../";
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

   if (isset($_POST['anullo'])) {
    echo "<script>window.location='../';</script>";
   }


?>

<!-- Mbaron  Ndrysho foton e profilit  ................................................ -->









