<!Doctype html>
<html>
    <head>
        <title>BLOG</title>
     
        <style type="text/css">
		.an{
	border: 2px solid #fff; color:white;
		 background: #29293d;
		margin-left: 200px;
		margin-top: 45px;
		margin-right: 200px;
	
		
		}
		.an p{	 
		color:white;
		font-size:34px;
			
		}
		.an h3{	 	 
			 font-size:14px;
			
		}
		</style>
       
        <link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
    </head>
    <body>
        <div id="groupNav">
            <div class="contact">
            
                <p><i class="fa fa-envelope">  </i>  @gmail.com</p>
                <p><i class="fa fa-mobile">  </i>  +25</p>
                <p id="icon"><a href="http://facebook.com/hena12" target="_blank"><i style="color:white;" class="fa fa-facebook"></i></a></p>
                <p><a href="http://skype.com/hena12" target="_blank"><i style="color:white;" class="fa fa-skype"></i></a></p>           
                <p><a href="http://twitter.com/hena12"  target="_blank"><i style="color:white;" class="fa fa-twitter"></i></a></p>
                <p><a href="http://vk.com/hena12"  target="_blank"><i style="color:white;" class="fa fa-asterisk"></i></a></p>
                <p><a href="http://pinterest.com/hena12"  target="_blank"><i style="color:white;" class="fa fa-pinterest"></i></a></p>
                <p><a href="http://googleplus.com/hena12"  target="_blank"><i style="color:white;" class="fa fa-google-plus"></i></a></p>
            </div>
         <div id="navigation">
                 <p style="text-transform: uppercase">tourism.<span style="font-size: 20px">com</span></p>
                <div id="navs">
                 <p><a href="index.html"><i class="fa fa-home"></i>Home</a></p>
                 <p><a href="planner.html"><i class="fa fa-book"></i>My Planner</a></p>
                    <p><a href="#"><i class="fa fa-mortar-board (alias)"></i>Connector</a></p>
            
                    <p><a href="blogg.html"><i class="fa fa-envelope"></i>Blogg</a></p>
               
             </div>
            </div>
            
        </div>
		<br/><br/><br/><br/><br/><br/>
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
	
	die("  failed yo get data ".mysqli_error($conn));
               }
			   
			   
			   else{
$m=0;
while($row=mysqli_fetch_assoc($q)){
	print("
	<div class=\"an\">
	
	<p  > {$row['username'] }</p>
	<h3  > {$row['text'] }</h3>
	
	
	</div>
	");
}

	if($m==0){
		
		echo"no blogs to display";
	}
	
	
	
	
}
}
		
		
		
		
		
		?>
		
		
		
		
		
		
    </body>
</html>