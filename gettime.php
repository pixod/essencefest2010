<?php
header("content-type: text/xml");
// prevent caching
header("Expires: Sat, 25 Aug 2010 23:23:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0"); 
header("Pragma: no-cache");

echo'<?xml version="1.0" encoding="utf-8"?>
<data>
  <ms>'.mktime().'</ms>
</data>'
?>