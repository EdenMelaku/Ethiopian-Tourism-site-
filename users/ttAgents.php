<!Doctype html>
<html>
    <head>
	<style>


	</style>
	
	
        <title>Website</title>
     
        
       
        <link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
		
    </head>
    <body> <div id="groupNav">
            <div class="contact">
            
                <p><i class="fa fa-envelope">  </i><?php
			$uname=$_GET["id"];
			
				
				//
				
				
				$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysql_error());
}
else{
	mysqli_select_db($conn,'tourismSite');
	$ret="select * from agents where id='$uname'";
$q=mysqli_query($conn,$ret);
if(!$q){
echo"connection problem occured ".mysqli_error($conn);	
	
}

else{
while($row=mysqli_fetch_assoc($q)){
	$name=$row['name'];
	print"$name";
}
}
}				
				
				$mp="http://localhost/ethioTourist.com/users/makeplann.php?uname=".$uname;
				$index="http://localhost/ethioTourist.com/users/index.php?uname=".$uname;
				$vp="http://localhost/ethioTourist.com/users/viewplan.php?uname=".$uname;
				$ep="http://localhost/ethioTourist.com/users/editplan.php?uname=".$uname;
				$des="http://localhost/ethioTourist.com/users/tourist.php?uname=".$uname;
				$aeth="http://localhost/ethioTourist.com/users/abtEthiopia.php?uname=".$uname;
				$age="http://localhost/ethioTourist.com/users/agents.php?uname=".$uname;
			    $gal="http://localhost/ethioTourist.com/users/gallery.php?uname=".$uname;
				$abtus="http://localhost/ethioTourist.com/users/about.php?uname=".$uname;
				$ctus="http://localhost/ethioTourist.com/users/contact.php?uname=".$uname;
				$blog="http://localhost/ethioTourist.com/users/blog.php?uname=".$uname;
				
				?></p>
                <p><i class="fa fa-mobile">  <a href="logout.php" style="color:white;text_decoration:none">logout</a> </i> </p>
                <p id="icon"><a href="http://facebook.com/" target="_blank"><i style="color:white;" class="fa fa-facebook"></i></a></p>
                <p><a href="http://skype.com/" target="_blank"><i style="color:white;" class="fa fa-skype"></i></a></p>           
                <p><a href="http://twitter.com/"  target="_blank"><i style="color:white;" class="fa fa-twitter"></i></a></p>
                <p><a href="http://vk.com/"  target="_blank"><i style="color:white;" class="fa fa-asterisk"></i></a></p>
                <p><a href="http://pinterest.com/"  target="_blank"><i style="color:white;" class="fa fa-pinterest"></i></a></p>
                <p><a href="http://googleplus.com/"  target="_blank"><i style="color:white;" class="fa fa-google-plus"></i></a></p>
            </div>
         
         <div id="navigation">
                 
                <div id="navs">
                 <p><a href="index.html"><i class="fa fa-home"></i>Home</a></p>
                 
	<div class="dropdown">
				 
<p><a href="#" class="dropbtn"><i class="fa fa-book"></i>TOURIST INFO</a></p>
            
     <i class="fa fa-caret-down">
	 </i>
     
	  </button>

    <div class="dropdown-content">
       <p><a href="tourist.html"><i class="fa fa-list-ul"></i>destinations</a> </p>
	   <p><a href="aboutus.html"><i class="fa fa-font  "></i>about ethiopia</a> </p>
       <p><a href="agents.html"><i class="fa fa-asterisk "></i>agents</a> </p>
	   
       
    </div>
                    </div>
					<p><a href="about.html"><i class="fa fa-group (alias) "></i>ABOUT US </a></p>
					<p><a href="contact.html"><i class="fa fa-phone"></i>contact US </a></p>
                    <p><a href="blogg.php" style="color:black;"><i class="fa fa-bullhorn"></i>Blogg</a></p>
					

  
   
               
             </div>
            </div>
            
        </div>
		<br/>  	  
			  
		<br/><br/><br/><br/><br/><br/>	
		<h1></h1>
		<br/><br/><br/><br/><br/><br/>
<?php
$names=array('BAHIR DAR','AXUM','HAWASSA','HARAR','GONDER','ADDIS ABABA'
,'JIMMA','DEBRE ZIET','ARBA MINCH','LALIBELA');
$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysql_error());
}
else{
	mysqli_select_db($conn,'tourismSite');
	$sql="select * from plan where tour_TravelAgent='$uname' ";
	
	$ret=mysqli_query($conn,$sql);
	
	if(!$ret){
		die("fail to get data ".mysqli_error($conn));
	}else{

	
	
	
	print"YOUR AGENCY IS SELECTED FOR THE FOLLWING TRIPS   <br/>";
		while($row=mysqli_fetch_assoc($ret)){
        print"<br/><br/><br/>********************************<br/>";
		
	$n=$row['touristId'];
    $re="select fname,lname from users where username='$n' ";	
	$rere=mysqli_query($conn,$re);
	$pname=mysqli_fetch_assoc($rere);
	
	
		
		print"plan name....... {$row['plan_name']}<br/>";
		print"plan id.............{$row['planId']}<br/>";
		print"creator............{$pname['fname']}&nbsp&nbsp&nbsp&nbsp{$pname['lname']}<br/>";
        print"starting date--------{$row['dateStarted']}<br/>";
		print"finishing date--------{$row['dateFinished']}<br/>";
        print" purpose of visit--------{$row['purpose']}<br/>";
		
	print"places that are going to be visited are ........... { START &nbsp&nbsp&nbsp";
	$placee=str_split($row['tour_TravelAgent'],1);	
	foreach($placee as $key=>$val){
		 
		print"=>{$names[$val]} &nbsp&nbsp&nbsp&nbsp"; 
	    
	}
	
	print" => END}<br/>tour and travel agent------------$name']<br/>";
	
}
	}
}
?>
		
		
    </body>
</html>