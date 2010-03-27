<?php

?>
<style>
#source1
{
position:absolute;
left:0px;
top:0px;
z-index:10;
width:800px;
height:70px;
}


#main
{
position:absolute;
left:0px;
top:90px;
z-index:1;
width:100%;
height:100%;
}
</style>

<style type="text/css">
	
	body {
		background-color: #ececec;
		font: .6em/1.3em verdana,arial,helvetica,sans-serif;
		margin:0;
	}

a {

		color: #666;
		font: .6em/1.3em verdana,arial,helvetica,sans-serif;
		margin:0;
}
	#info {
		width: 700px;
		overflow: auto;
	}

	#flashcontent {
		/*border: solid 1px #000;*/
		width: 700px;
		height: 468px;
		/*float: left;*/
		/*margin: 15px 20px;*/
	}

</style>
<body onLoad="init()">
<div id="loading" style="position:absolute; width:100%; text-align:center; top:250px;"><img src="ajax-loader-1.gif" border=0 ></div>
<script>
var ld=(document.all);

var ns4=document.layers;
var ns6=document.getElementById&&!document.all;
var ie4=document.all;

if (ns4)
	ld=document.loading;
else if (ns6)
	ld=document.getElementById("loading").style;
else if (ie4)
	ld=document.all.loading.style;

function init()
{
if(ns4){ld.visibility="hidden";}
else if (ns6||ie4) ld.display="none";
}
</script>


<center>

<img src="<? print $img ?>.jpg" width="800" LOWSRC="ajax-loader-2.gif" >
<BR><BR>
<a href="<? print $img ?>.jpg" target="_blank">ENLARGE</a><BR><BR>
<BR><BR>
<BR><BR>
</center>