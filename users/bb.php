<!Doctype html>
<html>
    <head>
        <title>Website</title>
     
        <style type="text/css">
		.an{
	border: px solid #fff; color:white;
		 background: #29293d;
		margin-left: 10px;
		margin-top: 15px;
		margin-right: 10px;
	
		
		}
		.an p{	 
	     background: #29293d;
		color:white;
		font-size:34px;
			
		}
		.an h3{	 	 
			 font-size:14px;
			
		}
		</style>
       
    <title>Website</title>
     
        
       
        <link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
		 <link rel="stylesheet" type="text/css" href="style/css/newStyle.css"/>
		
    </head>
    <body>
        <div id="groupNav">
            <div class="contact">
            
                <p><i class="fa fa-envelope">  </i><?php
			$uname=$_GET["uname"];
			
				
				//
				
				
				$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysql_error());
}
else{
	mysqli_select_db($conn,'tourismSite');
	$ret="select * from users where username='$uname'";
$q=mysqli_query($conn,$ret);
if(!$q){
echo"connection problem occured ".mysqli_error($conn);	
	
}

else{
while($row=mysqli_fetch_assoc($q)){
	$name=$row['fname']." ".$row['lname'];
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
                 <p><a href="<?php print "$index";?>"><i class="fa fa-home"></i>Home</a></p>
                 <div class="dropdown">
				 
<p><a href="#" class="dropbtn"><i class="fa fa-book"></i>my planner</a></p>
            
     <i class="fa fa-caret-down">
	 </i>
     
	  </button>

    <div class="dropdown-content">
       <p><a href= " <?php print "$mp";?>" >make plan</a> </p>
	   <p><a href="<?php print "$vp";?>">view plan</a> </p>
       <p><a href="<?php print "$ep";?>">edit plan</a> </p>
       
    </div>
         </div>
	<div class="dropdown">
				 
<p><a href="#" class="dropbtn"><i class="fa fa-book"></i>TOURIST INFO</a></p>
            
     <i class="fa fa-caret-down">
	 </i>
     
	  </button>

    <div class="dropdown-content">
       <p><a href="<?php print "$des";?>">destinations</a> </p>
	   <p><a href="<?php print "$aeth";?>">about ethiopia</a> </p>
       <p><a href="<?php print "$age";?>">agents</a> </p>
	   <p><a href="<?php print "$gal";?>">gallery</a> </p>
       
    </div>
                    </div>
					<p><a href="<?php print "$abtus";?>"><i class="fa fa-mortar-board (alias)"></i>ABOUT US </a></p>
					<p><a href="<?php print "$ctus";?>"><i class="fa fa-mortar-board (alias)"></i>contact US </a></p>
                    <p><a href="<?php print "$blog";?>"><i class="fa fa-envelope"></i>Blogg</a></p>
					

  
   
               
             </div>
            </div>
            
        </div>
          
                 
		
		<h1></h1>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<?php
		



$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysql_error());
}
else{
	mysqli_select_db($conn,'tourismSite');
	
	$ret="select * from blog ";
	

$q=mysqli_query($conn,$ret);
if(!$q){
	
	die("  failed to get data ".mysqli_error($conn));
               }
			   
			   
			   else{
$m=0;
while($row=mysqli_fetch_assoc($q)){
	$m=1;
	
	
	$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysql_error());
}
else{
	mysqli_select_db($conn,'tourismSite');
	$un=$row['username'];
	
	$ret="select * from users where username='$un'";
$q=mysqli_query($conn,$ret);
if(!$q){
echo"connection problem occured ".mysqli_error($conn);	
	
}

else{
	
$ro=mysqli_fetch_assoc($q);

	$nam=$ro['fname']." ".$ro['lname'];
	


	print("
	<div class=\"an\">
	
	<p  > $nam</p>
	<h3  > {$row['text'] }</h3>
	
	
	</div>
	");
}
}
}
	if($m==0){
		
		echo"no blogs to display";
	}
	
	
	
	
}
			   }

	print("<form action=\"writeBlog.php?uname=$uname\" method=\"post\">
		<textarea name=\"mess\"></textarea><br/>
		<input type=\"submit\" value=\"blog\">
		</form>");
		
		
		
		
		
		
		
		?>
		
		
		
		
		
		
    </body>
</html>