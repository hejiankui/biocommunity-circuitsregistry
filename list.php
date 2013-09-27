<html>

<body>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="30" colspan="2" align="left" valign="middle"><font color='red'>Wellcome to 3miao community</font></td>
    </tr>

</table>	
 
<?php

 if(@$_GET['submit3'])
{
	echo "<script language='javascript'>alert('delet history');</script>";
	echo "<script language='javascript'>location.href='yhgl/register.php';</script>";
}

 @session_start();
 
	require('conn.php');
	
	$result = mysql_query("SELECT * FROM login",$link);

	
 	echo @$_SESSION['username'];
 	echo "\n";
	

	
?>
<td><a href="destory.php"><input type="submit" name="submit3" value="log out"/></a></td>
<br></br>
<br>here is the main menu of 3 miao community,you can go where ever you like:</br>
<p>to have your logical genetic circuit designed and run			<a href=""><font color='red' a>LGD</font></a></p>
<p>however you can help	design the community by adding new bubbles  <a href=""><font color='red' a>ADD</font></a></p>

</body>
</html>


