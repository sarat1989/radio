<?php 

include 'dbconn.php';
include 'header.php';

$song_id=$_POST['add2playlist'];
$sql = "SELECT * from audio_files where id='$song_id'";
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
$song_title = $row['Title'];
$song_movie = $row['Movie'];
$song_path = $row['Path']; 
$sql = "INSERT INTO now_playing (Title, Movie, Path, song_id) values ('$song_title','$song_movie','$song_path','$song_id')";
$retval = mysql_query( $sql, $conn );
}
header("Location: http://localhost/radio/songlist.php");
?>
