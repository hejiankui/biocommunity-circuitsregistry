<?php
	//$fp=fopen("flare.json",'w');

//	if($dbc=mysql_connect("localhost","root","")) echo "CONNECTED TO SQL\t";
//    if (mysql_select_db("db_bacteria2",$dbc)) echo "SELEVTED";//数据库

	
	$query="SELECT * FROM basicinfo";
	$result=mysql_query($query,$dbc);
	$row=mysql_fetch_array($result);
	$myname=$row['projectname'];
	$des=$row['description'];
	//fwrite($fp, "[{\"name\":\"".$myname."\",\"des\":\"".$des."\"}");
	echo("[{\"name\":\"".$myname."\",\"des\":\"".$des."\"}");
	
	while($row = mysql_fetch_array($result)){
	$myname=$row['projectname'];
	$des=$row['description'];
	//fwrite($fp, ",{\"name\":\"".$myname."\",\"des\":\"".$des."\"}");
	echo(",{\"name\":\"".$myname."\",\"des\":\"".$des."\"}");
		}
	//fwrite($fp,"]");
	echo("]");
	fclose($fp);
?>