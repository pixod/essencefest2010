<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 

	<title>EMF</title>

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
		bgcolor: "#ffffff"};
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
	swfobject.embedSWF(swf, "inline", "320", "240", "9.0.28", "expressInstall.swf", flashVars, params, attributes);

	// Embed the playlist
	flashVars = {playlistName: "EMFLincoln"};
	params = { allowScriptAccess: "always",
		allowFullScreen: "false",
		quality: "high",
		bgcolor: "#ffffff"};
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


	swfobject.embedSWF(swf, "playlist", "320", "300", "9.0.28", "expressInstall.swf", flashVars, params, attributes);


	// Embed the rating component
	flashVars = {};
	params = { allowScriptAccess: "always",
		allowFullScreen: "false",
		quality: "high",
		bgcolor: "#ffffff"};
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
		bgcolor: "#ffffff"};
	attributes = {name: "library"};

	//swf = "library.swf";
	swf = "http://cdn.wbpp.warnerbros.com/u/essence/us/video/player/videopage/library.swf";
	if (isIE) {
		swf += '?rid=' + new Date().getTime();
	}

	swfobject.embedSWF(swf, "library", "915", "402", "9.0.28", "expressInstall.swf", flashVars, params, attributes);
</script>
<!-- END VIDEO CODE -->



	
	<script type="text/javascript" src="http://www.essencemusicfestival.com/js/cufon-yui.js"></script>
	<script type="text/javascript" src="http://www.essencemusicfestival.com/js/BellGothic_Blk_BT_400.font.js"></script>
	<script type="text/javascript" src="http://www.essencemusicfestival.com/js/Trade_Gothic_LT_Std_700.font.js"></script>
	<script type="text/javascript" src="/js/Trade_Gothic_LT_Std_400.font.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript">
var sizeUpdated = false;
var theleft = 0;
var flashvars = {};
var params = { allowScriptAccess: "always",
			allowFullScreen: "false",
			wmode:"transparent",
			quality: "high",
			scale: "noscale",
			bgcolor:"#ffffff"};
var attributes = {};

$(document).ready(function() {
		swfobject.embedSWF("takeoverbanner/EMF_TakeOver_Trey.swf", "theswf", "1065", "678", "9.0.0", "takeoverbanner/expressInstall.swf",flashvars, params, attributes);
});	
</script>

<script type="text/javascript">	

$(document).ready(function() {					
	theleft = $(document).width()/2 - $("div#takeover").width()/2 ;
	alert(theleft);
	
	$("div#takeover").css('left',theleft);
	
	$(window).resize(function() {  		
		if(sizeUpdated){
			theleft = $(document).width()/2 - (($("div#takeover").width()*2)+40);
			$("div#takeover").css('left',theleft);			
		}else{
			theleft = $(document).width()/2 - $("div#takeover").width()/2 ;		
			$("div#takeover").css('left',theleft);	
		}
  	});
});


function reducetakeover(){	
	
	theleft = $("body").width()/2 - $("div#takeover").width()/2 ;
	theleft+= 33;
	
	$("div#takeover").css('width',230);
	$("div#takeover").css('height',368);
	$("div#takeover").css('left',theleft);
	
	if ( $.browser.msie ) {
		//alert($.browser.version);
		$("div#takeover").css('top',299);
	}else{
		$("div#takeover").css('top',308);
		
	}	
	sizeUpdated = true;	
}

</script>
<style type="text/css">		
	#takeover{position:absolute; width:1065px; height:678px; background:transparent; z-index:999; overflow:hidden; display:block;}
	#theswf{z-index:999; }
}
</style>
	
	
<style type="text/css">

#footer { color: #ad2a2f; font-family:Arial, Helvetica; font-size:11px; word-spacing:1px; text-decoration:none}
#footer a { color: #ad2a2f; font-family:Arial, Helvetica; font-size:11px; word-spacing:1px; text-decoration:none}


h2 {

color: #d02239;
font-size: 12px;
line-height: 1.2em;
margin: 1em 0;

}

h2 #hd{
font-size: 20px;
color: #9e1536;
font-stretch:condensed;
}

a { color:#d02239; }
h2 a:hover {text-decoration:underline;}

#tbl{
background-image: url(emfTableBkgd.gif);
}

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

#logotable{
	z-index: 100;
	position: absolute;
	visibility: visible;
/*	width:100%; */
	margin:0px;
	margin-left:24px;
	margin-top:12px;
	}

</style>


<script language="javascript">

function popUp3() {
window.open('popUp2.html','promo_pop','width=327,height=270,scrollbars=no,location=no,menubar=no,toolbar=no');
}

</script>

</head>
<body bgcolor="#ffe3b2">
<div id="takeover">
		<div id="theswf"></div>
</div>
<center>

<table border="0" width="1080" cellspacing="0" cellpadding="0" id="tbl">

<tr><td height="100"  colspan="5"><div id="logotable"><a href="home.php"><img src="emfLogo1.gif" border="0"></a></div><img src="shim.gif" width="312" height="120"><a href="tickets.php"><img src="728x90.gif" border="0"></a></td></tr>
<tr><td width="1080" valign="top" colspan="5"><object width="1078" height="174"><param name="movie" value="fl_countdown_v3_3.swf"></param><param name="wmode" value="transparent"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="fl_countdown_v3_3.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="1078" height="174" wmode="transparent"></embed></object></td></tr>

<!--
<tr><td height="100"  colspan="3"><div id="logotable"><a href="home.php"><img src="emfLogo1.gif" border="0"></a></div><img src="shim.gif" width="312" height="20"><img src="shim.gif" width="310" height="90" align="left"><a href="tickets.php"><img src="728X90.gif" border="0"></a></td></tr>
<tr><td width="1080" valign="top" colspan="3"><object width="1078" height="174"><param name="movie" value="fl_countdown_v3_3.swf"></param><param name="wmode" value="transparent"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="fl_countdown_v3_3.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="1078" height="174" wmode="transparent"></embed></object></td></tr>
-->

<TR>
<TD width="40"><img src="shim.gif" width="40" height="8"></TD>
<TD colspan="4" width="1000" align="left">
<!--<img src="shim.gif" width="40" height="420" align="left">-->

<object width="1000" height="378"><param name="movie" value="emfHomeLrgPromoJanet.swf"></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="transparent"></param><param name="allowscriptaccess" value="always"></param><embed src="emfHomeLrgPromoJanet.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="1000" height="378" wmode="transparent"></embed></object>
<BR>
<object width="1000" height="50"><param name="movie" value="dynamic_xml_news_tricker_EMF_v1.swf"></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="transparent"></param><param name="allowscriptaccess" value="always"></param><embed src="dynamic_xml_news_tricker_EMF_v1.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="1000" height="50" wmode="transparent"></embed></object>
</TD></TR>

<TR>
<TD width="40"><img src="shim.gif" width="40" height="8"></TD>

<TD width="330" valign="top" align="left">

<object width="330" height="600"><param name="FlashVars" value="one=FlickrHome&two=2" /><param name="movie" value="emfHomeGallery.swf"></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="transparent"></param><param name="allowscriptaccess" value="always"></param><embed  FlashVars="one=FlickrHome&two=2"  src="emfHomeGallery.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="330" height="600" wmode="transparent"></embed></object><BR><center><h2><a href="photos.php">SEE THE ENTIRE EMF PHOTO GALLERY</a></h2></center>

<!--<object width="330" height="600"><param name="movie" value="emfHomeGallery.swf"></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="transparent"></param><param name="allowscriptaccess" value="always"></param><embed src="emfHomeGallery.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="330" height="600" wmode="transparent"></embed></object>-->

</TD>
<TD width="330" valign="top"><center>
<!--<img src="fbShim.gif" width="300" height="340"><br>-->
<a href="http://community.essence.com/group/essencemusicfestival" target="_blank"><img src="home_ning.gif" border="0"></a><a href="http://www.twitter.com/essencemusic" target="_blank"><img src="home_tw.gif" border="0"></a><a href="http://www.facebook.com/group.php?gid=40017743324" target="_blank"><img src="home_fb.gif" border="0"></a>
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 6000,
  width: 300,
  height: 300,
  theme: {
    shell: {
      background: '#d02239',
      color: '#ffffff'
    },
    tweets: {
      background: '#f7c781',
      color: '#d02239',
      links: '#333333'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('essencemusic').start();
</script>
<img src="shim.gif" width="300" height="4">

<a href="tickets.php"><img src="300x250.gif" border="0"></a></center></TD>
<TD width="330" valign="top">

				<!--video CONTENT -->

						<div style="padding-left: 0px;">
							<div class="subtitle"></div>

							<div class="video-player">
								<div class="player" style="padding: 0px;">
								<!-- Digitalsmiths Rating Component-->

									<div id="rating">Rating component</div><br>

								<!-- DigitalSmiths Inline Player -->

									<div id="inline">Inline Player</div>
							</div>
						</div>

						<div class="grey-ribbon">
							<div class="arrow"></div>
						</div>

						<div>

							<div style="padding: 0px;">
							<!-- DigitalSmiths Playlist -->
								<div id="playlist">Playlist</div>
							</div>
						</div>

					</div>

	<!--END: video CONTENT -->



</object>

<center><h2><a href="videos.php">SEE THE 2009 EMF VIDEO GALLERY</a></h2></center>

</TD>
<TD width="40">&nbsp;</TD>


</TR>




<tr><td align="middle" colspan="5">
<BR><BR>
<!--- FOOTER WITH LOGOS START -->
<table border="0" width="976" cellspacing="0" cellpadding="0" height="94" background="http://www.essencemusicfestival.com/emf_footer1.gif"><tr>
<td width="150"><a href="http://www.mycokerewards.com/home.do?WT.mc_id=SOURCEREG:2010ESSENCE" target="_blank"><img src="shim.gif"  width="150" height="84" border="0"></a></td>
<td width="15"><img src="shim.gif"  width="15" height="84" border="0"></a></td>
<td width="80"><a href="http://www.coorslight.com" target="_blank"><img src="shim.gif"  width="80" height="84" border="0"></a></td>
<td width="85"><a href="http://www.covergirl.com" target="_blank"><img src="shim.gif"  width="85" height="84" border="0"></a></td>
<td width="80"><a href="http://www.fordurban.com/?bannerid=home-logo-Essence" target="_blank"><img src="shim.gif"  width="80" height="84" border="0"></a></td>
<td width="80"><a href="http://www.365Black.com" target="_blank"><img src="shim.gif"  width="80" height="84" border="0"></a></td>
<td width="75"><a href="http://www.olay.com" target="_blank"><img src="shim.gif"  width="75" height="84" border="0"></a></td>
<td width="90"><a href="http://www.pantene.com" target="_blank"><img src="shim.gif"  width="90" height="84" border="0"></a></td>
<td width="90"><a href="http://www.goarmy.com/index.jsp?iom=I742-10WS-ACNP-01222010-204676-ESSENSE" target="_blank"><img src="shim.gif"  width="90" height="84" border="0"></a></td>
<td width="25"><img src="shim.gif"  width="25" height="84" border="0"></td>
<td width="80"><a href="http://www.aarp.org/blackcommunity" target="_blank"><img src="shim.gif"  width="80" height="84" border="0"></a></td>
<td width="100"><a href="http://myblackisbeautiful.com" target="_blank"><img src="shim.gif"  width="100" height="84" border="0"></a></td>
<td width="10"><img src="shim.gif"  width="10" height="84" border="0"></a></td>
 
</tr></table>
<!--- FOOTER WITH LOGOS END --></td></tr>

<tr><td align="center" valign="middle" colspan="5"><center><img src="shim.gif" width="56" height="30" align="left"></a>
<a href="http://community.essence.com/group/essencemusicfestival" target="_blank"><img src="footer_la.gif" align="left" border="0"><img src="footer_la2.gif" align="left" border="0"></a>
<a href="http://www.facebook.com/group.php?gid=40017743324" target="_blank"><img src="footer_city.gif" align="left" border="0">
<a href="http://community.essence.com/group/essencemusicfestival" target="_blank"><img src="footer_ning.gif" align="left" border="0"></a>
<a href="http://www.facebook.com/group.php?gid=40017743324" target="_blank"><img src="footer_fb.gif" align="left" border="0"><img src="footer_tw.gif" align="left" border="0"></a>
<a href="http://www.essence.com/" target="_blank"><img src="footer_essence.gif" align="left" border="0"></a>
</td></tr>
<tr><td align="center" valign="middle" colspan="5"><center><div id="footer">Executive Produced by Essence Festivals LLC and Produced by Rehage Entertainment, Inc.<br />&copy; 2010 Essence Communications Inc. All Rights Reserved | <a href="http://www.essence.com/about/" target="_blank">Our Company</a> | <a href="http://www.essence.com/mediakit/" target="_blank">Media Kit</a> | <a href="http://www.essence.com/about/contact.php" target="_blank">Contact Us</a></div><BR><BR><BR></td></tr>



</table>



<script type="text/javascript">
//	Cufon.replace('h1');
			Cufon.replace('h1', { fontFamily: 'BellGothic Blk BT' });
			Cufon.replace('h2', {fontFamily: 'Trade Gothic LT Std' });

</script>



</body>
</html>