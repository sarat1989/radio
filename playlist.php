<?php include 'dbconn.php';?>
<?php include 'header.php';?>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script src="tabcontent.js" type="text/javascript"></script>
<body>
<div class="playlist">
<table style="width:100%">
	<tr>
        	<th>Sl No.</th>
                <th>Song Title</th>
                <th>Movie</th>
        </tr>
	<?php
	$sql = 'SELECT Title, Movie FROM now_playing';
	$retval = mysql_query( $sql, $conn );
	$songnum=1;
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
	echo "<tr>";
	echo "<td> $songnum </td>";
	echo "<td> {$row['Title']}</td>";
	echo "<td> {$row['Movie']}</td>";
	echo "</tr>";
	$songnum = $songnum + 1;
	}
	?>
	</table>
</div>
</body>
</html>

