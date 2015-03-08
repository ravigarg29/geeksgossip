<?php include_once("scripts/global.php"); 
$message='';
if(isset($_POST["email"])){

	
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$remember=$_POST["remember"];
	
	//error handling
	if( (!$email)|| (!$pass) ){
		$message="Please insert both fields!";
		
	}else{
			//securing the data	
			
			$pass=sha1($pass);
			
			$email=mysql_real_escape_string($email);
			
			//check for duplicates
			$query=mysql_query("SELECT * FROM members WHERE email='$email' AND password='$pass' LIMIT 1") or die("Could not check username");
			$count_query=mysql_num_rows($query);
			
		
			
			if($count_query==0){
				$message="Your information entered was incorrect!";	
			}else{
				
				$_SESSION["pass"]=$pass;
				while($row=mysql_fetch_array($query)){
					$username=$row["username"];
					$id=$row["id"];
					
				}
				$_SESSION["username"]=$username;
				$_SESSION["id"]=$id;
				
				if($remember=="yes"){
					//create the cookies
					setcookie("id_cookie",$id,time()+60*60*24*100,"/");
					
					setcookie("pass_cookie",$pass,time()+60*60*24*100,"/");
					
				}
				
				echo "<script type='text/javascript'>setTimeout(function(){ window.location = 'index.php'; }, 5000);</script>";
				
				
					
			}
			
		}
	}
		
	




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="icon" type="image/png" href="images/favcon.png"/>
<link href="css/global.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container" class="center">    
    <h1>Login</h1>
    <p><?php print($message); ?></p>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Email Address" /><br />
        <input type="password" name="pass" placeholder="Password" /><br />
        <input type="checkbox" name="remember" value="yes" checked="checked" />Remember me?<br />
        <input type="submit" value="Login!" />
  
    </form>
</div>
</body>
</html>