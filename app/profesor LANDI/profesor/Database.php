<?php
class Database{
    public $host = "localhost";
    public $user = "root";
    public $pass = '';
    public $dbname = "university";
    
    public $link;
    public $error;
    
    public function __construct(){
        $this->connectDB();
    }
    
    private function connectDB(){
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->link){
            $this->error ="connection fail".$this->link->connect_error;
            return false;
        }
    }
    
    
    public function select($query){
        $result = $this->link->query($query) or die ($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
            
        }else{
            return false;
        }
    }
    
    public function insert($query){
        $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($insert_row){
            koka("location: index.php?msg=".urlencode('Date Inserted successfully.'));
            exit();
        }else{
            die("Error :(".$this->link->errno.")".$this->link->error);
            
        }
    }
    
}



?>