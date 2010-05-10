<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	<title>EMF</title>
	
<!-- 
	<script type="text/javascript" src="http://www.essencemusicfestival.com/js/cufon-yui.js"></script>
	<script type="text/javascript" src="http://www.essencemusicfestival.com/js/BellGothic_Blk_BT_400.font.js"></script>
	<script type="text/javascript" src="http://www.essencemusicfestival.com/js/Trade_Gothic_LT_Std_700.font.js"></script>
	<script type="text/javascript" src="/js/Trade_Gothic_LT_Std_400.font.js"></script>
 -->

	
<style type="text/css">

#footer { color: #ad2a2f; font-family:Arial, Helvetica; font-size:11px; word-spacing:1px; text-decoration:none}
#footer a { color: #ad2a2f; font-family:Arial, Helvetica; font-size:11px; word-spacing:1px; text-decoration:none}


h2 {

color: #d02239;
font-size: 13px;
line-height: 1.3em;
margin: 1em 0;

}



h2 #hd{
	font-size: 20px;
	color: #9e1536;
	font-stretch:condensed;
}

a { color:#d02239; }
h2 a:hover {text-decoration:underline;}


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
	background:#f7c781 url(emfTableBkgd.gif) repeat-x scroll top left;
}

.clearout{clear:both;}

.left{float:left}
.right{ float:right;}

.block{ width:720px; margin:0px 0px 25px 0px; }
.block a img{border:none;}


.wid-200{ width:200px;}
.wid-250{ width:250px;}
.wid-300{ width:300px;}
h2 .tickets{ font-size:35px !important; font-weight:bold; color:#a21b38 !important; margin-top:75px;}

.date-grid{ width:230px; float:left; margin:5px 10px 10px 0px; }
.datetitle{ font-size:25px; color:#d65c00; font-weight:bold;}

.artistspan{float:left; padding:0px 15px 0px 0px; width:100px; }
.artistspan a{color:#d02239; text-decoration:none;}



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
	swfobject.embedSWF(swf, "inline", "360", "237", "9.0.28", "expressInstall.swf", flashVars, params, attributes);

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


	swfobject.embedSWF(swf, "playlist", "460", "240", "9.0.28", "expressInstall.swf", flashVars, params, attributes);


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


<script type="text/javascript" language="javascript" src="http://img.timeinc.net/shared/static/js/tii_ads.js"></script>
 
<script src="http://img.timeinc.net/shared/static/js/tii_ads.js" type="text/javascript"></script>
<script type="text/javascript">
var adConfig = new TiiAdConfig("3475.ess"); 
adConfig.setRevSciTracking(true);
adFactory = new TiiAdFactory(adConfig, "emf/emf");
adFactory.setChannel("emf");
adFactory.setSubchannel("emf");
</script>

</head>
<body bgcolor="#ffe3b2"><center>

<table border="0" width="1080" cellspacing="0" cellpadding="0" id="tbl">

<tr><td height="100" colspan="3" align="left"><div id="logotable"><a href="home.php"><img src="emfLogo1.gif" border="0"></a></div><img src="shim.gif" width="312" height="20"><img src="shim.gif" width="310" height="90" align="left"><script type="text/javascript">
            var ad = adFactory.getAd(728, 90);
            ad.setParam("pos", "1");
            ad.write();
        </script></td></tr>
<tr><td width="1080" valign="top" colspan="3"><object width="1078" height="174"><param name="movie" value="fl_countdown_v3_3.swf"></param><param name="wmode" value="transparent"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="fl_countdown_v3_3.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="1078" height="174" wmode="transparent"></embed></object></td></tr>


<tr>
<td width="38" valign="top">
&nbsp;
</td>

<td valign="top" align="left" style="width: 248px"><img src="shim.gif" width="200" height="8">
	<?php include("music_menu.php"); ?>
</td>

<td width="720" valign="top">

<img src="shim.gif" width="200" height="8">

<BR>
<img src="shim" width="16" height="400" align="left">
<table border="0" cellspacing="0" cellpadding="0"><tr><td valign="top">
<div>
	<span><img src="superlougetitle.png"></span><br/><br/>

<div class="block">
	<span class="left wid-350"><img alt="coca-cola" height="128" src="LOGO_Coca.png" width="370"></span>
	<h2><span class="tickets right"><a href="tickets.php">BUY TICKETS NOW</a></span></h2>
	<div class="clearout"></div>
	<h2><div class="date-grid">
		<span class="datetitle">FRIDAY, JULY 2</span>
		<div class="content"><span class="artistspan"><a href="marymary.php"><img alt="marymary" height="79" src="emfArtists/marymary.jpg" width="80">Mary Mary</a></span><span class="artistspan"><a href="irvinmayfield.php"><img height="79" src="emfArtists/IrvinMayfield.jpg" width="80">Irvin Mayfield and The New Orleans Jazz Orchestra</a></span>	</div>
	</div></h2>
	<h2><div class="date-grid">
		<span class="datetitle">SATURDAY, JULY 3</span>
		<div class="content"><span class="artistspan"><a href="joe.php"><img alt="joe" height="79" src="emfArtists/joe.jpg" width="80">Joe</a></span><span class="artistspan"><a href="rebirthbrassband.php"><img alt="rebirthbrassband" height="79" src="emfArtists/RebirthBrass.jpg" width="80">Rebirth Brass Band</a></span>	
		</div>
	</div></h2>
	<h2><div class="date-grid">
		<span class="datetitle">SUNDAY, JULY 4</span>
		<div class="content"><span class="artistspan"><a href="lalahhathaway.php"><img alt="lalah" height="79" src="emfArtists/LalahHathaway.jpg" width="80">Lalah Hathaway</a></span><span class="artistspan"><a href="dumpstaphunk.php"><img alt="dumpstaphunk" height="79" src="emfArtists/dumpstaphunk.jpg" width="80">Ivan Neville's Dumpstaphunk</a></span></div>
		</div></h2>
		<div class="clearout"></div>		
	</div>
<img src="bar2big.jpg"/>
<br/><br/>
	
	<div class="clearout"></div>
	
	<div  class="block">
		<span class="left wid-250">
		<img alt="mcdonalds" src="LOGO_McDonald.png"></span><h2><span class="tickets right"><a href="tickets.php">BUY TICKETS NOW</a></span></h2>
		<div class="clearout"></div>
		<h2><div class="date-grid">
			<span class="datetitle">FRIDAY, JULY 2</span>
			<div class="content"><span class="artistspan"><a href="arresteddevelopment.php"><img alt="arrested_development" height="79" src="emfArtists/ArrestedDevelopment.jpg" width="80">Arrested Development</a></span><span class="artistspan"><a href="bigsamsfunkynation.php"><img alt="bigsam" height="79" src="emfArtists/BigSamsFunkyNation.jpg" width="80">Big Sam's Funky Nation</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SATURDAY, JULY 3</span>
			<div class="content"><span class="artistspan"><a href="lauraizibor.php"><img alt="laura" height="79" src="emfArtists/LauraIzibor.jpg" width="80">Laura Izibor</a></span><span class="artistspan"><a href="samruby.php"><img alt="samandruby" height="79" src="emfArtists/SamRuby.jpg" width="80">Sam &amp; Ruby</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SUNDAY, JULY 4</span>
			<div class="content"><span class="artistspan"><a href="shamarrallen.php"><img alt="shamarr allen" height="79" src="emfArtists/ShamarrAllen.jpg" width="80" border="0">Shamarr Allen and The Underdawgs</a></span></div>
		</div></h2>
	<div class="clearout"></div>
	</div>
	<img src="bar2big.jpg"/>
	<br/><br/>
	
	<div class="clearout"></div>
	
	<div  class="block">
		<span class="left wid-250">
		<img alt="lincoln" src="myblackisbeautiful_pg.png"></span><h2><span class="tickets right"><a href="tickets.php">BUY TICKETS NOW</a></span></h2>
		<div class="clearout"></div>
		<h2><div class="date-grid">
			<span class="datetitle">FRIDAY, JULY 2</span>
			<div class="content"><span class="artistspan"><a href="chrisettemichelle.php"><img alt="chrisette" height="79" src="emfArtists/ChrisetteMichele.jpg" width="80">Chrisette Michele</a></span><span class="artistspan"><a href="irmathomas.php"><img alt="irma" height="79" src="emfArtists/IrmaThomas.jpg" width="80">Irma Thomas</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SATURDAY, JULY 3</span>
			<div class="content"><span class="artistspan"><a href="mintcondition.php"><img alt="mintcondition" height="79" src="emfArtists/MintCondition.jpg" width="80">Mint Condition</a></span><span class="artistspan"><a href="leojackson.php"><img alt="leojackson" height="79" src="emfArtists/LeoJackson.jpg" width="80">Leo Jackson &amp; Melody Clouds</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SUNDAY, JULY 4</span>
			<div class="content"><span class="artistspan"><a href="estelle.php"><img alt="estelle" height="79" src="emfArtists/estelle.jpg" width="80" border="0">Estelle</a></span><span class="artistspan"><a href="hot8brassband.php"><img alt="hot8brassband" height="79" src="emfArtists/hot8.jpg" width="80" border="0">Hot 8 Brass Band</a></span></div>
		</div></h2>
	<div class="clearout"></div>	
	</div>
	<img src="bar2big.jpg"/>
	<br/><br/>
	
	<div class="clearout"></div>
	
	<div  class="block">
		<span class="left wid-250">
		<img alt="lincoln" src="lincoln_logo_v3.png" height="189" width="300"></span><h2><span class="tickets right"><a href="tickets.php">BUY TICKETS NOW</a></span></h2>
		<div class="clearout"></div>
		<h2><div class="date-grid">
			<span class="datetitle">FRIDAY, JULY 2</span>
			<div class="content"><span class="artistspan"><a href="war.php"><img alt="war" height="79" src="emfArtists/war.jpg" width="80">WAR</a></span><span class="artistspan"><a href="littlefreddieking.php"><img alt="littlefreddieking" height="79" src="emfArtists/LittleFreddieKing.jpg" width="80">Little Freddie King</a></span><span class="artistspan"><a href="rubenstuddard.php"><img alt="ruben" height="79" src="emfArtists/RubenStuddard.jpg" width="80">Ruben Studdard</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SATURDAY, JULY 3</span>
			<div class="content"><span class="artistspan"><a href="delasoul.php"><img alt="delasoul" height="79" src="emfArtists/delasoul.jpg" width="80">De La Soul</a></span><span class="artistspan"><a href="soulrebelsbrassband.php"><img alt="soulrebelbrassband" height="79" src="emfArtists/SoulRebelsBrassBand.jpg" width="80">Soul Rebels Brass Band</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SUNDAY, JULY 4</span>
			<div class="content"><span class="artistspan"><a href="melaniefiona.php"><img alt="melaniefiona" height="79" src="emfArtists/MelanieFiona.jpg" width="80" border="0">Melanie Fiona</a></span><span class="artistspan"><a href="kermitruffins.php"><img alt="kermitt Ruffins" height="79" src="emfArtists/KermitRuffins.jpg" width="80">Kermit Ruffins &amp; The BBQ Swingers</a></span><span class="artistspan"><a href="pjmorton.php"><img alt="pjmorgan" height="79" src="emfArtists/PJmorgan.jpg" width="80">PJ Morton</a></span></div>
		</div></h2>
	<div class="clearout"></div>	
	</div>
	
	<div class="clearout"></div>
</div>

</td>
</tr>
</table>
</td>

</tr>

<tr><td colspan="3" align="right">
	<!--video CONTENT -->

				<table><tr><td colspan="2">
								<div class="player" style="padding: 0px;">
								<!-- Digitalsmiths Rating Component-->

									<div id="rating">Rating component</div><br>
				</div></td></tr>
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

</td></tr>

<tr><td colspan="3" align="center">
<br><br>
<!--- FOOTER WITH LOGOS START -->
<?php include("emf_logos.php"); ?>
<!--- FOOTER WITH LOGOS END -->
</td>
</tr></table>

<center>
<div id="footer">Executive Produced by Essence Festivals LLC and Produced by Rehage Entertainment, Inc.<br>&copy; 2010 Essence Communications Inc. All Rights Reserved | <a target="_blank" href="http://www.essence.com/about/" onclick="s_objectID=&quot;http://www.essence.com/about/_1&quot;;return this.s_oc?this.s_oc(e):true">Our Company</a> | <a target="_blank" href="http://www.essence.com/mediakit/" onclick="s_objectID=&quot;http://www.essence.com/mediakit/_1&quot;;return this.s_oc?this.s_oc(e):true">Media Kit</a> | <a target="_blank" href="http://www.essence.com/about/contact.php" onclick="s_objectID=&quot;http://www.essence.com/about/contact.php_1&quot;;return this.s_oc?this.s_oc(e):true">Contact Us</a><br><br><br><a target="_new" href="http://www.pixod.com/" onclick="s_objectID=&quot;http://www.pixod.com/_1&quot;;return this.s_oc?this.s_oc(e):true">Site by PIXOD</a></div>
</center>

<!-- SiteCatalyst code version: H.17.
Copyright 1997-2008 Omniture, Inc. More info available at
http://www.omniture.com -->
<script src="http://www.essence.com/all/us/omniture/s_code_essence.js" type="text/javascript" language="JavaScript"></script>

<script type="text/javascript" language="JavaScript">&lt;!--
s.pageName="Essence Music Festival"
s.channel=""
s.prop1="Essence.us"
s.prop2=""
s.prop3="Essence Music Festival Home"
s.prop4=""
s.prop5=""
s.prop6=""
s.prop7=""
s.prop8=""
s.prop25=''
s.events=""
s.eVar1=""
s.eVar2=""
s.eVar3=""
s.eVar4=""
s.eVar5=""
/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
var s_code=s.t();if(s_code)document.write(s_code)//--&gt;</script>
<script type="text/javascript" language="JavaScript">&lt;!--
if(navigator.appVersion.indexOf('MSIE')&gt;=0)document.write(unescape('%3C')+'\!-'+'-')
//--&gt;</script><noscript>&lt;a href="http://www.omniture.com" title="Web Analytics"&gt;&lt;img
src="http://wbrosessence.112.2O7.net/b/ss/wbrosessence/1/H.17--NS/0?[AQB]&amp;cdp=3&amp;[AQE]"
height="1" width="1" border="0" alt="" /&gt;&lt;/a&gt;</noscript><!--/DO NOT REMOVE/-->
<!-- End SiteCatalyst code version: H.17. -->
<!-- Begin comScore Tag -->
<script>
document.write(unescape("%3Cscript src='" + (document.location.protocol == "https:" ? "https://sb" : "http://b")
+ ".scorecardresearch.com/beacon.js' %3E%3C/script%3E"));
</script><script src="http://b.scorecardresearch.com/beacon.js"></script>
<script>
COMSCORE.beacon({
c1:2,
c2:"3000013",
c3:"3000013",
c4:"",
c5:"",
c6:"",
c15:""
});
</script>
<noscript>
&lt;img src="http://b.scorecardresearch.com/b?c1=2&amp;c2=3000013&amp;c3=3000013&amp;c4=&amp;c5=&amp;c6=&amp;c15=&amp;cv=1.3&amp;cj=1" style="display:none" width="0" height="0" alt="" /&gt;
</noscript>
<!-- End comScore Tag -->
</center>
</center>

<!--
<table border="0" width="1080" cellspacing="0" cellpadding="0" id="tbl">

<tr>

<td width="272" valign="top">
xxx
</td>
<td width="722" valign="top">
xxx
</td>


</tr>



</table>
-->
<script type="text/javascript">
//	Cufon.replace('h1');
			Cufon.replace('h1', { fontFamily: 'BellGothic Blk BT' });
			Cufon.replace('h2', {fontFamily: 'Trade Gothic LT Std' });
			//Cufon.replace('span.tickets', {fontFamily: 'Trade Gothic LT Std' });
			//Cufon.replace('span.artistspan', {fontFamily: 'Trade Gothic LT Std' });
			//Cufon.replace('span.datetitle', {fontFamily: 'Trade Gothic LT Std' });
</script>

</body>
</html>