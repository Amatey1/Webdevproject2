<?php

session_start();
header('location:login.php');

$connector = mysqli_connect('localhost','root','');

mysqli_select_db($connector,'usercreation');

$mail = $_POST['Email'];
$name = $_POST['user'];
$pass = $_POST['password'];
$pass= md5($pass);

$selector="select * from tableofusers where email='$mail'";
$result = mysqli_query($connector,$selector);

$val= mysqli_num_rows($result);

if($val==1){
	echo "This Username is already in use";
}else{
	$add="insert into tableofusers(email,name,password)values('$mail','$name','$pass')";
	mysqli_query($connector,$add);
	echo " You are now in";

}


?>
 