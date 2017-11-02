<?php
 
 $link = mysqli_connect("localhost", "root","","aceethethirdeye");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$dirname = "NewsLetter Form/Img.3";
$images = scandir($dirname);
$ignore = Array(".", "..");
foreach($images as $curimg){
if(!in_array($curimg, $ignore)) {
echo "<img src='NewsLetter Form/Img.3/$curimg' /><br>\n";
};
}
?>