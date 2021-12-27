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
	
	if (!empty($email) && !eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
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
	 
	$to = array(' ahmedreza065@gmail.com'); /*'info@kontriga.com',*/
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
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
            <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
                            <!--[if IE 7]>
<style type="text/css">
#big-slider .slider-holder ul { position:relative; margin-left:0px;} 
</style>
<![endif]-->
                <!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="css/ie6.css" /><![endif]-->
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
      
  <div class="left_container">  <h2 align="left">Reach Us</h2>  <hr />
   <div id="map"><iframe width="550" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?q=calcutta+institute+of+maxillofacial+surgery&amp;hl=en&amp;gl=in&amp;ie=UTF8&amp;view=map&amp;cid=14632007134751507667&amp;ll=22.518761,88.39164&amp;spn=0.006938,0.00912&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.in/maps?q=calcutta+institute+of+maxillofacial+surgery&amp;hl=en&amp;gl=in&amp;ie=UTF8&amp;view=map&amp;cid=14632007134751507667&amp;ll=22.518761,88.39164&amp;spn=0.006938,0.00912&amp;z=16&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small> </div>
     <div class="contct_add">
     <div align="left">
  
      <strong>200 Rajdanga Nabapally,<br /> 
       Kolkata 700 078
       <br />
       +91 - 9830080174<br />
       Tel: 03324412366<br />
	   03340614227<br />
       Fax: +91 33 2441 2742</strong><br />
     </div>
   </div>

<div class="contct_add">
  <div align="left">
    
<strong>    
      For more Details : +919830080174<br />
     E-mail: drmukherji@rediffmail.com<br />
      Website: www.kolkatamaxillofacial.com</strong>
      
  </div>
</div>
   </div>
  <div id="right_container">
  	  <h2 align="left">Mail Us</h2> <hr />
      <form action="contact.php" method="post" name="frm" id="frm">     <?php
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
   
   
   
   
   </div>
  <div id="footer">© All Rights Reserved CIMS  <br /> 
  Website Designed and Developed by <a href="http://www.newmediakreatives.com/"span style="color:#fff; text-decoration:none;">newmediakreatives.com</a></div>
</div>

</div>












</div>









</body>
</html>
