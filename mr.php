<?php
$no=$_GET['no'];//获取细菌编号
$con = mysql_connect("localhost","root","hjk20121217");
if (!$con) {
		die('Could not connect: ' . mysql_error());
	}//连接服务器
mysql_select_db("db_bacteria2", $con);
$inf = array ();
$information = array ();
$bacteria = mysql_query("SELECT * FROM basicinfo WHERE Ecoid='$no'");
$b = mysql_fetch_array($bacteria);
$number=$b['Ecoid'];
$name=$b['projectname'];
$evidence=$b['evidencelevel'];
$author=$b['author'];
$year=$b['year'];
$contributor=$b['contributor'];
$Email=$b['Email'];
$proimg=$b['prodiagram'];
$des=$b['description'];
$cctimg=$b['cctdiagram'];
$ref=$b['reference'];

$information[0]=$number;
$information[1]=$name;
$information[2]=$evidence;
$information[3]=$author;
$information[4]=$year;
$information[5]=$contributor;
$information[6]=$Email;
$information[7]=$proimg;
$information[8]=$des;
$information[9]=$cctimg;
$inf[0] = implode ("|",$information);

$equ = array ();
$i=0;
$bacteria = mysql_query("SELECT * FROM protocol WHERE Ecoid='$no'");
while($b = mysql_fetch_array($bacteria)){
	if($b['type']=='equipment')
	{
		$equ[$i]=$b['content'];
		$i++;
	}
}
$inf[1] = implode ("|",$equ);

$pro = array ();
$i=0;
$bacteria = mysql_query("SELECT * FROM protocol WHERE Ecoid='$no'");
while($b = mysql_fetch_array($bacteria)){
	if($b['type']=='procedure')
	{
		$pro[$i]=$b['content'];
		$i++;
	}
}

$inf[2] = implode ("|",$pro);

$mat = array ();
$i=0;
$bacteria = mysql_query("SELECT * FROM protocol WHERE Ecoid='$no'");
while($b = mysql_fetch_array($bacteria)){
	if($b['type']=='material')
	{
		$mat[$i]=$b['content'];
		$i++;
	}
}
$inf[3] = implode ("|",$mat);

$inf[4] = $ref;

$out = implode ("$",$inf);
echo $out;
?>