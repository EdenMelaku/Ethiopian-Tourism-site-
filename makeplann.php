<!Doctype html>
<html>
    <head>
	
	<style>
.Dglow
{
  display:none;
  }

	</style>
	
	<script type="text/javascript">

	/*function do(){
	
	
	if(f.bb.checked==true){
	alert ("bahir dar");
	}
	else{
	akert ("other");
	}
	
	}	
	function change(v){
	bd=document.getElementById("0").checked;
	alert(bd);
	
	
	
	}
	
	function validate(){
	name=document.getElementById("name").value;
	
	 if(val.length<=1){
		document.getElementById("chbx").innerHTML="please select atleast 2 destinations ";
		
	}
	if (name =="" ){
 
document.getElementById("na").innerHTML="please enter your name";
}

var searchTerm = /^[a-zA-Z']+$/;
//var searchTerm = new RegExp( '[a-z][A-Z]', 'g' );
if(!name.match(searchTerm)){
document.getElementById("na").innerHTML="invalid  name. please enter only characters";
}
	if(f.agent[0].checked==false&&f.agent[1].checked==false&&f.agent[2].checked==false&&f.agent[3].checked==false){
 document.getElementById("tt").innerHTML="please select an agent";

}
else{
	
	
	document.getElementById("Dglow").style.display = 'block';
}
	
	*/
	var val="999";

	function direct() {
		
//alert(val);

//dovument.getElementById("")
}

function validate(){
	val="";
bd0=document.getElementById("0").checked;
bd1=document.getElementById("1").checked;
bd2=document.getElementById("2").checked;
bd3=document.getElementById("3").checked;
bd4=document.getElementById("4").checked;
bd5=document.getElementById("5").checked;
bd6=document.getElementById("6").checked;
bd7=document.getElementById("7").checked;
bd8=document.getElementById("8").checked;
bd9=document.getElementById("9").checked;

if(bd0==true){
val=val+'0';
}
if(bd1==true){
val=val+'1';
}
if(bd2==true){
val=val+'2';
}
if(bd3==true){
val=val+'3';
}
if(bd4==true){
val=val+'4';
}
if(bd5==true){
val=val+'5';
}
if(bd6==true){
val=val+'6';
}

if(bd7==true){
val=val+'7';
}
if(bd8==true){
val=val+'8';
}
if(bd9==true){
val=val+'9';
}

	alert("st func"+val);
		name=document.getElementById("name").value;
	
	 if(val.length<=1){
		document.getElementById("chbx").innerHTML="please select atleast 2 destinations ";
		
	}
	if (name =="" ){
 
document.getElementById("na").innerHTML="please enter your name";
}

var searchTerm = /^[a-zA-Z']+$/;
//var searchTerm = new RegExp( '[a-z][A-Z]', 'g' );
if(!name.match(searchTerm)){
document.getElementById("na").innerHTML="invalid  name. please enter only characters";
}
	if(f.agent[0].checked==false&&f.agent[1].checked==false&&f.agent[2].checked==false&&f.agent[3].checked==false){
 document.getElementById("tt").innerHTML="please select an agent";

}
else{
	
	
	document.getElementById("Dglow").style.display = 'block';
}

}
	</script>
        <title>Website</title>
     
        
       
        <link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
		
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
		<br/><br/>	<br/><br/>	<br/><br/>	<br/><br/>	<br/><br/>
		<form action="makeplan.php" method="post" name ="f" >
		<br/>
		GIVA A NAME TO YOUR TRIP:<input type="text" id="name" name="name"/>&nbsp&nbsp&nbsp&nbsp<span id="na"></span>
		<br/>
		CHOOSE PLACES TO VISIT &nbsp&nbsp&nbsp&nbsp<span id="chbx"></span><br/> 
<div>
		<input type="checkbox" name="cb[]" value="0" id="0" onclick="direct()" checked /> BAHIR DAR<br/>
		<input type="checkbox" name="cb[]" value="1" id="1" onclick="direct()"/> AXUM<br/>
		<input type="checkbox" name="cb[]" value="2" id="2" onclick="direct()"/> HAWASSA<br/>
		<input type="checkbox" name="cb[]" value="3" id="3"  onclick="direct()"/> HARAR<br/>
		<input type="checkbox" name="cb[]" value="4" id="4"  onclick="direct()"/> GONDER<br/>
		
		<input type="checkbox" name="cb[]" value="5" id="5"  onclick="direct()"/>ADDIS ABABA<br/>
		<input type="checkbox" name="cb[]" value="6"  id="6" onclick="direct()"/>JIMMA<br/>
		<input type="checkbox" name="cb[]" value="7"  id="7" onclick="direct()"/>DEBRE ZEIT<br/>
		
		<input type="checkbox" name="cb[]" value="8" id="8"  onclick="direct()"/>ARBAMINCH<br/>
		<input type="checkbox" name="cb[]" value="9" id="9" onclick="direct()"/>LALIBELA<br/>
</div>	<br/><br/>
<div>
     CHOOSE DATE OF YOUR VISIT<br/> &nbsp&nbsp&nbsp&nbsp<span id="da"></span>
	 <input type="date" name="date"><br/>
</div>	
<br/>
what is the purpuse of your visit? &nbsp&nbsp&nbsp&nbsp<span id="pur"></span><select name="purpose">

<option value="fam">family/ friends trip<option>
<option value="work">work trip<option>
<option value="res">research trip<option>
<option value="oth">other<option>




</select>
<br/>
<div>
CHOSSE A TOUR AND TRAVEL AGENT<br/> &nbsp&nbsp&nbsp&nbsp<span id="tt"></span>
<input type="radio" id="agent" name="agent" value ="ru" /> RUHAMMA<br/>
		<input type="radio" id="agent"  name="agent" value="ab" /> ABYSINYA<br/>
		<input type="radio" id="agent" name="agent" value="lu"/> LUCY<br/>
		<input type="radio" id="agent" name="agent" value="et"/> ETHIO<br/>
		<input type="radio" id="agent" name="agent" value="ax"/>  SELAM<br/>
	

</div>
<div>


</div>
		<br/>
		<input type="button" value="make" onclick="validate()"><br/>
		<div class="Dglow" id="Dglow">
		<input type="submit" value="submit" >
		
		</div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></form>
		YOUR PLAN HAS BEEN SUCESSFULLY ADDED WITH THE FOLLOWING EVENTS <br/>
		plan name.......<br/>
		plan id.............<br/>
		creator............<br/>
		creatoin date--------<br/>
		plan started ---------<br/>
		
	places that are going to be visited are <br/>
	..........
	tour and travel agent------------<br/>
	tour guide-----------<br/>
	
		
		
    </body>
</html>