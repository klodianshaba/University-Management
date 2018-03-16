<?php
//Include database configuration file
include('dbConfig.php');

if(isset($_POST["D_id"]) && !empty($_POST["D_id"])){

    //Merr te dhenat e degeve perkatese te departamentit te selektuar
    $query = $db->query("SELECT * FROM deget WHERE D_id = ".$_POST['D_id']."");
    
    //Rreshtat e querit
    $rowCount = $query->num_rows;
    
    //Mbush dropdown e degeve 
    if($rowCount > 0){
        echo '<option value="">Zgjidh Degen</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['Dg_id'].'">'.$row['Emri'].'</option>';
        }
    }else{
        echo '<option value="">Nuk ka dege perkatese</option>';
    }
}

if(isset($_POST["Dg_id"]) && !empty($_POST["Dg_id"])){


    //Merr te dhenat e degeve perkatese te departamentit te selektuar
    $query = $db->query("SELECT * FROM profesoret  ");
    
    //Rreshtat e querit
    $rowCount = $query->num_rows;
    
    //Mbush dropdown e degeve 
    if($rowCount > 0){
        echo '<option value="">Zgjidh Profesorin e Leksioneve</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['P_id'].'">'.$row['Emri'].'</option>';
        }
    }else{
        echo '<option value="">Nuk ka profesore te ketij departamenti</option>';
    }

}
if(isset($_POST["P_id"]) && !empty($_POST["P_id"])){


    //Merr te dhenat e degeve perkatese te departamentit te selektuar
    $query = $db->query("SELECT * FROM profesoret  ");
    
    //Rreshtat e querit
    $rowCount = $query->num_rows;
    
    //Mbush dropdown e degeve 
    if($rowCount > 0){
        echo '<option value="">Zgjidh Profesorin e Seminarve</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['P_id'].'">'.$row['Emri'].'</option>';
        }
    }else{
        echo '<option value="">Nuk ka profesore te ketij departamenti</option>';
    }
    
}


?>