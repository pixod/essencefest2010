<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Essence Music Festival 2010</title>


<style type="text/css">


#footer { color: #ad2a2f; font-family:Arial, Helvetica; font-size:11px; word-spacing:1px; text-decoration:none}
#footer a { color: #ad2a2f; font-family:Arial, Helvetica; font-size:11px; word-spacing:1px; text-decoration:none}

#photo {
	position: absolute;
	visibility: visible;
	z-index: 100;
	margin-left: 40px;
	}
	
	
h2 {

color: #d02239;
font-size: 13px;
line-height: 1.3em;
margin: 1em 0;

}



h2 #hd{
font-size: 30px;
color: #9e1536;
font-stretch:condensed;
}

h2 b{
font-size: 20px;
color: #9e1536;
font-stretch:condensed;
}
TD{color:#ad2a2f;}

body
{ 
/*background-image: url(emfBkgd1.gif);*/
/*background-repeat: no-repeat;
background-position: top center;
*/
background-color:#ffe3b2;
/*background-attachment:fixed;*/
margin:0px;
}

#tbl{
background-image: url(emfTableBkgd.gif);
}


#logotable{
	z-index: 100;
	position: absolute;
	visibility: visible;
/*	width:100%; */
	margin:0px;
	margin-left:22px;
	margin-top:8px;
	}
	
img{display:block;}

</style>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/BellGothic_Blk_BT_400.font.js"></script>
<script type="text/javascript" src="js/Trade_Gothic_LT_Std_700.font.js"></script>


<!--VIDEO PLAYER CODE -->
<script type="text/javascript" src="http://cdn.wbpp.warnerbros.com/u/essence/us/video/player/videopage/swfobject.js"></script>

<script type="text/javascript" src="http://cdn.wbpp.warnerbros.com/u/essence/us/video/player/videopage/dsvideopage.js"></script>
<script type="text/javascript">
	var isIE = false;
	if (BrowserDetect.browser == "Explorer")
		isIE = true;

	// Dyamically embed the inline player so that deep linking works

	var flashVars = {videoPage: true,adRatio: 1,alwaysAutoplay: true,lcLevel: "Essence:EMFLincoln",config:"homepage.xml"};
	var params = {allowScriptAccess: "always",
		allowFullScreen: "true",
		quality: "high",
		bgcolor: "#f3ae59"};
	var attributes = {name: "inline"};

	//var swf = "../inline/inline.swf";
	var swf = "http://cdn.wbpp.warnerbros.com/u/essence/us/video/player2/inline.swf";
	var mediaKey = gup('mediaKey');
	/*
	if (mediaKey && mediaKey != "") {
		swf += "?mediaKey=" + mediaKey;
		if (isIE)
			swf += '&rid=' + new Date().getTime();
	} else if (isIE) {
		swf += '?rid=' + new Date().getTime();
	}
	*/
	if (mediaKey && mediaKey != "") {
		flashVars.mediaKey = mediaKey;
		if (isIE)
			   swf += '?rid=' + new Date().getTime();
	} else if (isIE) {
		swf += '?rid=' + new Date().getTime();
	}
	swfobject.embedSWF(swf, "inline", "480", "316", "9.0.28", "expressInstall.swf", flashVars, params, attributes);

	// Embed the playlist
	flashVars = {playlistName: "EMFLincoln"};
	params = { allowScriptAccess: "always",
		allowFullScreen: "false",
		quality: "high",
		bgcolor: "#f3ae59"};
	attributes = {name: "playlist"};


	//swf = "playlist.swf";
	swf = "http://videos.essence.com/swfs/playlist.swf";
	/*
	if (mediaKey && mediaKey != "") {
		swf += "?mediaKey=" + mediaKey;
		if (isIE)
			swf += '&rid=' + new Date().getTime();
	} else if (isIE) {
		swf += '?rid=' + new Date().getTime();
	}
	*/
	if (mediaKey && mediaKey != "") {
		flashVars.mediaKey = mediaKey;
		if (isIE)
			   swf += '?rid=' + new Date().getTime();
	} else if (isIE) {
		swf += '?rid=' + new Date().getTime();
	}


	swfobject.embedSWF(swf, "playlist", "480", "320", "9.0.28", "expressInstall.swf", flashVars, params, attributes);


	// Embed the rating component
	flashVars = {};
	params = { allowScriptAccess: "always",
		allowFullScreen: "false",
		quality: "high",
		bgcolor: "#f3ae59"};
	attributes = {name: "rating"};

	//swf = "rating.swf";
	swf = "http://cdn.wbpp.warnerbros.com/u/essence/us/video/player/videopage/rating.swf";
	if (isIE) {
		swf += '?rid=' + new Date().getTime();
	}

	swfobject.embedSWF(swf, "rating", "320", "37", "9.0.28", "expressInstall.swf", flashVars, params, attributes);


	// Embed the Library view
	flashVars = {numRows: 2};
	params = { allowScriptAccess: "always",
		allowFullScreen: "false",
		quality: "high",
		bgcolor: "#f3ae59"};
	attributes = {name: "library"};

	//swf = "library.swf";
	swf = "http://cdn.wbpp.warnerbros.com/u/essence/us/video/player/videopage/library.swf";
	if (isIE) {
		swf += '?rid=' + new Date().getTime();
	}

	swfobject.embedSWF(swf, "library", "915", "402", "9.0.28", "expressInstall.swf", flashVars, params, attributes);
</script>
<!-- END VIDEO CODE -->

</head>
<body>

<center>

<table border="0" width="1080" cellspacing="0" cellpadding="0" id="tbl">

<tr><td height="100"  colspan="3"><div id="logotable"><a href="home.php"><img src="emfLogo1.gif" border="0"></a></div><img src="shim.gif" width="312" height="20"><img src="shim.gif" width="310" height="90" align="left"><a href="tickets.php"><img src="728X90.gif" border="0"></a></td></tr>
<tr><td width="1080" valign="top" colspan="3"><object width="1078" height="174"><param name="movie" value="fl_countdown_v3_3.swf"></param><param name="wmode" value="transparent"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="fl_countdown_v3_3.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="1078" height="174" wmode="transparent"></embed></object></td></tr>

<TR><td width="1000" valign="top">



<table border="0" width="1040" cellspacing="0" cellpadding="0" height="300">

<tr><td colspan="10" align="left" valign="top" height="40">
<H2><span id="hd"><img src="shim.gif" width="310" height="1" align="left" />CHECK OUT THE ESSENCE MUSIC FESTIVAL 2009 HIGHLIGHTS</span></H2>
</td></tr>

<tr>
<td valign="top" width="40"></td>

<td valign="top" width="183" align="left">
<center>


<body>
				<!--video CONTENT -->

				<table><tr><td colspan="2">
								<div class="player" style="padding: 0px;">
								<!-- Digitalsmiths Rating Component-->

									<div id="rating">Rating component</div><br>
				</td></tr>
				<tr><td valign="top">
								<!-- DigitalSmiths Inline Player -->
									<div id="inline">Inline Player</div>

				</td><td valign="top">
							<div style="padding: 0px;">
							<!-- DigitalSmiths Playlist -->
								<div id="playlist">Playlist</div>
							</div>
				</td></tr></table>

	<!--END: video CONTENT -->

</td>





</tr>




</table>



</td></tr>

<tr><td align="left">

<img src="shim.gif" width="40" height="20" align="left">
<img src="http://www.essencemusicfestival.com/coke.png" align="left" > <img src="shim.gif" width="35" height="20" align="left">
<img src="http://www.essencemusicfestival.com/coors.png" align="left" height="40" vspace="20">  <img src="shim.gif" width="35" height="20" align="left">
<img src="http://www.essencemusicfestival.com/covergirl.png" align="left" height="40" vspace="20"> <img src="shim.gif" width="35" height="20" align="left">
<img src="http://www.essencemusicfestival.com/ford.png" align="left" height="40" vspace="20">  <img src="shim.gif" width="35" height="20" align="left">
<img src="http://www.essencemusicfestival.com/mcdonalds.png" align="left" height="40" vspace="20">  <img src="shim.gif" width="35" height="20" align="left">
<img src="http://www.essencemusicfestival.com/olay.png" align="left" height="40" vspace="20">  <img src="shim.gif" width="35" height="20" align="left">
<img src="http://www.essencemusicfestival.com/pantene.png" align="left" height="40" vspace="20">  <img src="shim.gif" width="35" height="20" align="left">
<img src="http://www.essencemusicfestival.com/army.png" align="left" height="40" vspace="20">  <img src="shim.gif" width="35" height="20" align="left">
<img src="http://www.essencemusicfestival.com/aarp.png" align="left" height="15" vspace="32">  <img src="shim.gif" width="35" height="20" align="left">
<img src="http://www.essencemusicfestival.com/myblack.png" align="left" height="50" vspace="20">  <img src="shim.gif" width="35" height="20" align="left">
</td></tr>

<tr><td align="center" valign="middle"><center><img src="shim.gif" width="56" height="30" align="left">
<img src="footer_la.gif" align="left"><img src="footer_la2.gif" align="left"><img src="footer_city.gif" align="left"><img src="footer_ning.gif" align="left"><img src="footer_fb.gif" align="left"><img src="footer_tw.gif" align="left"><img src="footer_essence.gif" align="left">
</td></tr>
<tr><td align="center" valign="middle"><center><div id="footer">Executive Produced by Essence Festivals LLC and Produced by Rehage Entertainment, Inc.<br />&copy; 2010 Essence Communications Inc. All Rights Reserved | <a href="http://www.essence.com/about/" target="_blank">Our Company</a> | <a href="http://www.essence.com/mediakit/" target="_blank">Media Kit</a> | <a href="http://www.essence.com/about/contact.php" target="_blank">Contact Us</a></div><BR><BR><BR></td></tr>


</table>



</td>


</tr>


</table>



<script type="text/javascript">
//	Cufon.replace('h1');
			Cufon.replace('h1', { fontFamily: 'BellGothic Blk BT' });
			Cufon.replace('h2', {fontFamily: 'Trade Gothic LT Std' });

</script>




</body>
</html>