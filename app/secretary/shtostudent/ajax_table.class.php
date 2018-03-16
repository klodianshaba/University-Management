<?php

include('config.php');
include('ajaxData.php');


class ajax_table {
     
  public function __construct(){
	$this->dbconnect();
  }

   public function dbconnect() {

   $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)

      or die ("<div style='color:red;'><h3>Nuk eshte e mundur lidhja me SQL serverin</h3></div>");
         
    mysqli_select_db($this->conn,DB_DB)
      or die ("<div style='color:red;'><h3>Nuk u be e mundur lidhja me databazen</h3></div>");

    return $this->conn;
  }



  function getRecords(){

        if(isset($_SESSION['dega']) &&  !empty($_SESSION['dega'])) {
           $dega_id = $_SESSION['dega'];
        }
        else{
        	$dega_id = 'kot';
        }
      
		
  	//marrim te dhenat nga DB
       

      $this->res = mysqli_query($this->conn,"select * from student  where Dg_id = '$dega_id' ORDER BY ID DESC");
	if(mysqli_num_rows($this->res)){
		while($this->row = mysqli_fetch_assoc($this->res)){
			$record = array_map('stripslashes', $this->row);
			$this->records[] = $record;
		}
		return $this->records;
	}
	//else echo "Nuk u  gjeten regjistrime";
  }


  //funksioni save,per te futur vlerat ne DB tone
  function save($data){
  	session_start();
	if(count($data)){
		$dega_id = $_SESSION['dega'];
		$dep_id = $_SESSION['dep'];
		$vlerat = implode(",",array_keys($data));
		$values = implode("','", array_values($data));
		$username = $this->gjenero_username($data);
		$password = $this->gjenero_password($data);
		mysqli_query($this->conn,"insert into student (".$vlerat.",Type,Username,Password,Dg_id) values ('$values','student','$username','$password','$dega_id')");
		if(mysqli_insert_id($this->conn)) return mysqli_insert_id($this->conn);
		return 0;
	}
	else return 0;	
  }	

  function gjenero_username($teDhenat){
  	$emri = $teDhenat['Emri'];
  	$mbiemri = $teDhenat['Mbiemri'];
  	$username = 'st'.$emri.$mbiemri.'UT';
  	return $username;
  }

  function gjenero_password($teDhenat){
  	$emri = $teDhenat['Emri'];
  	$mbiemri = $teDhenat['Mbiemri'];
  	$dega_id = $_SESSION['dega'];
	$dep_id = $_SESSION['dep'];
	$pass = $emri.$dega_id.$mbiemri.$dep_id;
	return $pass;
  }



  //fshirja e regjitrimit ne DB
  function delete_record($id){
	 if($id){
		mysqli_query($this->conn,"delete from student where id = $id limit 1");
		return mysqli_affected_rows($this->conn);
	 }
  }	


  //updatimi i regjistrimit tone ne DB
  function update_record($data){
	if(count($data)){
		$id = $data['rid'];
		unset($data['rid']);
		$values = implode("','", array_values($data));
		$str = "";
		foreach($data as $key=>$val){
			$str .= $key."='".$val."',";
		}
		$str = substr($str,0,-1);
		$sql = "update student set $str where id = $id limit 1";

		$res = mysqli_query($this->conn,$sql);
		
		if(mysqli_affected_rows($this->conn)) return $id;
		return 0;
	}
	else return 0;	
  }	


  //updatimi i vetem nje kolone ne tabelen e DB
  function update_column($data){
	if(count($data)){
		$id = $data['rid'];
		unset($data['rid']);
		$sql = "update student set ".key($data)."='".$data[key($data)]."' where id = $id limit 1";
		$res = mysqli_query($this->conn,$sql);
		if(mysqli_affected_rows($this->conn)) return $id;
		return 0;
		
	}	
  }


  
  function error($act){
	 return json_encode(array("success" => "0","action" => $act));
  }

}
?>