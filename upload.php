<!DOCTYPE html>
<?php include 'dbconn.php';?>
<?php include 'header.php';?>
<?php #include 'playlist.php';?>
<html>
<body>
<div class="uploader">
<form action="upload.php" method="post" enctype="multipart/form-data">
 <h3>Upload an Audio file</h3>
 <label>Title</label><input class="upbox2" type="text" value="Title" name="title"><br><br>
 <label>Composer</label><input class="upbox2" type="text" value="Composer" name="composer"> <br><br>
 <label>Singer</label><input class="upbox2"type="text" value="Singer" name="singer"> <br><br>
 <label>Movie</label><input class="upbox2"type="text" value="Movie" name="movie"> <br><br>
 <label>Language</label>
     <select name="lan" class="upbox2">
	<option value = "Mal">Malayalam</option>
	<option value = "Tam">Tamil</option>
        <option value = "Hin">Hindi</option>
        <option value = "Eng">English</option>
     </select><br><br>
 <label>Select a file</label><input class="upbox2" type="file" name="fileToUpload" id="fileToUpload"> <br><br>
 <input class="upboxsbt" type="submit" value="Upload" name="submit">
</form>
<div>
</body>
</html> 
