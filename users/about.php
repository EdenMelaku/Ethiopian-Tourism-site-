<!Doctype html>
<html>
    <head>
        <title>ABOUT US</title>
     
        
             <style>
            #site {
                text-align: center;
                float: right;
            }
			
			#site p{

    margin: 40px 180px;  
    width: 70%;
   padding: 20px 30px 15px 30px;
    margin-top: 10px;
	 margin-left: 90px;
  }      
        
      
			
            #site1{
                height: 20px;
                width: 70px;
                float: left;
            }
            #ff{
              float: left ;
              text-align: center;  
            
            }
           
        table {
    border-collapse: collapse;
    margin: 60px 180px;        
    width: 70%;
            height: 75%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){
    background-color: #f2f2f2}

th {
    background-color: #29293d;
    color: white;
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
          
                 
          	<br/>	<br/>	<br/>	<br/>	<br/><br/><br/>
		               <div id="site">
            <h1 class="site2" >ABOUT SITE</h1>
                <P>This site can play a major role in attracting tourists in many countries who live in a very
digitalized world. There are many stakeholders in our country regarding with tourism for
example hotels, tour and travel agents, tour guides, airlines etc…. can benefit a lot from this by
advertising their service and attracting customers.</P>
            </div>
			<br/><br/><br/><br/><br/><br/><br/>
            <div>
                  <table>
<tr><th colspan="4" style="text-align: center;tab-size: 40px">DEVELOPERS</th></tr>                      
  <tr>
      
    <th>NAME</th>
    <th>DEPARTMENT</th>
    <th>ID NO</th>
      <th>IMAGE</th>
  </tr>
  <tr>
    <td>HENOK SHIMELES</td>
    <td>SOFTWARE ENGIINERING</td>
    <td>0801683</td>
      <td><img src="image/1.jpg" height="80px" width="100px"></td>
  </tr>
  <tr>
    <td>EDEN MELAKU</td>
    <td>SOFTWARE ENGINERING</td>
    <td>0800668</td>
    <td><img src="image/2.jpg" height="80px" width="100px"></td>  
  </tr>
  <tr>
    <td>MERAWI AREGAWI</td>
    <td>SOFTWARE ENGIINERING</td>
    <td>0801724</td>
      <td><img src="image/4.jpg" height="80px" width="100px"></td>
  </tr>
  <tr>
    <td>ZELALEM ABEBAW</td>
    <td>SOFTWARE ENGIINERING</td>
    <td>0801866</td>
      <td><img src="image/2.gif" height="80px" width="100px"></td>
</tr>
                      <tr>
    <td>MIKYAS YEHUALA</td>
    <td>SOFTWARE ENGIINERING</td>
    <td>0801732</td>
      <td><img src="image/1.jpg" height="80px" width="100px"></td>
  </tr>
</table>
            </div>
        </div>
    </body> 
    
</html>