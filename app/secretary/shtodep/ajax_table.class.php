<?php

include('config.php');




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
        
		
  	//marrim te dhenat nga DB
      $this->res = mysqli_query($this->conn,"select * from departamentet   ORDER BY D_id DESC");
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
		
		$vlerat = implode(",",array_keys($data));
		$values = implode("','", array_values($data));
		mysqli_query($this->conn,"insert into departamentet (".$vlerat.") values ('$values')");
		if(mysqli_insert_id($this->conn)) return mysqli_insert_id($this->conn);
		return 0;
	}
	else return 0;	
  }	

  
  //fshirja e regjitrimit ne DB
  function delete_record($id){
	 if($id){
		mysqli_query($this->conn,"delete from departamentet where D_id = $id limit 1");
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
		$sql = "update departamentet set $str where D_id = $id limit 1";

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
		$sql = "update departamentet set ".key($data)."='".$data[key($data)]."' where D_id = $id limit 1";
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