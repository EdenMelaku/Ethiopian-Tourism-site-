<!Doctype html>
<html>
    <head>
	<script type="text/javascript">
function sub(){
	document.getElementById("ns").innerHTML="";
document.getElementById("ms").innerHTML="";
document.getElementById("es").innerHTML="";
x=0;
var validEmail = /^[\w]+(\.[\w]+)*@([\w]+\.)+[a-z]{2,7}$/i;
na=document.getElementById('name').value;
em=document.getElementById('email').value;
message=document.getElementById('mess').value;
if(na==""){
x++;
document.getElementById("ns").innerHTML = "please enter your name";
}
if(em==""){
x++;
document.getElementById("es").innerHTML="please enter your email";
}
if(message.length==0){
x++;
document.getElementById("ms").innerHTML="please enter your message";
}
var searchTerm = /^[a-zA-Z']+$/;
//var searchTerm = new RegExp( '[a-z][A-Z]', 'g' );
if(!na.match(searchTerm)){
x++;
document.getElementById("ns").innerHTML="invalid  name. please enter only characters";
}
if(!em.match(validEmail)){
x++;
document.getElementById("es").innerHTML="invalid  email format write it like example@example.com";
}
if(message==""){
x++;
document.getElementById("ms").innerHTML="message is empty";

}
 if(err==0){
//alert("not look  ");
alert("congratulations  "+na+"   you have sucessfuly send your enquiry   ");
}

else{

}

}
</script>
        <title>CONTACT US</title>
     
        <link rel="stylesheet" type="text/css" href="style/css/formStyle.css"/>

       
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
          
                 
		<br/><br/><br/><br/><br/>
		<div class="form-style-10" style="float:left">
		 <div class="inner-wrap">
<h3> <label>
email-------ethio tourism <br/>
phone number-----+251 113 456 45 98<br/>
physical address----mafi building : office number 5<br/>
</label>
</h3>
	</div></div>
	<div class="form-style-10" style="float:center">
					
    <h1>Contact us <span> you can leave any enquiry here </span></h1>
	 <form>
   
    <div class="inner-wrap">
        <label>name <input type="text" id="name" /><span style="color:red;" id="ns"></span></label>
        
        <label>email address <input type="email" id="email" /><span style="color:red;" id="es"></span></label>
		<label>message<span style="color:red;" id="ms"></span><textarea id="mess"> </textarea></label>
    </div>

   
 
    <div class="button-section">
     <input type="button" value="Submit" onclick="sub()"/>
     <br/>
	 
     </span>
    </div>
</form>
</div>
    </body>
</html>
