<?php include_once("scripts/global.php"); 
if($logged==0){
echo("You need to be logged in to view profile");	
exit();
}

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$id=preg_replace("#(^0-9)#","",$id);	
}
else{
	$id=$_SESSION['id'];
}

//collect member info
$query=mysql_query("SELECT * FROM members WHERE id='$id' LIMIT 1") or die("Could not collect user info");
$count_mem=mysql_num_rows($query);
if($count_mem==0){
	echo("The User does not exist ");
	exit();	
}
while($row=mysql_fetch_array($query)){
	$username=$row["username"];	
	$fname=$row["firstname"];	
	$lname=$row["lastname"];
	$profile_id=$row["id"];
	if($session_id==$profile_id){
		$owner=true; 
	}else{
	 $owner=false;
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php print($fname);?> <?php print($lname);?>'s profile</title>
<link rel="icon" type="image/png" href="images/favcon.png"/>
<link href="css/global.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container" class="center">
<h1><?php print($username);?></h1>
<?php
if($owner==true){
?>
<a href="#">edit profile</a><br />
<a href="#">account settings</a>
<?php
}else{
?>
<a href="#">private message</a><br />
<a href="#">add as friend</a>

<?php
	
}


?>
</div>
</body>
</html>