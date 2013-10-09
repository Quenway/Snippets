<?php
	//create db connection
	$connection = mysql_connect("localhost", "user", "password");
	if(!$connection)
	{
		die("Database connection failed:" . mysql_error());
	}
 
	// select a dtabase to use
	$db_select = mysql_select_db("database name", $connection);
	if(!$db_select)
	{
		die("Database selection failed:" . mysql_error());
	}
 
 
?>
 
<body>
     $result = mysql_query("SELECT * FROM tablename", $connection);
 
	while ($row = mysql_fetch_array($result))
	{
		echo $row["rownamehere"]." ".$row["rownamehere"]."<br/>";
	}
?>
</body>
 
<?php
mysql_close($connection);
?>
