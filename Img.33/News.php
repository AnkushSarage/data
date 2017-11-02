<?php
$dirname = "media/images/iconized/";
$images = scandir($dirname);
$ignore = Array(".", "..");
foreach($images as $curimg){
if(!in_array($curimg, $ignore)) {
echo "<img src='media/images/iconized/$curimg' /><br>\n";
};
}
?>