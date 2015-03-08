<?php include_once("scripts/global.php"); 
$message='';
if(isset($_POST["username"])){

	$username=$_POST["username"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$pass1=$_POST["pass1"];
	$pass2=$_POST["pass2"];
	
	//error handling
	if( (!$username) || (!$fname) || (!$lname)|| (!$email)|| (!$pass1)|| (!$pass2 ) ){
		$message="Please insert all fields in the form below!";
		
	}else{
		if($pass1!=$pass2){
			$message="Your passwords fields do not match!";	
		}else{
			//securing the data	
			$username=preg_replace("#[^0-9a-z]#i","",$username);
			$fname=preg_replace("#[^0-9a-z]#i","",$fname);
			$lname=preg_replace("#[^0-9a-z]#i","",$lname);
			$pass1=sha1($pass1);
			
			$email=mysql_real_escape_string($email);
			
			//check for duplicates
			$user_query=mysql_query("SELECT username FROM members WHERE username='$username' LIMIT 1") or die("Could not check username");
			$count_username=mysql_num_rows($user_query);
			$email_query=mysql_query("SELECT email FROM members WHERE email='$email' LIMIT 1") or die("Could not check email");
			$count_email=mysql_num_rows($email_query);
			
			if($count_username>0){
				$message="Your username is already in use!";	
			}else if($count_email>0){
				$message="Your email is already in use!";	
			}else{
				//insert the members
				$ip_address=$_SERVER['REMOTE_ADDR']; 
				$query=mysql_query("INSERT INTO members(username,firstname,lastname,email,password,ip_address,sign_up_data) VALUES('$username','$fname','$lname','$email','$pass1','$ip_address',now())") or die("Could not insert the data");
				$member_id=mysql_insert_id();
				
				$message="You have now been registered!\r\n You will be redirected to home page in 5 seconds .... ";
				
				echo "<script type='text/javascript'>setTimeout(function(){ window.location = 'index.php'; }, 5000);</script>";
				
				
				
					
			}
			
		}
	}
		
	
}


?>
<!doctype html>
<html>
<head>
<link rel="icon" type="image/png" href="images/favcon.png"/>
<meta charset="utf-8">
<title>Register</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container" class="center">    
    <h1>Register by filling the fields below</h1>
    <p><?php print($message); ?></p>
    <form action="register.php" method="post">
    	<input type="text" name="username" placeholder="Username" /><br />
        <input type="text" name="fname" placeholder="Firstname" /><br />
        <input type="text" name="lname" placeholder="Lastname" /><br />
        <input type="text" name="email" placeholder="Email Address" /><br />
        <input type="password" name="pass1" placeholder="Password" /><br />
        <input type="password" name="pass2" placeholder="Validate Password" /><br />
        <input type="submit" value="Register!" />
        
    
    
    
    </form>
</div>
</body>
</html>