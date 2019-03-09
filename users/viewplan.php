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

 
	
        <title>VIEW PLAN</title>
     
        
       
        <link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>

        <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
		
    </head>
    <body>  <div id="groupNav">
            <div class="contact">
            <h3>
                <p><i class="fa fa-user">  </i><?php
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
	print"&nbsp&nbsp&nbsp&nbsp $name&nbsp&nbsp&nbsp&nbsp ";
}
}
}				
				
				$mp="http://localhost/ethioTourism.com/users/makeplann.php?uname=".$uname;
				$index="http://localhost/ethioTourism.com/users/index.php?uname=".$uname;
				$vp="http://localhost/ethioTourism.com/users/viewplan.php?uname=".$uname;
				$ep="http://localhost/ethioTourism.com/users/editplan.php?uname=".$uname;
				$des="http://localhost/ethioTourism.com/users/tourist.php?uname=".$uname;
				$aeth="http://localhost/ethioTourism.com/users/abtEthiopia.php?uname=".$uname;
				$age="http://localhost/ethioTourism.com/users/agents.php?uname=".$uname;
			    $gal="http://localhost/ethioTourism.com/users/gallery.php?uname=".$uname;
				$abtus="http://localhost/ethioTourism.com/users/about.php?uname=".$uname;
				$ctus="http://localhost/ethioTourism.com/users/contact.php?uname=".$uname;
				$blog="http://localhost/ethioTourism.com/users/blog.php?uname=".$uname;
				
				?></p>
                <p><i class="fa fa-arrow-circle-left">  
				<a href="http://localhost/ethioTourism.com/index.html"
				style="text-decoration:none;color:white"
				>&nbsp &nbsp&nbsp&nbsp LOGOUT </a> </i> </p>
                </h3><p id="icon"><a href="http://facebook.com/" target="_blank"><i style="color:white;" class="fa fa-facebook"></i></a></p>
                <p><a href="http://twitter.com/"  target="_blank"><i style="color:white;" class="fa fa-twitter"></i></a></p>
                <p><a href="http://pinterest.com/"  target="_blank"><i style="color:white;" class="fa fa-pinterest"></i></a></p>
                <p><a href="http://googleplus.com/"  target="_blank"><i style="color:white;" class="fa fa-google-plus"></i></a></p>
            </div>
         <div id="navigation">
                 
                <div id="navs">
                 <p><a href="<?php print "$index";?>"><i class="fa fa-home"></i>Home</a></p>
                 <div class="dropdown">
				 
<p><a href="#" class="dropbtn"><i class="fa fa-pencil"></i>my planner</a></p>
            
     <i class="fa fa-caret-down">
	 </i>
     
	  </button>

    <div class="dropdown-content">
       <p><a href= " <?php print "$mp";?>" ><i class="fa fa-calendar"></i>make plan</a> </p>
	   <p><a href="<?php print "$vp";?>"><i class="fa fa-list-alt"></i>view plan</a> </p>
       
       
    </div>
         </div>
	<div class="dropdown">
				 
<p><a href="#" class="dropbtn"><i class="fa fa-book"></i>TOURIST INFO</a></p>
            
     <i class="fa fa-caret-down">
	 </i>
     
	  </button>

    <div class="dropdown-content">
       <p><a href="<?php print "$des";?>"><i class="fa fa-list-ul"></i>destinations</a> </p>
	   <p><a href="<?php print "$aeth";?>"><i class="fa fa-font  "></i>about ethiopia</a> </p>
       <p><a href="<?php print "$age";?>"><i class="fa fa-asterisk "></i>agents</a> </p>
	   
       
    </div>
                    </div>
					<p><a href="<?php print "$abtus";?>"><i class="fa fa-group (alias) "></i></i>ABOUT US </a></p>
					<p><a href="<?php print "$ctus";?>"><i class="fa fa-phone"></i>contact US </a></p>
                    <p><a href="<?php print "$blog";?>"><i class="fa fa-bullhorn"></i>Blogg</a></p>
					

  
   
               
             </div>
            </div>
            
        </div>
          
                 
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
	$sql="select * from plan where touristId='$uname' ";
	$re="select fname,lname from users where username='$uname' ";	
	$rere=mysqli_query($conn,$re);
	$ret=mysqli_query($conn,$sql);
	
	if(!$rere||!$ret){
		die("fail to get data ".mysqli_error($conn));
	}else{
	$name=mysqli_fetch_assoc($rere);
	print"<div class=\"form-style-10\"><h1>YOUR PLANS ARE THE FOLLOWING </h1> <br/>";
	
	
		while($row=mysqli_fetch_assoc($ret)){
        print"<div class=\"inner-wrap\"><label>";
		
	

	
	
	$va=$row['tour_TravelAgent'];
	$tt="select name from agents where id='$va' ";
	$t=mysqli_query($conn,$tt);
	$tr=mysqli_fetch_assoc($t);
	
	
		
		print"plan name....... {$row['plan_name']}<br/>";
		print"plan id.............{$row['planId']}<br/>";
		print"creator............{$name['fname']}&nbsp&nbsp&nbsp&nbsp{$name['lname']}<br/>";
        print"starting date--------{$row['dateStarted']}<br/>";
		print"finishing date--------{$row['dateFinished']}<br/>";
        print" purpose of visit--------{$row['purpose']}<br/>";
		
	print"places that are going to be visited are ........... { START &nbsp&nbsp&nbsp";
	$placee=str_split($row['placeSequence'],1);	
	 
	foreach($placee as $key=>$val){
		 
		print"=>{$names[$val]} &nbsp&nbsp&nbsp&nbsp"; 
	    
	}
	
$dis=array(array(0,512.1,766.9,1123.8,172.1,484.5,645.2,540,979.3,307.6),
array(519.2,0,1265.2,1203.5,349.5,997.8,1164,1053.4,1490.1,392.9),
array(966.9,1265.2,0,646.5,939,282.4,403.8,338,273.4,987.5),
array(1123.8,1203.5,646.5,0,1295.9,0,519.4,874.4,575,872.6,925.8),
array(172.1,349.5,93.9,1295.9,0,656.6,817.3,712.2,1151.4,135.5),
array(484.5,997.8,282.4,519.4,656.6,0,355,55.6,499,792.1),
array(645.2,1164,403.8,874.4,812.3,355,0,410.6,375.2,954.2),
array(540,1053.4,338,575,712.2,55.6,410,0,444,847.1),
array(979.3,1490.1,273.4,872.6,1151.4,499,375.2,444,0,1212.4),
array(307.6,392.9,987.5,925.8,135.5,792.1,954.2,847.1,1291.1,0));
	$arr=$placee;
	$sum=0;
	$r=1;
	$m=1;
	for($i=0;$i<count($arr)-1;$i++){
		$num=$i+1;
		$R1=$arr[$i];
		$R2=$arr[$num];
	$sum =$sum + $dis[$R1][$R2];
	$m++;
	    $r=$r*$m;
		//echo" meeee '$dis[$R1][$R2]'<br/>";
	}
		//echo" the  dis of $val=> $sum  <br/>";
	
	
	print"=> END}";
	print" <br/>tour and travel agent------------{$tr['name']}<br/>";
	print" => <br/>the minimum distance = ------------$sum<br/>
	    TOTAL NUMBER OF ROUTE IS = ------- $r";
	print"<form method=\"post\" action=\"cancelPlan.php?pid={$row['planId']}\"> 
	<input type=\"submit\" value=\"cancel Plan\"><br/>
	</form></div>";
	
}
	}
}
?>
		
		
    </body>
</html>