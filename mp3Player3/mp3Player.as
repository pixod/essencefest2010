// Setup sound object
var s:Sound = new Sound();
//s.onSoundComplete = playSong;
s.onSoundComplete = pauseIt;
s.setVolume(0);
trace('xxxxxxxxxxxxx');
// Array of songs
var sa:Array = new Array();

// Currently playing song
var cps:Number = -1;



// Position of music

var pos:Number;

// Load the songs XML
var xml:XML = new XML();
xml.ignoreWhite = true;
xml.onLoad = function()
{
	var nodes:Array = this.firstChild.childNodes;
	for(var i=0;i<nodes.length;i++)
	{
		sa.push(new Song(nodes[i].attributes.url, nodes[i].attributes.artist, nodes[i].attributes.track, nodes[i].attributes.label, nodes[i].attributes.songID));

	}
	playSong();

}

xml.load("songs.xml");

// Play the MP3 File
function playSong():Void
{

	s = new Sound();

	s.onSoundComplete = playSong;

	s.setVolume(75);

	mute.gotoAndStop("on");
	if(cps == sa.length - 1)
	{
		cps = 0;
		s.loadSound(sa[cps].earl, true);

	}
	else
	{
		s.loadSound(sa[++cps].earl, true);

	}

	artistInfo.text = sa[cps].artist;
	trackInfo.text = sa[cps].track;
	labelInfo.text = sa[cps].label;
//	songIDTxt.text = sa[cps].songID;
	albumArt.loadMovie(sa[cps].songID+'.jpg');
	
//mm	trackInfo.text = sa[cps].artist + " - " + sa[cps].track;
	playPause.gotoAndStop("pause");

	textPos = 0;

}



// Pauses the music

function pauseIt():Void

{

	pos = s.position;

	s.stop();

}



// Pauses the music

function unPauseIt():Void

{

	s.start(pos/1000);

}



// Music Controls



// Play/Pause Toggle

playPause.onRollOver = function()

{

	if(this._currentframe == 1) this.gotoAndStop("pauseOver");

	else this.gotoAndStop("playOver");

}



playPause.onRollOut = playPause.onReleaseOutside = function()

{

	if(this._currentframe == 10) this.gotoAndStop("pause");

	else this.gotoAndStop("play");

}



playPause.onRelease = function()

{

	if(this._currentframe == 10)

	{

		this.gotoAndStop("playOver");

		this._parent.pauseIt();

	}

	else

	{

		this.gotoAndStop("pauseOver");

		this._parent.unPauseIt();

	}

}



// Next Button

next.onRollOver = function()

{

	this.gotoAndStop("nextOver");

}



next.onRollOut = next.onReleaseOutside = function()

{

	this.gotoAndStop("next");

}



next.onRelease = function()

{

	this._parent.playSong();

}



// Mute Button

mute.onRollOver = function()

{

	if(this._currentframe == 1) this.gotoAndStop("onOver");

	else this.gotoAndStop("offOver");

}



mute.onRollOut = mute.onReleaseOutside = function()

{

	if(this._currentframe == 10) this.gotoAndStop("on");

	else this.gotoAndStop("off");

}



mute.onRelease = function()

{

	if(this._currentframe == 10)

	{

		this.gotoAndStop("offOver");

		s.setVolume(0);

	}

	else

	{

		this.gotoAndStop("onOver");

		s.setVolume(75);

	}

}





///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Text scroller bonus code



var size:Number = 21;

var textPos:Number = 0;

var intervalID:Number = setInterval(scroller, 1000);


/*mm
function scroller():Void

{

	var t:String = (sa[cps].artist + " - " + sa[cps].track);

	if(textPos+size < t.length)

	{

		textPos++;

		trackInfo.text = (sa[cps].artist + " - " + sa[cps].track).substring(textPos, textPos+size);

	}

	else 

	{

		clearInterval(intervalID);

		intervalID = setInterval(scroller2, 1000);

	}

}



function scroller2():Void

{

	var t:String = (sa[cps].artist + " - " + sa[cps].track);

	if(textPos > 0)

	{

		textPos--;

		trackInfo.text = (sa[cps].artist + " - " + sa[cps].track).substring(textPos, size);

	}

	else 

	{

		clearInterval(intervalID);

		intervalID = setInterval(scroller, 1000);

	}

}

*/

















