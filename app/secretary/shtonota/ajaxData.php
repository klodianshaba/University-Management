<?php
//Include database configuration file
include('dbConfig.php');

if(isset($_POST["Dg_id"]) && !empty($_POST["Dg_id"])){
    //Merr te dhenat e degeve perkatese te departamentit te selektuar
    $query = $db->query("SELECT * FROM lendet WHERE Dg_id = ".$_POST['Dg_id']."");
    
    //Rreshtat e querit
    $rowCount = $query->num_rows;
    
    //Mbush dropdown e degeve 
    if($rowCount > 0){
        echo '<option value="">Zgjidh Lenden</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['L_id'].'">'.$row['Emri'].'</option>';
        }
    }else{
        echo '<option value="">Nuk ka Lende perkatese</option>';
    }
}


?>
<a href="shtonota.php?IDD=<?php echo $result['ID'];?>"> Save  </a>