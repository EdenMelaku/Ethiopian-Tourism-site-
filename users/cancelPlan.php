<!Doctype html>
<html>
    <head>
        <title>Website</title>
     
        <link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
    </head>
    <body>
    
		<br/><br/><br/><br/><br/><br/>
		<?php
		$pid=$_GET['pid'];
$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysql_error());
}
else{
	mysqli_select_db($conn,'tourismSite');
	$r="select touristID from plan where planId='$pid'";
	$ret="delete  from plan where planId='$pid'";
	
$rr=mysqli_query($conn,$r);

$q=mysqli_query($conn,$ret);
if(!$q||!$rr){
	
	$d="<br/>failed to cancel the plan <br/>".mysqli_error($conn);
	
	
		$url="http://localhost/ethioTourism.com/errorpage.php?mess=$d";
		 header("Location:$url   ");   }
			   
			   
			   else{
				   $row=mysqli_fetch_assoc($rr);
$name=$row['touristID'];
echo"<script type=\"text/javascript\">alert(\"plan sucessfully deleted\");</script> ";
	$user=$row['username'];
		$url="http://localhost/ethioTourism.com/users/viewplan.php?uname=$name";
		 header("Location:$url   ");
}
}
?>
		
		
		
		
		
		
    </body>
</html>