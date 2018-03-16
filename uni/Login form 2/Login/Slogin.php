<?php 

session_start();


if(isset($_POST['logimi'])){

$username = mysql_real_escape_string($_POST['emri']);
$password = mysql_real_escape_string($_POST['pass']);
	
	if ($username && $password) {
		$connect = mysql_connect("localhost","root","") or die("Nuk u lidhet");
		mysql_select_db("university") or die("Nuk u gjet ne databaze");
		$query = mysql_query("select * from student where Username = '".mysql_real_escape_string($username)."' AND type='student' AND Password='".mysql_real_escape_string($password)."'");
		$numrows = mysql_num_rows($query);
    }

    if ($numrows!=0) {
		
		while ($row = mysql_fetch_assoc($query)) {
			$dbusername = $row['Username'];
			$dbpassword = $row['Password'];
			 $dbusername;
			 $dbpassword;
		}
	
		if ($username==$dbusername&&$password==$dbpassword) {
			echo'<script> 
			window.alert("Ju u kycet me sukses!!!!!")
			window.location="../../../app/student/"; </script> ';
			$_SESSION['stusername'] = $username;
			//nqs logohet atehere  krijohet nje session me vleren true
			$_SESSION['Stloguar'] = true;
		}else{
			echo'<script> 
			window.alert("Te dhenat nuk perputhen.Ju lutem provoni serish!")
			window.location="../"; </script> ';
		}
	}else{
		echo'<script> 
			window.alert("Perdoruesi nuk ekziston!!!")
			window.location="../"; </script> ';
	}
}
?>