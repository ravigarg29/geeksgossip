<?php
session_start();
unset($_SESSION);
session_destroy();


if(isset($_COOKIE['id_cookie'])){
	setcookie("id_cookie",'',time()-50000,'/');
	setcookie("pass_cookie",'',time()-50000,'/');	
}

if(isset($_SESSION['username'])){

	echo("Logout unsuccessful");
	exit();	
}
else{
	header("Location:index.php");
}
?>