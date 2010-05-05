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
.tickets{ font-size:30px; font-weight:bold; color:#a21b38;}

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
<img src="bar1.gif">
<h2><span id="hd">MAIN STAGE</span>
<img src="shim.gif" width="200" height="6"><img src="bar1.gif"><BR>
<a href="maryjblige.php">MARY J. BLIGE<BR></a>
<a href="aliciakeys.php">ALICIA KEYS<BR></a>
<a href="earthwindandfire.php">EARTH, WIND & FIRE<BR></a>
<a href="kerihilson.php">KERI HILSON<BR></a>
<a href="gladysknight.php">GLADYS KNIGHT<BR></a>
<a href="llcoolj.php">LL COOL J<BR></a>
<a href="monica.php">MONICA<BR></a>
<a href="raphaelsaddiq.php">RAPHAEL SAADIQ<BR></a>
<a href="jillscott.php">JILL SCOTT<BR></a>
<a href="treysongz.php">TREY SONGZ<BR></a>
<a href="charliewilson.php">CHARLIE WILSON<BR></a>
<a href="djsoulsister.php">DJ SOUL SISTER<BR></a>
<BR><img src="bar1.gif"><img src="shim.gif" width="200" height="12">
<span id="hd">SUPER LOUNGE</span>
<img src="shim.gif" width="200" height="8"><img src="bar1.gif"><BR>
<a href="arresteddevelopment.php">ARRESTED DEVELOPMENT<BR></a>
<a href="bigsamsfunkynation.php">BIG SAM'S FUNKY NATION<BR></a>
<a href="chrisettemichelle.php">CHRISETTE MICHELE<BR></a>
<a href="estelle.php">ESTELLE<BR></a>
<a href="delasoul.php">DE LA SOUL<BR></a>
<a href="hot8brassband.php">HOT 8 BRASS BAND<BR></a>
<a href="irmathomas.php">IRMA THOMAS<BR></a>
<a href="irvinmayfield.php">IRVIN MAYFIELD<BR> AND THE NEW ORLEANS<BR> JAZZ ORCHESTRA<BR></a>
<a href="dumpastaphunk.php">IVAN NEVILLE'S DUMPSTAPHUNK<BR></a>
<a href="joe.php">JOE<BR></a>
<a href="kermitruffins.php">KERMIT RUFFINS<BR> AND THE BARBECUE SWINGERS<BR></a>
<a href="lalahhathaway.php">LALAH HATHAWAY<BR></a>
<a href="lauraizibor.php">LAURA IZIBOR<BR></a>
<a href="leojackson.php">LEO JACKSON<BR> AND THE MELODY CLOUDS<BR></a>
<a href="littlefreddieking.php">LITTLE FREDDIE KING<BR></a>
<a href="marymary.php">MARY MARY<BR></a>
<a href="melaniefiona.php">MELANIE FIONA<BR></a>
<a href="mintcondition.php">MINT CONDITION<BR></a>
<a href="rebirthbrassband.php">REBIRTH BRASS BAND<BR></a>
<a href="samruby.php">SAM & RUBY<BR></a>
<a href="shamarrallen.php">SHAMARR ALLEN<BR> AND THE UNDERDAWGS<BR></a>
<a href="soulrebelsbrassband.php">SOUL REBELS BRASS BAND<BR></a>
<a href="war.php">WAR</a><BR><BR>
MORE MAIN STAGE<BR> AND SUPER LOUNGE<BR> ARTISTS TO COME.

</h2>


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
		<div class="content"><span class="artistspan"><a href="marymary.php"><img alt="marymary" height="79" src="profiles/marymary.jpg" width="80">Mary Mary</a></span><span class="artistspan"><a href="irvinmayfield.php"><img height="79" src="profiles/IrvinMayfield.jpg" width="80">Irvin Mayfield and The New Orleans Jazz Orchestra</a></span>	</div>
	</div></h2>
	<h2><div class="date-grid">
		<span class="datetitle">SATURDAY, JULY 3</span>
		<div class="content"><span class="artistspan"><a href="joe.php"><img alt="joe" height="79" src="profiles/joe.jpg" width="80">Joe</a></span><span class="artistspan"><a href="rebirthbrassband.php"><img alt="rebirthbrassband" height="79" src="profiles/RebirthBrass.jpg" width="80">Rebirth Brass Band</a></span>	
		</div>
	</div></h2>
	<h2><div class="date-grid">
		<span class="datetitle">SUNDAY, JULY 4</span>
		<div class="content"><span class="artistspan"><a href="lalahhathaway.php"><img alt="lalah" height="79" src="profiles/LalahHathaway.jpg" width="80">Lalah Hathaway</a></span><span class="artistspan"><a href="dumpstaphunk.php"><img alt="dumpstaphunk" height="79" src="profiles/dumpstaphunk.jpg" width="80">Ivan Neville's Dumpstaphunk</a></span></div>
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
			<div class="content"><span class="artistspan"><a href="arresteddevelopment.php"><img alt="arrested_development" height="79" src="profiles/ArrestedDevelopment.jpg" width="80">Arrested Development</a></span><span class="artistspan"><a href="bigsamsfunkynation.php"><img alt="bigsam" height="79" src="profiles/BigSamsFunkyNation.jpg" width="80">Big Sam's Funky Nation</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SATURDAY, JULY 3</span>
			<div class="content"><span class="artistspan"><a href="lauraizibor.php"><img alt="laura" height="79" src="profiles/LauraIzibor.jpg" width="80">Laura Izibor</a></span><span class="artistspan"><a href="samruby.php"><img alt="samandruby" height="79" src="profiles/SamRuby.jpg" width="80">Sam &amp; Ruby</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SUNDAY, JULY 4</span>
			<div class="content"><span class="artistspan"><a href="shamarrallen.php"><img alt="shamarr allen" height="79" src="profiles/ShamarrAllen.jpg" width="80" border="0">Shamarr Allen and The Underdawgs</a></span></div>
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
			<div class="content"><span class="artistspan"><a href="chrisettemichelle.php"><img alt="chrisette" height="79" src="profiles/ChrisetteMichele.jpg" width="80">Chrisette Michele</a></span><span class="artistspan"><a href="irmathomas.php"><img alt="irma" height="79" src="profiles/IrmaThomas.jpg" width="80">Irma Thomas</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SATURDAY, JULY 3</span>
			<div class="content"><span class="artistspan"><a href="mintcondition.php"><img alt="mintcondition" height="79" src="profiles/MintCondition.jpg" width="80">Mint Condition</a></span><span class="artistspan"><a href="leojackson.php"><img alt="leojackson" height="79" src="profiles/LeoJackson.jpg" width="80">Leo Jackson &amp; Melody Clouds</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SUNDAY, JULY 4</span>
			<div class="content"><span class="artistspan"><a href="estelle.php"><img alt="estelle" height="79" src="profiles/estelle.jpg" width="80" border="0">Estelle</a></span><span class="artistspan"><a href="hot8brassband.php"><img alt="hot8brassband" height="79" src="profiles/hot8.jpg" width="80" border="0">Hot 8 Brass Band</a></span></div>
		</div></h2>
	<div class="clearout"></div>	
	</div>
	<img src="bar2big.jpg"/>
	<br/><br/>
	
	<div class="clearout"></div>
	
	<div  class="block">
		<span class="left wid-250">
		<img alt="lincoln" src="lincoln_logo.png"></span><h2><span class="tickets right"><a href="tickets.php">BUY TICKETS NOW</a></span></h2>
		<div class="clearout"></div>
		<h2><div class="date-grid">
			<span class="datetitle">FRIDAY, JULY 2</span>
			<div class="content"><span class="artistspan"><a href="war.php"><img alt="war" height="79" src="profiles/war.jpg" width="80">WAR</a></span><span class="artistspan"><a href="littlefreddieking.php"><img alt="littlefreddieking" height="79" src="profiles/LittleFreddieKing.jpg" width="80">Little Freddie King</a></span><span class="artistspan"><img alt="ruben" height="79" src="profiles/RubenStuddard.jpg" width="80">Ruben Studdard</span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SATURDAY, JULY 3</span>
			<div class="content"><span class="artistspan"><a href="delasoul.php"><img alt="delasoul" height="79" src="profiles/delasoul.jpg" width="80">De La Soul</a></span><span class="artistspan"><a href="soulrebelsbrassband.php"><img alt="soulrebelbrassband" height="79" src="profiles/SoulRebelsBrassBand.jpg" width="80">Soul Rebels Brass Band</a></span></div>
		</div></h2>
		<h2><div class="date-grid">
			<span class="datetitle">SUNDAY, JULY 4</span>
			<div class="content"><span class="artistspan"><a href="melaniefiona.php"><img alt="melaniefiona" height="79" src="profiles/MelanieFiona.jpg" width="80" border="0">Melanie Fiona</a></span><span class="artistspan"><a href="kermitruffins.php"><img alt="kermitt Ruffins" height="79" src="profiles/KermitRuffins.jpg" width="80">Kermit Ruffins &amp; The BBQ Swingers</a></span><span class="artistspan"><img alt="pjmorgan" height="79" src="profiles/PJmorgan.jpg" width="80">PJ Morton</span></div>
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
<table width="745" border="0">
  <tbody><tr>
    <td><img height="260" width="900" border="0" usemap="#Map" src="emf_footer2.gif"></td>
  </tr>
</tbody></table>
<p>&nbsp;</p>

<map name="Map">
  <area alt="" target="Essence" href="http://www.essence.com" coords="664,220,783,237" shape="rect" onclick="s_objectID=&quot;http://www.essence.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="Essence Music Festival on Facebook" href="http://twitter.com/essencemusic" coords="594,213,625,243" shape="rect" onclick="s_objectID=&quot;http://twitter.com/essencemusic_12&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="Essence Music Festival on Facebook" href="http://www.facebook.com/group.php?gid=1662732956" coords="544,211,577,243" shape="rect" onclick="s_objectID=&quot;http://www.facebook.com/group.php?gid=1662732956_2&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="Essence Music Festival Community" href="http://community.essence.com/group/essencemusicfestival" coords="493,211,525,243" shape="rect" onclick="s_objectID=&quot;http://community.essence.com/group/essencemusicfestival_2&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="New Orleans Online" href="http://www.neworleansonline.com/" coords="385,210,466,237" shape="rect" onclick="s_objectID=&quot;http://www.neworleansonline.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="New Orleans Online" href="http://www.neworleansonline.com/" coords="320,198,374,242" shape="rect" onclick="s_objectID=&quot;http://www.neworleansonline.com/_2&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="New Orleans CVB" href="http://www.neworleanscvb.com/" coords="190,208,309,237" shape="rect" onclick="s_objectID=&quot;http://www.neworleanscvb.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="Louisiana Travel" href="http://www.louisianatravel.com/" coords="102,213,180,242" shape="rect" onclick="s_objectID=&quot;http://www.louisianatravel.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="U.S. ARMY" href="http://www.goarmy.com/index.jsp?iom=I742-10WS-ACNP-01222010-204676-ESSENSE" coords="551,119,607,172" shape="rect" onclick="s_objectID=&quot;http://www.goarmy.com/index.jsp?iom=I742-10WS-ACNP-01222010-204676-ESSENSE_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="Tide" href="http://www.tide.com" coords="455,121,520,173" shape="rect" onclick="s_objectID=&quot;http://www.tide.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="Pantene Pro-V" href="http://www.myblackisbeautiful.com" coords="349,121,417,161" shape="rect" onclick="s_objectID=&quot;http://www.myblackisbeautiful.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="Olay" href="http://www.olay.com/" coords="258,140,315,158" shape="rect" onclick="s_objectID=&quot;http://www.olay.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="My Black Is Beautiful" href="http://www.myblackisbeautiful.com" coords="678,126,738,174" shape="rect" onclick="s_objectID=&quot;http://www.myblackisbeautiful.com/_2&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="HBO" href="http://www.hbo.com" coords="819,57,869,79" shape="rect" onclick="s_objectID=&quot;http://www.hbo.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="AARP" href="http://ad.doubleclick.net/clk;223922190;33539532;c?http://www.aarp.org/blackcommunity" coords="675,60,738,76" shape="rect" onclick="s_objectID=&quot;http://ad.doubleclick.net/clk;223922190;33539532;c?http://www.aarp.org/blackcommunity_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="McDonald's" href="http://www.365black.com/365black/index.jsp" coords="557,38,608,86" shape="rect" onclick="s_objectID=&quot;http://www.365black.com/365black/index.jsp_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="Ford" href="http://www.fordurban.com/?bannerid=home-logo-Essence" coords="451,56,513,80" shape="rect" onclick="s_objectID=&quot;http://www.fordurban.com/?bannerid=home-logo-Essence_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area alt="" target="Covergirl Queen Collection" href="http://www.covergirl.com/" coords="356,49,419,85" shape="rect" onclick="s_objectID=&quot;http://www.covergirl.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
  <area target="Coca-Cola" href="http://www.mycokerewards.com/home.do?WT.mc_id=SOURCEREG:2010ESSENCE" coords="43,75,164,114" shape="rect" onclick="s_objectID=&quot;http://www.mycokerewards.com/home.do?WT.mc_id=SOURCEREG:2010ESSENCE_1&quot;;return this.s_oc?this.s_oc(e):true">
<area target="Coors Light" href="http://www.coorslight.com" coords="256,42,316,86" shape="rect" onclick="s_objectID=&quot;http://www.coorslight.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
<area target="CNN" href="http://www.cnn.com" coords="755,57,798,79" shape="rect" onclick="s_objectID=&quot;http://www.cnn.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
<area target="TBS" href="http://www.tbs.com" coords="759,131,797,174" shape="rect" onclick="s_objectID=&quot;http://www.tbs.com/_1&quot;;return this.s_oc?this.s_oc(e):true">
</map>

</td></tr>  
<!--  <tr>
    <td align="left"><BR>
      <BR>
      <img src="shim.gif" width="40" height="20" align="left"> <a href="http://www.mycokerewards.com/home.do?WT.mc_id=SOURCEREG:2010ESSENCE" target="_blank"><img src="http://www.essencemusicfestival.com/coke.png" align="left" border="0" ></a> <img src="shim.gif" width="35" height="20" align="left"> <a href="http://www.coorslight.com/" target="_blank"><img src="http://www.essencemusicfestival.com/coors.png" align="left" height="40" vspace="20" border="0"></a> <img src="shim.gif" width="35" height="20" align="left"> <a href="http://www.covergirl.com/" target="_blank"><img src="http://www.essencemusicfestival.com/covergirl.png" align="left" height="40" vspace="20"  border="0"></a> <img src="shim.gif" width="35" height="20" align="left"> <a href="http://www.fordurban.com/?bannerid=home-logo-Essence" target="_blank"><img src="http://www.essencemusicfestival.com/ford.png" align="left" height="40" vspace="20" border="0"></a> <img src="shim.gif" width="35" height="20" align="left"> <a href="http://www.365black.com/" target="_blank"><img src="http://www.essencemusicfestival.com/mcdonalds.png" align="left" height="40" vspace="20" border="0"></a> <img src="shim.gif" width="35" height="20" align="left"> <a href="http://www.olay.com/" target="_blank"><img src="http://www.essencemusicfestival.com/olay.png" align="left" height="40" vspace="20" border="0"></a> <img src="shim.gif" width="35" height="20" align="left"> <a href="http://www.pantene.com/" target="_blank"><img src="http://www.essencemusicfestival.com/pantene.png" align="left" height="40" vspace="20" border="0"></a> <img src="shim.gif" width="35" height="20" align="left"> <a href="http://www.goarmy.com/index.jsp?iom=I742-10WS-ACNP-01222010-204676-ESSENSE" target="_blank"><img src="http://www.essencemusicfestival.com/army.png" align="left" height="40" vspace="20" border="0"></a> <img src="shim.gif" width="35" height="20" align="left"> <a href="http://www.aarp.org/blackcommunity" target="_blank"><img src="http://www.essencemusicfestival.com/aarp.png" align="left" height="15" vspace="32" border="0"></a> <img src="shim.gif" width="35" height="20" align="left"> <a href="http://myblackisbeautiful.com/" target="_blank"><img src="http://www.essencemusicfestival.com/myblack.png" align="left" height="50" vspace="20" border="0"></a> <img src="shim.gif" width="35" height="20" align="left"> </td>
  </tr>
  <tr>
    <td align="center" valign="middle"><center>
      <img src="shim.gif" width="56" height="30" align="left"></a> <a href="http://community.essence.com/group/essencemusicfestival" target="_blank"><img src="footer_la.gif" align="left" border="0"><img src="footer_la2.gif" align="left" border="0"></a> <a href="http://www.facebook.com/group.php?gid=40017743324" target="_blank"><img src="footer_city.gif" align="left" border="0"> <a href="http://community.essence.com/group/essencemusicfestival" target="_blank"><img src="footer_ning.gif" align="left" border="0"></a> <a href="http://www.facebook.com/group.php?gid=40017743324" target="_blank"><img src="footer_fb.gif" align="left" border="0"><img src="footer_tw.gif" align="left" border="0"></a> <a href="http://www.essence.com/" target="_blank"><img src="footer_essence.gif" align="left" border="0"></a> </td>
  </tr>
  <tr>
    <td align="center" valign="middle"><center>
      <div id="footer">Executive Produced by Essence Festivals LLC and Produced by Rehage Entertainment, Inc.<br />
        &copy; 2010 Essence Communications Inc. All Rights Reserved | <a href="http://www.essence.com/about/" target="_blank">Our Company</a> | <a href="http://www.essence.com/mediakit/" target="_blank">Media Kit</a> | <a href="http://www.essence.com/about/contact.php" target="_blank">Contact Us</a></div>
      <BR>
      <BR>
      <BR></td>
  </tr>-->
</table>
</td></tr>
</table>

<center><div id="footer">Executive Produced by Essence Festivals LLC and Produced by Rehage Entertainment, Inc.<br>&copy; 2010 Essence Communications Inc. All Rights Reserved | <a target="_blank" href="http://www.essence.com/about/" onclick="s_objectID=&quot;http://www.essence.com/about/_1&quot;;return this.s_oc?this.s_oc(e):true">Our Company</a> | <a target="_blank" href="http://www.essence.com/mediakit/" onclick="s_objectID=&quot;http://www.essence.com/mediakit/_1&quot;;return this.s_oc?this.s_oc(e):true">Media Kit</a> | <a target="_blank" href="http://www.essence.com/about/contact.php" onclick="s_objectID=&quot;http://www.essence.com/about/contact.php_1&quot;;return this.s_oc?this.s_oc(e):true">Contact Us</a><br><br><br><a target="_new" href="http://www.pixod.com/" onclick="s_objectID=&quot;http://www.pixod.com/_1&quot;;return this.s_oc?this.s_oc(e):true">Site by PIXOD</a></div>


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