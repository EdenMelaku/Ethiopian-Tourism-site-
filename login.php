<!DOCTYPE html >
<html>
<head>

<title>LOGIN</title>
</head>
<body>
<?php
//include 'run.php';

$usern=$_POST["op1"];
$pass=$_POST["op2"];
$agent=$_POST["agent"];
$m=0;
if($usern==""||$pass==""){
	
	$u="empty username or password ";
		
		$url="http://localhost/ethioTourism.com/log.php?mess=$u";
		 header("Location:$url   ");
	
}
if($agent=="ag"){
	
$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysql_error());
}
else{
	mysqli_select_db($conn,'tourismSite');
	$ret="select * from agents where id='$usern'";
$q=mysqli_query($conn,$ret);
if(!$q){
echo"connection problem occured ".mysqli_error($conn);	
	
}

else{
$row=mysqli_fetch_assoc($q);
	
	 if($row['password']==$pass){
		echo"correct password ";
		$user=$row['id'];
		$url="http://localhost/ethioTourism.com/ttagents.php?id=$user";
		 header("Location:$url   ");
		
	}
	else{
	$u="incorrect username or password ";
		
		$url="http://localhost/ethioTourism.com/log.php?mess=$u";
		 header("Location:$url   ");
		
	
		
		
	}
	$m=1;
	
}
           
	if($m!=1){
		
		$u="incorrect username or password ";
		
		$url="http://localhost/ethioTourism.com/log.php?mess=$u";
		 header("Location:$url   ");
		
	
	}
	}

	
}
else{
echo"'$usern'";
$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysql_error());
}
else{
	mysqli_select_db($conn,'tourismSite');
	$ret="select * from users where username='$usern'";
$q=mysqli_query($conn,$ret);
if(!$q){
echo"connection problem occured ".mysqli_error($conn);	
	
}

else{
while($row=mysqli_fetch_assoc($q)){
	
	 if($row['password']==$pass){
		echo"correct password ";
		$user=$row['username'];
		$url="http://localhost/ethioTourism.com/users/index.php?uname=$user";
		 header("Location:$url   ");
		
	}
	else{
		$u="incorrect username or password ";
		
		$url="http://localhost/ethioTourism.com/log.php?mess=$u";
		 header("Location:$url   ");
		
	
	}
	$m=1;
	
}
           
	if($m!=1){
		
			$u="incorrect username or password ";
		
		$url="http://localhost/ethioTourism.com/log.php?mess=$u";
		 header("Location:$url   ");
	}
	}
}}
?>
</body>
<footer>&copy;edenMelaku 2018
</footer>
</html>