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
$m=0;
echo"'$usern'";
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
		$url="http://localhost/ethioTourist.com/ttagents.php?id=$user";
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

?>
</body>
<footer>&copy;edenMelaku 2018
</footer>
</html>