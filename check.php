<?php

session_start();


$connector = mysqli_connect('localhost','root','');

mysqli_select_db($connector,'usercreation');

$mail = $_POST['Email'];
$name = $_POST['user'];
$pass = $_POST['password'];
$pass= md5($pass);

$selector="select * from tableofusers where email='$mail'&& password ='$pass'";
$result = mysqli_query($connector,$selector);

$val= mysqli_num_rows($result);

if($val==1){
	$_SESSION ['username'] = $name;
	header('location:landing.php');
}else{
	header('location:login.php');
	

}


?>
 