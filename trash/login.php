<!DOCTYPE html >
<html>
<head>

<title>SWE-HOME PAGE</title>
</head>
<body>
<?php
//include 'run.php';

$usern=$_POST["op1"];
$pass=$_POST["op2"];
$agent=$_POST["agent"];
$m=0;
if($agent=="ag"){
	$url="http://localhost/ethioTourist.com/users/adminLogin.php";
		 header("Location:$url   ");
	
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
		$url="http://localhost/ethioTourist.com/users/index.php?uname=$user";
		 header("Location:$url   ");
		
	}
	else{
		echo"incorrect password ";
		
		
	}
	$m=1;
	
}
           
	if($m!=1){
		
		echo"incorrect username";
	}
	}
}}
?>
</body>
<footer>&copy;edenMelaku 2018
</footer>
</html>