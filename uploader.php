<!DOCTYPE html>
<html>
<title>Technomics - Radio</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<body>
<div class="header">
<div class="logo">
      <img class=techlogo src="images/logo-white.png" />
</div>
<div class=headermenu>
<a href="http://technomicssolutions.com/about.php">About Us</a>
<a href="http://technomicssolutions.com/products.php">Our Products</a>
<a href="http://technomicssolutions.com/services.php">Our Services</a>
<a href="http://technomicssolutions.com/portfolio.php">Our Portfolio</a>
<a href="http://technomicssolutions.com/contact.php">Contact Us</a>
</div>
</div>

<?php
$dbhost = 'localhost:3036';
$dbuser = 'radio';
$dbpass = 'radio';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('radio');

$target_dir = 'uploads/' . $_POST["lan"].'/';
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file1 = $target_dir . $_POST["title"];
$new_file_name = $_POST["title"].'--'.$_POST["movie"].'.'.$imageFileType;
$target_file1 = $target_dir . $new_file_name;

if($imageFileType != "mp3" && $imageFileType != "wmv") {
    echo "Sorry, only MP3 WMV files are allowed.";
    $uploadOk = 0;
}
else {
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file1); 
    echo '<script>
	alert("Successfully uploaded !!!");
	</script>';
    }
$sql = "INSERT INTO audio_files (Title, Composer, Singer, Movie, Language, Path) VALUES ('$_POST[title]', '$_POST[composer]', '$_POST[singer]', '$_POST[movie]', '$_POST[lan]','$target_file1')";
$retval = mysql_query( $sql, $conn );
?> 
