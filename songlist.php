<?php include 'dbconn.php';?>
<?php include 'header.php';?>

<html>
<body style="background:#F6F9FC; font-family:Arial;">
    <div style="width: 80%; margin: 10px 100px; padding: 50px 0 40px;">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">Malayalam</a></li>
            <li><a href="#view2">Tamil</a></li>
            <li><a href="#view3">Hindi</a></li>
            <li><a href="#view4">English</a></li>
        </ul>
        <div class="tabcontents">
            <div id="view1">
		<table style="width:100%">
  		   <tr>
			<th>Sl No.</th>
    			<th>Song Title</th>
			<th>Composer</th>
			<th>Singer</th>
    			<th>Movie</th> 
    			<th>Action</th>
  		   </tr>
		  <?php
			$sql = 'SELECT  * FROM audio_files';
			$retval = mysql_query( $sql, $conn );
			$songnum=1;
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
			 if ( $row['Language'] == "Mal" )
			 { 
			 echo "<tr>";
			 echo "<td> $songnum </td>";
			 echo "<td> {$row['Title']}</td>";
                         echo "<td> {$row['Composer']}</td>";
                         echo "<td> {$row['Singer']}</td>";
			 echo "<td> {$row['Movie']}</td>";
  			 echo "<td><form method='post' action='addsong.php'><button name='add2playlist' class='add2playlist' type='submit' value=' {$row['id']} '>Add to playlist</button></form></td>";
			 echo "</tr>";
			 $songnum = $songnum + 1;
			}
			else
			{continue;}
			}
		 ?>		   
		</table>
            </div>
            <div id="view2">
		<table style="width:100%">
                   <tr>
                        <th>Sl No.</th>
                        <th>Song Title</th>
			<th>Composer</th>
			<th>Singer</th>
                        <th>Movie</th>
                        <th>Action</th>
                   </tr>
                  <?php
                        $sql = 'SELECT * FROM audio_files';
                        $retval = mysql_query( $sql, $conn );
                        $songnum=1;
                        while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
                        {
                         if ( $row['Language'] == "Tam" )
                         {
                         echo "<tr>";
                         echo "<td> $songnum </td>";
                         echo "<td> {$row['Title']}</td>";
                         echo "<td> {$row['Composer']}</td>";
                         echo "<td> {$row['Singer']}</td>";
                         echo "<td> {$row['Movie']}</td>";
                         echo "<td><form method='post' action='addsong.php'><button name='add2playlist' class='add2playlist' type='submit' value=' {$row['id']}'>Add to playlist</button></form></td>";
                         echo "</tr>";
                         $songnum = $songnum + 1;
                        }
			else
                        {continue;}
                        }
                 ?>
                </table>		
            </div>
            <div id="view3">
	     <table style="width:100%">
                   <tr>
                        <th>Sl No.</th>
                        <th>Song Title</th>
                        <th>Composer</th>
                        <th>Singer</th>
                        <th>Movie</th>
                        <th>Action</th>
                   </tr>                  
			<?php
                        $sql = 'SELECT * FROM audio_files';
                        $retval = mysql_query( $sql, $conn );
                        $songnum=1;
                        while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
                        {
                         if ( $row['Language'] == "Hin" )
                         {
                         echo "<tr>";
                         echo "<td> $songnum </td>";
                         echo "<td> {$row['Title']}</td>";
                         echo "<td> {$row['Composer']}</td>";
                         echo "<td> {$row['Singer']}</td>";
                         echo "<td> {$row['Movie']}</td>";
                         echo "<td><form method='post' action='addsong.php'><button name='add2playlist' class='add2playlist' type='submit' value=' {$row['id']}'>Add to playlist</button></form></td>";
                         echo "</tr>";
                         $songnum = $songnum + 1;
                        }                        
			else
                        {continue;}
                        }
                 ?>
                </table>
            </div>
            <div id="view4">
             <table style="width:100%">
                   <tr>
                        <th>Sl No.</th>
                        <th>Song Title</th>
                        <th>Composer</th>
                        <th>Singer</th>
                        <th>Movie</th>
                        <th>Action</th>
                   </tr>
                  <?php
                        $sql = 'SELECT * FROM audio_files';
                        $retval = mysql_query( $sql, $conn );
                        $songnum=1;
                        while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
                        {
                         if ( $row['Language'] == "Eng" )
                         {
                         echo "<tr>";
                         echo "<td> $songnum </td>";
                         echo "<td> {$row['Title']}</td>";
                         echo "<td> {$row['Composer']}</td>";
                         echo "<td> {$row['Singer']}</td>";
                         echo "<td> {$row['Movie']}</td>";
                         echo "<td><form method='post' action='addsong.php'><button name='add2playlist' class='add2playlist' type='submit' value=' {$row['id']}'>Add to playlist</button></form></td>";
                         echo "</tr>";
                         $songnum = $songnum + 1;
                        }                        
			else
                        {continue;}
                        }
                 ?>
                </table>
            </div>

        </div>
    </div>
</body>	
</html>
