<?php 
 $host		= "localhost";
 $username	= "root";
 $password	= "root";
 $dbname	= "MaePopeang";

 $link = mysqli_connect($host,$username,$password,$dbname)or die("Connection error");
 mysqli_set_charset($link,"utf8");
 if(mysqli_connect_error())
 {
 	echo "Mysqli Connect was not estabished".mysqli_connect_error();
 }
?>