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
document.getElementById("chbx").innerHTML="";
document.getElementById("na").innerHTML="";
document.getElementById("tt").innerHTML="";



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
        <title>MAKE PLAN</title>
     
        
       
        <link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
		 <link rel="stylesheet" type="text/css" href="style/css/newStyle.css"/>
		
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
          
                 
		
		<h1></h1>
		<br/><br/>	<br/><br/>	<br/><br/>	<br/><br/>	<br/><br/>
		<form action="makeplan.php?uname=<?php print"$uname";?>" method="post" name ="f" >
		<br/>





		  <div class="container">
  <div class="control-group">
  
  		<h1>GIVA A NAME TO YOUR TRIP:<input style="width:400px; height:50px" type="text" id="name" name="name"/></h1>&nbsp&nbsp&nbsp&nbsp
		<span id="na"></span>
		
		
<div>
     <h1>CHOOSE STARTING DATE  OF YOUR VISIT
	 <input type="date" name="date" style="width:400px; height:50px"><br/></h1>&nbsp&nbsp&nbsp&nbsp
	 <span id="da"></span>
</div>	
<br/>
<div>
     <h1>CHOOSE ENDING DATE OF YOUR VISIT
	 <input type="date" name="Edate" style="width:400px; height:50px"><br/></h1>&nbsp&nbsp&nbsp&nbsp
	 <span id="da"></span>
</div>
  
    <h1>CHOOSE PLACES TO VISIT</h1>&nbsp&nbsp&nbsp&nbsp<span id="chbx"></span>
    <label class="control control--checkbox">BAHIR DAR
      <input type="checkbox" name="cb[]" value="0" id="0" onclick="direct()" checked /> 
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox">AXUM
	<input type="checkbox" name="cb[]" value="1" id="1" onclick="direct()"/> 
      <div class="control__indicator"></div>
    </label>
	
	<br/>
	
	
	
	  <label class="control control--checkbox">HAWASSA
	  <input type="checkbox" name="cb[]" value="2" id="2" onclick="direct()"/> 
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox">HARAR
	<input type="checkbox" name="cb[]" value="3" id="3"  onclick="direct()"/> 
      <div class="control__indicator"></div>
    </label>
	  <label class="control control--checkbox">GONDER
	  <input type="checkbox" name="cb[]" value="4" id="4"  onclick="direct()"/> 
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox">ADDIS ABABA
	<input type="checkbox" name="cb[]" value="5" id="5"  onclick="direct()"/>
      <div class="control__indicator"></div>
    </label>
	  <label class="control control--checkbox">JIMMA
	  <input type="checkbox" name="cb[]" value="6"  id="6" onclick="direct()"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox">DEBRE ZEIT
	<input type="checkbox" name="cb[]" value="7"  id="7" onclick="direct()"/>
      <div class="control__indicator"></div>
    </label>
	  <label class="control control--checkbox">ARBAMINCH
	  <input type="checkbox" name="cb[]" value="8" id="8"  onclick="direct()"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox">LALIBELA
	<input type="checkbox" name="cb[]" value="9" id="9" onclick="direct()"/>
      <div class="control__indicator"></div>
    </label>
    <br/>
 
    <h1>TOUR AND TRAVEL AGENTS </h1>&nbsp&nbsp&nbsp&nbsp<span id="tt"></span>
    <label class="control control--radio">RUHAMMA
      <input type="radio" id="agent" name="agent" value ="001" /> 
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">ABYSINYA
     <input type="radio" id="agent"  name="agent" value="002" /> 
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">LUCY
      <input type="radio" id="agent" name="agent" value="003"/> 
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">ETHIO
     <input type="radio" id="agent" name="agent" value="004"/> 
      <div class="control__indicator"></div>
    </label>
	 <label class="control control--radio">SELAM
    <input type="radio" id="agent" name="agent" value="005"/>  
      <div class="control__indicator"></div>
    </label>

  
  <br/>
  
    <h1>ENTER THE PURPOSE OF YOUR VISIT  </h1>&nbsp&nbsp&nbsp&nbsp<span id="pur"></span>
    <div class="select" >
      <select name="purpose" id="purpose">
        
<option value="family/friends">family/ friends trip<option>
<option value="work">work trip<option>
<option value="research">research trip<option>
<option value="other">other<option>

      </select>
      <div class="select__arrow"></div>
    </div>
    <br/>
		<h1><input type="button" value="make" onclick="validate()"
		style="font-size:30px;background-color:#29293d;width:100px; height:50px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<div class="Dglow" id="Dglow">
		<input type="submit" value="submit" 
		style="font-size:30px;background-color:#29293d;width:100px; height:50px">
		</h1>
		</div>
  </div>
		
</div>
  

		</form>
	
		
		
    </body>
</html>