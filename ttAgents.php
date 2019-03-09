<!Doctype html>
<html>
    <head>
	<style type="text/css">


.form-style-10{
    width:70%;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #29293d;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 50px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 25px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 25px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 30px 'Bitter', serif;
    color: #29293d;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #29293d;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"],
.form-style-10 input[type="submit"]{
    background: #29293d;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 40px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 25px;
}
.form-style-10 input[type="button"]:hover,
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 20px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}








</style>


	
	
        <title>Website</title>
     
        
       
        <link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
		
    </head>
    <body> <div id="groupNav">
            <div class="contact">
             <h3>
                <p><i class="fa fa-user"> </i><?php
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
                </p>
                <p><i class="fa fa-arrow-circle-left">  
				<a href="http://localhost/ethioTourism.com/index.html"
				style="text-decoration:none;color:white"
				>&nbsp &nbsp&nbsp&nbsp LOGOUT </a> </i> </p><p id="icon"><a href="http://facebook.com/" target="_blank"><i style="color:white;" class="fa fa-facebook"></i></a></p>
                <p><a href="http://twitter.com/"  target="_blank"><i style="color:white;" class="fa fa-twitter"></i></a></p>
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

	
	
	
    print"<div class=\"form-style-10\"><h1>YOUR AGENCY IS SELECTED FOR THE FOLLOWING PLANS  </h1> <br/>";
		while($row=mysqli_fetch_assoc($ret)){
			
        print"<div class=\"inner-wrap\"><label>";
		
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
	
	print" => END}<br/>tour and travel agent------------$name<br/></div>";
	
}
	}
}
?>
		
		
    </body>
</html>