

<?php
$err=array();

if(count($_POST) > 0)
{
	
	$name = isset($_REQUEST["name"]) ? trim($_REQUEST["name"]) : "";
	$address = isset($_REQUEST["subject"]) ? trim($_REQUEST["subject"]) : "";
	$country = isset($_REQUEST["country"]) ? trim($_REQUEST["country"]) : "";
	$email = isset($_REQUEST["email"]) ? trim($_REQUEST["email"]) : "";
	$contact_no = isset($_REQUEST["contact_no"]) ? trim($_REQUEST["contact_no"]) : "";
	$budget = isset($_REQUEST["budget"]) ? trim($_REQUEST["budget"]) : "";
	$com_name = isset($_REQUEST["com_name"]) ? trim($_REQUEST["com_name"]) : "";
	$message_text = isset($_REQUEST["message_text"]) ? trim(addslashes($_REQUEST["message_text"])) : "";
	$message_text=htmlentities($message_text,ENT_QUOTES);
	
	
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date("F j, Y, g:i a"); 
	
	
	if(empty($name)) $err[]="You must enter your name,";
	if(empty($email)) $err[]="proper email address,";
	
	if (!empty($email) && !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
		$err[] = "Invalid email<br>";
	}
	if(empty($contact_no)) $err[]="proper contact no";
	
	if(!empty($contact_no) && !(is_numeric($contact_no)) )
	$err[]="Contact No must be in Number<br>";
	
	
	
	if(count($err)==0)
	{
	
	$subject = "You've been contacted by ". $name ;
	$message.="\n\n<br><br>";
	$message.="You Have Received This Message From IP:".$ipaddress."&nbsp; on ".$date."<br><br>";
	
	$message.="You have been contacted by ".$name.", their contact details are as follows."."\r\n\n<br><br>";
	
	
	$message.="<b>Contact Information</b>"."<br><br>";
	
	//$message.="Hello"."<br><br>";
	$message.="<table width='750' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; padding:5px; background-color:#F9F9F9;' align='center' border='0' cellpadding='0' cellspacing='0'>";
	
	$message.="<tr><td style='padding:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; font-weight:bold;'> Name:"."</td><td style='padding: 5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000;'>".$name."</td></tr>";
	
	$message.="<tr><td style='padding:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; font-weight:bold;'> Contact no:"."</td><td style='padding:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000;'>".$contact_no."</td></tr>";
	
	$message.="<tr><td style='padding:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; font-weight:bold;'> Email-Id:"."</td><td style='padding:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000;'>".$email."</td></tr>";
	
	
	$message.="<tr><td style='padding:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; font-weight:bold;'> Subject:"."</td><td style='padding:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000;'>".subject."</td></tr>";
	

	
	
	$message.="<tr><td style='padding:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; font-weight:bold;'> Message:"."</td><td style='padding:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000;'>".html_entity_decode(stripslashes($message_text))."</td></tr>";
	
	

		
	
	
	
	
	$message.="</table>";
	$message.="\n\n "."<br><br>";
	$message.="\n\n Thanks & Regards"."<br>";
	$message.="".$name."<br>";
	 
	$to = array(' drmukherji@rediffmail.com'); /*'info@kontriga.com',*/
	$from = $email;
	// To send the HTML mail we need to set the Content-type header. 
	$headers  = "From: $from\r\n"; 
	$headers .= "Content-type: text/html\r\n"; 
	
	//options to send to cc+bcc 
	//$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
	//$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
	
	// now lets send the email. 
	foreach ($to as $v){
		mail($v, $subject, $message, $headers); 
	}
		 
		  $err[]="<div id='succsess_page'>";
		 $err[]="<font style='font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px; font-weight:bold; color:#004A00;'>Email Sent Successfully.</font><br />";
		 $err[]="<font style='font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:12px; font-weight:bold; color:#004A00;'>Thank you <strong>$name</strong>, your message has been submitted to us.</font>";
		 $err[]="</div>";
		 
		 
		 
	}
	
	
}

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kolkatamaxillofacial</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
 		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		    <script type="text/javascript" src="js/menu.js"></script>
		    <script type="text/javascript" src="js/jquery_002.js"></script>
  				<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>
         
            <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
                <!--[if IE 7]>
<style type="text/css">
#big-slider .slider-holder ul { position:relative; margin-left:0px;} 
		.white_content a {
		}
	.white_content a:hover {
	background-color:white;
			
		}
</style>
<![endif]-->
                <!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="css/ie6.css" /><![endif]-->
 <script type="text/javascript">
function ismail(frm)
{
    if ((document.frm.email.value)== "" )
	    {
		   alert( "Specify your Email address.");
		   return false; 
		} 
	var regex = /^[\w]+[\w-]*(?:\.[\w-]+)*@(?:[\w-]+\.)+[a-zA-Z]{2,7}$/;		        
	if(!regex.test(document.frm.email.value) || document.frm.email.value.indexOf('_')==0)
		{
			alert("Invalid E-mail ID.");
			document.frm.email.focus();
			return false;
		}
	return true;
}



function MM_validateForm(frm) 
{
   //alert (frm.postcode.value);
	var exp1="^[a-zA-Z0-9]+$";
	var exp3="^[a-zA-Z0-9]"
	var pattern="^([0-9])+$";
	var exp2="^[a-zA-Z]+$";
	if((document.frm.name.value)== "")
	{
	   alert("Please specify name");
	   document.frm.name.focus();
	   return false;
	}
   	else if((document.frm.address.value)== "")
		{
		   alert("Please specify subject");
		   document.frm.subject.focus();
		   return false;
		}	
		
			else if((document.frm.country.value)== "")
		{
		   alert("Please specify country");
		   document.frm.Country.focus();
		   return false;
		}	
		
		else if(!ismail(frm))
       { 
		   document.frm.email.value="";
	       document.frm.email.focus();
		   return false;
       }	
	
    else if((document.frm.contact_no.value)== "" )
	    {
		   alert( "Please specify Contact No");
		   document.frm.contact_no.focus();
		   return false; 
		}
		
		 else if(isNaN(document.frm.contact_no.value))
	    {
		   alert( "Please specify Contact No Numeric");
		   document.frm.contact_no.focus();
		   return false; 
		}	
			
	else if((document.frm.com_name.value)== "" )
	    {
		   alert( "Please specify Company name");
		   document.frm.com_name.focus();
		   return false; 
		}
	
	else if((document.frm.message.value)== "")
		{
		   alert("Please specify Message");
		   document.frm.message.focus();
		   return false;
		}

   return true;
}
</script>

</head>
<body>
<div align="center">
<div id="wrapper">
<div id="btn">
<div id="menu">
			<ul id="topMenu">
				<li class="topMenuLink"><a href="index.php">Home </a>
				</li>
				<li class="topMenuLink"><a href="#" id="lastMenu">About Us</a>
					<ul class="subMenu" id="last">
						<li class="subMenuLink"><a href="mission.html">Our Mission</a></li>
						<li class="subMenuLink"><a href="surgeon.html">The Surgeon</a></li>
						<li class="subMenuLink"><a href="team.html">Our Team</a></li>
                        <li class="subMenuLink"><a href="infrastructure.html">Infrastructure</a></li>
				  </ul>	
			  </li>
				<li class="topMenuLink"><a href="#" id="lastMenu">Services</a>
					<ul class="subMenu"  id="last">
							<li class="subMenuLink"><a href="dentoalveolar.html">DentoAlveolar Surgery</a></li>
					  <li class="subMenuLink"><a href="oral.html">Oral Diagnostics and Medicine</a></li>
					  <li class="subMenuLink"><a href="facialtramatology.html">Facial Traumatology</a></li>
                      <li class="subMenuLink"><a href="CORRECTIVE-COSMETIC-FACIALSURGERY.html">Corrective &amp; Cosmetic Facial Surgery</a></li>
                       	<li class="subMenuLink"><a href="Cleft-Lip-Palate-Surgery.html">Cleft Lip and Palate Surgery</a></li>
                      <li class="subMenuLink"><a href="Jaw-Joint-Surgery.html">Jaw Joint Surgery</a></li>
                      <li class="subMenuLink"><a href="salivary.html">Salivary Gland Surgery</a></li>
               		   <li class="subMenuLink"><a href="JAW-CYSTS-TUMOURS.html">Jaw Cysts and Tumours</a></li>
               		  <li class="subMenuLink"><a href="head-neck.html">Head and Neck Cancers</a></li>
                      <li class="subMenuLink"><a href="neck.html">The Neck</a></li>
                         <li class="subMenuLink"><a href="miscelleneous.html">Misc</a></li>
					</ul>
			  </li>
				<li class="topMenuLink"><a href="training.html"> Training  </a></li>
				
				  <li class="topMenuLink"><a href="program.html" >Programmes</a></li>
				  <li class="topMenuLink"><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Gallery</a></li><div id="light" class="white_content">Graphic Details of Surgery, Please use discretion. This part will load slowly in average Pcs due to large numbers of high resolution pictures. We are sorry for this inconvenience. <a href="gallery.html"><img src="images/enter.png" alt="" border="0" style="width:auto; float:left; margin-left:300px; margin-right:20px;" /></a> <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><img src="images/close-button.png"   alt="" border="0" style="width:auto; float:left; margin-top:-20px;"/></a></div>
		<div id="fade" class="black_overlay"></div>
					

       	      <li class="topMenuLink"><a href="newsroom.html">News Room</a></li>
				
       	      <li class="topMenuLink"><a href="contact.php" >Contact Us</a></li>
					
				
			</ul>
		</div>
</div>
<div id="container">
<div id="logo_container">
<div id="logo"><a href="index.php"></a></div>
<div id="com_name"></div>
</div>
</div>

<div id="banner_container">
  <div id="banner_text">
<div class="testimonial">
<blockquote>
    <p><em> Oral and maxillofacial surgery is the surgical specialty concerned with the diagnosis and treatment of diseases affecting the mouth, jaws, face and neck. This website contains information about oral and maxillofacial resources  which we hope will be of interest and benefit to the patients and to the professionals.</em></p>
          </blockquote></div>

</div>

<div id="banner" align="right">
<object
classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0"
width="450" height="350">
<param name="movie" value="images/BNR.swf">
<param name="quality" value="high"><param name="wmode" value="transparent">
<embed src="images/BNR.swf" quality="high" wmode="transparent"
pluginspage="http://www.macromedia.com/go/getflashplayer"
type="application/x-shockwave-flash" width="450"
height="350"></embed>
</object></div>

</div>
<div id="scroller">
  <div id="big-slider" class="slider">
    <!-- Slider Holder -->
    <div class="slider-holder">
    
    
    
     <ul>
        <!-- Slide -->
        <li>
          <div class="image"><a href="CORRECTIVE-COSMETIC-FACIALSURGERY.html"><img src="images/image1.png" alt="" border="0" /></a></div>
        </li>
        <li>
          <div class="image"> <a href="head-neck.html"><img src="images/image2.png" alt="" border="0" /></a> </div>
        </li>
        <li>
          <div class="image"> <a href="facialtramatology.html"><img src="images/image3.png" alt="" border="0" /></a> </div>
        </li>
        <li>
          <div class="image"> <a href="oral.html"><img src="images/image4.png" alt="" border="0" /></a> </div>
        </li>
        <li>
          <div class="image"> <a href="dentoalveolar.html"><img src="images/image5.png" alt="" width="232" border="0" /></a> </div>
        </li>
        <li>
          <div class="image"> <a href="salivary.html"><img src="images/image6.png" alt="" border="0" /></a> </div>
        </li>
        <li>
          <div class="image"> <a href="Jaw-Joint-Surgery.html"><img src="images/image7.png" alt="" border="0" /></a> </div>
        </li>
        <li>
          <div class="image"> <a href="Jaw-Joint-Surgery.html"><img src="images/image8.png" alt="" border="0" /></a> </div>
        </li>
        <li>
          <div class="image"> <a href="Cleft-Lip-Palate-Surgery.html"><img src="images/image9.png" alt="" border="0" /></a> </div>
        </li>
        <li>
          <div class="image"> <a href="miscelleneous.html"><img src="images/image10.png" alt="" border="0" /></a> </div>
        </li>
      </ul>
      <div class="cl"></div>
    </div>
  </div>
  <div id="content">
    <div id="contentTop">
      
  <div class="left_container">  
 <h2 align="left">Calcutta Institute of Maxillofacial Surgery and Research </h2><hr />
   <p align="left"><img src="images/c.gif"  alt="" class="img1" />Oral & Maxillofacial Surgery is one of the newer developments in the advancement of super specialty surgical sciences.

The head & neck region has traditionally been recognized as a very complex territory in human anatomy. This anatomical area has always presented clinicians with an array of diagnostic and surgical challenges due to the extreme structural, functional and cosmetic precision needs.

Many specialties jointly tried over the years to address the special needs of the area. But, there were shortfalls. till came this new super specialty with absolute customized training for the comprehensive management of only mouth, face, jaws and neck.

Oral & Maxillofacial Surgery is one of the newer developments in the advancement of super specialty surgical sciences.

The head & neck region has traditionally been recognized as a very complex territory in human anatomy. This anatomical area has always presented clinicians with an array of diagnostic and surgical challenges due to the extreme structural, functional and cosmetic precision needs.

Many specialties jointly tried over the years to address the special needs of the area. But, there were shortfalls. till came this new super specialty with absolute customized training for the comprehensive management of only mouth, face, jaws and neck.

A complete maxillofacial surgeon spends equal time in formal dental and surgical training. This amounts at least ten rigorous years and then more years in the super specialty level. This lengthy training pathway is one of the primary reasons in the serious discrepancy in the demand and supply of specialist maxillofacial surgeons. This discrepancy is more intense in the third world like many other problems.

Ironically however, oral cancer is the highest in the Indian subcontinent and congenital facial deformities as well as lost faces due to nasty road traffic accidents are catching up fast.

To add to this painful reality, there is a commercially driven, organized effort to confuse the suffering lot about where to go with these problems. In the absence of a single specialty institute in the subject in the whole of North, North-East and Eastern India, Nepal, Bhutan and most of Bangladesh there was no way to fight back this planned exploitation of people's bad times. Moreover, maxillofacial surgical procedures are high end expensive surgeries. In the absence of transparent cost explanation patients could be easily ripped.

With these in mind we brought together our humble resources to present the first Maxillofacial Surgery and Training Institute for this vast geographical territory. The target, alongside the provision of comprehensive management of all head and neck pathology, deformity and injuries, is to train a new generation of maxillofacial surgeons to offset the long standing demand-supply difference. The economics is organized to change the concept that this is a rich man's specialty and bring down the cost through transparent affordable packages.
</p>
<script type="text/javascript">
var sliderwidth="550px"
//Specify the slider's height
var sliderheight="126px"
//Specify the slider's slide speed (larger is faster 1-10)
var slidespeed=3
//configure background color:
slidebgcolor="#fff"
//Specify the slider's images
var leftrightslide=new Array()
var finalslide=''
leftrightslide[0]='<a href="http://www.rcseng.ac.uk/" target="_blank"><img src="images/logo1.jpg"  border=1  border-color="#000" alt=""></a>'
leftrightslide[1]='<a href="http://www.fhno.org/" target="_blank"><img src="images/logo2.jpg" border=1 border-color="#000" alt=""></a>'
leftrightslide[2]='<a href="http://www.iaoms.org/" target="_blank"><img src="images/logo3.jpg" border=1  border-color="#000" alt=""></a>'
leftrightslide[3]='<a href="http://www.itaccs.com/" target="_blank"><img src="images/logo4.jpg" border=1  border-color="#000" alt=""></a>'
leftrightslide[4]='<a href="http://www.aomsi.com/" target="_blank"><img src="images/logo5.jpg" border=1 border-color="#000" alt=""></a>'
leftrightslide[5]='<a href="http://www.fortishospitals-kolkata.com/"  target="_blank"><img src="images/logo6.jpg" border=1  border-color="#000" alt=""></a>'
leftrightslide[6]='<a href="http://www.hidsar.in/"  target="_blank"><img src="images/logo7.jpg" border=1  border-color="#000" alt=""></a>'

//Specify gap between each image (use HTML):
var imagegap=" "
//Specify pixels gap between each slideshow rotation (use integer):
var slideshowgap=5
////NO NEED TO EDIT BELOW THIS LINE////////////
var copyspeed=slidespeed
leftrightslide='<nobr>'+leftrightslide.join(imagegap)+'</nobr>'
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+leftrightslide+'</span>')
var actualwidth=''
var cross_slide, ns_slide
function fillup(){
if (iedom){
cross_slide=document.getElementById? document.getElementById("test2") : document.all.test2
cross_slide2=document.getElementById? document.getElementById("test3") : document.all.test3
cross_slide.innerHTML=cross_slide2.innerHTML=leftrightslide
actualwidth=document.all? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth
cross_slide2.style.left=actualwidth+slideshowgap+"px"
}
else if (document.layers){
ns_slide=document.ns_slidemenu.document.ns_slidemenu2
ns_slide2=document.ns_slidemenu.document.ns_slidemenu3
ns_slide.document.write(leftrightslide)
ns_slide.document.close()
actualwidth=ns_slide.document.width
ns_slide2.left=actualwidth+slideshowgap
ns_slide2.document.write(leftrightslide)
ns_slide2.document.close()
}
lefttime=setInterval("slideleft()",30)
}
window.onload=fillup
function slideleft(){
if (iedom){
if (parseInt(cross_slide.style.left)>(actualwidth*(-1)+8))
cross_slide.style.left=parseInt(cross_slide.style.left)-copyspeed+"px"
else
cross_slide.style.left=parseInt(cross_slide2.style.left)+actualwidth+slideshowgap+"px"

if (parseInt(cross_slide2.style.left)>(actualwidth*(-1)+8))
cross_slide2.style.left=parseInt(cross_slide2.style.left)-copyspeed+"px"
else
cross_slide2.style.left=parseInt(cross_slide.style.left)+actualwidth+slideshowgap+"px"

}
else if (document.layers){
if (ns_slide.left>(actualwidth*(-1)+8))
ns_slide.left-=copyspeed
else
ns_slide.left=ns_slide2.left+actualwidth+slideshowgap

if (ns_slide2.left>(actualwidth*(-1)+8))
ns_slide2.left-=copyspeed
else
ns_slide2.left=ns_slide.left+actualwidth+slideshowgap
}
}


if (iedom||document.layers){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
if (iedom){
write('<div style="position:relative;width:'+sliderwidth+';height:'+sliderheight+';overflow:hidden">')
write('<div style="position:absolute;width:'+sliderwidth+';height:'+sliderheight+';background-color:'+slidebgcolor+'" onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed">')
write('<div id="test2" style="position:absolute;left:0px;top:0px"></div>')
write('<div id="test3" style="position:absolute;left:-1000px;top:0px"></div>')
write('</div></div>')
}
else if (document.layers){
write('<ilayer width='+sliderwidth+' height='+sliderheight+' name="ns_slidemenu" bgColor='+slidebgcolor+'>')
write('<layer name="ns_slidemenu2" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
write('<layer name="ns_slidemenu3" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
write('</ilayer>')
}
document.write('</td></table>')
}
}
</script>
   </div>
  <div id="right_container">
 	<div class="video">
         <!--<object width="425" height="350">
  <param name="movie" value="http://www.youtube.com/v/HvHOCqbA6rE">
  </param>
  <param name="wmode" value="transparent">
  </param>
  <embed src="http://www.youtube.com/v/HvHOCqbA6rE"
  type="application/x-shockwave-flash" wmode="transparent"
  width="310" height="300">
  </embed>
</object>-->
<a href="covid.html" class="buttonb buttonb3">Today's Blog</a>
<p>Today's blog is on Covid 19</p>

<style>
.buttonb {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.buttonb3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.buttonb3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
</style>
  	  </p>
  	</div> 
    <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">
     <img src="images/gallery.gif" alt" " border="0"/></a><span style="margin-top:3500px;">
    <div id="light" class="white_content">Graphic Details of Surgery, Please use discretion. This part will load slowly in average Pcs due to large numbers of high resolution pictures. We are sorry for this inconvenience. <a href="gallery.html"><img src="images/enter.png" alt="" border="0" style="width:auto; float:left; margin-left:300px; margin-right:20px;" /></a> <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><img src="images/close-button.png"   alt="" border="0" style="width:auto; float:left; margin-top:-20px;"/></a></div>
		<div id="fade" class="black_overlay"></div>
        </span>
        
        
<div id="fellowship">
<h3>Fellowship Programs</h3>
<img src="images/workshop.gif"  alt="" border="0"/>




 <div align="left">

 <strong><span style="font-size:16px;">Fellowship programs started for</span></strong>
   
 </div><ul class="list1"><li>
   <div align="left">One year residential fellowship programme for MDS (OMS), MS (ENT) and MS (General Surgery). <a href="fellowship.html" style="color:#ff0000; text-decoration:none; font-weight:bold">Details</a>  </div>
 </li>
    <li>
      <div align="left"> Short postings as OBSERVER <a href="observer.html" style="color:#ff0000; text-decoration:none; font-weight:bold">Details</a> </div>
    </li>
    
    </ul><div align="left" style="width:300px;">
 <a href="facesavers.html"> <img src="images/FACESAVERS.gif" align="left" alt="" border="0"  /></a></div>
 <div align="left" style="width:300px;">
  <a href="surgeon.html"> <img src="images/link.gif" align="left" alt="" border="0"  /></a>
 
 </div>
 <div class="clear"></div>
    <h3 align="center">Quick Enquiry</h3> 
  <form action="index.php" method="post" name="frm" id="frm">     <?php
                if(count($err)>0)
                {
                    foreach($err as $errmsg)
                    {
                        print "<font style='color:#ff0000;'>$errmsg</font>";
                    }
                    print"</center>";
                }
		?>
       <div class="box">   
      
       
          
        <label> <span>Name</span> <input type="text" class="input_text" name="name" id="name" value="<?php if(isset($_POST["name"])) print $_POST["name"]?>" /></label> 
          <label><span>Phone</span><input name="contact_no" type="text" class="input_text" id="contact_no" value="<?php if(isset($_POST["contact_no"])) print $_POST["contact_no"]?>"/>
          </label>    
        <label><span>Email</span><input type="text" class="input_text" name="email" id="email" value="<?php if(isset($_POST["email"])) print $_POST["email"]?>"/></label>       
		<label><span>Subject</span><input type="text" class="input_text" name="subject" id="subject" value="<?php if(isset($_POST["subject"])) print $_POST["subject"]?>"/></label>   
		<label><span>Message</span>
		<textarea class="message" name="message_text" id="message_text"><?php if(isset($_POST["message_text"])) print $_POST["message_text"]?>
		</textarea>
		<input type="submit" class="button" value="Submit" /> </label> </div> 
      </form>
</div>





</div> 
   
   

   
   </div></div>
   
    <div id="contentBtm"><div id="call">Call Now : 9830080174 </div>
    </div>
    <!--<div id="testimonial_container"><div id="left_testimonilas"> Testimonials</div> <div id="right_testimonilas">     <div class="testimonial1">
<blockquote>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br />
<strong>-client Name</strong></p>
              </blockquote></div></div></div>-->
      <div id="footer">© All Rights Reserved CIMS  <br /> 
  Website Designed and Developed by Medzi Studios</div>
</div>

</div>












</div>









</body>
</html>
