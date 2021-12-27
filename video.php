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
a:link {
	color: #fff;
	text-decoration: none;
}
a:visited {
	color: #FFFFFF;
	text-decoration: none;
}
a:hover {
	color: #999999;
	text-decoration:none;
}
a:active {
	text-decoration: none;
}
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
                      <li class="subMenuLink"><a href="CORRECTIVE&amp;COSMETIC FACIALSURGERY.html">Corrective &amp; Cosmetic Facial Surgery</a></li>
                       	<li class="subMenuLink"><a href="Cleft Lip and Palate Surgery.html">Cleft Lip and Palate Surgery</a></li>
                      <li class="subMenuLink"><a href="Jaw Joint Surgery.html">Jaw Joint Surgery</a></li>
                      <li class="subMenuLink"><a href="salivary.html">Salivary Gland Surgery</a></li>
               		   <li class="subMenuLink"><a href="JAW CYSTS &amp; TUMOURS (non cancer).html">Jaw Cysts and Tumours</a></li>
               		  <li class="subMenuLink"><a href="head&amp;neck.html">Head and Neck Cancers</a></li>
                      <li class="subMenuLink"><a href="neck.html">The Neck</a></li>
					</ul>
			  </li>
				<li class="topMenuLink"><a href="training.html"> Training  </a></li>
				
				  <li class="topMenuLink"><a href="program.html" >Programmes</a></li>
						
           		   <li class="topMenuLink"><a href="gallery.html" > Gallery</a></li>
					
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
<div id="gallery_bg1"> 	<div id="container">
<?php
$id= $_GET['youtube_vid'];
// get the feed using magpieRSS
include('rss_fetch.inc');
$feed = fetch_rss("http://gdata.youtube.com/feeds/api/users/oralcamera/uploads?alt=rss");
$found = false;
foreach ($feed->items as $item){
	if(strstr($item['guid'], $id)){
		$found = true;
		break;
	}
}

if($found){
	$video = $item;
	?>
	<div class="video">
		<h3><?= ucfirst($video["title"]) ?></h3>
		<p><strong>Date :</strong> <?= date("d-m-Y", strtotime($video['pubdate']) ) ?></p>
		<p>
			<a href="http://www.youtube.com?v=<?= $id ?>">View it on YouTube</a><br />
		</p>
		<p><?= $video["description"] ?></p>
		<div class="object">
			<object width="425" height="350">
				<param name="movie" value="http://www.youtube.com/v/<?= $id ?>">
				</param>
				<embed src="http://www.youtube.com/v/<?= $id ?>" type="application/x-shockwave-flash" width="425" height="350"></embed>
			</object>
		</div>
	</div>
	<?php
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
