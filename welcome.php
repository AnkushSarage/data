
<?php 
 
$link = mysqli_connect("localhost", "root","","aceethethirdeye");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$IssueNo = $_POST['IssueNo'];
$VolumeNo = $_POST['VolumeNo'];
$Year = $_POST['Year'];
$File1 = isset($_POST['File1']);
$filetype = $_FILES["File1"]["type"];
mkdir("Img.$VolumeNo");
$target_path="Img.$VolumeNo/";

$target_path = $target_path . basename( $_FILES['File1']['name'] ); 
$randString = md5(time()); //encode the timestamp - returns a 32 chars long string
  $fileName = $_FILES["File1"]["name"]; //the original file name
  $splitName = explode(".", $fileName); //split the file name by the dot
  $fileExt = end($splitName); //get the file extension
  $newFileName  = strtolower($randString.'.time()'.$fileExt); //join file name and ext.

if ( move_uploaded_file( $_FILES['File1']['tmp_name'], $target_path)) {
			 echo '<p>The file was uploaded</p>';
			} else {
				echo '<p>There was an error uploading your file. Please try again.</p>';
			}
// attempt insert query execution
$sql = "INSERT INTO newsletterdata (IssueNo,VolumeNo,DateTime,Year,File1) VALUES ('$IssueNo','$VolumeNo',NOW(),'$Year','Img.$VolumeNo')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>