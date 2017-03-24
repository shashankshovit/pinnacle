<html>

<head>
	<title>Checking conectivity</title>
</head>

<body>
	<?php 

		//require_once 'db.php'
		$db_server = mysql_connect("shanky", "localhost", "root", "123456");
		if (!$db_server)
			{ die("Unable to connect to MySQL: " . mysql_error()); }
			//mysql_select_db($db_database, $db_server)
		//or die("Unable to select database: " . mysql_error());
		echo "Wonderful ... this works...";
		
		$request = mysql_query("insert into ");


	?>
</body>
</html>