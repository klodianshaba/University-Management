


<?php 

session_start();



if(isset($_POST['logimi'])){

$username = $_POST['emri'];
$password = $_POST['pass'];
	
	if ($username && $password) {
		$connect = mysql_connect("localhost","root","") or die("Nuk u lidhet");
		mysql_select_db("university") or die("Nuk u gjet ne databaze");
		$query = mysql_query("select * from sekretaria where username = '".mysql_real_escape_string($username)."' AND type='sekretare' AND password='".mysql_real_escape_string($password)."'");
		$numrows = mysql_num_rows($query);
    }

    if ($numrows!=0) {
		
		while ($row = mysql_fetch_assoc($query)) {
			$dbusername = $row['username'];
			$dbpassword = $row['password'];

		}
	
		if ($username==$dbusername&&$password==$dbpassword) {
			echo'<script> 
			window.alert("Ju u kycet me sukses!!!!!")
			window.location="../../../../app/secretary/secretary.php"; </script> ';
 
			$_SESSION['username'] = $username;

			//nqs logohet atehere  krijohet nje session me vleren true
			$_SESSION['Sktrloguar'] = true;

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