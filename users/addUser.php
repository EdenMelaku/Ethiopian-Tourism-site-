<!DOCTYPE html >
<html>
<head>

<title>SWE-HOME PAGE</title>
</head>
<body>
<?php
//include 'run.php';
$usern=$_POST["username"];
$pass=$_POST["pass"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$country=$_POST["country"];
$email=$_POST["email"];

$m=0;

$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysqli_error($conn));
}
else{
	mysqli_select_db($conn,'tourismSite');
	$ret="insert into users values ('$fname','$lname','$usern','$pass','$country','1','$email')";
$q=mysqli_query($conn,$ret);
if(!$q){
		die(" fail to insert data  ".mysqli_error($conn));
	
}
	else{
		
		echo"data inserted";
		
		
	}
	
}

?>
</body>
<footer>&copy;edenMelaku 2018
</footer>
</html>