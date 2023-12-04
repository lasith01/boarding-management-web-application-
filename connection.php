<?php
$servername="localhost";
$username="root";
$password="";
$dbname="01 login details & project info.txt";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Conection failed because".mysqli_connect_error());
}
?>