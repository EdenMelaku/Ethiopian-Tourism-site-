<!Doctype html>
<html>
    <head>
        <title>HOME</title>
     
                <style>
        #slid{
    width: 100%;
    height: 100%;
    background: #E0E0E0;
}
         #filePic{
    margin-left: 9%;
    float: left;
    width: 400px;
	
    margin-top: 10px;
}
 #Text{
    margin-top: 15px;
    margin-left: 30px;
    word-spacing: 5px;
    width: 700px;
    float: left;
}
        
        </style>
        
       
        <link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
    </head>
    <body>
             <div id="groupNav">
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
          
                 
                 
            
               
        
            
    
        <div id="container">
            <h1>WELLCOME TO ETHIOPIAN TOURISM SITE</h1>
           
                  
        </div>
        			  
		      		<div id="slid">
           
            <div id="filePic">
               <marquee direction="down" scrollamount="5"  >
 <img src="img/country/1.jpg" alt="slide" width="400px" height="300px" border="5px" class="im" /><br>
  <img src="img/country/2.jpg" alt="slide" width="400px" height="300px" border="5px" class="im"/><br>
   <img src="img/country/3.jpg" alt="slide" width="400px" height="300px" border="5px" class="im"/><br>
    <img src="img/country/4.jpg" alt="slide" width="400px" height="300px" border="5px" class="im"/>
 <img src="img/country/5.jpg" alt="slide" width="400px" height="300px" border="5px" class="im"/><br>
  <img src="img/country/6.jpg" alt="slide" width="400px" height="300px" border="5px" class="im"/><br>
   <img src="img/country/7.jpg" alt="slide" width="400px" height="300px" border="5px" class="im"/><br>
    <img src="img/country/8.jpg" alt="slide" width="400px" height="300px" border="5px" class="im"/><br>
	 <img src="img/country/9.jpg" alt="slide" width="400px" height="300px" border="5px" class="im"/><br>
	 <img src="img/country/10.jpg" alt="slide" width="400px" height="300px" border="5px" class="im"/><br>
</marquee> 
            </div>
            <div id="Text">
            <p>
            Ethiopia has traditionally identified its green-yellow-red national flag with the rainbow that, according to the book of Genesis in the Bible, God set in the heavens after the Flood. Pennants of those three colours had been displayed before the first official flag was established by Emperor Menilek II on October 6, 1897; his flag bore on the yellow stripe the first letter of his name in Amharic script. Later the imperial coat of arms—consisting of the “Conquering Lion of Judah,” a lion holding a staff topped by a cross with ribbons in the three national colours—appeared on the flag when it was used for official purposes. The lion symbolically asserted that Emperor Menilek I had been the son of the Queen of Sheba and the biblical King Solomon. The first legal definition was given to the lion flag in November 1932, soon after the coronation of Emperor Haile Selassie. It remained in use until the overthrow of the empire in 1974, except for those years (1936–41) when the country was occupied by Italy.<br><br>
                In 1975 a revolutionary government established a new coat of arms with socialist symbols. In 1987 President Mengistu Haile Mariam proclaimed the People's Democratic Republic of Ethiopia under a flag with an even more openly Marxist design, including a red star at the top. The rebels who overthrew his regime in 1991 flew a simple green-yellow-red tricolour. Finally, the new constitution for the Federal Democratic Republic of Ethiopia, adopted on February 6, 1996, added a central blue disk with a yellow outlined and rayed star. The star represents the unity of all Ethiopian nationalities, its rays the bright prospects for their future. Blue is for peace, yellow for hope, justice, and equality. Red represents sacrifice for freedom and equality, while green is equated with labour, development, and fertility.
            </p>
            </div>
        </div>	  
		
			  
        
    </body>
</html>