<?php
$folder = "FlickrHome";
$newline = "\n";
$my_string = '<?xml version="1.0" encoding="UTF-8"?>';
$my_string1 = '<gallery>';
$my_string2 = '<album id="ssp" lgPath="http://www.pixod.com/essence/EMF/'.$folder.'/lg/" tnPath="http://www.pixod.com/essence/EMF/'.$folder.'/tn/" title="Album One" description="Description of Album One" tn="gallery/album1/preview.jpg">';
//$my_string2 = '<album id="ssp" lgPath="http://www.essencemusicfestival.com/'.$folder.'/lg/" tnPath="http://www.essencemusicfestival.com/'.$folder.'/tn/" title="Album One" description="Description of Album One" tn="gallery/album1/preview.jpg">';
$my_string3 = '</album></gallery>';

echo $my_string;
echo $newline;
echo $my_string1;
echo $newline;
echo $my_string2;
echo $newline;
?>
    
<?php
$newline = "\n";

 if ($handle = opendir('./'.$folder.'/tn/')) {
        
       
   while (false !== ($file = readdir($handle)))
      {
      
       
          if ($file != "." && $file != "..")
	  {
          	$thelist .= '<img src="'.$file.'" title="" caption="" link="" target="_blank" pause="" vidpreview="" />' . $newline;
          }
       }
       
      
  closedir($handle);
  }
?>

<?=$thelist?>

<? echo $my_string3; ?>