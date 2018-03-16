<?php 
		$dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db ='university';
        $conni = mysql_connect($dbhost, $dbuser, $dbpass);
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
        mysql_select_db('university'); 
?>