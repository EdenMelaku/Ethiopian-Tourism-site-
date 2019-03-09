<!Doctype html>
<html>
    <head>
        <title>Website</title>
     
        
       
        <link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
    </head>
    <body>
        <div id="groupNav">
            <div class="contact">
            
                <p><i class="fa fa-envelope">  </i>  @gmail.com</p>
                <p><i class="fa fa-phone">  </i>  +25</p>
                <p id="icon"><a href="http://facebook.com/hena12" target="_blank"><i style="color:white;" class="fa fa-facebook"></i></a></p>
                <p><a href="http://skype.com/hena12" target="_blank"><i style="color:white;" class="fa fa-skype"></i></a></p>           
                <p><a href="http://twitter.com/hena12"  target="_blank"><i style="color:white;" class="fa fa-twitter"></i></a></p>
                <p><a href="http://vk.com/hena12"  target="_blank"><i style="color:white;" class="fa fa-asterisk"></i></a></p>
                <p><a href="http://pinterest.com/hena12"  target="_blank"><i style="color:white;" class="fa fa-pinterest"></i></a></p>
                <p><a href="http://googleplus.com/hena12"  target="_blank"><i style="color:white;" class="fa fa-google-plus"></i></a></p>
            </div>
         <div id="navigation">
                 <p  class="na"style="text-transform: uppercase">tourism.<span style="font-size: 20px">com</span></p>
                <div id="navs">
                    <p><a href="index.html"><i class="fa fa-home"></i>Home</a></p>
                    <p><a href="about.html"><i class="fa fa-book"></i>About us</a></p>
                    <p><a href="tourist.html"><i class="fa  fa-tumblr"></i>Tourist sites</a></p>
                    <p><a href="contact.html"><i class="fa fa-envelope"></i>Destination</a></p>
               
             </div>
         
             </div>
                
               
            
                </div>
                 
                 
            
               
        
            
    
        <div id="container">
            <h1>WELLCOME OT ETHIOPIAN TOURISM SITE</h1>
           
                  
        </div>
<?php
$taid=$_GET['agent'];
$names=array('BAHIR DAR','AXUM','HAWASSA','HARAR','GONDER','ADDIS ABABA'
,'JIMMA','DEBRE ZIET','ARBA MINCH','LALIBELA');
$conn=mysqli_connect('localhost','root','');
if(!$conn){
	
	die(" connection failed ".mysql_error());
}
else{
	mysqli_select_db($conn,'tourismSite');
	$sql="select * from plan where tour_TravelAgent='$taid' ";
	
	$ret=mysqli_query($conn,$sql);
	
	if(!$ret){
		die("fail to get data ".mysqli_error($conn));
	}else{
		

	print"YOUR PLANS ARE THE FOLLOWING  <br/>";
		while($row=mysqli_fetch_assoc($ret)){
        print"<br/><br/><br/>********************************<br/>";
		$uname=$row['touristId'];
	
    $re="select fname,lname from users where username='$uname' ";	
	$rere=mysqli_query($conn,$re);
	$name=mysqli_fetch_assoc($rere);
	
	
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
	$placee=str_split($row['tour_TravelAgent'],1);	
	foreach($placee as $key=>$val){
		 
		print"=>{$names[$val]} &nbsp&nbsp&nbsp&nbsp"; 
	    
	}
	
	print" => END}<br/>tour and travel agent------------{$tr['name']}<br/>";
	
}
	}
}
?>  
        
    </body>
</html>