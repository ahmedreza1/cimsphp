<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kolkatamaxillofacial</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
 		<link href="css/menu.css" rel="stylesheet" type="text/css" />
        <link href="css/gallery_style.css" rel="stylesheet" type="text/css" />
		    <script type="text/javascript" src="js/menu.js"></script>
		    <script type="text/javascript" src="js/jquery_002.js"></script>
  		<!--		<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />-->
<!--	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>-->
	<!--<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>-->
            <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
            <!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="css/ie6.css" /><![endif]-->
                <!--[if IE 7]>
<style type="text/css">
#big-slider .slider-holder ul { position:relative; margin-left:0px;} 
</style>
<![endif]-->

<style type="text/css">
<!--

.style1 {font-size: 14px}
.style2 {font-size: 14px; font-weight: bold; }
-->
</style></head>
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
                       	<li class="subMenuLink"><a href="Cleft Lip-Palate Surgery.html">Cleft Lip and Palate Surgery</a></li>
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
</div></div>
<div class=" clear"></div>
<div id="gallery_bg2"> 	<div id="container">
<?php
// get the feed using magpieRSS
    include('rss_fetch.inc');
	$feed = fetch_rss("http://gdata.youtube.com/feeds/api/users/oralcamera/uploads?alt=rss");

?>
<?php
if(count($feed->items)>0){
	foreach ($feed->items as $video){
		//Get the video ID
			preg_match("/http:\/\/gdata.youtube.com\/feeds\/api\/videos\/(([a-zA-Z0-9]|-|_)*)/", $video['guid'], $videoIdMatches);
			$videoID = $videoIdMatches[1];
		?>
		<div class="video1">
			<h5><?= ucfirst($video["title"]) ?></h5>
			<div class="box_img"><a href="video.php?url=<?= $videoID ?>"><img src="http://img.youtube.com/vi/<?= $videoID ?>/0.jpg" alt="<?= $video["title"] ?>" class="img1" width="139" height="98" /></a></div>
			<p><strong>D<span class="style1"></span>ate :</strong> <?= date("d-m-Y", strtotime($video['pubdate']) ) ?></p>
		  <p><?php /*$video->description*/ ?></p>
<a href="<?= $video['link'] ?>" target="_blank" class="style2">Watch it on YouTube</a><br />
				<div style="clear:both"></div>
			<br />
		</div>
		<?php
	}
}else{
	echo "<h3>No Videos Found</h3>";
}
?>
</div>

</div>

</div>
</div>

 








</body>
</html>
