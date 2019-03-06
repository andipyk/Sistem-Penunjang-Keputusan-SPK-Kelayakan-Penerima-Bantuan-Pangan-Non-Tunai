<!DOCTYPE html>
<html>
<?php
	require_once 'saw.php';

	$saw = new saw();

	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
		die('Not connected : ' . mysql_error());
	}

    // make sawer the current db
	$db_selected = mysql_select_db('sawer', $link);
	if (!$db_selected) {
		die ('Can\'t use sawer : ' . mysql_error());
	}

?>
<head>
	<title>Kelayakan</title>
</head>
<body>
	<h1>Kelayakan</h1>
	<?php

	$tampilkelayakan = mysql_query("SELECT * FROM kelayakan");
	if (mysql_num_rows($tampilkelayakan)==0) {
		echo "Belum Ada Data";
	}
	else {
		echo "<table border=1>
			  <tr>
			  <th>NIK</th>
			  <th>Skor</th>
			  <th>Status</th>
			  <tr>
			  ";
		while ($row = mysql_fetch_array($tampilkelayakan)) {
			echo "<tr>";
			echo "<td>".$row['NIK']."</td>";
			echo "<td>".$row['Skor']."</td>";
			echo "<td>".$row['Status']."</td>";
			
			echo "</tr>";
		}
		echo "</table>";
	}

	?>
</body>
</html>