<!DOCTYPE html >
<html>
<head>

<title>SWE-HOME PAGE</title>
</head>
<body>
<?php
//include 'run.php';
$usern=$_GET["uname"];
$text=$_POST["mess"];

$m=0;

$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysqli_error());
}
else{
	mysqli_select_db($conn,'tourismSite');
	$ret="insert into blog values ('$usern','$text')";
$q=mysqli_query($conn,$ret);
if(!$q){
		$d=" fail to insert data  ".mysqli_error($conn);
		$url="http://localhost/ethioTourism.com/errorpage.php?mess=$d";
		 header("Location:$url   ");
	
}
	else{
		echo"data inserted";
		$url="http://localhost/ethioTourism.com/users/blog.php?uname=$usern";
		 header("Location:$url   ");
		
	}
}

	

?>
</body>
<footer>&copy;edenMelaku 2018
</footer>
</html>