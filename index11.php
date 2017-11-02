<!DOCTYPE html>
<html >
<head>
 
  
</head>

<body>

    <?php
    
    $link = mysqli_connect("localhost", "root","","aceethethirdeye");
   $sql ="select * from newsletterdata";
   
   $result = mysqli_query($link,$sql);
   while($row =mysql_fetch_array($result)) {
   echo "div id='img_div'>";    
   echo "<br /> ID: " .$row['ID']. "<br/> <img scr='Img.3/".$row[File1]."'>";
   echo "</div>";
   
   }
   
   ?>  

  <!-- Demo of material design box shadows based on https://medium.com/@Florian/freebie-google-material-design-shadow-helper-2a0501295a2d -->
  <form action="newslett.php" method="post" enctype="multipart/form-data">
    

</form>
</body>
</html>
